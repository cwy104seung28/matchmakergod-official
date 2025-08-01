<?php
require 'vendor/autoload.php';


if (!isset($_SESSION)) {
  session_start();
}

ob_start();


ini_set('date.timezone', 'Asia/Taipei');


error_reporting(E_ALL ^ E_DEPRECATED);



// 語系 預設是tw
// if (!isset($_SESSION['lang'])) {
//   $_SESSION['lang'] = 'tw';
// }else if(isset($_GET['lang']) && !empty($_GET['lang']) && $_SESSION['lang'] != $_GET['lang']){
//   if ($_GET['lang'] == 'tw') {
//     $_SESSION['lang'] = 'tw';
//   }else if($_GET['lang'] == 'en'){
//     $_SESSION['lang'] = 'en';
//   }else if($_GET['lang'] == 'jp'){
//     $_SESSION['lang'] = 'jp';
//   }else{
//     $_SESSION['lang'] = 'tw';
//   }
// }else{
//   if ($_SESSION['lang'] != 'tw' && $_SESSION['lang'] != 'en' && $_SESSION['lang'] != 'jp') {
//     $_SESSION['lang'] = 'tw';
//   }
// }




$config = [
  'templates.path' => './'
];

$app = new \Slim\Slim($config);


$app->hook('slim.before', function () use ($app) {
  $req = $app->request;
  $host = $req->getHost();
  $port = $_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443 ? ':' . $_SERVER['SERVER_PORT'] : '';
  $root = $req->getRootUri();


  // if ($_SESSION['lang'] == 'tw') {
  //   $lanpath = '';
  // }else{
  //   $lanpath = '/en';
  // }

  $lanpath = '';


  // zeabur
  $mode = ($_SERVER['SERVER_NAME'] === 'localhost') ? 'development' : 'production';


  if ($mode == 'development') {
    $baseurl = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $host . $port . $root . $lanpath;
  }else{
    $baseurl = "https://" . $host . $root . $lanpath;
  }


  // aws
  // $baseurl = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $host . $port . $root . $lanpath;


  $app->view()->appendData(array('baseurl' => $baseurl));
});


$app->get('(/:path+)/images/:file', function ($path, $file) use ($app) {

  // if ($_SESSION['lang'] == 'tw') {
  //   $imagePath = '/views/images/' . $file;
  // }else{
  //   $imagePath = '/en/views/images/' . $file;
  // }

  $imagePath = '/views/images/' . $file;


  $fullPath = __DIR__ . $imagePath;

  if (file_exists($fullPath) && is_file($fullPath)) {
    $app->response->headers->set('Content-Type', mime_content_type($fullPath));
    readfile($fullPath);
  } else {
    $app->response->setStatus(404);
  }
});


$app->notFound(function () use ($app) {
  $app->render('404.php');
});

// $app->get('/en(/:path+)/log1n', function () use ($app) {
//   $app->redirect('https://172-104-110-125.ip.linodeusercontent.com/wp-admin');
// });

$app->get('(/:path+)/log1n', function () use ($app) {
  $app->redirect('https://frassicms.zeabur.app/wp-admin');
});

$app->get('/', function () use ($app) {
  $app->render('views/index.php');
});

$app->get('/cart-1', function () use ($app) {
  $app->render('views/cart1.php');
});

$app->get('/cart-2', function () use ($app) {
  $app->render('views/cart2.php');
});

$app->get('/cart-3', function () use ($app) {
  $app->render('views/cart3.php');
});

$app->get('/cart-4', function () use ($app) {
  $app->render('views/cart4.php');
});

$app->get('/cart', function () use ($app) {
  $app->render('views/cart.php');
});

$app->get('/ceremony', function () use ($app) {
  $app->render('views/ceremony.php');
});

$app->get('/ceremony-detail', function () use ($app) {
  $app->render('views/ceremony_detail.php');
});

$app->get('/ceremony-signup', function () use ($app) {
  $app->render('views/ceremony_signup.php');
});


$app->get('/project', function () use ($app) {
  $app->render('views/project.php');
});

$app->get('/project(/:p)', function ($p = null) use ($app) {
  $app->render('views/project.php', [
    'p' => $p,
  ]);
})->conditions([
  'p' => '\d{1,2}',
]);

// category要寫在前面 不然會進到內頁
$app->get('/project/category/:slug(/:p)', function ($slug = null, $p = null) use ($app) {
  $app->render('views/project.php', [
    'slug' => $slug,
    'p' => $p,
  ]);
});

$app->get('/detail/:slug', function ($slug) use ($app) {
  $app->render('views/detail.php', [
    'slug' => $slug,
  ]);
})->conditions([
  'slug' => '.{2,}',
]);

$app->get('/about', function () use ($app) {
  $app->render('views/about.php');
});

$app->get('/service', function () use ($app) {
  $app->render('views/service.php');
});

$app->get('/news(/:p)', function ($p = null) use ($app) {
  $app->render('views/news.php', [
    'p' => $p,
  ]);
})->conditions([
  'p' => '\d{1,2}',
]);

$app->get('/news/category/:slug(/:p)', function ($slug = null, $p = null) use ($app) {
  $app->render('views/news.php', [
    'slug' => $slug,
    'p' => $p,
  ]);
});

$app->get('/news/:slug', function ($slug) use ($app) {
  $app->render('views/news_detail.php', [
    'slug' => $slug,
  ]);
})->conditions([
  'slug' => '.{2,}',
]);

$app->get('/movies(/:p)', function ($p = null) use ($app) {
  $app->render('views/movies.php', [
    'p' => $p,
  ]);
})->conditions([
  'p' => '\d{1,2}',
]);

$app->get('/movies/category/:slug(/:p)', function ($slug = null, $p = null) use ($app) {
  $app->render('views/movies.php', [
    'slug' => $slug,
    'p' => $p,
  ]);
});

$app->get('/movies/:slug', function ($slug) use ($app) {
  $app->render('views/movies_detail.php', [
    'slug' => $slug,
  ]);
})->conditions([
  'slug' => '.{2,}',
]);

$app->get('/feature', function () use ($app) {
  $isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

  if($isMob){
    $app->render('views/featureMobile.php');
  }else{
    $app->render('views/feature.php');
  }
});

$app->get('/contact', function () use ($app) {
  $app->render('views/contact.php');
});


// 多語系另外寫
$app->get('/en/index', function () use ($app) {
  $app->render('en/views/index.php');
});

$app->get('/en/about', function () use ($app) {
  $app->render('en/views/about.php');
});


$app->run();
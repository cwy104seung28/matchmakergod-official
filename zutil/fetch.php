<?php
require_once 'vendor/autoload.php';
require_once 'zutil/setting.php';


$ryder_slug = (isset($slug)) ? $slug : '';

$fetchquery = <<<GRAPHQL
	{
		# news
	  posts(where: {orderby: {field: MENU_ORDER, order: ASC}, categoryName: "$ryder_slug"}, first: 1000) {
	    nodes {
	      title
	      slug
	      date
	      categories {
          nodes {
            name
          }
        }
        featuredImage{
	        node{
	          sourceUrl
	        }
	      }
	    }
	  }
	}
GRAPHQL;

$allfetch = graphqlQuery($fetchquery);


// 頁面中這樣用
// $work = $allfetch->posts->nodes;
?>
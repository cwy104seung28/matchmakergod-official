<?php
if (!isset($_SESSION)) {
	session_start();
}

ob_start();

ini_set('date.timezone', 'Asia/Taipei');


function getEndPoint() {
	return ($_SERVER['SERVER_NAME'] === 'localhost') ? 'http://localhost:10018/graphql' : 'wordpress.zeabur.internal/graphql';
}


function getGuzzleClient() {
	static $client;
	if (!$client) {
		$client = new \GuzzleHttp\Client([
			'http_version' => 'HTTP/2.0'
		]);
	}
	return $client;
}


function graphqlQuery($query) {
	$client = getGuzzleClient();
	$endPoint = getEndPoint();

	$response = $client->request('POST', $endPoint, [
		'headers' => [
			'Content-Type' => 'application/json',
		],
		'json' => [
			'query' => $query
		]
	]);

	$json = $response->getBody()->getContents();
	$body = json_decode($json);

	return $body->data;
}


function graphqlCreate($query, $token) {
	$client = getGuzzleClient();
	$endPoint = getEndPoint();

	$response = $client->request('POST', $endPoint, [
		'headers' => [
			'Content-Type' => 'application/json',
			'Authorization' => 'Bearer ' . $token,
		],
		'json' => [
			'query' => $query
		]
	]);
}


function ryderOrder($array, $orderString) {
  // 將逗號分隔的字串轉換為陣列
	$orderArray = explode(',', $orderString);

  // 重新排序陣列
	$newArray = array();
	foreach ($orderArray as $id) {
		foreach ($array as $item) {
			if ($item->databaseId == $id) {
				$newArray[] = $item;
				break;
			}
		}
	}

	return $newArray;
}
?>
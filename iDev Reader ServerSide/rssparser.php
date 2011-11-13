<?php
	include('functions.php');
	
	$rssFeedURL = 'http://idevblogaday.com/feed/rss';
	$rssFeed = fetch_rss_feed($rssFeedURL, 10);

	//JSON OUTPUT
	$articlesArray = array();
	foreach ($rssFeed as $value) {

		$articlesArray[] = array('article_url' => $value['link'],
						   'article_title' => $value['title']
						  );
						  

	}
	
	header('Content-Type: application/json');
	echo '{"articles":' . json_encode($articlesArray)  . '}';
?>
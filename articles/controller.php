<?php
require_once('model.php');


//3 - Authentication
/* Create a TwitterOauth object with consumer/user tokens. */
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);

//4 - Start Querying
$query = 'https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=NOE_interactive&count=1'; //Your Twitter API query
$content = $connection->get($query);

    $articles = showArticlesListe();
    
	//1 - Settings (please update to math your own)
	$consumer_key='G6K4ERwvEehE4Mwv3N6ql89ge'; //Provide your application consumer key
	$consumer_secret='yjzYMDuAPFDV9mfF851jKHU8juut48L3QokT94VdDkbQVIJsbM'; //Provide your application consumer secret
	$oauth_token = '799633898250600449-xdas8JGJZpvfGTjLjDKYa8ZQBu1vpbJ'; //Provide your oAuth Token
	$oauth_token_secret = 'pIkt4aFrHM1745AmiACMLk9CZkbLv2ryAjfggTW06hbRq'; //Provide your oAuth Token Secret


include_once('view.php');

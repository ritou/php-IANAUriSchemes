<?php

$path_extra = dirname(__FILE__);
$path = ini_get('include_path');
$path = $path_extra . PATH_SEPARATOR . $path;
ini_set('include_path', $path);

include("./IANAUriSchemes.php");

$schemes_array = array(
  "http",
  "https",
  "ftp",
  "fb",
  "echofon"
);

foreach ( $schemes_array as $scheme ){
  print "Scheme : ".$scheme."\n";
  print "Type : ".IANAUriSchemes::getSchemeType( $scheme )."\n\n";
}

$uri_array = array (
  "http://www.yahoo.co.jp/",
  "https://login.yahoo.co.jp/config/login",
  "simplytweet:?timeline=directmessages",
  "svn://user:pass@host.com/path/trunk",
  "skype:+353991234567?call",
  "twitterrific:///post?message=",
  "x-birdfeed://"
);

foreach ( $uri_array as $url ) {
  print "URL : ".$url."\n";
  print "Type : ".IANAUriSchemes::getSchemeTypeFromUrl( $url )."\n\n";
}

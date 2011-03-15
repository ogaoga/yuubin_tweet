<?php

$patterns = array('/^(https?:\/\/[^"]+)[\s]$/',
                  '/@([\w]+)([\W]*)/',
                  '/#([^"]+)/');
$replaces = array('<a href="$1" rel="nofollow" target="_blank">$1</a>',
                  '@<a href="http://twtr.jp/$1">$1</a>$2',
                  '<a href="http://search.twitter.com/search?q=%23$1">#$1</a>');

$tweetArray = array();
foreach ($tweets as $tweet) {
  $tweetArray[] = $tweet->text;
}
$replaced = preg_replace($patterns, $replaces, $tweetArray);

$s = '';
for ( $i = 0 ; $i < count($tweets) ; $i++ ) {
  $s .= '<p>';
  $s .= '<b>'.$tweets[$i]->from_user.'</b>';
  $s .= ' ';
  $s .= $replaced[$i];
  $s .= '</p>';
  $s .= '<hr>';
}
echo $s;

?>

<?
// title
echo $this->element('title');

// tweets
if ( $code ) {
  if ( count($tweets) ) {
    // form
    echo $this->element('form');

    // tweets
    foreach ($tweets as $tweet) {
      echo $tweet->text;
      echo '<br />';
    }
  }
  else {
    // error 
    echo '<p>〒'.h($code).'のツイートは見つかりませんでした。</p>';
  }
}
else {
  echo $this->element('explain');
}

// form
echo $this->element('form');

?>

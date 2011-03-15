<?
// title
echo $this->element('title');

// tweets
if ( $code ) {
  if ( count($tweets) ) {
    // form
    echo $this->element('form');

    // tweets
    echo $this->element('tweets');
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

<?
// tweets
if ( $code ) {
  if ( count($tweets) ) {
    foreach ($tweets as $tweet) {
      echo $tweet->text;
      echo '<br />';
    }
  }
  else {
    echo 'no tweets of #'.$code;
  }
}

// form
echo $this->Form->create(null, array('type'=>'get'));
echo $this->Form->input('Main.code',
                        array('label' => 'Postal code',
                              'value' => $code,
                              'div' => false ));
echo $this->Form->end(array('label'=>'Search',
                            'div'=>false)); 

?>

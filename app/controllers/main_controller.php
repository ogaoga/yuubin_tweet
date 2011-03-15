<?php

class MainController extends AppController {
	var $uses = array();
	var $name = 'Main';

  function beforeFilter() {
    parent::beforeFilter();

    if ( isset($this->params['url']['code']) ) {
      $code = trim($this->params['url']['code']);
      if ( strlen($code) > 0 ) {
        $this->redirect('/'.$code);
      }
    }
  }
  
  function view($code = '') {
    $code = trim($code);
    $tweets = array();
    if ( strlen($code) ) {
      $query_url = 'http://search.twitter.com/search.json?locale=ja&q=%23'.$code;
      $result = file_get_contents($query_url);
      if ( $result ) {
        $result = json_decode($result);
        // show timeline
        $tweets = $result->results;
      }
    }
    else {
      // show top
    }

    // set 
    $this->set('code', $code);
    $this->set('tweets', $tweets);
  }
}

<?php

class MainController extends AppController {
	var $uses = array();
	var $name = 'Main';

  function beforeFilter() {
    parent::beforeFilter();

    // input and redirect
    $this->convert_input_encode();

    $code = '';
    if ( isset($this->params['url']['code']) ) {
      $code = trim($this->params['url']['code']);
      if ( strlen($code) > 0 ) {
        if ( $code[0] == '#' ) {
          $code = substr($code, 1);
        }
        $this->redirect('/'.$code);
      }
      else {
        $this->redirect('/');
      }
    }
    else if ( isset($this->params['pass'][0]) ) {
      $code = trim($this->params['pass'][0]);
    }
    else {
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

  function afterFilter() {
    // output 
    $this->convert_output_encode();
  }
}

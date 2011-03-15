<?php

class AppController extends Controller {
  //
  function convert_output_encode(){
    $this->output = mb_convert_encoding($this->output,
                                        'Shift_JIS', 'UTF-8');
  }
  function convert_input_encode() {
    if( ! empty($this->data) ) {
      mb_convert_variables('UTF-8', 'SJIS-win', $this->data);
    }
  }
}

?>
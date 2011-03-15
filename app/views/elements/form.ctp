<?php
// form
echo $this->Form->create(null, array('type'=>'get'));
echo $this->Form->input('Main.code',
                        array('label' => '郵便番号',
                              'value' => $code,
                              'div' => false,
                              'maxlength'=>7,
                              'istyle'=>4,
                              'format'=>'7N',
                              'mode'=>'numeric',
                              ));
echo $this->Form->end(array('label'=>'検索',
                            'div'=>false)); 
?>

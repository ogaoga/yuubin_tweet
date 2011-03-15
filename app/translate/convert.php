<?php
$keys = array('region', 'code3', 'code7',
              'pref_yomi', 'city_yomi', 'detail_yomi',
              'pref', 'city', 'detail',
              'd0', 'd1', 'd2', 'd3', 'd4', 'd5');
$result = array();

$row = 1;
if (($handle = fopen('KEN_ALL.CSV', "r")) !== FALSE) {
  while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    echo "<p> $num fields in line $row: <br /></p>\n";
    $row++;
    for ($c=0; $c < $num; $c++) {
      //echo $data[$c] . "<br />\n";
      $result[(int)($data[2])] = array('pref'=>$data[6],
                                       'city'=>$data[7],
                                       'addr'=>$data[8]);
    }
  }
  fclose($handle);

  file_put_contents('code.json', json_encode($result));
}
?>

<?
// title
$title = (strlen($code) > 0) ? '〒'.h($code).'の検索結果' : '郵便番号Twitter検索';
$titleForLayout = (strlen($code)>0) ? $title.' | 郵便番号Twitter検索' : '郵便番号Twitter検索';

$this->viewVars['title_for_layout'] = $titleForLayout;
echo '<h1>'.$title.'</h1>';
?>

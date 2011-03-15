<?php echo '<?xml version="1.0" encoding="Shift_JIS"?>' ?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=Shift-JIS">
<title><?= $title_for_layout ?></title>
</head>
<body>

<?= $content_for_layout; ?>

<h3>ご利用上の注意</h3>
<ul>
<li>このページは、Twitter の検索結果を表示するページであり、その内容を保証するものではありません。情報の信憑性は別途ご確認ください。</li>
<li>Twitter の API の制限により、すべてのツイートが表示できなかったり、ご利用できない場合があります。</li>
<li>ご要望等は、 <a href="http://twitter.com/ogaoga" target="_blank">@ogaoga</a> まで。</li>
</ul>

<div class="footer">
<br><hr>
&copy; <?= date('Y') ?> ogaoga.org
</div>
</body>
</html>

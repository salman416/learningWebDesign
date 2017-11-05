<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-biz-red.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-biz-red.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-biz-red" style="background-color:#1A2223;font-size:14px;font-family:'Open Sans','Helvetica Neue', 'Helvetica', Arial, Verdana, sans-serif;color:#ECECEC;max-width:450px;min-width:150px" method="post"><div class="title"><h2>Contact Us</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title"></label><input class="large" type="text" name="input" placeholder="Your Name"/></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title"></label><input class="large" type="email" name="email" value="" placeholder="Your Email"/></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title"></label><input class="large" type="text" name="input1" placeholder="Your Subject"/></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title"></label><textarea class="small" name="textarea" cols="20" rows="5" placeholder="Your Message"></textarea></div>
<div class="submit"><input type="submit" value="Sent"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-biz-red.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>
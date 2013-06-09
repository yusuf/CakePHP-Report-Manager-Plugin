<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="shortcut icon" href="image/favicon.ico" />
    <link rel="apple-touch-icon" href="image/iosicon.png" />
    <title><?=$title_for_layout;?></title>
    <!--    PRODUCTION CSS -->
    <?=$this->Html->css('/css/reset', null, array('media' => 'all')) ?>
    <?=$this->Html->css('/css/css_compiled/ticketing-min',null, array('media' => 'all')) ?>
    <?=$this->Html->css('/css/css_compiled/ticketing-min-part2',null,array('media' => 'all')) ?>
    <?=$this->Html->css('/css/css_compiled/ticketing-responsive-min',null,array('media' => 'all')) ?>
    <?=$this->Html->css('/css/css_compiled/slideshow', null, array('media' => 'all')) ?>
    <?=$this->Html->css('/css/css_compiled/reveal', null, array('media' => 'all')) ?>
    <?=$this->Html->css('/css/plugins/zebra_datepicker/zebra_datepicker', null, array('media' => 'all')) ?>
    <?=$this->Html->css('/css/plugins/timePicker/timePicker', null, array('media' => 'all')) ?>
    <?=$this->Html->css('/css/style', null, array('media' => 'all')) ?>
	<!--[if IE]>
	        <link rel="stylesheet" type="text/css" href="css/css_compiled/ie-only-min.css" />
	<![endif]-->

	<!--[if lt IE 9]>
	        <link rel="stylesheet" type="text/css" href="css/css_compiled/ie8-only-min.css" />
	        <script type="text/javascript" src="js/plugins/excanvas.js"></script>
	        <script type="text/javascript" src="js/plugins/html5shiv.js"></script>
	        <script type="text/javascript" src="js/plugins/respond.min.js"></script>
	        <script type="text/javascript" src="js/plugins/fixFontIcons.js"></script>
	<![endif]-->
	<script>
		var docRoot = '<?php echo $this->Html->url('/'); ?>';
	</script>

	<?=$this->Html->script('/js/jquery-1.8.3.min.js') ?>
	<?=$this->Html->script('/js/jquery-ui-1.10.0.min.js') ?>
	<?=$this->Html->script('/js/plugins/jquery.pnotify.min') ?>
	<?=$this->Html->script('/js/bootstrap/bootstrap.min') ?>
	<?=$this->Html->script('/js/plugins/less-1.3.1.min') ?>
	<?=$this->Html->script('/js/plugins/xbreadcrumbs') ?>
	<?=$this->Html->script('/js/plugins/jquery.maskedinput-1.3.min') ?>
	<?=$this->Html->script('/js/plugins/jquery.maskedinput-1.3.min') ?>
	<?=$this->Html->script('/js/plugins/jquery.autotab-1.1b') ?>
	<?=$this->Html->script('/js/plugins/jquery.autotab-1.1b') ?>
	<?=$this->Html->script('/js/plugins/charCount'); ?>
	<?=$this->Html->script('/js/plugins/jquery.textareaCounter'); ?>
	<?=$this->Html->script('/js/plugins/elrte.min'); ?>
	<?=$this->Html->script('/js/plugins/elrte.en'); ?>
	<?=$this->Html->script('/js/plugins/select2'); ?>
	<?=$this->Html->script('/js/plugins/jquery-picklist.min'); ?>
	<?=$this->Html->script('/js/plugins/jquery.validate.min'); ?>
	<?=$this->Html->script('/js/plugins/additional-methods.min'); ?>
	<?=$this->Html->script('/js/plugins/jquery.form'); ?>
	<?=$this->Html->script('/js/plugins/jquery.metadata'); ?>
	<?=$this->Html->script('/js/plugins/jquery.mockjax'); ?>
	<?=$this->Html->script('/js/plugins/jquery.uniform.min'); ?>
	<?=$this->Html->script('/js/plugins/jquery.tagsinput.min'); ?>
	<?=$this->Html->script('/js/plugins/jquery.rating.pack'); ?>
	<?=$this->Html->script('/js/plugins/farbtastic'); ?>
	<?=$this->Html->script('/js/plugins/jquery.timeentry.min'); ?>
	<?=$this->Html->script('/js/plugins/jquery.dataTables.min'); ?>
	<?=$this->Html->script('/js/plugins/jquery.jstree'); ?>
	<?=$this->Html->script('/js/plugins/dataTables.bootstrap'); ?>
	<?=$this->Html->script('/js/plugins/jquery.mousewheel.min'); ?>
	<?=$this->Html->script('/js/plugins/jquery.mCustomScrollbar'); ?>
	<?=$this->Html->script('/js/plugins/jquery.flot'); ?>
	<?=$this->Html->script('/js/plugins/jquery.flot.stack'); ?>
	<?=$this->Html->script('/js/plugins/jquery.flot.pie'); ?>
	<?=$this->Html->script('/js/plugins/jquery.flot.resize'); ?>
	<?=$this->Html->script('/js/plugins/raphael.2.1.0.min'); ?>
	<?=$this->Html->script('/js/plugins/justgage.1.0.1.min'); ?>
	<?=$this->Html->script('/js/plugins/jquery.qrcode.min'); ?>
	<?=$this->Html->script('/js/plugins/jquery.clock'); ?>
	<?=$this->Html->script('/js/plugins/jquery.countdown'); ?>
	<?=$this->Html->script('/js/plugins/jquery.jqtweet'); ?>
	<?=$this->Html->script('/js/plugins/jquery.cookie'); ?>
	<?=$this->Html->script('/js/plugins/bootstrap-fileupload.min'); ?>
	<?=$this->Html->script('/js/plugins/prettify/prettify'); ?>
	<?=$this->Html->script('/js/slideshow.min'); ?>
	<?=$this->Html->script('/js/jquery.reveal'); ?>
	<?=$this->Html->script('/js/plugins/zebra_datepicker'); ?>
	<?=$this->Html->script('/js/plugins/timePicker.min'); ?>

	<?=$this->Html->script('/js/common'); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
</head>
    <?=$content_for_layout;?>
    <?=$this->Js->writeBuffer();?>
  	<!-- Google Analytics -->
	<!--    <script type="text/javascript">

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'xxxxxxxxx']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

	</script> -->

</body>
</html>
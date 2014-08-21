<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Caleb Portal</title>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/style.default.css" type="text/css" />

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/responsive-tables.css">
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/responsive-tables.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/custom.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/excanvas.min.js"></script><![endif]-->
<link rel="shortcut icon" type="image/png" href="<?php echo Yii::app()->request->baseUrl;?>/images/favicon.ico"/>
</head>

<body>

<!-- Bootstrap core CSS  Bootstrap is registered by Yiistrap-->
<?php  Yii::app()->bootstrap->register(); ?>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->
<div class="mainwrapper">
    <div class="header">
        <?php $this->Widget('SiteHeader');?>
    </div>
    
    <div class="leftpanel">
        <?php $this->Widget('UserMenu');?>
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        <?php echo $content; ?>
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->



<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!-- <script>
     var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
     (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
     g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
     s.parentNode.insertBefore(g,s)}(document,'script'));
 </script>-->

<script type="text/javascript">
    jQuery(document).ready(function() {
        
      // simple chart
		var flash = [[0, 11], [1, 9], [2,12], [3, 8], [4, 7], [5, 3], [6, 1]];
		var html5 = [[0, 5], [1, 4], [2,4], [3, 1], [4, 9], [5, 10], [6, 13]];
      var css3 = [[0, 6], [1, 1], [2,9], [3, 12], [4, 10], [5, 12], [6, 11]];
			
		function showTooltip(x, y, contents) {
			jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
				position: 'absolute',
				display: 'none',
				top: y + 5,
				left: x + 5
			}).appendTo("body").fadeIn(200);
		}
        
        //datepicker
        jQuery('#datepicker').datepicker();
        
        // tabbed widget
        jQuery('.tabbedwidget').tabs();
    });
</script>
</body>
</html>



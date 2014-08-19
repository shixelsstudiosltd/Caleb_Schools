<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Caleb Portal</title>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/style.default.css" type="text/css" />

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl;?>/css/responsive-tables.css">
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js"></script>
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
            <div class="logo header-top-left">
                    <img src="images/header-top-left.jpg" alt="" />
            </div>
        <div class="headerinner">
            <ul class="headmenu">
                <li class="odd">
                    <div class="logo">
                        <a href="#"><img src="images/logo.jpg" alt="" /></a>
                    </div>
                </li>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="images/photos/header-temp-image.png" alt="user-image" />
                        <div class="userinfo">
                            <p>Jola Ogunsola</p>
                        </div>
                            <a href="#"><div class="header-menu-icon"></div></a>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
    
    <div class="leftpanel">
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
                <li class="active"><a href="dashboard.html"><span class="iconfa-home"></span> Dashboard</a></li>
                <li><a href="#"><span class="iconfa-book"></span> Courses</a></li>
                <li><a href="#"><span class="iconfa-group"></span> Teachers</a></li>
                <li><a href="#"><span class="iconfa-envelope"></span> Messages</a></li>
                <li><a href="#"><span class="iconfa-cog"></span> Settings</a></li>
                <li><a href="#"><span class="iconfa-bar-chart"></span> Assessments</a></li>
                <li><a href="#"><span class="iconfa-question-sign"></span> FAQS</a></li>
                <li class="empty-nav"><a href="#"></a></li>
                <li><a href="#"><span class="iconfa-signout"></span> Sign Out</a></li>
            </ul>
        </div><!--leftmenu-->
        
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



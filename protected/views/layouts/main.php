<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="row-fluid show-grid">
    <div class="navbar">
        <div class="navbar-inner">
            <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="divider-vertical"></li>
                <li><a href="#">Link</a></li>
                <li class="divider-vertical"></li>
                <li><a href="#">Link</a></li>
                <li class="divider-vertical"></li>
            </ul>
        </div>
    </div>
</div>

<div class="row-fluid show-grid">
    <div class="span2">
        <ul class="nav nav-list">
            <li class="active"><a href="#dropdowns"><i class="icon-chevron-right"></i> Dropdowns</a></li>
            <li class=""><a href="#buttonGroups"><i class="icon-chevron-right"></i> Button groups</a></li>
            <li class=""><a href="#buttonDropdowns"><i class="icon-chevron-right"></i> Button dropdowns</a></li>
            <li class=""><a href="#navs"><i class="icon-chevron-right"></i> Navs</a></li>
            <li class=""><a href="#navbar"><i class="icon-chevron-right"></i> Navbar</a></li>
            <li class=""><a href="#breadcrumbs"><i class="icon-chevron-right"></i> Breadcrumbs</a></li>
            <li class=""><a href="#pagination"><i class="icon-chevron-right"></i> Pagination</a></li>
            <li class=""><a href="#labels-badges"><i class="icon-chevron-right"></i> Labels and badges</a></li>
            <li><a href="#typography"><i class="icon-chevron-right"></i> Typography</a></li>
            <li class=""><a href="#thumbnails"><i class="icon-chevron-right"></i> Thumbnails</a></li>
            <li><a href="#alerts"><i class="icon-chevron-right"></i> Alerts</a></li>
            <li class=""><a href="#progress"><i class="icon-chevron-right"></i> Progress bars</a></li>
            <li class=""><a href="#media"><i class="icon-chevron-right"></i> Media object</a></li>
            <li><a href="#misc"><i class="icon-chevron-right"></i> Misc</a></li>
        </ul>
    </div>


    <div class="span10">
        <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Library</a> <span class="divider">/</span></li>
            <li class="active">Data</li>
        </ul>

        <div class="container" id="page">

            <div id="header">
                <div id="logo"><?php //echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->

            <div id="mainmenu">

            </div><!-- mainmenu -->
            <?php if(isset($this->breadcrumbs)):?>
                <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
            )); ?><!-- breadcrumbs -->
            <?php endif?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
                <!--
            Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
                -->
            </div><!-- footer -->

        </div><!-- page -->
    </div>
</div>




</body>
</html>

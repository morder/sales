<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="ru" />

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?load=package.full&lang=ru-RU&ns=YMaps"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body background="/images/light_noise_diagonal.png" style="padding-top: 40px;">


    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <ul class="nav">
                    <li class="active"><a href="#">Главная</a></li>

                    <li><a href="#">Торговые сети</a></li>

                    <li><a href="#">Самое популярное</a></li>

                </ul>
            </div>
        </div>
    </div>

<style type="text/css">
    .jumbotron{
        background-clip: border-box;
        background-size: auto auto;
        border-bottom: 1px solid #DDD;
        color: #444;
        padding: 40px 0;
        position: relative;
        text-shadow: 0 1px 3px rgba(0, 0, 0, 0.4), 0 0 30px rgba(0, 0, 0, 0.075);
        background: url(images/rough_diagonal.png);
    }
</style>

<div class="jumbotron subhead" id="overview" >
    <div class="container">
        <h1>Скидки Минска</h1>
        <p class="lead">На нашем сайте вы сможете найти скидки в ближайших к вам магазинах.</p>
    </div>
</div>


    <div class="container" id="page">
        <div class="row">
            <div class="span3">
                <ul class="nav nav-list" style="margin-top: 30px;">
                    <li class="active"><a href="#dropdowns"><i class="icon-chevron-right"></i> Продукты питания</a></li>
                    <li class=""><a href="#buttonGroups"><i class="icon-chevron-right"></i> Бытовые приборы</a></li>
                    <li class=""><a href="#buttonDropdowns"><i class="icon-chevron-right"></i> Кухонные принадлежности</a></li>
                    <li class=""><a href="#navs"><i class="icon-chevron-right"></i> Одежда</a></li>
                    <li class=""><a href="#navbar"><i class="icon-chevron-right"></i> Обувь</a></li>
                    <li class=""><a href="#breadcrumbs"><i class="icon-chevron-right"></i> Бытовая химия</a></li>
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


            <div class="span9">
                <div style="padding-top: 30px;">
                    <!--
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a> <span class="divider">/</span></li>
                        <li><a href="#">Library</a> <span class="divider">/</span></li>
                        <li class="active">Data</li>
                    </ul>
                    -->



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
                </div>
            </div>
        </div>
    </div>





</body>
</html>

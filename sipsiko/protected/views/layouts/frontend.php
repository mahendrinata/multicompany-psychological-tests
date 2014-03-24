<?php
$themeBaseUrl = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($themeBaseUrl . '/css/style.css');
$cs->registerCssFile($themeBaseUrl . '/css/fullwidth.css');
$cs->registerCssFile($themeBaseUrl . '/css/revolution-settings.css');
$cs->registerCssFile($themeBaseUrl . '/css/customize.css');
$cs->registerCoreScript($themeBaseUrl . '/js/jquery.min.js');
$cs->registerScriptFile($themeBaseUrl . '/js/styleswitch.js');
$cs->registerScriptFile($themeBaseUrl . '/js/selectnav.min.js');
$cs->registerScriptFile($themeBaseUrl . '/js/rs-plugin/jquery.themepunch.plugins.min.js');
$cs->registerScriptFile($themeBaseUrl . '/js/rs-plugin/jquery.themepunch.revolution.min.js');
$cs->registerScriptFile($themeBaseUrl . '/js/resolution.js');
$cs->registerScriptFile($themeBaseUrl . '/js/jquery.prettyPhoto.js');
$cs->registerScriptFile($themeBaseUrl . '/js/jquery.quicksand.js');
$cs->registerScriptFile($themeBaseUrl . '/js/jquery.easing.1.3.js');
$cs->registerScriptFile($themeBaseUrl . '/js/script.js');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
        <?php // echo link_tag('assets/favicon.gif', 'shortcut icon', 'image/ico'); ?>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="description" content="Aplikasi Sistem Tes Psikologi Online Multi dan Custum Variabel Tes. Merupakan Aplikasi yang dapat mendukung sebuah perusahaan maupun anggota"/>
        <meta name=”robots” content=”noindex, nofollow”/>
              <meta name=”keywords” content=”meta tags,tes psikologi, sipsiko”/>
              <meta name=”google” content=”notranslate” />    
        <meta name="author" content="Mahendri Winata (mahen.0112@gmail.com)"/>

    </head>
    <body>
        <div id="header-bg"></div>
        <?php $this->renderPartial('../element/navigation/frontend_nav'); ?>
        <div class="container-fluid" id="wrapper-header">
            <?php echo $content; ?>
        </div>
        <?php
        $this->renderPartial('../element/general/frontend_footer');
        $this->renderPartial('../element/general/frontend_back_top');
        ?>
    </body>
</html>

<?php
$themeBaseUrl = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
$css = array(
    'bootstrap.min',
    'plugins',
    'main',
    'themes'
);

foreach ($css as $style) {
    $cs->registerCssFile($themeBaseUrl . '/css/' . $style . '.css');
}

$cs->scriptMap = array(
    'jquery.js' => $themeBaseUrl . '/js/vendor/jquery-1.11.0.min.js',
);

$cs->registerCoreScript('jquery');
$js = array(
    'vendor/modernizr-2.7.1-respond-1.4.2.min',
    'vendor/bootstrap.min',
    'plugins',
    'app',
    'function'
);

foreach ($js as $script) {
    $cs->registerScriptFile($themeBaseUrl . '/js/' . $script . '.js', CClientScript::POS_HEAD);
}
?>

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9"> </html><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="robots" content="" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
        <link rel="shortcut icon" href="<?php echo $themeBaseUrl; ?>/img/favicon.ico" />
        <link rel="apple-touch-icon" href="<?php echo $themeBaseUrl; ?>/img/icon57.png" sizes="57x57" />
        <link rel="apple-touch-icon" href="<?php echo $themeBaseUrl; ?>/img/icon72.png" sizes="72x72" />
        <link rel="apple-touch-icon" href="<?php echo $themeBaseUrl; ?>/img/icon76.png" sizes="76x76" />
        <link rel="apple-touch-icon" href="<?php echo $themeBaseUrl; ?>/img/icon114.png" sizes="114x114" />
        <link rel="apple-touch-icon" href="<?php echo $themeBaseUrl; ?>/img/icon120.png" sizes="120x120" />
        <link rel="apple-touch-icon" href="<?php echo $themeBaseUrl; ?>/img/icon144.png" sizes="144x144" />
        <link rel="apple-touch-icon" href="<?php echo $themeBaseUrl; ?>/img/icon152.png" sizes="152x152" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
    <body>
        <div id="page-container" class="sidebar-full">
            <?php $this->renderPartial('../../element/navigation/sidebar', array('themeBaseUrl' => $themeBaseUrl)); ?>
            <div id="main-container">
                <?php // $this->renderPartial('../../element/navigation/header', array('themeBaseUrl' => $themeBaseUrl)); ?>
                <div id="page-content">
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="gi gi-charts"></i>SIPSIKO - Sistem Pakar Tes Psikologi Online<br />
                                <small>Psychology Online Test Multiple and Custom Variable Test.</small>
                            </h1>
                        </div>
                    </div>
                    <?php if (isset($this->breadcrumbs)): ?>
                        <?php
                        $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links' => $this->breadcrumbs,
                            'tagName' => 'ul',
                            'htmlOptions' => array('class' => 'breadcrumb breadcrumb-top'),
                            'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
                            'inactiveLinkTemplate' => '<li class="active">{label}</li>',
                            'separator' => ''
                        ));
                        ?>
                    <?php endif ?>
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
    </body>
</html>
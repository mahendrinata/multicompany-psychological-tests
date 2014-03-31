<?php
$themeBaseUrl = Yii::app()->theme->baseUrl;
$cs = Yii::app()->getClientScript();
$css = array(
    'font',
    'application',
    'isotope',
    'normalize',
    'fullcalendar',
    'datatables',
    'prettify',
    'classyscroll',
    'jquery.fancybox',
    'select2',
    'bootstrap.min',
    'fontawesome',
    'style',
//    'color/green',
//    'color/orange',
//    'color/magenta',
//    'color/gray',
    'bootstrap-datetimepicker.min'
);

foreach ($css as $style) {
    $cs->registerCssFile($themeBaseUrl . '/css/' . $style . '.css');
}


$core = array(
    'jquery-1.10.1.min',
    'jquery-ui',
);

foreach ($core as $coreScript) {
    $cs->registerCoreScript($themeBaseUrl . '/js/' . $coreScript . '.js');
}

$js = array(
    'modernizr.custom',
    'bootstrap.min',
    'jquery.mousewheel',
    'jquery.classyscroll',
    'jquery.classyscroll',
//    'jquery.vmap.min',
//    'jquery.vmap.sampledata',
    'fullcalendar.min',
    'gcal',
    'prettify',
    'jquery.dataTables.min',
    'jquery.fancybox.pack',
    'jquery.sparkline.min',
    'jquery.easy-pie-chart',
    'excanvas.min',
    'jquery.isotope.min',
    'select2',
    'styleswitcher',
    'bootstrap-datetimepicker.min',
    'main'
);

foreach ($js as $script) {
    $cs->registerScriptFile($themeBaseUrl . '/js/' . $script . '.js');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
        <?php
//        echo link_tag('assets/favicon.gif', 'shortcut icon', 'image/ico');
        ?>
        <meta content="width=device-width, initial-scale=1.0" charset="utf-8" name="viewport"/>
    </head>
    <body>
        <?php $this->renderPartial('../../element/navigation/navigation'); ?>
        <div class="container-fluid" id="wrapper-header">
            <div class="page-title">
                <h1><?php echo $this->pageTitle; ?></h1>
            </div>
            <?php if (isset($this->breadcrumbs)): ?>
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $this->widget('zii.widgets.CBreadcrumbs', array(
                            'links' => $this->breadcrumbs,
                            'tagName'=> 'ul',
                            'htmlOptions' => array('class' => 'breadcrumb'),
                            'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
                            'inactiveLinkTemplate' => '<li class="active">{label}</li>',
                            'separator' => ''
                        ));
                        ?><!-- breadcrumbs -->
                    </div>
                </div>
            <?php endif ?>
            <?php echo $content; ?>
        </div>
    </body>
</html>
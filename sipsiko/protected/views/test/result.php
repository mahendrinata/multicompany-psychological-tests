<div class="container-fluid" id="wrapper-header">
    <div id="content" class="container clearfix">
        <nav id="page-title" >
            <h1 style="margin-bottom: 20px">Hasil Tes <?php echo $model->name ?></h1>
        </nav>
    </div>
</div>

<div id="body-wrapper" style="background-color: #FFF">
    <div id="content" class="container clearfix" style="min-height: 600px;padding-top: 20px;">
        <div class="shortcodes">
            <?php foreach ($variable as $var) { ?>
                <p class="margin-btm"><?php echo $var['name'] . ' (' . round($var['value'] / $sum * 100) . '%)'; ?></p>                            
                <div class="meter">
                    <span style="width:<?php echo round($var['value'] / $sum * 100); ?>%"></span>
                </div>
            <?php } ?>
        </div>
        <hr class="h50">
        <?php
        foreach ($variableDetail as $detail){
            echo $detail->description;
        }
        ?>
    </div>
</div>
<div id="body-wrapper">
    <div id="header" >
        <a href="index.html" id="logo"></a>
        <ul id="navigation">
            <li><?php echo CHtml::link('Beranda', Yii::app()->request->baseUrl . '/site/index'); ?></li>
            <li><?php echo CHtml::link('Tentang Kami', Yii::app()->request->baseUrl . '/site/about'); ?></li>
            <li>
                <?php echo CHtml::link('Fitur', Yii::app()->request->baseUrl . '/site/feature'); ?>
                <ul>
                    <li><?php echo CHtml::link('Perusahaan', Yii::app()->request->baseUrl . '/site/company'); ?></li>
                    <li><?php echo CHtml::link('Anggota', Yii::app()->request->baseUrl . '/site/member'); ?></li>
                </ul>
            </li>
            <li><?php echo CHtml::link('Kontak', Yii::app()->request->baseUrl . '/site/contact'); ?></li>
            <li>
                <?php echo CHtml::link('Login', Yii::app()->request->baseUrl . '/user/login'); ?>
                <ul>
                    <li><?php echo CHtml::link('Daftar', Yii::app()->request->baseUrl . '/user/register'); ?></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div id="body-wrapper">
    <div id="header" >
        <a href="index.html" id="logo"></a>
        <ul id="navigation">
            <li><?php echo CHtml::link('Beranda', 'site/index'); ?></li>
            <li><?php echo CHtml::link('Tentang Kami', 'site/about'); ?></li>
            <li>
                <?php echo CHtml::link('Fitur', 'site/feature'); ?>
                <ul>
                    <li><?php echo CHtml::link('Perusahaan', 'site/company'); ?></li>
                    <li><?php echo CHtml::link('Anggota', 'site/member'); ?></li>
                </ul>
            </li>
            <li><?php echo CHtml::link('Kontak', 'site/contact'); ?></li>
            <li>
                <?php echo CHtml::link('Login', 'user/login'); ?>
                <ul>
                    <li><?php echo CHtml::link('Daftar', 'user/register'); ?></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
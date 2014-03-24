<div id="body-wrapper">
    <div id="header" >
        <a href="index.html" id="logo"></a>
        <ul id="navigation">
            <li><?php echo CHtml::link('Beranda', 'home'); ?></li>
            <li><?php echo CHtml::link('Tentang Kami', 'about-us'); ?></li>
            <li>
                <?php echo CHtml::link('Fitur', 'feature'); ?>
                <ul>
                    <li><?php echo CHtml::link('Perusahaan', 'company'); ?></li>
                    <li><?php echo CHtml::link('Anggota', 'member'); ?></li>
                </ul>
            </li>
            <li><?php echo CHtml::link('Kontak', 'contact'); ?></li>
            <li>
                <?php echo CHtml::link('Login', 'site/login'); ?>
                <ul>
                    <li><?php echo CHtml::link('Daftar', 'site/register'); ?></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
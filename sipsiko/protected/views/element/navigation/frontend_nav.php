<div id="body-wrapper">
    <div id="header" >
        <a href="index.html" id="logo"></a>
        <ul id="navigation">
            <li><?php echo CHtml::link('Beranda', $this->createUrl('site/index')); ?></li>
            <li><?php echo CHtml::link('Tes Psikologi', $this->createUrl('test/index')); ?></li>
            <li><?php echo CHtml::link('Tentang Kami', $this->createUrl('site/about')); ?></li>
            <li><?php echo CHtml::link('Kontak', $this->createUrl('site/contact')); ?></li>
            <li>
                <?php echo CHtml::link('Login', $this->createUrl('user/login')); ?>
                <ul>
                    <li><?php echo CHtml::link('Daftar', $this->createUrl('user/register')); ?></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
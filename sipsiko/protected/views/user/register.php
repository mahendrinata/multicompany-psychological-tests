<div class="container-fluid" id="wrapper-header">
    <div id="content" class="container clearfix">
        <nav id="page-title" >
            <h1><?php echo CHtml::encode($this->pageTitle); ?></h1>
        </nav>
    </div>
</div>
<div id="contact-map" style="height: 600px;">
    <div id="contact-info" style="top: 250px;">
        <div class="one-fourth">
            <div id="contact-details">
                <h4>Syarat dan ketentuan</h4>
                <p>Pengguna hanya dapat mendaftar sebagai Perusahaan atau Anggota.</p>
            </div>
        </div>
        <div class="three-fourth last">
            <div id="contact-form">
                <h4>Daftarkan Dirimu Sekarang</h4>
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'user-form',
                    'enableAjaxValidation' => true,
                ));
                ?>
                <div id="message">
                    <?php // echo $form->errorSummary($model, '', '', array('class' => 'error_message')); ?>
                </div> 
                <?php
                echo $form->textField($model, 'username', array('style' => 'width: 85%;max-width: 400px;', 'placeholder' => 'Username'));
                echo $form->error($model, 'username', array('class' => 'error_message error_message_label'));
                ?>
                <div class="clearfix"></div>
                <br/>
                <?php
                echo $form->textField($model, 'email', array('style' => 'width: 85%;max-width: 400px;', 'placeholder' => 'Email'));
                echo $form->error($model, 'email', array('class' => 'error_message error_message_label'));
                ?>
                <div class="clearfix"></div>
                <br/>
                <?php
                echo $form->passwordField($model, 'password', array('style' => 'width: 85%;max-width: 400px;', 'placeholder' => 'Password'));
                echo $form->error($model, 'password', array('class' => 'error_message error_message_label'));
                ?>
                <div class="clearfix"></div>
                <br/>
                <?php
                echo CHtml::submitButton('Register', array('class' => 'btn-image'));
                $this->endWidget();
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>		
</div>
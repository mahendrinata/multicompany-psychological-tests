<div id="content" class="container clearfix">
    <nav id="page-title" >
        <h1>Login</h1>
    </nav>
</div>
</div>
<div id="contact-map" style="height: 500px;">
    <div id="contact-info" style="top: 250px;">
        <div class="one-fourth">
            <div id="contact-details">
                <h4>Syarat dan ketentuan</h4>
                <p>Masukkan username dan password yang sesuai.</p>
                <p>
                    <?php echo CHtml::link('<h4>Lupa Password</h4>', 'reset-password', array('style' => 'color:#428BCA')) ?>
                </p>
            </div>
        </div>
        <div class="three-fourth last">
            <div id="contact-form">
                <div id="message"></div>
                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'id' => 'login-form',
                    'enableAjaxValidation' => true,
//                    'clientOptions' => array(
//                        'validateOnSubmit' => true,
//                    ),
                ));
                echo $form->textField($model, 'username', array('style' => 'width: 85%;max-width: 400px;', 'placeholder' => 'Username'));
                echo $form->error($model, 'username', array('class' => 'label label-danger'));
                ?>
                <div class="clearfix"></div>
                <br/>
                <?php
                echo $form->passwordField($model, 'password', array('style' => 'width: 85%;max-width: 400px;', 'placeholder' => 'Password'));
                echo $form->error($model, 'password', array('class' => 'label label-danger'));
                ?>
                <div class="clearfix"></div>
                <br/>
                <?php
                echo $form->checkBox($model, 'rememberMe', array('style' => 'width:auto'));
                echo $form->label($model, 'rememberMe');
                echo $form->error($model, 'rememberMe');
                ?>
                <div class="clearfix"></div>
                <br/>
                <?php
                echo CHtml::submitButton('Login', array('class' => 'btn-image'));
                $this->endWidget();
                ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>		
</div>

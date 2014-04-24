<?php
$this->breadcrumbs = array(
    'Change Profile',
);
?>
<div class="block full">
    <div class="block-title">
        <h2>Change <small>User Profiles</small></h2>
        <ul class="nav nav-tabs" data-toggle="tabs">
            <?php if (!empty($expert))  ?>
            <li class="active"><a href="#expert-tab">Expert</a></li>
            <?php if (!empty($company))  ?>
            <li><a href="#company-tab">Company</a></li>
            <?php if (!empty($member))  ?>
            <li><a href="#member-tab">Member</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" id="expert-tab">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'expert-profile-form',
                'enableAjaxValidation' => true,
                'htmlOptions' => array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data',),
            ));
            ?>
            <div class="alert alert-info alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <h4><i class="fa fa-info-circle"></i> Info</h4>
                Fields with <span class="required">*</span> are <a class="alert-link" href="javascript:void(0)">required</a>.
            </div>

            <?php // echo $form->errorSummary($expert); 
            echo $form->hiddenField($expert,'id', array('readonly' => 'readonly'));
            ?>

            <div class="form-group">
                <?php echo $form->label($expert, 'first_name', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <?php echo $form->textField($expert, 'first_name', array('placeholder' => 'First Name', 'class' => 'form-control')); ?>
                    <?php echo $form->error($expert, 'first_name', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->label($expert, 'phone', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <?php echo $form->textField($expert, 'phone', array('placeholder' => 'Phone', 'class' => 'form-control')); ?>
                    <?php echo $form->error($expert, 'phone', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <!--        <div class="form-group">
            <?php echo $form->label($expert, 'photo', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
            <?php echo $form->fileField($expert, 'photo'); ?>
            <?php echo $form->error($expert, 'photo', array('class' => 'help-block alert-danger')); ?>
                        </div>
                    </div>-->

            <div class="form-group">
                <?php echo $form->label($expert, 'address', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-5 col-sm-10 col-xs-12">
                    <?php echo $form->textArea($expert, 'address', array('placeholder' => 'Description', 'class' => 'form-control', 'rows' => 6)); ?>
                    <?php echo $form->error($expert, 'address', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label"></label>
                <div class="col-lg-9 col-xs-12">
                    <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> Save', array('class' => 'btn btn-success', 'type' => 'submit')); ?>
                </div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
        <div class="tab-pane" id="company-tab">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'company-profile-form',
                'enableAjaxValidation' => true,
                'htmlOptions' => array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data',),
            ));
            ?>
            <?php // echo $form->errorSummary($company); 
            echo $form->hiddenField($company,'id', array('readonly' => 'readonly'));
            ?>
            <div class="form-group">
                <?php echo $form->label($company, 'first_name', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <?php echo $form->textField($company, 'first_name', array('placeholder' => 'First Name', 'class' => 'form-control')); ?>
                    <?php echo $form->error($company, 'first_name', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->label($company, 'phone', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <?php echo $form->textField($company, 'phone', array('placeholder' => 'Phone', 'class' => 'form-control')); ?>
                    <?php echo $form->error($company, 'phone', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <!--        <div class="form-group">
            <?php echo $form->label($company, 'photo', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
            <?php echo $form->fileField($company, 'photo'); ?>
            <?php echo $form->error($company, 'photo', array('class' => 'help-block alert-danger')); ?>
                        </div>
                    </div>-->

            <div class="form-group">
                <?php echo $form->label($company, 'address', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-5 col-sm-10 col-xs-12">
                    <?php echo $form->textArea($company, 'address', array('placeholder' => 'Description', 'class' => 'form-control', 'rows' => 6)); ?>
                    <?php echo $form->error($company, 'address', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label"></label>
                <div class="col-lg-9 col-xs-12">
                    <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> Save', array('class' => 'btn btn-success', 'type' => 'submit')); ?>
                </div>
            </div>
            <?php $this->endWidget(); ?>
        </div>
        <div class="tab-pane" id="member-tab">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'member-profile-form',
                'enableAjaxValidation' => true,
                'htmlOptions' => array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data',),
            ));
            ?>
            <?php // echo $form->errorSummary($member); 
            echo $form->hiddenField($member,'id', array('readonly' => 'readonly'));
            ?>

            <div class="form-group">
                <?php echo $form->label($member, 'first_name', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <?php echo $form->textField($member, 'first_name', array('placeholder' => 'First Name', 'class' => 'form-control')); ?>
                    <?php echo $form->error($member, 'first_name', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->label($member, 'last_name', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <?php echo $form->textField($member, 'last_name', array('placeholder' => 'Last Name', 'class' => 'form-control')); ?>
                    <?php echo $form->error($member, 'last_name', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->label($member, 'gender', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-2 col-sm-4 col-xs-12">
                    <?php echo $form->dropDownList($member, 'gender', UserProfile::model()->getGender(), array('id' => false, 'prompt' => '', 'class' => 'select-chosen', 'data-placeholder' => 'Gender')); ?>
                    <?php echo $form->error($member, 'gender', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->label($member, 'birth_place', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <?php echo $form->textField($member, 'birth_place', array('placeholder' => 'Birth Place', 'class' => 'form-control')); ?>
                    <?php echo $form->error($member, 'birth_place', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->label($member, 'birth_date', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-1 col-sm-2 col-xs-12">
                    <?php echo $form->textField($member, 'birth_date', array('placeholder' => 'Birth Date', 'class' => 'form-control input-datepicker')); ?>
                    <?php echo $form->error($member, 'birth_date', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <?php echo $form->label($member, 'phone', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <?php echo $form->textField($member, 'phone', array('placeholder' => 'Phone', 'class' => 'form-control')); ?>
                    <?php echo $form->error($member, 'phone', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <!--        <div class="form-group">
            <?php echo $form->label($member, 'photo', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                        <div class="col-lg-3 col-sm-6 col-xs-12">
            <?php echo $form->fileField($member, 'photo'); ?>
            <?php echo $form->error($member, 'photo', array('class' => 'help-block alert-danger')); ?>
                        </div>
                    </div>-->

            <div class="form-group">
                <?php echo $form->label($member, 'address', array('class' => 'col-lg-2 col-sm-2 control-label')); ?>
                <div class="col-lg-5 col-sm-10 col-xs-12">
                    <?php echo $form->textArea($member, 'address', array('placeholder' => 'Description', 'class' => 'form-control', 'rows' => 6)); ?>
                    <?php echo $form->error($member, 'address', array('class' => 'help-block alert-danger')); ?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 col-sm-2 control-label"></label>
                <div class="col-lg-9 col-xs-12">
                    <?php echo CHtml::htmlButton('<i class="fa fa-check"></i> Save', array('class' => 'btn btn-success', 'type' => 'submit')); ?>
                </div>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
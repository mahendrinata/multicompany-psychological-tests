<div id="sidebar">
    <div class="sidebar-scroll">
        <div class="sidebar-content">
            <a href="./index.php.html" class="sidebar-brand">
                <i class="gi gi-flash"></i><strong>Pro</strong>UI
            </a>
            <div class="sidebar-section sidebar-user clearfix">
                <div class="sidebar-user-avatar">
                    <a href="./page_ready_user_profile.php.html">
                        <img src="<?php echo $themeBaseUrl; ?>/img/placeholders/avatars/avatar2.jpg" alt="avatar" />
                    </a>
                </div>
                <div class="sidebar-user-name">John Doe</div>
                <div class="sidebar-user-links">
                    <?php
                    echo CHtml::link('<i class="gi gi-user"></i>', array('admin/user/profile'), array('title' => 'Profile'));
                    echo CHtml::link('<i class="gi gi-envelope"></i>', array('admin/user/profile'), array('title' => 'Message'));
                    echo CHtml::link('<i class="gi gi-cogwheel"></i>', array('admin/user/profile'), array('title' => 'Setting'));
                    echo CHtml::link('<i class="gi gi-exit"></i>', array('user/logout'), array('title' => 'Logout'));
                    ?>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li><?php echo CHtml::link('<i class="gi gi-stopwatch sidebar-nav-icon"></i>Dashboard</a>', array('admin/dashboard'));?></li>
                
                <li class="sidebar-header"><span class="sidebar-header-title">Company</span></li>
                <li><?php echo CHtml::link('<i class="gi gi-user sidebar-nav-icon"></i> Member of Company</a>', array('admin/user/member'));?></li>
                <li><?php echo CHtml::link('<i class="hi hi-list sidebar-nav-icon"></i> Tests of Company</a>', array('admin/test/company'));?></li>
                <li><?php echo CHtml::link('<i class="gi gi-certificate sidebar-nav-icon"></i> Test Results</a>', array('admin/usertest'));?></li>
                <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Analysis Tests</a>', array('admin/usertest/analysis'));?></li>

                <li class="sidebar-header"><span class="sidebar-header-title">Expert</span></li>
                <li><?php echo CHtml::link('<i class="hi hi-list sidebar-nav-icon"></i> Management Tests</a>', array('admin/test'));?></li>
                <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Test Type</a>', array('admin/type'));?></li>
                <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Variable</a>', array('admin/variable'));?></li>
                <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Variable Detail</a>', array('admin/variabledetail'));?></li>
                <li><?php echo CHtml::link('<i class="hi hi-tags sidebar-nav-icon"></i> Tag</a>', array('admin/tag'));?></li>
                
                <li class="sidebar-header"><span class="sidebar-header-title">Member</span></li>
                <li><?php echo CHtml::link('<i class="gi gi-certificate sidebar-nav-icon"></i> Tests</a>', array('admin/user'));?></li>
                <li><?php echo CHtml::link('<i class="gi gi-certificate sidebar-nav-icon"></i> Tests Result</a>', array('admin/user'));?></li>
                <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Analysis Tests</a>', array('admin/type'));?></li>

                <li class="sidebar-header"><span class="sidebar-header-title">Guest</span></li>
                <li><?php echo CHtml::link('<i class="gi gi-certificate sidebar-nav-icon"></i> Tests Result</a>', array('admin/user'));?></li>
                <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Analysis Tests</a>', array('admin/type'));?></li>

                <li class="sidebar-header"><span class="sidebar-header-title">Master Data</span></li>
                <li><?php echo CHtml::link('<i class="gi gi-user sidebar-nav-icon"></i> Users Management</a>', array('admin/user'));?></li>
                <li><?php echo CHtml::link('<i class="gi gi-user sidebar-nav-icon"></i> User Profiles</a>', array('admin/userprofile'));?></li>
                <li><?php echo CHtml::link('<i class="gi gi-charts sidebar-nav-icon"></i> Roles Management</a>', array('admin/type'));?></li>
            </ul>
        </div>
    </div>
</div>
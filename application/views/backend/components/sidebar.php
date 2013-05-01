<div class="page-sidebar nav-collapse collapse">
    <ul>
        <!-- bof: sidebar toggler -->
        <li><div class="sidebar-toggler hidden-phone"></div></li>
        <!-- eof: sidebar toggler -->

        <!-- bof: dashboard -->
        <li<?php echo (isset($active['dashboard']) ? ' class="active"' : null); ?>>
            <a href="<?php echo site_url('dashboard'); ?>"><i class="icon-home"></i> <span class="title"><?php echo $lang['dashboard']; ?></span><?php echo (isset($active['dashboard']) ? '<span class="selected"></span>' : null); ?></a>
        </li>
        <!-- eof: dashboard -->

        <!-- bof: configuration -->
        <li<?php echo (isset($active['configuration']) ? ' class="active"' : null); ?>>
            <a href="<?php echo site_url('configuration'); ?>"><i class="icon-folder-open"></i> <span class="title"><?php echo $lang['configuration']; ?></span><span class="arrow<?php echo (isset($active['configuration']) ? ' open"></span><span class="selected' : null); ?>"></span></a>

            <ul class="sub-menu">
                <li><a href="<?php echo site_url('configuration/general_settings'); ?>"><i class="icon-cogs"></i> <?php echo $lang['general_settings']; ?></a></li>
                <li><a href="<?php echo site_url('configuration/local'); ?>"><i class="icon-calendar"></i> <?php echo $lang['local']; ?></a></li>
                <li><a href="<?php echo site_url('configuration/options'); ?>"><i class="icon-wrench"></i> <?php echo $lang['options']; ?></a></li>
                <li><a href="<?php echo site_url('configuration/contact'); ?>"><i class="icon-envelope"></i> <?php echo $lang['contact_details']; ?></a></li>
                <li><a href="<?php echo site_url('configuration/server'); ?>"><i class="icon-cloud"></i> <?php echo $lang['server']; ?></a></li>
            </ul>
        </li>
        <!-- eof: configuration -->

        <!-- bof: language and phrases -->
        <li<?php echo (isset($active['language']) ? ' class="active"' : null); ?>>
            <a href="<?php echo site_url('language'); ?>"><i class="icon-folder-open"></i> <span class="title"><?php echo $lang['language_and_phrase']; ?></span><span class="arrow<?php echo (isset($active['language']) ? ' open"></span><span class="selected' : null); ?>"></span></a>

            <ul class="sub-menu">
                <li<?php echo (isset($active['language/index']) ? ' class="active"' : null); ?>><a href="<?php echo site_url('language'); ?>"><i class="icon-cogs"></i> <?php echo $lang['language_manager']; ?></a></li>
                <li<?php echo (isset($active['language/add']) ? ' class="active"' : null); ?>><a href="<?php echo site_url('language/add'); ?>"><i class="icon-plus"></i> <?php echo $lang['add_new_language']; ?></a></li>
            </ul>
        </li>
        <!-- eof: language and phrases -->

        <!-- bof: category -->
        <li<?php echo (isset($active['category']) ? ' class="active"' : null); ?>>
            <a href="<?php echo site_url('category'); ?>"><i class="icon-folder-open"></i> <span class="title"><?php echo $lang['categories']; ?></span><span class="arrow<?php echo (isset($active['categories']) ? ' open"></span><span class="selected' : null); ?>"></span></a>

            <ul class="sub-menu">
                <li<?php echo (isset($active['category/index']) ? ' class="active"' : null); ?>><a href="<?php echo site_url('category'); ?>"><i class="icon-cogs"></i> <?php echo $lang['category_manager']; ?></a></li>
                <li<?php echo (isset($active['category/add']) ? ' class="active"' : null); ?>><a href="<?php echo site_url('category/add'); ?>"><i class="icon-plus"></i> <?php echo $lang['add_new_category']; ?></a></li>
            </ul>
        </li>
        <!-- eof: category -->

        <!-- bof: categories -->
<!--         <li>
            <a href="<?php echo site_url('category'); ?>"><i class="icon-folder-open"></i> <span class="title">Categories</span><span class="arrow"></span></a>

            <ul class="sub-menu">
                <li><a href="<?php echo site_url('category'); ?>"><i class="icon-cogs"></i> Categories Manager</a></li>
                <li><a href="<?php echo site_url('category/add'); ?>"><i class="icon-globe"></i> Add New Category</a></li>
            </ul>
        </li> -->
        <!-- eof: categories -->

        <!-- bof: FAQ -->
<!--         <li>
            <a href="#"><i class="icon-folder-open"></i> <span class="title">FAQ</span><span class="arrow"></span></a>

            <ul class="sub-menu">
                <li><a href="#"><i class="icon-cogs"></i> FAQ Manager</a></li>
                <li><a href="#"><i class="icon-globe"></i> Add New Item</a></li>
            </ul>
        </li> -->
        <!-- eof: FAQ -->

        <!-- bof: attachment -->
<!--         <li>
            <a href="#"><i class="icon-folder-open"></i> <span class="title">Attachment</span><span class="arrow"></span></a>

            <ul class="sub-menu">
                <li><a href="#"><i class="icon-cogs"></i> Attachment Manager</a></li>
                <li><a href="#"><i class="icon-globe"></i> Attachment Permissions</a></li>
                <li><a href="#"><i class="icon-cogs"></i> Search</a></li>
                <li><a href="#"><i class="icon-globe"></i> Moderate</a></li>
                <li><a href="#"><i class="icon-cogs"></i> Attachment Statistics</a></li>
                <li><a href="#"><i class="icon-globe"></i> Attachment Storege Type</a></li>
            </ul>
        </li> -->
        <!-- eof: attachment -->

        <!-- bof: user groups -->
<!--         <li>
            <a href="#"><i class="icon-folder-open"></i> <span class="title">User Groups</span><span class="arrow"></span></a>

            <ul class="sub-menu">
                <li><a href="#"><i class="icon-cogs"></i> User Groups Manager</a></li>
                <li><a href="#"><i class="icon-cogs"></i> Admin Permissions</a></li>
                <li><a href="#"><i class="icon-globe"></i> Add New User Group</a></li>
                <li><a href="#"><i class="icon-cogs"></i> Join Requests</a></li>
                <li><a href="#"><i class="icon-globe"></i> Promotions</a></li>
            </ul>
        </li> -->
        <!-- eof: user groups -->

        <!-- bof: user -->
<!--         <li>
            <a href="#"><i class="icon-folder-open"></i> <span class="title">User</span><span class="arrow"></span></a>

            <ul class="sub-menu">
                <li><a href="#"><i class="icon-cogs"></i> User Manager</a></li>
                <li><a href="#"><i class="icon-globe"></i> Search for Users</a></li>
                <li><a href="#"><i class="icon-cogs"></i> Ban User</a></li>
                <li><a href="#"><i class="icon-globe"></i> Private Message Statistics</a></li>
                <li><a href="#"><i class="icon-cogs"></i> Referrals</a></li>
                <li><a href="#"><i class="icon-globe"></i> Search IP Addresses</a></li>
                <li><a href="#"><i class="icon-cogs"></i> View Banned Users</a></li>
                <li><a href="#"><i class="icon-globe"></i> Generate Mailing List</a></li>
            </ul>
        </li> -->
        <!-- eof: user -->

        <!-- bof: smilies -->
<!--         <li>
            <a href="#"><i class="icon-folder-open"></i> <span class="title">Smilies</span><span class="arrow"></span></a>

            <ul class="sub-menu">
                <li><a href="#"><i class="icon-cogs"></i> Smilies Manager</a></li>
                <li><a href="#"><i class="icon-globe"></i> Add New Smiliess</a></li>
                <li><a href="#"><i class="icon-cogs"></i> Upload Smilies</a></li>
            </ul>
        </li> -->
        <!-- eof: smilies -->

        <!-- bof: locations -->
<!--         <li>
            <a href="#"><i class="icon-folder-open"></i> <span class="title">Locations</span><span class="arrow"></span></a>

            <ul class="sub-menu">
                <li>
                    <a href="#"><i class="icon-folder-open"></i> <span class="title">Contients</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-cogs"></i> Contient Manager</a></li>
                        <li><a href="#"><i class="icon-globe"></i> Add New Contient</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-folder-open"></i> <span class="title">Countries</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-cogs"></i> Country Manager</a></li>
                        <li><a href="#"><i class="icon-globe"></i> Add New Country</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-folder-open"></i> <span class="title">Regions</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-cogs"></i> Region Manager</a></li>
                        <li><a href="#"><i class="icon-globe"></i> Add New Region</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-folder-open"></i> <span class="title">Provinces</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-cogs"></i> Province Manager</a></li>
                        <li><a href="#"><i class="icon-globe"></i> Add New Province</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-folder-open"></i> <span class="title">Districts</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-cogs"></i> District Manager</a></li>
                        <li><a href="#"><i class="icon-globe"></i> Add New District</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-folder-open"></i> <span class="title">Location Types</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-cogs"></i> Location Type Manager</a></li>
                        <li><a href="#"><i class="icon-globe"></i> Add New Location Type</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="icon-folder-open"></i> <span class="title">Locations</span><span class="arrow"></span></a>

                    <ul class="sub-menu">
                        <li><a href="#"><i class="icon-cogs"></i> Location Manager</a></li>
                        <li><a href="#"><i class="icon-globe"></i> Add New Location</a></li>
                    </ul>
                </li>
            </ul>
        </li> -->
        <!-- eof: locations -->

        <!-- bof: maintenance -->
<!--         <li>
            <a href="#"><i class="icon-folder-open"></i> <span class="title">Maintenance</span><span class="arrow"></span></a>

            <ul class="sub-menu">
                <li><a href="#"><i class="icon-cogs"></i> Clear System Cache</a></li>
                <li><a href="#"><i class="icon-globe"></i> Repair / Optimize Database</a></li>
                <li><a href="#"><i class="icon-cogs"></i> Backup Manager</a></li>
                <li><a href="#"><i class="icon-cogs"></i> View PHP Info</a></li>
            </ul>
        </li> -->
        <!-- eof: maintenance -->
    </ul>
</div>
<!-- bof: header -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- bof: top navigation bar -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- bof: logo -->
            <a class="brand" href="<?php echo site_url(); ?>">
                <img src="<?php echo base_url('resources/img/logo.png'); ?>" alt="logo" />
            </a>
            <!-- eof: logo -->

            <!-- bof: reponsive menu toggler -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <img src="<?php echo base_url('resources/img/menu-toggler.png'); ?>" alt="" />
            </a>
            <!-- eof: reponsive menu toggler -->

            <!-- bof: top navigation menu -->
            <ul class="nav pull-right">
                <!-- bof: notification dropdown -->
                <li class="dropdown" id="header_notification_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-warning-sign"></i>
                    <span class="badge">6</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <li>
                            <p>You have 14 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                            <span class="label label-success"><i class="icon-plus"></i></span>
                            New user registered.
                            <span class="time">Just now</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="label label-important"><i class="icon-bolt"></i></span>
                            Server #12 overloaded.
                            <span class="time">15 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="label label-warning"><i class="icon-bell"></i></span>
                            Server #2 not respoding.
                            <span class="time">22 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="label label-info"><i class="icon-bullhorn"></i></span>
                            Application error.
                            <span class="time">40 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="label label-important"><i class="icon-bolt"></i></span>
                            Database overloaded 68%.
                            <span class="time">2 hrs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="label label-important"><i class="icon-bolt"></i></span>
                            2 user IP blocked.
                            <span class="time">5 hrs</span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- eof: notification dropdown -->

                <!-- bof: inbox dropdown -->
                <li class="dropdown" id="header_inbox_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-envelope-alt"></i>
                    <span class="badge">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <li>
                            <p>You have 12 new messages</p>
                        </li>
                        <li>
                            <a href="inbox.html?a=view">
                            <span class="photo"><img src="<?php echo base_url('resources/img/avatar2.jpg'); ?>" alt="" /></span>
                            <span class="subject">
                            <span class="from">Lisa Wong</span>
                            <span class="time">Just Now</span>
                            </span>
                            <span class="message">
                            Vivamus sed auctor nibh congue nibh. auctor nibh
                            auctor nibh...
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html?a=view">
                            <span class="photo"><img src="<?php echo base_url('resources/img/avatar3.jpg'); ?>" alt="" /></span>
                            <span class="subject">
                            <span class="from">Richard Doe</span>
                            <span class="time">16 mins</span>
                            </span>
                            <span class="message">
                            Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                            auctor nibh...
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="inbox.html?a=view">
                            <span class="photo"><img src="<?php echo base_url('resources/img/avatar1.jpg'); ?>" alt="" /></span>
                            <span class="subject">
                            <span class="from">Bob Nilson</span>
                            <span class="time">2 hrs</span>
                            </span>
                            <span class="message">
                            Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                            auctor nibh...
                            </span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- eof: inbox dropdown -->

                <!-- bof: todo dropdown -->
                <li class="dropdown" id="header_task_bar">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-tasks"></i>
                    <span class="badge">5</span>
                    </a>
                    <ul class="dropdown-menu extended tasks">
                        <li>
                            <p>You have 12 pending tasks</p>
                        </li>

                        <li>
                            <a href="#">
                            <span class="task">
                                <span class="desc">New release v1.2</span>
                                <span class="percent">30%</span>
                            </span>
                            <span class="progress progress-success ">
                                <span style="width: 30%;" class="bar"></span>
                            </span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                            <span class="task">
                            <span class="desc">Application deployment</span>
                            <span class="percent">65%</span>
                            </span>
                            <span class="progress progress-danger progress-striped active">
                            <span style="width: 65%;" class="bar"></span>
                            </span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                            <span class="task">
                            <span class="desc">Mobile app release</span>
                            <span class="percent">98%</span>
                            </span>
                            <span class="progress progress-success">
                            <span style="width: 98%;" class="bar"></span>
                            </span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                            <span class="task">
                            <span class="desc">Database migration</span>
                            <span class="percent">10%</span>
                            </span>
                            <span class="progress progress-warning progress-striped">
                            <span style="width: 10%;" class="bar"></span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="task">
                            <span class="desc">Web server upgrade</span>
                            <span class="percent">58%</span>
                            </span>
                            <span class="progress progress-info">
                            <span style="width: 58%;" class="bar"></span>
                            </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                            <span class="task">
                            <span class="desc">Mobile development</span>
                            <span class="percent">85%</span>
                            </span>
                            <span class="progress progress-success">
                            <span style="width: 85%;" class="bar"></span>
                            </span>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                        </li>
                    </ul>
                </li>
                <!-- eof: todo dropdown -->

                <!-- bof: user login dropdown -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('resources/img/avatar1_small.jpg'); ?>" alt="" />
                        <span class="username">Bob Nilson</span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
                        <li><a href="calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
                        <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>
                        <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- eof: user login dropdown -->
            </ul>
            <!-- eof: top navigation menu -->
        </div>
    </div>
    <!-- bof: top navigation bar -->
</div>
<!-- eof: header -->
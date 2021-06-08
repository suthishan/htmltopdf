<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HTML TO PDF</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="../assets/css/main.css" rel="stylesheet">
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
    <style type="text/css">
    .badge {
        text-transform: inherit;
        width: 78%;
    }
    </style>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">

                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="../assets/images/sunithi.jpg"
                                                alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User
                                                Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Logout</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Sunithi S Ramesh
                                    </div>
                                    <div class="widget-subheading">
                                        Administrator
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">

                    <div class="scrollbar-sidebar">

                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboards</li>
                                <li>
                                    <a href="<?php echo base_url();?>admin/dashboard">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>admin/viewgroup" class="mm-active">
                                        <i class="metismenu-icon pe-7s-display2"></i>

                                        User List
                                    </a>

                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">

                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <!-- <i class="lnr-picture text-danger">
                                        </i> -->
                                    <i class="fa fa-building-o text-danger" aria-hidden="true"></i>
                                </div>
                                <div>View Users
                                </div>
                            </div>

                            <div class="page-title-actions">
                                <a href="<?php echo base_url();?>Admin/export_csv" class="btn-shadow mr-3 btn btn-dark">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-file-pdf-o"></i>

                                    </span>Export PDF</a>

                            </div>

                            <div class="d-inline-block dropdown">
                                <a href="<?php echo base_url();?>admin/adduser" class="btn-shadow  btn btn-info">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-plus-square-o fa-w-20"></i>

                                    </span>Add User</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Name</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Website</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                   $i=0; foreach($customer_data->result() as $row)
                                    { $i=$i+1;

                                    
                                    ?>
                                            <tr>
                                                <td class="text-center text-muted"><?php echo $i;?></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle"
                                                                        src="assets/images/avatars/4.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">
                                                                    <?php echo $row->CustomerName;?></div>
                                                                <div class="widget-subheading opacity-7">
                                                                    <?php echo $row->powerteam;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center"><?php echo $row->email;?></td>
                                                <td class="text-center">
                                                    <div class="badge badge-warning">
                                                        <i class="fa fa-globe" aria-hidden="true"></i>&nbsp;
                                                        <?php if ($row->website=='null' || $row->website=='')
                                                            {
                                                                echo "Nil";
                                                            }else{
                                                                echo $row->website;
                                                            }
                                                            ?>

                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1"
                                                        class="btn btn-primary btn-sm">Details</button>
                                                </td>
                                            </tr>


                                            <?php  }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>





                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            Copyright © 2020 Satvat Infosol
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>

</html>
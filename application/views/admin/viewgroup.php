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
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css'>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css'>

<body>
    <style type="text/css">
    .badge {
        text-transform: inherit;
        width: 78%;
    }


    .table {
        border-spacing: 0 0.85rem !important;
    }

    .table .dropdown {
        display: inline-block;
    }

    .table td,
    .table th {
        vertical-align: middle;
        margin-bottom: 10px;
        border: none;
    }

    .table thead tr,
    .table thead th {
        border: none;
        font-size: 12px;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: transparent;
    }

    .table td {
        background: #fff;
    }

    .table td:first-child {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .table td:last-child {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .avatar {
        width: 2.75rem;
        height: 2.75rem;
        line-height: 3rem;
        border-radius: 50%;
        display: inline-block;
        background: transparent;
        position: relative;
        text-align: center;
        color: #868e96;
        font-weight: 700;
        vertical-align: bottom;
        font-size: 1rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .avatar-sm {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 0.83333rem;
        line-height: 1.5;
    }

    .avatar-img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .avatar-blue {
        background-color: #c8d9f1;
        color: #467fcf;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child:before,
    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child:before {
        top: 28px;
        left: 14px;
        border: none;
        box-shadow: none;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>td:first-child,
    table.dataTable.dtr-inline.collapsed>tbody>tr[role="row"]>th:first-child {
        padding-left: 48px;
    }

    table.dataTable>tbody>tr.child ul.dtr-details {
        width: 100%;
    }

    table.dataTable>tbody>tr.child span.dtr-title {
        min-width: 50%;
    }

    table.dataTable.dtr-inline.collapsed>tbody>tr>td.child,
    table.dataTable.dtr-inline.collapsed>tbody>tr>th.child,
    table.dataTable.dtr-inline.collapsed>tbody>tr>td.dataTables_empty {
        padding: 0.75rem 1rem 0.125rem;
    }

    div.dataTables_wrapper div.dataTables_length label,
    div.dataTables_wrapper div.dataTables_filter label {
        margin-bottom: 0;
    }

    @media (max-width: 767px) {
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            -ms-flex-pack: center !important;
            justify-content: center !important;
            margin-top: 1rem;
        }
    }

    .btn-icon {
        background: #fff;
    }

    .btn-icon .bx {
        font-size: 20px;
    }

    .btn .bx {
        vertical-align: middle;
        font-size: 20px;
    }

    .dropdown-menu {
        padding: 0.25rem 0;
    }

    .dropdown-item {
        padding: 0.5rem 1rem;
    }

    .badge {
        padding: 0.5em 0.75em;
    }

    .badge-success-alt {
        background-color: #d7f2c2;
        color: #7bd235;
    }

    .table a {
        color: #212529;
    }

    .table a:hover,
    .table a:focus {
        text-decoration: none;
    }

    table.dataTable {
        margin-top: 12px !important;
    }

    .icon>.bx {
        display: block;
        min-width: 1.5em;
        min-height: 1.5em;
        text-align: center;
        font-size: 1.0625rem;
    }

    .btn {
        font-size: 0.9375rem;
        font-weight: 500;
        padding: 0.5rem 0.75rem;
    }

    .avatar-blue {
        background-color: #c8d9f1;
        color: #467fcf;
    }

    .avatar-pink {
        background-color: #fcd3e1;
        color: #f66d9b;
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
                                    <!-- table -->
                                    <table id="example" class="table table-hover responsive nowrap" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>Client Name</th>
                                                <th>Phone Number</th>
                                                <th>Email</th>
                                                <th>Designation</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                   $i=0; foreach($customer_data->result() as $row)
                                    { $i=$i+1;
                                        ?>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <div class="d-flex align-items-center">
                                                            <!--    <div class="avatar avatar-blue mr-3"><?php //echo $i;?></div> -->

                                                            <div class="">
                                                                <p class="font-weight-bold mb-0">
                                                                    <?php echo $row->CustomerName;?></p>
                                                                <p class="text-muted mb-0"><?php echo $row->email;?></p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><?php echo $row->mobile;?></td>
                                                <td><?php echo $row->email;?></td>
                                                <td> <?php echo $row->powerteam;?></td>
                                                <td>
                                                    <!-- <i class="fas fa-eye"></i><i class="fas fa-edit"></i><i
                                                        class="fas fa-trash-alt"></i> -->
                                                    <a href="edituserdetails/<?php echo $row->CustomerID;?>"
                                                        data-toggle="tooltip" title="Edit"
                                                        class="btn btn-danger btn-sm"><i
                                                            class="fa  fa-pencil-square-o fa-lg"></i></a>
                                                </td>

                                            </tr>

                                            <?php }?>
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
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js'></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $("#example").DataTable({
            aaSorting: [],
            responsive: true,

            columnDefs: [{
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 2,
                    targets: -1
                }
            ]
        });

        $(".dataTables_filter input")
            .attr("placeholder", "Search here...")
            .css({
                width: "300px",
                display: "inline-block"
            });

        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>

</body>

</html>
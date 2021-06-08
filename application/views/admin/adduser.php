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
    <link href="<?php echo base_url();?>/assets/css/main.css" rel="stylesheet">
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Crop -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js' type='text/javascript'></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css" />
<!-- Crop -->
<body>
    <style type="text/css">
    .badge {
        text-transform: inherit;
        width: 78%;
    }

    #uploaded_image img{
        border:solid 1px;
    }



    .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn_crop {
  border: 1px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
      border: dotted 1px;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  cursor: pointer;
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
                <!--  <div class="app-header-left">
                      
                        <ul class="header-menu nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon fa fa-database"> </i>
                                    Statistics
                                </a>
                            </li>
                            <li class="btn-group nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon fa fa-edit"></i>
                                    Projects
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon fa fa-cog"></i>
                                    Settings
                                </a>
                            </li>
                        </ul>       

                         </div> -->
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

                                    Groups
                                </a>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">

                    <!--       <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fa fa-building-o text-danger" aria-hidden="true"></i>
                                    </div>
                                    <div>View Company Group
                                        <div class="page-title-subheading">Inline validation is very easy to implement using the Architect Framework.
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">enter
                                    <button type="button" data-toggle="tooltip" title="" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark" data-original-title="Export PDF">
                                      Export PDF &nbsp;<i class="fa fa-file-pdf-o"></i>
                                 
                                    </button>
                                </div>
                            </div>
                        </div> -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Add User

                                </div>

                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <!-- <h5 class="card-title"></h5> -->
                                        <?php echo $this->session->flashdata('message');?>
                                        <form class="needs-validation" novalidate method="POST"
                                            enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Enter Name</label>
                                                    <input type="text" class="form-control" placeholder="Name"
                                                        name="customername" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Enter Company name</label>
                                                    <input type="text" class="form-control" placeholder="Company name"
                                                        name="companyname" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Enter Company Category</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Company Category" name="companycategory"
                                                        required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Enter Company Address</label>
                                                    <input type="text" class="form-control"
                                                        placeholder="Enter Company address" name="address" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Enter Company City</label>
                                                    <input type="text" class="form-control" placeholder="City"
                                                        name="city" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom02">Enter Company Pincode URL</label>
                                                    <input type="text" class="form-control" placeholder="Pin Code"
                                                        name="pincode" required>
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom03">Enter Company Mobile no</label>
                                                    <input type="text" class="form-control" id="validationCustom03"
                                                        placeholder="Mobile no" name="phone" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid city.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom04">Enter Email Id</label>
                                                    <input type="text" class="form-control" id="validationCustom04"
                                                        placeholder="Enter email Id" name="emailid" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid state.
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Enter Website URL</label>
                                                    <input type="text" class="form-control" id="validationCustom05"
                                                        placeholder="Enter Website URL" name="website" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Enter Facebook URL</label>
                                                    <input type="text" class="form-control" id="validationCustom05"
                                                        placeholder="Enter Facebook URL" name="fb" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Enter Instragram URL</label>
                                                    <input type="text" class="form-control" id="validationCustom05"
                                                        placeholder="Enter Instragram URL" name="instragram" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Enter Power Team</label>
                                                    <input type="text" class="form-control" id="validationCustom05"
                                                        placeholder="Enter Power Team" name="powerteam" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid zip.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom06">Upload Company Logo</label>
                                                  <!--   <input type="file" class="form-control" id="validationCustom06"
                                                        placeholder="Mobile no" name="companylogo" required> -->
                                                        <input type="file" name="upload_image" id="upload_image" accept="image/*" />
                                                    <div class="invalid-feedback">
                                                        Please provide a valid logo.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom07">Upload Profile image</label>
                                                    <!-- <input type="file" class="form-control" id="validationCustom07"
                                                        placeholder="Enter email Id" name="profileimage" required> -->
                                                        <input type="file" name="uploaded_image_company" id="uploaded_image_company" accept="image/*" />
                                                    <div class="invalid-feedback">
                                                        Please provide a valid profile image.
                                                    </div>
                                                </div>
                                                <!-- 
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom08">spec</label>
                                                    <input type="text" class="form-control" id="validationCustom08"
                                                        placeholder="Enter Website URL" name="spec" required>
                                                    <div class="invalid-feedback">
                                                        Please provide a valid type.
                                                    </div>
                                                </div> -->

                                            </div>


                                            <button class="btn btn-primary" type="submit" name="submit" id="submit"
                                                value="submit">Submit form</button>
                                        </form>

                                        <script>
                                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                                        (function() {
                                            'use strict';
                                            window.addEventListener('load', function() {
                                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                var forms = document.getElementsByClassName(
                                                    'needs-validation');
                                                // Loop over them and prevent submission
                                                var validation = Array.prototype.filter.call(forms,
                                                    function(form) {
                                                        form.addEventListener('submit', function(
                                                            event) {
                                                            if (form.checkValidity() ===
                                                                false) {
                                                                event.preventDefault();
                                                                event.stopPropagation();
                                                            }
                                                            form.classList.add('was-validated');
                                                        }, false);
                                                    });
                                            }, false);
                                        })();
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




<div class="col-md-12">

<div class="col-md-6">
<div id="uploaded_image"></div>
</div>
<div class="col-md-6">
    <div id="uploaded_image_company"></div>
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
    <!-- <script type="text/javascript" src="./assets/scripts/main.js"></script> -->
</body>


<!-- image upload -->
  
<div id="uploadimageModal" style="display:none" title="Upload & Crop Image">
 <br />
 <div style="width:66.67%; float:left">
  <div id="image_demo" style="width:350px; margin-top:30px"></div>
 </div>
 <div style="width:33.33%; float:left">
  <br />
    <br />
    <br/>
  <button class="btn btn-success crop_image">Crop & Upload Image</button>
 </div>
 <div style="clear:both"></div>
</div>

<script>  
$(document).ready(function(){

 $image_crop = $('#image_demo').croppie({
     enableExif: true,
     viewport: {
         width: 200,
         height: 200,
         type: 'square'
     },
     boundary: {
         width: 300,
         height: 300
     }
 });

 $('#upload_image').on('change', function () { 
  var reader = new FileReader();
  reader.onload = function (event) {
      $image_crop.croppie('bind', {
       url: event.target.result
      }).then(function(){
       console.log('jQuery bind complete');
      });
  }
  reader.readAsDataURL(this.files[0]);
  $("#uploadimageModal").dialog({width: 600});
 });

 $('.crop_image').on('click', function (evet) {
  $image_crop.croppie('result', {
   type: 'canvas',
   size: 'viewport'
  }).then(function (response) {
   $('#uploadimageModal').dialog( "close" );
   var html1  = '<img src="'+response+'" />';
   $('#uploaded_image').html(html1);
  });
 });

});  
</script>
<!-- image upload -->





</html>
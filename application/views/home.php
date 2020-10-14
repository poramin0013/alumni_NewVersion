<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALUMNI</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link href="http://localhost/alumni/source/dataTables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<header class="header-section">
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <!--  -->
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div style="text-align: center;" > 
                            <h2>ระบบสมาชิกศิษย์เก่า</h2>
                            <h3>Nakhon Pathom Rajabhat University</h3>
                            <img src="img/npru.png" >
                        </div>
                    </div>
                    <div class="col-lg-2 text-right col-md-2">
                    <!-- XXXX -->
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="index"><a href="index.php">HOME</a></li>
                        
                       
                        <li><a href="#"  data-toggle="modal" data-target="#login">LOG IN</a></li>
                        <li class="register" ><a href="<?php echo base_url();?>index.php/welcome/reg_alumni">ลงทะเบียน</a></li>
                       
                      
                        <li class="edit"><a href="edit.php">ประวัติส่วนตัว</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#logout">LOG OUT</a></li>
                      

                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
        <div class="nav-item" style="background-color: #fff;">
        </div>
    </header>
<style>
.index{
    background-color:#FFCCCC	;
    color:#FF66CC	;
}
</style>

<!--  -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ประชาสัมพันธ์</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
    <br>
</div>
<!--  -->

<!-- -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="img/upload/banner1920x600-01.jpg">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/upload/banner1920x600-02.jpg">
        </div>
        <div class="single-hero-items set-bg" data-setbg="img/upload/banner1920x600-03.jpg">
        </div>
    </div>
</section>
<!-- -->

<!--  -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-1">
        <?php //echo $_SESSION["name"] ; ?>
        </div>
        <div class="col-lg-10">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ข้อมูลศิษย์เก่า</h3>
                    </div>
                </div>
            </div>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>รหัสักศึกษา</th>
                        <th>ชื่อ</th>
                        <!-- xxxxx -->
                        <th>แสดง</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>...</td>
                        <td>...</td>
                        <!-- <td> ...</td> -->
                        <td><button type="button" class="btn" style="background-color:#e7ab3c;color:#fff;" onclick=""  data-toggle="modal" data-target="#details" >รายละเอียด</button></td>
                    </tr>

                </tbody>
            </table>
            <br>
            <br>
        </div>
        <div class="col-lg-1">
        </div>
    </div>
</div>
<!--  -->


<!-- -->
<div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog"  role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">รายละเอียด</span></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                 <div id="show_details"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </div>
</div>
<!--  -->












<?php include("footer.php") ?>

<script type="text/javascript">

// function show(id) {
// 	var form_data = new FormData();
// 	form_data.append('id', id);
// 	var getData = $.ajax({
// 		url: 'js_show.php',
// 		dataType: 'text',
// 		cache: false,
// 		contentType: false,
// 		processData: false,
// 		data: form_data,
// 		type: 'post',
// 		async: true,
// 		success: function(getData) {
// 			$("#show_details").html(getData);
// 		}
// 	}).responseText;
// }

</script>
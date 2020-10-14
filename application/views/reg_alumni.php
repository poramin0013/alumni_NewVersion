<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AlumniS</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css">

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
                            <img src="<?php echo base_url();?>img/npru.png" >
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
                        <li class="index"><a href="<?php echo base_url();?>index.php">หน้าแรก</a></li>
                        
                       
                        <li><a href="<?php echo base_url();?>">เข้าสู่ระบบ</a></li>
                        <li class="register" ><a href="<?php echo base_url();?>index.php/welcome/reg_alumni">ลงทะเบียน</a></li>
                       
                      
                        <li class="edit"><a href="edit.php">ประวัติส่วนตัว</a></li>
                        <li><a href="#"  data-toggle="modal" data-target="#logout">ออกจากระบบ</a></li>
                      

                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
        <div class="nav-item" style="background-color: #fff;">
        </div>
    </header>
<style>
.register{
    background-color:#FFCCCC;
    color:#FFFFCC;
}
</style>

<!-- -->
<div class="container">
    <br>
    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="contact-widget">
                <div class="cw-item">
                    <div class="ci-text">
                        <h3>ลงทะเบียน</h3>
                    </div>
                </div>
            </div>
            <form action="<?php echo base_url();?>index.php/manage/reg_alumni" method="post" enctype="multipart/form-data" id="form1">
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ข้อมูลส่วนตัว</span></h3>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <img style="width:125px;border:1px solid #e7ab3c; border-radius: 4px;" id="image"
                            src="<?php echo base_url();?>img/user.png">
                    </div>
                    <div class="form-group col-md-9">
                        <input type="file" id="inputImage" class="form-control" onchange="readURL(this);"
                            accept="image/*" name="img">
                        <br>
                        <label>เลขบัตรประชาชน <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="card_id" id="card_id">
                    </div>
                    <div class="form-group col-md-2">
                        <label>คำนำหน้า</label>
                        <select id="" class="form-control" name="prefix">
                            <option selected>-</option>
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label>ชื่อ</label>
                        <input type="text" class="form-control" name="fname" value="">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="inputPassword4">นามสกุล</label>
                        <input type="text" class="form-control" name="lname">
                    </div>
                    <div class="form-group col-md-6">
                        <label>เพศ</label>
                        <select id="" class="form-control" name="gender">
                            <option selected>-</option>
                            <option value="ชาย">ชาย</option>
                            <option value="หญิง">หญิง</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>วันเดือนปีเกิด</label>
                        <input type="date" class="form-control" name="birthday">
                    </div>

                    <div class="form-group col-md-2">
                        <label>เลขที่ / หมู่</label>
                        <input type="text" class="form-control" name="p_number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>ถนน</label>
                        <input type="text" class="form-control" name="p_road">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ตำบล/แขวง</label>
                        <input type="text" class="form-control" name="p_district">
                    </div>
                    <div class="form-group col-md-5">
                        <label>อำเภอ/เขต</label>
                        <input type="text" class="form-control" name="p_amphoe">
                    </div>
                    <div class="form-group col-md-5">
                        <label>จังหวัด</label>
                        <input type="text" class="form-control" name="p_province">
                    </div>
                    <div class="form-group col-md-2">
                        <label>ไปรษณีย์</label>
                        <input type="text" class="form-control" name="p_zipcode">
                    </div>
                    <div class="form-group col-md-6">
                        <label >เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" name="p_tel">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Facebook</label>
                        <input type="text" class="form-control" name="facebook">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ข้อมูลการศึกษา</span></h3>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>รหัสนักศึกษา <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="student_id" id="student_id">
                    </div>
                    <div class="form-group col-md-6">
                        <label>หมู่เรียน</label>
                        <input type="text" class="form-control" name="group">
                    </div>
                    <div class="form-group col-md-6">
                        <label>สาขา</label>
                        <input type="text" class="form-control" name="branch">
                    </div>
                    <div class="form-group col-md-6">
                        <label>คณะ</label>
                        <input type="text" class="form-control" name="faculty">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ภาคการศึกษา</label>
                        <select id="" class="form-control" name="semester">
                            <option selected>-</option>
                            <option value="ภาคเรียนปกติ">ภาคเรียนปกติ</option>
                            <option value="ภาคเรียนพิเศษ">ภาคเรียนพิเศษ</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>ระดับการศึกษา</label>
                        <select id="" class="form-control" name="education_level">
                            <option selected>-</option>
                            <option value="ปริญญาตรี">ปริญญาตรี</option>
                            <option value="ปริญญาโท">ปริญญาโท</option>
                            <option value="ปริญญาเอก">ปริญญาเอก</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>ปีการศึกษาที่เข้า</label>
                        <select id="" class="form-control" name="year_int">
                            <option selected>-</option>
                            <option value="2553">2553</option>
                            <option value="2554">2554</option>
                            <option value="2555">2555</option>
                            <option value="2556">2556</option>
                            <option value="2557">2557</option>
                            <option value="2558">2558</option>
                            <option value="2559">2559</option>
                            <option value="2560">2560</option>
                            <option value="2561">2561</option>
                            <option value="2562">2562</option>
                            <option value="2563">2563</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label>ปีการศึกษาที่จบ</label>
                        <select id="" class="form-control" name="year_out">
                            <option selected>-</option>
                            <option value="2553">2553</option>
                            <option value="2554">2554</option>
                            <option value="2555">2555</option>
                            <option value="2556">2556</option>
                            <option value="2557">2557</option>
                            <option value="2558">2558</option>
                            <option value="2559">2559</option>
                            <option value="2560">2560</option>
                            <option value="2561">2561</option>
                            <option value="2562">2562</option>
                            <option value="2563">2563</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>ผลงานที่โดดเด่น</label>
                        <textarea class="form-control" rows="3" name="outstanding_work"></textarea>
                    </div>
                </div>
                <br>
                <h3><span class="badge" style="background-color:#e7ab3c;color:#fff;">ข้อมูลการทำงาน</span></h3>
                <hr>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>ตำแหน่งงาน</label>
                        <input type="text" class="form-control" name="position">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ชื่อบริษัท</label>
                        <input type="text" class="form-control" name="company">
                    </div>
                    <div class="form-group col-md-6">
                        <label>เบอร์โทรศัพท์บริษัท</label>
                        <input type="text" class="form-control" name="c_tel">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label>เลขที่ / หมู่</label>
                        <input type="text" class="form-control" name="c_number">
                    </div>
                    <div class="form-group col-md-4">
                        <label>ถนน</label>
                        <input type="text" class="form-control" name="c_road">
                    </div>
                    <div class="form-group col-md-6">
                        <label>ตำบล/แขวง</label>
                        <input type="text" class="form-control" name="c_district">
                    </div>
                    <div class="form-group col-md-5">
                        <label>อำเภอ/เขต</label>
                        <input type="text" class="form-control" name="c_amphoe">
                    </div>
                    <div class="form-group col-md-5">
                        <label>จังหวัด</label>
                        <input type="text" class="form-control" name="c_province">
                    </div>
                    <div class="form-group col-md-2">
                        <label>ไปรษณีย์</label>
                        <input type="text" class="form-control" name="c_zipcode">
                    </div>
                </div>
                <br>

                <div>
                    <button type="submit" class="btn" style="background-color:#e7ab3c;color:#fff;">ลงทะเบียน</button>
                    <button type="reset" class="btn btn-secondary">รีข้อมูล</button>
                </div>



            </form>

        </div>
    </div>
    <br>
    <br>
</div>

<?php include("footer.php") ?>



<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#image').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
};



$(function() {
    $("#form1").on("submit", function(e) {
        var p_card = $("#p_card").val();
        var studentCode = $("#studentCode").val();

        if (p_card == '') {
            alert("กรุณาใส่เลขบัตรประชาชน");
            e.preventDefault();
        } else if (studentCode == '') {
            alert("กรุณาใส่รหัสนักศึกษา");
            e.preventDefault();
        }
    });

});
</script>
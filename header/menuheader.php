    <!--MENU HEADER -->
<?php 
    session_start();
    $TaiKhoan = DP::run_query("SELECT * FROM taikhoan WHERE trangthai!=0",[],2);
    $KiemTra_Admin = DP::run_query("SELECT * FROM taikhoan WHERE hoatdong = 1",[],2);

    $loaitk = '';
    if(count($KiemTra_Admin) > 0)
        $loaitk = $KiemTra_Admin[0]['loaiTK'];
    if($loaitk == 1)
        header('location:'.$level.'Admin/index.php');
 ?>
 <style type="text/css">
    .link{
        text-decoration: none;
        text-align: center;
     }
    a.link:hover{
        background-color: black;
        color:white;
     }
 </style>
 <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="user-menu">
                        <ul>
                            <!-- username -->
                            <li>
                                <?php 
                                    $flag = 0; $str = "Log In"; $link = $level.'login.php';
                                    foreach($TaiKhoan as $acc)
                                    {
                                        if($acc['hoatdong'] != '0')
                                        {
                                        ?>
                                <a href="<?php echo $level.PAGE.'account.php?user='.$acc['username']?>" style='text-decoration: none'>
                                <i class="fa fa-user"></i> 
                                <?php
                                        
                                            if(!empty($acc['username']))
                                            {
                                                echo $acc['fullname']; 
                                                $flag = 1; $str = 'Log Out'; $link = $level.CONT.'logout.php';
                                                break;
                                            }
                                        }
                                    }
                                    if($flag == 0)
                                    {
                                        echo "My Account";
                                    }     
                                 ?>
                            </a></li>

                            <!-- Đăng xuất/ đăng nhập -->
                            <li>
                                    <a href='<?php echo $link;?>'style='text-decoration: none'><i class="fa fa-user"></i><?php echo $str; ?></a>
                            </li>

                            <!-- hộp thư -->
                            <?php 
                                $id_mailbox = '#mail';
                                if($str == 'Log In')
                                    $id_mailbox = '#message_mail';
                             ?>
                            <li>
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                    <em class="fa fa-envelope" data-toggle="modal" data-target="<?php echo $id_mailbox; ?>">  Mail-Box </em>
                                </a>

                            <!-- Mail Box -->
                            <!-- The Modal -->
                            <div class="modal fade" id="mail">
                                <div class="modal-dialog modal-lg">
                                    <form action="<?php echo $level.CONT.'addmail.php';?>" method="GET">
                                        <div class="modal-content">
                                        <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title" style="text-align: center;"><b>Mail</b></h4>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <!--form-group: 1 nhóm của form -->
                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-sm-2'>
                                                            <label for='name' style="float:left">Name:</label>
                                                        </div>
                                                        <div class='col-sm-4'>
                                                            <input class='form-control' disabled value="<?php echo $acc['fullname']; ?>">
                                                            <input name="name" hidden='true' value="<?php echo $acc['fullname']; ?>">
                                                        </div>
                                                        <div class='col-sm-2'>
                                                            <label for='email' style="float:left">Email:</label>
                                                        </div>
                                                        <div class='col-lg-4'>
                                                            <input class='form-control' disabled value="<?php echo $acc['email']; ?>">
                                                            <input name="email" hidden='true' value="<?php echo $acc['email']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='form-group'>
                                                    <label for='noidung' style="float:left">Mail Content:</label>
                                                    <textarea class='form-control' style="height:200px" name='noidung'></textarea>
                                                </div>
                                                    <input type="text" name="ngaygui" hidden="true" value="<?php echo date('d/m/Y') ?>">
                                                    <input type="text" name="giogui" hidden="true" value="<?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('H:i') ?>">
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                    <button type='submit' class='btn btn-primary'>Send</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <!-- Thông báo đăng nhập -->
                            <div class="modal fade" id="message_mail">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <center>
                                                <span class='fa fa-info-circle' style='font-size: 100px;color:dodgerblue;margin-bottom: 10px'></span>
                                                <h3>You need an account to be able to send mail.</h3>
                                            </center>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <center>
                                                <a href="<?php  echo $level.'login.php'; ?>" class='link'>Log in now</a>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </li>
                        </ul>
                    </div>
                </div>
                

                    <div class="col-md-6" >
                    <form action="<?php echo $level.PAGE.'search.php' ?>" method="get">

                        <!-- textbox -->
                        <div class='col-md-9'>
                            <input type="search" name="search" class="form-control" placeholder="Search">
                            <input type="search" name="flag" hidden="true" value="0"><!-- 0 là tìm theo 1 điều kiện -->
                        </div>

                        <!-- button tìm -->
                        <div class='col-md-1'>
                            <button type="submit" class='form-control'> 
                                <span class="fa fa-search" aria-hidden="true"></span>
                            </button>
                        </div>
                        </form>
                        <!-- button tìm kiếm theo tên, giá -->
                        <div class='col-md-2'>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#timkiem">Conditional Search</button>
                        
                            <div class="modal fade" id="timkiem">
                                <div class="modal-dialog modal-sm">
                                    <form action='<?php echo $level.PAGE.'search.php' ?>' method='GET'>
                                        <div class="modal-content">
                                        <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title" style="text-align: center;"><b>Search Product</b></h4>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">

                                                <div class='form-group'>
                                                    <div class='row'>
                                                        <div class='col-sm-6'>
                                                            <label for='username' style="float:left">Product's name: </label>
                                                        </div>
                                                        <div class='col-sm-6'>
                                                            <!-- select nó sẽ lấy dữ liệu từ VALUE của option -->
                                                          <input type="text" name="tensanpham" class='form-control'>

                                                        </div>
                                                        <input type="search" name="flag" hidden="true" value="1"><!-- 1 là tìm theo nhiều điều kiện -->
                                                        <div class='col-sm-6'>
                                                            <label for='username' style="float:left">Price: </label>
                                                        </div>

                                                         <div class='col-sm-6'>
                                                           <input type="text" name="giaban" class='form-control'>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type='submit' class='btn btn-warning'>Search</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
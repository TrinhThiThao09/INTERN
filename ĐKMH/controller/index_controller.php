<?php 
    
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }else{
        $action = '';
    }

    
    switch($action){
        case 'login':{

            if(isset($_POST['dangnhap'])){
                $masv = $_POST['maSv'];
                $matkhau = $_POST['passWord'];
                $num = $db->loginAccept($masv , $matkhau);
                sleep(2);
                
                if($num >0){
                    $_SESSION['daDangNhap'] = $masv;
                    header('location:index.php?controller=actor&action=lichthi');
                }
                else{
                    ?>
                    <script type = "text/javascript">
                        alert("Mã sinh viên hoặc Mật khẩu không chính xác !!!");
                     </script>
                    <?php
                }
            }
            else if(isset($_POST['admin'])){
                $user = $_POST['maSv'];
                $password = $_POST['passWord'];
                $num = $db->loginAcceptAdmin($user , $password);
                sleep(2);
                
                if($num >0){
                    $_SESSION['daDangNhap'] = $user;
                    header('location:index.php?controller=actor&action=quantrivien');
                }
                else{
                    ?>
                    <script type = "text/javascript">
                        alert("User hoặc Password không chính xác !!!");
                     </script>
                    <?php
                }
            }

            require_once('view/login.php');
        break;
        }

        case 'lichthi':{
            $masv = null;
            if(isset($_SESSION['daDangNhap'])){
                $masv = $_SESSION['daDangNhap'];
            }
            // lấy thông tin người dùng
            $infor = $db->getActor($masv);
            $hoTen = $infor["hoTen"];
            
            
            // hiện danh sách môn thi
            $query =  $db->selectLichThi($masv);
            require_once('view/lichThi.php');
        break;
        }
        case 'dangKyThi':{
            $masv = null;
            if(isset($_SESSION['daDangNhap'])){
                $masv = $_SESSION['daDangNhap'];
            }
            // lấy thông tin người dùng
            $infor = $db->getActor($masv);
            $hoTen = $infor["hoTen"];
            // hiện danh sách môn cần đăng kí
            $query =  $db->selectMonDk();
             // thêm môn thi
             $maMon = null;
             if(isset($_GET['add']) && !empty($_GET['add'])){
                $maMon = $_GET['add'];
                $num = $db->checkMonDk($maMon , $masv);
                $count = $num["count"];
                if($count == 0){
                    $db->insertMonDk($maMon , $masv);
                    
                }
            }
            // số môn thi đã đăng kí
            $num_2 = $db->countKiThi($masv);
            $count_2 = $num_2["count_lt"];
            require_once('view/dangKyThi.php');
        break;
        }
        case 'inLichThi':{
            $masv = null;
            if(isset($_SESSION['daDangNhap'])){
                $masv = $_SESSION['daDangNhap'];
            }
            // lấy thông tin người dùng
            $infor = $db->getActor($masv);
            $hoTen = $infor["hoTen"];
            $ngaysinh = $infor["ngaySinh"];
            $nganhhoc = $infor["nganhHoc"];
            $khoa = $infor["khoa"];
            $lop = $infor["lop"];

            // hiện danh sách môn thi
            $query =  $db->selectLichThi($masv);
            require_once('view/inLichThi.php');
        break;
        }
        case 'quantrisinhvien':{
            // hiện danh sách sinh viên
            $query = $db->selectSinhVien();
            require_once('view/quantrisinhvien.php');
        break;
        }
        case 'quantrivien':{
            # code...
            $user = null;
            if(isset($_SESSION['daDangNhap'])){
                $user = $_SESSION['daDangNhap'];
            }
            // lấy thông tin người dùng
            $infor = $db->getActor($user);
            $hoTen = $infor["user"];
            require_once('view/quantrivien.php');
            break;
        }
        case 'quantrimonhoc':{
            // hiện danh sách sinh viên
            $query = $db->selectMonhoc();
            require_once('view/quantrimonhoc.php');
        break;
        }
        case 'themsinhvien':{
            require_once('view/themsinhvien.php');
            if(isset($_GET['save'])&& !empty($_GET['save'])){
                $masv = $_POST['mssv'];
                $password = $_POST['password'];
                $hoten = $_POST['hoten'];
                $ngaysinh = $_POST['ngaysinh'];
                $nganhhoc = $_POST['nganhhoc'];
                $khoa = $_POST['khoa'];
                $lop = $_POST['lop'];

                $query = $db->insertSinhvien($masv,$password,$hoten,$ngaysinh,$nganhhoc,$khoa,$lop);
            }
            break;
        }
            
    }
?>
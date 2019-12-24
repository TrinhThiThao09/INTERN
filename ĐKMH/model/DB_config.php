<?php

    class database{
        private $hostName = 'localhost:3306';
        private $userName = 'root';
        private $pass = 'ngocbich';
        private $dbName = 'bich_mvc-1';
        
        private $conn = null;
        private $result = null;

         // kết nối database
         public function connect()
         {
             # code...
             $this->conn = new mysqli($this->hostName , $this->userName , $this->pass , $this->dbName);
             if(!$this->conn){
                 echo "kết nối thất bại";
             }else{
                 mysqli_set_charset($this->conn , 'utf8');
             }
             return $this->conn;
         }
         // thực thi câu lệnh truy vấn
         public function execute($sql)
         {
             # code...
             $this->result = $this->conn->query($sql);
             return $this->result;
         }
         // phương thức lấy dữ liệu
         public function getData()
         {
             # code...
             if($this->result){
                 $data = mysqli_fetch_array($this->result);
             }
             else{
                 $data = 0;
             }
             return $data;
         }
         // phương thức lấy toàn bộ dữ liệu
         public function getAllData($table)
         {
             # code...
             $sql = "select * from $table";
             $this->execute($sql);
             if($this->numRow() == 0){
                 $data = 0;
             }else{
                 while($datas = $this->getData()){
                     $data[] = $datas;
                 }
             }
             return $data;
         }
           // phương thức đếm số lượng bản ghi
        public function numRow()
        {
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }else{
                $num = 0;
            }
            return $num;
        }
         //hiện danh sách các môn đăng kí 
         public function selectMonDk()
         {
             # code...
             $sql = "select * from mondkthi";
            return $this->execute($sql);
         }
         // thêm môn đăng kí thi
         public function insertMonDk($maMon , $masv)
         {
             # code...
             $sql = "insert into lichthi(maMon , maSv) values('$maMon' , '$masv')";
             return $this->execute($sql);

         }
         // thêm danh sách sinh viên
         public function insertSinhvien($masv,$password,$hoten,$ngaysinh,$nganhhoc,$khoa,$lop)
         {
             # code...
             $sql = "insert into sinhvien(maSv,passWord,hoTen,ngaySinh,nganhHoc,khoa,lop) values('$masv','$password','$hoten','$ngaysinh','$nganhhoc','$khoa','$lop')";
             return $this->execute($sql);

         }
         // check môn thi đã được đăng kí hay chưa
         public function checkMonDk($masv , $maMon)
         {
             # code...
             $sql = "select count(maLichThi) as count from lichthi where maMon = '$maMon' and maSv = '$masv'";
             $this->execute($sql);
             $data = $this->getData();
             return $data;
         }
         // đếm số kì thi đã đăng kí
         public function countKiThi($masv)
         {
             # code...
             $sql = "select count(*) as count_lt from lichthi where maSv = '$masv'";
             $this->execute($sql);
             $data = $this->getData();
             return $data;
         }
         // hiện danh sách lịch thi
         public function selectLichThi($masv)
         {
             # code...
             $sql = "select * from mondkthi m inner join lichthi lt on m.maMon = lt.maMon where lt.maSv = '$masv'";
             return $this->execute($sql);
         }
         // đếm số người đăng kí
         public function countActor($maMon)
         {
             # code...
             $sql = "select count(maMon) as count from lichthi where maMon= '$maMon'";
             $this->execute($sql);
             $data = $this->getData();
             return $data;

         }
         // xác minh tài khoản đăng nhập sinh viên
        public function loginAccept($masv , $password)
        {
            # code...
            $sql = "select * from sinhvien where maSv = '$masv' and passWord = '$password'";
            $this->execute($sql);
            $num = $this->numRow();
            return $num;
        }
        // xác minh tài khoản đăng nhập quản trị viên
        public function loginAcceptAdmin($user, $password)
        {
            $sql = "select * from admin where user = '$user' and password = '$password'";
            $this->execute($sql);
            $num = $this->numRow();
            return $num;
        }
         // lấy thông tin tài khoản đang đăng nhập
         public function getActor($masv)
         {
             # code...
             $sql = "select * from sinhvien where maSv = '$masv'";
             $this->execute($sql);
             $data = $this->getData();
             return $data;
         }
         // lấy thông tin tài khoản đăng nhập admin
         public function getActorAdmin($user)
         {
             # code...
             $sql = "select * from admin where user = '$user'";
             $this->execute($sql);
             $data = $this->getData();
             return $data;
         }
         // hiện ds sinh viên
         public function selectSinhVien()
         {
            # code ...
            $sql = "select * from sinhvien";
            return $this->execute($sql);
         }
          // hiện ds môn học
         public function selectMonhoc()
         {
            # code ...
            $sql = "select * from mondkthi";
            return $this->execute($sql);
         }
    }
    
?>  
<?php

    /*  Connect Database  */

    abstract class Database
    {
        /**
         *      Tên host server.
         */
        private $__host;
        
        /**
         *      Tên Database
         */
        private $__dtbname;
        
        /**
         *      Tên đăng nhập
         */
        private $__username;
        
        /**
         *      Mật khẩu
         */
        private $__password;

        /**
         *      Dữ liệu được trả về
         */
        protected $__conn;


        /**
         *      Hàm khởi tạo
         */
        protected function __construct(string $dtbname)
        {
            if (empty($dtbname)) {
                throw new Exception("$dtbname is null");
            }

            $this->__host = 'localhost';
            $this->__dtbname = $dtbname;
            $this->__username = 'root';
            $this->__password = '';

            //  Trả về đối tượng lớp PDO
            $this->__conn = $this->connect();
        }

        /**
         *      Hàm kết nối tới Database
         */
        private function connect()
        {
            try {
                $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                //  Tạo đối tượng lớp PDO
                $conn = new PDO('mysql:host='.$this->__host.';dbname='.$this->__dtbname, $this->__username, $this->__password, $options);
                return $conn;
                //  echo "Connected successfully";
            }
            catch (PDOException $e) {
                //throw $e->getMessage();
                echo 'Connection failed: ' . $e->getMessage();
            }
        }

    }

?>
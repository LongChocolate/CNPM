<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB','coffee');
    class Connection
    {
        private static $conn;
        public static function open_database()
        {
        
            if(Connection::$conn == null)
            {
                Connection::$conn = new mysqli(HOST,USER,PASS,DB);
            }
            return Connection::$conn;
        }
    }

?>
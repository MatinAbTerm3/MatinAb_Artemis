<?php
include 'Product.php';
include 'User.php';
include 'Message.php';

if(! class_exists('DB'))
{
    class DB
    {
        var $dbc;
        function __construct($selectDB = true)
        {
            $this -> connect();
			if($selectDB)
				$this -> selectDB();
            $this -> dbc -> set_charset(CHARSET);
        }
        function connect()
        {
            //Connect to databse
            $this -> dbc = new mysqli(DBHOST,DBUSER,DBPASS);
            if($this -> dbc -> connect_error)
            {
                $error = "
                خطا در اتصال به پایگاه داده!
                <section lang = 'en'>{$this -> dbc -> connect_error}</section>";
                die($error);
            }
        }
        function selectDB()
        {
            $this -> dbc -> select_db(DBNAME);
            if($this -> dbc -> error)
            {
                $error = "
                    خطا در انتخاب پایگاه داده!
                    <section lang = 'en'>{$this -> dbc -> error}</section>";
                die($error);
            }
        }
        function execute($sql)
        {
            //Execute query
            $result = $this -> dbc -> query($sql);
            if($this -> dbc -> error)
            {
                $error = "
                    خطا در اجرای کوئری!
                    <section lang = 'en'>{$sql}<br>
                                         {$this -> dbc -> error}</section>";
                die($error);
				return false;
            }
			else if($result !== true && $result !== false) //select
			{
				$table = $result -> fetch_all(MYSQLI_ASSOC);
				return $table;
			}
			else if(isset($this -> dbc -> insert_id)) //insert
			{
				return $this -> dbc -> insert_id;
			} 
            else //update , delete
                return $result;
        }
        function __destruct()
        {
            $this -> dbc -> close();
        }
    }
}

?>
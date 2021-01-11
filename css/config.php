
<?php 
class DB_con
{   
    public $dbh;
	function __construct(){
		$con=mysqli_connect('localhost','root','','cedhosting');
		$this->dbh=$con;
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else{
			echo "connected";
		}
    }
}
$obj = new DB_con();

    ?>
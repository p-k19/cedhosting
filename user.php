<?php include_once 'dbcon.php' ?>
<?php
 class user
{  
public $email;
public $name;
public $mobile;
public $email_aproved;
public $phone_approved;
public $active;
public $is_admin;
public $password;
public $security_answer;
public $security_question;
public $con;
  
                                    
     public function __construct()
    {
        $dbcon=new Dbcon();
        $this->con=$dbcon->createConnection();
       }
    

   public function userSignup($name, $email, $mobile, $security_question, $security_answer, $password)
    {
        $sql="INSERT INTO `tbl_user` (`email`,`name`,`mobile`,`email_approved`,
        `phone_approved`,`active`,`is_admin`,`password`,
        `security_question`,`security_answer`)
        VALUES ('$email','$name','$mobile','0','0','0','0',
        '$password','$security_question','$security_answer')";
        if ($this->con->query($sql)) {
            echo 'Inserted successfully';// return true;
        }
        else{
        echo 'Not inserted';  // return false;
    }
  }

  public function login($email,$password)
  {
  $sql="SELECT * FROM `tbl_user` where email='$email' AND password='$password'";
  $result = $this->con->query($sql);
  
  $row = $result->fetch_assoc();
  
  
  if( $row['is_admin']=='1')
  {

    return 1;
    //echo "<script></script>";
  
  }
  elseif($row['is_admin'] =='0'){
    return 0;
  //echo "<script>alert('user')</script>";
  }
  else{
    return -1;
    //echo "<script>alert('Invalid user')</script>"; 
  }
  
  }
 public  function header_hosting(){
    $sql="SELECT prod_name  FROM tbl_product WHERE prod_parent_id ='1' AND prod_available ='1'";
  $result = $this->con->query($sql);
  
  $row = $result->fetch_assoc();
  }
}


?>







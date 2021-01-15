
<?php
include_once 'dbcon.php';
class product 
{
    public $id;
    public $prod_parent_id;
    public $prod_name;
    public $link;
    public $prod_available;
    public $prod_launch_date;
    public $connection_prod;

 

    
    public function __construct(){
        $dbcon=new Dbcon();
        $this->connection_prod=$dbcon->createConnection();

    }
    public function hosting()
    {
        $sql="SELECT * FROM `tbl_product` where prod_parent_id='1' And prod_available='1'";
         $result = $this->connection_prod->query($sql);
         if($result->num_rows>0){
             return $result;
         }
         else{
             return false;
         }}


         public function create_category($name,$link){
             $sql2="INSERT INTO `tbl_product`(`prod_name`, `link`,`prod_parent_id`,`prod_available`,`prod_launch_date`)
             VALUES ($name,$link,'1','1',now());";
             $this->connection_prod->query($sql2);
             if($sql)
             {
                 echo "<script>alert('Inserteed')</script>";
             }
             else{
                echo "<script>alert('not Inserteed')</script>";
             }
             
         }

        public  function get_data($enterProduct,$branch,$enterMonthly,$enterAnnual,$sku, $webSpacing,$bandwidth,$language,$freeDomain,$mailbox){ 
              $datae = array( 
                 //'productname' => $enterProduct, 
                 'url' => $branch, 
                 //'monthly' => $enterMonthly, 
                 //'annual' => $enterAnnual, 
                 //'sku' => $sku, 
                 'webspace' => $webSpacing, 
                 'bandwidth' => $bandwidth, 
                 'language' => $language, 
                 'mail' => $mailbox, 
                 'domain' => $freeDomain, 

            ); 
        
            $encode=json_encode($datae); 
            $sql3="INSERT INTO `tbl_product_description`( `prod_id`, `description`, `mon_price`, `annual_price`, `sku`)
             VALUES (1,'$encode','$enterMonthly','$enterAnnual','$sku')";

             $this->connection_prod->query($sql3);
             if($sql3)
             {
                 echo "<script>alert('Inserteed')</script>";
             }
             else{
                echo "<script>alert('not Inserteed')</script>";
             }

            return $encode;
            $description=var_dump(json_decode($encode));


        } 

         
}
    
    ?>

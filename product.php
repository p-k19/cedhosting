
<?php
class product 
{
    public $connection_prod;
    public function __construct(){
        $dbcon=new Dbcon();
        $this->connection_prod=$dbcon->createConnection();

    }
    public function hosting()
    {
        $sql="SELECT prod_name,link FROM `tbl_product` where prod_parent_id='1' And prod_available='1'";
         $result = $this->connection_prod->query($sql);
         if($result->num_rows>0){
             return $result;
         }
         else{
             return false;
         }

         
        
    }
}
    
    ?>

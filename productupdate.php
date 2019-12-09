
<?php
require_once('connection.php');

$target_dir = "uploads/";
$target_file = $target_dir .basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

$a="";
$b="";
$c="";
$e="";

$PRODUCTID=$_POST['productID'];
$PRODUCTNAME=$_POST['productname'];
$CATEGORY=$_POST['category'];
$IMAGE=$target_file;
$PRINCIPALPRICE=$_POST['principalprice'];
$SELLINGPRICE=$_POST['sellingprice'];
$INSTOCK=$_POST['instock'];
$DESCRIPTION=$_POST['description'];
$DETAILS=$_POST['details'];
$ADDITIONALINFO=$_POST['additionalinfo'];
$AVAILABLEIN=$_POST['availablein'];

if(isset($_POST["produpdate"])) {

      try{
                mysqli_query($con," UPDATE productstbl SET productname='$PRODUCTNAME', category='$CATEGORY', image='$IMAGE', principalprice='$PRINCIPALPRICE', sellingprice='$SELLINGPRICE', instock='$INSTOCK', description='$DESCRIPTION', details='$DETAILS', additionalinfo='$ADDITIONALINFO', availablein='$AVAILABLEIN') WHERE  productID='$PRODUCTID' ");

                $b= "The product  " .$PRODUCTNAME ." has been successfully updated<br>"  ."<br>" ;

                header("location: adminproductupdate.php?productsmsgsuccess= $b "); 
            }catch(Exception $e) {
                $msg='Message: ' .$e->getMessage();

             }           

} 
else{
    header("location: adminproductupdate.php?productsmsgerr= Unable to Update the product. ");
}



?>
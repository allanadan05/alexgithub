
<?php
require_once('connection.php');

$target_dir = "uploads/";
$target_file = $target_dir ."product" ."_" .time() .basename($_FILES["image"]["name"])  ;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image

$a="";
$b="";
$c="";
$e="";

$PRODUCTID=$_POST['productname'] .time();
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

if(isset($_POST["newproduct"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        //$a="File is an image - " . $check["mime"] . ". <br>";
        $uploadOk = 1;
    } else {
        $a="File is not an image." ."<br>";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    $a="Sorry, file already exists." ."<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    $a="Sorry, your file is too large." ."<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
    $a="Sorry, only JPG, JPEG, PNG and GIF files are allowed." ."<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $e="Sorry, your file was not uploaded." ."<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        
        $b= "The product  " .$PRODUCTNAME ." has been successfully added to products<br>" ."The file " .basename( $_FILES["image"]["name"]) ." has been uploaded." ."<br>" ;
        $c=1;
            

    } else {
        $e="Sorry, there was an error uploading your file." ."<br>";
    }
}

}

if($c == 1){
            try{
                mysqli_query($con," insert into productstbl (productID, productname, category, image, principalprice, sellingprice, instock, description, details, additionalinfo, availablein) values ('$PRODUCTID', '$PRODUCTNAME', '$CATEGORY', '$IMAGE', '$PRINCIPALPRICE', '$SELLINGPRICE', '$INSTOCK', '$DESCRIPTION', '$DETAILS', '$ADDITIONALINFO', '$AVAILABLEIN') ");

                header("location: adminproduct.php?productsmsgsuccess= $b "); 
            }catch(Exception $e) {
                $msg='Message: ' .$e->getMessage();

             }
        
}
else{
    header("location: adminproduct.php?productsmsgerr= $msg $a $e ");
}



?>
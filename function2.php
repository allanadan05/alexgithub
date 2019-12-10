<?php 

function countmessage($id){
    include('connection.php');	

    $sql="SELECT COUNT(messagetext) as messagecount FROM messagingtbl WHERE msgtoaccountid=".$id;
    $executeQuery=mysqli_query($con, $sql);
    $result=mysqli_fetch_array($executeQuery);
    $ibalik=$result['messagecount'];
    
    return $ibalik;

}







?>
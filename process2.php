<?php 
include('connection.php');


if(isset($_GET['palatandaan'])){
$palatandaan =  $_GET['palatandaan'];
if($palatandaan =="sendmessage"){
        $date=date("d/m/Y");
        $msgfrom=$_GET['messagefrom'];
        $msgto=$_GET['messageto'];
        $msghere=$_GET['messagehere'];

        $sql="INSERT INTO messagingtbl(messagedate,msgfromaccountid,msgtoaccountid,messagetext) VALUES ( SYSDATE(),'$msgfrom','$msgto','$msghere')";
        $res2=mysqli_query($con,$sql);
        if($res2)
	    {
           echo "<div class='alert alert-success'>Message sent</div>";
	    }
	    else
	    {
            echo "<div class='alert alert-danger'>Message cannot be sent</div>";
	    }
        
    

    }
}

if(isset($_GET['palatandaan'])){
    $palatandaan =  $_GET['palatandaan'];
    if($palatandaan =="replymessage"){
            $date=date("d/m/Y");
            $msgfrom=$_GET['messagefrom'];
            $msgto=$_GET['messageto'];
            $msghere=$_GET['messagehere'];
    
            $sql="INSERT INTO messagingtbl(messagedate,msgfromaccountid,msgtoaccountid,messagetext) VALUES ( SYSDATE(),'$msgfrom','$msgto','$msghere')";
            $res2=mysqli_query($con,$sql);
            if($res2)
            {
               echo "<div class='alert alert-success'>Message sent</div>";
            }
            else
            {
                echo "<div class='alert alert-danger'>Message cannot be sent</div>";
            }
            
        
    
        }
    }

    if(isset($_GET['palatandaan'])){
        $palatandaan =  $_GET['palatandaan'];
        if($palatandaan =="addstock"){
               
                $addid=$_GET['addid'];
                $quantity=$_GET['quantity'];
                $instock=$_GET['instock'];
                $totalquantity=$quantity+$instock;
                $pambato = array();
                $sql="UPDATE productstbl SET instock='$totalquantity' WHERE pid='$addid'";
                $res2=mysqli_query($con,$sql);
                if($res2)
                {
                    $pambato['alertres']="<div class='alert alert-success'>Add item success</div>";
                    $pambato['newinstock']=$totalquantity;
                }
                else
                {
                    $pambato['alertres']="<div class='alert alert-danger'>Error</div>";
                }
                echo json_encode($pambato);
            
        
            }
        }














?>
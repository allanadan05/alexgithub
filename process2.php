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





        if(isset($_GET['palatandaan'])){
            $palatandaan =  $_GET['palatandaan'];
            if($palatandaan =="getdate"){
                   $str="";
                    $getdate=$_GET['getdate'];
                    $sql="SELECT * FROM salestbl where date='$getdate'";
                    $query=mysqli_query($con, $sql);
                   
                    $str.='
                    <tr>
                                                             <th style="text-align: left;"> Item </th>
                                                             <th style="text-align: left;"> Quantity </th>
                                                             <th style="text-align: left;"> Amount </th>
                                                         </tr>
                    ';

                    while($result=mysqli_fetch_array($query))
                    { 

                        $str.='<tr>
                        <td style="text-align: left;">'.$result['productID'].'</td>
                        <td style="text-align: left;">'.$result['piecesold'].'</td>
                        <td style="text-align: left;">'.$result['amount'].'</td>
                        </tr>';   
                    }
                    
                    echo $str;
            }


        }


        if(isset($_GET['palatandaan'])){
            $palatandaan =  $_GET['palatandaan'];
            if($palatandaan =="getweek"){
                   $str="";
                    $getweek=$_GET['getweek'];
                    $sql="SELECT * FROM salestbl where date='$getweek'";
                    $query=mysqli_query($con, $sql);

                    $str.='
                    <tr>
                                                             <th style="text-align: left;"> Item </th>
                                                             <th style="text-align: left;"> Quantity </th>
                                                             <th style="text-align: left;"> Amount </th>
                                                         </tr>
                    ';

                    while($result=mysqli_fetch_array($query))
                    {

                        $str.='<tr>
                        <td style="text-align: left;">'.$result['productID'].'</td>
                        <td style="text-align: left;">'.$result['piecesold'].'</td>
                        <td style="text-align: left;">'.$result['amount'].'</td>
                        </tr>';   
                    }
                    echo $str;
            }


        }

        if(isset($_GET['palatandaan'])){
            $palatandaan =  $_GET['palatandaan'];
            if($palatandaan =="getmonth"){
                   $str="";
                    $getmonth=$_GET['getmonth'];
                    $sql="SELECT * FROM salestbl where date='$getmonth'";
                    $query=mysqli_query($con, $sql);

                    $str.='
                    <tr>
                                                             <th style="text-align: left;"> Item </th>
                                                             <th style="text-align: left;"> Quantity </th>
                                                             <th style="text-align: left;"> Amount </th>
                                                         </tr>
                    ';

                    while($result=mysqli_fetch_array($query))
                    {

                        $str.='<tr>
                        <td style="text-align: left;">'.$result['productID'].'</td>
                        <td style="text-align: left;">'.$result['piecesold'].'</td>
                        <td style="text-align: left;">'.$result['amount'].'</td>
                        </tr>';   
                    }
                    echo $str;
            }


        }




?>
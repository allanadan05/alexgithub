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
                     $pambato = array(); 
                    $getdate=$_GET['getdate'];
                    $sql="SELECT cartid, ( select productname from productstbl where pid=(select pid from carttbl where ID=salestbl.cartid)) as productname, ( select sellingprice from carttbl where pid=(select pid from carttbl where ID=salestbl.cartid) AND ID=salestbl.cartid) as sellingprice, ( select quantity from carttbl where pid=(select pid from carttbl where ID=salestbl.cartid) AND ID=salestbl.cartid) as quantity,  ( select (quantity*sellingprice) from carttbl where pid=(select pid from carttbl where ID=salestbl.cartid) AND ID=salestbl.cartid) as total from salestbl where salesdate='$getdate'";
                    $query=mysqli_query($con, $sql);
                    
                   

                    /*  $sql2="SELECT sum(total) as 'totalamount' FROM salestbl where date='$getdate'";
                    $query2=mysqli_query($con, $sql2);
                    $result2=mysqli_fetch_array($query2);  */
                   

                    $str.='
                    <tr>
                                                             <th style="text-align: left;"> Item </th>
                                                             <th style="text-align: left;"> Quantity </th>
                                                             <th style="text-align: left;"> Total </th>
                                                         </tr>
                    ';
                    $totals=0;
                     while($result=mysqli_fetch_array($query))
                    { 
                        
                        $str.='<tr>
                        <td style="text-align: left;">'.$result['productname'].'</td>
                        <td style="text-align: left;">'.$result['quantity'].'</td>
                        <td style="text-align: left;">'.$result['total'].'</td>
                        </tr>';  
                        $totals+=$result['total'];
                    } 
                     $pambato['totalamount']="Total Amount: ₱".$totals;  
                    $pambato['response1']=$str;
                    echo json_encode($pambato); 
                    
                    
            }


        }


        if(isset($_GET['palatandaan'])){
            $palatandaan =  $_GET['palatandaan'];
            if($palatandaan =="getweek"){
                   $str="";
                   $pambato = array(); 
                    $getweek=$_GET['getweek'];
                    $sql="SELECT cartid, ( select productname from productstbl where pid=(select pid from carttbl where ID=salestbl.cartid)) as productname, ( select sellingprice from carttbl where pid=(select pid from carttbl where ID=salestbl.cartid) AND ID=salestbl.cartid) as sellingprice, ( select quantity from carttbl where pid=(select pid from carttbl where ID=salestbl.cartid) AND ID=salestbl.cartid) as quantity,  ( select (quantity*sellingprice) from carttbl where pid=(select pid from carttbl where ID=salestbl.cartid) AND ID=salestbl.cartid) as total from salestbl where DATE_FORMAT(salesdate,'%Y-W%u') ='$getweek'";
                    $query=mysqli_query($con, $sql);

                    
                    $str.='
                    <tr>
                                                             <th style="text-align: left;"> Item </th>
                                                             <th style="text-align: left;"> Quantity </th>
                                                             <th style="text-align: left;"> Total </th>
                                                         </tr>
                    ';
                    $totals=0;
                    while($result=mysqli_fetch_array($query))
                    {

                        $str.='<tr>
                        <td style="text-align: left;">'.$result['productname'].'</td>
                        <td style="text-align: left;">'.$result['quantity'].'</td>
                        <td style="text-align: left;">'.$result['total'].'</td>
                        </tr>'; 
                        $totals+=$result['total'];  
                    }
                    $pambato['totalamount2']="Total Amount: ₱".$totals;  
                    $pambato['response2']=$str;
                    echo json_encode($pambato);
            }


        }

        if(isset($_GET['palatandaan'])){
            $palatandaan =  $_GET['palatandaan'];
            if($palatandaan =="getmonth"){
                   $str="";
                   $pambato = array(); 
                    $getmonth=$_GET['getmonth'];
                    $sql="SELECT cartid, ( select productname from productstbl where pid=(select pid from carttbl where ID=salestbl.cartid)) as productname, ( select sellingprice from carttbl where pid=(select pid from carttbl where ID=salestbl.cartid) AND ID=salestbl.cartid) as sellingprice, ( select quantity from carttbl where pid=(select pid from carttbl where ID=salestbl.cartid) AND ID=salestbl.cartid) as quantity,  ( select (quantity*sellingprice) from carttbl where pid=(select pid from carttbl where ID=salestbl.cartid) AND ID=salestbl.cartid) as total from salestbl where DATE_FORMAT(salesdate,'%Y-%m')='$getmonth'";
                    $query=mysqli_query($con, $sql);

                    $str.='
                    <tr>
                                                             <th style="text-align: left;"> Item </th>
                                                             <th style="text-align: left;"> Quantity </th>
                                                             <th style="text-align: left;"> Amount </th>
                                                         </tr>
                    ';
                    $totals=0;
                    while($result=mysqli_fetch_array($query))
                    {

                        $str.='<tr>
                        <td style="text-align: left;">'.$result['productname'].'</td>
                        <td style="text-align: left;">'.$result['quantity'].'</td>
                        <td style="text-align: left;">'.$result['total'].'</td>
                        </tr>';   
                        $totals+=$result['total'];
                    }
                    $pambato['totalamount3']="Total Amount: ₱".$totals;  
                    $pambato['response3']=$str;
                    echo json_encode($pambato);
            }


        }




?>
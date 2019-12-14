<?php
     session_start();
     include 'connection.php';

if(isset($_GET['palatandaan']))
{
	$palatandaan=$_GET['palatandaan'];

	if($palatandaan=$_GET['palatandaan']){
	
	$delstat=$_GET['delstat'];
	$deliveryid=$_GET['deliveryid'];
	//echo $deliveryid;
	$str="";
	
	$sql ="update  deliverytbl set status='$delstat' where deliveryid='$deliveryid'";
	$exe = mysqli_query($con,$sql);

	if($exe){

		$str.='
			<tr style="background-color: #B9BABC ">
             <th style="text-align: left;">Date</th>
             <th style="text-align: left;">Location </th>
             <th style="text-align: left;">CustomerName </th>
             <th style="text-align: left;">Invoice no. </th>
             <th style="text-align: left;">Status</th>
           </tr>
			';

		$class=""; 
		$count=0;

		$sqlq="select * from deliverytbl";
		$queryq=mysqli_query($con, $sqlq);

        while($result=mysqli_fetch_array($queryq))
        {
        	if($result['status']=="Processing"){ $class="primary"; $a="true";}
        	if($result['status']=="Pending"){ $class="warning"; $b="true";}
        	if($result['status']=="OTW"){ $class="danger"; $c="true";}
        	if($result['status']=="Delivered"){ $class="success"; $d="true";}
		$str.='
				 <tr>
                 <td>'.$result['deliveryid'].'</td>
                 <td></td>
                 <td> wako wako</td>
                 <td> A12011853 </td>
            
                 <td> 
                     <select  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" onchange="statusdeliv('.$result['deliveryid'].', '. ++$count .')" id="statusid'.$count .'">
                     <option  style="cursor:pointer;" disabled selected><center>Select Status</center></option>
                      <option value="1" style="cursor:pointer;" id="processing"><center>Processing</center></option>
                      <option value="2" id="pending" style="cursor:pointer;"><center>Pending</center></option>
                      <option value="3" id="otw" style="cursor:pointer;"><center>OTW</center></option>
                      <option value="4" id=del style="cursor:pointer;"><center>Delivered</center></option>
                   </select>
                   <br>
                   <span class="label label-'.$class.'">'.$result['status'].'</span>
                 </td>
                 </tr>
		';
	   } echo $str;
	}else{
		echo "Cannot be updated status";
	}

	
	}
}

?>
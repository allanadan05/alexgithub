<?php
session_start();
                    require_once('connection.php');

                   //isset($_POST['reg']

                    if(isset($_POST['reg'])){
                        $FNAME=$_POST['firstname'];
                        $LNAME=$_POST['lastname'];
                        $EMAIL=$_POST['email'];
                        $USERNAME=$_POST['username'];
                        $PASSWORD=$_POST['password'];
                        $re=$_POST['retype'];
                        $USERid=$USERNAME .time();


                        
                        $ASK=" SELECT * FROM `myaccounttbl` WHERE username='$USERNAME' ";
                        $INFO=mysqli_query($con, $ASK);
                        $total=mysqli_num_rows($INFO);
                        
                           if($total==1){
                               
                               header('location:register.php?regmsgerr=Username already exist!');
                           }else{

                               
                           
                    


                                      if($PASSWORD===$re){
                                        $query=" INSERT INTO `myaccounttbl` (`usertype`, `myaccountID`, `firstname`, `lastname`, `email`, `username`, `password`) 
                                               VALUES ('user', '$USERid', '$FNAME', '$LNAME', '$EMAIL', '$USERNAME', '$PASSWORD')
                                             ";
                                            if(mysqli_query($con,$query)){
                                              header('location:register.php?regmsgsuccess=Registered Successfully!');
                                            }
                                            else{
                                              header('location:register.php?regmsgerr=Unable to Register!');
                                            }

                                      }else{
                                        header('location:register.php?regmsgerr=Password does not  matched!');
                                        }   
                          }

                      }

                       //isset($_POST['reg']
                          

                            //isset($_POST['newcustomer']

                    if(isset($_POST['newcustomer'])){
                        $FNAME=$_POST['firstname'];
                        $LNAME=$_POST['lastname'];
                        $COMPANY=$_POST['company'];
                        $TIN=$_POST['tin'];
                        $GENDER=$_POST['gender'];
                        $HOUSENO=$_POST['houseno'];
                        $BARANGAY=$_POST['barangay'];
                        $MUNICIPAL=$_POST['municipal'];
                        $PROVINCE=$_POST['province'];
                        $MOBILENO=$_POST['mobileno'];
                        $EMAIL=$_POST['email'];
                        $USERNAME=$_POST['username'];
                        $PASSWORD=$_POST['password'];
                        $re=$_POST['retype'];
                        $USERid=$USERNAME .time();


                        
                        $ASK=" SELECT * FROM `myaccounttbl` WHERE username='$USERNAME' ";
                        $INFO=mysqli_query($con, $ASK);
                        $total=mysqli_num_rows($INFO);
                        
                           if($total==1){
                               
                               header('location:register.php?regmsgerr=Username already exist!');
                           }else{

                                      if($PASSWORD===$re){
                                        $query=" INSERT INTO `myaccounttbl` (`usertype`, `myaccountID`, `firstname`, `lastname`, `company`, `tin`, `gender`, `houseno`, `barangay`, `municipal`, `province`, `mobileno`, `email`, `username`, `password`) 
                                               VALUES ('user', '$USERid', '$FNAME', '$LNAME', '$COMPANY', '$TIN', '$GENDER', '$HOUSENO', '$BARANGAY', '$MUNICIPAL', '$PROVINCE', '$MOBILENO', '$EMAIL', '$USERNAME', '$PASSWORD')
                                             ";
                                            if(mysqli_query($con,$query)){
                                              header('location:adminnewcustomer.php?regmsgsuccess=Registered Successfully!');
                                            }
                                            else{
                                              header('location:adminnewcustomer.php?regmsgerr=Unable to Register!');
                                            }

                                      }else{
                                        header('location:adminnewcustomer.php?regmsgerr=Password does not  matched!');
                                        }   
                          }

                      }

                       //isset($_POST['newcustomer']


                    //isset($_POST['customeredit']

                    if(isset($_POST['customeredit'])){
                        $ID=$_SESSION['custID'];
                        $FNAME=$_POST['firstname'];
                        $LNAME=$_POST['lastname'];
                        $COMPANY=$_POST['company'];
                        $TIN=$_POST['tin'];
                        $GENDER=$_POST['gender'];
                        $HOUSENO=$_POST['houseno'];
                        $BARANGAY=$_POST['barangay'];
                        $MUNICIPAL=$_POST['municipal'];
                        $PROVINCE=$_POST['province'];
                        $ZIPCODE=$_POST['zipcode'];
                        $MOBILENO=$_POST['mobileno'];
                        $EMAIL=$_POST['email'];
                        $FIRSTUSERNAME=$_SESSION['custuser'];
                        $USERNAME=$_POST['username'];
                        $PASSWORD=$_POST['password'];
                        $USERid=$USERNAME .time();

                        if($FIRSTUSERNAME==$USERNAME){
                          // do not return error if username is same from previous

                                         
                                            $query=" UPDATE `myaccounttbl` SET `usertype`='user', `myaccountID`='$USERid', `firstname`='$FNAME', `lastname`='$LNAME', `company`='$COMPANY', `tin`='$TIN', `gender`='$GENDER', `houseno`='$HOUSENO', `barangay`='$BARANGAY', `municipal`='$MUNICIPAL', `province`='$PROVINCE', `zipcode`='$ZIPCODE', `mobileno`='$MOBILENO', `email`='$EMAIL', `username`='$USERNAME', `password`='$PASSWORD'          
                                                   WHERE ID=$ID;
                                                 ";
                                            if(mysqli_query($con, $query)){
                                              header("location: admincustomer.php?customersuccess=Updated Successfully! "); 
                                            }
                                            else{
                                              header("location: admincustomer.php?customererr=Unable to update customer info! "); 
                                            }
                                       
                        }
                        else{

                        
                        
                            $ASK=" SELECT * FROM `myaccounttbl` WHERE username='$USERNAME' ";
                            $INFO=mysqli_query($con, $ASK);
                            $total=mysqli_num_rows($INFO);
                            
                               if($total==1){
                                   
                                   header("location: admincustomeredit.php?ID=$ID&customererr=Username already exist! "); 
                               }else{

                                         $query=" UPDATE `myaccounttbl` SET `usertype`='user', `myaccountID`='$USERid', `firstname`='$FNAME', `lastname`='$LNAME', `company`='$COMPANY', `tin`='$TIN', `gender`='$GENDER', `houseno`='$HOUSENO', `barangay`='$BARANGAY', `municipal`='$MUNICIPAL', `province`='$PROVINCE', `zipcode`='$ZIPCODE', `mobileno`='$MOBILENO', `email`='$EMAIL', `username`='$USERNAME', `password`='$PASSWORD'          
                                                   WHERE ID=$ID;
                                                 ";
                                            if(mysqli_query($con, $query)){
                                              header("location: admincustomer.php?ID=$ID&customersuccess=Updated Successfully! "); 
                                            }
                                            else{
                                              header("location: admincustomer.php?ID=$ID&customererr=Unable to update customer info! "); 
                                            }
                              }

                      }

                    }

                       //isset($_POST['customeredit']
                                  
                    ?>
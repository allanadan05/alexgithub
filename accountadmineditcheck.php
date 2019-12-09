                  

                    <?php
                    session_start();
                    require_once('connection.php');

                    if(isset($_POST['adminupdate'])){
                        $FNAME=$_POST['firstname'];
                        $LNAME=$_POST['lastname'];
                        $EMAIL=$_POST['email'];
                        $USERNAME=$_POST['username'];
                        $PASSWORD=$_POST['password'];
                        
                        $USERid=$USERNAME .time();


                        
                        $ASK=" SELECT * FROM `myaccounttbl` WHERE username='$USERNAME' ";
                        $INFO=mysqli_query($con, $ASK);
                        $total=mysqli_num_rows($INFO);
                        
                           if($total==1){

                               if($_SESSION['tempusername']==$USERNAME || $_SESSION['tempemail']==$result['email']){
                                
                                            $query=" UPDATE `myaccounttbl` SET `usertype`='admin', `myaccountID`='$USERid', `firstname`='$FNAME', `lastname`='$LNAME', `email`='$EMAIL', `username`='$USERNAME', `password`='$PASSWORD' WHERE username='$USERNAME'
                                             ";

                                            if(mysqli_query($con,$query)){
                                              header('location:accountadminedit.php?adminmsgsuccess=Updated Successfully!<br>Redirecting Back to Admin Page...');
                                              
                                            }
                                            else{
                                              header('location:accountadminedit.php?adminmsgerr=Unable to Update!');
                                            }
                               }
                               else{
                                header('location:accountadminedit.php?adminmsgerr=Username  or email already exist!');
                               }
                               
                           }else{

                            //none
                          }

                      }
                          
                                  
                    ?>

                 
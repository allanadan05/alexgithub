                    <!-- Login Check -->

                    <?php
                    session_start();
                    include('connection.php');

                    if(isset($_POST['log'])){

                        $user=$_POST['user_name'];
                        $pwd=$_POST['pass_word'];
                        
                        $query=" SELECT * FROM myaccounttbl WHERE username='$user' AND password='$pwd' ";
                        $data=mysqli_query($con, $query) or die("data error" .$query);
                        $res=mysqli_fetch_array($data);   



                          if($res){
                              
                               $_SESSION['user_name']=$user;
                               $_SESSION['pass_word']=$pwd;
                               $_SESSION['userid']=$res['accountid'];
                               $_SESSION['myaccountID']=$res['myaccountID'];

                               if($res['usertype']=="user"){
                                header("location:account.php?msg=Welcome".$_SESSION['userid']."!");
                              }else if ($res['usertype']=="admin"){
                                header("location:admin.php?msg=Welcome".$_SESSION['userid']."!");
                              }else{
                                header('location:login.php?loginmsg=Username or Password incorrect!&username='.$user.'&password='.$pwd);
                              }
                               
                               
                           }
                           else{

                                header('location:login.php?loginmsg=Username or Password incorrect!&username='.$user.'&password='.$pwd);
                           }


                    }
                    
                    ?>

                    <!-- Login Check -->
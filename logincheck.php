                    <!-- Login Check -->

                    <?php
                    session_start();
                    require('connection.php');

                    if(isset($_POST['log'])){

                        $user=$_POST['user_name'];
                        $pwd=$_POST['pass_word'];

                        $query=" SELECT * FROM myaccounttbl WHERE username='$user' AND password='$pwd' ";
                        $data=mysqli_query($con, $query) or die("data error" .$query);
                        $res=mysqli_fetch_array($data) or die("res error" .$data);
                           if($res){

                               $_SESSION['user_name']=$user;
                               $_SESSION['pass_word']=$pwd;
                               $_SESSION['userid']=$res['accountid'];



                               if($res['usertype']=="user"){
                                header("location:account.php?msg=Welcome".$_SESSION['userid']."!");
                              }else if ($res['usertype']=="admin"){
                                header("location:admin.php?msg=Welcome".$_SESSION['userid']."!");
                              }


                           }
                           else{

                                header('location:login.php?loginmsg=Username or Password incorrect!&username='.$user.'&password='.$pwd);
                           }
                    }

                    ?>

                    <!-- Login Check -->

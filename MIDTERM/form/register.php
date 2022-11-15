<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme7.css">
</head>

<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="app.html">

            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="https://i.pinimg.com/564x/dd/6d/75/dd6d7580534c050bec9ac1889569273d.jpg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>User's Information</h3>

                        <div class="page-links">
                            <a class="active">DETAILS</a><a href="app.html">REGISTER</a>
                        </div>

                        <form>
                            <?php 
                            require_once('connect.php');
                            
                                
                            if($con){


                                $fname = $_POST['fname'];
                                $lname = $_POST['lname'];
                                $email = $_POST['email'];
                                $bdate = $_POST['bday'];
                                $address = $_POST['add'];
                                $pass = $_POST['pass'];
                                $cpass = $_POST['cpass'];
                             
                            
                              

                                    $query = "insert into users_tbl(firstname, lastname, email, bday, address, password, cpassword, image ,reg_date) 
                                        values('$fname','$lname','$email,'$bdate','$address','$pass','$cpass',NOW())";

                                    $result = mysqli_query($con, $query);

                                    if($result){
                                        echo '<span style="color: black; font-size: 20px; text-align: center;"> ' ." <b> First Name </b>: $fname <br/>  ";
                                        echo " <b>Last Name </b> : $lname <br/> ";
                                        echo " <b>Email </b> : $email <br/> ";
                                        echo " <b>Birthday </b> : $bdate <br/> ";
                                        echo " <b>Address </b> : $address <br/> ";
                                        echo " <b>Password</b> : $pass <br/> ";
                                        echo " <b>Confirm Password </b> : $cpass <br/> ";
                                        echo " <b>File Uploaded</b> : Successfully! <br/> ";
                                    }
                                    else{
                                        $err[] = 'Registration failed...'.mysqli_error($con);
                                    }
                                mysqli_close($con);
                            }
                                    else{
                                        exit('Could not connect to db.'.mysqli_connect_error());
                            }
                            
                            ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>



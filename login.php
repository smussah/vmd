<!DOCTYPE HTML>

<html>
    <head>
        <?php include"lib/database.php"; ?>
        <title>Contact - Mr. Virtual MD - hogeytech</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Sadik Mussah | hogeytech.net">
       <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="vmd_form_css/contactv.css">
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <style> .error{
                color: #FF0000;
            }
            .box{

                background: #16A085; /* fallback for old browsers */
                background: -webkit-linear-gradient(to left, #16A085 , #F4D03F); /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to left, #16A085 , #F4D03F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

                padding-top: 2px;
                padding-right: 1px;
                padding-bottom: 10px;
                padding-left: 20px;
            }

        </style>
    </head>
    <body>
        <div id="page-wrapper">


            <!--header-->
            <?php include 'header_all.php'; ?>
            <video poster="vmd_form_css/backup.png" id="bgvid" playsinline autoplay muted loop>

                <source src="videos/lights1.webm">
                <source src="videos/lights1.mp4">
            </video>

            <!-- Main -->
            <section id="main" class="container 75%">
                <header>
                    <h2>Login</h2>
                    <p>Tell us what you think about Mr virtual MD and how we can improve this notion.</p>
                </header>



                <div class="box">

                    <form action='#' method='post'>

                        <div class="row uniform 50%">
                            <div class="6u 12u(mobilep)">
                                <span style="color:white;"> User name:</span><input type='text' name='name' placeholder='Email address'/>

                            </div>

                            <div class="6u 12u(mobilep)">
                                <input type='hidden' name='gender'/>
                                <span style="color:white;"> Password:</sapn><input type='password' name='pwd' placeholder='password'/>
                                    <input type='hidden' name='pwdd'/>
                                    <input type='hidden' name='username'/>
                            </div>
                        </div>

                        <?php
                        session_start();
                        if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $pwd = $_POST['pwd'];
                            if ($name != '' && $pwd != '') {

                                $queryz = "SELECT pmkEmail, fldFirstName, fldLastName,fldPass,fldGender FROM  tblUsers  WHERE   pmkEmail='" . $name . "' AND fldPass='" . $pwd . "'";
                                $check_user = $thisDatabaseReader->select($queryz, 1, 1, 1, 4, false, false);
                                foreach ($check_user as $record) {

                                    $mail = $record['pmkEmail'];
                                    $pass1 = $record['fldPass'];
                                    $username = $record['fldFirstName'];
                                    $lastname = $record['fldLastName'];
                                    $gender = $record['fldGender'];
                                }
                                if (($name = $mail) && ($pwd = $pass1)) {
                                    $_SESSION['name'] = $username . " " . $lastname;
                                    $_SESSION['pwd'] = $lastname;
                                    $_SESSION['gender'] = $gender;
                                    $_SESSION['pwdd'] = $pass1;
                                    $_SESSION['username'] = $mail;
                                    header('location: diagnose.php');
                                } else {
                                    echo'<span class="error">You entered username or password is incorrect</span><br>';
                                }
                            } else {
                                echo $name;
                                echo $pass1;
                                echo'<span class="error">Enter both username and password</span>';
                            }
                        }
                        ?>
                        <div class="row uniform">
                            <div class="12u">
                                <ul class="actions align-center">
                                    <input type='submit' name='submit' value='Login'/> <input type="reset" value="Cancel"/>

                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

            </section>


            <!-- Footer -->
<?php include"footer.php";
?>

        </div>

        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="vmd_js/index.js"></script>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollgress.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
</html>
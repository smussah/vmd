<!DOCTYPE HTML>
<!-- Auther: Sadik Mussah @hogeytech  -->
<html>
    <head>
        <?php include"lib/database.php"; ?>
        <title>Mr. Virtual MD by: hogeytech - Mr Virtual will help you to diagnose and tackle your symptoms before it get worse</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Sadik Mussah | hogeytech.net">
       <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="vmd_form_css/login.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link href="css/refreshform.css" rel="stylesheet">
        <script src="js/refreshform.js"></script>
        <style> 
            .sd {
                color: orangered;
                font-size: 12em;
                font-weight: bold;
                font-family: Helvetica;
                text-shadow: 0 1px 0 orangered, 0 2px 0 orangered, 0 3px 0 #bbb, 0 4px 0 #b9b9b9, 0 5px 0 #aaa, 0 6px 1px rgba(0,0,0,.1), 0 0 5px rgba(0,0,0,.1), 0 1px 3px rgba(0,0,0,.3), 0 3px 5px rgba(0,0,0,.2), 0 5px 10px rgba(0,0,0,.25), 0 10px 10px rgba(0,0,0,.2), 0 20px 20px rgba(0,0,0,.15);
            }
            .sd{
                text-align: center;
            }


            #taj{
                border: 1px inset;
                padding: 20px; 
                width: 350px;
                resize: both;
                overflow: scroll;

            }
            #taj2{
                border: 1px inset;
                padding: 10px; 
                width: 650px;
                resize: auto;
                overflow: scroll;
                float: right;

            }
            #boxup{
                background: #16A085; /* fallback for old browsers */
                background: -webkit-linear-gradient(to left, #16A085 , #F4D03F); /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to left, #16A085 , #F4D03F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

                padding-top: 2px;
                padding-right: 1px;
                padding-bottom: 10px;
                padding-left: 20px;

            }       

            #cta{background: #16A085; /* fallback for old browsers */
                 background: -webkit-linear-gradient(to left, #16A085 , #F4D03F); /* Chrome 10-25, Safari 5.1-6 */
                 background: linear-gradient(to left, #16A085 , #F4D03F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */



            }     .error{
                color: #FF0000;}

            .collapse{
                cursor: pointer;
                display: block;
                background: white;
            }
            .collapse + input{
                display: none; /* hide the checkboxes */
            }
            .collapse + input + div{
                display:none;
            }
            .collapse + input:checked + div{
                display:block;
            } 
            p{
                text-align: left;
            }
            #topline{
                text-align: center;
                color: black;
            }
        </style>
    </head>
    <body class="landing">
        <div id="page-wrapper">


            <!-- Header -->
            <header id="header" class="alt">
                <h1><a href="index.php">Virtual MD</a> by hogeytech</h1>
                <nav id="nav">
<!--                    <span  id="header" class="alt" style="align:center"> Testing this </span>-->
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>
                            <a href="index.php" class="icon fa-angle-down">Menus</a>
                            <ul>
                                <li><a href="login.php">Diagnose  </a></li>
                                <li><a href="contact.php">Contact us</a></li>

                                <li>
                                    <a href="#">Submenu</a>
                                    <ul>
                                        <li><a href="#taj">Peer Advice</a></li>
                                        <li><a href="#">coming up</a></li>
                                        <li><a href="#">coming up</a></li>
                                        <li><a href="#">coming up</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="vmd_form.php" class="button">Sign Up</a></li>
                    </ul>
                </nav>
            </header>



            <!-- Banner -->
            <section id="banner" >	
                <h2><span id="logo" class="sd">Mr. Virtual MD | Clinic</span></h2>
                <p id="topline">Mr Virtual will help you to diagnose and tackle your symptoms before it get worse.</p>
                <ul class="actions">
<!--              <img src="vmd_form_css/doc.png" alt="" height="100" width="150">-->
                    <li><a href="vmd_form.php" class="button special">Sign Up</a></li>
                    <li><a href="login.php" class="button">Log in </a></li>
                    <!--<li><button class="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button></li>-->
                </ul>


                <?php // include 'login.php';?>




                <video autoplay="autoplay" loop="loop" id="natid" playsinline autoplay muted>
                    <source src="videos/water.mp4">

<!--    <source src="http://taxify.co/wp-content/uploads/2014/06/file.mp4" type="video/mp4" />  -->
                </video>
            </section>


            <!-- Main -->
            <section id="main" class="container">

                <section class="box special" id="boxup">
                    <header class="major">
                        <h2><span style="color:white; font-size:90%;"> Mr. Virtual MD introducing revolutionary way of approaching our traditional doctore visits. Now, it's between your finger tips 

                                and it's ideal way.  </span><br /></h2><p><span style="color:white; font-size:90%;"> 
                                Virtual doctor visits are rapidly gaining popularity these days as more
                                health insurers offer telemedicine services to help cut costs. Studies have shown 
                                that virtual care may effectively used to treat common problems such as flu, acne, deer 
                                tick bites, sinus and urinary tract infections.</span></p>
                    </header>
                    <!-- 						%%%%%%%%%%$$$$$$$%%%%%%%%% -->
  <!--                   <span class="image featured"><img src="images/pic01.jpg" alt="" /></span> -->
                </section>
                <section style="background-color: #ffffff" class="box special features">
                    <div class="features-row">
                        <section>
                            <span class="icon major fa fa-paw accent2"></span>
                            <h3>Students: 10 ways to beat stress</h3>
                            <p ><b>1. </b>A varied and healthy diet
                                Eating fresh ingredients and lots of fruit is really important. Juices filled with vitamin C, such as orange or grapefruit juice, are said to be good for your immune system so can help with stress.

                                When you're busy and tired it can be tempting just to grab another pizza or ready meal, but cooking from scratch can be therapeutic as well as being healthier.<br>
                                <br>
                                <b>2.</b> Exercise
                                Doing sport at least once a week is the best way to reduce stress. It helps your body produce endorphins, which make you feel good. Even daily walks of 30 minutes can help reduce stress levels but it's even better to work out intensively. Even if you don't feel like it at the time you will feel the benefits afterwards.

                                Joining a sports club could also help with stress as the regular contact with other people should help improve your mood.

                                And why not try yoga? It's a great way to ease your mind and relax your muscles.<br>
                                <br>
                                <b>3.</b> Meditation
                                It might sound simple, but sitting quietly for 10 minutes a day can really help with stress levels. If you've never tried meditation before, it's worth a go.

                                Good breathing techniques can put you in a more relaxed state as they send oxygen surging through your bloodstream, helping to calm you down and beat the stress.<br>
                                <br>
                                <b>4.</b> Take breaks regularly
                                Short breaks between working can help you switch off. But longer breaks are important too.

                                How about taking the weekend off to relax? Make time for fun and for yourself even if this means that you have to schedule time away from your work. You'll hopefully come back to your work feeling fresh.
                                <br><br>
                                <b>5.</b> Get a pet
                                It is said that spending time with animals is good for your health. If you pat a dog for a couple of minutes, your body releases hormones that make you feel happy and can decrease the amount of stress in your system.

                                Most uni halls won't let you keep an animal though, so spending some time with friends or family who have pets is a good option: you get the love without the commitment.
                                <br><br>
                                <b>6.</b> Sleep (and sign off Facebook)
                                Sleep is always the best medicine and some people find that small 20-minute naps can help increase productivity.

                                As students we tend to spend too much time on social media sites and answering emails, texts and phone calls. Sociability is fun – but too much of it, and too much computer time, can lead to more stress.

                                Failing to switch off from work because of your electronic gadgets will only make you even more stressed.
                                <br>
                                <br>
                                <b>7.</b> Quit smoking
                                Some people say they smoke to relax, but researchers on the European Board for Research on Nicotine and Tobacco suggest that nicotine suppresses the hormone serotonin, which fights stress. Another good reason to quit.
                                <br><br>
                                <b>8.</b> Try to see the positive side
                                If you missed a deadline, try to appreciate what you learned from this mistake: now you know how to plan ahead. Things might seem bad, but if you try, there is usually something positive to be learned.
                                <br>
                                <b>9. </b>Listen to music
                                Listening to music can help calm you down and put you in a better frame of mind. If you're feeling stressed, putting on some calming music while you work could really help.
                                <br><br>
                                <b>10.</b> Laugh
                                They say that laughter is the best medicine, and it's really true. Laughing out loud increases oxygen and blood flow which automatically reduces stress.

                                Not taking life too seriously can help everyone live a better and easier life. Make time for yourself, log out of Twitter and take breaks. It's about time that we students accept that we can achieve just as much in life without all the stress.

                                How do you manage stress? Share your tips in the comments section below</p>
                        </section>
                        <section>
                            <span class="icon major fa fa-comments accent3"></span>
                            <h3>Peer advise</h3>
                            <p> 


                            <h2> <b></b></h2>
                            <hr>
                            <?php
                            session_start();
                            $pwd = $_SESSION['pwdd'];   //$_POST['name'];
                            $name = $_SESSION['username'];

                            $query = "SELECT fnkEmail,fldComment,fldTime, tblUsers.fldFirstName FROM tblComments JOIN tblUsers on fnkEmail=pmkEmail"; //WHERE pmkEmail ='" . $mail . "'";
                            $user = $thisDatabaseReader->select($query, 0, 0, 0, 0, false, false);
                            foreach ($user as $row) {

                                $name = $row['fldFirstName'];
                                $comment = $row['fldComment'];
                                $timestamp = $row['fldTime'];

                                $name = htmlspecialchars($row['fldFirstName'], ENT_QUOTES);
                                $comment = htmlspecialchars($row['fldComment'], ENT_QUOTES);
                                echo"<span style='text-align: left;'> ";
                                echo "  <div style='margin:30px 0px;'>
       <b>$name</b>   on:  <span class='error'>$timestamp </span> Posted</br >
    
      <b>Comment:</b> $comment<br />";
                                ?>

                                <!-- LikeBtn.com BEGIN -->
                                <span class="likebtn-wrapper" data-theme="custom" data-icon_d="hrt12" data-icon_l_c_v="#39f709" data-icon_d_c_v="#fb0505"></span>
                                <script>(function (d, e, s) {
            if (d.getElementById("likebtn_wjs"))
                return;
            a = d.createElement(e);
            m = d.getElementsByTagName(e)[0];
            a.async = 1;
            a.id = "likebtn_wjs";
            a.src = s;
            m.parentNode.insertBefore(a, m)
        })(document, "script", "//w.likebtn.com/js/w/widget.js");</script>
                                <!-- LikeBtn.com END -->  

                                <?php
                                echo"</span>";
                                ?><label style="text-align: right; color: teal;" class = "collapse" for = "_1">Reply</label>
                                <input id = "_1" type = "checkbox">

                                <?php
                                echo" </div>
  ";
                            }
                            ?>


                            <?php
                            echo"<hr><b>New post</b>";
// &&&&&&&&&&&&&&&&&&&&&&&&&&&&
                            if (isset($_POST['submit'])) {
                                $pwd = $_SESSION['pwdd'];   //$_POST['name'];
                                $name = $_SESSION['username'];    //$_POST['pwd'];
//                               $commen= htmlspecialchars($_POST['comment']);
                                $comment = htmlspecialchars($_POST['comment'], ENT_QUOTES);
                                //   $comment = $_POST['comment'];
                                if ($name != '' && $pwd != '') {

                                    $queryz = "SELECT pmkEmail, fldFirstName, fldLastName,fldPass FROM  tblUsers  WHERE   pmkEmail='" . $name . "' AND fldPass='" . $pwd . "'";
                                    $check_user = $thisDatabaseReader->select($queryz, 1, 1, 1, 4, false, false);
                                    foreach ($check_user as $record) {

                                        $mail = $record['pmkEmail'];
                                        $pass1 = $record['fldPass'];
                                        $username = $record['fldFirstName'];
                                        $lastname = $record['fldLastName'];
                                    }
                                    if (($name = $mail) && ($pwd = $pass1)) {
                                        //     $_SESSION['name'] = $username . " " . $lastname;
//                                 echo $name . "<br>" . $pwd;
//                                 echo"it's true";
//                                 header('location: diagnose.php');
                                        //insert data into database table 
                                        $query = "INSERT INTO tblComments (fldID, fnkEmail, fldComment, fldTime)";
//get data from and assign to variables
                                        $mail = $record['pmkEmail'];
                                        $comment = $_POST['comment'];
//  $dat = date('m/d/y');
                                        $values = 'VALUES ("' . NULL . ' ","' . $mail . ' ","' . $comment . ' ", CURRENT_TIMESTAMP )';

                                        $query .= $values;
                                        $results = $thisDatabaseWriter->select($query, "", 0, 0, 6, 0, false, false);
                                        echo "Success!<br> Your comment was succssefully posted please click home buttun to  check em out! ";
//                                        echo "<script type='text/javascript'>alert('Success!<br> Your comment was succssefully posted please click home buttun to  check em out! ')</script>";
                                    } else {

                                        echo'<span class="error">Please log in first</span>';
                                        echo' <a href="login2.php">Login</a>';
                                    }
                                } else {


                                    echo'<span class="error">Please log in first</span>';

                                    echo' <a href="login2.php">Login</a>';
                                }
                            } else {
                                ?>
                                <form id="com" action='index.php' method='post'>

                                    <input type='hidden' name='name' />
                                    <input type='hidden' name='pwd' />
                                    <textarea name="comment" rows="5" cols="40" required placeholder="type your advise here .........."></textarea><br>

                                    <ul class="actions align-center">
                                        <input type='submit' name='submit' value='Post' /> <input type="reset" value="Reset"/>
                                    </ul>      

                                </form>
<?php } ?>

                    </div>
                    </p>
                </section>
        </div>

    </section>






    <!-- ***********************%%%%%%%%%%$$$$$$$$$$$$$ -->

    <div id="cds"> </div>



    <!-- sign up form  -->
    <section id="cta">

        <h2>Sign up for Mr. Virtual MD</h2>
        <p style="text-align: center;">It's a best way to keep yourself up to date with your health in many different ways without paying a dime.</p>

    </section>


    <!-- Footer -->
<?php include"footer.php"; ?>
    <!--</div>-->

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
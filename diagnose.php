<!DOCTYPE HTML>
<!--
        Mr. virtual MD
        Auther: Sadik Mussah
        @hogeytech
-->
<html>
    <head>
        <?php include"lib/database.php"; ?>
        <title>Contact - Mr. Virtual MD - hogeytech</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Sadik Mussah | hogeytech.net">
       <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <link href="tabs/tabcontent.css" rel="stylesheet" type="text/css" />
        <script src="tabs/tabcontent.js" type="text/javascript"></script>
        <style> .error{
                color: #FF0000;}

            .tabs{margin-top: 0px;
            }
            #di{
               padding-top: 0px;

            }

            #headach{
                border: 1px inset;
                border-color: #FF9800;
            }
        </style>

    </head>
    <body>
        <div id="page-wrapper">


            <!-- Header -->
            <header id="header">
                <h1><a href="index.php">Mr virtual MD</a> by hogeytech</h1>
                <nav id="nav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>
                            <a href="#" class="icon fa-angle-down">Menus</a>
                            <ul>
                                <li><a href="diagnose.php">Diagnose</a></li>
                                <li><a href="contact.php">Contact Us</a></li>

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
                        <li><a href="login.php" class="button">logout</a></li>
                    </ul>
                </nav>



            </header>


            <!-- Main -->
            <section id="main" class="container">
                <header id="di">

                    <?php
                    session_start();
//                    $$$$$$_ Greetings
$greeting = '<script language="JavaScript"> 
var myDate = new Date(); 
  
  
/* hour is before noon */
if ( myDate.getHours() < 12 )  
{ 
    document.write("<b>Good Morning!</b>"); 
} 
else  /* Hour is from noon to 5pm (actually to 5:59 pm) */
if ( myDate.getHours() >= 12 && myDate.getHours() <= 17 ) 
{ 
    document.write("<b>Good Afternoon!</b>"); 
} 
else  /* the hour is after 5pm, so it is between 6pm and midnight */
if ( myDate.getHours() > 17 && myDate.getHours() <= 24 ) 
{ 
    document.write("<b>Good Evening!</b>"); 
} 
else  /* the hour is not between 0 and 24, so something is wrong */
{ 
    document.write("Im not sure what time it is!"); 
} 
  
  
</script> ';

                    $gender = $_SESSION['gender'];
                    $man = "Mr. ";
                    $woman = "Ms. ";
                    if ($gender == "male") {
                        $gender = $man;
                    } else {
                        $gender = $woman;
                    }
                    ?>
                    <!--                     ######____POST user info by using session from the login  -->
                    <h2>VMD session<br> <?php echo $greeting . " " . $_SESSION['name']; ?></h2>
                    <p>Welcome to my office  <?php echo '<span style="color:orange;"><b>' . $gender . $_SESSION['pwd'] . "!</b></span>"; ?><br> My name is "Dr." Sadik, pleased to meet you</p>
                </header>
                <ul class="tabs" data-persist="true">
                    <li ><a href="#tab1">Detail</a></li>
                    <li ><a href="#tab2">Headache</a></li>
                    <li><a href="#tab3">Facial Swelling </a></li>
                    <li><a href="#tab4">Eye problem </a></li>
                    <li><a href="#tab5">Tooth Problems </a></li>
                    <li><a href="#tab6">Hip Problems </a></li>
                </ul>
                <div align ="center" class="tabcontents" class="boxx">
                    <div id="tab1" class="boxx">
                       <b><?php echo $gender . $_SESSION['pwd']."  "." -"?> </b>just to let you know that our trusted Symptom Checker is written and reviewed by physicians and patient education professionals. Find a possible diagnosis by choosing a symptom and answering a few simple questions.

                        Remember, be sure to consult with you doctor if you feel you have a serious medical problem.


                    </div>

                    <div id="tab2" class="boxx"> 
                        <?php // include"headache.php"; ?>

<!--<span class="image featured"><img src="images/water1.png" alt="" /></span>-->

                        <?php
                        $data = $data2 = $dataYes = '';

                        $Id = 1;
                        $currentid = '';
                        ?>

                        <div id="headach">
                            <form name="me" method="POST" action="">
                                <?php
                                if (isset($_POST['yes'])) {
                                    // if yes id is current id,
                                    $Id = (int) $_POST['currentid'];
                                }
                                if (isset($_POST['no'])) {
                                    //if no id is next id
                                    $Id = (int) $_POST['nextid'];
                                }
                                if (isset($_POST['go back &#8617;'])) {
                                    //if no id is next id
                                    $Id = (int) $_POST['goback'];
                                }
                                // POST question to display symptom, first time POST first record
                                $q1 = "SELECT fldID, fldSymptoms, fldDiagnosis, fldCare, fldNextID FROM tblHeadaches WHERE fldID =?"; //'".$i."'";
//next id needs to be defaulted to 1, then if form submitted set to value of hidden id
                                $re = $thisDatabaseReader->select($q1, array($Id), 1, 0, 0, 0, false, false);
// if ys display diagonos and care
                                foreach ($re as $r1) {
                                    $data = "<b>" . $r1['fldSymptoms'] . "</b>";

                                    $dataYes = $r1['fldDiagnosis'] . "<br>" . $r1['fldCare'];
//      ******************************************************************
                                    $currentid = $r1['fldID'];
                                    $nextid = $r1['fldNextID'] + 1;
                                    $backid = $nextid - 1;
                                }
                                echo $data . " <br>"; //this line displays first question 
                                if (isset($_POST['yes'])) {

                                    echo $dataYes . "<br>";
                                    include 'map.php';
                                    ?>
                                    <style type="text/css">#nobutton, #yesbutton, #gobackbutton{
                                            display: none;
                                        }
                                    </style>
    <?php }
?>
                                <?php
                                if (isset($_POST['no'])) {
                                    $data = $nextid;
                                }


                                //if NO dispaly symptonna YES no buttons
                                ?>
                                <input type="hidden" name="currentid" value="<?php echo $currentid; ?>" />
                                <input type="hidden" name="nextid" value="<?php echo $nextid; ?>"/>

                                <input type="hidden" name="goback" value="<?php echo $backid; ?>" />


<!--  <input id="gobackbutton"  type="submit" name="goback" value="go back &#8617;" />-->
                                <input id="yesbutton" type="submit"  name="yes" value="Yes"/>
                                <input id="nobutton" type="submit" name="no" value="No" /><br><br>
                                <input id="gobackbutton"  type="submit" name="goback" value="go back &#8617;" />
                            </form>
                        </div>
                    </div>
                    <!--######################################################-->
                    <!--######################     Facial Swelling         ##################-->
                    <div id="tab3" class="boxx">
<?php // include"facialswelling.php";  ?> 
<!--<span class="image featured"><img src="images/water1.png" alt="" /></span>-->
                        <head> <?php $hide = 'document.GetElementById("nobutton").style.visibility="hidden";'; ?></head>
                        <?php
                        $dataf = $data2 = $dataYesf = '';

                        $Idf = 1;
                        $currentidf = '';
                        ?>

                        <div id="headach">
                            <form name="me" method="POST" action="">
<?php
if (isset($_POST['yesf'])) {
    // if yes id is current id,
    $Idf = (int) $_POST['currentidf'];
}
if (isset($_POST['nof'])) {
    //if no id is next id
    $Idf = (int) $_POST['nextidf'];
}
if (isset($_POST['go backf &#8617;'])) {
    //if no id is next id
    $Idf = (int) $_POST['gobackf'];
}
// POST question to display symptom, first time POST first record
$q1 = "SELECT fldID, fldSymptoms, fldDiagnosis, fldCare, fldNextID FROM tblFacialswelling WHERE fldID =?"; //'".$i."'";
//next id needs to be defaulted to 1, then if form submitted set to value of hidden id
$re = $thisDatabaseReader->select($q1, array($Idf), 1, 0, 0, 0, false, false);
// if ys display diagonos and care
foreach ($re as $r1) {
    $dataf = "<b>" . $r1['fldSymptoms'] . "</b>";

    $dataYesf = $r1['fldDiagnosis'] . "<br>" . $r1['fldCare'];
//      ******************************************************************
    $currentidf = $r1['fldID'];
    $nextidf = $r1['fldNextID'] + 1;
    $backidf = $nextidf - 1;
}
echo $dataf . " <br>"; //this line displays first question 
if (isset($_POST['yesf'])) {


    echo $dataYesf . "<br>";
    include 'map.php';
    ?>
                                    <style type="text/css">#nobutton, #yesbutton, #gobackbutton{
                                            display: none;
                                        }
                                    </style>
    <?php }
?>
<?php
if (isset($_POST['nof'])) {
    $dataf = $nextidf;
}


//if NO dispaly symptonna YES no buttons
?>
                                <input type="hidden" name="currentidf" value="<?php echo $currentidf; ?>" />
                                <input type="hidden" name="nextidf" value="<?php echo $nextidf; ?>"/>

                                <input type="hidden" name="gobackf" value="<?php echo $backidf; ?>" />


<!--  <input id="gobackbutton"  type="submit" name="goback" value="go back &#8617;" />-->
                                <input id="yesbutton" type="submit"  name="yesf" value="Yes"/>
                                <input id="nobutton" type="submit" name="nof" value="No" /><br><br>
                                <input id="gobackbutton"  type="submit" name="gobackf" value="go back &#8617;" />
                            </form>
                        </div>
                    </div>

                    <!--#$#$#$#$#$#$#$#$#$                      $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$44-->
                    <!--$$$$$  ########## Eye problem#########-->
                    <div id="tab4" class="boxx">

<?php
$datae = $data2 = $dataYese = '';

$Ide = 1;
$currentide = '';
?>

                        <div id="headach">
                            <b>Eye Problem</b><br>
                            <form name="me" method="POST" action="">
                        <?php
                        if (isset($_POST['yese'])) {
                            // if yes id is current id,
                            $Ide = (int) $_POST['currentide'];
                            if ($Ide == 1) {
                                $Ide = 11;
                            } elseif ($Ide == 2) {

                                $Ide = 8;
                            } else {
                                $Ide = (int) $_POST['currentide'];
                            }
                        }
                        if (isset($_POST['noe'])) {
                            //if no id is next id
                            $Ide = (int) $_POST['nextide'];
                        }
                        if (isset($_POST['go backe &#8617;'])) {
                            //if no id is next id
                            $Ide = (int) $_POST['gobacke'];
                        }
                        // POST question to display symptom, first time POST first record
                        $q1 = "SELECT fldID, fldSymptoms, fldDiagnosis, fldCare, fldNextID FROM tblEye WHERE fldID =?"; //'".$i."'";
//next id needs to be defaulted to 1, then if form submitted set to value of hidden id
                        $re = $thisDatabaseReader->select($q1, array($Ide), 1, 0, 0, 0, false, false);
// if ys display diagonos and care
                        foreach ($re as $r1) {
                            $datae = "<b>" . $r1['fldSymptoms'] . "</b>";

                            $dataYese = $r1['fldDiagnosis'] . "<br>" . $r1['fldCare'];
//      ******************************************************************
                            $currentide = $r1['fldID'];
                            $nextide = $r1['fldNextID'] + 1;
                            $backide = $nextide - 1;
                        }
                        echo $datae . " <br>"; //this line displays first question 
                        if (isset($_POST['yese'])) {


                            echo $dataYese . "<br>";
                            include 'map.php';

                            if (($Ide == 1) or ( $Ide == 2)) {
                                
                            } else {
                                ?>
                                        <style type="text/css">#nobutton, #yesbutton, #gobackbutton{
                                                display: none;
                                            }
                                        </style>
                                        <?php
                                    }
                                }
                                ?>
                                <?php
                                if (isset($_POST['noe'])) {
                                    $datae = $nextide;
                                }


                                //if NO dispaly symptonna YES no buttons
                                ?>
                                <input type="hidden" name="currentide" value="<?php echo $currentide; ?>" />
                                <input type="hidden" name="nextide" value="<?php echo $nextide; ?>"/>

                                <input type="hidden" name="gobacke" value="<?php echo $backide; ?>" />
                                <input type="hidden" name="yese" value="<?php echo $skipide; ?>" />


<!--  <input id="gobackbutton"  type="submit" name="goback" value="go back &#8617;" />-->
                                <input id="yesbutton" type="submit"  name="yese" value="Yes"/>
                                <input id="nobutton" type="submit" name="noe" value="No" /><br><br>
                                <input id="gobackbutton"  type="submit" name="gobacke" value="go back &#8617;" />
                            </form>
                        </div>
                    </div>

                    <div id="tab5" class="boxx">
                        coming up soon...
                    </div>


                    <div id="tab6" class="boxx">
                        coming up soon...
                    </div>
                </div>


            </section>
            <!-- Footer -->
<?php include"footer.php"; ?>

        </div>

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
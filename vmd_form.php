<!DOCTYPE html>
<!--
        Mr. virtual MD
        Auther: Sadik Mussah
        @hogeytech
-->
<html >
    <head>
        <?php include"lib/database.php"; ?>
        <meta charset="UTF-8">
        <title>Mr. Virtual MD registration from @hogeytech </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Sadik Mussah | hogeytech.net">
       <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="vmd_form_css/login.css" />
        <link rel="stylesheet" href="vmd_form_css/style.css">
        <link rel="stylesheet" href="vmd_js/index.js">

        <!--         <link rel="stylesheet" href="assets/css/main.css" />-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

        <script src="vmd_js/index.js"></script>

    </head>

    <body>
    <marquee class='error'>Wellcome to Mr. Virtual MD. We are always to assist you - please complete the following form. Thank you!</marquee>



    <?php
// define variables and set to empty values
    $lnameErr = $fnameErr = $emailErr = $passErr = $pass1Err = $genderErr = $websiteErr = "";
    $gender = $pass = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valid = true;
        if (empty($_POST["fname"])) {
            $fnameErr = "First name is required";
            $valid = false;
        } else {
            $fname = test_input($_POST["fname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $fname)) {
                $fnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["lname"])) {
            $lnameErr = "last name is required";
            $valid = false;
        } else {
            $lfname = test_input($_POST["fname"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z ]*$/", $lname)) {
                $lfnameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
            $valid = false;
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["pass"])) {
            $passErr = "password required";
            $valid = false;
        } else {
            $pass = test_input($_POST["pass"]);
        }

        if ($_POST["pass1"] != $_POST["pass"]) {
            $pass1Err = "Password does not match try again";
            $valid = false;
        } else {
            $pass = test_input($_POST["pass1"]);
        }


        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
            $valid = false;
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <?php // include 'header_index.php'; ?>
    <video poster="vmd_form_css/headback1.png" id="bgvid" playsinline autoplay muted loop>

        <source src="videos/lights1.webm">
        <source src="videos/lights1.mp4">
    </video>
    <div align="center" id="vmd">
        <span  id='clas'>  <li><a href="index.php">Go back &#8617;</a></li></span>  
<!--         <span id="uvm"> <button  >UVM Student? click here</button></span> -->
        <!--        <button class="button2" onclick="document.getElementById('net').style.display='block'" style="width:auto;">UVM Student? click heren</button>-->


        <br><br>
        <!--            <h2>Join Mr. Virtual MD</h2>-->

        <!-- ^^^^^^________^^^^^^^^^_________^^^^^^^________ -->
<?php
if (isset($_POST['sum']) && ($valid)) {
    $to = "smussah@uvm.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $subject = "New registration @VMD";
    $subject2 = "Greeting from Virtual MD|new registration";
    $message = $first_name . " " . $last_name . " Just signed up on your site! \n\n";

    $message2 = "Here is a copy of your registration " . $first_name . "!\n\n" . "User Name: " . $from . "\n\n" . "Password:  " . $pass . "\n\n go here: http://smussah.w3.uvm.edu/vmd/\n" . "Sincerely" . "\n" . "الشبلي";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    echo"<br>Success!!<br><br> Please check your email - it contains important informtion: <br> userID and Password.<br><br> Thank you<br> Sincerely,<br> Sadik<br> Good wishes from Mr. Virtual-MD team";

    //   
    //insert data into database table 
    $query = "INSERT INTO tblUsers (pmkEmail, fldFirstName, fldLastName, fldPass, fldGender)";
//get data from and assign to variables
    $from = $_POST["email"];
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $pass = $_POST["pass"];
    $gender = $_POST["gender"];

    $values = ' VALUES ("' . $from . ' ","' . $first_name . ' ","' . $last_name . ' ","' . $pass . ' ","' . $gender . '")';
    $query .=$values;
    $results = $thisDatabaseWriter->select($query, "", 0, 0, 10, 0, false, false);

    echo'<ul class="actions">
                    <li><a href="login.php" class="button special">Login here</a></li>
                    
                
                </ul>';
} else {
    ?>
            <button class="button2" onclick="document.getElementById('net').style.display = 'block'" style="width:auto;">UVM Student/Staff? click here</button>
            <h2>Join Mr. Virtual MD</h2><br>
            
            <p><span class="error">* required field.</span></p>
            <?php include"vmd_form_css/netidcheck.php"; ?>
            <form method="post" action="vmd_form.php">  
                First Name: <input type="text" name="fname" value="<?php echo $fname; ?>">
                <span class="error">* <?php echo $fnameErr; ?></span>
                <br><br>
                Last Name: <input type="text" name="lname" value="<?php echo $lname; ?>">
                <span class="error">* <?php echo $lnameErr; ?></span>
                <br><br>
                E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
                <span class="error">* <?php echo $emailErr; ?></span>
                <br><br>
                Password: <input type="password" name="pass" value="<?php echo $pass; ?>" placeholder="new password!">
                <span class="error">* <?php echo $passErr; ?></span><br><br>
                Re-password: <input type="password" name="pass1" value="<?php echo $pass1; ?>">
                <span class="error">* <?php echo $pass1Err; ?></span><br><br>

                Gender:
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
                <span class="error">* <?php echo $genderErr; ?></span>
                <br><br>
                <input class="button" type="submit" name="sum" value="Submit">  
            </form>

    <?php
}
?>
        <!-- ^^^^^^________^^^^^^^^^_________^^^^^^^________ -->


        <!--            <button>Pause </button>-->
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>




</body>
</html>

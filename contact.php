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
            }</style>
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
                    <h2>Contact Us</h2>
                    <p>Tell us what you think about Mr virtual MD and how we can improve this notion.</p>
                </header>

                <?php
                $from = $message = $first_name = $last_name = $subject = " ";
                $fromErr = $messageErr = $first_nameErr = $last_nameErr = $subjectErr = " ";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $valid = true;
                    if (empty($_POST["first_name"])) {
                        $first_nameErr = "Name is required should have first name are you?";
                        $valid = false;
                    } else {
                        $first_name = test_input($_POST["first_name"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z ]*$/", $first_name)) {
                            $first_nameErr = "Only letters and white space allowed";
                        }
                    }

                    if (empty($_POST["last_name"])) {
                        $last_nameErr = "Last name is required should have first name are you?";
                        $valid = false;
                    } else {
                        $last_name = test_input($_POST["last_name"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z ]*$/", $last_nameErr)) {
                            $last_nameErr = "Only letters and white space allowed";
                        }
                    }


                    if (empty($_POST["email"])) {
                        $fromErr = "Email is required";
                        $valid = false;
                    } else {
                        $from = test_input($_POST["email"]);
                        // check if e-mail address is well-formed
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $from = "Invalid email format";
                        }
                    }

                    if (empty($_POST["subject"])) {
                        $subjectErr = "Really? message without subject? you should include subject";
                        $valid = false;
                    } else {
                        $subject = test_input($_POST["subject"]);
                    }

                    if (empty($_POST["message"])) {
                        $messageErr = "eww! empty message body - what is the point now? ";
                        $valid = false;
                    } else {
                        $message = test_input($_POST["message"]);
                    }
                }
                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    ?>                 
                    <?php
                    if (isset($_POST['contact']) && ($valid)) {
                        $to = "smussah@uvm.edu"; // this is your Email address
                        $from = $_POST['email']; // this is the sender's Email address
                        $first_name = $_POST['first_name'];
                        $last_name = $_POST['last_name'];
                        $subject = $_POST['subject'];
                        $subject2 = "Copy of your form submission";
                        $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
                        $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

                        $headers = "From:" . $from;
                        $headers2 = "From:" . $to;
                        mail($to, $subject, $message, $headers);
                        mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
                        echo "Sweet!!!!!! your mail was Sent. Thank you " . $first_name . "!, we will contact you shortly. <br><br> Again, thank you for considering Mr. Virtual MD - we value your input";
                        echo '<img src="vmd_form_css/emi.gif">';
                        // it can also go to differe  page ass well 
                    } else {
                        ?>

                        <div class="box">


                            <form method="post" action="contact.php">
                                <div class="row uniform 50%">
                                    <div class="6u 12u(mobilep)">
                                     <span style="color:white;"> First Name:</span> <input type="text" name="first_name" id="name" value="" placeholder="First Name" />
                                        <span class="error">* <?php echo $first_nameErr; ?></span>
                                    </div>

                                    <div class="6u 12u(mobilep)">
                                      <span style="color:white;">Last Name:</span> <input type="text" name="last_name" id="name" value="" placeholder="Last Name" />
                                        <span class="error">* <?php echo $last_nameErr; ?>
                                    </div>


                                    <div class="6u 12u(mobilep)">
                                       <span style="color:white;">  Email Address:</span><input type="email" name="email" id="email" value="" placeholder="Email" />
                                        <span class="error">* <?php echo $fromErr; ?></span>
                                    </div>
                                </div>


                                <div class="row uniform 50%">
                                    <div class="12u">
                                    <span style="color:white;">  Subject: </span>  <input type="text" name="subject" id="subject" value="" placeholder="Subject" />
                                        <span class="error">* <?php echo $subjectErr; ?></span>
                                    </div>
                                </div>
                                <div class="row uniform 50%">
                                    <div class="12u">
                                        <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                                        <span class="error">* <?php echo $messageErr; ?></span>
                                    </div>
                                </div>
                                <div class="row uniform">
                                    <div class="12u">
                                        <ul class="actions align-center">
                                            <li><input type="submit" name="contact" value="Send Message" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                    }
                    ?>
                </section>

                <!-- Footer -->
                <?php include"footer.php"; ?>

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
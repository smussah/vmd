  
                        <h2> Peer advise</h2>
                    <!--//    <button class="button" onclick="document.getElementById('id012').style.display = 'block'" style="width:auto;">Post your advice </button>-->   


                        <form action='#' method='post'>

                            User name:<input type='text' name='name' placeholder="your eamil address"/><br>


                            Password:<input type='password' name='pwd' placeholder="your password"/><br>

                            Comment: <textarea name="comment" rows="5" cols="40" required placeholder="type your advise here .........."></textarea><br>


                            <?php
                           // session_start();
                            if (isset($_POST['submit'])) {
                                echo"<script>
    // When the form is submitted run this JS code
    $('form').submit(function(e) {
        // Post the form data to page.php
        $.post(' ', $(this).serialize(), function(resp) {
            // Set the response data into the #div2
            $('#taj').html(resp);
        });

        // Cancel the actual form post so the page doesn't refresh
        e.preventDefault();
        return false;
    });
</script>";
                                
                                $name = $_POST['name'];
                                $pwd = $_POST['pwd'];
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
                                      //  $_SESSION['name'] = $username . " " . $lastname;
                                        echo $name . "<br>" . $pwd;
                                        echo"it's true";
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
                            <
                            <ul class="actions align-center">
                                <input type='submit' name='submit' value='Submit'/> <input type="reset" value="Cancel"/>
                            </ul>      

                        </form>


                  
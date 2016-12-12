 <?php
                    session_start();
                   $pwd =  $_SESSION['pwdd'];   //$_POST['name'];
                        $name =   $_SESSION['username']; 
                        
                        $query = "SELECT fnkEmail,fldComment,fldTime, tblUsers.fldFirstName FROM tblComments JOIN tblUsers on fnkEmail=pmkEmail"; //WHERE pmkEmail ='" . $mail . "'";
    $user = $thisDatabaseReader->select($query, 0, 0, 0, 0, false, false);
   foreach ( $user  as $row) {

  $name = $row['fldFirstName'];
  $comment = $row['fldComment'];
  $timestamp = $row['fldTime'];
  
  $name = htmlspecialchars($row['fldFirstName'],ENT_QUOTES);
   $comment = htmlspecialchars($row['fldComment'],ENT_QUOTES);

  echo "  <div style='margin:30px 0px;'>
       <b>$name</b>   on:  <span class='error'>$timestamp </span> 
    
      <b>replied:</b> $comment<br />
  
    </div>
  ";
}echo"<hr><b>Reply</b>";
// &&&&&&&&&&&&&&&&&&&&&&&&&&&&
                    if (isset($_POST['submit'])) {
                        $pwd =  $_SESSION['pwdd'];   //$_POST['name'];
                        $name=   $_SESSION['username'];    //$_POST['pwd'];
                        $comment = $_POST['comment'];
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
 $values = 'VALUES ("' .NULL. ' ","' . $mail. ' ","' .$comment.' ", CURRENT_TIMESTAMP )';

$query .=$values;
$results = $thisDatabaseWriter->select($query, "", 0, 0, 6, 0, false, false);
// echo "Success!<br> Your comment was succssefully posted please click home buttun to  check em out! ";
 echo "<script type='text/javascript'>alert('Success!<br> Your message was succssefully posted please click home buttun to  check em out! ')</script>";
                            } else {

                             //       echo'<span class="error">Please log in first</span>';
//                            echo' <a href="login2.php">Login</a>';
                           
                           echo "<script type='text/javascript'>alert('<span class='error'>Please log in first</span> <br>  <a href='login2.php'>Login</a>')</script";
                            }
                        } else {
    
//                            echo'<span class="error">Please enter both username and password</span>';
                             // echo'<span class="error">Please log in first</span>';
                              echo "<script type='text/javascript'>alert('<span class='error'>Please log in first</span> <br>  <a href='login2.php'>Login</a>')</script";
                          //  echo' <a href="login2.php">Login</a>';
                        }
                    } else {
                        ?>
                        <form id="com" action='#taj' method='post'>

                           <input type='hidden' name='name' />
                           <input type='hidden' name='pwd' />
                           <textarea name="comment" rows="5" cols="40" required placeholder="type your advise here .........."></textarea><br>

                            <ul class="actions align-center">
                                <input type='submit' name='submit' value='Post' onclick="alert();"/> <input type="reset" value="Reset"/>
                            </ul>      

                        </form>
    <?php } ?>
                    </div>
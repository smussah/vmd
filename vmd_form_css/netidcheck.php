<?php
if (isset($_POST["check"])) {
  $valid = true;

    $studentnetid = $_POST["uname"];

    function ldapName($studentnetid) {
        if (empty($studentnetid))
            return "no:netid";

        $name = "not:found";

        $ds = ldap_connect("ldap.uvm.edu");

        if ($ds) {
            $r = ldap_bind($ds);
            $dn = "uid=$studentnetid,ou=People,dc=uvm,dc=edu";
            $filter = "(|(netid=$studentnetid))";
            $findthese = array("sn", "givenname");

            // now do the search and get the results which are stored in $info
            $sr = ldap_search($ds, $dn, $filter, $findthese);

            // if we found a match (in this example we should actually always find just one
            if (ldap_count_entries($ds, $sr) > 0) {
                $info = ldap_get_entries($ds, $sr);
                $name = $info[0]["givenname"][0] . "," . $info[0]["sn"][0];
            }
        }

        ldap_close($ds);

        return $name;
    }
//    ***** greeting begin
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
//$$ validate net id begin 
$fromuvm = ldapName($studentnetid);
//echo $fromuvm ."<br>";
//echo $studentnetid . "net id test<br>";

if (isset($studentnetid) && ($fromuvm  == "not:found")) {
    
    $not = "<span style='color:red;'>Sorry, that was a <b>wrong<> NETID or mistyped please try again! </span>";
  echo $not;  
 $valid = false;
 
} else {

  
    $fromuv = ldapName($studentnetid);
    $fullname = explode(",", $fromuv);
    $fname = $fullname[0];
    $lname = $fullname[1];
    $email = $studentnetid . "@uvm.edu";
    echo  $greeting." ". $fname."!". "<span style='color:yellow;'> Hey cat! please complete the rest of the fields below</span>";
}
}
?>

<div id="net" class="modal">

    <form method="post" class="modal-content animate" action="">
        <div class="imgcontainer">
            <span onclick="document.getElementById('net').style.display = 'none'" class="close" title="Close netId">&times;</span> 
            <img src="vmd_form_css/uvmlog.png" alt="Avatar" class="avata" width="75" height="75">
        </div>
        <div class="container">
            <input type="text" placeholder="Enter uvm netid" name="uname" required>
            <span class="error">* <?php echo $nameErr; ?></span>
            <button style="background-color: teal;" name="check" type="submit">Check</button> <br>  
        </div>
    </form>
</div>

<script>
// Get the modal
    var modal = document.getElementById('net');

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>


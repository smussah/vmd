<?php
if(isset($_POST['mt'])){

  $email = $_POST['uname'];
  $password = $_POST['pass'];
  echo $email ." ". $password;
  }?>
<div id="id012" class="modal">

    <form class="modal-content animate" id="cd" method="post" action="index.php">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id012').style.display = 'none'" class="close" title="Close modal">&times;</span>
            <img src="vmd_form_css/form.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <br><br>
  Comment: <textarea name="comment" rows="5" cols="40" required></textarea>
  <br><br>
            
 
  <button name="log" type="submit">Post your advice </button><br>
            
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id012').style.display = 'none'" class="cancelbtn">Cancel</button>
            <span class="psw">don't have account with us? <a href="vmd_form.php">Register now</a></span>
        </div>
    </form>
     <input name="mt" type="submit">
</div>
<?php echo '';  ?>
<script>
// Get the modal
    var modal = document.getElementById('id012');

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

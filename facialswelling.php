<!--<span class="image featured"><img src="images/water1.png" alt="" /></span>-->
<head> <?php $hide ='document.GetElementById("nobutton").style.visibility="hidden";';?></head>
<?php
$dataf = $data2 = $dataYesf = '';

$Idf = 1;
$currentidf = '';
?>

<div id="headach">
<form name="me" method="get" action="">
    <?php
    if (isset($_GET['yes'])) {
        // if yes id is current id,
        $Idf = (int) $_GET['currentid'];
    }
    if (isset($_GET['no'])) {
        //if no id is next id
        $Idf = (int) $_GET['nextid'];
    }
    if (isset($_GET['go back &#8617;'])) {
        //if no id is next id
        $Idf = (int) $_GET['goback'];
        echo $Idf . "go back";
    }
    // get question to display symptom, first time get first record
    $q1 = "SELECT fldID, fldSymptoms, fldDiagnosis, fldCare, fldNextID FROM tblFacialswelling WHERE fldID =?"; //'".$i."'";
//next id needs to be defaulted to 1, then if form submitted set to value of hidden id
    $re = $thisDatabaseReader->select($q1, array($Id), 1, 0, 0, 0, false, false);
// if ys display diagonos and care
    foreach ($re as $r1) {
        $dataf = "<b>" . $r1['fldSymptoms'] . "</b>";

        $dataYesf = $r1['fldDiagnosis'] . "<br>" . $r1['fldCare'];
//      ******************************************************************
        $currentidf = $r1['fldID'];
        $nextidf = $r1['fldNextID'] + 1;
       $backidf = $nextidf-1;
    }
    echo $dataf . " <br>"; //this line displays first question 
    if (isset($_GET['yes'])) {
        $m = true;
 $hide;
 
        echo $dataYesf . "<br>"; 
        ?>
    <style type="text/css">#nobutton, #yesbutton, #gobackbutton{
            display: none;
        }
        </style>
    <?php
        
    }?>
    <?php
    if (isset($_GET['no'])) {
        $dataf = $nextidf;
    }


    //if NO dispaly symptonna YES no buttons
    ?>
    <input type="hidden" name="currentid" value="<?php echo $currentidf; ?>" />
    <input type="hidden" name="nextid" value="<?php echo $nextidf; ?>"/>

    <input type="hidden" name="goback" value="<?php echo $backidf; ?>" />


<!--  <input id="gobackbutton"  type="submit" name="goback" value="go back &#8617;" />-->
    <input id="yesbutton" type="submit"  name="yes" value="Yes"/>
    <input id="nobutton" type="submit" name="no" value="No" /><br><br>
    <input id="gobackbutton"  type="submit" name="goback" value="go back &#8617;" />
</form>
</div>
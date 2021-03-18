<?php

//aff_sub1 = domain
//aff_sub2 = fb id
//aff_sub3 = Custom Event
//aff_sub4 = Currency



$price = $_REQUEST['price'];
$fbid = $_REQUEST['aff_sub2'];
$Event = $_REQUEST['aff_sub3'];
$Currency = $_REQUEST['aff_sub4'];

?>
<script>
    window.location = "fb.php?fbid=<?php echo $fbid; ?>&Event=<?php echo $Event; ?>&currency=<?php echo $Currency; ?>&price=<?php echo $price; ?>";
</script>

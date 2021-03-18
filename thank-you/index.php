<?php
$qs = "leadid={$_REQUEST['leadid']}&affid={$_REQUEST['affid']}&oid={$_REQUEST['oid']}&campid={$_REQUEST['campid']}&cid={$_REQUEST['cid']}&tid={$_REQUEST['tid']}&aff_sub1={$_REQUEST['aff_sub1']}&aff_sub2={$_REQUEST['aff_sub2']}&aff_sub3={$_REQUEST['aff_sub3']}&aff_sub4={$_REQUEST['aff_sub4']}&aff_sub5={$_REQUEST['aff_sub5']}&price={$_REQUEST['price']}&udid={$_REQUEST['udid']}";

header("location: {$_REQUEST['aff_sub1']}/thankyou/redirect.php?$qs")
?>

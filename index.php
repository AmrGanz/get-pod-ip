<?php	
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>
<div>
<?php 
 echo "Pod IP: ".$_SERVER['SERVER_ADDR'] ;
 ?>
</div>

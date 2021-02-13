<?php
session_start();
session_destroy();

?>

<script>
alert("Logout Successfully" );
window.location="index.php";
</script>
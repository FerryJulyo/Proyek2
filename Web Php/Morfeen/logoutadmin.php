<?php
session_start();
session_destroy();
session_unset();

echo "<center><b>LOGGING OUT . . .<b>";
header("location:index.php");

exit;

?>
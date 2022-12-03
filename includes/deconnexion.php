<?php
session_start();
session_destroy();
header('location: login1.php');
exit;

?>

<?php echo "Vous avez été déconnécté"; ?>
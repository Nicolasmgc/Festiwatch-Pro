<?php
session_start();
session_destroy();
header('location: index.php');
exit;
?>

<?php echo "Vous avez été déconnécté"; ?>
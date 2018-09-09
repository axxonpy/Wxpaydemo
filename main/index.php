<?
include("../include/retwis.php");

if (!isLoggedIn()) {
    include("../include/header.php");
    include("../include/welcome.php");
    include("../include/footer.php");
} else {
    header("Location:../main/home.php");
    exit;
}
?>

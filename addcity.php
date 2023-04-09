<?
$db=mysqli_connect("localhost","vadimkky.beget.tech","123Vad","vadimkky_c1");
    if(isset($_POST['que'])){
        $text=trim($_POST['que']);
        $query4=mysqli_query($db,"INSERT INTO `city`(`name`) VALUES ('$text')");
    }
?>
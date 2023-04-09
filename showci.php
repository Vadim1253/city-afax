<?
$mysqli = new mysqli("localhost","vadimkky_c1","123Vad","vadimkky_c1"); 
$mysqli->set_charset("utf8mb4");
$result = $mysqli->query('SELECT * FROM `city`' );
while($row = $result->fetch_assoc()){
    echo '<p style="margin:5px 5px 5px 5px;background-color: antiquewhite;">Город: '.$row['name'].'</p>';
}
?>
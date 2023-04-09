<?
$cit=trim($_POST['que']);
$mysqli = new mysqli("localhost","vadimkky_c1","123Vad","vadimkky_c1"); 
$mysqli->set_charset("utf8mb4"); 
$res = $mysqli->query('SELECT * FROM `city`' );
function resultToArray($result){
    $array=array();
    while(($row=$result->fetch_assoc()) != false){$array[]=$row;}
    return $array;
}
$n=resultToArray($res);
for($i = 0; $i < count($n); $i++){
    // if($n[$i]["name"]==$cit){
    if(strpos($n[$i]["name"],$cit)!==false){
        echo '<p style="margin:5px 5px 5px 5px;background-color: antiquewhite;">Город: '.$n[$i]["name"].'</p>';
    }
}
?>
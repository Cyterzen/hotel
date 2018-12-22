<?php
$room_type = $_POST['room_type'];
$room_number = $_POST['room_number'];
$person_number = $_POST['person_number'];
$child_number = $_POST['child_number'];
$res_facilities = $_POST['res_facilities'];

if (!empty($room_type) || !empty($room_number) || !empty($person_number) || !empty($child_number) || !empty($res_facilities)){
    $host="localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbname = "hotelbase";
	
	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error()){
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	}else {
		$INSERT = "INSERT Into rservation (room_type, room_number, person_number, child_number,
        res_facilities)	values(?,?,?,?,?)";
	    $stmt = $conn->prepare($INSERT);
	    $stmt->bind_param("siiis", $room_type, $room_number, $person_number, $child_number, $res_facilities);
        $stmt->execute();
	    header("Location: reservation1.php");
		
		$stmt->close();
		$conn->close();
	}		
} else {
	echo "All fields are required";
	die();
}
?>
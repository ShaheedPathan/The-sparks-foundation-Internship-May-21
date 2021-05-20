<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "banking_system";
	
		
	$Sid= $_POST['Sid'];
	$SName=$_POST['SName'];
	$SEmail=$_POST['SEmail'];
	$Sbalance= $_POST['Sbalance'];
	
	$Rid= $_POST['Rid'];
	$RName= $_POST['RName'];
	$REmail= $_POST['REmail'];
	$Rbalance= $_POST['Rbalance'];
	$transAmount=$_POST['transAmount'];
	updateBalance($Sbalance,$Sid);
	history($transAmount, $Sid, $SEmail, $SName,"Sent");
	updateBalance($Rbalance,$Rid);
	history($transAmount, $Rid, $REmail, $RName,"Recieved");
	
	
	 function updateBalance($balance, $id)
	{try {
		# code...
		$conn = mysqli_connect("localhost","root","","banking_system");
	
		
		// set the PDO error mode to exception
		//$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
		$sql = "UPDATE customer SET Balance=$balance WHERE id=$id";
	  
		mysqli_query($conn, $sql);
	  
	  
	  $conn = null;
}catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
  }
  return $reult;
	}





	function history($Amount, $id, $Email, $Name,$Type )
	{try {
		# code...
		$connn = mysqli_connect("localhost","root","","banking_system");
	
		$sql = "INSERT INTO transaction(Name, Emailid, Amount, Time,Transaction) VALUES ('$Name','$Email','$Amount',now(),'$Type')";
	
		mysqli_query($connn, $sql);
		
	 $connn = null;
}catch(PDOException $e) {
	echo $sql . "<br>" . $e->getMessage();
  }
 //return $result;
	}

?>
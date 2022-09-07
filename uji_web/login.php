<?php 
 session_start(); 
 include 'koneksi.php';
 
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 $login = $dinas->prepare("select * from login where username='$username' and password='$password'");
 $login->execute();//eksekusi
 $cek = $login->rowCount();
 echo "$cek";
 echo "$_SESSION[username]";

 if($cek >= 1){
 $_SESSION[username] = $username;
 header("location:file/layout.php");
}
 
 else{?>
	 		<script>
	 			alert("username tidak ada");
	 			javascript:history.back();
	 		</script>
	 	<?php
 }
?>







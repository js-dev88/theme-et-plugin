<!-- Controle php pour la connexion -->

<?php 
$error = false;
if(!empty($_POST)){
	$email = get_user_by_email($_POST['user_email']);
	if($email== false){
		$error = $userr -> get_error_message();
	}else{
		echo"biiiiip";
	}
}



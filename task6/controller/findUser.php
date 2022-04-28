<?php

require_once '../model/model.php';

if (isset($_POST['email'])) {
	
		echo $_POST['email'];

    try {
    	
    	$allSearchedUsers = searchUser($_POST['email']);
        require_once '../showSearchedUser.php';
    	

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}


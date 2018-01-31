<?php
	include('database.php');
	/**
	 * summary
	 */
	class M_user extends database
	{
	    /**
	     * summary
	     */
	    function dangki($name, $email, $password)
	    {
	        $sql = "INSERT INTO users(name,email,password) VALUES (?,?,?)";
	        $this->setQuery($sql);
	        $result = $this->execute(array($name,$email,md5($password)));
	        if ($result) {
	        	return $this->getLastId();
	        }else {
	        	return false;
	        }
	    }
	    function dangnhap($email,$md5_password){
	    	$sql="SELECT * FROM users WHERE email='$email' AND password='$md5_password'";
	    	$this->setQuery($sql);
	    	return $this->loadRow(array($email,$md5_password));
	    }
	}
?>
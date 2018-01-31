<?php
	if (!session_id()) {
		session_start();
	}
	include('model/m_user.php');

	/**
	 * summary
	 */
	class C_user
	{
	    /**
	     * summary
	     */
	    public function dangkiTK($name,$email,$password)
	    {
	        $m_user = new M_user();
	        $id_user=$m_user->dangki($name,$email,$password);
	        if ($id_user>0) {
	        	$_SESSION['success']="Đăng kí thành công";
	        	header('location:index.php');
	        	if (isset($_SESSION['reg_error']))
	        	{
	        		unset($_SESSION['reg_error']);
	        	}
	        }else {
	        	$_SESSION['reg_error']="Đăng kí không thành công";
	        	header('location:dangki.php');
	        }
	    }
	    public function dangnhapTK($email,$password){
	    	$m_user = new M_user();
	    	$user = $m_user->dangnhap($email,$password);
	    	if ($user==true) {
	    		$_SESSION['user_name']= $user->name;
	    		$_SESSION['id_user']=$user->id;
	    		header('location:index.php');
	    		if (isset($_SESSION['user_error'])) {
	    			unset($_SESSION['user_error']);
	    		}
	    		if(isset($_SESSION['chua_dang_nhap'])){
	    			unset($_SESSION['chua_dang_nhap']);
	    		}
	    	}else{
	    		$_SESSION['user_error']="Sai thong tin dang nhap";
	    		header('location:dangnhap.php');
	    	}
	    }
	    public function dangxuat(){
	    	session_destroy();
	    	header("location:index.php");
	    }
	}
?>
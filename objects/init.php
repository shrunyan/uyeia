<?php

class init {
	
	public function init($access = 0)
	{
		//open mysql
		$this->open_mysql();	
		
		//initalize our filter object
		require_once('filter.php');//includes it only if it hasn't been included before
		$GLOBALS['filter'] = new filter();
		
		//check for cookie login
		if(empty($_SESSION['user_id'])) //user not logged in
		{
			if(!empty($_COOKIE['uyeia']))
			{
				//if there is a cookie
				$qry = "select * from cookies where
						cookie = '$_COOKIE[uyeia]'";
				$result = mysql_query($qry) or die(mysql_error());
				
				$rec = mysql_fetch_array($result);
				if(!empty($rec))//there is a matching cookie value
				{
					require_once('user.php');
					$user = new user($rec['user_id']);
					$user->set_user_session();	
				}
			}	
		}
		
		
		//include user definition
			require_once('user.php');
			$GLOBALS['user'] = new user($_SESSION['user_id']);			
		
		//check user access  - redirect user if not on a accessible page
		/*$access
		 * 0 - public
		 * 1 - for logged in users only 
		 * 2 - admin only
		 */
		if($GLOBALS['user']->get_access() < $access)
		{
			header('location:no_access.php');
		}
				
		$_POST = $GLOBALS['filter']->input_ary($_POST);
		$_GET = $GLOBALS['filter']->input_ary($_GET);
	}

	private function open_mysql()
	{
		//connect to database
		if(strpos($_SERVER['DOCUMENT_ROOT'], 'xampp') !== false){
			//if the server is local
			$server = 'localhost';
			$username = 'root';
			$password = '';
			$database = 'uyeia';
		}
		else{
			//if the server is remote

			/*
			OLD CRED
			$server = 'localhost';
			$username = 'uyeia_shrunya';
			$password = 'jsfdb91185';
			$database = 'uyeia_main';
			*/
			$server = 'shrdata.db';
			$username = 'uyeia_admin';
			$password = 'Jsfdb9!!85ua';
			$database = 'ua_uyeia';
		}
		
		mysql_connect($server, $username, $password);
			
		//select database
		mysql_select_db($database);
	}
}

?>
<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$id=$_POST['id'];
		$pword=$_POST['pword'];
		$confirm= $_POST['cpword'];
		$username= $_POST['uname'];
		$usertype =$_POST['user'];
			if(empty($id)== true || empty($pword) == true || empty($confirm) || empty(username)) ||empty('user')
			{
				echo "fill up all task";
			}
			
			else
			{
				if($pword == $cpword)
				{
					header('location: 2.html');
			
				<?php
					$myfile = fopen('abc.txt', 'w');
					fwrite($myfile, "'id','pword','cpword','cpword','uname','user'");
					fclose($myfile);
					echo "done";
				?>
					
				}
				
				else
				{
					echo "invalid username or password";
				}
					
			}
	}
	else
	{
		header('location: plogin.html');
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Whatz up</title>
		<link href="styles/Layout.css" rel="stylesheet" type="text/css" />
		<link href="styles/Menu.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<div class="container">
			<div class="header">
				<table width="100%" border="0">
				  <tr>
				    <td><img src="images/logo.png" alt="Logo"></td>
				    <td valign="top" align="right">
                    	<form action="login.php" method="post">
                            <table width="100px" boarder="0">
                                <tr>
                                    <td>User:</td>
                                    <td><input name="user" type="text" size="15" maxlength="30"></td>
                                </tr>
                                <tr>
                                    <td>Passwort:</td>
                                    <td><input name="pass" type="password" size="15" maxlength="15"></td>
                                </tr>
                            </table>
                            <input type="submit" value="Anmelden">
						</form>
                    </td>
			      </tr>
			  </table>
			</div><!-- end .header -->
			
			<div class="sidebar">
				<p>Sidebar</p>
				<div id="cssmenu">
					<ul>
						<li class="active "><a href="index.php?page=home"><span>Home</span></a></li>
						<li class="active "><a href="index.php?page=event_act"><span>Aktuelle Events</span></a></li>
						<li class="active "><a href="index.php?page=event_search"><span>Event suche</span></a></li>
						<li class="active "><a href="index.php?page=event_new"><span>Event melden</span></a></li>
					</ul>
				</div><!-- end .cssmenu-->
			</div><!-- end .sidebar-->
			
			<div class="content">
				<p>Content Zeile 1</p>
				<p>Content Zeile 2</p>
				<p>Content Zeile 3</p>
				
				<div class="box">
					<p>Box1</p>
				</div><!-- end .box -->
				
				<div class="box">
					<p>Box2</p>
				</div><!-- end .box -->
				
				<div class="box">
					<p>Box3</p>
				</div><!-- end .box -->
				
				<div class="box">
					<p>Box4</p>
				</div><!-- end .box -->
				
				<div class="box">
					<p>Box5</p>
				</div><!-- end .box -->
				
				<div class="box">
					<p>Box6</p>
				</div><!-- end .box -->
				
				<div class="box">
					<p>Box7</p>
				</div><!-- end .box -->
				
				<div class="box">
					<p>Box8</p>
				</div><!-- end .box -->
				
				<div class="box">
					<p>Box9</p>
				</div><!-- end .box -->
				
				<div class="box">
					<p>Box10</p>
				</div><!-- end .box -->
			</div><!-- end .content -->
			
			<div class="footer">
				<p>Footer</p>
			</div><!-- end .footer -->
			
		</div><!-- end .container -->
	</body>
</html>

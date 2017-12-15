<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>HY-FleaMarket!</title>
	<link rel="stylesheet" type="text/css" href="hanzoproject.css">
	<script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js" type="text/javascript"></script>
	<script type="text/javascript" src="hanzoproject.js"></script>
	  <link rel="shortcut icon" type="image/png" href="favi.png">

</head>
<body>
	
	<header>
	<a href="hanzoproject.php"><h>HY-Fleamarket!</h></a>	</header>
	<div id="menu">
         <ul>
            <li>Menu
            <ul id = "submenu">
               
               <li><a href="donatepage.php">Donating</a></li>
               <li><a id="logout" href="">Log out</a></li>
            </ul>
            </li>
         </ul>
    </div>
	<nav>
		<!-- <div id="form"> -->
			<form action="buypage.php" method="POST">
				<input value="" name="searchtext" type="hidden">
				<input value="0" name="catalog" type="hidden">
				<button>살래요!</button>
			</form>
		<!-- </div> -->

		<!-- <div id="rightbutton"> -->
			<a href="sellpage.php" id = "sell"><button >팔래요!</button></a>
		<!-- </div> -->
	</nav>

	<footer>
		<p><span>HY-FleaMarket</span> is a project created and maintained by Team Hanzo for Hanyang University student.</p>	
	</footer>
	
</body>
</html>
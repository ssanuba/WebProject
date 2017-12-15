<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="viewpage2.css">
  <link rel="shortcut icon" type="image/png" href="favi.png">

	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<title>Document</title>
  <script type="text/javascript" src="viewpage2.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js" type="text/javascript"></script>

</head>
<body>
	 <?php
      try{
            $boardid = (int)$_GET['board_id'];
            $db = new PDO("mysql:dbname=Hanzo;host=localhost;charset=utf8","root","root");
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      }
      catch(PDOException $e){
      }     
    ?>    
  <?php
    $query = "SELECT b.title, b.catalog, b.created ,b.price, b.used, u.name, b.phone, b.content, i.image, b.count FROM boards b JOIN users u ON b.user_id = u.user_id JOIN images i ON b.board_id = i.board_id WHERE b.board_id = $boardid";   

    $rows = $db->query($query);  
    $title = "";
    $catalog = "";
    $created = "";
    $price = 0;
    $used = "";
    $name = "";
    $phone = "";
    $content = "";
    $image = [];
    $count = 0;
    $i = 0;
    foreach ($rows as $row) {
      $title = $row[0];
      $catalog = $row[1];
      $created = $row[2];
      $price = $row[3];
      $used = $row[4];
      $name = $row[5];
      $phone = $row[6];
      $content = $row[7];
      $image[$i++] = $row[8];
      $count = $row[9];
    }    
    $count++;
    $query = "UPDATE boards SET count=$count WHERE board_id = $boardid";
    $db->query($query); 
  ?>   

  
    <header>
    <a href="hanzoproject.php"><h>HY-Fleamarket!</h></a>
  </header>
    <div id="menu">
         <ul>
            <li>Menu
            <ul id = "submenu">
              <li><a href="buypage.php">살래요!</a></li>
               <li><a href="sellpage.php">팔래요!</a></li>
               <li><a href="donatepage.php">Donating</a></li>
              <li><a id="logout" href="">Log out</a></li>
            </ul>
            </li>
         </ul>
    </div>
  <main>
  <h1>게시물</h1>
  <article>
		<section>
         <form action="buypage.php" method="post">
            <div id="boardtitle" class="textbox">
               <span class="fixedtext1">제목:</span>
              
               <span class="fixedtext2">
                <?=$title?>
               </span>
               <br>
            </div>
            <div class="textbox">
              <span class="fixedtext1" class="rightborder">분류:</span>
              <span class="fixedtext2">
                <?=$catalog?>
              </span>
            </div>
            <div class="textbox">
              <span class="fixedtext1">게시 날짜:</span>
               <span class="fixedtext2">
                <?=$created?>
               </span>
            </div>
            <div class="textbox">
               <span class="fixedtext1">가격:</span>
             
               <span class="fixedtext2">
                <?= $price?> 원(KRW)
               </span>
               <br>
            </div>
            <div class="textbox">
               <span class="fixedtext1">사용기간:</span>
               
               <span class="fixedtext2">
                  <?=$used?>
               </span>
               
               <br>
            </div>
            <div class="textbox">
              <span class="fixedtext1">이름:</span>
              <span class="fixedtext2">
                <?=$name?>
               </span>
            </div>
            <div class="textbox">
              <span class="fixedtext1">연락처:</span>

              <span class="fixedtext2">
                <?=$phone?>
               </span>
            </div>

            <div class="textbox">
               내용:
               
               
               <pre><?=$content?></pre>
            </div>
            <div class="textbox">
                  <?php  
                    foreach ($image as $value) {?>
                      <img id="imgsize" src="<?=$value?>">
                    <?php 
                    }
                  ?>
               <br>
            </div>
          
        <div class="floatR">
            <input type="submit" name="submit" class="my_button" value="뒤로가기">
        </div>
            
         </form>
      </section>
    </article>

		<footer>
		 <p><span>HY-FleaMarket</span> is a project created and maintained by Team Hanzo for Hanyang University student.</p>
		</footer>
	</main>
</body>
</html>
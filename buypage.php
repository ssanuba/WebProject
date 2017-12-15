<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
  <meta charset="UTF-8">
	<title>HY-FleaMarket!</title>
	<link rel="stylesheet" type="text/css" href="buypage.css">
  <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js" type="text/javascript"></script>
  <script type="text/javascript" src="buypage.js"></script>
  <link rel="shortcut icon" type="image/png" href="favi.png">

</head>
<body>
	<header>
		<a href="hanzoproject.php"><h>HY-Fleamarket!</h></a>
	</header>
	<div id="menu">
         <ul>
            <li>Menu
            <ul id = "submenu">
               
               <li><a href="sellpage.php">팔래요!</a></li>
               <li><a href="donatepage.php">Donating</a></li>
               <li><a id="logout" href="">Log out</a></li>
            </ul>
            </li>
         </ul>
    </div>
    <main>

    <a href="buypage.php"><h1>살래요!</h1></a>
     
     <article>
        <section>

          <div class = "search">
            <form action="buypage.php" method="POST">
              <select name="catalog">
                <option value="0" selected="selected">전체</option>
                <option value="1">의류</option>
                <option value="2">전자기기</option>
                <option value="3">생활용품</option>
                <option value="4">자취방</option>
                <option value="5">기타</option>
              </select>
              <input type="text" name="searchtext" >
              <input type="submit" name="search" value="검색">
            </form>
          </div>
          <?php
          try{
            $srchtext = $_POST['searchtext'];
            $srchcatalogb = $_POST['catalog'];
            $db = new PDO("mysql:dbname=Hanzo;host=localhost;charset=utf8","root","root");
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


            switch ($srchcatalogb) {
              case '1':{//의류
                if(!empty($srchtext)){//검색 내용 있다면
                $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE (b.title LIKE '%$srchtext%' OR b.content LIKE '%$srchtext%') AND b.catalog = '의류' ORDER BY b.board_id DESC";
                }else{
                  $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE b.catalog = '의류' ORDER BY b.board_id DESC";
                }
                break;
              }
              case '2':{//전자기기
                if(!empty($srchtext)){//검색 내용 있다면
                $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE (b.title LIKE '%$srchtext%' OR b.content LIKE '%$srchtext%') AND b.catalog = '전자기기' ORDER BY b.board_id DESC";
                }else{
                  $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE b.catalog = '전자기기' ORDER BY b.board_id DESC";
                }
                break;
              }
              case '3':{//생활용품
                if(!empty($srchtext)){//검색 내용 있다면
                $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE (b.title LIKE '%$srchtext%' OR b.content LIKE '%$srchtext%') AND b.catalog = '생활용품' ORDER BY b.board_id DESC";
                }else{
                  $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE b.catalog = '생활용품' ORDER BY b.board_id DESC";
                }
                break;
              }
              case '4':{//자취방
                if(!empty($srchtext)){//검색 내용 있다면
                $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE (b.title LIKE '%$srchtext%' OR b.content LIKE '%$srchtext%') AND b.catalog = '자취방' ORDER BY b.board_id DESC";
                }else{
                  $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE b.catalog = '자취방' ORDER BY b.board_id DESC";
                }
                break;
              }
              case '5':{//기타
                if(!empty($srchtext)){//검색 내용 있다면
                $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE (b.title LIKE '%$srchtext%' OR b.content LIKE '%$srchtext%') AND b.catalog = '기타' ORDER BY b.board_id DESC";
                }else{
                  $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE b.catalog = '기타' ORDER BY b.board_id DESC";
                }
                break;
              }
             default:{//전체 
                if(!empty($srchtext)){//검색 내용있고 
                  $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id WHERE b.title LIKE '%$srchtext%' OR b.content LIKE '%$srchtext%' ORDER BY b.board_id DESC";
                }else{//검색 내용 없고
                  $query = "SELECT i.image, b.title, b.price, b.count, u.name, b.board_id FROM boards b JOIN users u ON b.user_id = u.user_id JOIN (SELECT board_id, image, min(img_id) FROM images GROUP BY board_id) i ON b.board_id = i.board_id ORDER BY b.board_id DESC"; 
                }
                break;
              }
            }

            $rows = $db->query($query);
?>
          <fieldset>
            <ul id="list">
            <?php foreach ($rows as $row){
              ?>
            <li>
              <a href="viewpage2.php?board_id=<?=$row[5]?>">
                <div class="margin">
                  <div class="img">
                    <img src="<?= $row[0]?>">
                    
                  </div>
                  <div class="info">
                      <p>제목 : <?=$row[1]?></p>
                      <p>가격 : <?=$row[2]?>원</p>
                      <p>판매자 : <?=$row[4]?></p>
                      <span>조회수: <?=$row[3]?></span>
                  </div>
                </div>
              </a>
            </li>
            <?php } ?>
          </ul>
        </fieldset>
    <?php }catch(PDOException $e){

          } ?>
    
            
        <!-- <div id="pagebar">
          <a class="selected-page page" href="index.php?page=1">1</a>
          <a class="page" href="index.php?page=2">2</a>
          <a class="page" href="index.php?page=3">3</a>
          <a class="page" href="index.php?page=4">4</a>
          <a class="page" href="index.php?page=5">5</a>
        </div> -->
        <div id="bottomsearch" class = "search">
            <form action="buypage.php" method="POST">
              <select name="catalog">
                <option value="0" selected="selected">전체</option>
                <option value="1">의류</option>
                <option value="2">전자기기</option>
                <option value="3">생활용품</option>
                <option value="4">기타</option>
              </select>
              <input type="text" name="searchtext" >
              <input type="submit" name="search" value="검색">
            </form>
          </div>
        </section>
       </article>  
    </main>
 

	<footer>
		<p><span>HY-FleaMarket</span> is a project created and maintained by Team Hanzo for Hanyang University student.</p>	
	</footer>
</body>
</html>
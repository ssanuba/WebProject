<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="sellpage.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="sellpage.js?var=2"></script>
	<script type="text/javascript" src="newsellpage.js"></script>


	<title>HY-Fleamarket!</title>
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
               
               <li><a href="buypage.php">살래요!</a></li>
               <li><a href="donatepage.php">Donating</a></li>
               <li><a id="logout" href="">Log out</a></li>
            </ul>
            </li>
         </ul>
    </div>
	<main>
      <a href="sellpage.php"><h1>팔래요!</h1></a>
		<article>
         <section>
         		<div id="">
         		<p>HY-Fleamarket!</p>
         		</div>
				<form action="boards.php" enctype="multipart/form-data" method="post">
					<fieldset>
						<div>
							제목
							<input class="text" type="text" placeholder="제목을 입력하세요." name="title">
						</div>
						<div>
							사용기간
							<input class="text" type="text" placeholder="0개월 15일 쯤" name="used">
						</div>
						<div>
							가격
							<input class="text" type="price" min="1" max="8" placeholder="1000" name="price">
						</div>
						<div>
							연락처
							<input class="text" type="text" placeholder="010-0000-0000" name="phone">
						</div>
						<div>
							분류<br>
						<label><input type="radio" name="catalog[]" value="의류">의류</label>
						<label><input type="radio" name="catalog[]" value="전자기기">전자기기</label>
						<label><input type="radio" name="catalog[]" value="생활용품">생활용품</label>
						<label><input type="radio" name="catalog[]" value="자취방">자취방</label>
						<label><input type="radio" name="catalog[]" value="기타" checked="checked">기타</label>
						</div>
					</fieldset>
					<br>
					<fieldset>
						<legend>내용</legend>
						<textarea rows="20" placeholder="내용을 입력하세요." name="content"></textarea>
						<br>
					</fieldset>
					<br>
					<fieldset>
						<legend>이미지 첨부</legend>
						<input type="file" name="image[]" multiple id="gallery-photo-add">
						<div class="gallery"><br></div>
					</fieldset>
					<br>
					<input class="button" type="submit" value="완료">

				</form>

         </section>
		</article>
	</main>

   <footer>
      <p><span>HY-FleaMarket</span> is a project created and maintained by Team Hanzo for Hanyang University student.</p>  
   </footer>
</body>
</html>
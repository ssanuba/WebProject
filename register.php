<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="shortcut icon" type="image/png" href="./image/favi.png">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.3.0/prototype.js" type="text/javascript"></script>
  <script src="register.js" type="text/javascript"></script>

	<title>Document</title>
</head>
<body>

	<main>
		<header>
    <a href="index.html"><h>HY-Fleamarket!</h></a>  </header>

		<nav>
			
		</nav>

		<section>
			<h1>
				REGISTER
			</h1>

			<form>
				

				Student Id: <input class="login" type="text" name="student_id" placeholder="ex) 2013012345" />
					<input id="id" type="button" name="confirm" value="confirm">
				<br>
			    
				
				PW: <input class="password" type="password" name="password" placeholder="PASSWORD" /> 
				
				PW Confirm: <input class="password" type="password" name="password" placeholder="PASSWORD" /> </br>

				Name: <input class="login" type="" name="text"  /> </br>

				Gender: 
				<label><input type="radio" name="gender" value="male" checked="checked"/> male</label>
				<label><input type="radio" name="gender" value="female"/> female</label>
				</br>

				 </br>


				<select id="col" name="college" onchange="list(this, 'dep')">
               		
          <!-- ajax받음 -->
            </select> 

            	<select id="dep" name="department">
               		<option value="default">----선택----</option>
            	</select>


				<br/>


				<form>
  				<div>
  				E-mail: <input class="email" type="text" name="email" /> 
  				@hanyang.ac.kr
  				</br>
        
  				</div>
				</form>

        <input id="time" type="submit" name="confirm" value="인증메일보내기">
        </br>

				메일인증: <input id="mail" class="email_confirm" type="" name="text"  /> 
				<input id="confirms" type="submit" name="confirm" value="인증">
        <p id="counter"></p>
				</br>


			</form>

      <a href="login.html"><button id="creat" class="button">CREATE ID</button></a>
        <!-- <input id="creat" class="button" type="submit" name="signin" value="CREATE ID"> -->

			<script type="text/javascript">
            function list(src, target){
               var val = src.options[src.selectedIndex].value;
               var dep = document.getElementById(target);
               removeAll(dep);

               if (val == "soft") {
                	addOption("소프트웨어학부", dep);
                  	addOption("ICT융합학부", dep);
               }
               else if(val == "engi") {

               		addOption("건축학부", dep);
               		addOption("건설환경플랜트", dep);
               		addOption("재료화학", dep);
               		addOption("교통물류", dep);
               		addOption("기계공학", dep);
                	addOption("융합공학", dep);
                	addOption("전자공학", dep);
                	addOption("산업경영공학", dep);
                	addOption("국방정보공학", dep);
                	addOption("생명나노공학", dep);
                	addOption("로봇공학", dep);
               }
               else if(val == "phar") {

                    addOption("약학과", dep);

               }	

               else if(val == "scien") {
               		addOption("응용수학", dep);
               		addOption("분자생명과학", dep);
               		addOption("응용물리학", dep);
               		addOption("나노광전자학", dep);
               		addOption("화학분자공학", dep);
               		addOption("해양융합공학", dep);

               }

               else if(val == "press") {
               		addOption("광고홍보학과", dep);
               		addOption("신문방송학과", dep);
               		addOption("정보사회과", dep);

               }

               else if(val == "global") {
               		addOption("한국언어문학", dep);
               		addOption("영미언어문화", dep);
               		addOption("문화인류학", dep);
               		addOption("프랑스언어문화", dep);
               		addOption("문화콘텐츠", dep);
               		addOption("중국학과", dep);
               		addOption("일본언어문화", dep);

               }

               else if(val == "econ") {
               		addOption("경제학부", dep);
               		addOption("경영학부", dep);
               		addOption("보험계리학과", dep);
               		addOption("회계세무학과", dep);

               }

               else if(val == "design") {
               		addOption("주얼리패션디자인", dep);
               		addOption("엔터테인먼트디자인", dep);
               		addOption("서피스인테리어디자인", dep);
               		addOption("테크노프로덕트디자인", dep);
               		addOption("커뮤니케이션디자인", dep);

               }

               else if(val == "sports") {
               		addOption("생활스포츠학부", dep);
               		addOption("생활무용예술", dep);
               		addOption("실용음악학과", dep);

               }




            }

            function addOption(value, e){
                var o = new Option(value);
                try{
                    e.add(o);
                }catch(ee){
                    e.add(o, null);
                }
            }

            function removeAll(e){
                for(var i = 0, limit = e.options.length; i < limit - 1; ++i){
                    e.remove(1);
                }
            }
         
         </script>

			
		</section>

		<aside>
			
		</aside>

		<footer>
      <p><span>HY-FleaMarket</span> is a project created and maintained by Team Hanzo for Hanyang University student.</p> 
    </footer>
	</main>
</body>
</html>
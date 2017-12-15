CREATE TABLE images (
   img_id INT(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
   board_id INT(10) NOT NULL,
   image MEDIUMBLOB
)charset=utf8;
CREATE TABLE boards (
   board_id INT(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
   user_id INT(10) NOT NULL,
   count INT(10) unsigned NOT NULL DEFAULT '0',
   price INT(10) NOT NULL,
   title VARCHAR(255) NOT NULL,
   content MEDIUMTEXT NOT NULL,
   catalog VARCHAR(30) NOT NULL,
   used VARCHAR(20),
   phone VARCHAR(13) NOT NULL,
   created DATETIME
)charset=utf8;
CREATE TABLE users (
   user_id INT(10) NOT NULL PRIMARY KEY,
   password VARCHAR(100) NOT NULL,
   email VARCHAR(30),
   name VARCHAR(10) NOT NULL,
   complete_count INT(10) unsigned DEFAULT '0' 
)charset=utf8;




INSERT INTO users(user_id,password,name) VALUES ("2013111111","fwani","서승환");
INSERT INTO users(user_id,password,name) VALUES ("2013222222","pinako","안영진");
INSERT INTO users(user_id,password,name) VALUES ("2013333333","aaaa","오승근");
INSERT INTO users(user_id,password,name) VALUES ("2013444444","bbbb","성지웅");
INSERT INTO users(user_id,password,name) VALUES ("2013555555","cccc","홍길동");
INSERT INTO users(user_id,password,name) VALUES ("2013888888","hello","김스캇");


INSERT INTO boards(user_id,price,title,content,catalog,used,phone,created) VALUES (2013111111,10000,"배드민턴채팔아요","배드민턴 채로 즐겁게 운동하세요~~~\n연락바랍니다.","기타","2개월","010-1234-1234","2017-12-11 06:53:01");
INSERT INTO boards(user_id,price,title,content,catalog,used,phone,created) VALUES (2013333333,20000,"망토팔아요","마법사 망토 팝니다.\n마법사가 되어보세요.\n아이들이 좋아할것 입니다.","의류","1개월","010-1234-1234","2017-12-12 06:53:03");
INSERT INTO boards(user_id,price,title,content,catalog,used,phone,created) VALUES (2013444444,50000,"밀짚모자팔아요","루피가 썼던 밀짚모자 팝니다.\n\n당신도 주인공이 될 수 있어요","의류","1년","010-1234-1234","2017-12-13 06:53:04");
INSERT INTO boards(user_id,price,title,content,catalog,used,phone,created) VALUES (2013111111,200000,"기타팝니다.","통기타 팝니다. 통기타 치면서 인생을 즐겨봐요!~~~","전자기기","4개월","010-1234-1234","2017-12-20 06:53:05");
INSERT INTO boards(user_id,price,title,content,catalog,used,phone,created) VALUES (2013555555,150000,"핸드폰팝니다.","아이폰6팝니다.\n조금 깨졌지만 작동 잘해요\n\n쌉니다.호호호홓","전자기기","1년","010-1234-1234","2017-12-09 06:53:06");
INSERT INTO boards(user_id,price,title,content,catalog,used,phone,created) VALUES (2013222222,7000,"거울사세요~","자취방에 거울 하나 두시면 마음이 평화로워 져요~","생활용품","2년","010-1234-1234","2017-12-16 06:53:07");
INSERT INTO boards(user_id,price,title,content,catalog,used,phone,created) VALUES (2013333333,30000,"지팡이 팔아요","8월 달에 일본 오사카 테마파크에 가서 구매한 제품 입니다.\n\n해리포터 영화에서 볼트모트가 사용 한 모델입니다.\n\n연락 주세요~~~!","기타","4개월","010-1234-1234","2017-12-21 13:53:02");

INSERT INTO images(board_id,image) VALUES (1,"http://localhost/Webproject/tmp_image/badminton.jpg");
INSERT INTO images(board_id,image) VALUES (2,"http://localhost/Webproject/tmp_image/cloak.jpg");
INSERT INTO images(board_id,image) VALUES (3,"http://localhost/Webproject/tmp_image/mugiwara.jpg");
INSERT INTO images(board_id,image) VALUES (4,"http://localhost/Webproject/tmp_image/gitar.jpg");
INSERT INTO images(board_id,image) VALUES (4,"http://localhost/Webproject/tmp_image/gitar2.jpg");
INSERT INTO images(board_id,image) VALUES (5,"http://localhost/Webproject/tmp_image/iphone.jpg");
INSERT INTO images(board_id,image) VALUES (6,"http://localhost/Webproject/tmp_image/mirror.jpg");
INSERT INTO images(board_id,image) VALUES (7,"http://localhost/Webproject/tmp_image/staff2.jpg");
INSERT INTO images(board_id,image) VALUES (7,"http://localhost/Webproject/tmp_image/staff.jpg");
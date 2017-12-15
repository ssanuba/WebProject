<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js" type="text/javascript"></script>
    <script type="text/javascript">
        document.observe("dom:loaded",function(){
            location.replace("buypage.php");
        });
    </script>
	<title>Document</title>
</head>
<body>
 	<?php
        $dbTitle = $_POST["title"];
        $dbPrice = $_POST["price"];
        $dbContent = $_POST["content"];
        $dbCatalog = $_POST["catalog"];
        $dbUsed = $_POST["used"];
        $dbPhone = $_POST["phone"];
		$dbCatalog = processCheckbox($dbCatalog);
		$dbCreated = date("Y-m-d H:i:s");
		
        try {
            $db = new PDO("mysql:host=localhost;dbname=Hanzo;charset=utf8", "root", "root");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $boards_query = "INSERT INTO boards (user_id, title, price, content, catalog, used, phone, created) VALUES (2013888888, '$dbTitle', '$dbPrice', '$dbContent', '$dbCatalog', '$dbUsed', '$dbPhone', '$dbCreated')";

            $query = "SELECT board_id FROM boards WHERE user_id = 2013888888 AND created='$dbCreated'";
            
            $db->query($boards_query);
            $boardId = 0;
            $board_rows = $db->query($query);

            foreach ($board_rows as $value) {
            	$boardId = (int)$value[0];
            }
            $index=1;
            foreach ($_FILES["image"]["error"] as $key => $error) {
				if (!($_FILES["image"]["name"][0]=="")){
                    $image_name = $_FILES["image"]["name"][$key];
    			    $tmp_name = $_FILES["image"]["tmp_name"][$key];
                    $type = substr($image_name,strpos($image_name,"."));
    			    $saveLocation = "http://localhost/Webproject/images/".$boardId."_".$index.$type;
                    $saveLocationfolder = "./images/".$boardId."_".$index.$type;
                    if (file_exists($saveLocationfolder)){
                        unlink($saveLocationfolder);
                    }
    			    move_uploaded_file($tmp_name, $saveLocationfolder);
                }else{
                    $saveLocation = "http://localhost/Webproject/images/noimage.png";
                }
			    $images_query = "INSERT INTO images (board_id, image) VALUES ('$boardId', '$saveLocation')";
			    $db->query($images_query);
                $index++;
			}
			

          //  $db->query($images_query);
               
               
        }
        catch(PDOException $e){
            echo "<p>Sorry, a database error occurred. Please try again later.</p>";
            echo "<p>(Error details : ".$e->getMessage()."</p>";
        }

        function processCheckbox($names){ 
			$dbCatalog = implode(", ", $names);
			return $dbCatalog;
		}
    ?>
</body>
</html>
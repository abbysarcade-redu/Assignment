<?php include ("../db.php"); ?>
<?php

if(null !== $_POST["import"]) {
    $filename=$_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0)
    {
        $file = fopen("file", "r");
        while(($getData = fgetcsv($file, 10000, ",")) !== FALSE)
        {
            $addgame = "INSERT INTO product (product_name, slug, product_description, product_cost, featured, game_of_month, available_stock, product_image, playstation, xbox, nintendo, pc)
            VALUES('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."', '".$getData[4]."', '".$getData[5]."', '".$getData[6]."', '".$getData[7]."', '".$getData[8]."', '".$getData[9]."', '".$getData[10]."','".$getData[11]."');";

            $result = mysqli_query($pdo, $addgame);
            if(!isset($result))
            {
                echo "<script type=\"text/javascript\">
                alert(\"Invalid File:Please Upload CSV File.\");
                window.location = \"bulk product upload.php\"
                </script>";
            }
        }
        fclose($file);
    }
}

?>

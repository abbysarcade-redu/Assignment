<?php include ("../tools/db.php"); ?>
<?php

if(null !== $_POST["import"]) {
    $filename=$_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0)
    {
        $file = fopen("file", "r");
        while(($getData = fgetcsv($file, 10000, ",")) !== FALSE)
        {
            $addgame = "INSERT INTO product (product_name, slug, product_description, product_cost, featured, game_of_month, available_stock, product_image, playstation, xbox, nintendo, pc)
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?);";

            $result = $pdo->prepare($addgame);
            $result->execute([
                $getData[0],
            ]);
            if(!isset($result))
            {
                echo "<script type=\"text/javascript\">
                alert(\"Invalid File:Please Upload CSV File.\");
                window.location = \"bulk_product_upload.php\"
                </script>";
            }
        }
        fclose($file);
    }
}

?>

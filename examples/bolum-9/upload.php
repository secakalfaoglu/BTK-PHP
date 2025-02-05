<?php

    if(isset($_POST["btnFileUpload"]) && $_POST["btnFileUpload"]=="Upload"){
        
        // Dosya seçilmiş mi?
        // dosya boyutu
        // dosya ismi kontrol - random
        // dosya uzantısı kontrol

        $dest_path = "./uploadedFiles/";
        $filename = $_FILES["fileToUpload"]["name"];

        if(empty($filename)){
            echo "Please select a file";
            exit;
        }

        $fileSourcePath = $_FILES["fileToUpload"]["tmp_name"];

        $fileDestPath = $dest_path.$filename;

        if(move_uploaded_file($fileSourcePath, $fileDestPath)) {
            echo "File uploaded successfully";
        } else {
            echo "File upload failed";
        }

    }
?>
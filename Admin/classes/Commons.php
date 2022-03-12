<?php

  function uploadImage($fileReceived,$target_dir)
    {
      if(!is_dir($target_dir) && !mkdir($target_dir))
      {
        echo("Can Not Create Directory");
        return false;
      }
    //max file size 8 mb
      $MaxFileSize = 500000000;
    //$target_dir = "uploads/";
    //$fileReceived = $_FILES["fileToUpload"];
      $target_file = $target_dir . basename($fileReceived["name"]);

      $uploadOk = 1;

      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $baseName = pathinfo($target_file, PATHINFO_FILENAME);
      //$nameToUpload = $target_dir . $baseName . "_" .date("Y-m-d_H_i_s.").$imageFileType;
      $nameToUpload = $target_dir . $baseName .".".$imageFileType;
    // Check if image file is a actual image or fake image

      

    // Check if file already exists
      if (file_exists($nameToUpload)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
    // Check file size
      if ($fileReceived["size"] > $MaxFileSize) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
    // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "jpeg"
        && $imageFileType != "JPEG" && $imageFileType != "PNG" && $imageFileType != "png") {
        echo "Sorry, only jpg, jpeg and png files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      return false;
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($fileReceived["tmp_name"], $nameToUpload)) {
        echo "The file ". basename( $fileReceived["name"]). " has been uploaded.";
        return $nameToUpload;
      } else {
        echo "Sorry, there was an error uploading your file.";
        return false;
      }
    }
  }

?>
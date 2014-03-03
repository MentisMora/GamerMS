<?php
    function filterfilename($filename){
        $filename = strtolower($filename);
        $filename = preg_replace("/[^a-z0-9\-\/]/i","",$filename);
        if($filename[0] == "/"){
            $filename = substr($filename,1);
        }
        $filename .= ".html";
        if(!file_exists($filename)){
            $filename = "content/articles/errors/404.php";
        }
        return $filename;
    }
?>
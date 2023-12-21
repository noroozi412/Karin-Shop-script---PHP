<?php

function db2() {
    $server = "localhost";
    $dbname = "shop";
    $username = "root";
    $password = "usbw";
    try {
        return new PDO("mysql:host=$server;dbname=shop", $username, $password);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function showTheme($role) {
    $connection = db2();
    $query = "SELECT * FROM homepageimg WHERE id = $role";
    $stmt = $connection->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}
function uploader1($file,$dir){
    //   $file=$_FILES[$file];
    if(!file_exists($dir)){
      mkdir($dir);}

      $filename=$file['name'];
      $array=explode('.',$filename);
      $ext=end($array);
      $newname=rand()."-img-".'.'.$ext;
      $from=$file['tmp_name'];
      $to=$dir.'/'.$newname;
      move_uploaded_file($from,$to); 
     return $picUrl='http://'.$_SERVER['SERVER_NAME'].'/'.'images/products/'.$newname;
      
   }
    function upadtePhoto($data,$img,$oldimg){
        if($img['name']!='')
        {
           $img=uploader1($img,'../../images/products');
        }
        else{
           $img=$oldimg;
        }
        $connection = db2();
        $query = "UPDATE homepageimg SET img=:img, url=:url WHERE id=:id";
        $stmt=$connection->prepare($query);
        $stmt->bindParam(":img",$img);
        $stmt->bindParam(":url",$data['url']);
        $stmt->bindParam(":id",$data['id']);
        $stmt->execute();
    }
    function userLogin($username,$password){
        $connection = db2();
        $query = "SELECT * FROM users WHERE username=:username AND password=:password";
        $stmt=$connection->prepare($query);
        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":password",$password);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function userRandProduct(){
        $connection = db2();
        $query = "SELECT * FROM product ORDER BY RAND() LIMIT 2";
        $stmt=$connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function userLastOrders($userid){
        $connection = db2();
        $query = "SELECT * FROM orders WHERE iduser = $userid ORDER BY date DESC LIMIT 3";
        $stmt=$connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function userOrders($userid){
        $connection = db2();
        $query = "SELECT * FROM orders WHERE iduser = $userid ORDER BY date DESC LIMIT 10";
        $stmt=$connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function orderDetail($id,$iduser){
        $connection = db2();
        $query = "SELECT * from orders WHERE id=$id AND iduser=$iduser";
        $stmt=$connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();


    }
?>


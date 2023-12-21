<?php

function db(){
    $server ="localhost";
    $dbname ="shop";
    $username ="root";
    $password ="usbw";
 try{
    return new PDO("mysql:host=$server;dbname=shop",$username,$password);
 }catch(PDOException $e){
    echo $e->getMessage();
 }
}
function addmenu($data){
  $conection = db();
  $qurey = "INSERT INTO menu (title,url,sort,status,parent) VALUES (:title,:url,:sort,:status,:parent)";
  $stmt=$conection->prepare($qurey);
  $title = $data['title'];
  $url = $data['url'];
  $sort =$data['sort'];
  $status = $data['status'];
  $parent = $data['parent'];

  $stmt->bindParam(':title',$title);
  $stmt->bindParam(':url',$url);
  $stmt->bindParam(':sort',$sort);
  $stmt->bindParam(':status',$status);
  $stmt->bindParam('parent',$parent);
  $stmt->execute();
}

function showMenu()
{
   $conection = db();
   $qurey = "SELECT * FROM menu WHERE parent = 0";
   $stmt = $conection->query($qurey);
   return $stmt->fetchAll();
}
foreach(showMenu() as $parent)
{
}
function listMenu()
{
   $conection = db();
   $qurey = "SELECT * FROM menu";
   $stmt = $conection->query($qurey);
   return $stmt->fetchAll();
}
function showTitle($parent)
{
   $conection = db();
   $qurey = "SELECT title FROM menu WHERE id =".$parent;
   $stmt = $conection->query($qurey);
   return $stmt->fetchAll();
}
function deleteMenu($id)
{
   $conection = db();
   $qurey = "DELETE FROM menu WHERE id =".$id;
   $conection->query($qurey);
   return true;
}
function getMenu($id){
   $conection = db();
   $qurey = "SELECT * FROM menu WHERE id=$id";
   $stmt = $conection->query($qurey);
   return $stmt->fetchAll();
}
function updateMenu($id, $data){
   $connection = db();
   $query = "UPDATE menu SET title=:title, url=:url, parent=:parent, sort=:sort, status=:status WHERE id=:id";
   $stmt = $connection->prepare($query);
   $stmt->bindParam(':title', $data['title']);
   $stmt->bindParam(':url', $data['url']);
   $stmt->bindParam(':parent', $data['parent']);
   $stmt->bindParam(':sort', $data['sort']);
   $stmt->bindParam(':status', $data['status']);
   $stmt->bindParam(':id', $id);
   $stmt->execute();
}
function headermenu(){
$conection = db();
$qurey = 'SELECT * FROM menu WHERE parent=0 AND status=1 ORDER BY sort asc';
$stmt=$conection->query($qurey);
return $stmt->fetchAll();
}
function headerSubmenu($id){
   $conection = db();
   $qurey = "SELECT * FROM menu WHERE parent= $id AND status=1 ORDER BY sort asc";
   $stmt=$conection->query($qurey);
   return $stmt->fetchAll();}

   function addcategory($data){
      $conection = db();
      $qurey = "INSERT INTO category (title,status,sort) VALUES (:title,:status,:sort)";
      $stmt=$conection->prepare($qurey);
      $title = $data['title'];
      $sort =$data['sort'];
      $status = $data['status'];
    
      $stmt->bindParam(':title',$title);
      $stmt->bindParam(':status',$status);
      $stmt->bindParam(':sort',$sort);
      $stmt->execute();
  }
  function addcategory2($data){
   $conection = db();
   $qurey = "INSERT INTO category (title,status,sort) VALUES (:title,:status,:sort)";
   $stmt=$conection->prepare($qurey); 
   $title = $data['title'];
   $sort =$data['sort'];
   $status = $data['status'];
   $stmt->bindParam(':title',$title);
   $stmt->bindParam(':status',$status);
   $stmt->bindParam(':sort',$sort);
   $stmt->execute();

  }
    
    function listCategory()
{
   $conection = db();
   $qurey = "SELECT * FROM category";
   $stmt = $conection->query($qurey);
   return $stmt->fetchAll();
}
function deleteCategory($id)
{
   $conection = db();
   $qurey = "DELETE FROM category WHERE id =".$id;
   $conection->query($qurey);
   return true;
}
function updateCategory($id, $data){
   $connection = db();
   $query = "UPDATE category SET title=:title, sort=:sort, status=:status WHERE id=:id";
   $stmt = $connection->prepare($query);
   $stmt->bindParam(':title', $data['title']);
   $stmt->bindParam(':sort', $data['sort']);
   $stmt->bindParam(':status', $data['status']);
   $stmt->bindParam(':id', $id);
   $stmt->execute();
}
function getCategory($id){
   $conection = db();
   $qurey = "SELECT * FROM category WHERE id=$id";
   $stmt = $conection->query($qurey);
   return $stmt->fetchAll();}
function uploader($file,$dir){
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
?>

<?php
function db1(){
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

    function addProduct($data,$img){
        $conection=db1();
        $query="INSERT INTO product (title,text,price,idcategory,img) VALUES (:title,:text,:price,:idcategory,:img)";
        $stmt=$conection->prepare($query);
        $stmt->bindParam(':title', $data['title']);
        $stmt->bindParam(':text', $data['text']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':idcategory', $data['catid']);
        $stmt->bindParam(':img', $img);
        $stmt->execute();
    }
    
    function showCategory()
    {
       $conection = db1();
       $qurey = "SELECT * FROM category";
       $stmt = $conection->query($qurey);
       return $stmt->fetchAll();
    }
    function showCategory1($id)
    {
       $conection = db1();
       $qurey = "SELECT * FROM category WHERE id=$id";
       $stmt = $conection->query($qurey);
       $stmt->execute();
       return $stmt->fetchAll();
    }
 
      function listProduct2() {
         $conection = db1();
         $query = "SELECT * FROM product";
         $stmt = $conection->prepare($query);
         $stmt->execute();
         return $stmt->fetchAll();
      }
      function listProduct3() {
         $conection = db1();
         $query = "SELECT * FROM product ORDER BY VIEW DESC LIMIT 10";
         $stmt = $conection->prepare($query);
         $stmt->execute();
         return $stmt->fetchAll();
      }
         function deleteProduct($id){
            $conection=db1();
            $query="DELETE FROM product WHERE id=$id";
            $stmt=$conection->prepare($query);
            $stmt->execute();}
            function getProduct($id){
               $conection=db1();
               $query="SELECT * FROM product WHERE id=:id";
               $stmt=$conection->prepare($query);
               $stmt->bindParam(":id", $id);
               $stmt->execute();
              return $stmt->fetchAll();
            }
            
            function updateProduct($data,$id,$img,$oldimg){
               if($img['name']!='')
               {
                  $img=uploader($img,'../../images/products');
               }
               else{
                  $img=$oldimg;
               }
               $conection=db1();
               $query="UPDATE product SET title=:title,text=:text,price=:price,idcategory=:idcategory,img=:img WHERE id=:id";
               $stmt=$conection->prepare($query);
               $stmt->bindParam(':title', $data['title']);
               $stmt->bindParam(':text', $data['text']);
               $stmt->bindParam(':price', $data['price']);
               $stmt->bindParam(':idcategory', $data['idcategory']);
               $stmt->bindParam(':img', $img);
               $stmt->bindParam(':id', $id);
               $stmt->execute();

            }
             function lastlistProduct(){
               $conection = db1();
               $query = "SELECT * FROM product ORDER BY id DESC LIMIT 5";
               $stmt = $conection->prepare($query);
               $stmt->execute();
               return $stmt->fetchAll();
             }
               function randomProduct(){ $conection = db1();
                  $query = "SELECT * FROM product ORDER BY RAND() LIMIT 5";
                  $stmt = $conection->prepare($query);
                  $stmt->execute();
                  return $stmt->fetchAll();
               }
               function viewplus($id){
                  $conection=db1();
                  $query="UPDATE product SET VIEW = VIEW + 1 WHERE id = :id";
                  $stmt=$conection->prepare($query);
                  $stmt->bindParam(':id', $id);
                  $stmt->execute();
                  }
               function Relatedproducts($catid){
                   $conection = db1();
                     $query = "SELECT * FROM product WHERE idcategory =:catid LIMIT 5";
                     $stmt = $conection->prepare($query);
                     $stmt->bindParam(':catid', $catid);
                     $stmt->execute();
                     return $stmt->fetchAll();
                  }

                  function shopPage($page){
                     $conection=db1();
                     $query = "SELECT * FROM product ORDER BY id ASC LIMIT $page , 12";
                     $stmt = $conection->prepare($query);
                    //$stmt->bindParam(':page', $page);
                     $stmt->execute();
                     return $stmt->fetchAll();
                  }
                  function shopPageView($page){
                     $conection=db1();
                     $query = "SELECT * FROM product ORDER BY VIEW DESC LIMIT $page , 12";
                     $stmt = $conection->prepare($query);
                    //$stmt->bindParam(':page', $page);
                     $stmt->execute();
                     return $stmt->fetchAll();
                  }
                  function MostExpensive($page){
                     $conection=db1();
                     $query = "SELECT * FROM product ORDER BY price DESC LIMIT $page , 12";
                     $stmt = $conection->prepare($query);
                    //$stmt->bindParam(':page', $page);
                     $stmt->execute();
                     return $stmt->fetchAll();
                  }
                  function CheapestProduct($page){
                     $conection=db1();
                     $query = "SELECT * FROM product ORDER BY price ASC LIMIT $page , 12";
                     $stmt = $conection->prepare($query);
                    //$stmt->bindParam(':page', $page);
                     $stmt->execute();
                     return $stmt->fetchAll();
                  }
                  function CategoryFilterProduct($catid,$page){
                     $conection=db1();
                     $query = "SELECT * FROM product WHERE idcategory = $catid ORDER BY idcategory ASC LIMIT $page , 12;";
                     $stmt = $conection->prepare($query);
                    //$stmt->bindParam(':page', $page);
                     $stmt->execute();
                     return $stmt->fetchAll();
                  }
                  function CategoryFilterProductView($catid,$page){
                     $conection=db1();
                     $query = "SELECT * FROM product WHERE idcategory = $catid ORDER BY VIEW DESC LIMIT $page , 12;";
                     $stmt = $conection->prepare($query);
                    //$stmt->bindParam(':page', $page);
                     $stmt->execute();
                     return $stmt->fetchAll();
                  }
                  function CategoryFilterProductExpensive($catid,$page){
                     $conection=db1();
                     $query = "SELECT * FROM product WHERE idcategory = $catid ORDER BY price DESC LIMIT $page , 12;";
                     $stmt = $conection->prepare($query);
                    //$stmt->bindParam(':page', $page);
                     $stmt->execute();
                     return $stmt->fetchAll();
                  }
                  function CategoryFilterProductCheapest($catid,$page){
                     $conection=db1();
                     $query = "SELECT * FROM product WHERE idcategory = $catid ORDER BY price ASC LIMIT $page , 12;";
                     $stmt = $conection->prepare($query);
                    //$stmt->bindParam(':page', $page);
                     $stmt->execute();
                     return $stmt->fetchAll();}
                     
                     function addOrder($iduser,$name,$price,$trackingcode,$authority,$status,$address,$phone,$familyname){
                        $conection=db1();
                        //$query="INSERT INTO orders (iduser,name,price,trackingcode,authority,status) VALUES ($iduser,$name,$price,$trackingcode,$authority,$status)";
                        $query="INSERT INTO orders (iduser,name,price,trackingcode,authority,status,address,phone,familyname) VALUES (:iduser,:name,$price,$trackingcode,$authority,$status,:address,$phone,:familyname)";
                        $stmt=$conection->prepare($query);
                        $stmt->bindParam(':iduser',$iduser);

                        $stmt->bindParam(":name",$name);

                        $stmt->bindParam(':address',$address);
                        $stmt->bindParam(':familyname',$familyname);

                        $stmt->execute();
                    }
                     function orderDetails($authority,$Status){
                        $conection=db1();
                        $query= "SELECT * FROM orders WHERE authority=$authority AND status=$Status";
                        $stmt = $conection->prepare($query);
                        $stmt->execute();
                        return $stmt->fetchAll();

                     }
                     function SerchFilterProduct($searchTerm,$pagenumber){
                        $connection = db1();
                        $query = "SELECT * FROM product WHERE title LIKE '%" . $searchTerm . "%' ORDER BY id ASC LIMIT $pagenumber , 12";
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                        return $stmt->fetchAll();
                     }
                     function SerchFilterProductView($searchTerm,$pagenumber){
                        $connection = db1();
                        $query = "SELECT * FROM product WHERE title LIKE '%" . $searchTerm . "%' ORDER BY VIEW DESC LIMIT $pagenumber , 12";
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                        return $stmt->fetchAll();
                     }
                     function SerchFilterProductCheapest($searchTerm,$pagenumber){
                        $connection = db1();
                        $query = "SELECT * FROM product WHERE title LIKE '%" . $searchTerm . "%' ORDER BY VIEW ASC LIMIT $pagenumber , 12";
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                        return $stmt->fetchAll();
                     }
                     function SerchFilterProductExpensive($searchTerm,$pagenumber){
                        $connection = db1();
                        $query = "SELECT * FROM product WHERE title LIKE '%" . $searchTerm . "%' ORDER BY VIEW DESC LIMIT $pagenumber , 12";
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                        return $stmt->fetchAll();
                     }
                     function listOrders() {

                        $connection = db1();
                        $query = "SELECT * FROM orders";
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                        return $stmt->fetchAll();
                     }
                     function orderDetail($id){
                        $connection = db1();
                        $query ="SELECT * FROM orders WHERE id = $id";
                        $stmt = $connection->prepare($query);
                        $stmt->execute();
                        return $stmt->fetchAll();
                     }
?>
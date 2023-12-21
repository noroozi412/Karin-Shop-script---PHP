<?php 
    include 'include/product.php'; 
    session_start();
    $_SESSION['SS']='SSSS';
    
    if (isset($_GET['add-to-cart']) && !empty(isset($_GET['add-to-cart']))) 
    {
        $product=getProduct($_GET['add-to-cart']);
        
        if(isset($_SESSION['cart_'.$product[0]['id']]))
        {
            $cart=$_SESSION['cart_'.$product[0]['id']];
            $_SESSION['cart_'.$product[0]['id']]=[
                'id'=>$_GET['add-to-cart'],
                'name'=> $cart['name'],
                'cont'=>$cart['cont']+1,
                'img'=>$product[0]['img'],
                'price'=>$cart['price']+$product[0]['price']
            ];
            
        }
        else{
            $_SESSION['cart_'.$product[0]['id']]=[
                'id'=>$_GET['add-to-cart'],
                'name'=> $product[0]['title'],
                'cont'=> 1 ,
                'img'=>$product[0]['img'],
                'price'=>$product[0]['price']
            ];
        }

    }
    else if (isset($_GET['remove']) && !empty(isset($_GET['remove']))) 
    {
        unset($_SESSION['cart_'.$_GET['remove']]);
        header("Location:cart.php");

    }
    else if (isset($_GET['plus']) && !empty(isset($_GET['plus']))) 
    {
        $cart=$_SESSION['cart_'.$product[0]['id']];
            $_SESSION['cart_'.$product[0]['id']]=[
                'id'=>$_GET['add-to-cart'],
                'name'=> $cart['name'],
                'cont'=>$cart['cont']+1,
                'img'=>$product[0]['img'],
                'price'=>$cart['price']+$product[0]['price']
            ];
        header("Location:cart.php");

    }
   else if (isset($_GET['min']) && !empty(isset($_GET['min']))) 
    {
        $product=getProduct($_GET['min']);
        $cart=$_SESSION['cart_'.$product[0]['id']];

        
        if($cart['cont']>1)
        {
            $_SESSION['cart_'.$product[0]['id']]=[
                'id'=>$_GET['min'],
                'name'=> $cart['name'],
                'cont'=>$cart['cont']-1,
                'img'=>$product[0]['img'],
                'price'=>$cart['price']-$product[0]['price']
            ];
            
        }
        else if($cart['cont']<=1){
            unset($_SESSION['cart_'.$_GET['min']]);
            header("Location:cart.php");
        }

    }
    
    print_r($_SESSION);
    header("Location:cart.php");
   

?>
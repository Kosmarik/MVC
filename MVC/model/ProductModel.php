<?php

    require_once '/var/www/html/MVC/libs/dbConnect.php';

    class ProductModel extends dbConnect {
        public function getallproducts(){
            $sql = "SELECT * FROM myShop";
            $result = $this->conn->query($sql);
            $products = mysqli_fetch_all($result);
            return $products;
        }
        public function getProductArrayById($id){
            $products = $this->getallproducts();
            $newId= $id-1;
            return $products[$newId];
        }
    }


    $model = new ProductModel();
//    $products =$model->getallproducts();
    $product = $model->getallproducts();


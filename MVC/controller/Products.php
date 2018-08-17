<?php

    require_once '/var/www/html/MVC/libs/Controller.php';
    require_once  '/var/www/html/MVC/model/ProductModel.php';

   class Products extends Controller {

        public  function index(){

            $model = new ProductModel();
            $this->view->products = $model->getAllProducts();
            $this->view->render('/var/www/html/MVC/view/allProducts.phtml');
        }

       public function product($id){
           $model = new ProductModel();
           $this->view->product = $model->getProductById($id);
           $this->view->render('/var/www/html/MVC/view/Product.phtml');
       }
    }


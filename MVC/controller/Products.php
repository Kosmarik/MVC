<?php

    require_once '/var/www/html/MVC/libs/Controller.php';
    require_once  '/var/www/html/MVC/model/ProductModel.php';
    require_once  '/var/www/html/MVC/model/CommentModel.php';


class Products extends Controller {

        public  function index(){

            $model = new ProductModel();
            $this->view->products = $model->getAllProducts();
            $this->view->render('/var/www/html/MVC/view/allProducts.phtml');
        }

       public function product($id){
            // sita naudoju , kad gauti produkto masyva Product.phtml faile;
           $model = new ProductModel();
           $this->view->product = $model->getProductById($id);
            // sitas , kad gauti comentaru masyva Product.phtml faile;
           $comments = new CommentModel();
           $this->view->comment = $comments->getAllProductComents($id);

           $this->view->render('/var/www/html/MVC/view/Product.phtml');
       }
    }
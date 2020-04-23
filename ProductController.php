<?
require_once("models/Product.php");
class ProductController {
  
 public function addProduct() {
   require_once('views/addProduct.php');
   require_once('views/layout.php');
  }
  
  public function createProduct($post) {
    $result = Product::create("1","1","2","3");
    exit(var_dump($result));
  }
  
}
<?
require_once("models/Product.php");
class ProductController {
  
  public function addProduct() {
    require_once('views/addProduct.php');
    require_once('views/layout.php');
  }
  
  public function createProduct($post) {
    $result = Product::create($post['name'], $post['price'], $post['description'], $post['pictureSource']);
    exit(var_dump($result));
  }
 

  
  public function productPage($id) {
    $product = Product::getById($id);
    require_once('views/productPage.php');
    require_once('views/layout.php');
  }
  
  public function productsCatalog() {
    $products = Product::getAll();
    require_once('views/productsCatalog.php');
    require_once('views/layout.php');
  }
  
  public function addToCart($id) {
    session_start(); 
    $product = Product::getById($id);
    $result = $product->toCart();
    return $result;
  } 
}  







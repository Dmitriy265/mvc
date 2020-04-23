<?
require_once('core/db.php');
$GLOBALS['siteURL'] = 'http://'.$_SERVER['SERVER_NAME'].'/mvc/';
$mvcPath = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
$mvcPath = mb_substr($mvcPath, 4);

$path = explode('/', $mvcPath);

if ($path[1] == "") {
  require_once('controllers/HomeController.php');
  $controller = new HomeController();
  $controller->index();
  exit();

} elseif ($path[1] == "about") {
  require_once('controllers/AboutController.php');
  $controller = new AboutController();
  $controller->index();
  exit();

} elseif ($path[1] == "products") {
  
  if (count($path) > 2 and $path[2] == "add") {
     require_once('controllers/ProductController.php');
     $controller = new ProductController();
     
    if (empty($_POST) ) {
      $controller->addProduct();
      exit();
    } else {
      $controller->createProduct($_POST);
      exit ();
    }
  } else {
    echo "Список товаров";
    exit();
  }  

} elseif ($path[1] == "product") {
  echo "Страничка товара"; 
  exit();
  
} elseif ($path[1] == "cart") {
  echo "Корзина";  
  exit();
  
} else {
  echo "404 not found";  
  exit();
}  
/*} elseif ($path[1] == "about") {
  echo "О нас: ещё информация";
  exit();

}*/




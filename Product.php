<?

class Product {
  private $id;
  private $name;
  private $price;
  private $description;
  private $picture;
  
  
  public function __construct($id, $name, $price, $description, $picture) {
    
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->description = $description;
    $this->picture = $picture;
    
  }
   public function __get($property) {
    return $this->$property;
  } 
  
  public function toCart() {
    $_SESSION['cart'][] = $this;
  }
    
  public static function create($name, $price, $description, $picture) { 
    global $mysqli;
    $result = $mysqli->query("INSERT INTO `products`(`name`, `price`, `description`, `picture`) VALUES ('$name', '$price', '$description', '$picture')");
    return $result;
  }
  
  public static function getById($id) {
    global $mysqli;
    $result = $mysqli->query("SELECT * FROM `products` WHERE `id`='$id'")->fetch_assoc();
    if(isset($result)) {
      $product = new Product($result['id'], $result['name'], $result['price'], $result['description'], $result['picture']);
      return $product;
    } else {
      return false;
    }
    
  }
  public static function getAll() {
    global $mysqli;
    $products =[];
    $result = $mysqli->query("SELECT * FROM `products` WHERE 1");
    while($row = $result->fetch_assoc()) {
      $product = new Product($row['id'], $row['name'], $row['price'], $row['description'], $row['picture']);
      $products[] =  $product;
      
    }
    return $products;
  }
}






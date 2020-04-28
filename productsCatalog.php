<?
$title = "Каталог товаров";
$style = "";

$content = '
<div class="row">
  
';
foreach($products as $product) {
  $content .='
    <div class="col-3 product border shadow p-3" sqlId="'.$product->id.'">
      <img style="height: 100px;" src="'.$GLOBALS['siteURL'].'resource/img/'.$product->picture.'"></img>
      <p>Наименование: '.$product->name.'</p>
      <p>Цена: '.$product->price.'руб.</p>
      <p>Описание: '.$product->description.'</p>
      <a href="'.$GLOBALS['siteURL'].'product/'.$product->id.'" class="btn btn-primary">Подробнее</a>
      <a href="'.$GLOBALS['siteURL'].'cart/add/'.$product->id.'" class="btn btn-success">Купить</a>
    </div>
  
  ';
}
  
$content .= '
  </div>
  
';  
  
  

$script = "";
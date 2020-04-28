<?
$title = "Страница товара";
$style = "";

if(!$product) {
  $content = '<h3>Продукт не найден</h3>';
} else {
$content = '
  <div class="justify-content-center">
    <div class="col-6 product" sqlId="'.$product->id.'">
    <img style="height: 100px;" src="'.$GLOBALS['siteURL'].'resource/img/'.$product->picture.'"></img>
    <p>Наименование: '.$product->name.'</p>
    <p>Цена: '.$product->price.'руб.</p>
    <p>Описание: '.$product->description.'</p>
    <p>Описание: Дополнительно: ...............</p>
    </div>
    
  
  </div>
';
}
$script = "";
<?
$title = "Добавить товар";
$style = '
  label {
    width: 100%;
  }
';

$content = '
  <div class="row justify-content-centr">
    <div class="col-6>
      <h1 class="mt-2">Добавление товара</h1>
      <form class="mt-3">
        <div class="form-group">
          <label>Название товара
            <input type="text" class="form-control" name="name">
          </label>
        </div>
         <div class="form-group">
          <label>Цена
            <input type="text" class="form-control" name="price">
          </label>
        </div>
         <div class="form-group">
          <label>Картинка
            <input type="text" class="form-control" name="pictureSource">
          </label>
        </div>
         <div class="form-group">
          <label>Описание
            <input type="text" class="form-control" name="description"></textarea>
          </label>
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Добавить товар">
      </form>
    </div>
  </div>
';

$script = $GLOBALS['siteURL']."resource/js/addProduct.js";

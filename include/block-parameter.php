<div class="block-parameter">
  <p class="header-title">Поиск по параметрам</p>
  <p class="title-filter">Стоимость</p>

  <form class="" action="search-filter.php" method="GET">
    <div class="block-input-price">
      <ul>
        <li><p>от</p></li>
        <li> <input class="start-price" type="text" name="start_price" value="1000"></li>
        <li><p>до</p></li>
        <li> <input class="end-price" type="text" name="end_price" value="30000"></li>
        <li><p>грн.</p></li>
      </ul>
    </div>

    <div class="block-trackbar"></div>

    <p class="title-filter">Производители</p>

    <ul class="checkbox-brand">
      <li> <input type="checkbox" id="checkbrand1"><label for="checkbrand1">Бренд 1</label></li>
      <li> <input type="checkbox" id="checkbrand2"><label for="checkbrand2">Бренд 2</label></li>
      <li> <input type="checkbox" id="checkbrand3"><label for="checkbrand3">Бренд 3</label></li>

    </ul>

    <center><input type="submit" name="submit" class="button-param-search" value=" "></center>

  </form>

</div>

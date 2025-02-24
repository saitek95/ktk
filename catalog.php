<?php include 'header.php';?>
<div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="">Главная</a></li>
            <li>/</li>
            <li><a href="">Каталог</a></li>
            <li>/</li>
            <li>Товары для маркировки одежды</li>
        </ul>
    </div>
    <h1>товары для маркировки одежды</h1>
    <div class="catalog_items">
        <div class="left_block">
            <div class="menu_category">
                <ul>
                    <li><a href="">Бегунки</a></li>
                    <li><a href="">Пуллеры для молний</a></li>
                    <li><a href="">Пуллеры для молний</a></li>
                    <li class="active"><a href="">Ленты</a></li>
                    <li><a href="">Металлофурнитура</a></li>
                    <li><a href="">Молнии</a></li>
                    <li><a href="">Нитки</a></li>
                </ul>
            </div>
            <div class="filter">
                <div class="top_block">
                    <p class="name">фильтры</p>
                    <a href="">Сбросить все</a>
                </div>
                <div class="filters">
                    <div class="filter__item_price">
                        <p class="name">
                            Цена за упаковку
                        </p>
                        <div class="inputs_price">
                            <div class="input_label">
                                <label for="ot">От</label>
                                <input type="number" value="123" id="ot">
                            </div>
                            <div class="input_label">
                                <label for="do">До</label>
                                <input type="number" value="123" id="do">
                            </div>
                            <div class="input_price_draggable">
                                <div class="input_price_draggable_count">
                                    <span>35</span>
                                    <span>522462</span>
                                </div>
                                <div class="slider_range">
                                    <div class="range"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter__item_checkbox">
                        <p class="name">Тип бегунка</p>
                        <input type="checkbox" id="check_1_1">
                        <label for="check_1_1">
                            <span>Автомат</span>
                        </label>
                        <input type="checkbox" id="check_1_2">
                        <label for="check_1_2">
                            <span>Галантерейный</span>
                        </label>
                        <input type="checkbox" id="check_1_3">
                        <label for="check_1_3">
                            <span>Полуавтомат</span>
                        </label>
                    </div>
                    <div class="filter__item_checkbox">
                        <p class="name">Вид бегунка</p>
                        <input type="checkbox" id="check_2_1">
                        <label for="check_2_1">
                            <span>1 пуллер</span>
                        </label>
                        <input type="checkbox" id="check_2_2">
                        <label for="check_2_2">
                            <span>2 пуллера</span>
                        </label>
                        <input type="checkbox" id="check_2_3">
                        <label for="check_2_3">
                            <span>Перекидной</span>
                        </label>
                        <input type="checkbox" id="check_2_4">
                        <label for="check_2_4">
                            <span>Реверсивный</span>
                        </label>
                    </div>
                    <a href="" class="btn_blue">Применить</a>
                    <a href="" class="btn_default">Сбросить все</a>
                </div>
            </div>
            <div class="banner_left" style="background: url('./assets/img/banner_left.png'), #2BA6FF0D">
                <div class="top_block">
                    <p>Минимальный заказ</p>
                    <p>Минимальный заказ</p>
                    <p>Производство продукции под заказ</p>
                </div>
                <div class="bottom_block">
                    <p>Доставка</p>
                    <p>бесплатно</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
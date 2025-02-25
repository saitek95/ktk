<?php include 'header.php';?>
<div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="">Главная</a></li>
            <li>/</li>
            <li>Корзина</li>
        </ul>
    </div>
    <h1>КОРЗИНА</h1>
    <div class="main_cart">
        <div class="left_block">
            <div class="menu_category">
                <ul>
                    <li><a href="">Отсутствующие товары</a></li>
                    <li><a href="">Просмотренные товары</a></li>
                    <li><a href="">Избранные товары</a></li>
                    <li><a href="">Подписка на рассылки</a></li>
                    <li class="active"><a href="">Корзина</a></li>
                    <li><a href="">История заказов</a></li>
                </ul>
            </div>
        </div>
        <div class="right_block">
            <div class="top_block">
                <img src="./assets/svg/clock_grey.svg" alt="">
                <span>Заказы обрабатываются с понедельника по пятницу с 9:00 до 18:00 по Мск.</span>
            </div>
            <div class="cart_products">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>Товар</th>
                            <th>Артикул</th>
                            <th>Цена</th>
                            <th>Количество</th>
                            <th>Сумма</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="check_cart_product">
                                <input type="checkbox" id="cart_product_1">
                                <label for="cart_product_1"></label>
                            </td>
                            <td class="cart_info_product">
                                <div class="cart_product_img">
                                    <img src="./assets/img/cart_product_1.png" alt="">
                                </div>
                                <div class="cart_product_txt">
                                    <p class="name">
                                        Клапан для вентиляции ВН-600 ПА цв черный (уп 1000шт)
                                    </p>
                                    <span>Ближайшую возможную дату отгрузки уточнит менеджер</span>
                                </div>
                            </td>
                            <td class="cart_article">
                                <p>ПЛА-000808</p>
                            </td>
                            <td class="cart_price">
                                <p>975.00 руб.</p>
                            </td>
                            <td class="cart_count">
                                <div class="variable_count">
                                    <span class="minus">-</span>
                                    <input type="text" value="1">
                                    <span class="plus">+</span>
                                </div>
                            </td>
                            <td class="cart_sum">
                                <p class="sum">
                                    975.00 руб.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="check_cart_product">
                                <input type="checkbox" id="cart_product_2">
                                <label for="cart_product_2"></label>
                            </td>
                            <td class="cart_info_product">
                                <div class="cart_product_img">
                                    <img src="./assets/img/cart_product_1.png" alt="">
                                </div>
                                <div class="cart_product_txt">
                                    <p class="name">
                                        Клапан для вентиляции ВН-600 ПА цв черный (уп 1000шт)
                                    </p>
                                    <span>Ближайшую возможную дату отгрузки уточнит менеджер</span>
                                </div>
                            </td>
                            <td class="cart_article">
                                <p>ПЛА-000808</p>
                            </td>
                            <td class="cart_price">
                                <p>975.00 руб.</p>
                            </td>
                            <td class="cart_count">
                                <div class="variable_count">
                                    <span class="minus">-</span>
                                    <input type="text" value="1">
                                    <span class="plus">+</span>
                                </div>
                            </td>
                            <td class="cart_sum">
                                <p class="sum">
                                    975.00 руб.
                                </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="total_block">
                    <div class="top_items">
                        <div class="left_items">
                            <p>Товаров</p>
                            <span>2</span>
                        </div>
                        <div class="right_items">
                            <div class="item">
                                <p>Сумма</p>
                                <span>975.00 руб.</span>
                            </div>
                            <div class="item">
                                <p>К оплате</p>
                                <span>975.00 руб.</span>
                            </div>
                        </div>
                    </div>
                    <div class="info_items">
                        <div class="left_items">
                            <div class="icon">
                                <img src="./assets/svg/warning.svg" alt="">
                            </div>
                            <p>
                                <span>Минимальная сумма заказа 20 000 руб.</span> Для оформления заказа, пожалуйста,
                                пополните корзину на необходимую сумму.
                            </p>
                        </div>
                        <div class="right_items">
                            <div class="icon">
                                <img src="./assets/svg/warning_cirkle.svg" alt="">
                            </div>
                            <p>
                                <span>Отгрузка возможна: через 1-2 дня после оплаты</span>
                                Дополните корзину до 30 000 руб. для получения дополнительной скидки
                            </p>
                        </div>
                    </div>
                    <div class="btns">
                        <div class="left_items">
                            <a href="" class="btn_no_bg">Удалить</a>
                            <a href="" class="red_btn_no_bg"><img src="./assets/svg/trash_cart.svg" alt="" class="svg">Удалить все</a>
                        </div>
                        <div class="right_items">
                            <a href="" class="btn_blue">Оформить заказ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
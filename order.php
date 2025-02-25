<?php include 'header.php';?>
<div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="">Главная</a></li>
            <li>/</li>
            <li>Корзина</li>
        </ul>
    </div>
    <h1>Оформление заказа</h1>
    <form class="order">
        <div class="left_block">
            <div class="info_buyer">
                <h4>покупатель</h4>
                <div class="name_block">
                    <label for="name">Ф.И.О.<span>*</span></label>
                    <input type="text" id="name" placeholder="Васильев Василий Васильевич">
                </div>
                <div class="contact_block">
                    <div class="item">
                        <label for="email">E-mail<span>*</span></label>
                        <input type="text" id="email" placeholder="example@mail.com">
                    </div>
                    <div class="item">
                        <label for="phone">Телефон<span>*</span></label>
                        <input type="text" class="phone" id="phone" placeholder="+7 (___) ___-__-__">
                    </div>
                </div>
                <div class="info_block_order">
                    <div class="item">
                        <label for="comment">Комментарий к заказу</label>
                        <textarea name="comment" id="comment" placeholder="Напишите что нибудь..."></textarea>
                    </div>
                    <div class="item">
                        <p>Карточка организации</p>
                        <label for="input_file" class="input_file">
                            <input type="file" id="input_file">
                            <span><img src="./assets/svg/UploadSimple.svg" alt="" class="svg">Загрузить</span>
                        </label>

                    </div>
                </div>
            </div>
            <div class="product_in_cart">
                <h4>Товары в заказе</h4>
                <table>
                    <tr>
                        <td class="img"><img src="./assets/img/cart_product_1.png" alt=""></td>
                        <td class="name_info">
                            <p>Клапан для вентиляции ВН-600 ПА цв черный (уп 1000шт)</p>
                            <span>Ближайшую возможную дату отгрузки уточнит менеджер</span>
                        </td>
                        <td class="count">1 шт</td>
                        <td class="total">975.00 руб.</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="img"><img src="./assets/img/cart_product_1.png" alt=""></td>
                        <td class="name_info">
                            <p>Клапан для вентиляции ВН-600 ПА цв черный (уп 1000шт)</p>
                            <span>Ближайшую возможную дату отгрузки уточнит менеджер</span>
                        </td>
                        <td class="count">1 шт</td>
                        <td class="total">975.00 руб.</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="right_block">
            <div class="sticky_block">
                <p class="middle_txt">
                    Товаров на:
                </p>
                <div class="total_price">
                    <p class="price_new">34 398.00 руб.</p>
                    <p class="price_old">35 100.00 руб.</p>
                </div>
                <div class="total_vat_info">
                    <p class="small_txt">НДС (20%, включен в цену):</p>
                    <p class="big_txt">5 733.00 руб.</p>
                </div>
                <p class="middle_txt">Итого</p>
                <div class="bottom_total_price">
                    34 398.00 руб.
                </div>
                <a href="" class="btn_blue">Оформить заказ</a>
                <div class="checked_policy">
                    <input type="checkbox" id="checked_policy">
                    <label for="checked_policy" class="check"></label>
                    <span>Я принимаю условия политики конфиденциальности</span>
                </div>

            </div>
        </div>
    </form>
</div>
<?php include 'footer.php'; ?>
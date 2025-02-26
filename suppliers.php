<?php include 'header.php';?>
<div class="container">
    <div class="breadcrumb">
        <ul>
            <li><a href="">Главная</a></li>
            <li>/</li>
            <li>Поставщикам</li>
        </ul>
    </div>
    <h1>Поставщикам</h1>
    <div class="main_suppliers">
        <div class="items">
            <p>
                Мы приветствуем новых партнеров, способных предложить новые ассортиментные позиции или имеющих
                интересные ценовые предложения и нацеленных на долгосрочное сотрудничество.
            </p>
            <p>
                Если Вы хотите стать нашим партнером в области поставок швейной фурнитуры, тканей, оборудования и
                прочих товаров для легкой промышленности, то Вам необходимо подготовить коммерческое предложение,
                образцы Вашей продукции и отправить их к нам в офис по адресу: 107497, г. Москва, ул. Иркутская,
                дом № 17, строение 14, склад 3, ворота 6. По указанному адресу размещается и склад компании
                "Первая фурнитурная компания".
            </p>
        </div>
        <div class="items">
            <div class="block_grey">
                <p class="title">
                    Связаться с руководителем отдела закупок можно следующим образом:
                </p>
                <p class="name">Дарюхин Константин</p>
                <div class="item">
                    <span class="icon">
                        <img src="./assets/svg/PhoneCall.svg" alt="" class="svg">
                    </span>
                    <p><a href="tel:+78007753842">8-800-775-3842</a></p>
                </div>
                <div class="item">
                    <span class="icon">
                        <img src="./assets/svg/wallet.svg" alt="" class="svg">
                    </span>
                    <p><a href="mailto:info@pfkr.ru">info@pfkr.ru</a></span></p>
                </div>
            </div>
        </div>
        <div class="form_block">
            <form action="">
                <div class="grid_items">
                    <div class="items">
                        <div class="item">
                            <label for="name_company">
                                Название компании
                            </label>
                            <input type="text" id="name_company" placeholder="Васильев Василий Васильевич">
                        </div>
                        <div class="item">
                            <label for="phone">
                                Контактный номер<span>*</span>
                            </label>
                            <input type="tel" id="phone" placeholder="+7 (___) ___-__-__" required>
                        </div>
                        <div class="item">
                            <label for="comment">
                                Комментарий
                            </label>
                            <textarea name="comment" id="comment"></textarea>
                            <input id="comment" placeholder="Напишите что нибудь...">
                        </div>
                        <div class="item">
                            <input type="submit" class="btn_blue">
                        </div>
                    </div>
                    <div class="items">
                        <div class="item">
                            <label for="name">
                                Имя<span>*</span>
                            </label>
                            <input type="text" id="name" placeholder="Васильев Василий Васильевич" required>
                        </div>
                        <div class="item">
                            <label for="email">
                                Электронная почта
                            </label>
                            <input type="email" id="email" placeholder="example@mail.com">
                        </div>
                        <div class="item">
                            <p>Файл с КП</p>
                            <label for="input_file" class="input_file">
                                <input type="file" id="input_file">
                                <span><img src="./assets/svg/UploadSimple.svg" alt="" class="svg">Загрузить</span>
                            </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
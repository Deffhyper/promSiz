<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="order">
        <div class="order-cart">
            <h2 class="block-title-md">Товары в заказе</h2>
            <table class="order-cart-table">
                <tbody>
                <tr class="order-cart-table__item">
                    <td class="order-cart-table__item--img">
                        <a href="#">
                            <img src="img/jpeg_files/goods-1.jpg" alt="goods">
                        </a>
                    </td>
                    <td class="order-cart-table__item--prop">
                        <table>
                            <tbody>
                            <tr>
                                <td><a href="#" class="goods-prop__name">Перчатки антивибрационные Mechanix AV</a></td>
                            </tr>
                            <tr>
                                <td><span class="goods-prop__label">Количество: </span>
                                    <span>3 шт</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="goods-prop__label">Цена: </span>
                                    <s class="goods-price__old">715 грн</s>
                                    <span class="goods-price__current">679 грн</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="order-cart-table__item">
                    <td class="order-cart-table__item--img">
                        <a href="#">
                            <img src="img/jpeg_files/goods-5.jpg" alt="goods">
                        </a>
                    </td>
                    <td class="order-cart-table__item--prop">
                        <table>
                            <tbody>
                            <tr>
                                <td><a href="#" class="goods-prop__name">Перчатки защитныеSTARLINE /E-051-BY/</a></td>
                            </tr>
                            <tr>
                                <td><span class="goods-prop__label">Количество: </span>
                                    <span>1 шт</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="goods-prop__label">Цена: </span>
                                    <span class="goods-price__current">1369 грн</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr class="order-cart-table__item">
                    <td class="order-cart-table__item--img">
                        <a href="#">
                            <img src="img/jpeg_files/goods-6.jpg" alt="goods">
                        </a>
                    </td>
                    <td class="order-cart-table__item--prop">
                        <table>
                            <tbody>
                            <tr>
                                <td><a href="#" class="goods-prop__name">Перчатки антивибрационные STARLINE /125415/</a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="goods-prop__label">Количество: </span>
                                    <span>3 шт</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="goods-prop__label">Цена: </span>
                                    <span class="goods-price__current">279 грн</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table class="total">
                            <tbody>
                            <tr>
                                <td>Товаров на сумму:</td>
                                <td class="total__over">2 678 грн</td>
                            </tr>
                            <tr>
                                <td>Итого:</td>
                                <td class="total__current">2 678 грн</td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="order-user-data">

            <form action="#">

                <h2 class="block-title-md">Информация о покупателе</h2>

                <ul id="input-group-tabs-control" class="horizontal-radio list-inline margin-bottom-md">
                    <li>
                        <input type="radio" id="person-1" class="custom-radio" name="user-status" checked>
                        <label for="person-1" class="custom-radio__label">Физическое лицо</label>
                    </li>
                    <li>
                        <input type="radio" id="person-2" class="custom-radio" name="user-status">
                        <label for="person-2" class="custom-radio__label">Юридическое лицо</label>
                    </li>
                </ul>
                <ul id="input-group-1" class="input-group input-group__tab active">
                    <li class="input-group__item">
                        <label for="u-3" class="input-group__item--label">Ваше имя
                            <mark class="mark-red">*</mark>
                            :</label>
                        <input type="text" id="u-3" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-4" class="input-group__item--label">Фамилия:</label>
                        <input type="text" id="u-4" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-5" class="input-group__item--label">Отчество:</label>
                        <input type="text" id="u-5" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-6" class="input-group__item--label">E-mail
                            <mark class="mark-red">*</mark>
                            :</label>
                        <input type="text" id="u-6" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-7" class="input-group__item--label">Телефон
                            <mark class="mark-red">*</mark>
                            :</label>
                        <input type="text" id="u-7" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="ud-7" class="input-group__item--label">Факс:</label>
                        <input type="text" id="ud-7" class="input-border">
                    </li>
                </ul>

                <ul id="input-group-2" class="input-group input-group__tab">
                    <li class="input-group__item">
                        <label for="uu-1" class="input-group__item--label">Название компании
                            <mark class="mark-red">*</mark>
                            :</label>
                        <input type="text" id="uu-1" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-2" class="input-group__item--label">ИНН
                            <mark class="mark-red">*</mark>
                            :</label>
                        <input type="text" id="uu-2" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-3" class="input-group__item--label">КПП
                            <mark class="mark-red">*</mark>
                            :</label>
                        <input type="text" id="uu-3" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-4" class="input-group__item--label">Имя
                            <mark class="mark-red">*</mark>
                            :</label>
                        <input type="text" id="uu-4" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-5" class="input-group__item--label">Фамилия
                            <mark class="mark-red">*</mark>
                            :</label>
                        <input type="text" id="uu-5" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-6" class="input-group__item--label">Отчество:</label>
                        <input type="text" id="uu-6" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-7" class="input-group__item--label">E-mail
                            <mark class="mark-red">*</mark>
                            :</label>
                        <input type="text" id="uu-7" class="input-border">
                    </li>
                </ul>

                <h3 class="block-title-md">Доставка</h3>

                <p class="paragraph-gray margin-bottom-sm">Стоимость доставки будет оглашена менеджером в индивидуальном
                    порядке</p>

                <ul class="delivery-radio-buttons vertical-radio margin-bottom-sm">
                    <li class="vertical-radio__item">
                        <input type="radio" id="delivery-1" class="custom-radio" name="delivery">
                        <label for="delivery-1" class="custom-radio__label">Новая почта (Доставка до дома)</label>
                    </li>
                    <li class="vertical-radio__item">
                        <input type="radio" id="delivery-2" class="custom-radio" name="delivery">
                        <label for="delivery-2" class="custom-radio__label">Новая почта (Доставка до отделения
                            почты)</label>
                    </li>
                    <li class="vertical-radio__item">
                        <input type="radio" id="delivery-3" class="custom-radio" name="delivery" checked>
                        <label for="delivery-3" class="custom-radio__label">Курьером по Киеву</label>
                    </li>
                    <li class="vertical-radio__item">
                        <input type="radio" id="delivery-4" class="custom-radio" name="delivery">
                        <label for="delivery-4" class="custom-radio__label">Самовывоз</label>
                    </li>
                </ul>


                <ul class="delivery-inputs-list">

                    <li class="delivery-inputs-list__item">
                        <h3 class="block-title-md">Адрес доставки</h3>
                        <ul class="input-group">
                            <li class="input-group__item">
                                <label for="smart-search-1" class="input-group__item--label">Город
                                    <mark class="mark-red">*</mark>
                                    :</label>
                                <div class="smart-search-block">
                                    <input type="text" id="smart-search-1" class="smart-search-input input-border">
                                    <div id="smart-search-res-1" class="search-input-result">
                                        <ul>
                                            <li><a href="#">Киев</a></li>
                                            <li><a href="#">Харьков</a></li>
                                            <li><a href="#">Запорожье</a></li>
                                            <li><a href="#">Донецк</a></li>
                                            <li><a href="#">Луганск</a></li>
                                            <li><a href="#">Винница</a></li>
                                            <li><a href="#">Днепропетровск</a></li>
                                            <li><a href="#">Чернигов</a></li>
                                            <li><a href="#">Львов</a></li>
                                            <li><a href="#">Одесса</a></li>
                                            <li id="noResult-1"><a href="#">Нет результатов</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </li>
                            <li class="input-group__item">
                                <label for="u-11" class="input-group__item--label">Улица
                                    <mark class="mark-red">*</mark>
                                    :</label>
                                <input type="text" id="u-11" class="input-border">
                            </li>
                            <li class="input-group__item">
                                <label for="u-12" class="input-group__item--label">Дом
                                    <mark class="mark-red">*</mark>
                                    :</label>
                                <input type="text" id="u-12" class="input-border">
                            </li>
                            <li class="input-group__item">
                                <label for="u-13" class="input-group__item--label">Квартира/офис
                                    <mark class="mark-red">*</mark>
                                    :</label>
                                <input type="text" id="u-13" class="input-border">
                            </li>
                        </ul>
                    </li>

                    <li class="delivery-inputs-list__item">
                        <h3 class="block-title-md">Адрес доставки</h3>
                        <ul class="input-group">
                            <li class="input-group__item">
                                <label for="smart-search-2" class="input-group__item--label">Город
                                    <mark class="mark-red">*</mark>
                                    :</label>
                                <div class="smart-search-block">
                                    <input type="text" id="smart-search-2" class="smart-search-input input-border">
                                    <div id="smart-search-res-2" class="search-input-result">
                                        <ul>
                                            <li><a href="#">Киев</a></li>
                                            <li><a href="#">Харьков</a></li>
                                            <li><a href="#">Запорожье</a></li>
                                            <li><a href="#">Донецк</a></li>
                                            <li><a href="#">Луганск</a></li>
                                            <li><a href="#">Винница</a></li>
                                            <li><a href="#">Днепропетровск</a></li>
                                            <li><a href="#">Чернигов</a></li>
                                            <li><a href="#">Львов</a></li>
                                            <li><a href="#">Одесса</a></li>
                                            <li id="noResult-2"><a href="#">Нет результатов</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="input-group__item">
                                <label for="smart-search-3" class="input-group__item--label">Отделение Новой Почты
                                    <mark class="mark-red">*</mark>
                                    :</label>
                                <div class="smart-search-block">
                                    <input type="text" id="smart-search-3" class="smart-search-input input-border">
                                    <div id="smart-search-res-3" class="search-input-result">
                                        <ul>
                                            <li><a href="#">Отделение 1</a></li>
                                            <li><a href="#">Отделение 2</a></li>
                                            <li><a href="#">Отделение 3</a></li>
                                            <li><a href="#">Отделение 4</a></li>
                                            <li><a href="#">Отделение 5</a></li>
                                            <li><a href="#">Отделение 6</a></li>
                                            <li><a href="#">Отделение 7</a></li>
                                            <li><a href="#">Отделение 8</a></li>
                                            <li><a href="#">Отделение 9</a></li>
                                            <li><a href="#">Отделение 10</a></li>
                                            <li id="noResult-3"><a href="#">Нет результатов</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>

                    <li class="delivery-inputs-list__item active">
                        <h3 class="block-title-md">Адрес доставки</h3>
                        <ul class="input-group">
                            <li class="input-group__item">
                                <label for="ub-10" class="input-group__item--label">Город:</label>
                                <input type="text" id="ub-10" class="input-border" value="Киев" readonly>
                            </li>
                            <li class="input-group__item">
                                <label for="ub-11" class="input-group__item--label">Улица
                                    <mark class="mark-red">*</mark>
                                    :</label>
                                <input type="text" id="ub-11" class="input-border">
                            </li>
                            <li class="input-group__item">
                                <label for="ub-12" class="input-group__item--label">Дом
                                    <mark class="mark-red">*</mark>
                                    :</label>
                                <input type="text" id="ub-12" class="input-border">
                            </li>
                            <li class="input-group__item">
                                <label for="ub-13" class="input-group__item--label">Квартира/офис
                                    <mark class="mark-red">*</mark>
                                    :</label>
                                <input type="text" id="ub-13" class="input-border">
                            </li>
                        </ul>
                    </li>

                    <li class="delivery-inputs-list__item">
                        <h3 class="block-title-md">Забрать товар можно по адресу</h3>

                        <div class="gray-form">
                            <p>08298 Киевская область, Киево-Святошинский район, пгт. Коцюбинское, ул. Пономарева,
                                32</p>
                        </div>
                    </li>

                </ul>


                <h3 class="block-title-md">Способ оплаты</h3>

                <ul class="payment-method vertical-radio margin-bottom-md">
                    <li class="vertical-radio__item">
                        <input type="radio" id="u-14" class="custom-radio" name="pay">
                        <label for="u-14" class="custom-radio__label">Наличными</label>
                    </li>
                    <li class="vertical-radio__item">
                        <input type="radio" id="u-15" class="custom-radio" name="pay" checked>
                        <label for="u-15" class="custom-radio__label">Безналичный расчет</label>
                    </li>
                    <li class="vertical-radio__item disabled">
                        <input type="radio" id="imposed" class="custom-radio" name="pay">
                        <label for="imposed" class="custom-radio__label">Наложенным платежом</label>
                    </li>
                </ul>

                <h3 class="block-title-md">Комментарии к заказу</h3>

                <textarea name="user-meassage" id="" class="order-message input-message margin-bottom-lg"></textarea>

                <input type="submit" class="btn btn-lg btn--accent" value="Оформить заказ">


            </form>

        </div>


    </div>
</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>

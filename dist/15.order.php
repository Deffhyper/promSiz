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
                                <td><a href="#" class="goods-prop__name">Перчатки антивибрационные STARLINE /125415/</a></td>
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
                                <td>Товаров на сумму: </td>
                                <td class="total__over">2 678 грн</td>
                            </tr>
                            <tr>
                                <td>Итого: </td>
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
                        <input type="radio" id="control-one" class="custom-radio" name="user-status" checked>
                        <label for="control-one" class="custom-radio__label">Физическое лицо</label>
                    </li>
                    <li>
                        <input type="radio" id="control-two" class="custom-radio" name="user-status">
                        <label for="control-two" class="custom-radio__label">Юридическое лицо</label>
                    </li>
                </ul>
                <ul id="input-group-1"  class="input-group input-group__tab active">
                    <li class="input-group__item">
                        <label for="u-3" class="input-group__item--label">Ваше имя<mark class="mark-red">*</mark>:</label>
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
                        <label for="u-6" class="input-group__item--label">E-mail<mark class="mark-red">*</mark>:</label>
                        <input type="text" id="u-6" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-7" class="input-group__item--label">Телефон<mark class="mark-red">*</mark>:</label>
                        <input type="text" id="u-7" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="ud-7" class="input-group__item--label">Факс:</label>
                        <input type="text" id="ud-7" class="input-border">
                    </li>
                </ul>

                <ul id="input-group-2"  class="input-group input-group__tab">
                    <li class="input-group__item">
                        <label for="uu-1" class="input-group__item--label">Название компании<mark class="mark-red">*</mark>:</label>
                        <input type="text" id="uu-1" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-2" class="input-group__item--label">ИНН<mark class="mark-red">*</mark>:</label>
                        <input type="text" id="uu-2" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-3" class="input-group__item--label">КПП<mark class="mark-red">*</mark>:</label>
                        <input type="text" id="uu-3" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-4" class="input-group__item--label">Имя<mark class="mark-red">*</mark>:</label>
                        <input type="text" id="uu-4" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-5" class="input-group__item--label">Фамилия<mark class="mark-red">*</mark>:</label>
                        <input type="text" id="uu-5" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-6" class="input-group__item--label">Отчество:</label>
                        <input type="text" id="uu-6" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="uu-7" class="input-group__item--label">E-mail<mark class="mark-red">*</mark>:</label>
                        <input type="text" id="uu-7" class="input-border">
                    </li>
                </ul>

                <h3 class="block-title-md">Доставка</h3>

                <p class="paragraph-gray margin-bottom-sm">Стоимость доставки будет оглашена менеджером в индивидуальном порядке</p>

                <ul class="vertical-radio margin-bottom-sm">
                    <li class="vertical-radio__item">
                        <input type="radio" id="u-8" class="custom-radio" name="delivery">
                        <label for="u-8" class="custom-radio__label">Самовывоз</label>
                    </li>
                    <li class="vertical-radio__item">
                        <input type="radio" id="u-9" class="custom-radio" name="delivery" checked>
                        <label for="u-9" class="custom-radio__label">Курьером</label>
                    </li>
                    <li class="vertical-radio__item">
                        <input type="radio" id="u-16" class="custom-radio" name="delivery">
                        <label for="u-16" class="custom-radio__label">Новая почта</label>
                    </li>
                </ul>

                <h3 class="block-title-md">Адрес доставки</h3>

                <ul class="input-group">
                    <li class="input-group__item">
                        <label for="u-10" class="input-group__item--label">Город:</label>
                        <input type="text" id="u-10" class="input-border" value="Киев">
                    </li>
                    <li class="input-group__item">
                        <label for="u-11" class="input-group__item--label">Улица<mark class="mark-red">*</mark>:</label>
                        <input type="text" id="u-11" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-12" class="input-group__item--label">Дом<mark class="mark-red">*</mark>:</label>
                        <input type="text" id="u-12" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-13" class="input-group__item--label">Квартира/офис:</label>
                        <input type="text" id="u-13" class="input-border">
                    </li>
                </ul>

                <h3 class="block-title-md">Способ оплаты</h3>

                <ul class="vertical-radio margin-bottom-md">
                    <li class="vertical-radio__item">
                        <input type="radio" id="u-14" class="custom-radio" name="pay">
                        <label for="u-14" class="custom-radio__label">Наличными</label>
                    </li>
                    <li class="vertical-radio__item">
                        <input type="radio" id="u-15" class="custom-radio" name="pay" checked>
                        <label for="u-15" class="custom-radio__label">Безналичный расчет</label>
                    </li>
                </ul>
                
                <h3 class="block-title-md">Комментарии к заказу</h3>

                <textarea name="user-meassage" id="" class="order-message input-message margin-bottom-lg"></textarea>

                <button type="submit" class="btn btn-lg btn--accent">Оформить заказ</button>




            </form>

        </div>



    </div>
</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>

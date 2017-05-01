<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<section class="block-bottom-padding--md">
    <div class="container">
        <div class="sidebar">

            <p class="sidebar__title bold-text">Категории товаров</p>

            <ul class="sidebar__list">
                <li><a href="#">Спецодежда</a></li>
                <li><a href="#">Спецобувь</a></li>
                <li><a href="#">Рабочие перчатки</a></li>
                <li><a href="#">Средства защиты глаз и лица</a></li>
                <li><a href="#">Средства защиты головы</a></li>
                <li><a href="#">Средства защиты органов слуха</a></li>
                <li><a href="#">Средства защиты органов дыхания</a></li>
                <li><a href="#">ДСИЗ</a></li>
                <li><a href="#">Защита от электрического тока</a></li>
                <li><a href="#">Защитные системы блокировки LOTO</a></li>
                <li><a href="#">Средства защиты от падения с высоты</a></li>
                <li><a href="#">Другое</a></li>
                <li><a href="#">Распродажа</a></li>
            </ul>

            <p class="sidebar__title bold-text">Фильтры товаров</p>

            <div class="sidebar__filter">
                <form action="#">
                    <fieldset class="sidebar-range">

                        <p class="sidebar-range__title">Стоимость</p>

                        <div class="sidebar-range__val">
                            <div class="range-from">
                                <label for="amount-min">От:</label>
                                <input type="text" id="amount-min" readonly>
                            </div>
                            <div class="range-to">
                                <label for="amount-max">До:</label>
                                <input type="text" id="amount-max" readonly>
                            </div>
                        </div>

                        <div id="slider-range"></div>

                        <div class="sidebar-range__static">
                            <span class="range-from">15</span>
                            <span class="range-to">25890</span>
                        </div>

                    </fieldset>
                    <fieldset class="sidebar-checkboxes">
                        <p class="sidebar-range__title">Производитель</p>

                        <ul class="sidebar-checkboxes__list">
                            <li>
                                <input type="checkbox" id="ch-1" class="custom-checkbox">
                                <label for="ch-1">Mechanix AV</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-2" class="custom-checkbox">
                                <label for="ch-2">Starline</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-3" class="custom-checkbox">
                                <label for="ch-3">Triarma</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-4" class="custom-checkbox">
                                <label for="ch-4">Tegera</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-5" class="custom-checkbox">
                                <label for="ch-5">Mechanix AV</label>
                            </li>
                        </ul>

                    </fieldset>

                    <fieldset class="sidebar-checkboxes">
                        <p class="sidebar-range__title">Тип перчаток</p>

                        <ul class="sidebar-checkboxes__list">
                            <li>
                                <input type="checkbox" id="ch-6" class="custom-checkbox">
                                <label for="ch-6">от вибраций</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-7" class="custom-checkbox">
                                <label for="ch-7">от механических воздействий</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-8" class="custom-checkbox">
                                <label for="ch-8">от повышенных температур</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-9" class="custom-checkbox">
                                <label for="ch-9">от пониженных температур</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-10" class="custom-checkbox">
                                <label for="ch-10">от порезов</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-12" class="custom-checkbox">
                                <label for="ch-12">от токсических веществ, кислот и щелочей</label>
                            </li>
                        </ul>
                    </fieldset>

                    <fieldset class="sidebar__filter--ctrl">
                        <button type="submit" class="btn btn-md btn--accent">Применить</button>
                    </fieldset>
                    <fieldset class="sidebar__filter--ctrl">
                        <button type="reset" class="btn-link">Сбросить фильтры</button>
                    </fieldset>

                </form>
            </div>

        </div>
        <div class="right-block">
            <a class="catalog-title-mob bold-text">Рабочие перчатки</a>
            <ul class="five-item-list">
                <li>
                    <a href="#">
                        <span class="five-item-list--photo">
                            <img src="img/jpeg_files/cat-1.jpg" alt="category">
                        </span>
                        <span class="five-item-list--title"><span>Защита от механических рисков</span></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="five-item-list--photo">
                            <img src="img/jpeg_files/cat-2.jpg" alt="category">
                        </span>
                        <span class="five-item-list--title"><span>Защита от химических веществ и микроорганизмов</span></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="five-item-list--photo">
                            <img src="img/jpeg_files/cat-3.jpg" alt="category">
                        </span>
                        <span
                            class="five-item-list--title"><span>Защита от общих производственных загрязнений</span></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="five-item-list--photo">
                            <img src="img/jpeg_files/cat-4.jpg" alt="category">
                        </span>
                        <span class="five-item-list--title"><span>Защита от пониженных температур</span></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="five-item-list--photo">
                            <img src="img/jpeg_files/cat-5.jpg" alt="category">
                        </span>
                        <span class="five-item-list--title"><span>Защита от повышенных температур</span></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="five-item-list--photo">
                            <img src="img/jpeg_files/cat-6.jpg" alt="category">
                        </span>
                        <span class="five-item-list--title"><span>Рукавицы</span></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="five-item-list--photo">
                            <img src="img/jpeg_files/cat-7.jpg" alt="category">
                        </span>
                        <span class="five-item-list--title"><span>Защита от вибрации</span></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="five-item-list--photo">
                            <img src="img/jpeg_files/cat-8.jpg" alt="category">
                        </span>
                        <span class="five-item-list--title"><span>Перчатки одноразовые</span></span>
                    </a>
                </li>
                <li></li>
                <li></li>
            </ul>
            <h2 class="right-block__title">Все товары “Рабочие перчатки”</h2>

            <div class="goods-sort-panel">
                <div class="goods-sort__select">
                    <label for="sel-1">Сортировать:</label>
                    <select name="sort" id="sel-1" class="selectpicker">
                        <option value="1">по популярности</option>
                        <option value="2">по возрастанию</option>
                        <option value="3">по убыванию</option>
                        <option value="4">some action</option>
                        <option value="5">some action</option>
                        <option value="6">some action</option>
                    </select>
                </div>
                <div class="goods-sort__kind">
                    <a href="#" class="goods-sort__kind--col">
                        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                    </a>
                    <a href="#" class="goods-sort__kind--row active">
                        <span></span><span></span><span></span>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <ul class="catalog catalog-row">
                <li class="catalog-row__item">
                    <div class="goods">
                        <div class="goods-image">
                            <a href="#">
                                <img src="img/jpeg_files/goods-1.jpg" alt="goods">
                            </a>
                        </div>
                        <div class="goods-prop">
                            <div class="goods-prop__name">
                                <a href="#">Перчатки антивибрационные Mechanix AV Перчатки антивибрационные Mechanix AV
                                    Перчатки антивибрационные Mechanix AV</a>
                            </div>

                            <div class="goods-manufacturer">
                                <span class="normal-text">Производитель:</span><a href="#"> Mechanix AV STARLINE
                                    STARLINE STARLINE STARLINE STARLINE STARLINE</a>
                            </div>
                            <div class="goods-order-state">
                                <span class="normal-text">Статус: </span>
                                <a href="#" class="status-success">есть в наличии</a>
                            </div>
                            <div class="goods-size">
                                <span class="goods-size__label normal-text">Размер:</span>
                                <ul class="goods-size__list list-inline">
                                    <li><a href="#">8 (M)</a></li>
                                    <li><a href="#">9 (L)</a></li>
                                    <li class="active"><a href="#">10 (XL)</a></li>
                                    <li><a href="#">11 (XXL)</a></li>
                                </ul>
                            </div>
                            <div class="goods-color">
                                <span class="goods-color__label normal-text">Цвет:</span>
                                <ul class="goods-color__list list-inline">
                                    <li><a href="#" style="background-color: #dde4de"></a></li>
                                    <li><a href="#" style="background-color: #dddcbe"></a></li>
                                    <li class="active"><a href="#" style="background-color: #ceead3"></a></li>
                                    <li><a href="#" style="background-color: #efd8d1"></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="goods-count">
                            <div class="goods-count__wrapper">
                                <div class="goods-price">
                                    <s class="goods-price__old">715 грн</s>
                                    <span class="goods-price__current">679 грн</span>
                                </div>
                                <div class="goods-count-block">
                                    <p class="goods-count-block__label">Количество:</p>

                                    <form action="#">
                                        <fieldset>
                                            <button type="button" class="btn dec">-</button>
                                            <input type="text" class="goods-amount-input" value="1 шт." readonly>
                                            <button type="button" class="btn inc">+</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="goods-count__wrapper">
                                <div class="goods-order-btn">
                                    <a href="#" class="btn btn-md btn--accent">Заказать товар</a>
                                </div>
                                <div class="goods-show-more">
                                    <a href="#" class="btn">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="catalog-row__item">
                    <div class="goods">
                        <div class="goods-image">
                            <a href="#">
                                <img src="img/jpeg_files/goods-5.jpg" alt="goods">
                            </a>
                        </div>
                        <div class="goods-prop">
                            <div class="goods-prop__name">
                                <a href="#">Перчатки защитныеSTARLINE /E-051-BY/</a>
                            </div>

                            <div class="goods-manufacturer">
                                <span class="normal-text">Производитель:</span><a href="#">STARLINE</a>
                            </div>
                            <div class="goods-order-state">
                                <span class="normal-text">Статус: </span>
                                <a href="#" class="status-order">под заказ</a>
                            </div>
                            <div class="goods-size">
                                <span class="goods-size__label normal-text">Размер:</span>
                                <ul class="goods-size__list list-inline">
                                    <li><a href="#">9 (L)</a></li>
                                    <li class="active"><a href="#">10 (XL)</a></li>
                                </ul>
                            </div>
                            <div class="goods-color">
                                <span class="goods-color__label normal-text">Цвет:</span>
                                <ul class="goods-color__list list-inline">
                                    <li><a href="#" style="background-color: #dde4de"></a></li>
                                    <li><a href="#" style="background-color: #dddcbe"></a></li>
                                    <li class="active"><a href="#" style="background-color: #ceead3"></a></li>
                                    <li><a href="#" style="background-color: #efd8d1"></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="goods-count">
                            <div class="goods-count__wrapper">
                                <div class="goods-price">
                                    <s class="goods-price__old">1589 грн</s>
                                    <span class="goods-price__current">1369 грн</span>
                                </div>
                                <div class="goods-count-block">
                                    <p class="goods-count-block__label">Количество:</p>

                                    <form action="#">
                                        <fieldset>
                                            <button type="button" class="btn dec">-</button>
                                            <input type="text" class="goods-amount-input" value="1 шт." readonly>
                                            <button type="button" class="btn inc">+</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="goods-count__wrapper">
                                <div class="goods-order-btn">
                                    <a href="#" class="btn btn-md btn--accent">Заказать товар</a>
                                </div>
                                <div class="goods-show-more">
                                    <a href="#" class="btn">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="catalog-row__item">
                    <div class="goods">
                        <div class="goods-image">
                            <a href="#">
                                <img src="img/jpeg_files/goods-6.jpg" alt="goods">
                            </a>
                        </div>
                        <div class="goods-prop">
                            <div class="goods-prop__name">
                                <a href="#">Перчатки антивибрационные STARLINE /125415/</a>
                            </div>

                            <div class="goods-manufacturer">
                                <span class="normal-text">Производитель:</span><a href="#"> Mechanix AV STARLINE
                                    STARLINE STARLINE STARLINE STARLINE STARLINE</a>
                            </div>
                            <div class="goods-order-state">
                                <span class="normal-text">Статус: </span>
                                <a href="#" class="status-expected">ожидается</a>
                            </div>
                            <div class="goods-size">
                                <span class="goods-size__label normal-text">Размер:</span>
                                <ul class="goods-size__list list-inline">
                                    <li><a href="#">8 (M)</a></li>
                                    <li class="active"><a href="#">10 (XL)</a></li>
                                    <li><a href="#">11 (XXL)</a></li>
                                </ul>
                            </div>
                            <div class="goods-color">
                                <span class="goods-color__label normal-text">Цвет:</span>
                                <ul class="goods-color__list list-inline">
                                    <li><a href="#" style="background-color: #dde4de"></a></li>
                                    <li><a href="#" style="background-color: #dddcbe"></a></li>
                                    <li class="active"><a href="#" style="background-color: #ceead3"></a></li>
                                    <li><a href="#" style="background-color: #efd8d1"></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="goods-count">
                            <div class="goods-count__wrapper">
                                <div class="goods-price">
                                    <span class="goods-price__current">279 грн</span>
                                </div>
                                <div class="goods-count-block">
                                    <p class="goods-count-block__label">Количество:</p>

                                    <form action="#">
                                        <fieldset>
                                            <button type="button" class="btn dec">-</button>
                                            <input type="text" class="goods-amount-input" value="1 шт." readonly>
                                            <button type="button" class="btn inc">+</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="goods-count__wrapper">
                                <div class="goods-order-btn">
                                    <a href="#" class="btn btn-md btn--accent">Заказать товар</a>
                                </div>
                                <div class="goods-show-more">
                                    <a href="#" class="btn">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="catalog-row__item">
                    <div class="goods">
                        <div class="goods-image">
                            <a href="#">
                                <img src="img/jpeg_files/goods-1.jpg" alt="goods">
                            </a>
                        </div>
                        <div class="goods-prop">
                            <div class="goods-prop__name">
                                <a href="#">Перчатки антивибрационные Mechanix AV Перчатки антивибрационные Mechanix AV
                                    Перчатки антивибрационные Mechanix AV</a>
                            </div>

                            <div class="goods-manufacturer">
                                <span class="normal-text">Производитель:</span><a href="#"> Mechanix AV STARLINE
                                    STARLINE STARLINE STARLINE STARLINE STARLINE</a>
                            </div>
                            <div class="goods-order-state">
                                <span class="normal-text">Статус: </span>
                                <a href="#" class="status-success">есть в наличии</a>
                            </div>
                            <div class="goods-size">
                                <span class="goods-size__label normal-text">Размер:</span>
                                <ul class="goods-size__list list-inline">
                                    <li><a href="#">8 (M)</a></li>
                                    <li><a href="#">9 (L)</a></li>
                                    <li class="active"><a href="#">10 (XL)</a></li>
                                    <li><a href="#">11 (XXL)</a></li>
                                </ul>
                            </div>
                            <div class="goods-color">
                                <span class="goods-color__label normal-text">Цвет:</span>
                                <ul class="goods-color__list list-inline">
                                    <li><a href="#" style="background-color: #dde4de"></a></li>
                                    <li><a href="#" style="background-color: #dddcbe"></a></li>
                                    <li class="active"><a href="#" style="background-color: #ceead3"></a></li>
                                    <li><a href="#" style="background-color: #efd8d1"></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="goods-count">
                            <div class="goods-count__wrapper">
                                <div class="goods-price">
                                    <s class="goods-price__old">715 грн</s>
                                    <span class="goods-price__current">679 грн</span>
                                </div>
                                <div class="goods-count-block">
                                    <p class="goods-count-block__label">Количество:</p>

                                    <form action="#">
                                        <fieldset>
                                            <button type="button" class="btn dec">-</button>
                                            <input type="text" class="goods-amount-input" value="1 шт." readonly>
                                            <button type="button" class="btn inc">+</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="goods-count__wrapper">
                                <div class="goods-order-btn">
                                    <a href="#" class="btn btn-md btn--accent">Заказать товар</a>
                                </div>
                                <div class="goods-show-more">
                                    <a href="#" class="btn">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="catalog-row__item">
                    <div class="goods">
                        <div class="goods-image">
                            <a href="#">
                                <img src="img/jpeg_files/goods-1.jpg" alt="goods">
                            </a>
                        </div>
                        <div class="goods-prop">
                            <div class="goods-prop__name">
                                <a href="#">Перчатки антивибрационные Mechanix AV Перчатки антивибрационные Mechanix AV
                                    Перчатки антивибрационные Mechanix AV</a>
                            </div>

                            <div class="goods-manufacturer">
                                <span class="normal-text">Производитель:</span><a href="#"> Mechanix AV STARLINE
                                    STARLINE STARLINE STARLINE STARLINE STARLINE</a>
                            </div>
                            <div class="goods-order-state">
                                <span class="normal-text">Статус: </span>
                                <a href="#" class="status-success">есть в наличии</a>
                            </div>
                            <div class="goods-size">
                                <span class="goods-size__label normal-text">Размер:</span>
                                <ul class="goods-size__list list-inline">
                                    <li><a href="#">8 (M)</a></li>
                                    <li><a href="#">9 (L)</a></li>
                                    <li class="active"><a href="#">10 (XL)</a></li>
                                    <li><a href="#">11 (XXL)</a></li>
                                </ul>
                            </div>
                            <div class="goods-color">
                                <span class="goods-color__label normal-text">Цвет:</span>
                                <ul class="goods-color__list list-inline">
                                    <li><a href="#" style="background-color: #dde4de"></a></li>
                                    <li><a href="#" style="background-color: #dddcbe"></a></li>
                                    <li class="active"><a href="#" style="background-color: #ceead3"></a></li>
                                    <li><a href="#" style="background-color: #efd8d1"></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="goods-count">
                            <div class="goods-count__wrapper">
                                <div class="goods-price">
                                    <s class="goods-price__old">715 грн</s>
                                    <span class="goods-price__current">679 грн</span>
                                </div>
                                <div class="goods-count-block">
                                    <p class="goods-count-block__label">Количество:</p>

                                    <form action="#">
                                        <fieldset>
                                            <button type="button" class="btn dec">-</button>
                                            <input type="text" class="goods-amount-input" value="1 шт." readonly>
                                            <button type="button" class="btn inc">+</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="goods-count__wrapper">
                                <div class="goods-order-btn">
                                    <a href="#" class="btn btn-md btn--accent">Заказать товар</a>
                                </div>
                                <div class="goods-show-more">
                                    <a href="#" class="btn">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="catalog-row__item">
                    <div class="goods">
                        <div class="goods-image">
                            <a href="#">
                                <img src="img/jpeg_files/goods-1.jpg" alt="goods">
                            </a>
                        </div>
                        <div class="goods-prop">
                            <div class="goods-prop__name">
                                <a href="#">Перчатки антивибрационные Mechanix AV Перчатки антивибрационные Mechanix AV
                                    Перчатки антивибрационные Mechanix AV</a>
                            </div>

                            <div class="goods-manufacturer">
                                <span class="normal-text">Производитель:</span><a href="#"> Mechanix AV STARLINE
                                    STARLINE STARLINE STARLINE STARLINE STARLINE</a>
                            </div>
                            <div class="goods-order-state">
                                <span class="normal-text">Статус: </span>
                                <a href="#" class="status-success">есть в наличии</a>
                            </div>
                            <div class="goods-size">
                                <span class="goods-size__label normal-text">Размер:</span>
                                <ul class="goods-size__list list-inline">
                                    <li><a href="#">8 (M)</a></li>
                                    <li><a href="#">9 (L)</a></li>
                                    <li class="active"><a href="#">10 (XL)</a></li>
                                    <li><a href="#">11 (XXL)</a></li>
                                </ul>
                            </div>
                            <div class="goods-color">
                                <span class="goods-color__label normal-text">Цвет:</span>
                                <ul class="goods-color__list list-inline">
                                    <li><a href="#" style="background-color: #dde4de"></a></li>
                                    <li><a href="#" style="background-color: #dddcbe"></a></li>
                                    <li class="active"><a href="#" style="background-color: #ceead3"></a></li>
                                    <li><a href="#" style="background-color: #efd8d1"></a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="goods-count">
                            <div class="goods-count__wrapper">
                                <div class="goods-price">
                                    <s class="goods-price__old">715 грн</s>
                                    <span class="goods-price__current">679 грн</span>
                                </div>
                                <div class="goods-count-block">
                                    <p class="goods-count-block__label">Количество:</p>

                                    <form action="#">
                                        <fieldset>
                                            <button type="button" class="btn dec">-</button>
                                            <input type="text" class="goods-amount-input" value="1 шт." readonly>
                                            <button type="button" class="btn inc">+</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                            <div class="goods-count__wrapper">
                                <div class="goods-order-btn">
                                    <a href="#" class="btn btn-md btn--accent">Заказать товар</a>
                                </div>
                                <div class="goods-show-more">
                                    <a href="#" class="btn">Подробнее</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
            <?php include_once "parts/pagination.php" ?>

            <div class="seo-text">

                <h3 class="seo-text--title margin-bottom-sm">Рабочие перчатки</h3>

                <p class="margin-bottom-md">
                    Компания «ПромСИЗ» — национальный производитель, разработчик и поставщик средств индивидуальной
                    защиты, одно из крупнейших предприятий в Украине по комплексному обслуживанию клиентов различных
                    отраслей промышленности. Компания «ПромСИЗ» национальный производитель, разработчик и поставщик
                    промышленных средств индивидуальной защиты, одно из крупнейших предприятий в Украине по комплексному
                    обслуживанию клиентов различных отраслей промышленности.
                </p>

                <p class="margin-bottom-md">
                    С 1998 года наша компания обеспечивает промышленные предприятия Украины и страны ближнего зарубежья
                    средствами индивидуальной защиты, которые гарантируют безопасность рабочих при выполнении
                    производственных задач и повышают производительность труда на предприятиях.Компания «ПромСИЗ» —
                    национальный производитель, разработчик и поставщик средств индивидуальной защиты, одно из
                    крупнейших предприятий в Украине.
                </p>
            </div>
        </div>
    </div>
</section>


<?php include_once "parts/footer.php" ?>
</body>
</html>

<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<section class="block-bottom-padding--md">
    <div class="container">
        <div class="sidebar">

            <p class="sidebar__title bold-text">Катергории товаров</p>

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
                                <label for="ch-1" >Mechanix AV</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-2" class="custom-checkbox">
                                <label for="ch-2" >Starline</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-3" class="custom-checkbox">
                                <label for="ch-3" >Triarma</label>
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
                                <label for="ch-6" >от вибраций</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-7" class="custom-checkbox">
                                <label for="ch-7" >Starline</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-8" class="custom-checkbox">
                                <label for="ch-8" >Triarma</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-9" class="custom-checkbox">
                                <label for="ch-9">Tegera</label>
                            </li>
                            <li>
                                <input type="checkbox" id="ch-10" class="custom-checkbox">
                                <label for="ch-10">Mechanix AV</label>
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
                        <span class="five-item-list--title"><span>Защита от общих производственных загрязнений</span></span>
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
                <li>
                    <a href="#">
                        <span class="five-item-list--photo">

                        </span>
                        <span class="five-item-list--title">

                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="five-item-list--photo">

                        </span>
                        <span class="five-item-list--title">

                        </span>
                    </a>
                </li>
            </ul>
            <h2 class="right-block__title">Все товары “Рабочие перчатки”</h2>
            <div class="goods-sort-panel">
                <div class="goods-sort__select">
                    <label for="sel-1">Сортировать по:</label>
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
                    <a href="#" class="goods-sort__kind--col active">
                        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                    </a>
                    <a href="#" class="goods-sort__kind--row">
                        <span></span><span></span><span></span>
                    </a>
                </div>
            </div>
            <div class="catalog catalog-col">

            </div>
        </div>
    </div>
</section>


<?php include_once "parts/footer.php" ?>
</body>
</html>

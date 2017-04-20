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

        </div>
    </div>
</section>


<?php include_once "parts/footer.php" ?>
</body>
</html>

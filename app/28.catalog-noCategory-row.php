<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<section class="block-bottom-padding--md">
    <div class="container">
        <div class="sidebar">

            <?php include_once "parts/filter.php" ?>

        </div>
        <div class="right-block">
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
                    <a href="/promSIZ/27.catalog-noCategory-col.php" class="goods-sort__kind--col">
                        <span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span>
                    </a>
                    <a href="#" class="goods-sort__kind--row active">
                        <span></span><span></span><span></span>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>

            <?php include_once "parts/catalog-row.php" ?>

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

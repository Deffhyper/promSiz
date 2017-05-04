<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<section class="container block-bottom-padding--md">

    <div class="sidebar">
        <a class="catalog-title-mob bold-text">Все</a>
        <ul class="sidebar__list document-filter">
            <li class="active"><a href="#">Все</a></li>
            <li><a href="#">Стандарты</a></li>
            <li><a href="#">Правила</a></li>
            <li><a href="#">Нормы</a></li>
            <li><a href="#">Рекомендации</a></li>
            <li><a href="#">Приказы</a></li>
            <li><a href="#">Инструкции</a></li>
        </ul>
    </div>

    <div class="right-block">
        <div class="document-list">
            <ul>

                <li class="document-list__item">
                    <div class="left">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/pdf-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Название нормативного документа PDF Название
                            нормативного документа PDF</a>
                    </div>
                    <div class="right">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/doc-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Название нормативного документа DOC длинное в две строки</a>
                    </div>
                </li>

                <li class="document-list__item">
                    <div class="left">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/jpg-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Инструкция по експлуатации </a>
                    </div>
                    <div class="right">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/xls-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Инструкция</a>
                    </div>
                </li>

                <li class="document-list__item">
                    <div class="left">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/xls-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Инструкция</a>
                    </div>
                    <div class="right">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/txt-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Название нормативного документа PDF</a>
                    </div>
                </li>
                <li class="document-list__item">
                    <div class="left">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/zip-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Инструкция по експлуатации очень длинное название
                            инструкции в несколько строк, инструкция по експлуатации очень длинное название инструкции в
                            несколько строк. </a>
                    </div>
                    <div class="right">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/ppt-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Название нормативного документа PDF</a>
                    </div>
                </li>
                <li class="document-list__item">
                    <div class="left">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/pdf-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Инструкция</a>
                    </div>
                    <div class="right">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/txt-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Название нормативного документа PDF</a>
                    </div>
                </li>
                <li class="document-list__item">
                    <div class="left">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/jpg-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Инструкция по експлуатации очень длинное название
                            инструкции в несколько строк, инструкция по експлуатации очень длинное название инструкции в
                            несколько строк. </a>
                    </div>
                    <div class="right">
                        <a href="#" class="document-list__item--icon">
                            <object data="img/svg-icon/ppt-icon.svg" type="image/svg+xml"></object>
                        </a>
                        <a href="#" class="document-list__item--link">Название нормативного документа PDF</a>
                    </div>
                </li>
            </ul>
        </div>
        <?php include_once "parts/pagination.php" ?>
    </div>


</section>

<?php include_once "parts/footer.php" ?>
</body>
</html>

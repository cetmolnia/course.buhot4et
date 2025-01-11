<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <meta property="og:title" content="<?= $title ?>">
    <?php if (isset($meta_description) && !empty($meta_description)): ?>
        <meta property="og:description" content="<?= $meta_description ?>">
        <meta name="description" content="<?= $meta_description ?>">
    <?php endif; ?>
    <?php if (isset($meta_images) && !empty($meta_images)): ?>
        <meta property="og:image" content="<?= $meta_images ?>">
    <?php endif; ?>
    <?php if (isset($meta_url) && !empty($meta_url)): ?>
        <meta property="og:url" content="<?= $meta_url ?>">
    <?php endif; ?>

    <?php if ($vueAssetsJs): ?>
        <?php foreach ($vueAssetsJs as $i): ?>
            <script type="module" crossorigin src="/dist/assets/<?= $i ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if ($vueAssetsCss): ?>
        <?php foreach ($vueAssetsCss as $i): ?>
            <link rel="stylesheet" crossorigin href="/dist/assets/<?= $i ?>">
        <?php endforeach; ?>
    <?php endif; ?>

</head>

<body>
    <ul class="nav nav-tabs mt-2 mx-2 d-none d-lg-flex d-print-none">
        <li class="nav-item">
            <a class="nav-link t-menu" aria-current="page" href="https://buhot4et.ru/">Разовая сдача отчетности</a>
        </li>
        <li class="nav-item">
            <a class="nav-link t-menu" href="https://buhot4et.ru/buhgalterskoe-obsluzhivanie/">Бухобслуживание</a>
        </li>
        <li class="nav-item">
            <a class="nav-link t-menu tab-active" href="https://buhot4et.ru/courses/">Профкурсы </a>
        </li>
        <li class="nav-item">
            <a class="nav-link t-menu" href="https://buhot4et.ru/3ndfl/">Подготовка 3-НДФЛ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link t-menu" href="/">БухОбзор: Лента новостей</a>
        </li>
    </ul>

    <div class="dropdown d-flex d-lg-none d-print-none">
        <button class="btn btn-secondary text-center dropdown-toggle w-100" type="button" id="dropdownMenuButton1"
            data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-three-dots"></i>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="https://buhot4et.ru/">Разовая сдача отчетности</a></li>
            <li><a class="dropdown-item" href="https://buhot4et.ru/buhgalterskoe-obsluzhivanie/">Бухобслуживание</a>
            </li>
            <li><a class="dropdown-item" href="https://buhot4et.ru/courses/">Профкурсы <span
                        class="badge text-bg-danger">НОВОЕ!</span></a></li>
            <li><a class="dropdown-item" href="https://buhot4et.ru/3ndfl/">Подготовка 3-НДФЛ</a></li>
            <li><a class="dropdown-item" href="/">БухОбзор: Главное о налогах</a></li>
        </ul>
    </div>

    <nav class="navbar navbar-expand-lg navbar-danger justify-content-md-center d-print-none nav-top">
        <button class="navbar-toggler mx-1" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse mx-1" id="navbarSupportedContent">
            <div class="d-flex row w-100 justify-content-md-between">
                <div class="col-md-auto col-6 flex-fill">
                    <a href="https://buhot4et.ru/"
                        class="d-md-flex d-none align-items-center mb-3 mb-lg-0 me-lg-auto col-md-4 text-dark text-decoration-none d-print-none">
                        <img src="https://buhobzor.buhot4et.ru/wp-content/themes/buhot4et/images/logos/<?= $imgLogo ?>"
                            alt="Сдать НДС онлайн без регистрации - Сервис БУХОТЧЕТ.ру" width="200" />
                    </a>
                    <div class="col-6 col-lg-auto mb-3 mb-lg-0 gx-1 d-none d-print-block">
                        <img src="https://buhobzor.buhot4et.ru/wp-content/themes/buhot4et/images/logos/<?= $imgLogo ?>"
                            width="200" />
                    </div>
                </div>
                <div class="col-md-auto col-12 flex-fill">
                    <div class="">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 px-1 head-menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom">
                                <a class="nav-link nav-top-li" href="/courses/">Начало</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="nav-link nav-top-li" href="/courses/obrinfo/">Сведения об образовательной
                                    организации</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="nav-link nav-top-li" href="/contacts">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-auto col-6 text-end flex-fill">
                    <a href="https://buhobzor.buhot4et.ru/user/" role="button"
                        class="btn btn-sm btn-outline-secondary m-1 text-decoration-none btn-lk"><i
                            class="bi bi-person-fill"></i> Личный кабинет</a>
                    <a href="https://buhot4et.ru/sdat-otchet/" role="button"
                        class="btn btn-sm btn-outline-light m-1 text-decoration-none text-white btn-otchet"> <i
                            class="bi bi-file-earmark-richtext-fill"></i> Сдать отчет</a>
                </div>
            </div>
        </div>
        <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 d-md-none d-block" href="https://buhobzor.buhot4et.ru/">
            <img src="https://buhobzor.buhot4et.ru/wp-content/themes/buhot4et/images/logos/logo_buhot4etru_NY_red.png"
                alt="Сервис БУХОТЧЕТ.ру" width="200">
        </a>
    </nav>
    <header class="py-1 mb-2 border-bottom d-print-none">
        <div class="container-fluid d-flex flex-wrap justify-contentgit-end">
            <div class="col-12 mb-2 mb-lg-0 gx-1 text-md-end text-start telsmall $text_color">
                <i class="bi bi-at"></i> <a href="mailto:info@buhot4et.ru" class="">info@buhot4et.ru</a>
                <i class="bi bi-telephone"></i> (495) 796-13-73, (800) 500-13-37
            </div>
        </div>
    </header>

    <div class="container">
        <block name="index" />
    </div>

</body>

</html>
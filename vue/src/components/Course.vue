<script>
import { ref } from 'vue';
// let publicPath = ref('https://course.buhot4et.grewi');
</script>
<template>
    <div class="container d-flex min-vh-75 my-5 text-center align-items-center justify-content-center">
        <div class="row h-75 p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 col-md-9 col-12 p-3 p-lg-5 pt-lg-3">
                <div class="lh-1">
                    <span class="badge rounded-pill text-bg-danger">Повышение квалификации</span>
                    <span class="badge rounded-pill text-bg-dark"><i class="bi bi-clock"></i> 144ч.</span>
                </div>
                <h1 class="lh-1">Кадровое делопроизводство</h1>
                <p></p>
                <h2>Курс для специалистов, работающих в сфере кадрового делопроизводства и работе с персоналом, а также
                    тем, кто желает овладеть новой профессией. Форма обучения – заочная, с использованием дистанционных
                    образовательных технологий</h2>
                <p></p>
                <p></p>
                <h3><i class="bi bi-hand-thumbs-up"></i> По окончании выдается удостоверение о повышении квалификации на
                    144 часа установленного образца</h3>
                <p></p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center mb-4 mb-lg-3">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalRegCoursekadrovoe-deloproizvodstvo"
                        role="button" class="btn btn-danger btn-lg px-4 me-md-2">
                        <i class="bi bi-emoji-heart-eyes"></i> Хочу
                    </a>
                    <a href="#program" role="button" class="btn btn-outline-danger btn-lg px-4"><i
                            class="bi bi-file-earmark-text"></i> Программа курса</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-2 offset-lg-1 p-0 overflow-hidden shadow-lg d-sm-none d-md-none d-lg-block">
                <img class="rounded-lg-3" :src="'/images/udost_pk_both.png'" alt="" width="720">
            </div>
        </div>
    </div>
    <div class="container-xxl d-flex justify-content-center mb-3 px-3" id="program">
        <div class="row align-items-start w-100 g-0 mx-2">
            <div class="col-12 border-bottom">
                <div class="h1"><i class="bi bi-journal-text"></i> Программа курса</div>
            </div>
            <div class="card card-body col-12 mt-2">
                <h2>1. Обеспечение документооборота по учету и движению кадров и администрирование документооборота</h2>
                <h2>2. Деятельность по обеспечению, оценке, аттестации и развитию персонала</h2>
                <h2>3. Деятельность по организации труда и оплаты персонала</h2>
                <h2>4. Документационное обеспечение управления персоналом предприятия</h2>
                <h2>5. Воинский учет: новые требования и цифровые изменения</h2>
                <h2>Итоговая аттестация</h2>
            </div>
            <div class="col-12 text-center py-5">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalRegCoursekadrovoe-deloproizvodstvo"
                    role="button" class="btn btn-lg btn-danger shadow-sm mb-3"><i class="bi bi-pen"></i> Записаться на
                    курс</a>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center mb-5 px-3">
        <div class="row align-items-stretch w-100 g-2 mx-2">
            <div class="col-12 border-bottom">
                <div class="h1"><i class="bi bi-card-checklist"></i> Как проходит обучение на курсе</div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title"><i class="bi bi-1-circle-fill h3"></i></h4>
                        <h4 class="card-title">Оставляете заявку</h4>
                        <p class="card-text">Через сайт или по телефону. В течение дня с Вами свяжутся и предоставят
                            документы для оплаты (счет, договор, акт)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title"><i class="bi bi-2-circle-fill h3"></i></h4>
                        <h4 class="card-title">Изучаете материалы курса</h4>
                        <p class="card-text">Самостоятельно изучаете материалы курса, сдаете промежуточные тесты</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title"><i class="bi bi-3-circle-fill h3"></i></h4>
                        <h4 class="card-title">Сдаете итоговый тест</h4>
                        <p class="card-text">После изучения материалов сдаете итоговый тест. Количество попыток
                            неограничено</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h4 class="card-title"><i class="bi bi-4-circle-fill h3"></i></h4>
                        <h4 class="card-title">Получаете Удостоверение о повышении квалификации на 144ч.</h4>
                        <p class="card-text">Является документом об образовании установленного образца, с занесением
                            данных в ФИС ФРДО</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center mb-5 px-3">
        <div class="row align-items-stretch w-100 g-2 mx-2">
            <div class="col-12 border-bottom">
                <div class="h1"><i class="bi bi-cash-stack"></i> Стоимость курса</div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-text mb-2">
                            <h2><span class="fs-2 text-danger">3000.00 ₽</span> <span class="text-muted"> <del>4000.00
                                        ₽</del></span></h2>
                        </div>
                        <div class="card-text">
                            <p class="fs-5"><i class="bi bi-exclamation-circle"></i> Специальная цена при оплате до
                                31-12-2024</p>
                        </div>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalRegCoursekadrovoe-deloproizvodstvo"
                            role="button" class="btn btn-lg btn-danger shadow-sm mb-3"><i class="bi bi-pen"></i>
                            Записаться на курс</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title h3">Вы получите</h3>
                        <ul class="list-unstyled">
                            <li><i class="bi bi-check-lg"></i> <strong>Материалы для изучения</strong> в Личном кабинете
                            </li>
                            <li><i class="bi bi-check-lg"></i> <strong>Персонального менеджера</strong> на весь период
                                обучения</li>
                            <li><i class="bi bi-check-lg"></i> <strong>Удостоверение о повышении квалификации</strong>
                                по окончании курса</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <!-- <img src="/images/backgrounds/udost_pk_both.png" class="d-block mx-lg-auto img-fluid"
                    alt="Bootstrap Themes" width="700" height="500" loading="lazy"> -->
            </div>
            <div class="col-lg-6">
                <div class="h1 display-6 text-body-emphasis lh-1 mb-3">Запишитесь на курс прямо сейчас!</div>
                <p class="lead">Специальная цена действует только до 31-12-2024 - потом курс будет дороже.</p>
                <p class="lead">Если остались вопросы, будем рады ответить на них:</p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-check-lg"></i> <a href="tel:+74957961373">(495) 796-13-73</a> (для Москвы и
                        области)</li>
                    <li><i class="bi bi-check-lg"></i> <a href="tel:$phone_2_sp">8 (800) 500-13-37</a> (для остальных
                        регионов)</li>
                </ul>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalRegCoursekadrovoe-deloproizvodstvo"
                        role="button" class="btn btn-lg btn-danger shadow-sm mb-3"><i class="bi bi-pen"></i> Записаться
                        на курс</a>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
import { ref } from 'vue';
// var viewContent = ref(false);
let screenWidth = window.screen.width
let screenHeight = window.screen.height

function NormalDate(date){
    let d = new Date(Date.parse(date));
    return d.getDate() + '.' + d.getMonth() + '.' + d.getFullYear()
}

function NormalPrice(int){
    return new Intl.NumberFormat("ru").format(int);
}
console.log(apiData.value);
</script>

<template >
    123456
    <div v-for="item in apiData">
        <div v-if="item.platform_course.view_lending == 1" class="col-12" itemscope="" itemtype="https://schema.org/ItemList">
            <meta itemprop="name" content="Список курсов повышения квалификации и профпереподготовки">
            <div class="card my-3">
                <div class="row g-0">
                    <div class="col-md-2">
                        <img :src="'https://budget-academy.ru/' + item.img" class="img-fluid rounded-start img-block">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                            <h2 class="card-title">
                                <span class="badge rounded-pill text-bg-danger me-3">{{ item.course_programm.name }}</span>
                                <span class="badge rounded-pill text-bg-dark"><i class="bi bi-clock"></i> {{ item.duration }} ч.</span>
                            </h2>
                            <h2 class="card-title text-lilac" itemprop="name">
                                <a :href="'/courses/info/' + item.slug">{{ item.name }}</a>
                            </h2>
                            <p class="card-text">{{ item.desc }}</p>
                            <p class="card-text text-secondary fw-bold">
                                <i class="bi bi-hand-thumbs-up"></i> Выдается Удостоверение о повышении квалификации на 144 ч.</p>
                            <a itemprop="url" :href="'/courses/info/' + item.slug"
                                class="btn btn-outline-danger me-3" role="button">
                                <i class="bi bi-file-earmark-text"></i>
                                Программа курса
                            </a>
                            <a href="#" class="btn btn-danger" role="button" data-bs-toggle="modal"
                                data-bs-target="#modalRegCoursekadrovoe-deloproizvodstvo">
                                <i class="bi bi-check2-all"></i> Записаться на курс
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class="card-text my-2">Стоимость курса:</p>
                        <div class="h1"><span class="fs-2 text-danger">{{ NormalPrice(item.price) }} ₽</span></div>
                        <span v-if="item.old_price > 0" class="card-text my-2 text-muted"><del>{{ NormalPrice(item.old_price) }} ₽</del></span>
                        <p  v-if="item.date_old_price" class="card-text my-2 text-muted">Специальная стоимость только до {{ NormalDate(item.date_old_price) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<style>
    .img-block{
        height: 100%;
        object-fit: cover; 
        object-position: center; 
        max-width: 100%
    }
</style>
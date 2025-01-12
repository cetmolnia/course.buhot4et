<script setup>
import { ref } from 'vue';
import Courses from './components/Courses.vue'
import Loading from './components/Loading.vue';
let apiUrl = 'https://budget-academy.ru/api/courses?key=35fnb4d3g5n43dg5n4';

console.log(apiUrl);
apiData = ref({});
let viewLoad = ref(true);
let viewContent = ref(false);

const xhr = new XMLHttpRequest();
xhr.open("GET", apiUrl);
 
xhr.onreadystatechange = () => {
    if (xhr.readyState == 4) {                  // если запрос завершен
        if (xhr.status == 200) { 
            apiData.value = JSON.parse(xhr.responseText);
            console.log(ref(apiData.value));
            viewLoad.value = false;
            viewContent.value = true;
            // console.log(viewContent);
        } else {                                // иначе выводим текст статуса
            console.log("Server response: ", xhr.statusText);
        }
    }
};
xhr.send(); 
</script>

<template>
    {{ viewContent }}
    <div v-if="viewContent">
        <Courses />
    </div>
    <div v-if="viewLoad">
        <Loading />
    </div>
</template>
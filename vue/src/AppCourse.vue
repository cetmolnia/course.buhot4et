<script setup>
import { ref, provide } from 'vue';
import Course from './components/Course.vue';
let slug = document.getElementById('course').getAttribute('data-slug');
let viewLoad = ref(true);
let viewCourse = ref(true);
let apiUrl = '/courses/data/' + slug;
let apiData = ref({});
console.log(apiUrl);
provide('apiData', apiData);
fetch(apiUrl, {
    method: 'GET',
    headers: {
        'Content-Type': 'application/json;charset=utf-8',
        'X-Requested-With': 'XMLHttpRequest'
    },
    mode: 'no-cors',
})
    .then(response => {
        if (response.ok) {
            response.json().then(d => {
                apiData.value = d;
                viewLoad.value = false;
                viewIndex.value = true;
            });
        } else {
            response.text().then(d => {
                console.log('error', d);
            });
        }
    })
    .catch(error => {
        console.log(error);
    })
</script>

<template>
    <div v-if="viewCourse">
        <Course />
    </div>
    <div v-if="viewLoad">
        <Loading />
    </div>
</template>
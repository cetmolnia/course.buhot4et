<script setup>
import { ref, provide } from 'vue';
import Courses from './components/Courses.vue'
import Loading from './components/Loading.vue';

let viewLoad = ref(true);
let viewIndex = ref(false);

let apiUrl = '/data';
let apiData = ref({});

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
    <div v-if="viewIndex">
        <Courses />
    </div>
    <div v-if="viewLoad">
        <Loading />
    </div>
</template>
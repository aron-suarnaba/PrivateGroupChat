<script setup>
import Login from '@/Components/Login.vue';
import WelcomeLayout from '@/Layouts/WelcomeLayout.vue';
// import { onMounted, onUnmounted } from 'vue';

defineOptions({ layout: WelcomeLayout });

// onMounted(() => {
//     document.body.classList.add('login-page');
//     document.body.classList.remove('sidebar-mini');
//     document.body.classList.remove('layout-fixed');
// });

// onUnmounted(() => {
//     document.body.classList.remove('login-page');
//     document.body.classList.add('sidebar-mini');
//     document.body.classList.add('layout-fixed');
// });
</script>

<template>
    <Login />
</template>

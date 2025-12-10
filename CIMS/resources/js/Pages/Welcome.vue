<script setup>
import MainSection from '@/Components/section/MainSection.vue';

import WelcomeLayout from '@/Layouts/WelcomeLayout.vue';
defineOptions({ layout: WelcomeLayout });
</script>

<template>
    <MainSection />
</template>

<style scoped>
#logo {
    width: 40px;
    height: 32px;
}
</style>

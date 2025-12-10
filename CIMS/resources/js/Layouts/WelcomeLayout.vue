<script setup>
import Footer from '@/Components/partials/Footer.vue';
import Header from '@/Components/partials/Header.vue';
</script>
<template>
    <div class="app-wrapper">
        <Header />
        <main class="app-main shadow-md" id="main">
            <slot />
        </main>
        <Footer />
    </div>
</template>

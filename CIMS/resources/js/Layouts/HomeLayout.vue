<script setup>
import Sidebar from '@/Components/partials/Aside.vue';
import Nav from '@/Components/partials/Nav.vue';
import Footer from '@/Components/partials/Footer.vue';

import { onMounted, watch } from 'vue';
import { usePage } from '@inertiajs/vue3';

const fixAdminLTELayout = () => {
    if (window.AdminLTE && window.AdminLTE.Layout) {
        window.AdminLTE.Layout.fixLayoutHeight();
        console.log('AdminLTE Layout Fixed and Scrollbar Re-initialized.');
    } else {
        console.warn('AdminLTE global object not found.');
    }
};

onMounted(() => {
    fixAdminLTELayout();
});

const page = usePage();
watch(
    () => page.url,
    () => {
        fixAdminLTELayout();
    },
    { flush: 'post' },
);
</script>

<template>
    <div class="app-wrapper">
        <Nav />

        <Sidebar />

        <main class="app-main" id="main">
            <slot />
        </main>

        <Footer />
    </div>
</template>

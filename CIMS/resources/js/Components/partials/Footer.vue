<script setup>
import { ref } from 'vue';

const appName = ref('VueAppStarter');
const currentYear = ref(new Date().getFullYear());
</script>
<template>
    <footer class="app-footer">
        <div
            class="container mx-auto flex flex-col items-center justify-between px-4 text-sm sm:flex-row"
        >
            <div class="mb-2 sm:mb-0">
                &copy; {{ currentYear }} {{ appName }}. All rights reserved.
            </div>

            <nav>
                <ul class="flex space-x-4">
                    <li>
                        <a
                            href="/about"
                            class="transition duration-150 ease-in-out hover:text-gray-400"
                            >About</a
                        >
                    </li>
                    <li>
                        <a
                            href="/privacy"
                            class="transition duration-150 ease-in-out hover:text-gray-400"
                            >Privacy Policy</a
                        >
                    </li>
                    <li>
                        <a
                            href="/contact"
                            class="transition duration-150 ease-in-out hover:text-gray-400"
                            >Contact</a
                        >
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
</template>

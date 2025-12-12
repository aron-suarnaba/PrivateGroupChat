import { createInertiaApp } from '@inertiajs/vue3';
import 'admin-lte/dist/js/adminlte.min.js';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import '../css/app.css';
import './bootstrap';

const appName = import.meta.env.VITE_APP_NAME || 'CIMS';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
    onSuccess: () => {
        if (window.AdminLTE && window.AdminLTE.Layout) {
            window.AdminLTE.Layout.fixLayoutHeight();
        }
    },
});

document.addEventListener('DOMContentLoaded', () => {
    // Initialize AdminLTE sidebar manually
    const toggle = document.querySelector('[data-lte-toggle="sidebar"]');

    toggle?.addEventListener('click', () => {
        document.body.classList.toggle('sidebar-open');
    });
});

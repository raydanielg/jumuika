import '../css/app.css';
import './bootstrap';
import { createApp } from 'vue';
import Hello from './components/Hello.vue';

document.addEventListener('DOMContentLoaded', () => {
    const el = document.getElementById('app');
    if (el) {
        createApp(Hello).mount('#app');
    }
});

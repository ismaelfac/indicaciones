require('./bootstrap');
import { createApp } from 'vue';
const app = createApp({});
import App from './App.vue';

app.component('example-component', App);

app.mount('#app');
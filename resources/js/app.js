require('./bootstrap');
import { createApp } from 'vue';
const app = createApp({});
import App from './App.vue';
import mitt from 'mitt';
const emitter = mitt();
app.component('example-component', App);
app.config.globalProperties.emitter = emitter;

app.mount('#app');
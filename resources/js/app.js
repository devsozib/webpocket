import './bootstrap';
import {createApp} from 'vue'
const app = createApp({});

import Tutorial from './Tutorial.vue'


app.component('tutorial-component',Tutorial)

app.mount('#app')

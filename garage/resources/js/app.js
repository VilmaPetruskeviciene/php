/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import axios from 'axios';
import './bootstrap';
import { Modal } from 'bootstrap';
//import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

//const app = createApp({});

//import ExampleComponent from './components/ExampleComponent.vue';
//app.component('example-component', ExampleComponent);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

//app.mount('#app');

const mainContent = document.querySelector('.--content');
if(mainContent) {
    const mainForm = mainContent.querySelector('form');
    mainContent.querySelectorAll('select').forEach(s => s.addEventListener('change', () => mainForm.submit()));
}



const breakdown = document.querySelector('#breakdown');
if (breakdown) {
    const trucksList = breakdown.querySelector('#trucks-list');
    const mechanicId = breakdown.querySelector('[name=mechanic_id]');
    const submitButton = breakdown.querySelector('[data-submit]');
    mechanicId.addEventListener('change', () => {
        if(mechanicId.value === '0') {
            trucksList.innerHTML = '';
        } else {
            axios.get(breakdownUrl + '/trucks-list/' + mechanicId.value)
            .then(res => {
                trucksList.innerHTML = res.data.html;
            })
        }
    });
    submitButton.addEventListener('click', () => {
        const data = {};
        breakdown.querySelectorAll('[data-create]')
        .forEach(i => {
            data[i.getAttribute('name')] = i.value;
        });
        axios.post(breakdownUrl + '/create', data)
        .then(res => {
            console.log(res.data);
            getList();
        })
        .catch(error => {
            console.log('Viskas blogai');
        })
    });
    window.addEventListener('load', () => {
        getList();
    });
}

const getList = () => {
    const breakdownsList = document.querySelector('#breakdowns-list');
    axios.get(breakdownUrl + '/list')
        .then(res => {
            breakdownsList.innerHTML = res.data.html;
            deleteEvent();
            modalEvent();
        })
}

const deleteEvent = () => {
    document.querySelectorAll('.delete--button')
    .forEach(b => {
        b.addEventListener('click', () => {
            axios.delete(breakdownUrl + '/' + b.dataset.id)
            .then(res => {
                if (res.data.refresh == 'list') {
                    getList();
                }
            })
        });
    });
}

const modalEvent = () => {
    const modal = document.querySelector('#edit-modal');
    const fadeModal = new Modal(modal);
    document.querySelectorAll('.edit--button')
    .forEach(b => {
        b.addEventListener('click', () => {
            fadeModal.show();
            axios.get(breakdownUrl + '/modal/' + b.dataset.id)
                    .then(res => {
                        modal.querySelector('.modal-dialog').innerHTML = res.data.html;
                    })
        })
    })
}

require('./bootstrap');

window.Vue = require('vue');

require('./components');

require('./core-components');


var app = new Vue({
    el: '#app',
})

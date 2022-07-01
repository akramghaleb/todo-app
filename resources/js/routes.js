
let Home = require('./components/Todo/index.vue').default;
let Create = require('./components/Todo/create.vue').default;
let Edit = require('./components/Todo/edit.vue').default;

export const routes = [
    { path: '/', component: Home ,name:'/' },
    { path: '/todo/new', component: Create ,name:'todo.new' },
    { path: '/todo/edit/:id', component: Edit ,name:'todo.edit' },
]

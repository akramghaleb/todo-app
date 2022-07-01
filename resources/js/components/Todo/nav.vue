<template>
    <nav class="flex items-center justify-between flex-wrap bg-Indigo-900 p-6 transition ease-in duration-300">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-8 w-8 mr-2" width="54" height="54"
                 viewBox="0 0 20 20" fill="currentColor">
                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
            </svg>
            <span class="font-semibold text-xl tracking-tight">Akram Todo</span>
        </div>
        <div class="block lg:hidden">
            <button v-on:click="nav_btn()"
                class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto lg:visible transition ease-in duration-300" v-bind:class="{'hidden':nav_hidden}">
            <div class="text-sm lg:flex-grow">
                <router-link to="/" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Home
                </router-link>
                <router-link to="/todo/new" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
                    Create new
                </router-link>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
name: "nav",
    data(){
        return{
            nav_hidden:true,
        }
    },
    methods:{
        nav_btn(){
            this.nav_hidden = !this.nav_hidden;
        }
    }
}
</script>

<style scoped>

</style>

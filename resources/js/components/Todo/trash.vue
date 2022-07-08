<template>
<div id="todo">
    <Navbar></Navbar>
    <div class="items-center justify-center mt-16 flex" >
        <div  class="p-4 max-w-md w-lg bg-white rounded-lg border shadow-md sm:p-8 dark:bg-gray-800 dark:border-gray-700 w-full">
            <div class="flex justify-between items-center mb-4">
                <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Todo App Trash</h5>

            </div>
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700" v-for="(t, index) in todo_data" :key="index">
                    <li class="py-3 sm:py-4 hover:bg-gray-200 dark:hover:bg-indigo-900 pr-2 pl-2 " >
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 min-w-0" >
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    <s v-if="t.completed">{{ index+1 }} : {{ t.name }}</s><span v-else>{{ index+1 }} : {{ t.name }}</span>
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    <s v-if="t.completed">{{ t.description }}</s><span v-else>{{ t.description }}</span>
                                </p>
                            </div>
                            <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                <button @click="recover_todo(t.id)"
                                        class="bg-blue-700 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-full text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                    </svg>
                                </button>
                                <button @click="del_todo(t.id)"
                                        class=" ml-1 bg-red-700 hover:bg-red-500 text-white font-bold py-2 px-4 rounded-full text-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import Navbar from './nav';

export default {
    name: "index",
    components:{
        Navbar
    },
    data(){
        return {
            todo_data:{},
        }
    },
    methods:{
        async get_todo() {
            console.log('res.data');
            this.errors = {};
            await axios.get('/api/todo_trash')
                .then(res => this.todo_data = res.data)
                .catch(error => {
                    this.errors = error.response.data.errors
                });

            },
            async del_todo(id) {
                if(confirm('Do you want to force delete?')){
                    console.log('res.data');
                    this.errors = {};
                    await axios.delete('/api/todo/destroy/'+id)
                        .then(res => {})
                        .catch(error => {
                            this.errors = error.response.data.errors
                        });
                    this.get_todo();
                    Toast.fire({
                        icon: 'success',
                        title: 'Deleted successfully',
                    })
                }
            },
            async recover_todo(id) {
                if(confirm('Do you want to restore?')){
                    console.log('res.data');
                    this.errors = {};
                    await axios.post('/api/todo/recover/'+id)
                        .then(res => {})
                        .catch(error => {
                            this.errors = error.response.data.errors
                        });
                    this.get_todo();
                    Toast.fire({
                        icon: 'success',
                        title: 'Restored successfully',
                    })
                }
            }
        },
    beforeMount() {
        this.get_todo()
    }

}
</script>

<style scoped>

</style>

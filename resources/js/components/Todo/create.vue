<template>
    <div id="create-todo">
        <Navbar></Navbar>
        <div class="items-center justify-center mt-16 flex" >
        <div class="w-full p-4 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700">
            <form class="space-y-6" @submit.prevent="create()">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Create new todo</h5>
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name</label>
                    <input type="name" id="name" v-model="form.name"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    <small class="text-red-700" v-if="errors.name">{{ errors.name[0] }}</small>
                </div>
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                    <textarea id="description" v-model="form.description"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                    </textarea>
                    <small class="text-red-700" v-if="errors.description">{{ errors.description[0] }}</small>
                </div>
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
            </form>
        </div>
        </div>
    </div>
</template>

<script>
import Navbar from "./nav";

export default {
name: "create",
    components:{
        Navbar
    },
    data(){
        return {
            form :{
                name : '',
                description:'',
                completed:'false'
            },
            errors:{},
            header:{
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                }
            }
        }
    },
    methods:{
        async create(){
            console.log(this.form)
            this.errors = {};
            await axios.post('/api/todo/insert', this.form)
                .then(res => {
                    this.$router.push({name:'/'})
                    Toast.fire({
                        icon: 'success',
                        title: 'Created Successfully',
                    })
                })
                .catch(error => {
                    this.errors = error.response.data.errors;
                    console.log(this.errors);
                    Toast.fire({
                        icon: 'warning',
                        title: 'Invalid Data',
                    })
                });
            }
        }

}
</script>

<style scoped>

</style>

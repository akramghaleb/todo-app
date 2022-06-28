<template>
<div id="test" class="text-orange-700 p-4 ">
    <h1>{{ Title }}</h1>
    <!--Test Fonts-->
    <div>
        <ul>
            <li class="text-xs">Font</li>
            <li class="text-sm">Font</li>
            <li class="text-base">Font</li>
            <li class="text-lg">Font</li>
            <li class="text-xl">Font</li>
            <li class="text-2xl">Font</li>
            <li class="text-3xl font-bold uppercase font-sans mt-16 border">Font</li>
            <li class="text-3xl font-bold uppercase font-serif border-b border-red-500">Font</li>
            <li class="text-3xl  hover:font-bold uppercase font-mono">Font</li>
            <li class="text-3xl font-light lowercase italic bg-secondary-100 text-secondary-200 font-good_font">Font</li>
        </ul>
    </div>
    <div class="flex justify-center items-center">
        <div class="flex-none w-6 h-4 bg-red-500">
            01
        </div>
        <div class="flex-none w-6 h-8 bg-info">
            02
        </div>
        <div class="flex-none w-6 h-12 bg-secondary-100">
            03
        </div>

        <div class="w-12 h-14 bg-red-500 sm:bg-yellow-200 md:bg-blue-500 lg:bg-orange-300 xl:bg-info"></div>
    </div>
    <div class="mt-5 grid grid-cols-3 md:grid-cols-4 lg:grid-cols-3 gap-10 ">
        <div class="card col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <img src="img/1.jpg" class="w-full object-cover h-32 sm:h-48">
            <div class="m-4">
                <span class="font-bold text-lg">Hi this is card</span>
                <span class="block text-sm">I would you like it</span>
            </div>
            <div class="badge">
                <span>15 Min</span>
            </div>
        </div>
        <div class="card col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <img src="img/1.jpg" class="w-full object-cover h-32 sm:h-48">
            <div class="m-4">
                <span class="font-bold text-lg">Hi this is card</span>
                <span class="block text-sm">I would you like it</span>
            </div>
            <div class="badge">
                <span>15 Min</span>
            </div>
        </div>
        <div class="card col-span-3 md:col-span-2 lg:col-span-1 xl:col-span-1">
            <img src="img/1.jpg" class="w-full object-cover h-32 sm:h-48">
            <div class="m-4">
                <span class="font-bold text-lg">Hi this is card</span>
                <span class="block text-sm">I would you like it</span>
            </div>
            <div class="badge">
                <span>15 Min</span>
            </div>
        </div>
    </div>
</div>

</template>

<script>
export default {
    name: "test",
    data(){
        return {
            Title : "Test"
        }
    }
}
</script>

<style scoped>

</style>

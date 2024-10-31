<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Header from "@/Components/Landing/Header.vue";
import { onMounted } from "vue";
import { defineProps } from "vue";
const props = defineProps({
    genres: Object,
});
onMounted(() => {
    console.log(props.genres);
});
</script>
<template>
    <Head title="Create Category" />
    <Header />
    <div class="w-screen h-screen border-2 border-black flex items-center justify-center">
        <div class="p-4 shadow-md sm:rounded-lg">
            <form class="mx-auto min-w-lg">
                <div class="mb-5">
                    <label
                        for="email"
                        class="block mb-2 text-sm font-medium text-gray"
                        >Category Name</label
                    >
                    <input
                        type="text"
                        class="shadow-sm border border-gray text-gray text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5"
                        placeholder="category name"
                        required
                    />
                </div>

                <div class="mb-5">
                    <select
                        id="countries"
                        class="border border-gray text-gray text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5"
                    >
                        <option selected>Choose a country</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
                <button
                    type="submit"
                    class="text-white bg-accent hover:bg-accent focus:ring-4 focus:outline-none focus:ring-accent font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                >
                    Register new account
                </button>
            </form>
        </div>
    </div>
</template>

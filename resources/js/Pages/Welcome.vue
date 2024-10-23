<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Header from "@/Components/Landing/Header.vue";
import Hero from "@/Components/Landing/Hero.vue";
import Sidebar from "@/Components/Sidebar.vue";
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Landing Page" />
    <div class="font-Poppins">
        <div class="flex flex-nowrap flex-row w-full">
                <Sidebar />
            <div class="flex flex-col">
                <Header />
                <Hero />
            </div>
        </div>
    </div>
</template>

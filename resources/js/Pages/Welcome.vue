<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Header from "@/Components/Landing/Header.vue";
import Hero from "@/Components/Landing/Hero.vue";
import about from "./about.vue";
import Footer from "@/Components/Landing/Footer.vue";
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
                <Header />
                <Hero />
                <about/>
                <Footer/>
 </div>
</template>

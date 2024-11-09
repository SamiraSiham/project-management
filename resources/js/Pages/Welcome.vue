<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Header from "@/Components/Landing/Header.vue";
import Hero from "@/Components/Landing/Hero.vue";
import List from "./List.vue";
// import Sidebar from "@/Components/Sidebar.vue";
import Footer from "@/Components/Landing/Footer.vue";
import { onMounted} from "vue";

const props = defineProps({
    data : {
        type : Object
    },
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

// onMounted(() => {
//     console.log(props.data);
// });
</script>

<template>
    <Head title="Landing Page" />
    <div class="font-Poppins">
        <!-- <div class="flex flex-nowrap flex-row w-full"> -->
        <!-- <Sidebar /> -->
        <div class="flex flex-col max-md:max-w-[100%]">
            <Header :data="props.data" />
            <Hero />
            <List />
            <Footer />
        </div>
        <!-- </div> -->
    </div>
</template>

<script>
export default {
    props: {
        data: Object,
    },
};
</script>

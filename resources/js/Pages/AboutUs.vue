<script setup>
import { Head } from "@inertiajs/vue3";
import Sidebar from "@/Components/Sidebar.vue";
import Header from "@/Components/Landing/Header.vue";
import section1 from "@/Components/About/section1.vue";
import section2 from "@/Components/About/section2.vue";
import section3 from "@/Components/About/section3.vue";
// import section4 from "@/Components/About/section4.vue";
import Footer from "@/Components/Landing/Footer.vue";
const props = defineProps({
    data : Object
})
</script>
<template>
    <Head title="About Us" />
    <div class="font-Poppins">
        <!-- <div class="flex flex-none flex-row w-full">
            <Sidebar /> -->
            <div class="flex flex-col max-md:max-w-[85%]">
                <Header :data="props.data" />
                <section1 />
                <section2 />
                <section3 />
                <!-- <section4 /> -->
                <Footer />
            </div>
        <!-- </div> -->
    </div>
</template>

<script>
export default {
    data() {
        return {
            im1: "/assets/images/im1.png",
        };
    },
};
</script>

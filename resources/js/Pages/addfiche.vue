<script setup>
import Sidebar from "@/Components/Sidebar.vue";
import Header from "@/Components/Landing/Header.vue";
import Add from "@/Components/fiche/add.vue";
import Footer from "@/Components/Landing/Footer.vue";
</script>

<template>
    <div class="font-Poppins">
        <div class="flex flex-nowrap flex-row w-full">
            <Sidebar />
            <div class="flex flex-col w-full">
                <Header />
                <Add />
            </div>
        </div>
        <Footer />
    </div>
</template>

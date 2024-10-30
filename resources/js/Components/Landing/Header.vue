<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import SearchBar from "../SearchBar.vue";

const open = ref(false);
const toggleMenu = () => {
    open.value = !open.value;
};
</script>

<template>
    <header>
        <nav class="bg-white md:py-2 shadow">
            <div class="flex gap-x-3 items-center font-medium justify-around px-2">
                <!-- Logo et bouton du menu -->
                <div class="flex max-md:min-w-full max-md:gap-x-12 z-50 py-5 justify-around md:justify-center md:w-[50%] items-center">
                    <div class="flex items-center gap-x-2">
                        <svg
                            @click="toggleMenu"
                            class="fill-accent w-[45px] h-[45px]"
                            viewBox="0 0 512 512"
                            id="book"
                            fill="currentColor"
                        >
                            <!-- SVG content -->
                        </svg>
                        <span class="md:text-md max-md:text-2xl text-accent">Les Outils De Manager</span>
                    </div>
                    <div class="md:hidden" @click="toggleMenu">
                        <i :class="open ? 'fa-close' : 'fa-bars'" class="fa-solid fa-2xl cursor-pointer"></i>
                    </div>
                </div>

                <!-- Menu desktop -->
                <ul class="md:flex md:justify-around hidden items-center md:gap-x-6 text-md w-full">
                    <li>
                        <Link href="/" class="inline-block hover:decoration-accent hover:text-accent">Home</Link>
                    </li>
                    <li>
                        <Link href="#about" class="inline-block hover:decoration-accent hover:text-accent">A propos</Link>
                    </li>
                    <li>
                        <Link :href="route('contact')" class="inline-block hover:decoration-accent hover:text-accent">Contact</Link>
                    </li>
                    <li><SearchBar /></li>
                </ul>
                
                <div class="md:block hidden">
                    <Link :href="route('login')" class="text-white bg-accent hover:bg-white border-2 hover:border-accent hover:text-accent rounded-full px-4 py-2">
                        Login
                    </Link>
                </div>

                <!-- Menu mobile -->
                <ul
                    class="md:hidden fixed inset-0 bg-white flex flex-col items-center py-24 gap-y-2 transition-transform duration-500"
                    :class="open ? 'translate-x-0' : '-translate-x-full'"
                    style="z-index: 100;"
                >
                    <!-- Bouton de fermeture -->
                    <div class="absolute top-5 right-5">
                        <button @click="toggleMenu" class="text-accent text-3xl">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>

                    <!-- Liens du menu mobile -->
                    <li class="w-full flex justify-center">
                        <Link href="/" class="w-full py-7 px-4 flex items-center gap-x-4 text-lg hover:decoration-accent hover:text-accent">
                            <i class="fa-solid fa-house fa-lg"></i> Home
                        </Link>
                    </li>
                    <li class="w-full flex justify-center">
                        <Link :href="route('about')" class="w-full py-7 px-4 flex items-center gap-x-4 text-lg hover:decoration-accent hover:text-accent">
                            <i class="fa-regular fa-address-card fa-lg"></i> A propos
                        </Link>
                    </li>
                    <li class="w-full flex justify-center">
                        <Link :href="route('contact')" class="w-full py-7 px-4 flex items-center gap-x-4 text-lg hover:decoration-accent hover:text-accent">
                            <i class="fa-solid fa-mobile-screen-button fa-lg"></i> Contact
                        </Link>
                    </li>
                    <li class="flex w-full items-center">
                        <SearchBar />
                    </li>
                    <div class="py-3 w-3/4 flex items-center justify-center">
                        <Link :href="route('login')" class="text-white text-center bg-accent rounded-full px-4 py-2 w-1/2">
                            Login
                        </Link>
                    </div>
                </ul>
            </div>
        </nav>
    </header>
</template>

<style scoped>
.z-50 {
    z-index: 50;
}
</style>

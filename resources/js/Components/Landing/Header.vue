<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
// import NavLinks from "./NavLinks.vue";
// import NavLinks from "./Nav-Links.vue";
import FichesPratiques from "../Navbar/FichesPratiques.vue";
const open = ref(false);
const toggleMenu = () => {
    open.value = !open.value;
    return open.value;
};
</script>
<template>
    <header>
        <nav class="bg-white py-5 shadow-xl">
            <div class="flex items-center font-medium justify-around px-10">
                <div class="flex z-50 p-5 justify-between w-full items-center">
                    <div class="flex items-center gap-x-2">
                        <svg
                        @click="toggleSidebar"
                        class="fill-accent w-[50px] h-[50px]"
                        viewBox="0 0 512 512"
                        id="book"
                        fill="currentColor"
                    >
                        <path
                            d="M301.922 166H341.8a8 8 0 0 0 0-16H301.922a8 8 0 0 0 0 16zM301.922 215h94.432a8 8 0 1 0 0-16H301.922a8 8 0 0 0 0 16zM301.922 264h94.432a8 8 0 1 0 0-16H301.922a8 8 0 0 0 0 16zM301.922 313h94.432a8 8 0 1 0 0-16H301.922a8 8 0 0 0 0 16zM115.646 166h39.875a8 8 0 0 0 0-16H115.646a8 8 0 0 0 0 16zM115.646 215h94.432a8 8 0 0 0 0-16H115.646a8 8 0 0 0 0 16zM115.646 264h94.432a8 8 0 0 0 0-16H115.646a8 8 0 0 0 0 16zM115.646 313h94.432a8 8 0 0 0 0-16H115.646a8 8 0 0 0 0 16z"
                        ></path>
                        <path
                            d="M483.533,130H451v-7.615A39.328,39.328,0,0,0,411.908,83H310.49A39.172,39.172,0,0,0,297.1,85.463L263.92,97.582a23.221,23.221,0,0,1-15.84.026L214.9,85.45A39.148,39.148,0,0,0,201.51,83H100.092A39.328,39.328,0,0,0,61,122.385V130H28.467A8.606,8.606,0,0,0,20,138.226V420.791A8.592,8.592,0,0,0,28.467,429H483.533A8.592,8.592,0,0,0,492,420.791V138.226A8.606,8.606,0,0,0,483.533,130ZM302.569,100.5A23.224,23.224,0,0,1,310.49,99H411.908A23.31,23.31,0,0,1,435,122.385V339.322C435,352.1,424.688,362,411.908,362H310.49a39.332,39.332,0,0,0-13.388,2.608L264,376.9V114.2a39.48,39.48,0,0,0,5.389-1.576ZM77,122.385A23.31,23.31,0,0,1,100.092,99H201.51a23.214,23.214,0,0,1,7.92,1.5l33.181,12.119A39.48,39.48,0,0,0,248,114.2V376.9l-33.1-12.287A39.321,39.321,0,0,0,201.51,362H100.092C87.312,362,77,352.1,77,339.322ZM476,413H36V146H61V339.322A38.726,38.726,0,0,0,100.092,378H201.51a23.407,23.407,0,0,1,7.92,1.644l33.182,12.192a39.01,39.01,0,0,0,26.777.093l33.18-12.3A23.375,23.375,0,0,1,310.49,378H411.908A38.726,38.726,0,0,0,451,339.322V146h25Z"
                        ></path>
                    </svg>
                    <span class="text-xl text-accent">Les Outils De Manager</span>
                    </div>
                    <div class="md:hidden" @click="toggleMenu">
                        <i
                            :class="open ? 'fa-bars' : 'fa-close'"
                            class="fa-solid fa-2xl"
                        ></i>
                    </div>
                </div>
                <ul class="md:flex hidden items-center gap-4 text-md w-full">
                    <li>
                        <Link
                            href="/"
                            class="inline-block hover:decoration-accent hover:text-accent"
                        >
                            Home
                        </Link>
                    </li>
                    <li>
                        <Link
                            href="/"
                            class="inline-block hover:decoration-accent hover:text-accent"
                        >
                            A propos
                        </Link>
                    </li>
                    <li>
                        <Link
                            href="/"
                            class="inline-block hover:decoration-accent hover:text-accent"
                        >
                            Contact
                        </Link>
                    </li>
                    <!-- <FichesPratiques /> -->
                </ul>
                <div class="md:block hidden">
                    <button class="text-white bg-accent rounded-full px-3 py-1">
                        Login
                    </button>
                </div>
                <!-- mobile menu -->
                <ul
                    class="md:hidden bg-white absolute w-full min-h-screen bottom-0 py-24 flex flex-col items-center duration-500"
                    :class="open ? 'left-[-100%]' : 'left-0'"
                >
                    <li class="w-full flex justify-center">
                        <Link
                            href="/"
                            class="w-full py-7 px-4 flex items-center gap-x-4 text-lg hover:decoration-accent hover:text-accent"
                        >
                            <i class="fa-solid fa-house fa-lg"></i>
                            Home
                        </Link>
                    </li>
                    <li class="w-full flex justify-center">
                        <Link
                            href="/"
                            class="w-full py-7 px-4 flex items-center gap-x-4 text-lg hover:decoration-accent hover:text-accent"
                        >
                            <i class="fa-regular fa-address-card fa-lg"></i>
                            A propos
                        </Link>
                    </li>
                    <li class="w-full flex justify-center">
                        <Link
                            href="/"
                            class="w-full py-7 px-4 flex items-center gap-x-4 text-lg hover:decoration-accent hover:text-accent"
                        >
                            <i
                                class="fa-solid fa-mobile-screen-button fa-lg"
                            ></i>
                            Contact
                        </Link>
                    </li>
                    <!-- <FichesPratiques /> -->
                    <div class="py-3 w-3/4 flex items-center justify-center">
                        <button
                            class="text-white bg-accent rounded-full px-3 py-2 w-1/2"
                        >
                            Login
                        </button>
                    </div>
                </ul>
            </div>
        </nav>
    </header>
</template>

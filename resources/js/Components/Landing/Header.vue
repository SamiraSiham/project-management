<script setup>
import { ref } from "vue";
const open = ref(false);
const toggleMenu = () => {
    open.value = !open.value;
    return open.value;
};
</script>
<template>
    <header>
        <nav
            class="flex items-center py-4 max-md:pe-12 max-md:ps-5 md:justify-center max-md:justify-around max-md:gap-x-2"
            :class="open ? 'flex-col' : 'flex-row'"
        >
            <div :class="open ? 'py-1 flex w-full' : 'py-1 flex items-center gap-x-2'">
                <svg
                    class="fill-primary h-[60px] w-[60px] max-md:w-[40px] max-md:h-[40px]"
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
                <p class="text-2xl max-md:text-lg text-primary font-semibold">
                    Les Outils De Manager
                </p>
            </div>
            <ul
                :class="
                    open
                        ? 'sm:flex flex-1 justify-end items-center gap-12 text-primary uppercase text-xs'
                        : 'hidden sm:flex flex-1 justify-end items-center gap-12 text-primary uppercase text-xs'
                "
            >
                <li
                    class="text-black hover:text-primary hover:underline transition transition-200"
                >
                    <a href="#"> Features </a>
                </li>
                <li
                    class="text-black hover:text-primary hover:underline transition transition-200"
                >
                    <a href="#"> Pricing </a>
                </li>
                <li
                    class="text-black hover:text-primary hover:underline transition transition-200"
                >
                    <a href="#"> Contact </a>
                </li>
                <button
                    class="hover:bg-white hover:text-primary border-2 border-primary bg-primary text-white rounded-md px-5 py-2 uppercase text-md"
                    type="button"
                >
                    Login
                </button>
            </ul>
            <div class="flex sm:hidden flex-1 justify-end">
                <i
                    :class="open ? 'fa-close' : 'fa-bars'"
                    class="fa-solid text-4xl text-primary"
                    @click="toggleMenu"
                ></i>
            </div>
        </nav>
    </header>
</template>

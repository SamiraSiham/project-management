<script setup>
import { Link } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
// import SearchBar from "../SearchBar.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";

const open = ref(false);
const openCategory = ref(false);
const selectedItem = ref(null)
const toggleMenu = () => {
    open.value = !open.value;
};
const props = defineProps({
    data: Object
});

</script>

<template>
    <header>
        <nav class="bg-white md:py-2 shadow">
            <div class="flex gap-x-3 items-center font-medium justify-around px-1">
                <!-- Logo et bouton du menu -->
                <div class="flex max-md:min-w-full max-md:gap-x-12 z-50 py-5 justify-around md:justify-center md:w-[30%] items-center">
                    <div class="flex items-center gap-x-2">
                        <svg
                            @click="toggleMenu"
                            class="fill-accent w-[45px] h-[45px]"
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
                        <span class="md:text-md max-md:text-2xl text-accent">Les Outils De Manager</span>
                    </div>
                    <div class="md:hidden" @click="toggleMenu">
                        <i :class="open ? 'fa-close' : 'fa-bars'" class="fa-solid fa-2xl cursor-pointer"></i>
                    </div>
                </div>

                <!-- Menu desktop -->
                <ul class="md:flex md:justify-around hidden items-center md:gap-x-3 text-md w-full">
                    <li>
                        <Link href="/" class="inline-block hover:decoration-accent hover:text-accent">Home</Link>
                    </li>
                    <li>
                        <Link :href="route('about')" class="inline-block hover:decoration-accent hover:text-accent">About Us</Link>
                    </li>
                    <li>
                        <Link
                            :href="route('contact')"
                            class="inline-block hover:decoration-accent hover:text-accent"
                            >Contact Us</Link
                        >
                    </li>
                    <li class="relative" v-for="i in props.data" :key="i.id">
                        <Dropdown align="right" width="48">
                            <template #trigger>
                                <span class="inline-flex rounded-md">
                                    <button
                                        type="button"
                                        class="inline-flex items-center rounded-md border border-transparent bg-white py-2 font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none"
                                    >
                                        <!-- Courses -->
                                        {{ i.genre }}

                                        <svg
                                            class="-me-0.5 ms-2 h-4 w-4"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </button>
                                </span>
                            </template>

                            <template #content>
                                <DropdownLink
                                    class="text-center"
                                    :href="route('affichage.show', i.id)"
                                >
                                    {{ i.genre }}
                                </DropdownLink>
                                <hr />
                                <DropdownLink
                                    v-for="j in i.categories"
                                    :key="j.id"
                                    :href="route('affichage.edit', j.id)"
                                >
                                    {{ j.nom_categorie }}
                                </DropdownLink>
                            </template>
                        </Dropdown>
                    </li>
                    <!-- <li><SearchBar /></li> -->
                </ul>
                
                <div class="md:block hidden">
                    <Link :href="route('login')" class="text-white bg-accent hover:bg-white border-2 hover:border-accent hover:text-accent rounded-full px-4 py-2">
                        Login
                    </Link>
                </div>

                <!-- Menu mobile -->
                <ul
                    class="md:hidden fixed inset-0 bg-white flex flex-col items-center py-2 gap-y-0 transition-transform duration-500 min-h-screen overflow-y-auto"
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
                        <Link
                            href="/"
                            class="w-full py-5 px-4 flex items-center gap-x-4 text-lg hover:decoration-accent hover:text-accent"
                        >
                            <i class="fa-solid fa-house fa-lg"></i> Home
                        </Link>
                    </li>
                    <li class="w-full flex justify-center">
                        <Link
                            :href="route('about')"
                            class="w-full py-5 px-4 flex items-center gap-x-4 text-lg hover:decoration-accent hover:text-accent"
                        >
                            <i class="fa-regular fa-address-card fa-lg"></i> About Us
                        </Link>
                    </li>
                    <li class="w-full flex justify-center">
                        <Link
                            :href="route('contact')"
                            class="w-full py-5 px-4 flex items-center gap-x-4 text-lg hover:decoration-accent hover:text-accent"
                        >
                            <i
                                class="fa-solid fa-mobile-screen-button fa-lg"
                            ></i>
                            Contact
                        </Link>
                    </li>
                    <li class="relative py-5 w-full px-4 text-center" v-for="i in props.data" :key="i.id">
                        <Dropdown align="right" width="48">
                            <template #trigger>
                                <span class="inline-flex rounded-md">
                                    <button
                                        type="button"
                                        class="inline-flex items-center rounded-md border border-transparent bg-white py-2 font-medium leading-4 text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 focus:outline-none"
                                    >
                                        <!-- Courses -->
                                        {{ i.genre }}

                                        <svg
                                            class="-me-0.5 ms-2 h-4 w-4"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </button>
                                </span>
                            </template>

                            <template #content>
                                <DropdownLink
                                    class="text-center"
                                    :href="route('affichage.show', i.id)"
                                >
                                    {{ i.genre }}
                                </DropdownLink>
                                <hr />
                                <DropdownLink
                                    v-for="j in i.categories"
                                    :key="j.id"
                                    :href="route('affichage.edit', j.id)"
                                >
                                    {{ j.nom_categorie }}
                                </DropdownLink>
                            </template>
                        </Dropdown>
                    </li>
                    <!-- <li class="flex w-full items-center">
                        <SearchBar />
                    </li> -->
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

<script>
import submenu from '@/Components/Landing/submenu.vue';
import mobilev from '@/Components/Landing/mobilev.vue';

export default {
  components: {
    submenu,
    mobilev
  },
  data() {
    return {
      isDropdownOpen: false, // Dropdown state for mobile and desktop
      isMobileNavOpen: false, // Mobile navigation state
      openSubMenus: {
        courses: false,
        tools: false,
        research: false,
        about: false,
        security: false,
        help: false,
      },
    };
  },
  methods: {
    // Toggle dropdown menu
    toggleDropdown() {
      this.isDropdownOpen = !this.isDropdownOpen;
    },
    // Toggle mobile navigation
    toggleMobileNav() {
      this.isMobileNavOpen = !this.isMobileNavOpen;
    },
    // Toggle individual submenu
    toggleSubMenu(menu) {
      this.openSubMenus[menu] = !this.openSubMenus[menu];
    },
  },
};
</script>

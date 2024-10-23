<script setup>
import doubleRightArrow from "./icons/double-right-arrow.vue";
import doubleLeftArrow from "./icons/double-left-arrow.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import DoubleLeftArrow from "./icons/double-left-arrow.vue";
let open = ref(false);
let toggleProjectbtn = ref(false);
let toggleManagementbtn = ref(false);
const toggleSidebar = () => {
    open.value = !open.value;
};
const toggleProject = () => {
    toggleProjectbtn.value = !toggleProjectbtn.value;
};
const toggleManagement = () => {
    toggleManagementbtn.value = !toggleManagementbtn.value;
};
</script>
<template>
    <div class="min-h-screen p-3 bg-white shadow-lg" :class="open ? 'w-[750px] rounded-none' : 'w-20 rounded-full'">
        <div class="px-2">
            <!-- <i
                class="fa-solid cursor-pointer text-3xl text-black"
                :class="open ? 'fa-arrow-left-long' : 'fa-arrow-right-long'"
                @click="toggleSidebar"
            ></i> -->
            <div
                class="flex gap-x-2 items-center"
                :class="
                    open ? 'py-1 w-full' : 'py-1'
                "
            >
                <div v-if="open" class="w-10 h-10" @click="toggleSidebar">
                    <doubleLeftArrow/>
                </div>
                <div v-if="!open" class="w-28 h-28" @click="toggleSidebar">
                    <doubleRightArrow/>
                </div>
                <!-- <svg
                    @click="toggleSidebar"
                    class="fill-accent text-2xl cursor-pointer"
                    :class="open ? 'w-[50px] h-[50px]' : 'w-[80px] h-[80px]'"
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
                </svg> -->
                <p class="text-md max-md:text-lg text-accent font-medium" :class="open ? '' : 'hidden'">
                    Les Outils De Manager
                </p>
            </div>

            <div :class="open ? '' : 'hidden'">
                <h2 class="text-xl mt-8 text-center text-accent">
                    Vous pouvez rechercher des outils pour:
                </h2>
                <div class="flex flex-col my-8 items-center justify-center">
                    <div
                        class="flex justify-between w-full items-center gap-x-3"
                    >
                        <h2 class="text-lg text-orange">Gestion de projet</h2>
                        <div
                            class="rounded-full w-8 h-8 text-center flex items-center justify-center bg-accent text-white text-orange text-md"
                        >
                            <i
                                :class="
                                    toggleProjectbtn ? 'fa-minus' : 'fa-plus'
                                "
                                class="fa-solid cursor-pointer"
                                @click="toggleProject"
                            ></i>
                        </div>
                    </div>
                    <div
                        :class="toggleProjectbtn ? '' : 'hidden'"
                        class="py-2 transition ease-in-out transition-300"
                    >
                        <li class="list-none py-2">
                            <a href="" class="hover:underline"
                                >Gérer un changement</a
                            >
                        </li>
                        <li class="list-none py-2">
                            <a href="" class="hover:underline"
                                >Résoudre un problème</a
                            >
                        </li>
                        <li class="list-none py-2">
                            <a href="" class="hover:underline"
                                >Conduire un projet</a
                            >
                        </li>
                    </div>
                </div>
                <div class="flex flex-col my-8 items-center justify-center">
                    <div
                        class="flex justify-between w-full items-center gap-x-3"
                    >
                        <h2 class="text-lg">Management</h2>
                        <div
                            class="rounded-full w-8 h-8 text-center flex items-center justify-center bg-accent text-white text-md"
                        >
                            <i
                                :class="
                                    toggleManagementbtn ? 'fa-minus' : 'fa-plus'
                                "
                                class="fa-solid cursor-pointer"
                                @click="toggleManagement"
                            ></i>
                        </div>
                    </div>
                    <div
                        :class="toggleManagementbtn ? '' : 'hidden'"
                        class="py-2 transition ease-in-out transition-300"
                    >
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Réaliser un entretien annuel</a
                            >
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Manager pour la premiere fois</a
                            >
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Prendre une decision</a
                            >
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Motiver ses collaborateurs</a
                            >
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Adopter un style de management adapté</a
                            >
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Fixer des objectifs</a
                            >
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Manager au quotidien</a
                            >
                        </li>
                    </div>
                </div>
                <div class="flex flex-col my-8 items-center justify-center">
                    <div
                        class="flex justify-between w-full items-center gap-x-3"
                    >
                        <h2 class="text-lg">Efficacité Personnelle</h2>
                        <div
                            class="rounded-full w-8 h-8 text-center flex items-center justify-center bg-accent text-white text-md"
                        >
                            <i
                                :class="
                                    toggleManagementbtn ? 'fa-minus' : 'fa-plus'
                                "
                                class="fa-solid cursor-pointer"
                                @click="toggleManagement"
                            ></i>
                        </div>
                    </div>
                    <div
                        :class="toggleManagementbtn ? '' : 'hidden'"
                        class="py-2 transition ease-in-out transition-300"
                    >
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Savoir communiquer</a
                            >
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline">
                                Présenter un dossier
                            </a>
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Gérer son temps</a
                            >
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Développer son potentiel</a
                            >
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Améliorer son efficacité</a
                            >
                        </li>
                    </div>
                </div>
                <div class="flex flex-col my-8 items-center justify-center">
                    <div
                        class="flex justify-between w-full items-center gap-x-3"
                    >
                        <h2 class="text-lg">Développement</h2>
                        <div
                            class="rounded-full w-8 h-8 text-center flex items-center justify-center bg-accent text-white text-md"
                        >
                            <i
                                :class="
                                    toggleManagementbtn ? 'fa-minus' : 'fa-plus'
                                "
                                class="fa-solid cursor-pointer"
                                @click="toggleManagement"
                            ></i>
                        </div>
                    </div>
                    <div
                        :class="toggleManagementbtn ? '' : 'hidden'"
                        class="py-2 transition ease-in-out transition-300"
                    >
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Innovation</a
                            >
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline">
                                Vente
                            </a>
                        </li>
                        <li class="list-none py-2 ms-6">
                            <a href="" class="hover:underline"
                                >Marketing</a
                            >
                        </li>
                    </div>
                </div>
                <div class="flex items-center my-8 w-full">
                        <Link :href="route('/')" class="text-lg">Gestion</Link>                    
                </div>
                <div class="flex items-center my-8 w-full">
                        <Link :href="route('/')" class="text-lg">Teletravail</Link>                    
                </div>
                <div class="flex items-center my-8 w-full">
                        <Link :href="route('/')" class="text-lg">Packs Economiques</Link>                    
                </div>
                <div class="flex items-center my-8 w-full">
                        <Link :href="route('/')" class="text-lg">GRH</Link>                    
                </div>
                <div class="flex items-center my-8 w-full">
                        <Link :href="route('/')" class="text-lg">Voir toutes les fiches</Link>                    
                </div>
            </div>
        </div>
    </div>
</template>

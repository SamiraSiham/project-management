<script setup>
import doubleRightArrow from "./icons/double-right-arrow.vue";
import doubleLeftArrow from "./icons/double-left-arrow.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import DoubleLeftArrow from "./icons/double-left-arrow.vue";
let open = ref(false);
let toggleProjectbtn = ref(false);
let toggleManagementbtn = ref(false);
let toggleEfficacitebtn = ref(false);
let toggleDeveloppementbtn = ref(false);
const toggleSidebar = () => {
    open.value = !open.value;
};
const toggleProject = () => {
    toggleProjectbtn.value = !toggleProjectbtn.value;
};
const toggleManagement = () => {
    toggleManagementbtn.value = !toggleManagementbtn.value;
};
const toggleEfficacite = () => {
    toggleEfficacitebtn.value  = !toggleEfficacitebtn.value;
}
const toggleDeveloppement = () => {
    toggleDeveloppementbtn.value  = !toggleDeveloppementbtn.value;
}
</script>
<template>
    <div class="min-h-screen p-3 bg-white shadow-lg" :class="open ? 'w-[750px] rounded-none' : 'w-20'">
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
                <div v-if="open" class="w-10 h-10 cursor-pointer" @click="toggleSidebar">
                    <doubleLeftArrow/>
                </div>
                <div v-if="!open" class="w-28 h-28 cursor-pointer" @click="toggleSidebar">
                    <doubleRightArrow/>
                </div>
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
                                toggleEfficacitebtn ? 'fa-minus' : 'fa-plus'
                                "
                                class="fa-solid cursor-pointer"
                                @click="toggleEfficacite"
                            ></i>
                        </div>
                    </div>
                    <div
                        :class="toggleEfficacitebtn ? '' : 'hidden'"
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
                                    toggleDeveloppementbtn ? 'fa-minus' : 'fa-plus'
                                "
                                class="fa-solid cursor-pointer"
                                @click="toggleDeveloppement"
                            ></i>
                        </div>
                    </div>
                    <div
                        :class="toggleDeveloppementbtn ? '' : 'hidden'"
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

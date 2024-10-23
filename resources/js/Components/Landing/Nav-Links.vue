<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
let openFiches = ref(true);
const toggleBtn = () => {
    openFiches.value = !openFiches.value;
};
const fichesPratiques = [
    {
        id: 1,
        Head: "Gestion de projet",
        subMenu: true,
        subLinks: [
            { id: 1, name: "Gérer un changement", url: "/" },
            { id: 2, name: "Résoudre un problème", url: "/" },
            {
                id: 3,
                name: "Conduire une réunion de travail",
                url: "/",
            },
            { id: 4, name: "Conduire un projet", url: "/" },
        ],
    },
    {
        id: 2,
        Head: "Management",
        subMenu: true,
        subLinks: [
            { id: 1, name: "Réaliser un entretien annuel", url: "/" },
            { id: 2, name: "Manager pour la première fois", url: "/" },
            { id: 3, name: "Prendre une décision", url: "/" },
            { id: 4, name: "Motiver ses collaborateurs", url: "/" },
            {
                id: 5,
                name: "Adopter un style de management adapté",
                url: "/",
            },
            { id: 6, name: "Fixer des objectifs", url: "/" },
            { id: 7, name: "Manager au quotidien", url: "/" },
        ],
    },
    {
        id: 3,
        Head: "Efficacité Personnelle",
        subMenu: true,
        subLinks: [
            { id: 1, name: "Savoir communiquer", url: "/" },
            { id: 2, name: "Présenter un dossier", url: "/" },
            { id: 3, name: "Gérer son temps", url: "/" },
            { id: 4, name: "Développer son potentiel", url: "/" },
            { id: 5, name: "Améliorer son efficacité", url: "/" },
        ],
    },
    {
        id: 4,
        Head: "Développement",
        subMenu: true,
        subLinks: [
            { id: 1, name: "Innovation", url: "/" },
            { id: 2, name: "Vente", url: "/" },
            { id: 3, name: "Marketing", url: "/" },
        ],
    },
    { id: 5, Head: "Gestion", subMenu: false, url: "/" },
    { id: 6, Head: "GRH", subMenu: false, url: "/" },
    { id: 7, Head: "Packs Economiques", subMenu: false, url: "/" },
    { id: 8, Head: "Voir toutes les fiches", subMenu: false, url: "/" },
];
</script>

<template>
    <div>
        <div class="text-left px-3 md:cursor-pointer">
            <h1 class="text-left py-7">
                Fiches Pratiques
            </h1>
            <div
                class="flex gap-x-3 bg-white shadow-xl px-5 rounded-lg absolute"
            >
                <div v-for="i in fichesPratiques" :key="i.id">
                    <div class="">
                        <h2 class="text-lg font-semibold flex">
                            {{ i.Head }}
                        </h2>
                        <div v-if="i.subMenu">
                            <ul>
                                <li
                                    class="text-sm text-gray my-2.5"
                                    v-for="sublink in i.subLinks"
                                    :key="sublink.id"
                                >
                                    <Link
                                        :href="route(`${sublink.url}`)"
                                        class="hover:text-accent"
                                        >{{ sublink.name }}</Link
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

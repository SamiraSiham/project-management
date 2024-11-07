<script setup>
import { Head, Link, useForm, router } from "@inertiajs/vue3";
import { defineProps, onMounted } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const form = useForm({
    genre: "",
});

</script>
<template>
    <Head title="Create Genre" />
    <AuthenticatedLayout>
        <div class="py-10">
            <h1 class="text-center text-3xl text-accent">Create a Genre</h1>
        </div>
        <div class="pt-4">
            <form class="max-w-sm mx-auto" @submit.prevent="form.post(route('genres.store'))">
                <div class="mb-3">
                    <label
                        for="password"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Nom de Genre</label
                    >
                    <input
                        type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5"
                        required
                        v-model="form.nom_categorie"
                    />
                </div>
                <div class="flex gap-x-2">
                    <button
                        type="submit"
                        class="text-white bg-accent hover:bg-white hover:text-accent border border-accent focus:ring-4 focus:outline-none focus:ring-accent font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                    >
                        Submit
                    </button>
                    <Link :href="route('categories.index')" class="text-white bg-blue-500 hover:bg-white hover:text-blue-500 border border-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Annuler</Link>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>

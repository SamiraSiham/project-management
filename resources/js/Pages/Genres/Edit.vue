<script setup>
import { Head, Link, useForm, router } from "@inertiajs/vue3";
import { defineProps, onMounted } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
const props = defineProps({
    genre: Object,
});
const form = useForm({
    genre: props.genre.genre,
});
onMounted(() => {
    console.log(props.genre);
});
</script>
<template>
    <Head title="Create Category" />
    <AuthenticatedLayout>
        <div class="py-10">
            <h1 class="text-center text-3xl text-accent">Edit a Genre</h1>
        </div>
        <div class="pt-8">
            <form
                class="max-w-sm mx-auto"
                @submit.prevent="
                    form.put(route('genres.update', props.genre.id))
                "
            >
                <div class="mb-5">
                    <label
                        for="password"
                        class="block mb-2 text-sm font-medium text-gray-900"
                        >Genre</label
                    >
                    <input
                        type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5"
                        required
                        v-model="form.genre"
                    />
                    <InputError class="mt-2" :message="form.errors.genre" />
                </div>
                <div class="flex gap-x-2">
                    <button
                        type="submit"
                        class="text-white bg-accent hover:bg-white hover:text-accent border border-accent focus:outline-none focus:ring-accent font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                    >
                        Submit
                    </button>

                    <Link
                        :href="route('genres.index')"
                        class="text-white bg-blue-500 hover:bg-white hover:text-blue-500 border border-blue-500 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                        >Cancel</Link
                    >
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>

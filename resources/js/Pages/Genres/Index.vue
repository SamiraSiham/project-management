<script setup>
import { Head, Link, router, useForm } from "@inertiajs/vue3";
import { onMounted } from "vue";
import { defineProps } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
const props = defineProps({
    data: Object,
});
onMounted(() => {
    console.log(props.data);
});
function addGenre(){
    form.post(route('genres.store'));
    form.genre = "";
}
function deleteGenre(id) {
    if (confirm("Are you sure you want to delete this genre?")) {
        router.delete(`/genres/${id}`, {
            onFinish: () => {},
        });
    }
}
const form = useForm({
    genre: "",
});
</script>

<template>
    <Head title="Genres" />
    <AuthenticatedLayout>
        <div class="flex max-md:flex-col md:gap-x-3">
            <div class="p-4 bg-white w-1/2">
                <div
                    class="relative overflow-x-auto flex flex-col items-center shadow-md sm:rounded-lg py-3"
                >
                    <div class="flex w-full justify-center items-center">
                        <caption
                            class="p-5 text-3xl font-semibold text-center bg-white text-accent"
                        >
                            Genres
                        </caption>
                    </div>
                    <table class="w-[90%] text-md text-left mb-10">
                        <thead class="text-md uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">Genre</th>
                                <th scope="col" class="px-3 py-3">
                                    <span class="">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr
                                class="bg-white border-b"
                                v-for="i in data"
                                :key="i.id"
                            >
                                <td class="px-6 py-4">{{ i.genre }}</td>
                                <td
                                    class="px-3 py-4 text-right w-[90%] flex justify-between"
                                >
                                    <Link
                                        :href="route('genres.edit', i.id)"
                                        class="font-medium text-blue-600 hover:underline"
                                    >
                                        Edit
                                    </Link>
                                    <span
                                        @click="deleteGenre(i.id)"
                                        class="font-medium text-red-600 hover:underline cursor-pointer"
                                    >
                                        Delete
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="p-4 bg-white w-1/2">
                <div class="py-10">
                    <h1 class="text-center text-3xl text-accent font-semibold">
                        Create a Genre
                    </h1>
                </div>
                <div class="">
                    <form
                        class="mx-auto shadow-md sm:rounded-lg px-4 py-10"
                        @submit.prevent="addGenre"
                    >
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
                                v-model="form.genre"
                            />
                            <InputError class="mt-2" :message="form.errors.genre" />
                        </div>
                        <div class="flex gap-x-2">
                            <button
                                type="submit"
                                class="text-white bg-accent hover:bg-white hover:text-accent border border-accent focus:ring-4 focus:outline-none focus:ring-accent font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                            >
                                Submit
                            </button>
                            <Link
                                :href="route('categories.index')"
                                class="text-white bg-blue-500 hover:bg-white hover:text-blue-500 border border-blue-500 focus:ring-4 focus:outline-none focus:ring-blue-500 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center"
                                >Annuler</Link
                            >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

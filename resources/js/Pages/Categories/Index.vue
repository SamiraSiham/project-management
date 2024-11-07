<script setup>
import { Head, Link, router } from "@inertiajs/vue3";
import { onMounted } from "vue";
import { defineProps } from "vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
const props = defineProps({
    data: Object,
});
// onMounted(() => {
//     console.log(props.data);
// });
function deleteCategorie(id) {
    if (confirm("Are you sure you want to delete this category?")) {
        router.delete(`/categories/${id}`, {
            onFinish: () => {},
        });
    }
}
</script>

<template>
    <Head title="Categories" />
    <AuthenticatedLayout>
        <div class="p-4 bg-white">
            <div
                class="relative overflow-x-auto flex flex-col items-center shadow-md sm:rounded-lg"
            >
                <div class="flex w-full justify-between items-center px-20">
                    <caption
                        class="p-5 text-lg font-semibold text-left bg-white"
                    >
                        Categories
                    </caption>
                    <Link
                        class="px-3 py-2 bg-accent text-white rounded-lg border-2 hover:border-accent hover:bg-white hover:text-accent"
                        :href="route('categories.create')"
                    >
                        Ajouter <i class="fa-solid fa-plus"></i>
                    </Link>
                </div>
                <table class="w-[90%] text-md text-left">
                    <thead class="text-md uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nom Categorie</th>
                            <th scope="col" class="px-6 py-3">Genre</th>
                            <th scope="col" class="px-6 py-3">
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
                            <td class="px-6 py-4">{{ i.nom_categorie }}</td>
                            <td class="px-6 py-4">{{ i.genre.genre }}</td>
                            <td
                                class="px-6 py-4 text-right flex justify-between"
                            >
                                <Link
                                    :href="route('categories.edit', i.id)"
                                    class="font-medium text-blue-600 hover:underline"
                                >
                                    Edit
                                </Link>
                                <span
                                    @click="deleteCategorie(i.id)"
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
    </AuthenticatedLayout>
</template>

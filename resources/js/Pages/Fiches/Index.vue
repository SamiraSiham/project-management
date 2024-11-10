<script setup>
import { defineProps, onMounted } from "vue";
import { Head, Link, router } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
const data = defineProps({
    data: Object,
});
function deleteFiche(id) {
    if (confirm("Are you sure you want to delete this sheet?")) {
        router.delete(`/fiches/${id}`, {
            onFinish: () => {},
        });
    }
}
</script>
<template>
    <Head title="Fiches" />
    <AuthenticatedLayout>
        <div class="font-Poppins">
            <div class="flex flex-nowrap flex-row w-full">
                <!-- <Sidebar /> -->
                <div class="flex flex-col w-full">
                    <!-- <Header /> -->
                    <!-- Content -->
                    <div
                        class="relative overflow-x-auto shadow-md sm:rounded-lg p-5"
                    >
                        <div
                            class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4"
                        >
                            <!-- Search -->
                            <div class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 flex items-center ps-3 pointer-events-none"
                                >
                                    <svg
                                        class="w-5 h-5 text-gray-500"
                                        aria-hidden="true"
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </div>
                                <input
                                    type="text"
                                    id="table-search"
                                    class="block p-2 ps-10 text-sm border rounded-lg w-80 focus:ring-accent focus:border-accent"
                                    placeholder="Search for items"
                                />
                            </div>
                            <!-- Add Button -->
                            <div>
                                <Link
                                    v-if="$hasPermission('Create fiches')"
                                    :href="route('fiches.create')"
                                    class="rounded-md bg-accent border text-white hover:bg-white hover:text-accent hover:border-accent px-4 py-1 text-lg"
                                >
                                    Add <i class="fa-solid fa-plus"></i>
                                </Link>
                            </div>
                        </div>
                        <table class="w-full text-sm text-left text-gray">
                            <thead class="text-xs uppercase">
                                <tr>
                                    <!-- <th scope="col" class="p-4">
                                    <div class="flex items-center">
                                        <input
                                            id="checkbox-all-search"
                                            type="checkbox"
                                            class="w-4 h-4 text-accent bg-gray-100 border-gray-300 rounded focus:ring-accent focus:ring-2"
                                        />
                                    </div>
                                </th> -->
                                    <th scope="col" class="px-6 py-3">Title</th>
                                    <th scope="col" class="px-6 py-3">
                                        Author
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">Price</th>
                                    <th scope="col" class="px-6 py-3">
                                        Publication date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b"
                                    v-for="i in data.data"
                                    :key="i.id"
                                >
                                    <!-- <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input
                                            id="checkbox-table-search-1"
                                            type="checkbox"
                                            class="w-4 h-4 text-accent rounded focus:ring-accent focus:ring-2"
                                        />
                                        
                                    </div>
                                </td> -->
                                    <th
                                        scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                                    >
                                        {{ i.title }}
                                    </th>
                                    <td class="px-6 py-4">{{ i.author }}</td>
                                    <td class="px-6 py-4">
                                        {{ i.category.nom_categorie }}
                                    </td>
                                    <td class="px-6 py-4">{{ i.price }}</td>
                                    <td class="px-6 py-4">
                                        {{ i.date_publication }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <Link
                                            v-if="
                                                $hasPermission('Update fiches')
                                            "
                                            :href="route('fiches.edit', i.id)"
                                            class="font-medium text-blue-600 hover:underline"
                                            >Edit</Link
                                        >
                                        <a
                                            v-if="$hasPermission('Read fiches')"
                                            :href="route('fiches.show', i.id)"
                                            class="font-medium text-yellow-600 hover:underline ps-4"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            >View</a
                                        >
                                        <span
                                            v-if="
                                                $hasPermission('Delete fiches')
                                            "
                                            @click="deleteFiche(i.id)"
                                            class="font-medium text-red-600 hover:underline ps-4 cursor-pointer"
                                            >Delete</span
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- <Footer /> -->
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm, router } from "@inertiajs/vue3";
import dayjs from "dayjs";
const props = defineProps({
    permissions: {
        type: Array,
        required: true,
    },
});

function deletePermission(id) {
    if (confirm("Are you sure you want to delete this permission?")) {
        router.delete(`/permission/${id}`, {
            onFinish: () => {},
        });
    }
}
</script>
<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Permissions / Liste
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <h3>Liste of permissions</h3>
                    <Link href="/permission/create">
                        <button class="btn bg-accent text-white">Create</button>
                    </Link>
                </div>
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr class="border-b">
                            <th class="px-6 py-3 text-left">#</th>
                            <th class="px-6 py-3 text-left">Name</th>
                            <th class="px-6 py-3 text-left">Created at</th>
                            <th class="px-6 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr v-if="permissions == []">
                            <td colspan="4" class="text-center py-4">
                                No Permissions Available
                            </td>
                        </tr>
                        <tr
                            v-else
                            v-for="permission in permissions"
                            :key="permission.id"
                            class="border-b"
                        >
                            <td class="px-6 py-3 text-left">
                                {{ permission.id }}
                            </td>
                            <td class="px-6 py-3 text-left">
                                {{ permission.name }}
                            </td>
                            <td class="px-6 py-3 text-left">
                                {{
                                    dayjs(permission.created_at).format("MMM,DD,YYYY")
                                }}
                            </td>
                            <td class="px-6 py-3 text-center">
                                <Link
                                    :href="`/permission/${permission.id}/edit`"
                                >
                                    <button class="btn bg-blue-500 text-white">
                                        Edit
                                    </button>
                                </Link>
                                <button
                                    class="btn bg-red-500 text-white py-2 px-4 rounded"
                                    @click="deletePermission(permission.id)"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

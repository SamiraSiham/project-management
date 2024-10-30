<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm, router } from "@inertiajs/vue3";
import dayjs from "dayjs";
const props = defineProps({
    roles: {
        type: Array,
        required: true,
    },
});
console.log(props.roles);

function deleteRole(id) {
    if (confirm("Are you sure you want to delete this role?")) {
        router.delete(`/role/${id}`, {
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
                Role / Liste
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <h3>Liste of roles</h3>
                    <Link :href="route('role.create')">
                        <button class="btn bg-accent text-white">Create</button>
                    </Link>
                </div>
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr class="border-b">
                            <th class="px-6 py-3 text-left">#</th>
                            <th class="px-6 py-3 text-left">Name</th>
                            <th class="px-6 py-3 text-center">Permissions</th>
                            <th class="px-6 py-3 text-left">Created at</th>
                            <th class="px-6 py-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr v-if="roles == []">
                            <td colspan="4" class="text-center py-4">
                                No roles Available
                            </td>
                        </tr>
                        <tr
                            v-else
                            v-for="role in roles"
                            :key="role.id"
                            class="border-b"
                        >
                            <td class="px-6 py-3 text-left">
                                {{ role.id }}
                            </td>
                            <td class="px-6 py-3 text-left">
                                {{ role.name }}
                            </td>
                            <td class="px-6 py-3 text-left">
                                <span
                                    v-for="(perm, index) in role.permissions"
                                    :key="index"
                                    class="flex m-2"
                                >
                                    {{ perm || "None"}}
                                </span>
                            </td>
                            <td class="px-6 py-3 text-left">
                                {{
                                    dayjs(role.created_at).format("MMM,DD,YYYY")
                                }}
                            </td>
                            <td class="px-6 py-3 text-center">
                                <Link :href="`/role/${role.id}/edit`">
                                    <button class="btn bg-blue-500 text-white">
                                        Edit
                                    </button>
                                </Link>
                                <button
                                    class="btn bg-red-500 text-white py-2 px-4 rounded"
                                    @click="deleteRole(role.id)"
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

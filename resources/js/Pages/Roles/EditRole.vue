<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    permissions: {
        type: Array,
        required: true,
    },
    hasPermissions: {
        type: Array,
        required: true,
    },
    role: {
        type: Array,
        required: true,
    },
});
console.log(props.permissions);
console.log(
    props.hasPermissions.includes(props.permissions[0].name) ? "yes" : "no"
);

const form = useForm({
    name: props.role.name,
    permissions: props.hasPermissions,
});

const submit = () => {
    form.put(route("role.update", props.role.id), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold leading-tight text-gray-800">
                    Roles / Update
                </h2>
                <Link :href="route('role.index')">
                    <button class="btn bg-accent text-white">Back</button>
                </Link>
            </div>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <form @submit.prevent="submit" class="space-y-6">
                        <div class="space-y-1">
                            <label
                                for="nom"
                                class="block text-sm font-medium text-gray"
                                >Name</label
                            >
                            <input
                                v-model="form.name"
                                type="text"
                                id="name"
                                required
                                class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                            />
                        </div>
                        <div class="grid grid-cols-4 mb-3">
                            <div
                                class="mt-3"
                                v-for="permission in permissions"
                                :key="permission.id"
                            >
                                <label>
                                    <input
                                        name="permissions"
                                        type="checkbox"
                                        :value="permission.name"
                                        v-model="form.permissions"
                                    />
                                    {{ permission.name }}
                                </label>
                            </div>
                        </div>
                        <button
                            type="submit"
                            class="w-full bg-accent text-white py-2 rounded-lg shadow-md hover:bg-accent-dark transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-accent-light"
                        >
                            Save
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const props = defineProps({
    roles: {
        type: Array,
        required: true,
    },
    hasRoles: {
        type: Array,
        required: true,
    },
    user: {
        type: String,
        required: true,
    },
});
console.log(props.hasRoles);
// console.log(props.user.hasRoles);

const form = useForm({
    first_name: props.user.first_name,
    last_name: props.user.last_name,
    email: props.user.email,
    roles: props.hasRoles,
});

const submit = () => {
    form.put(route("user.update", props.user.id), {
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
                    Users / Edit
                </h2>
                <Link :href="route('user.index')">
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
                                for="first_name"
                                class="block text-sm font-medium text-gray"
                                >First Name</label
                            >
                            <input
                                v-model="form.first_name"
                                type="text"
                                id="first_name"
                                required
                                class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                            />
                        </div>
                        <div class="space-y-1">
                            <label
                                for="last_name"
                                class="block text-sm font-medium text-gray"
                                >Last Name</label
                            >
                            <input
                                v-model="form.last_name"
                                type="text"
                                id="last_name"
                                required
                                class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                            />
                        </div>
                        <div class="space-y-1">
                            <label
                                for="email"
                                class="block text-sm font-medium text-gray"
                                >Last Name</label
                            >
                            <input
                                v-model="form.email"
                                type="text"
                                id="email"
                                required
                                class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                            />
                        </div>
                        <div class="grid grid-cols-4 mb-3">
                            <div
                                class="mt-3"
                                v-for="role in roles"
                                :key="role.id"
                            >
                                <label>
                                    <input
                                        name="roles"
                                        type="checkbox"
                                        :value="role.name"
                                        v-model="form.roles"
                                    />
                                    {{ role.name }}
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

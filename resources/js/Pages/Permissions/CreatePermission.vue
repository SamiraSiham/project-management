<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
});

const submit = () => {
    form.post(route("permission.store"), {
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
                    Permissions
                </h2>
                <Link href="/permission">
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
                        <button
                            type="submit"
                            class="w-full bg-accent text-white py-2 rounded-lg shadow-md hover:bg-accent-dark transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-accent-light"
                        >
                            Create a Permission
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

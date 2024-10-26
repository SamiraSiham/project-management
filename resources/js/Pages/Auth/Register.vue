<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Register" />
        <form @submit.prevent="submit" class="space-y-6">
            <div class="space-y-1">
                <label for="prenom" class="block text-sm font-medium text-gray"
                    >First Name</label
                >
                <input
                    v-model="prenom"
                    type="text"
                    id="prenom"
                    required
                    class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                />
            </div>
            <div class="space-y-1">
                <label for="nom" class="block text-sm font-medium text-gray"
                    >Last Name</label
                >
                <input
                    v-model="nom"
                    type="text"
                    id="nom"
                    required
                    class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                />
            </div>
            <div class="space-y-1">
                <label
                    for="telephone"
                    class="block text-sm font-medium text-gray"
                    >Phone Number</label
                >
                <input
                    v-model="telephone"
                    type="text"
                    id="telephone"
                    required
                    class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                />
            </div>
            <div class="space-y-1">
                <label for="email" class="block text-sm font-medium text-gray"
                    >Email</label
                >
                <input
                    v-model="email"
                    type="email"
                    id="email"
                    required
                    class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                />
            </div>
            <div class="space-y-1">
                <label
                    for="password"
                    class="block text-sm font-medium text-gray"
                    >Password</label
                >
                <input
                    v-model="password"
                    type="password"
                    id="password"
                    required
                    class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                />
            </div>
            <div class="space-y-1">
                <label
                    for="password_confirmation"
                    class="block text-sm font-medium text-gray"
                    >Password Confirmation</label
                >
                <input
                    v-model="password_confirmation"
                    type="password"
                    id="password_confirmation"
                    required
                    class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
                />
            </div>
            <div class="space-y-1">
                <Link :href="route('login')" >
                    Already have an account ? <span class="underline">Log in here</span>
                </Link>
            </div>
            <button
                type="submit"
                class="w-full bg-accent text-white py-2 rounded-lg shadow-md hover:bg-accent-dark transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-accent-light"
            >
                Create An Account
            </button>
        </form>
        <!-- <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel
                    for="password_confirmation"
                    value="Confirm Password"
                />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError
                    class="mt-2"
                    :message="form.errors.password_confirmation"
                />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <Link
                    :href="route('login')"
                    class="rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Already registered?
                </Link>

                <PrimaryButton
                    class="ms-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Register
                </PrimaryButton>
            </div>
        </form> -->
    </GuestLayout>
</template>

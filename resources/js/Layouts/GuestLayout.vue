<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-white pt-6 justify-center sm:pt-0 font-Poppins"
    >
        <div class="w-2/3 flex items-center justify-center">
            <Link href="/">
                <ApplicationLogo class="h-20 fill-current min-w-full text-gray-500" />
            </Link>
        </div>

        <div
            class="w-full overflow-hidden bg-white px-6 py-4 shadow-2xl sm:max-w-md sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>

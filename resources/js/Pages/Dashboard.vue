<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import cards from '@/Components/dash/cards.vue';
import item from '@/Components/dash/item.vue';
import analytics from '@/Components/dash/analytics.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <!-- <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Dashboard
            </h2>
        </template> -->

        <div class="py-6">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <!-- <div class="m-6 text-gray-900">
                        Welcome 
                    </div> -->
                <cards />
                </div>
                <analytics/>
                <item />
            </div>
        </div>
    </AuthenticatedLayout>
</template>

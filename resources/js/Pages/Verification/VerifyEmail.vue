<script setup>
import { useForm } from "@inertiajs/vue3";
import {Head, Link, router} from "@inertiajs/vue3";
import { onMounted } from "vue";
const data = defineProps(['file_id', 'file_path']);
const form = useForm({
    file_id : data.file_id,
    first_name : "",
    last_name : "",
    email : "",
    file_path: data.file_path,
});
onMounted(()=>{
    console.log(data)
})
function submit() {
  router.post('/download',form);
}
</script>
<template>
    <div
        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center"
    >
        <div class="bg-white rounded-lg p-8 w-full max-w-xl">
            <h2 class="text-xl font-semibold mb-4">Please enter your information to download this file</h2>
            <form @submit.prevent="submit">
            <!-- <form action = { route ('your.named.route', your.param) } method = "post"> -->
            <!-- <form> -->
                <div class="mb-4">
                    <label class="block text-md font-medium"
                        >Nom</label
                    >
                    <input
                        v-model="form.last_name"
                        type="text"
                        required
                        class="mt-1 block w-full rounded-md shadow-sm focus:border-accent focus:ring focus:ring-accent focus:ring-opacity-50"
                    />
                </div>
                <div class="mb-4">
                    <label class="block text-md font-medium"
                        >Prénom</label
                    >
                    <input
                        v-model="form.first_name"
                        type="text"
                        required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring focus:ring-accent focus:ring-opacity-50"
                    />
                </div>
                <div class="mb-4">
                    <label
                        for="email"
                        class="block text-md font-medium"
                        >Email</label
                    >
                    <input
                        id="email"
                        v-model="form.email"
                        type="email"
                        required
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-accent focus:ring focus:ring-accent focus:ring-opacity-50"
                    />
                </div>
                <div class="flex justify-end space-x-2">
                    <a
                        :href="route('/')"                        
                        class="text-black hover:text-accent hover:underline font-bold py-2 px-4 rounded"
                    >
                        Cancel
                    </a>
                        
                        <!-- :href="route('download.store', form)" -->
                    <button
                        type="submit"
                        class="bg-accent text-white border hover:bg-white hover:text-accent font-bold py-2 px-4 rounded"
                    >
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>



<script setup>
import InputError from "@/Components/InputError.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { defineProps } from "vue";
import { useForm } from "@inertiajs/vue3";
import {Head, Link, router} from "@inertiajs/vue3";
const form = useForm({
    title: "",
    author: "",
    price: "",
    categorie_id: "",
    date_publication: "",
    file_path: "",
});
const data = defineProps({
    categories: Object,
    errors : Object
});
function submit() {
  router.post('/fiches', form)
}
</script>
<template>
    <Head title="Add a sheet" />
    <div class="flex flex-nowrap flex-row w-full">
        <!-- <InputError class="mt-2" :message="form.errors.password" /> -->
        <!-- <Sidebar /> -->
        <div class="flex flex-col w-full">
            <AuthenticatedLayout>
                <!-- <Header /> -->
                <!-- <add :data="data.categories" /> -->
                <div class="bg-white border rounded-lg shadow relative m-10">
                    <div
                        class="flex items-start justify-between p-5 border-b rounded-t"
                    >
                        <!-- <h3 class="text-xl font-semibold">Ajouter une fiche</h3> -->
                        <h3 class="text-xl font-semibold">Add a sheet</h3>
                    </div>

                    <div class="p-8 space-y-6">
                        <form
                            action="#"
                            @submit.prevent="submit"
                        >
                            <div class="grid grid-cols-6 gap-6">
                                <!-- Product Name -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label
                                        for="Titre"
                                        class="text-sm font-medium text-gray block mb-2"
                                        >Titre</label
                                    >
                                    <input
                                        v-model="form.title"
                                        type="text"
                                        name="Titre"
                                        id="Titre"
                                        class="shadow-sm border border-gray text-gray sm:text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5"
                                        placeholder="Apple Imac 27”"
                                    />
                                    <InputError class="mt-2" :message="form.errors.title" />
                                </div>

                                <!-- Category Select -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label
                                        for="category"
                                        class="text-sm font-medium text-gray block mb-2"
                                        >Category</label
                                    >
                                    <select
                                        v-model="form.categorie_id"
                                        name="category"
                                        id="category"
                                        class="shadow-sm border border-gray text-gray sm:text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5"
                                    >
                                        <option
                                            value=""
                                            disabled
                                            selected="true"
                                        >
                                            Select a category
                                        </option>
                                        <option
                                            v-for="i in data.categories"
                                            :key="i.id"
                                            :value="i.id"
                                        >
                                            {{ i.nom_categorie }}
                                        </option>
                                    </select>
                                    <InputError class="mt-2" :message="form.errors.categorie_id" />
                                </div>

                                <!-- Auteur -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label
                                        for="Auteur"
                                        class="text-sm font-medium text-gray block mb-2"
                                        >Auteur</label
                                    >
                                    <input
                                        v-model="form.author"
                                        type="text"
                                        name="Auteur"
                                        id="Auteur"
                                        class="shadow-sm border border-gray text-gray sm:text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5"
                                        placeholder="Apple"
                                    />
                                    <InputError class="mt-2" :message="form.errors.author" />
                                </div>

                                <!-- Price -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label
                                        for="Prix"
                                        class="text-sm font-medium text-gray block mb-2"
                                        >Prix</label
                                    >
                                    <input
                                        v-model="form.price"
                                        type="text"
                                        name="Prix"
                                        id="Prix"
                                        class="shadow-sm border border-gray text-gray sm:text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5"
                                        placeholder="$2300"
                                    />
                                    <InputError class="mt-2" :message="form.errors.price" />
                                </div>

                                <!-- Product Details -->
                                <!-- <div class="col-span-6 sm:col-span-3">
                                    <label
                                        for="Fiche Details"
                                        class="text-sm font-medium text-gray block mb-2"
                                        >Fiche Details</label
                                    >
                                    <textarea
                                        id="Fiche Details"
                                        rows="6"
                                        class="border border-gray text-gray sm:text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-4"
                                        placeholder="Details"
                                    ></textarea>
                                </div> -->

                                <!-- Date Input -->
                                <div class="col-span-6 sm:col-span-3">
                                    <label
                                        for="date"
                                        class="text-sm font-medium text-gray block mb-2"
                                        >Date</label
                                    >
                                    <input
                                        type="date"
                                        v-model="form.date_publication"
                                        name="date"
                                        id="date"
                                        class="shadow-sm border border-gray text-gray sm:text-sm rounded-lg focus:ring-accent focus:border-accent block w-full p-2.5"
                                    />
                                    <InputError class="mt-2" :message="form.errors.date_publication" />
                                </div>
                            </div>

                            <!-- Drag and Drop Area -->
                            <div
                                class="flex flex-col items-center max-w-md mx-auto mt-4 mb-3"
                            >
                                <div
                                    @dragover.prevent="
                                        $el.classList.add('border-accent')
                                    "
                                    @dragleave.prevent="
                                        $el.classList.remove('border-accent')
                                    "
                                    @drop.prevent="handleDrop($event)"
                                    class="w-full p-6 bg-white border-2 border-dashed border-gray rounded-lg hover:border-accent transition-colors flex flex-col items-center cursor-pointer"
                                >
                                    <input
                                        type="file"
                                        @change="handleFiles"
                                        class="hidden"
                                        ref="fileInput"
                                        @input="
                                            form.file_path = $event.target.files[0]
                                        "
                                    />
                                    <div
                                        class="text-center"
                                        @click="$refs.fileInput.click()"
                                    >
                                        <i
                                            class="fas fa-cloud-upload-alt fa-3x text-gray"
                                        ></i>
                                        <p class="text-gray mt-2">
                                            Drag your files here or click to
                                            upload
                                        </p>
                                    </div>
                                </div>

                                <!-- Display Selected Files -->
                                <div
                                    v-if="files.length"
                                    class="w-full mt-4 space-y-2"
                                >
                                    <h3 class="text-lg font-semibold text-gray">
                                        Files to Upload:
                                    </h3>
                                    <div
                                        v-for="(file, index) in files"
                                        :key="index"
                                        class="flex items-center justify-between p-2 border rounded-md"
                                    >
                                        <div
                                            class="flex items-center space-x-2"
                                        >
                                            <i
                                                :class="fileIcon(file)"
                                                class="fa-fw text-gray"
                                            ></i>
                                            <span
                                                class="text-gray font-medium"
                                                >{{ file.name }}</span
                                            >
                                        </div>
                                        <span class="text-sm text-gray">{{
                                            formatFileSize(file.size)
                                        }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div
                                class="p-4 border-t border-gray rounded-b flex gap-x-3 items-center"
                            >
                                <button
                                    class="text-white bg-accent border hover:bg-white hover:text-accent hover:border-accent focus:ring-4 focus:ring-accent font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                    type="submit"
                                >
                                Save
                                </button>
                                <Link
                                    :href="route('fiches.index')"
                                    class="text-white bg-blue-500 hover:text-blue-500 hover:bg-white border hover:border-blue-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                >
                                    Cancel
                                </Link>
                            </div>
                        </form>
                    </div>
                </div>
            </AuthenticatedLayout>
        </div>
    </div>
    <!-- <Footer /> -->
</template>

<script>
export default {
    data() {
        return {
            files: [],
            selectedDate: "", // Data property to hold the selected date
        };
    },
    methods: {
        handleFiles(event) {
            this.files = Array.from(event.target.files);
        },
        handleDrop(event) {
            this.files = Array.from(event.dataTransfer.files);
        },
        fileIcon(file) {
            if (file.type.startsWith("image/")) return "far fa-file-image";
            if (file.type.startsWith("audio/")) return "far fa-file-audio";
            if (file.type.startsWith("video/")) return "far fa-file-video";
            if (file.type.startsWith("application/pdf"))
                return "far fa-file-pdf";
            return "far fa-file-alt";
        },
        formatFileSize(size) {
            const i = Math.floor(Math.log(size) / Math.log(1024));
            return `${(size / Math.pow(1024, i)).toFixed(2)} ${
                ["B", "KB", "MB", "GB", "TB"][i]
            }`;
        },
    },
};
</script>

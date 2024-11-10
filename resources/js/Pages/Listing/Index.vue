<script setup>
import { router, Link } from "@inertiajs/vue3";
import { onMounted } from "vue";

const props = defineProps({
    fiches: Object,
});
</script>
<template>
    <div class="font-Poppins my-2">
        <div class="flex flex-col w-full">
            <section
                class="p-5 md:pb-10 grid grid-cols-1 sm:px-10 md:px-20 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 items-start"
            >
                <section
                    v-for="i in props.fiches"
                    :key="i.id"
                    class="px-3 py-6 bg-purple-50 text-center transform duration-500"
                >
                    <h1 class="text-2xl my-5 font-bold">{{ i.title }}</h1>
                    <h2 class="font-semibold mb-5 text-xl">Category : {{ i.category.nom_categorie }}</h2>
                    <img :src="book_img" alt="" class="" />
                    <!-- <h2 class="font-semibold mb-5 text-3xl">$29.99</h2> -->

                    <a
                        :href="route('download.show',i.id)"
                        class="download p-2 px-6 bg-blue-500 text-white rounded-md hover:bg-blue-600 m-2"
                    >
                        <i class="fa-solid fa-download"></i> Download
                        <!-- <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-6 h-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25"
                            />
                        </svg> -->
                    </a>
                </section>
            </section>
        </div>
    </div>
</template>

<script>
import book_img from "/public/assets/images/book_img.png";
export default {
    data() {
        return {
            book_img: book_img,
        };
    },
};
</script>

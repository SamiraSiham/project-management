<script setup>
import { onMounted } from 'vue';
import Header from '@/Components/Landing/Header.vue';
import Index from "../Listing/Index.vue";
    const props = defineProps({
        data : Object,
        FicheParGenre : Object,
        fiche_id: Number
    })
    onMounted(()=>{console.log(props.FicheParGenre)})
</script>
<template>
    <Header :data="props.data"/>
    <div class="font-Poppins my-2">
        <div class="flex flex-col w-full">
            <section
                v-if="props.FicheParGenre.length > 0"
                class="p-5 md:pb-10 grid grid-cols-1 sm:px-10 md:px-20 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 items-start"
            >
                <section
                    v-for="i in props.FicheParGenre"
                    :key="i.id"
                    class="px-3 py-6 bg-purple-50 text-center transform duration-500 h-fit"
                >
                    <h1 class="text-xl my-5 font-bold">{{ i.title }}</h1>
                    <!-- <h2 class="font-semibold mb-5 text-xl">
                        Category : {{ i.nom_categorie }}
                    </h2> -->
                    <img :src="book_img" alt="" class="" />

                    <a
                        :href="route('download.show', i.id)"
                        class="download p-2 px-6 bg-blue-500 text-white rounded-md hover:bg-blue-600 m-2"
                    >
                        <i class="fa-solid fa-download"></i> Download
                    </a>
                </section>
            </section>
            <section
                v-if="props.FicheParGenre.length <= 0"
                class="p-5 md:pb-10 grid grid-cols-1 sm:px-10 md:px-20 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 items-start"
            >
                <h1 class="text-2xl my-5 font-bold">Nothing here yet</h1>
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
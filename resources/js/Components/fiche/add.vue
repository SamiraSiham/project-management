<script setup>
import { defineProps, onMounted } from 'vue';
import { useForm, Head, Link } from '@inertiajs/vue3';
const form = useForm({
  title: null,
  author: null,
  price: null,
  categorie_id: null,
  date_publication: null,
})
const data = defineProps({
    data: Object
})
onMounted(()=>{console.log(data?.data)})
</script>
<template>
    
</template>



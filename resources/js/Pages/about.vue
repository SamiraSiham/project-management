<template>
    <div id="about">
        <!-- <Header /> -->
        <section1 />
        <section2 />
        <section3 />
        <!-- <section4 /> -->
</div>
</template>

<script>
// import Header from '../Components/Landing/Header.vue';
import section1 from '@/Components/About/section1.vue';
import section2 from '@/Components/About/section2.vue';
import section3 from '@/Components/About/section3.vue';
import section4 from '@/Components/About/section4.vue';
export default {
    components: {
        // Header,
        section1,
        section2,
        section3,
        section4
    },
    data() {
      return {
        im1: '/assets/images/im1.png',
      };
    },
};
</script>

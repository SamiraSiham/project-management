<template>
<div class="font-Poppins">
        <div class="flex flex-nowrap flex-row w-full">
            <div class="flex flex-col w-full">
                <Header /> 
               <add/>
            </div>
        </div>
        <Footer />
    </div>
</template>
<script> 
import Header from '@/Components/Landing/Header.vue';
import add from  '../Components/fiche/add.vue';
import Footer from '@/Components/Landing/Footer.vue';

export default{
    components : {
        Header,
        add,
        Footer
    }
}
</script>
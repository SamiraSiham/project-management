<template>
    <div class="font-Poppins">
        <div class="flex flex-nowrap flex-row w-full">
            <div class="flex flex-col w-full">
                <Header /> 
                <pack />
                <cart />
                <list/>
            </div>
        </div>
        <Footer />
    </div>

</template>

<script>
import Header from '../Components/Landing/Header.vue';
import pack from '@/Components/fiche/pack.vue';
import list from '@/Components/fiche/list.vue';
import cart from '@/Components/fiche/cart.vue';
import Footer from '@/Components/Landing/Footer.vue';
export default{
    components: {
        Header,
        pack,
        cart,
        list ,
        Footer
    },
    data(){
        return 
    }  
}
</script>
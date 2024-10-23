<template>
    <div class="sm:flex items-center max-w-screen-xl ml-5">
    <div class="sm:w-1/2 p-10">
        <div class="image object-center text-center">
            <img :src="im1">
        </div>
    </div>
    <div class="sm:w-full p-5">
        <div class="text">
            <span class="text-gray-500 border-b-2 border-primary uppercase">About us</span>
            <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">About <span class="text-primary">Our Company</span>
            </h2>
            <p class="text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, commodi
                doloremque, fugiat illum magni minus nisi nulla numquam obcaecati placeat quia, repellat tempore
                voluptatum.
            </p>
        </div>
    </div>
</div>
</template>
<script>
   export default{
    data(){
        return {
        im1: '/assets/images/im1.png',
      };
    }
   }
</script>
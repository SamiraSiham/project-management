<template>
    <div class="sm:flex items-center max-w-screen-xl ml-5">
    <div class="sm:w-1/2 p-7">
        <div class="image object-center text-center">
            <img :src="im1">
        </div>
    </div>
    <div class="sm:w-full p-3">
        <div class="text">
            <span class="text-accent border-b-2 border-accent uppercase">About us</span>
            <h2 class="my-4 font-bold text-3xl  sm:text-4xl ">About <span class="text-accent">Our Company</span>
            </h2>
            <p class="text-gray">
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
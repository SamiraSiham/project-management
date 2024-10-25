<template>
    <div class="flex items-center justify-center w-full lg:w-1/2 bg-primary p-8">
      <img
        :src="imageSrc"
        alt="Illustration"
        class="max-w-6xl h-auto"
        loading="lazy"
      />
    </div>
  </template>
  
  <script>
  export default {
    props: {
      imageSrc: {
        type: String,
        required: true,
      },
    },
  };
  </script>
  
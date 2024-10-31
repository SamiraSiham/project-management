<template>
    <!-- Contact Form Section -->

    <div class="bg-white p-8 rounded-md w-1/2 mb-10 md:mb-0">
            <h2 class="text-2xl font-bold mb-6 text-center text-accent">Contactez-nous</h2>
            <form @submit.prevent="submitForm">
              <!-- Nom et Prénom -->
              <div class="flex flex-col md:flex-row md:justify-between mb-6">
                <!-- Nom -->
                <div class="w-full md:max-w-xs mb-4 md:mb-0">
                  <label for="firstName" class="block text-sm font-medium text-gray-700">Last Name *</label>
                  <input 
                    type="text" 
                    id="firstName" 
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-accent focus:border-accent" 
                    required
                  >
                </div>
                
                <!-- Prénom -->
                <div class="w-full md:max-w-xs">
                  <label for="lastName" class="block text-sm font-medium text-gray-700 ml-2">First Name *</label>
                  <input 
                    type="text" 
                    id="lastName" 
                    class="mt-1 block  w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-accent focus:border-accent ml-2" 
                    required
                  >
                </div>
              </div>
  
              <!-- Email -->
              <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email *</label>
                <input 
                  type="email" 
                  id="email" 
                  class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-accent focus:border-accent" 
                  required
                >
              </div>  
              <!-- Message -->
              <div class="mt-4">
                <label for="message" class="block text-sm font-medium text-gray-700">How can we help you ? *</label>
                <textarea 
                  id="message" 
                  rows="4" 
                  class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-accent focus:border-accent" 
                  required
                ></textarea>
              </div>
  
              <!-- Submit Button -->
              <button type="submit" class="w-full bg-accent text-white py-2 rounded-md hover:bg-accent-dark mt-4 transition duration-300">
                Submit
              </button>
            </form>
          </div>
</template>
<script>
  export default {
    name: "ContactUs",
    methods: {
      submitForm() {
        // Logic to handle form submission
        console.log("Form submitted");
      },
    },
  };
</script>
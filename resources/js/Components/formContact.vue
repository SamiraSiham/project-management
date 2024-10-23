<template>
    <!-- Contact Form Section -->

    <div class="bg-white p-8 rounded-lg w-full max-w-lg mb-10 lg:mb-0">
            <h2 class="text-4xl font-bold mb-6 text-center lg:text-left">Contactez-nous</h2>
            <form @submit.prevent="submitForm">
              <!-- Nom et Prénom -->
              <div class="flex flex-col lg:flex-row lg:justify-between mb-6">
                <!-- Nom -->
                <div class="w-full lg:max-w-xs mb-4 lg:mb-0">
                  <label for="firstName" class="block text-sm font-medium text-gray-700">Nom *</label>
                  <input 
                    type="text" 
                    id="firstName" 
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary" 
                    required
                  >
                </div>
                
                <!-- Prénom -->
                <div class="w-full lg:max-w-xs">
                  <label for="lastName" class="block text-sm font-medium text-gray-700 ml-2">Prénom *</label>
                  <input 
                    type="text" 
                    id="lastName" 
                    class="mt-1 block  w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary ml-2" 
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
                  class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary" 
                  required
                >
              </div>
  
              <!-- Subject -->
              <div class="mt-4">
                <label for="subject" class="block text-sm font-medium text-gray-700">Sujet *</label>
                <select 
                  id="subject" 
                  class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary" 
                  required
                >
                  <option value="">Sélectionnez</option>
                  <option value="Job Seekers">Demandeurs d'emploi</option>
                  <option value="Talent Consulting">Consulting de talent</option>
                  <option value="Workforce Management">Gestion de la main-d'œuvre</option>
                </select>
              </div>
  
              <!-- Message -->
              <div class="mt-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Comment pouvons-nous vous aider ? *</label>
                <textarea 
                  id="message" 
                  rows="4" 
                  class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-primary focus:border-primary" 
                  required
                ></textarea>
              </div>
  
              <!-- Submit Button -->
              <button type="submit" class="w-full bg-primary text-white py-2 rounded-md hover:bg-primary-dark mt-4 transition duration-300">
                Soumettre
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
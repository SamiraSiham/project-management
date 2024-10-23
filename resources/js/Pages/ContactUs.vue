<template>
    <div>
      <Header />
      <section class="bg-gray-100 py-4">
        <div class="container mx-auto flex flex-col lg:flex-row justify-center items-start lg:space-x-20">
          
          <!-- Contact Form Section -->
        <formContact />
  
          <!-- Information Section -->
          <div class="p-8 max-w-md mx-auto">
            <h1 class="text-gray-900 text-3xl font-bold mb-4 text-center lg:text-left">Pour plus d'informations</h1>
            <ul class="text-gray-700 space-y-4">
              <li class="p-6 bg-white rounded-lg text-lg shadow-md">Remplissez vos informations dans le formulaire et nous vous contacterons.</li>
              <li class="p-6 bg-primary text-white rounded-lg text-lg shadow-md">Nous sommes ici pour répondre à toutes vos questions et vous fournir l'assistance dont vous avez besoin.</li>
              <li class="p-6 bg-white rounded-lg text-lg shadow-md">N'hésitez pas à nous faire part de vos préoccupations, nous sommes impatients de vous aider!</li>
            </ul>
          </div>
  
        </div>
      </section>
    </div>

  </template>
  
  <script>
  import Header from '../Components/Landing/Header.vue';
  import formContact from '../Components/formContact.vue';
  
  export default {
    components: {
      Header,
      formContact
    },
  }
  </script>
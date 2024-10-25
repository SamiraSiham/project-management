<template>
    <div>
      <Header />
      <section class="bg-gray-100 py-4 min-w-full">
        <div class="container mx-auto flex max-md:flex-col md:flex-row justify-center items-start md:gap-x-10">
          
          <!-- Contact Form Section -->
        <formContact />
  
          <!-- Information Section -->
          <div class="p-8 w-1/2 mx-auto">
            <h1 class="text-gray-900 text-2xl font-bold mb-4 text-center">Pour plus d'informations</h1>
            <div class="p-4 flex flex-col gap-y-3 bg-white rounded-lg text-lg shadow-md">
              <p class="p-3 text-center bg-white rounded-lg text-lg shadow-md">
                Remplissez vos informations dans le formulaire et nous vous contacterons.
              </p>
              <p class="p-3 text-center bg-primary text-accent rounded-lg text-lg shadow-md">
                Nous sommes ici pour répondre à toutes vos questions et vous fournir l'assistance dont vous avez besoin.
              </p>
              <p class="p-6 bg-white rounded-lg text-lg shadow-md">
                N'hésitez pas à nous faire part de vos préoccupations, nous sommes impatients de vous aider!
              </p>
            </div>
            <!-- <ul class="text-gray-700 space-y-2">
              <li></li>
              <li></li>
              <li ></li>
            </ul> -->
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
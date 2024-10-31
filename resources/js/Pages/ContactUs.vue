<template>
    <div>
      <Header />
      <section class="bg-gray-100 py-4 min-w-full">
        <div class="container mx-auto flex max-md:flex-col md:flex-row justify-center items-start md:gap-x-10">
          
          <!-- Contact Form Section -->
        <formContact />
  
          <!-- Information Section -->
          <div class="p-8 w-1/2 mx-auto">
            <!-- <h1 class="text-gray-900 text-2xl font-bold mb-4 text-center">Pour plus d'informations</h1> -->
            <h1 class="text-gray-900 text-2xl font-bold mb-4 text-center">For more info</h1>
            <div class="p-4 flex flex-col gap-y-3 bg-white rounded-lg text-xl">
              <p class="p-3 text-center bg-white rounded-lg text-xl shadow-md">
                <!-- Remplissez vos informations dans le formulaire et nous vous contacterons. -->
                Fill in your details in the form and we will contact you.
              </p>
              <p class="p-3 text-center bg-primary text-accent rounded-lg text-xl shadow-md">
                <!-- Nous sommes ici pour répondre à toutes vos questions et vous fournir l'assistance dont vous avez besoin. -->
                We are here to answer any questions you may have and provide you with the assistance you need.
              </p>
              <p class="p-6 bg-white rounded-lg text-xl shadow-md">
                <!-- N'hésitez pas à nous faire part de vos préoccupations, nous sommes impatients de vous aider! -->
                Please feel free to share your concerns with us, we look forward to helping you!
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
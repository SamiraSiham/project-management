<template>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
      <div class="flex flex-col lg:flex-row bg-white rounded-lg shadow-lg overflow-hidden w-full max-w-6xl">
        <div class="w-full lg:w-1/2 p-10">
          <h2 class="text-4xl font-bold text-center mb-6 text-gray-800">
            {{ isLogin ? 'Connexion' : 'Créer un Compte' }}
          </h2>
          <component
            :is="isLogin ? 'LoginNew' : 'RegisterNew'"
            @toggleForm="toggleForm"
          />
          <p class="text-center text-sm text-gray-600 mt-4">
            {{ isLogin ? 'Vous n’avez pas de compte?' : 'Vous avez déjà un compte?' }}
            <button
              type="button"
              @click="toggleForm"
              class="text-primary hover:underline"
            >
              {{ isLogin ? 'Créer un Compte' : 'Connexion' }}
            </button>
          </p>
        </div>
        <AuthImage :imageSrc="task" />
      </div>
    </div>
  </template>
  
  <script>
  import LoginNew from '../Components/LoginNew.vue';
  import RegisterNew from '../Components/RegisterNew.vue';
  import AuthImage from '../Components/AuthImage.vue';
  
  export default {
    components: {
      LoginNew,
      RegisterNew,
      AuthImage,
    },
    data() {
      return {
        task: '/assets/images/tasks.png',
        isLogin: true, // Initial state for login
      };
    },
    methods: {
      toggleForm() {
        this.isLogin = !this.isLogin; // Toggle between login and signup
      },
    },
  };
  </script>
  
<template>
    <form @submit.prevent="login" class="space-y-6">
      <div class="space-y-1">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input
          v-model="email"
          type="email"
          id="email"
          required
          class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
        />
      </div>
      <div class="space-y-1">
        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
        <input
          v-model="password"
          type="password"
          id="password"
          required
          class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
        />
      </div>
      <button
        type="submit"
        class="w-full bg-primary text-white py-2 rounded-lg shadow-md hover:bg-primary-dark transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-primary-light"
      >
        Connexion
      </button>
    </form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        email: '',
        password: '',
      };
    },
    methods: {
      login() {
        alert('Connexion avec : ' + this.email);
        // Handle login logic here
      },
    },
  };
  </script>
  
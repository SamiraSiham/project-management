<template>
    <form @submit.prevent="signUp" class="space-y-6">
      <div class="space-y-1">
        <label for="prenom" class="block text-sm font-medium text-gray-700">Prénom</label>
        <input
          v-model="prenom"
          type="text"
          id="prenom"
          required
          class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
        />
      </div>
      <div class="space-y-1">
        <label for="nom" class="block text-sm font-medium text-gray-700">Nom</label>
        <input
          v-model="nom"
          type="text"
          id="nom"
          required
          class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
        />
      </div>
      <div class="space-y-1">
        <label for="telephone" class="block text-sm font-medium text-gray-700">Téléphone</label>
        <input
          v-model="telephone"
          type="text"
          id="telephone"
          required
          class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
        />
      </div>
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
      <div class="space-y-1">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
        <input
          v-model="password_confirmation"
          type="password"
          id="password_confirmation"
          required
          class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
        />
      </div>
      <button
        type="submit"
        class="w-full bg-primary text-white py-2 rounded-lg shadow-md hover:bg-primary-dark transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-primary-light"
      >
        Créer un Compte
      </button>
    </form>
  </template>
  
  <script>
  export default {
    data() {
      return {
        prenom: '',
        nom: '',
        telephone: '',
        email: '',
        password: '',
        password_confirmation: '',
      };
    },
    methods: {
      signUp() {
        if (this.password === this.password_confirmation) {
          alert('Création du compte avec : ' + this.email);
          // Handle sign-up logic here
        } else {
          alert('Les mots de passe ne correspondent pas.');
        }
      },
    },
  };
  </script>
  
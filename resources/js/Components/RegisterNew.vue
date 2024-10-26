<template>
    <form @submit.prevent="signUp" class="space-y-6">
      <div class="space-y-1">
        <label for="prenom" class="block text-sm font-medium text-gray">Prénom</label>
        <input
          v-model="prenom"
          type="text"
          id="prenom"
          required
          class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
        />
      </div>
      <div class="space-y-1">
        <label for="nom" class="block text-sm font-medium text-gray">Nom</label>
        <input
          v-model="nom"
          type="text"
          id="nom"
          required
          class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
        />
      </div>
      <div class="space-y-1">
        <label for="telephone" class="block text-sm font-medium text-gray">Téléphone</label>
        <input
          v-model="telephone"
          type="text"
          id="telephone"
          required
          class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
        />
      </div>
      <div class="space-y-1">
        <label for="email" class="block text-sm font-medium text-gray">Email</label>
        <input
          v-model="email"
          type="email"
          id="email"
          required
          class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
        />
      </div>
      <div class="space-y-1">
        <label for="password" class="block text-sm font-medium text-gray">Mot de passe</label>
        <input
          v-model="password"
          type="password"
          id="password"
          required
          class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
        />
      </div>
      <div class="space-y-1">
        <label for="password_confirmation" class="block text-sm font-medium text-gray">Confirmer le mot de passe</label>
        <input
          v-model="password_confirmation"
          type="password"
          id="password_confirmation"
          required
          class="block w-full px-4 py-2 border border-gray rounded-md focus:outline-none focus:ring-2 focus:ring-accent"
        />
      </div>
      <button
        type="submit"
        class="w-full bg-accent text-white py-2 rounded-lg shadow-md hover:bg-accent-dark transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-accent-light"
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
  
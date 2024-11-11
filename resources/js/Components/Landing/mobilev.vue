<template>
  <!-- Mobile Sidebar -->
  <div v-if="isMobileNavOpen" class="fixed inset-0 bg-gray bg-opacity-50 z-50 flex justify-end">
    <div class="w-64 bg-white h-full p-4 space-y-6">
      
      <!-- Close Button -->
      <button @click="closeMobileNav" class="text-gray-700 text-right">
        <i class="fas fa-times"></i>
      </button>

      <!-- Mobile Navigation Links -->
      <ul class="space-y-4 font-semibold text-gray-700">
        <li><a href="#" class="block hover:text-black">HOME</a></li>
        <li><a href="#" class="block hover:text-black">ABOUT</a></li>
        <li><a href="#" class="block hover:text-black">CONTACT</a></li>
      </ul>

      <!-- Search Bar -->
      <div class="relative">
        <input
          type="text"
          placeholder="Rechercher..."
          class="border border-green-300 px-4 py-2 pl-10 w-full focus:outline-none focus:ring-2 focus:ring-green-500"
        />
        <i class="fas fa-search absolute left-3 top-2.5 text-gray-500"></i>
      </div>

      <!-- Authentication Links -->
      <div class="space-y-4">
        <a href="#" class="block text-gray-700 hover:text-black">Se connecter</a>
        <a href="#" class="block bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 font-semibold">S'inscrire</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['isMobileNavOpen'],
  methods: {
    // Emit an event to toggle the mobile navigation in the parent component
    closeMobileNav() {
      this.$emit('toggleMobileNav');
    }
  }
};
</script>

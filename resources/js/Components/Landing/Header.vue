<template>
  <!-- Header -->
  <header class="bg-white border-gray-200 p-4 shadow-lg flex justify-between items-center fixed top-0 left-0 w-full z-50">
    
    <!-- Logo and Navigation Links -->
    <div class="flex items-center space-x-8">
      
      <!-- Logo -->
      <div class="flex items-center space-x-2">
        <i class="fas fa-book text-accent p-4"></i>
        <span class="font-bold text-xl text-dark">MANAGER TOOLS</span>
      </div>
      
      <!-- Desktop Navigation Links -->
      <ul class="hidden md:flex space-x-6 font-semibold text-gray-700">
        <li><a href="#" class="hover:text-dark">HOME</a></li>
        <li><a href="#" class="hover:text-dark">ABOUT</a></li>
        <li><a href="#" class="hover:text-dark">CONTACT</a></li>
      </ul>
    </div>

    <!-- Search Bar (Desktop only) -->
    <div class="relative hidden md:block">
      <input
        type="text"
        placeholder="Rechercher..."
        class="border border-accent px-4 py-2 pl-10 focus:outline-none focus:ring-2 focus:ring-accent"
      />
      <i class="fas fa-search absolute left-3 top-2.5 text-gray"></i>
    </div>

    <!-- Right Side Icons and Buttons -->
    <div class="flex items-center space-x-6">
      
      <!-- Sign-in Link (Desktop only) -->
      <div class="hidden md:flex items-center text-gray-700 space-x-1">
        <i class="fas fa-desktop"></i>
        <a href="#" class="hover:text-dark">Se connecter</a>
      </div>

      <!-- Sign-up Button (Desktop only) -->
      <a href="#" class="hidden md:inline-block bg-accent text-white px-4 py-2 rounded hover:bg-green-600 font-semibold">S'inscrire</a>

      <!-- Mobile Settings Icon -->
      <div class="flex items-center space-x-2 md:hidden">
        <button @click="toggleMobileNav" class="text-gray-700">
          <i class="fas fa-cog"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Sidebar Component -->
    <mobilev :isMobileNavOpen="isMobileNavOpen" @toggleMobileNav="toggleMobileNav" />

    <!-- Hamburger Icon for Mobile and Desktop Dropdown -->
    <div @click="toggleDropdown" class="cursor-pointer text-gray-700">
      <i class="fas fa-bars"></i>
    </div>

    <!-- Dropdown Menu Component for Mobile and Desktop -->
    <submenu :isDropdownOpen="isDropdownOpen" @toggleDropdown="toggleDropdown" />
  </header>
</template>

<script>
import submenu from '@/Components/Landing/submenu.vue';
import mobilev from '@/Components/Landing/mobilev.vue';

export default {
  components: {
    submenu,
    mobilev
  },
  data() {
    return {
      isDropdownOpen: false, // Dropdown state for mobile and desktop
      isMobileNavOpen: false, // Mobile navigation state
      openSubMenus: {
        courses: false,
        tools: false,
        research: false,
        about: false,
        security: false,
        help: false,
      },
    };
  },
  methods: {
    // Toggle dropdown menu
    toggleDropdown() {
      this.isDropdownOpen = !this.isDropdownOpen;
    },
    // Toggle mobile navigation
    toggleMobileNav() {
      this.isMobileNavOpen = !this.isMobileNavOpen;
    },
    // Toggle individual submenu
    toggleSubMenu(menu) {
      this.openSubMenus[menu] = !this.openSubMenus[menu];
    },
  },
};
</script>

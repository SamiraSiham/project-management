<template>
  <!-- Menu déroulant pour Desktop -->
    <div v-if="isDropdownOpen" class="absolute top-16 left-0 w-full bg-white border-t border-gray-200 shadow-md">
      <!-- Pour Desktop -->
      <ul class="hidden md:flex flex-row space-x-8 p-4 shadow-md">
        <!-- Courses -->
        <li class="group relative">
          <a @click="toggleSubMenu('courses')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-box mr-3"></i> COURSES
            <i class="fas fa-chevron-down ml-1" :class="{'rotate-180': openSubMenus.courses}"></i>
          </a>
          <ul v-if="openSubMenus.courses" class="absolute bg-white p-2 border border-gray-200 space-y-2 mt-1">
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">General Knowledge</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Academics</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Live Courses</a></li>
          </ul>
        </li>
    
        <!-- Tools -->
        <li class="group relative">
          <a @click="toggleSubMenu('tools')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-tools mr-3"></i> TOOLS
            <i class="fas fa-chevron-down ml-1" :class="{'rotate-180': openSubMenus.tools}"></i>
          </a>
          <ul v-if="openSubMenus.tools" class="absolute bg-white p-2 border border-gray-200 space-y-2 mt-1">
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Market Research</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Strategy</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Finance</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Project Management</a></li>
          </ul>
        </li>
    
        <!-- Research -->
        <li class="group relative">
          <a @click="toggleSubMenu('research')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-lightbulb text-red-500 mr-3"></i> RESEARCH
            <i class="fas fa-chevron-down ml-1" :class="{'rotate-180': openSubMenus.research}"></i>
          </a>
          <ul v-if="openSubMenus.research" class="absolute bg-white p-2 border border-gray-200 space-y-2 mt-1">
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Market Research</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Strategy</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Finance</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Project Management</a></li>
          </ul>
        </li>
    
        <!-- About Us -->
        <li class="group relative">
          <a @click="toggleSubMenu('about')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer ">
            <i class="fas fa-users mr-3"></i> ABOUT US
          </a>
        </li>
    
        <!-- Security -->
        <li class="group relative">
          <a @click="toggleSubMenu('security')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-shield-alt mr-3"></i> SÉCURITÉ
          </a>
        </li>
    
        <!-- Help -->
        <li class="group relative">
          <a @click="toggleSubMenu('help')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-question-circle mr-3"></i> AIDE
          </a>
        </li>
      </ul>
    
  <!-- Pour Mobile -->
      <ul class="flex flex-col space-y-2 p-4 md:hidden">
        <!-- Courses (Mobile) -->
        <li class="group relative">
          <a @click="toggleSubMenu('courses')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-box mr-3"></i> COURSES
            <i class="fas fa-chevron-down ml-1" :class="{'rotate-180': openSubMenus.courses}"></i>
          </a>
          <ul v-show="openSubMenus.courses" class="bg-white p-2 ml-4 border border-gray-200 space-y-2 mt-1">
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">General Knowledge</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Academics</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Live Courses</a></li>
          </ul>
        </li>
    
        <!-- Tools (Mobile) -->
        <li class="group relative">
          <a @click="toggleSubMenu('tools')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-tools mr-3"></i> TOOLS
            <i class="fas fa-chevron-down ml-1" :class="{'rotate-180': openSubMenus.tools}"></i>
          </a>
          <ul v-show="openSubMenus.tools" class="bg-white p-2 ml-4 border border-gray-200 space-y-2 mt-1">
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Market Research</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Strategy</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Finance</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Project Management</a></li>
          </ul>
        </li>
    
        <!-- Research (Mobile) -->
        <li class="group relative">
          <a @click="toggleSubMenu('research')" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-lightbulb text-red-500 mr-3"></i> RESEARCH
            <i class="fas fa-chevron-down ml-1" :class="{'rotate-180': openSubMenus.research}"></i>
          </a>
          <ul v-show="openSubMenus.research" class="bg-white p-2 ml-4 border border-gray-200 space-y-2 mt-1">
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Market Research</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Strategy</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Finance</a></li>
            <li><a href="#" class="block px-4 py-2 text-gray-700 hover:bg-green-100">Project Management</a></li>
          </ul>
        </li>
    
        <!-- About Us (Mobile) -->
        <li class="group relative">
          <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-users mr-3"></i> ABOUT US
          </a>
        </li>
    
        <!-- Security (Mobile) -->
        <li class="group relative">
          <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-shield-alt mr-3"></i> SÉCURITÉ
          </a>
        </li>
    
        <!-- Help (Mobile) -->
        <li class="group relative">
          <a class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">
            <i class="fas fa-question-circle mr-3"></i> AIDE
          </a>
        </li>
      </ul>
    </div>
</template>
<script>
export default {
  props: ['isDropdownOpen'],
  data() {
      return {
       openSubMenus:
        {
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
     toggleSubMenu(menu) {
      this.openSubMenus[menu] = !this.openSubMenus[menu];
    },
  },
};
</script>
    
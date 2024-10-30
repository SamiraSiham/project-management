<template>
    <div class="bg-white border border-2 rounded-lg shadow relative m-10">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">Ajouter une fiche</h3>
      </div>
  
      <div class="p-8 space-y-6">
        <form action="#">
          <div class="grid grid-cols-6 gap-6">
            <!-- Product Name -->
            <div class="col-span-6 sm:col-span-3">
              <label for="Titre" class="text-sm font-medium text-gray-900 block mb-2">Titre</label>
              <input type="text" name="Titre" id="Titre" 
                     class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" 
                     placeholder="Apple Imac 27”">
            </div>
  
            <!-- Category Select -->
            <div class="col-span-6 sm:col-span-3">
              <label for="category" class="text-sm font-medium text-gray-900 block mb-2">Category</label>
              <select name="category" id="category" 
                      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                <option value="" disabled selected>Select a category</option>
                <option value="electronics">Electronics</option>
                <option value="fashion">Fashion</option>
                <option value="home-appliances">Home Appliances</option>
                <option value="books">Books</option>
                <option value="toys">Toys</option>
                <!-- Add more categories as needed -->
              </select>
            </div>
  
            <!-- Auteur -->
            <div class="col-span-6 sm:col-span-3">
              <label for="Auteur" class="text-sm font-medium text-gray-900 block mb-2">Auteur</label>
              <input type="text" name="Auteur" id="Auteur" 
                     class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" 
                     placeholder="Apple">
            </div>
  
            <!-- Price -->
            <div class="col-span-6 sm:col-span-3">
              <label for="Prix" class="text-sm font-medium text-gray-900 block mb-2">Prix</label>
              <input type="number" name="Prix" id="Prix" 
                     class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" 
                     placeholder="$2300">
            </div>
  
            <!-- Product Details -->
            <div class="col-span-6 sm:col-span-3">
              <label for="Fiche Details" class="text-sm font-medium text-gray-900 block mb-2">Fiche Details</label>
              <textarea id="Fiche Details" rows="6" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4" 
                        placeholder="Details"></textarea>
            </div>
  
            <!-- Date Input -->
            <div class="col-span-6 sm:col-span-3">
              <label for="date" class="text-sm font-medium text-gray-900 block mb-2">Date</label>
              <input type="date" v-model="selectedDate" name="date" id="date" 
                     class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
            </div>
          </div>
  
          <!-- Drag and Drop Area -->
          <div class="flex flex-col items-center max-w-md mx-auto mt-4 mb-3">
            <div
              @dragover.prevent="$el.classList.add('border-blue-500')"
              @dragleave.prevent="$el.classList.remove('border-blue-500')"
              @drop.prevent="handleDrop($event)"
              class="w-full p-6 bg-white border-2 border-dashed border-gray-300 rounded-lg hover:border-blue-400 transition-colors flex flex-col items-center cursor-pointer"
            >
              <input type="file" multiple @change="handleFiles" class="hidden" ref="fileInput">
              <div class="text-center" @click="$refs.fileInput.click()">
                <i class="fas fa-cloud-upload-alt fa-3x text-gray-400"></i>
                <p class="text-gray-600 mt-2">Drag your files here or click to upload</p>
              </div>
            </div>
  
            <!-- Display Selected Files -->
            <div v-if="files.length" class="w-full mt-4 space-y-2">
              <h3 class="text-lg font-semibold text-gray-700">Files to Upload:</h3>
              <div
                v-for="(file, index) in files"
                :key="index"
                class="flex items-center justify-between p-2 border rounded-md bg-gray-50"
              >
                <div class="flex items-center space-x-2">
                  <i :class="fileIcon(file)" class="fa-fw text-gray-500"></i>
                  <span class="text-gray-800 font-medium">{{ file.name }}</span>
                </div>
                <span class="text-sm text-gray-500">{{ formatFileSize(file.size) }}</span>
              </div>
            </div>
          </div>
  
          <!-- Submit Button -->
          <div class="p-4 border-t border-gray-200 rounded-b">
            <button class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" 
                    type="submit">Enregister tous</button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        files: [],
        selectedDate: '', // Data property to hold the selected date
      };
    },
    methods: {
      handleFiles(event) {
        this.files = Array.from(event.target.files);
      },
      handleDrop(event) {
        this.files = Array.from(event.dataTransfer.files);
      },
      fileIcon(file) {
        if (file.type.startsWith('image/')) return 'far fa-file-image';
        if (file.type.startsWith('audio/')) return 'far fa-file-audio';
        if (file.type.startsWith('video/')) return 'far fa-file-video';
        if (file.type.startsWith('application/pdf')) return 'far fa-file-pdf';
        return 'far fa-file-alt';
      },
      formatFileSize(size) {
        const i = Math.floor(Math.log(size) / Math.log(1024));
        return `${(size / Math.pow(1024, i)).toFixed(2)} ${['B', 'KB', 'MB', 'GB', 'TB'][i]}`;
      },
    },
  };
  </script>
  
  <style scoped>
  @import "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css";
  </style>
  
<template>
  <div
    v-if="show"
    class="fixed inset-0 bg-White bg-opacity-50 flex items-center justify-center transition-opacity duration-300 ease-out"
    @click.self="$emit('close')"
  >
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full relative transform transition-all duration-500 ease-in-out scale-100 opacity-100">
      <div class="flex justify-center mb-4">
        <i class="fas fa-envelope text-green-500 text-3xl"></i>
      </div>
      <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Verify Your Email</h2>
      <p class="text-gray-600 text-center mb-6">
        Please verify your email to access this feature. We've sent a link to your email address.
      </p>
      <button
        @click="$emit('close')"
        class="bg-green-500 text-white px-6 py-2 rounded-lg w-full font-semibold hover:bg-green-600 transition-colors duration-300"
      >
        Close
      </button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    show: Boolean, 
  },
};
</script>

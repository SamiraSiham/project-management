import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                Poppins: ["Poppins", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // gray: "#4b5563",
                gray:"#d1d5db",
                light : '#f9f9f3',
                dark : '#0c2b4d',
                accent: '#048944',
            },
        },
    },

    plugins: [forms],
};

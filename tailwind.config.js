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
                // primary: "#fc4558",
                gray: "#4b5563",
                light : '#f9f9f3',
                dark : '#0c2b4d',
                // accent : '#407BFF'
                accent: '#87364a',
                // 'accent-2' : '#5df0f1'
            },
        },
    },

    plugins: [forms],
};

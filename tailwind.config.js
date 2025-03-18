import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
    safelist: ["bg-blue-100", "bg-red-100", "bg-indigo-100", "bg-green-100", "bg-yellow-100", "bg-blue-200", "bg-red-200", "bg-indigo-200", "bg-green-200", "bg-yellow-200"]
};

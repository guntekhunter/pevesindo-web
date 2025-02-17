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
                serif: ['DM Serif Display', 'serif'],
                pt: ['PT Serif', 'serif']
            },
            colors: {
                primary: "#FACC00",
                secondary: "#FAFAFA", // Example secondary color
                accent: "#D9D9D9", // Example accent color
                dark: "#1A1A1A", // Example dark theme color
            }
        },
    },

    plugins: [forms],
};

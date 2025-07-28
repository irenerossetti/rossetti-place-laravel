import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

// tailwind.config.js

theme: {
    extend: {
        fontFamily: {
            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            'rossetti-red': '#DC2A48',
            'rossetti-gold': '#EDB026',
            'rossetti-orange': '#E95F30',
            'rossetti-beige': '#F3D9A6',
            'rossetti-maroon': '#8C1E3D',
        },
    },
 },
};

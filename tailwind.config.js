import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        colors: {
            'primary': 'D8D2C2',
            'primary-varient': '4A4947',
            'primary-text': '4A4947',
            'secondary': 'B17457',
            'secondary-varient': '4A4947',
            'secondary-text': 'FAF7F0',
            'surface': 'FAF7F0',
            'surface-text': '4A4947',
            'error': '',
            'error-text': '',
            'transparent' : 'transparent',
        },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};

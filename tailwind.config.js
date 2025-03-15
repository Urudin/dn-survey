import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat', 'sans-serif'],
            },
            colors: {
                lpsRed: '#BF0A1C',
                lpsRedLight: '#EB0A1C',
                lpsOrange: '#FF4013',
                lpsGreen: '#0B8500',
                lpsDarkBlue: '#0D2E4E',
                lpsBlue: '#004FD6',
                lpsGray: '#EDEDED'
            }
        },
    },
    plugins: [],
};

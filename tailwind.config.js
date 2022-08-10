const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
    
                blue: {
                    50: '#f5fcff', 
                    100: '#ebf8fe', 
                    200: '#cdeffd', 
                    300: '#afe5fc', 
                    400: '#74d1fa', 
                    500: '#38BDF8', 
                    600: '#32aadf', 
                    700: '#2a8eba', 
                    800: '#227195', 
                    900: '#1b5d7a'
                },
                buttercup: {
                    50: '#fffbf3', 
                    100: '#fef7e7', 
                    200: '#fdebc4', 
                    300: '#fbdfa0', 
                    400: '#f9c659', 
                    500: '#f6ae12', 
                    600: '#dd9d10', 
                    700: '#b9830e', 
                    800: '#94680b', 
                    900: '#795509'
                },
                balihai: {
                    50: '#f9fafb', 
                    100: '#f3f6f7', 
                    200: '#e0e8eb', 
                    300: '#cedade', 
                    400: '#a9bec6', 
                    500: '#84a2ad', 
                    600: '#77929c', 
                    700: '#637a82', 
                    800: '#4f6168', 
                    900: '#414f55'
                },grey: {
                    50: '#f8f8f6', 
                    100: '#f2f0ee', 
                    200: '#dedad4', 
                    300: '#c9c4ba', 
                    400: '#a19786', 
                    500: '#796b52', 
                    600: '#6d604a', 
                    700: '#5b503e', 
                    800: '#494031', 
                    900: '#3b3428'
                },darkblue: {
                    50: '#f5f5ff', 
                    100: '#ebecff', 
                    200: '#cdcffe', 
                    300: '#afb2fe', 
                    400: '#7479fd', 
                    500: '#383ffc', 
                    600: '#3239e3', 
                    700: '#2a2fbd', 
                    800: '#222697', 
                    900: '#1b1f7b'
                },bluegreen: {
                    50: '#f2fcfd', 
                    100: '#e6f9fc', 
                    200: '#c0f0f7', 
                    300: '#99e7f3', 
                    400: '#4dd6e9', 
                    500: '#01c4e0', 
                    600: '#01b0ca', 
                    700: '#0193a8', 
                    800: '#017686', 
                    900: '#00606e'
                },blackish: {
                    50: '#f4f4f7', 
                    100: '#e9e9ef', 
                    200: '#c9c8d8', 
                    300: '#a9a7c1', 
                    400: '#686492', 
                    500: '#272263', 
                    600: '#231f59', 
                    700: '#1d1a4a', 
                    800: '#17143b', 
                    900: '#131131'
                }
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

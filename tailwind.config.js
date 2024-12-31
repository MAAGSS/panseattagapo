/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                cream: '#fef9e6',
                green: '#355e3b', // Ensure your custom green is defined
                'light-green': '#5e8b7e',
                orange: '#e87a5f',
                yellow: '#fdb827',
            },
        },
    },
    plugins: [],
};

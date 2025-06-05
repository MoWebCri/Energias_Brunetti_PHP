/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        'primary': '#0A2342 ',
        'secondary': '#0A2342',
        'accent': '#43A047',
        'dark': '#0A2342 ',
        'light': '#f8f9fa',
      },
      fontFamily: {
        'sans': ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
} 
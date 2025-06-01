/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
        fontFamily: {
        poppins: ['Poppins', 'sans-serif'],
        sans: ['Poppins', 'sans-serif'],
      },
      colors: {
        'cp-dark-blue': '#312ECB',
        'cp-light-grey': '#A0A0A0',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

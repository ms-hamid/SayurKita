/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'cp-dark-blue': '#312ECB',
        'cp-light-grey': '#A0A0A0',
      },
    },
  },
  plugins: [],
}
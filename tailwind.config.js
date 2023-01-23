/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      colors: {
        laravel: '#ffbb38',
        background: '#f7f7f7',

      },

      // backgroundImage: {
      //   'back': "url('/public/images/bg-img/tracking.jpeg')",
      //   'footer-texture': "url('/img/footer-texture.png')",
      // },
      
      screens: {
        sm: '480px',
        md: '768px',
        lg: '976px',
        xl: '1440px',
      },
      fontFamily: {
          'roboto': '"Roboto"',
          'san': '"sans-serif"',
          'Arapey': '"serif"'


      },
    },
  },
  plugins: [],
}

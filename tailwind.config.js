/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors:{
            primary:'#FF6363',
            secondary:{
                100: '#E2E2D5',
                200: '#888883',
            }
        },
        fontFamily:{
            good_font:['Rubik Moonrocks', 'cursive']
        }
    },
  },
  plugins: [],
}

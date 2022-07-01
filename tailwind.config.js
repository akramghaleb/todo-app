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
            },
            Indigo:{
                100 :'#e0e7ff',
                200 : '#c7d2fe',
                300 :'#a5b4fc',
                400 :'#818cf8',
                500 :'#6366f1',
                600 :'#4f46e5',
                700:'#4338ca',
                800:'#3730a3',
                900:'#312e81'
            }
        },
        fontFamily:{
            good_font:['Rubik Moonrocks', 'cursive']
        }
    },
  },
  plugins: [],
}

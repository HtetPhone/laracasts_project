/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
        'colors' : {
            'black' : '#0f172a'
        }
    },
  },
  plugins: [],
}


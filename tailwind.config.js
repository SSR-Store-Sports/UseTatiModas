/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        gold: {
          dark: '#7A5A12',
          medium: '#C79B2B',
          light: '#F1C24A',
          soft: '#F9E446',
        },
      },
    },
  },
  plugins: [],
}

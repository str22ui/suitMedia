/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        customOrange: '#ff6600',
        // Tambahkan warna kustom lain jika diperlukan
      },
    },
  },
  plugins: [],
}


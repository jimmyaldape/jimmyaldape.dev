module.exports = {
  mode: 'jit',
  purge: [
    './source/**/*.html',
    './source/**/*.vue',
    './source/**/*.jsx',
    './source/**/*.php',
    './source/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
    fontFamily: {
      'sans': ['Poppins', 'Helvetica', 'Arial', 'sans-serif'],
      'display': ['Yellowtail'],
    },
  },
  variants: {},
  plugins: [],
}

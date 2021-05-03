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
  },
  variants: {},
  plugins: [],
}

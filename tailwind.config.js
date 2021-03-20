module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
        transitionProperty: {
            'width': 'width'
        },
    },
  },
  variants: {
    extend: {
        width: ['responsive', 'hover', 'focus', 'active', 'focus-within'],
        visibility: ['active', 'group-hover'],
    },
  },
  plugins: [],
}

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
   theme: {
       colors: {
           'pink': 'var(--pink)',
           'green': 'var(--green)',
           'yellow': 'var(--yellow)',
           'orange': 'var(--orange)',
           'tan': 'var(--tan)',
           'grey': 'var(--grey)',
           'darkgrey': 'var(--darkgrey)',
           'white': 'var(--white)',
           'black': 'var(--black)',
       },
       container: {
           center: true,
           padding: '2.5rem',
       },
       fontFamily: {
           slab: ['Noto Serif Display', 'sans-serif'],
           mono: ['Roboto Mono', 'sans-serif'],
       },
       extend: {},
  },
  plugins: [],
}

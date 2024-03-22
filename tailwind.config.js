/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.{php,html,js,jsx}",'node_modules/preline/dist/*.js'],
  theme: {
    extend: {
      size:{
        '1/14':'18%'
      }
    },
  },
  plugins: [
    require('preline/plugin.d.ts'),

  ],
}


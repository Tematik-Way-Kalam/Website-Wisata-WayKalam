/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    extend: {},
    fontFamily: {
      bigShoulders: ["Big Shoulders Display", "sans-serif"],
      plusJakarta: ["Plus Jakarta Sans", "sans-serif"],
    },
  },
  plugins: [require("daisyui")],
  daisyui: {},
};
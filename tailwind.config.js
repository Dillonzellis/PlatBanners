/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      colors: {
        brandingRed: {
          400: "#b2191e",
        },
        brandingGreen: {
          400: "#045f2c",
        },
      },
      fontFamily: {
        serif: ["Playfair Display, serif"],
      },
    },
  },
  plugins: [],
};

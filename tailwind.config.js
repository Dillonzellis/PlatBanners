/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  prefix: "tw-",
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
      screens: {
        "3xl": "1600px",
        "4xl": "1720px",
      },
    },
  },
  plugins: [],
};

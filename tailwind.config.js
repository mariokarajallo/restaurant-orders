/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        black: "#101010",
        //red
        r300: "#a60e0b",
        r400: "#740a08",

        //yellow
        y300: "#f0b708",
        y400: "#a88006",
      },
    },
  },
  plugins: [],
};


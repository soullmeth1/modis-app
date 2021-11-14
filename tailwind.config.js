const colors = require("tailwindcss/colors");
// console.log(colors);

module.exports = {
    purge: [],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            primary: "#DE6D00",
            primaryFocus: "#C86200",
            lightOrange: "#FF6600",
            white: "#ffffff",
            lightGray: "#ECECEC",
            lightenGray: "#F2F2F2",
            darkGray: "#333333",
            softGray: "#999999",
            yellowLight: "#FDB815",
            purple: "#6A042E",
            lightBlue: "#5863FF",
        },
        extend: {
            gridTemplateColumns: {
                "1/2": "1fr 1.2fr",
            },
            backgroundImage: {
                hero: "linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('../../public/assets/Mask Group 1.png')",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};

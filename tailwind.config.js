/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                redMarkas: "#D90027",
            },
            fontFamily: {
                lexendMega: ["Lexend Mega", "sans-serif"],
            },
        },
    },
    plugins: [],
};

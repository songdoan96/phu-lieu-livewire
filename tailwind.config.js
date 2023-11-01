/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./app/**/*.php",
    ],
    theme: {
        extend: {
            colors: {
                muted: {
                    50: "rgb(248, 250, 252)",
                    100: "rgb(241, 245, 249)",
                    200: "rgb(226, 232, 240)",
                    300: "rgb(203, 213, 225)",
                    400: "rgb(148, 163, 184)",
                    500: "rgb(100, 116, 139)",
                    600: "rgb(71, 85, 105)",
                    700: "rgb(51, 65, 85)",
                    800: "rgb(30, 41, 59)",
                    900: "rgb(15, 23, 42)",
                    950: "rgb(2, 6, 23)",
                },
            },
        },
    },
    plugins: [],
};

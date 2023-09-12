import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },

            colors: {
                delete: "#E03131",
                hoverDelete: "#9E1F1F",
                edit: "#FD7E14",
                hoverEdit: "#CE6208",
                primary: "#52AFBA",
                body: "#F0F0F0",
                hover: "#4997A1",
                header: "#00A1A1",
                footer: "#DAD8D8",
                card: "#F8F8F8",
                cardData: "#D9D9D9",
                font: "#286D75",
                submitButton: "#4997A1",
                sidebar: "#00A1A1",
            },

            fontSize: {
                h3: "36px",
            },
            
            
        },
    },

    plugins: [forms],
};

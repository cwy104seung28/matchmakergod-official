/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php", "./views/*.php", "./src/*.js"],
  theme: {
    screens: {
      xxl: { min: "1701px", max: "1920px" },
      xl: { max: "1700px" },
      lg: { max: "1200px" },
      md: { max: "900px" },
      sm: { max: "600px" },
      desktop: { min: "1200px" },
    },
    fontFamily: {
      sans: ["Noto Sans TC", "sans-serif"],
      serif: ["Noto Serif TC", "serif"],
      en: ["Josefin Sans", "sans-serif"],
      jp: ["IBM Plex Sans JP", "sans-serif"],
    },
    container: {
      center: true,
      screens: false,
    },
    extend: {
      colors: {
        amber: {
          200: "#a1a1a1", //border
          400: "#332b21",
        },
        stone: {
          400: "#c7c1b8",
        },
        red: {
          400: "#9f8980",
        },
        blue: {
          1000: "#00262B",
        },
        green: {
          400: "#DEE2DD",
        },
        white: {
          400: "#FFFFFF",
        },
        gray: {
          400: "#999999",
        }
      },
      fontSize: {
        xs: ["12px"],
        sm: ["14px"],
        base: ["16px"],
        lg: ["18px"],
        xl: ["20px"],
        "2xl": ["24px"], //use
        "3xl": ["26px"], //use
        "3.5xl": ["50px"], //use
        "4xl": ["66px"],
        "5xl": ["86px"],
        "6xl": ["90px"],
        "7xl": ["93px"], //use
        "8xl": ["108px"],
        "9xl": ["160px"], //use
      },
      letterSpacing: {
        tighter: "-2px",
        tight: "-1px",
        none: "0px",
        normal: "1px",
        wide: "3px",
        wider: "6px",
        widest: "9px",
      },
      lineHeight: {
        1.1: "1.1",
        1.2: "1.2",
        1.3: "1.3",
        1.4: "1.4",
        1.5: "1.5",
        1.6: "1.6",
        1.8: "1.8",
        2: "2",
      },
      borderRadius: {
        sm: "7px",
        md: "14px",
        lg: "47px",
        xl: "134px",
      },
      zIndex: {
        60: "60",
        70: "70",
        80: "80",
        90: "90",
      },
      transitionDelay: {
        0: "0s",
      },
      animation: {
        "spin-slow": "spin 10s linear infinite",
      },
      width: {
        fill: "-webkit-fill-available",
      },
      maxWidth: {
        fill: "-webkit-fill-available",
      },
      height: {
        fill: "-webkit-fill-available",
      },
      maxHeight: {
        fill: "-webkit-fill-available",
      },
      
    },
  },

  variants: {
    extend: {},
  },
  plugins: [],
};

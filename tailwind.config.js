const defaultTheme = require('tailwindcss/defaultTheme');
export default {
	content: [
		'./*.php',
		'./template-parts/**/*.php',
		'./src/js/**/*.{js,jsx}',
		'./src/scss/**/*.{scss,css}',
	],
	theme: {
		extend: {
			colors: {
				bgmain: '#FAFAFA',
				primary: '#D2A82B',
				secondary: '#D1A92A',
				navlink: '#121212',
			},
			borderRadius: {
				btn: '32.5px',
			},
			fontFamily: {
				// adds a new “poppins” key
				poppins: ['Poppins', ...defaultTheme.fontFamily.sans],
				// optionally override the default sans:
				// sans: ['Poppins', ...defaultTheme.fontFamily.sans],
			},
		},
	},
	plugins: [],
};

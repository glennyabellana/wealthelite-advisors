const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
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
				cream: '#FDF9ED',
				'gray-light': '#F4F4F4',
				'gray-dark': '#717171',
			},
			borderRadius: {
				btn: '32.5px',
				primary: '3.125rem',
			},
			fontFamily: {
				gotham: ['gotham', ...defaultTheme.fontFamily.sans],
			},
		},
	},
	plugins: [],
};

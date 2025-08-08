import { defineConfig } from 'vite';

export default defineConfig(({ command }) => ({
	root: 'src',
	base:
		command === 'serve'
			? '/'
			: '/wp-content/themes/wealthelite-advisors/dist/',
	build: {
		manifest: true,
		outDir: '../dist',
		emptyOutDir: true,
		rollupOptions: {
			input: {
				main: 'src/js/index.js',
			},
		},
	},
	server: {
		host: true,
		port: 3000,
		cors: true,
		allowedHosts: ['localhost', 'wealtheliteadvisors.test'],
		proxy: {
			'^/(?!(?:@vite/|@fs/|@id/|node_modules/|js/|css/|scss/|assets/|favicon.ico))':
				{
					target: 'http://wealtheliteadvisors.test',
					changeOrigin: false,
					xfwd: true,
					secure: false,
				},
		},
	},
}));

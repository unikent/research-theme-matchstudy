module.exports = {
	build: {
		options: {
			configFile: 'build_config/_eslint_build.json'
		},
		src: [
			'build_config/*.js',
			'Gruntfile.js'
		]
	},
	app: {
		options: {
			configFile: 'build_config/_eslint_app.json'
		},
		src: [
			'assets/scripts/*.js',
			'assets/scripts/**/*.js',
			'!assets/scripts/_*.js',
			'!assets/scripts/**/_*.js',
			'!assets/scripts/child.js',
			'!assets/scripts/child.min.js'
		]
	}
};

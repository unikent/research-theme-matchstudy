module.exports = {
	js: {
		files: [ 'assets/scripts/*.js', 'assets/scripts/**/*.js', '!assets/scripts/**/_*.js', 'assets/scripts/templates/*.hbs' ],
		tasks: [ 'eslint', 'concat', 'uglify:main' ]
	},
	sass: {
		files: [ 'assets/styles/scss/*.scss', 'assets/styles/scss/**/*.scss'],
		tasks: [ 'sass', 'postcss' ]
	}
};

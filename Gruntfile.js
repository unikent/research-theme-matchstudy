module.exports = function(grunt) {

	require('time-grunt')(grunt);

	// Load configs
	var initConfig = require('./build_config/get-config.js')(grunt);
	grunt.initConfig(initConfig);

	// Load tasks
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-eslint');
	grunt.loadNpmTasks('grunt-sass-lint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-cssnano');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-babel');

	// Common tasks
	grunt.registerTask('build_js', ['concat:main', 'babel',  'concat:build']);

	// Define tasks
	grunt.registerTask('development', [ 'eslint', 'build_js', 'sass', 'postcss']);
	grunt.registerTask('production', [ 'eslint', 'build_js', 'uglify:main', 'sass', 'postcss', 'cssnano']);
	grunt.registerTask('default', [ 'development' ]);
};

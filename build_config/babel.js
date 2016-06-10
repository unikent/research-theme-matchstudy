module.exports = {
	options: {
		sourceMap: true,
		presets: ['es2015'],
		compact: true
	},
	dist: {
		files: {
			'tmp/child.compiled.js': 'tmp/child.js'
		}
	}
};

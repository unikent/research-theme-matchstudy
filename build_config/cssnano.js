module.exports = {
	options: {
		sourcemap: false
	},
	dist: {
		files: [
			{
				expand: true,     // Enable dynamic expansion.
				cwd: 'assets/styles/',      // Src matches are relative to this path.
				src: ['*.css'], // Actual pattern(s) to match.
				dest: 'assets/styles/',   // Destination path prefix.
				ext: '.min.css',   // Dest filepaths will have this extension.
				extDot: 'first'   // Extensions in filenames begin after the first dot
			}
		]
	}
};

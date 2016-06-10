module.exports = {
	main: {
		src:[
			'assets/scripts/components/child.js'
		],
		dest: 'tmp/child.js'
	},
	build: {
		src:[
			'tmp/child.compiled.js'
		],
		dest: 'assets/scripts/child.js'
	}
};

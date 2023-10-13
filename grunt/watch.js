module.exports = {
  css: {
    files: [
      'assets/scss/*.scss',
      'assets/scss/*/*.scss'
    ],
    tasks: ['sass', 'postcss'],
    options: {
      spawn: false,
    }
  },
  scripts: {
    files: [
      'assets/js/1_vendor/*.js',
      'assets/js/2_global/*.js',
      'assets/js/3_pages/*.js',
      'assets/build/js/*.js'
      ],
    tasks: ['concat', 'uglify'],
    options: {
      spawn: false,
    },
  }
};

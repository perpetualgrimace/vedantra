module.exports = {
  dist: {
    options: {
      style: 'compressed'
    },
    files: {
      'assets/build/css/main.css': 'assets/scss/main.scss',
      'assets/build/css/motion.css': 'assets/scss/motion.scss',
    },
    loadPath: [
      'assets/scss/*'
    ]
  }
};

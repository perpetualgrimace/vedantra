module.exports = {
  dynamic: {
    files: [{
      expand: true,
      cwd: '',
      src: ['**/*.{png,jpg,gif}'],
      dest: ''
    }],
    options: {
      progressive: true,
      optimizationLevel: 5
    },
  }
};

module.exports = {
  options: {
    map: true,
    processors: [
      require('pixrem')(),
      require('autoprefixer')({browsers: 'last 3 versions, > 2%'})
    ]
  },
  dist: {
    src: 'assets/build/css/*.css'
  }
};

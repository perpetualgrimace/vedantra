module.exports = {
  bsFiles: {
    src: ['assets/build/css/*.css', 'assets/build/js/production.min.js', 'content/**/*.txt', 'site/**/*.php']
  },
  options: {
    proxy: "localhost:8888/vedantra.com"
  }
};

module.exports = {
  phase1: ['newer:sass', 'newer:concat'],
  phase2: ['newer:postcss', 'newer:uglify'],
  phase3: ['browserSync', 'watch']
};

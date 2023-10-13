module.exports = {
  huge: {
    options: {
      sizes: [{
        name: 'tiny',
        width: '25%',
        quality: 95
      },{
        name: 'small',
        width: '50%',
        quality: 85
      }]
    },
    files: [{
      expand: true,
      src: [
        '**/header.{jpg,png}',
        '**/background.{jpg,png}'
      ],
    }]
  }
};

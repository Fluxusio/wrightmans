module.exports = function (grunt, options) {
  return {
    install: {
      options: {
        template: '.githooks.js.hbs'
      },
      // Change to something else once the {{ hook }} variable can be used.
      // @see https://github.com/wecodemore/grunt-githooks/pull/40
      'pre-commit': 'pre-commit',
      'post-merge': 'post-merge',
<<<<<<< HEAD
      'post-checkout': 'post-checkout',
      'post-commit': 'post-commit'
=======
      'post-checkout': 'post-checkout'
>>>>>>> 638d6a829b84c64ae8d5580f52627532f1948966
    }
  };
};

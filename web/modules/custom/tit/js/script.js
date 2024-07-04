(function (Drupal, once) {
  Drupal.behaviors.exampleBehavior = {
    attach: function (context, settings) {
      once('exampleBehavior', '.site-branding__inner', context).forEach(function (element) {
        var message = Drupal.t('Hello, world! Sanket js');
        console.log(message);
      });
    }
  };
})(Drupal, once);
function count(id, start, end, duration, prefix='', suffix='') {
    $(id).each(function () {
        var $this = $(this);
        jQuery({ Counter: start }).animate({ Counter: end }, {
          duration: duration,
          easing: 'swing',
          step: function (now) {
            $this.text(prefix + Math.ceil(now) + suffix);
          }
        });
      });
      
}
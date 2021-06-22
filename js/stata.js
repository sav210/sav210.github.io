function refresh_stata(count = false){
    $.getJSON('https://cymonprojects.000webhostapp.com/crashprotect/main_page.json', function(data) {
        if(count){
            $('#servers').each(function () {
                var $this = $(this);
                jQuery({ Counter: Number($this.text)}).animate({ Counter: data["servers"] }, {
                  duration: 1000,
                  easing: 'swing',
                  step: function (now) {
                    $this.text(Math.ceil(now));
                  }
                });
              }); 
              $('#shards').each(function () {
                var $this = $(this);
                jQuery({ Counter: Number($this.text) }).animate({ Counter: data["shards"] }, {
                  duration: 1000,
                  easing: 'swing',
                  step: function (now) {
                    $this.text(Math.ceil(now));
                  }
                });
              });             
        }
        else{
            document.getElementById("servers").innerHTML = data["servers"];
            document.getElementById("shards").innerHTML = data["shards"];
        }
    });
}
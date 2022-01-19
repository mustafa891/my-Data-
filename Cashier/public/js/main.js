
function Sound(sound) {
    var audio =  document.createElement('audio');
    audio.src = 'audio/'+sound+'.mp3';
    audio.play();
}


(function(undefined) {
    "use strict";
    function Q(el) {
        if (typeof el === "string") {
            var els = document.querySelectorAll(el);
            return typeof els === "undefined" ? undefined : els.length > 1 ? els : els[0];
        }
        return el;
    }

    
    function table() {
        var token = document.getElementById('token').value;
        $.post('http://localhost/Cashier/public/tbview', { _token : token  }, function(response) {
            $('.tb').html(response);
        });
    }

    var play = Q("#play"),
    args = {
        resultFunction: function(res) {
            var id = res.code;
            var token = document.getElementById('token').value;
             $.post('http://localhost/Cashier/public/sale', {id : id, _token : token }, function (res) {
                    if (res.message == 'success') {
                        table();
                       document.getElementById('message').textContent = "";
                    }else {
                        console.log(res.message);
                        Sound('fail');
                       document.getElementById('message').textContent = res.message;
                    }
             });
        }
        
    };
    var decoder = new WebCodeCamJS("#webcodecam-canvas").buildSelectMenu("#camera-select", "environment|back").init(args);
    play.addEventListener("click", function() {
        decoder.play();
    }, false);
  
    document.querySelector("#camera-select").addEventListener("change", function() {
        if (decoder.isInitialized()) {
            decoder.stop().play();
        }
    });
}).call(window.Page = window.Page || {});
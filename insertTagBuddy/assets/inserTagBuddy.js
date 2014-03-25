!(function() {

    "use strict"

    var insertTagBuddy = (function() {


        window.addEvent('ready', function() {
            var kw = new wordevents({
                event_type: 'keydown',
                digit_interval: 500,
                acceptedCode: function(code) {

                    return (code > 64 && code < 91) || false;
                }
            });
            kw.listen('itag', function(evts) {
                alert('lol');
            });

            kw.activate();
        })

    })();

})();
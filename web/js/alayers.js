
    function addLayer(name) {
//        var map = $('#mapView').data('map');
//        map.addLayer(name);
alert(map.getSize());
    }
        
    var aLayers = aLayers || (function(){
            var _args = {}; // private

            return {
                init : function(Args) {
                    _args = Args;
                    // some other initialising
                },
                helloWorld : function() {
                    _args.forEach(function(layer){
                        var source = (Function('return new ' + layer.sourcetype))();
                        source.setUrl(layer.source);
                        source.setProperties(layer.params);
                        window['layer.name'] = (Function('return new ' + layer.type))();
                        window['layer.name'].set('name',layer.name);
                        window['layer.name'].setSource(source);
                        addLayer(window['layer.name']);
                        alert(window['layer.name'].get('name'));
                    })
                }
            };
        }());

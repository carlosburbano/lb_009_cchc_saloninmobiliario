$( document ).ready(function() {

})

$( window ).resize(function() {

});

var tipo = 'mobile';
enquire.register("screen and (min-width:768px)", {

    match : function() {
    	tipo = 'desktop';
    },
    unmatch : function() {
    	tipo = 'mobile'
    },
    setup : function() {},    
                                
    // OPTIONAL, defaults to false
    // If set to true, defers execution of the setup function 
    // until the first time the media query is matched
    deferSetup : true,
    destroy : function() {}
      
});

$( ".clickable" ).click(function() {
	console.log('alerta:' + tipo);
	
	if(tipo == 'desktop'){
		location.href = $(this).attr('href');
	}
});

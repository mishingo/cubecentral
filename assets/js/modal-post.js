$(document).ready(function() {

	var modalTrigger = $('.cd-modal-trigger'),
		transitionLayer = $('.cd-transition-layer'),
		transitionBackground = transitionLayer.children(),
		modalWindow = $('.cd-modal');

	var frameProportion = 1.78, //png frame aspect ratio
		frames = transitionLayer.data('frame'), //number of png frames
		resize = false;

	setLayerDimensions();
	$(window).on('resize', function(){
		if( !resize ) {
			resize = true;
			(!window.requestAnimationFrame) ? setTimeout(setLayerDimensions, 300) : window.requestAnimationFrame(setLayerDimensions);
		}
	});

   /*var router = new Navigo(root = null, useHash=true);
   router
   .on('/:id', function (params) {
    	console.log(params.id);
	 	if(params.id != "shutupletstalk"){
			var modalId = params.id;
			transitionLayer.addClass('visible opening');
			var delay = ( $('.no-cssanimations').length > 0 ) ? 0 : 800;
			setTimeout(function(){
			   //modalWindow.filter(modalId).addClass('visible');
				if(params.id.substring(0, 2) == "##"){
					params.id.replace("##", "");
				}
				if(params.id.substring(0, 1) == "#"){
					params.id.replace("#", "");
				}
				//$(params.id).addClass('visible');

				if ($("#"+params.id).length){
					//if(params.id != null){
							$("#"+params.id).addClass('visible');
							//document.getElementById(params.id).className = "visible";
					//}
				}

				//document.getElementById(params.id).className = "visible";
			   transitionLayer.removeClass('opening');
			}, 800);

	 	}
   })
   .resolve();*/

	var router = new Navigo(root = null, useHash=true);
	var router_pathname = location.pathname;

   router
   .on('/:id', function (params) {
		if(location.hash != ""){
			if ($("#"+params.id).length){
				transitionLayer.addClass('visible opening');
				var delay = ( $('.no-cssanimations').length > 0 ) ? 0 : 800;
				setTimeout(function(){
					console.log(params.id)
					var link = params.id;
					if (link.indexOf('#') > -1){
  						$(params.id).addClass('visible');
					}else{
						$("#"+params.id).addClass('visible');
					}


					transitionLayer.removeClass('opening');
				}, 800);
			}
		}


	})
	.resolve();

	/*var router = new Navigo(root = null, useHash = true);
   var router_pathname = location.pathname;
	console.log(router_pathname);
   router
   .on(router_pathname + "#:id", function(params) {
       console.log(params);
		 console.log(params.id);

 			var modalId = params.id;
 			transitionLayer.addClass('visible opening');
 			var delay = ( $('.no-cssanimations').length > 0 ) ? 0 : 800;
 			setTimeout(function(){

 				$("#"+params.id).addClass('visible');

 			   transitionLayer.removeClass('opening');
 			}, 800);


   })
   .resolve();*/


	modalWindow.on('click', '.modal-close', function(event){
		event.preventDefault();
		router.navigate('your-a-dick');
		transitionLayer.addClass('closing');
		modalWindow.removeClass('visible');
		transitionBackground.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
			transitionLayer.removeClass('closing opening visible');
			transitionBackground.off('webkitAnimationEnd oanimationend msAnimationEnd animationend');
		});
	});

	function setLayerDimensions() {
		var windowWidth = $(window).width(),
			windowHeight = $(window).height(),
			layerHeight, layerWidth;

		if( windowWidth/windowHeight > frameProportion ) {
			layerWidth = windowWidth;
			layerHeight = layerWidth/frameProportion;
		} else {
			layerHeight = windowHeight*1.2;
			layerWidth = layerHeight*frameProportion;
		}

		transitionBackground.css({
			'width': layerWidth*frames+'px',
			'height': layerHeight+'px',
		});

		resize = false;
	}
});
/*
jQuery(document).ready(function($){
	//cache some jQuery objects
	var modalTrigger = $('.cd-modal-trigger'),
		transitionLayer = $('.cd-transition-layer'),
		transitionBackground = transitionLayer.children(),
		modalWindow = $('.cd-modal');

	var frameProportion = 1.78, //png frame aspect ratio
		frames = transitionLayer.data('frame'), //number of png frames
		resize = false;

	//set transitionBackground dimentions
	setLayerDimensions();
	$(window).on('resize', function(){
		if( !resize ) {
			resize = true;
			(!window.requestAnimationFrame) ? setTimeout(setLayerDimensions, 300) : window.requestAnimationFrame(setLayerDimensions);
		}
	});

	//open modal window
	modalTrigger.on('click', function(event){
		event.preventDefault();
		var modalId = $(event.target).attr('href');
		transitionLayer.addClass('visible opening');
		var delay = ( $('.no-cssanimations').length > 0 ) ? 0 : 800;
		setTimeout(function(){
			modalWindow.filter(modalId).addClass('visible');
			transitionLayer.removeClass('opening');
		}, delay);

	});

	//close modal window
	modalWindow.on('click', '.modal-close', function(event){
		event.preventDefault();
		transitionLayer.addClass('closing');
		modalWindow.removeClass('visible');
		transitionBackground.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(){
			transitionLayer.removeClass('closing opening visible');
			transitionBackground.off('webkitAnimationEnd oanimationend msAnimationEnd animationend');
		});
	});

	function setLayerDimensions() {
		var windowWidth = $(window).width(),
			windowHeight = $(window).height(),
			layerHeight, layerWidth;

		if( windowWidth/windowHeight > frameProportion ) {
			layerWidth = windowWidth;
			layerHeight = layerWidth/frameProportion;
		} else {
			layerHeight = windowHeight*1.2;
			layerWidth = layerHeight*frameProportion;
		}

		transitionBackground.css({
			'width': layerWidth*frames+'px',
			'height': layerHeight+'px',
		});

		resize = false;
	}
});

*/

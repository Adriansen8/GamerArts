/* 2. Incrementer & decrementer
-----------------------------------------------------------------------------------------
*/
$(document).ready(function(){

	$("#boton_desaparecer").click(function(){
		$("#paginaContainer").hide();
	});

 	var theWindow = $(window),
	   $bg = $("#bg"),
	   aspectRatio = $bg.width() / $bg.height();
	   function resizeBg() {
	      if ((theWindow.width() / theWindow.height()) < aspectRatio)
	      {
	         $bg.removeClass().addClass('bgheight');
	      } else {
	         $bg.removeClass().addClass('bgwidth');
	      }
	   }
	   theWindow.resize(resizeBg).trigger("resize");
	
});
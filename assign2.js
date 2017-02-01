$(document).ready(function(e){
	jQuery('#click').click(function () {
     alert("you clicked on the achor tag"); 
    });
    jQuery('#dblclick').dblclick(function () {
     alert("you double clicked on the achor tag"); 
    });
    jQuery('#hover').hover(function () {
     alert("you hover on the achor tag"); 
    });
    jQuery('#mouseout').mouseout(function () {
     alert("you mouseout on the achor tag"); 
    });
    jQuery('#focus').focus(function (e) {
     alert("you focus on the achor tag");
    }); 
    jQuery('#mouseover').mouseover(function () {
     alert("you mouseover on the achor tag"); 
    });
    
   
});
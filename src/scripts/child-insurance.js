//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches



$(".submit").click(function(){
  return false;
})




// $( "#spoud-fields" ).toggle(); //Hide classes at the beggining when checkboxes are not checked

if($('#spoud').is(':checked')) { 
      $( "#spoud-fields" ).show();
    }
    else{
      $( "#spoud-fields" ).hide();
    }




$( "#spoud" ).on("change",function() {
  // $( "#spoud-fields" ).toggle( "slow", function() {
  //   // Animation complete.
  // });
  if($('#spoud').is(':checked')) { 
      $( "#spoud-fields" ).show( "slow", function() {
    // Animation complete.
  });
    }
    else{
      $( "#spoud-fields" ).hide( "slow", function() {
    // Animation complete.
  });
  }
});





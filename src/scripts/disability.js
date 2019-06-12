//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches



$(".submit").click(function(){
  return false;
})




// $( "#metakin-fields" ).toggle(); //Hide classes at the beggining when checkboxes are not checked

if($('#metakin').is(':checked')) { 
      $( "#metakin-fields" ).show();
    }
    else{
      $( "#metakin-fields" ).hide();
    }



$( "#metakin" ).on("change",function() {
  // $( "#metakin-fields" ).toggle( "slow", function() {
  //   // Animation complete.
  // });
  if($('#metakin').is(':checked')) { 
      $( "#metakin-fields" ).show( "slow", function() {
    // Animation complete.
  });
    }
    else{
      $( "#metakin-fields" ).hide( "slow", function() {
    // Animation complete.
  });
  }
});





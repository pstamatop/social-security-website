//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
      // previous_fs.css({'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".submit").click(function(){
  return false;
})

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  console.log(confirm_password.value);
  if(password.value != null && password.value != "" && confirm_password.value != "" && password.value != confirm_password.value) {
    $('input[data="popover2"]').popover('show');
    console.log("WRONG");
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    console.log("here");

    $('input[data="popover2"]').popover('hide');
    confirm_password.setCustomValidity('');
  }
  // popover
  // var confirm_password = $();
}

// $(document).ready(function(){
//     $('[data-toggle="popover2"]').popover('hide');   
// });

$('[data="popover2"]').click(validatePassword);

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

// $( "#insured-fields" ).toggle(); //Hide classes at the beggining when checkboxes are not checked
// $( "#employer-fields" ).toggle(); 
$( "#not-natural-fields" ).toggle(); 
if($('#not-natural').is(':checked')) { 
      $( "#not-natural-fields" ).show();
    }
    else{
      $( "#not-natural-fields" ).hide();
    }

if($('#insured').is(':checked')) { 
      $( "#insured-fields" ).show();
    }
    else{
      $( "#insured-fields" ).hide();
    }

if($('#employer').is(':checked')) { 
      $( "#employer-fields" ).show();
    }
    else{
      $( "#employer-fields" ).hide();
    }


$( "#insured" ).on("change",function() {
  // $( "#insured-fields" ).toggle( "slow", function() {
  //   // Animation complete.
  // });
  if($('#insured').is(':checked')) { 
      $( "#insured-fields" ).show( "slow", function() {
    // Animation complete.
  });
    }
    else{
      $( "#insured-fields" ).hide( "slow", function() {
    // Animation complete.
  });
  }
});

$( "#employer" ).on("change",function() {
  // $( "#employer-fields" ).toggle( "slow", function() {
  //   // Animation complete.
  // });
  if($('#employer').is(':checked')) { 
      $( "#employer-fields" ).show( "slow", function() {
    // Animation complete.
  });
    }
    else{
      $( "#employer-fields" ).hide( "slow", function() {
    // Animation complete.
  });
  }
});



$('.radio-b').click(function() {
   if($('#not-natural').is(':checked')) { 
      $( "#not-natural-fields" ).show( "slow", function() {
    // Animation complete.
  });
    }
    else{
      $( "#not-natural-fields" ).hide( "slow", function() {
    // Animation complete.
  });
    }
});


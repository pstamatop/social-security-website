// $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
//   if (!$(this).next().hasClass('show')) {
//     $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
//   }
//   var $subMenu = $(this).next(".dropdown-menu");
//   $subMenu.toggleClass('show');


//   $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
//     $('.dropdown-submenu .show').removeClass("show");
//   });


//   return false;
// });

var timeout;
// var setTimeout(function() {}, 10);
$('body').on('mouseenter','.dropdown',function(e){
  $('.dropdown.show').removeClass('show');
  clearTimeout(timeout);
  var _d=$(e.target).closest('.dropdown');_d.addClass('show');
  // setTimeout(function(){
  //   _d[_d.is(':hover')?'addClass':'removeClass']('show');
  // },500);
});

$('body').on('mouseleave ','.dropdown',function(e){
  // $('.dropdown .show').removeClass('show');
  var _d=$(e.target).closest('.dropdown');
  timeout = setTimeout(function(){
    _d[_d.is(':hover')?'addClass':'removeClass']('show');
  },700);
});

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
});

$(document).ready(function() {
    $(".input-group > input").focus(function(e){
        $(this).parent().addClass("input-group-focus");
    }).blur(function(e){
        $(this).parent().removeClass("input-group-focus");
    });
});



// $('#submit').click(function() {
//     $.ajax({
//         url: 'send_email.php',
//         type: 'POST',
//         data: {
//             email: 'email@example.com',
//             message: 'hello world!'
//         },
//         success: function(msg) {
//             alert('Email Sent');
//         }               
//     });
// });


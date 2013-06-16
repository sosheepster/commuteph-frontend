
$('.add-direction').on('click', function(event){
  // alert($(this).attr('class'));
  var page_src = 'widgets/',
      page     = '';

  if($(this).hasClass('add-walk')){
    page = page_src + 'add-walk.php';
  }
  else if($(this).hasClass('add-trike')){
    page = page_src + 'add-trike.php';
  }
  else if($(this).hasClass('add-jeep')){
    page = page_src + 'add-jeep.php';
  }
  else if($(this).hasClass('add-bus')){
    page = page_src + 'add-bus.php';
  }
  else if($(this).hasClass('add-fx')){
    page = page_src + 'add-fx.php';
  }
  else if($(this).hasClass('add-mrt')){
    page = page_src + 'add-mrt.php';
  }
  else if($(this).hasClass('add-lrt')){
    page = page_src + 'add-lrt.php';
  }
  else if($(this).hasClass('add-lrt2')){
    page = page_src + 'add-lrt2.php';
  }
  else if($(this).hasClass('add-alight')){
    page = page_src + 'add-alight.php';
  }

  $.get(page, function (data) {
      $('.route-building').append(data);
  });

  if($('.button.save-directions').hasClass('hide')) {
    $('.button.save-directions').removeClass('hide');
  }

});


$(".route-building").on('click', '.delete-fieldset', function () { 
  // alert($(this).parent().attr('class'));
  $(this).parent().remove();
  event.preventDefault();
});
$('.select_justif').on('change', function() {
  $('.justif_doc').removeClass('hide');
});
$('.justif_doc').on('click', function() {
  $('.justif_doc span').removeClass('hide');
  $('.preloader-wrapper').removeClass('hide');

  setTimeout(function(){
    $('.preloader-wrapper').addClass('hide');
    $('.extracted_data').removeClass('hide');
  }, 2000);
});

$('.button_browse').on('click', function() {
    M.toast({
      html: 'On considère ici que l\'utilisateur choisit un document à envoyer.',
    });
});

$('.option_offer_type').click(function() {
  var option = $(this).text();
  if (option=="Classique") {
    $('.button_ok_option').attr('href', 'partner_newcase.php?type=classic');

  }
  else if (option=="Solidarité") {
    console.log(option);
    $('.button_ok_option').attr('href', 'partner_newcase.php?type=fair');
  }
});

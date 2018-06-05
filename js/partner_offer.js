// Remember selected offer
$('.card_offer').click(function() {

  var selected_offer = $(this).text().trim();
  $('#selected_offer').text(selected_offer);

  $(document.body).append('<div id="selected_offer" class="hidden">'+selected_offer+'</div>');

  var href='partner_newcase.php?offer='+selected_offer+'&type='+$('#selected_type').text();
  $('.button_ok_option').attr('href', href);

  console.log("offer : "+$('#selected_offer').text()+' ; type : '+$('#selected_type').text());
});


// Redirect to selected type offer
$('.option_offer_type').click(function() {
  var selected_offer = $('#selected_offer').text();
  var href='partner_newcase.php?offer='+selected_offer;
  var option = $(this).text();

  if (option=="Classique") {
    var type = 'classic';
  }
  else if (option=="Solidarité") {
    var type = 'fair';
  }
  $('#selected_type').text(type);
  $('.button_ok_option').attr('href', href+'&type='+type);

  console.log("offer : "+$('#selected_offer').text()+' ; type : '+$('#selected_type').text());
});

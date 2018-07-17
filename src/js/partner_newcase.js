$('.option_document').click(function() {
  var selected_item = $(this).text().trim();

  if (selected_item == "Avis d'imposition") {
    selected_item="avis";
  }
  else if (selected_item == "Acte notarial"){
    selected_item="acte";
  }
  var href='partner_domic.php?document='+selected_item;
  $('#button_ok_newcase').attr('href', href);

});

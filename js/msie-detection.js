if (navigator.appName == 'Microsoft Internet Explorer' ||  !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/)) || (typeof $.browser !== "undefined" && $.browser.msie == 1))
{
  // alert("Please dont use IE.");
  document.body.innerHTML = "Internet Explorer n'est pas compatible avec cette maquette.</br> Navigateurs acceptés : Firefox, Chrome, Edge";
}

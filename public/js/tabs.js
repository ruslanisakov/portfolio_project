/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/tabs.js ***!
  \*****************************/
// Acc
$(document).on("click", ".naccs .menuu div", function () {
  var numberIndex = $(this).index();

  if (!$(this).is("active")) {
    $(".naccs .menuu div").removeClass("active");
    $(".naccs ul li").removeClass("active");
    $(this).addClass("active");
    $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");
    var listItemHeight = $(".naccs ul").find("li:eq(" + numberIndex + ")").innerHeight();
    $(".naccs ul").height(listItemHeight + "px");
  }
});
$('.naccs .menuu div').click(); // click
/******/ })()
;

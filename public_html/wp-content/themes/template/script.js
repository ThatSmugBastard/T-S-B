var $ = jQuery;
$(document).ready(function(){
  $('.container').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
});
$.ajax({
    dataType: "json",
    url: "https://jsonplaceholder.typicode.com/posts",
    success: function(response){
        console.log (response)
    }
  });
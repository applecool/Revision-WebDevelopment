var main = function() {
    $('.btn').click(function() {
         var post = $('.status-box').val();
         $('<li>').text(post).prependTo('.posts');
        });
        
      $('.status-box').keyup(function(){
         var postLength = $(this).val().length();
         var charactersLeft = 140 - postLength;
         $('.counter').text(charactersLeft);
        });
};

$(document).ready(main);
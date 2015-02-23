var main = function() {
    $('.btn').click(function() {
         var post = $('.status-box').val();
         $('<li>').text(post).prependTo('.posts');
        });
};

$(document).ready(main);
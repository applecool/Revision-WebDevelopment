var main = function(){
    $('.article').click(function(){
        $(this).children('.description').show();
    });
};

$(document).ready(main);
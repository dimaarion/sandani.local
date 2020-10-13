$(document).ready(function () {
    $('#content img').eq(0).before('<div class = "container" id = "imagesBlockArticles"></div>');
    $('#imagesBlockArticles').append($('#content img').eq(0));
    $('#content img').eq(0).css(
        {
            padding:'10px',
            width:'100%',
            margin: 'auto',
            float:'inline-end'
           

        }
    );
    $('#content img').map(function (x) { 
       (x !== 0)? $('#content img').eq(x).css({
           padding: '10px',
           width: '30%',
       }):''
     })
  
   
});
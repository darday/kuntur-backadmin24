$(function(){

    $('#film').on('change',director);

});

function director( ){

    var film_id = $(this).val();

    //ajax

    $.get('/kunturfinal/public/api/programacion/'+film_id+'/director',function(data){
        console.log(data);
        html_select=""
        for(var i=0; i<data.length;i++)
           html_select += '<label name="pro_Director" value="'+ data[i].film_Director+'">'+data[i].film_Director+'</label> <input type="hidden" name="pro_Director" value="'+ data[i].film_Director+'">';

           console.log(html_select);
        $("#dir").html(html_select);

    });
    $.get('api/programacion/'+film_id+'/director',function(data){
        console.log(data);
        html_select=""
        for(var i=0; i<data.length;i++)
           html_select += '<label name="pro_Director" value="'+ data[i].film_Director+'">'+data[i].film_Director+'</label> <input type="hidden" name="pro_Director" value="'+ data[i].film_Director+'">';

           console.log(html_select);
        $("#dir").html(html_select);

    });

}
$(function () {
    $('[data-toggle="popover"]').popover({
        placement:"right",
        trigger:'hover',
        delay: 500

    })
  })


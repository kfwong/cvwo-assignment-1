$('.moment').each(function(index){
    $(this).text(moment($(this).text(),'YYYY-MM-DD hh:mm:ss').fromNow());
});
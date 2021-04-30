$(document).ready(function (){
    let url, formData, errorSection;

    $('.addScoresForm').submit(function (e){
        e.preventDefault();
        errorSection = $('.errorSection');
        url = $(this).attr('action');
        $.post(url, $(this).serialize(), function(response){
            if (response.code == 401){
                errorSection.html('<p class="text-danger">' + response.msg + '</p>');
            }else{
                errorSection.html('<p class="text-success">'+ response.msg + '</p>')
            }
        })
    })


})

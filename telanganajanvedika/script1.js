
$(".chb").change(function() {
    $(".chb").not(this).prop('checked', false);
});

$(function(){
    $("#content1").click(function(event) {
        var x = $(this).is(':checked');
        if (x == true) {
            $(this).parents(".container").find('.content2').hide();
            $(this).parents(".container").find('.content3').hide();
            $(this).parents(".container").find('.content4').hide();
            $(this).parents(".container").find('.content5').hide();
            $(this).parents(".container").find('.content1').slideToggle("slow");
        }
        else{
            $(this).parents(".container").find('.content1').slideToggle("slow");
        }
});


$("#content2").click(function(event) {
        var x = $(this).is(':checked');
        if (x == true) {
            $(this).parents(".container").find('.content1').hide();
            $(this).parents(".container").find('.content3').hide();
            $(this).parents(".container").find('.content4').hide();
            $(this).parents(".container").find('.content5').hide();
            $(this).parents(".container").find('.content2').slideToggle("slow");
        }
        else{
            $(this).parents(".container").find('.content2').slideToggle("slow");
        }
});


$("#content3").click(function(event) {
        var x = $(this).is(':checked');
        if (x == true) {
            $(this).parents(".container").find('.content1').hide();
            $(this).parents(".container").find('.content2').hide();
            $(this).parents(".container").find('.content4').hide();
            $(this).parents(".container").find('.content5').hide();
            $(this).parents(".container").find('.content3').slideToggle("slow");
        }
        else{
            $(this).parents(".container").find('.content3').slideToggle("slow");
        }
});


$("#content4").click(function(event) {
        var x = $(this).is(':checked');
        if (x == true) {
            $(this).parents(".container").find('.content1').hide();
            $(this).parents(".container").find('.content3').hide();
            $(this).parents(".container").find('.content2').hide();
            $(this).parents(".container").find('.content5').hide();
            $(this).parents(".container").find('.content4').slideToggle("slow");
        }
        else{
            $(this).parents(".container").find('.content4').slideToggle("slow");
        }
});


$("#content5").click(function(event) {
        var x = $(this).is(':checked');
        if (x == true) {
            
            $(this).parents(".container").find('.content1').hide();
            $(this).parents(".container").find('.content3').hide();
            $(this).parents(".container").find('.content4').hide();
            $(this).parents(".container").find('.content2').hide();
            $(this).parents(".container").find('.content5').slideToggle("slow");
        }
        else{
            $(this).parents(".container").find('.content5').slideToggle("slow");
        }
    });

})

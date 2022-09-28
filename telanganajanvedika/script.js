
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

    $("#content6").click(function(event) {
        var x = $(this).is(':checked');
        if (x == true) {
            $(this).parents(".container").find('.mobile-navbar').hide();
            $(this).parents(".container").find('.content7').hide();
            $(this).parents(".container").find('.content8').hide();
            $(this).parents(".container").find('.content9').hide();
            $(this).parents(".container").find('.content10').hide();
            $(this).parents(".container").find('.content6').slideToggle("slow");
        }
        else{
            $(this).parents(".container").find('.content6').slideToggle("slow");
        }
    });
    $("#content7").click(function(event) {
        var x = $(this).is(':checked');
        if (x == true) {
            $(this).parents(".container").find('.mobile-navbar').hide();
            $(this).parents(".container").find('.content6').hide();
            $(this).parents(".container").find('.content8').hide();
            $(this).parents(".container").find('.content9').hide();
            $(this).parents(".container").find('.content10').hide();
            $(this).parents(".container").find('.content7').slideToggle("slow");
        }
        else{
            $(this).parents(".container").find('.content7').slideToggle("slow");
        }
    });
    $("#content8").click(function(event) {
        var x = $(this).is(':checked');
        if (x == true) {
            $(this).parents(".container").find('.mobile-navbar').hide();
            $(this).parents(".container").find('.content6').hide();
            $(this).parents(".container").find('.content7').hide();
            $(this).parents(".container").find('.content9').hide();
            $(this).parents(".container").find('.content10').hide();
            $(this).parents(".container").find('.content8').slideToggle("slow");
        }
        else{
            $(this).parents(".container").find('.content8').slideToggle("slow");
        }
    });
    $("#content9").click(function(event) {
        var x = $(this).is(':checked');
        if (x == true) {
            $(this).parents(".container").find('.mobile-navbar').hide();
            $(this).parents(".container").find('.content6').hide();
            $(this).parents(".container").find('.content7').hide();
            $(this).parents(".container").find('.content8').hide();
            $(this).parents(".container").find('.content10').hide();
            $(this).parents(".container").find('.content9').slideToggle("slow");
        }
        else{
            $(this).parents(".container").find('.content9').slideToggle("slow");
        }
    });
    $("#content10").click(function(event) {
        var x = $(this).is(':checked');
        if (x == true) {
            $(this).parents(".container").find('.mobile-navbar').hide();
            $(this).parents(".container").find('.content6').hide();
            $(this).parents(".container").find('.content7').hide();
            $(this).parents(".container").find('.content8').hide();
            $(this).parents(".container").find('.content9').hide();
            $(this).parents(".container").find('.content10').slideToggle("slow");
        }
        else{
            $(this).parents(".container").find('.content10').slideToggle("slow");
        }
    });
    
})

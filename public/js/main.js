$(document).ready(function(){
$('.slider').bxSlider({
    slideWidth: 600,
    mode: 'horizontal',
    pager: false,
    minSlides: 3,
    maxSlides: 4,
    moveSlides: 1,
    slideMargin: 1

});
});

function myMap() {
    var myCenter = new google.maps.LatLng(50.448166, 30.454907);
    var mapProp = {center:myCenter, zoom:17, scrollwheel:false, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var marker = new google.maps.Marker({
        position: myCenter,
        map: map,
        title: 'Кафедра звукотехніки та реєстрації інформації'
});
    marker.setMap(map);
}




// $(function() {
//     $(this).find(".dropdown").hover(function() {
//         $(this).find(".dbfirst").stop().slideDown(500);
//     });
//     $(this).find(".dbfirst").mouseleave(function () {
//         $(".dbfirst").stop().slideUp(500);
//     })
// });

// $(function(){
//     $('.navbar  ul li').hover(
//         function () {
//             $('ul', this).stop().slideDown(400);
//         },
//         function () {
//             $('ul', this).stop().slideUp(400);
//         }
//     );
// });

$(function() {
    $(this).find(".dropdown").hover(function() {
        $(this).find(".dbfirst").slideDown();
    },
    function () {
        $(".dbfirst").slideUp();
    }
    );
});

$(function () {
    $("input[type=checkbox]").click(function(){
        $.ajax({
            type: "POST",
            url: "/admin/adminka/users/"+this.name+'/'+Number(this.checked),
            data: {
                "_token": $('#token').val() },
        })
    });
});

$(function () {
    $('#poisk').click(function () {
        $( ".poshuk" ).toggle();
    });
});

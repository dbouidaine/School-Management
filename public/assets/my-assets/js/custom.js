$("#sidenav_toggle").click(function(){
    toggleSidenav();
});
let i=90;
function toggleSidenav(){
    $('.side-navbar').toggle();
    $('.to-rotate').css({'transform':'rotate('+i+'deg)','transition':'0.3s ease'});
    i+=90;
}

$('.content').click(function(){
    if (window.matchMedia('(max-width: 900px)').matches)
    {
        $('.side-navbar').hide();
    }
});
if (window.matchMedia('(max-width: 900px)').matches)
{
        $('.side-navbar').hide();
}
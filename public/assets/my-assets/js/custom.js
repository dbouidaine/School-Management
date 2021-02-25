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

$(document).ready(function(){
    $('.side-navbar').hide();
});


let paragraphs = document.getElementById("paragraphs");
new Sortable(paragraphs,{
  handle:'.drag-btn',
  animation:200
});
$(".drag-btn").on("dragover", function(event) {
    event.preventDefault();  
    event.stopPropagation();
});
$(".drag-btn").on("drop",function(){
    let id_element=parseInt($(this).attr("id-paragraph"));
    let order=$(this).closest('.to-drag').index();
    order++;
    let before_value=$("input[name='"+id_element+"']");
    before_value=parseInt(before_value.attr("value"));
    if (before_value<order){
        $(".order-input").each(function(){
            let value=parseInt($(this).attr("value"));
            if (parseInt($(this).attr("name"))==id_element){
                $(this).attr("value",order);
            }
            else
            if (value<=order && value>=before_value){
                $(this).attr("value",value-1);
            }
        });
    }
    else{
        $(".order-input").each(function(){
            let value=parseInt($(this).attr("value"));
            if (parseInt($(this).attr("name"))==id_element){
                $(this).attr("value",order);
            }
            else
            if (value>=order && value<=before_value){
                $(this).attr("value",value+1);
            }
        });
    }
});
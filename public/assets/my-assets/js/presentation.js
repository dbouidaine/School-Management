let paragraphs = document.getElementById("paragraphs");
new Sortable(paragraphs,{
  handle:'.drag-btn',
  animation:200
});
$(".to-drag").on("dragover", function(event) {
    event.preventDefault();  
    event.stopPropagation();
});
$(".to-drag").on("drop",function(){
    let id_element=parseInt($(this).attr("id-paragraph"));
    let order=$(this).index();
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
$(document).ready(function(){
    $("#nama").change(function(){
        filter();
    });
    $("#keyword").keypress(function(event){
        if(event.keyCode == 13){ 
            filter();
        }
    });
    var filter = function(){
        var nama = $("#nama").val();
        var keyword = $("#keyword").val();
        window.location.replace("&.keyword="+keyword);
    }
});
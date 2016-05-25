$(function(){
    $("div.bookItem").slice(0, 12).show();
    $("#cargar").click(function(e){
        e.preventDefault();
        $("div.bookItem:hidden").slice(0, 12).show();
        if($("div.bookItem:hidden").length == 0){
            alert("No hay más libros");
        }
    })
});

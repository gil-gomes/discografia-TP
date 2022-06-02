function btnSearchDisabled()
{
    $(document).ready(function(){
        const valInputSearch = $(".input-search").val();
        var btn = $(".btn-search");
        if(valInputSearch !== "" ){
            btn.removeAttr("disabled");
        }else if(valInputSearch === ""){
            btn.attr("disabled", true);
        }
        console.log(valInputSearch);
    });
}
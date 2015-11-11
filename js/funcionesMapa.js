function VerEnMapa(prov, dire, loc, id)
{    
    var punto = dire +", " +  loc  +", " +  prov +", Argentina";
    console.log(punto);
    var funcionAjax=$.ajax({
    url:"nexo.php",
    type:"post",
    data:{
      queHago:"VerMapa"
    }
  });
    funcionAjax.done(function(retorno){
    $("#content").html(retorno);
        $("#punto").val(punto);
         $("#id").val(id);
    
  });
}

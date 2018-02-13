$( document ).ready(function() {

    $( "#cmbZona" ).change(function() {
        
        $( "#cmbZona option:selected" ).each(function() {
           if ($( this ).text() == "Cambiar zona") {
                $("#imgMapa").attr("src","/assets/images/zonas/general.jpg");
            } else {
                $("#imgMapa").attr("src","/assets/images/zonas/"+$( this ).text() + ".jpg");
            }
       
         });
    });
});
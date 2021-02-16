<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<script>
    //Activar el botón actual del menú 
    (function(){
        var nav = document.getElementsByClassName("rd-navbar-nav")[0];
        var li_active = nav.getElementsByClassName("active")[0];
        li_active.classList.remove("active");
        li_active = document.getElementById("<?php echo $titulo ?>");
        li_active.classList.add("active");
    })();

</script>
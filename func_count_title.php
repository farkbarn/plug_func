function titulo_contador_js(){
      echo '<script>jQuery(document).ready(function(){
jQuery("#titlewrap").after("<div style=\"position:absolute;top:-32px;right:0px;color:#666;\"><small></small><input type=\"text\" value=\"0\" maxlength=\"3\" size=\"3\" id=\"tit_counter\" readonly=\"\" style=\"background:#fff;\"> <small>Máximo 90 caracter(es).</small></div>");
     jQuery("#tit_counter").val(jQuery("#title").val().length);
     jQuery("#title").keyup( function() {
     jQuery("#tit_counter").val(jQuery("#title").val().length);
   });
});</script>';
}
add_action( 'admin_head-post.php', 'titulo_contador_js');
add_action( 'admin_head-post-new.php', 'titulo_contador_js');

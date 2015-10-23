/**
 * Created by Andriants on 03/09/2015.
 */
$(function(){
    var wordpress="non";
    var drupal="non";
    var backoffice="non";
    var connexion="non";
    var bref=$('#brefConcWeb').val();
    var nom=$('#nomConcWeb').val();
    var mail=$('#mailConcWeb').val();
    var tel=$('#telConcWeb').val();
    function coche(valeur){

        if($(valeur).is(':checked')){
            return "oui";}
        else{
            return "non";
        };

        return c;
    };
    $('#validerConcWeb').click(function(){

        wordpress=coche('#wordpressConcWeb');
        drupal=coche('#drupalConcWeb');
        backoffice=coche('#backofficeConcWeb');
        connexion=coche('#connexionConcWeb');
        var bref=$('#brefConcWeb').val();
        var nom=$('#nomConcWeb').val();
        var mail=$('#mailConcWeb').val();
        var tel=$('#telConcWeb').val();
        $.ajax({
            type:"POST",
            url:'page/commandeWeb.php',
            dataType:"html",
            data:'wordpress='+wordpress+'&drupal='+drupal+'&backoffice='+backoffice+'&connexion='+connexion+'&bref='+bref+'&nom='+nom+'&mail='+mail+'&tel='+tel,
            success:function(data){
                alert(data);
            }
        });
    });
});

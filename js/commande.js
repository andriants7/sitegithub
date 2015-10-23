/**
 * Created by Andriants on 02/09/2015.
 */
$(function(){
    var vitrine="non";
    var photos="non";
    var interface="non";
    var connexion="non";
    var bref=$('#brefConc').val();
    var nom=$('#nomConc').val();
    var mail=$('#mailConc').val();
    var tel=$('#telConc').val();
    function coche(valeur){

        if($(valeur).is(':checked')){
           return "oui";}
        else{
            return "non";
        };

        return c;
    };
    $('#validerConc').click(function(){
        vitrine=coche('#vitrineConc');
        photos=coche('#photosConc');
        interface=coche('#interfaceConc');
        connexion=coche('#connexionConc');
        var bref=$('#brefConc').val();
        var nom=$('#nomConc').val();
        var mail=$('#mailConc').val();
        var tel=$('#telConc').val();
        $.ajax({
            type:"POST",
            url:'page/commande.php',
            dataType:"html",
            data:'vitrine='+vitrine+'&photos='+photos+'&interface='+interface+'&connexion='+connexion+'&bref='+bref+'&nom='+nom+'&mail='+mail+'&tel='+tel,
            success:function(data){
                alert(data);
            }
        });
    });
});

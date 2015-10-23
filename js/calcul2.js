/**
 * Created by Andriants on 01/09/2015.
 */
/**
 * Created by Andriants on 31/08/2015.
 */
$(function(){
    var valeurs=[];
    $('input:checked[name=choix]').each(function(){
        valeurs.push($(this).val());
    });
    var industrie=parseInt($('#secteur2').val());
    var wordpress=parseInt(0);
    var drupal=parseInt(0);
    var Backoffice=parseInt(0);
    var compteUtilisateur=parseInt(0);
    var appliPersonnalise=parseInt(0);
    var vitrine=parseInt(0);
    var connexion2=parseInt(0);
    var prixPage=parseInt($('#prixPage2').val());
    var nombrePage=parseInt(3);

    calcul();
    function calcul(){
        var prix=nombrePage*prixPage;
        var reponse=industrie+wordpress+drupal+vitrine+Backoffice+compteUtilisateur+connexion2+appliPersonnalise+prix;
        $('#resultat2').html(reponse);
    };
    function check(valeur){
        var c;
        if($(valeur).is(':checked')){
            c=parseInt($(valeur).val());}
        else{
            c=parseInt(0);
        };

        return c;
    };
    $('#wordpress').change(function(){
        wordpress=check(this);
        calcul();
    });
    $('#drupal').change(function(){
        drupal=check(this);
        calcul();
    });
    $('#vitrine2').change(function(){
        vitrine=check(this);
        calcul();
    });
    $('#Backoffice').change(function(){
        Backoffice=check(this);
        calcul();
    });
    $('#compteUtilisateur').change(function(){
        compteUtilisateur=check(this);
        calcul();
    });
    $('#sons2').change(function(){
        appliPersonnalise=check(this);
        calcul();
    });
    $('#connexion2').change(function(){
        connexion2=check(this);
        calcul();
    });



    $('#secteur2').click(function(){
        industrie= parseInt($('#secteur2').val());
        calcul();

    });
    $('li>a').click(function(){
        var pos = $($(this).attr('href')).offset().top;
        $('body,html').animate({scrollTop:pos},1000);
    });
    function calculPage(){
        var nPage=parseInt($('#nombrePage2').val());
        if(nPage>0) {
            nombrePage =nPage;
            calcul();
        }
    };
    $('#nombrePage2').keyup(function(){
        calculPage();
        pseudo=$('#pseudo').val();

    });
    $('#nombrePage2').change(function(){
        calculPage();


    });



});

/**
 * Created by Andriants on 31/08/2015.
 */
$(function(){
    $('.flexslider').flexslider( {animation: "fade",
        directionNav: false});
    $(".rotate").textrotator();

    new WOW().init();
    $('#PME').popover({placement:'top',trigger:'hover'});
    $('#restaurant').popover({placement:'top',trigger:'hover'});
    $('#evenement').popover({placement:'top',trigger:'hover'});
    $('#internet').popover({placement:'top',trigger:'hover'});


    var valeurs=[];
    $('input:checked[name=choix]').each(function(){
        valeurs.push($(this).val());
    });
    var industrie=parseInt($('select').val());
    var tablette=parseInt(0);
    var phone=parseInt(0);
    var vitrine=parseInt(0);
    var photo=parseInt(0);
    var interface=parseInt(0);
    var son=parseInt(0);
    var connexion=parseInt(0);
    var prixPage=parseInt($('#prixPage').val());
    var nombrePage=parseInt(3);

    calcul();
    function calcul(){
        var prix=nombrePage*prixPage;
        var reponse=industrie+tablette+phone+vitrine+interface+son+connexion+photo+prix;
        $('#resultat').html(reponse);
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
    $('#tablette').change(function(){
        tablette=check(this);
        calcul();
    });
    $('#mobile').change(function(){
        phone=check(this);
        calcul();
    });
    $('#vitrine').change(function(){
        vitrine=check(this);
        calcul();
    });
    $('#Photos').change(function(){
        photo=check(this);
        calcul();
    });
    $('#Interface').change(function(){
        interface=check(this);
        calcul();
    });
    $('#sons').change(function(){
        son=check(this);
        calcul();
    });
    $('#connexion').change(function(){
        connexion=check(this);
        calcul();
    });



    $('#secteur').click(function(){
        industrie= parseInt($('select').val());
        calcul();

    });
    $('li>a').click(function(){
        var pos = $($(this).attr('href')).offset().top;
        $('body,html').animate({scrollTop:pos},1000);
    });
    function calculPage(){
        var nPage=parseInt($('#nombrePage').val());
        if(nPage>0) {
            nombrePage =nPage;
            calcul();
        }
    };
    $('#nombrePage').keyup(function(){
        calculPage();
        pseudo=$('#pseudo').val();
        $.ajax({
            type:"POST",
            url:"pseudo.php",
            data:"nom="+pseudo,
            success:function(data){
                if(data==00){
                    $('p').append('faux');

                }else{
                    $('p').append('ok');
                }
            }
        });
    });
    $('#nombrePage').change(function(){
        calculPage();
        pseudo=$('#pseudo').val();
        $.ajax({
            type:"POST",
            url:"pseudo.php",
            data:"nom="+pseudo,
            success:function(data){
                if(data==00){
                    $('p').append('faux');

                }else{
                    $('p').append('ok');
                }
            }
        });
    });
    $('#envo').click(function(){
        var message=$('#commentRejoignez').val();
        var nom=$('#nomRejoignez').val();
        var mail=$('#emailRejoignez').val();
        var file1=$('#cv').val();
        var file2=$('#lm').val();
        var file3=$('#projets').val();
        $.ajax({
            type:"POST",
            url:"page/mail.php",
            data:'message='+message+'&nom='+nom+'&mail='+mail+'&cv='+file1+'&lm='+file2+'&projets='+file3,
            success:function(data){
                    alert(data);
            }
        });
    });
    $('#envoiMail').click(function(){
        var message=$('#comments').val();
        var nom=$('#name').val();
        var mail=$('#email').val();
        var objet=$('#objet').val();
        /*var file1=$('#cv').val();
        var file2=$('#lm').val();
        var file3=$('#projets').val();*/
        $.ajax({
            type:"POST",
            url:"page/mail.php",
            data:'message='+message+'&nom='+nom+'&mail='+mail+'&objet='+objet,
            success:function(data){
                alert(data);
            }
        });
    });




});

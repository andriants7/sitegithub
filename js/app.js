/**
 * Created by Andriants on 15/09/2015.
 */
var monApp=angular.module('monApp',['ngRoute','ui.router']);
monApp.config(function($stateProvider,$routeProvider ) {
    $routeProvider
        .when('/',{

            templateUrl :'Partials/actu.html'
        })
        .when('/vue1',{
            templateUrl:'Partials/vue1.html'
        })
        .when('/vue2',{
            templateUrl:'Partials/vue2.html'

        })
        .when('/vue3',{
            templateUrl:'Partials/vue3.html'
        })
        .otherwise({redirectTo:'/'})
    $stateProvider
        .state('index', {
            url: "",
            views: {
                "viewA": { template: "index.viewA" },
                "viewB": { template: "index.viewB" }
            }
        })
        .state('route1', {
            url: "/route1",
            views: {
                "viewA": { template: "route1.viewA" },
                "viewB": { template: "route1.viewB" }
            }
        })
        .state('route2', {
            url: "/route2",
            views: {
                "viewA": { template: "route2.viewA" },
                "viewB": { templateUrl: "partials/state2.html" }
            }
        })
});
monApp.controller('commandeController',function($scope,$http){
    $scope.noum='';
    $http.get('page/commande1.php').success(function(data){
        $scope.noum=data;
    });
    $scope.commandeClick=function(){
        /*var request=$http({
            method:"post",
            url:window.location.href+"page/commande1.php",
            data:{
                vitrine:'oui', photos:'non', interface:'oui', connexion:'oui', bref:'ddddddd', nom:'bbla',mail:'no',tel:'kdk'
            },
            headers:{'Content-Type':'application/x-www-form-urlencoded'}
        });
        request.success(function(data){
            alert(data);
        });*/
        /*$http.post('page/commande.php',{vitrine:'oui', photos:'non', interface:'oui', connexion:'oui', bref:'ddddddd', nom:'bbla',mail:'no',tel:'kdk'},function(data){
            alert(data);
        });*/
    }

});

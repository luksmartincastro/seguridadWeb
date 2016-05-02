"use strict";
 
app.controller('TecnicoCtrl', ['$scope','TecnicoServ','$route', function($scope, TecnicoServ, $route)
{
    $scope.nombrePagina = 'Pagina del tecnico';
    $scope.password = '';
    $scope.email = '';
    $scope.msjLogin = {msj:'', show:false, cls:'alert alert-warning'};
    //------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------
    TecnicoServ.get(function(data)
        {
            $scope.usuarios = data.usuario;
            
        });
    //------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------
    

}]);
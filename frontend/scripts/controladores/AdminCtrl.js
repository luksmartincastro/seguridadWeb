"use strict";
 
app.controller('AdminCtrl', ['$scope','AdminServ','$route', function($scope, AdminServ, $route)
{
    $scope.nombrePagina = 'Pagina administracion';
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
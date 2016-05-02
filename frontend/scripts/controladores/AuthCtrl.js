"use strict";
 
app.controller('AuthCtrl', ['$scope','$auth', '$location', function($scope, $auth, $location)
{
    $scope.nombrePagina = 'Pagina Login';
    $scope.password = '';
    $scope.email = '';
    $scope.msjLogin = {msj:'', show:false, cls:'alert alert-warning'};
    //------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------
    $scope.login = function()
    {       
        var credentials = {
            email: $scope.email,
            password: $scope.password
        };
        
        // Use Satellizer's $auth service to login
        $auth.login(credentials).then(function(data)
        {
            // If login is successful, redirect to the users state            
            var isAdmin = data.data.perfilNom == 'Admin';
            var isTec = data.data.perfilNom == 'Tecnico';
            var isAtP = data.data.perfilNom == 'AtPublico';            

            if (isAdmin) { $location.url('/admin/' + data.data.iduser); };
            if (isTec) {$location.url("/tecnico/" + data.data.iduser);};
            if (isAtP) {$location.url("/atPublico/" + data.data.iduser);};            
        })
        .catch(function(response){
            // Si ha habido errores llegamos a esta parte
            $scope.msjLogin = {
                msj:'Datos incorrectos...', 
                show:true, 
                cls:'alert alert-danger'};
            $scope.password = '';
            $scope.user = '';
        });
    };
    //------------------------------------------------------------------------------------------
    //------------------------------------------------------------------------------------------
    $scope.logout = function() {  
    $auth.logout()
        .then(function() {
            // Desconectamos al usuario y lo redirijimos
            $location.path("/")
        });
    };

}]);
"use strict";

var app = angular.module('seguridadWeb',["ngResource","ngRoute",'satellizer']);

app.config(['$routeProvider','$authProvider', function($routeProvider, $authProvider)
	{
		// Satellizer configuration that specifies which API
        // route the JWT should be retrieved from
        $authProvider.loginUrl = 'http://localhost/seguridadWeb/backend/public/api/authenticate';
        $authProvider.tokenName = "token";
		//----------------------------------------------------  
		$routeProvider
			.when('/',
			{
				templateUrl: 'views/Auth/login.html',
				controller: 'AuthCtrl'
			})		
			.when('/atPublico/:iduser',
			{
				templateUrl: 'views/AtPublico/atPIndex.html',
				controller: 'AtPublicoCtrl'
			})			
			.when('/tecnico/:iduser',
			{
				templateUrl: 'views/Tecnico/tecIndex.html',
				controller: 'TecnicoCtrl'
			})
			.when('/admin/:iduser',
			{
				templateUrl: 'views/Admin/adminIndex.html',
				controller: 'AdminCtrl'
			})			
			.otherwise({redirecTo: '/'});  
		//----------------------------------------------------  
		
	}]);   


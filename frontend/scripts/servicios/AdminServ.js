"use strict";

app.factory('AdminServ', function($resource)
{
	
	return $resource('http://localhost/seguridadWeb/backend/public/api/admin',{},
		{
			/*getUsuarios: 
				{ method:'POST',
				  params: {idMarca: "@idMarca"},
				  url: "http://localhost/UTNProgWeb2015/public/getModelos"
				},
			//----------------------------------
			getRepuestos: 
				{ method:'POST',
				  params: {idModelo: "@idModelo"}, 
				  url: "http://localhost/UTNProgWeb2015/public/getRepuestos"
				},
			//----------------------------------
			getPresupuesto: 
				{ method:'POST',
				  params: {idGama: "@idModelo", vectorRep: "@vectorRep", vectorServ:"@vectorServ"},
				  url: "http://localhost/UTNProgWeb2015/public/getPresupuesto"
				},
			//----------------------------------  
			GuardarPresupuesto: 
				{ method:'POST',
				  params: {datosOrden: "@datosOrden", arrayEq: "@arrayEq"},
				  url: "http://localhost/UTNProgWeb2015/public/GuardarPresupuesto"
				}
			//----------------------------------   	*/		 
		});	 		 
	
});  
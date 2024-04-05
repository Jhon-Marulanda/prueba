<!doctype html>
<html lang="en">
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registro</title>
  </head>
  <body>
	  <div class="container register">
	  	<div class="row">
	      <div class="col-md-3 register-left">

					<!--Botón cerrar sesión-->
	      	<form class="d-flex" action="/logout" method="post">
            @csrf
            <a class="btn btn-outline-success" type="submit" href="#" style="height:100%" onclick="this.closest('form').submit()">
              <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
              </svg>
            </a>
          </form>
	      </div> 
	      
	      <div class="col-md-9 register-right">
	        <div class="tab-content" id="myTabContent">
	          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	            <h3 class="register-heading">FORMULARIO DE REGISTRO   
	            </h3>
	            <form id="form_registro" action="/registro" method="post">
	            	@csrf
	              <div class="row register-form">
	              	<div class="row">
		              	<div class="col-md-6">
		                  <div class="form-group mb-3">
		                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="usuario" value="" />
		                  </div>
		                </div>
		              	<div class="col-md-6">
		                  <div class="form-group mb-3">
		                    <input type="password" id="password" name="password" class="form-control" placeholder="password" value="" />
		                  </div>
		                </div>
		              </div>
	                <div class="row">
		                <div class="col-md-6">
		                  <button type="submit" class="btnRegister">REGISTRAR</button>
		                </div>
		              </div>
	              </div>
	            </form>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
  </body>
</html>

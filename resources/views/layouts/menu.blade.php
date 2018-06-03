<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="menuFondo">
                <nav class="navbar navbar-expand-lg">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <!--<li class="nav-item dropdown">
				        <a class="font nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Departamentos</a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          	<a class="dropdown-item" href="#">Comité de Transparencia</a>
					        <a class="dropdown-item" href="#">Control Escolar</a>
					        <a class="dropdown-item" href="#">Desarrollo Academico</a>
					        <a class="dropdown-item" href="#">Difusión</a>
					        <a class="dropdown-item" href="#">Personal</a>
					        <a class="dropdown-item" href="#">Planeación</a>
					        <a class="dropdown-item" href="#">Planeación y Programación</a>
					        <a class="dropdown-item" href="#">Recursos Financieros</a>
					        <a class="dropdown-item" href="#">Recursos Materiales</a>
					        <a class="dropdown-item" href="#">Vinculación y Planeación</a>
					        <a class="dropdown-item" href="#">Dirección General</a>
				        </div>
				      </li>
					  <li class="nav-item dropdown">
				        	<a class="font nav-link dropdown-toggle" href="#" id="navbar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Subdirecciones</a>
				          <div class="dropdown-menu" aria-labelledby="navbar">
					        <a class="dropdown-item" href="#">Academica</a>
					        <a class="dropdown-item" href="#">Planeación</a>
					        <a class="dropdown-item" href="#">Servicios Administrativos</a>
					        <a class="dropdown-item" href="#">Vinculación</a>
					        <a class="dropdown-item" href="#">Vinculación y Planeación</a>
				          </div>
				      </li>-->
				      <li>
				      	<a class="font nav-link" href="{{ route('documentos.index') }}">Documentos</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class=" font nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          {{ Auth::user()->name }}
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          	<a class="dropdown-item" href="{{ route('logout') }}"
				                onclick="event.preventDefault();
				                         document.getElementById('logout-form').submit();">
				                Cerrar Sesión
				            </a>

				            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				                {{ csrf_field() }}
				            </form>
				        </div>
				      </li>
				    </ul>
				  </div>
				</nav>
            </div>
        </div>
    </div>
</div><br><br><br>

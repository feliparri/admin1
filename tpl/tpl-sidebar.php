<div class="sidebar" data-color="green" data-image="assets/img/sidebar-5.jpg">
	<div class="sidebar-wrapper">
	    <div class="logo">
	        <a href="#" onclick="accion('formInicio_1_FormularioInicio')" class="simple-text">
	            Control Stock
	        </a>
	    </div>

	    <ul class="nav">
	        <li /*class="active"*/ >
	            <!--<a>
	                
	                <p >Ingreso MMPP</p>
	            </a>-->
	            <a onclick="accion('MMPP_1_Listar');" class="ButIngresar btn btn-lg btn-primary btn-block btn-signin" >Ingresar</a>
	            <button onclick="accion('MMPP_1_Listar');" class="ButIngresar btn btn-lg btn-block btn-signin" ><i class="pe-7s-note2"></i>Ingreso MMPP</button>
	        </li>
	        <li class="eventTouch">
	            <button onclick="javascript:accion('formInicio_1_FormularioInicio');" class="ButIngresar btn btn-lg btn-block btn-signin" type="submit"><i class="pe-7s-note2"></i>Procesado MMPP</button>
	        </li>
	        <li class="eventTouch">
	            <button onclick="javascript:accion('formInicio_1_FormularioInicio');" class="ButIngresar btn btn-lg btn-block btn-signin" type="submit"><i class="pe-7s-note2"></i>Stock</button>
	        </li>
	        <li>            
                <!--<i class="pe-7s-graph"></i>
                <p>Reportes</p>-->
                <button onclick="javascript:accion('Reportes_1_Listar');" class="ButIngresar btn btn-lg btn-block btn-signin" type="submit"><i class="pe-7s-graph"></i>Reportes</button>
	        </li>
	    </ul>
	</div>
</div>
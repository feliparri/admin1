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
	            <a style="cursor:pointer;" data-class="MMPP_1_Listar" class="ButIngresar btn btn-lg btn-primary btn-block btn-signin" ><i class="pe-7s-note2"></i>Ingreso MMPP</a>
	        </li>
	        <li class="eventTouch">
	            <a data-class="formInicio_1_FormularioInicio" class="ButIngresar btn btn-lg btn-block btn-signin" type="submit"><i class="pe-7s-note2"></i>Procesado MMPP</a>
	        </li>
	        <li class="eventTouch">
	            <a data-class="formInicio_1_FormularioInicio" class="ButIngresar btn btn-lg btn-block btn-signin" type="submit"><i class="pe-7s-note2"></i>Stock</a>
	        </li>
	        <li>            
                <!--<i class="pe-7s-graph"></i>
                <p>Reportes</p>-->
                <a data-class="Reportes_1_Listar" onclick="javascript:accion('Reportes_1_Listar');" class="ButIngresar btn btn-lg btn-block btn-signin" type="submit"><i class="pe-7s-graph"></i>Reportes</a>
	        </li>
	    </ul>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".ButIngresar").on('click touchstart',function(){
			accion($(this).attr('data-class'));
		})
	})
</script>
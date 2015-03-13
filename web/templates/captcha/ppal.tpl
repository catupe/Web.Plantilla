<div class="row">
	<div class="col-sm-12">	
		<form class="form-horizontal" method="POST" action="">
		<!--<form class="form-horizontal" method="POST" action="" id="formulario" name="formulario">-->
			<div class="form-group">
				<div class="form-inline">
					<div class="col-sm-2">
						<button type="button" class="pull-right btn btn-default btn-lg" aria-label="Left Align" id="recargar-imagen">
							<span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
						</button>
					</div>
					<div class="col-sm-10">
						<img src="{$captcha}" alt="CAPTCHA code" id="imagen-captcha">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-inline">
					<label for="inputPassword3" class="col-sm-2 control-label">Ingrese el c&oacute;digo</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="codigo" id="codigo" value="">
						
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="form-inline">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" name="aceptar" class="btn btn-primary">Aceptar</button>
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-12">	
		----------> {$valido} <-----------
	</div>
</div>
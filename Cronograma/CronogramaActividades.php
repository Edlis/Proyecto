<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="cssCronograma/easyui.css">
        <link rel="stylesheet" type="text/css" href="cssCronograma/icon.css">
	<link rel="stylesheet" type="text/css" href="cssCronograma/color.css">
	<link rel="stylesheet" type="text/css" href="cssCronograma/demo.css">
	<script type="text/javascript" src="cssCronograma/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="cssCronograma/jquery.easyui.min.js"></script>
</head>
<body>
	<table id="dg" title="Registro de Actividades" class="easyui-datagrid" style="width:700px;height:250px"
			url="get_users.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
                                
				<th field="Fecha_inicial" width="50">Fecha Inicial</th>
				<th field="Fecha_final" width="50">Fecha Final</th>
				<th field="Titulo" width="50">Título</th>
				<th field="Descripcion" width="250">Descripción</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">Nueva Actividad</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">Editar Actividad</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">Eliminar Actividad</a>
	</div>
	
	<div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Ingreso de Actividades</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>Fecha Inicial:</label>
				<input name="Fecha_inicial" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Fecha Final:</label>
				<input name="Fecha_final" class="easyui-textbox" required="true">
			</div>
			<div class="fitem">
				<label>Título :</label>
				<input name="Titulo" class="easyui-textbox">
			</div>
			<div class="fitem">
				<label>Descripción :</label>
				<input name="Descripcion" class="easyui-textbox" required="true">
			</div>
		</form>
	</div>
	<div id="dlg-buttons">
		<a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Guardar</a>
		<a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancelar</a>
	</div>
	<script type="text/javascript">
		var url;
		function newUser(){
			$('#dlg').dialog('open').dialog('setTitle','Nueva Actividad');
			$('#fm').form('clear');
			url = 'save_user.php';
		}
		function editUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
				$('#dlg').dialog('open').dialog('setTitle','Editar Actividad');
				$('#fm').form('load',row);
                                    url = 'update_user.php?idCalendario='+row.idCalendario;
			}
		}
		function saveUser(){
			$('#fm').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
					var result = eval('('+result+')');
					if (result.errorMsg){
						$.messager.show({
							title: 'Error',
							msg: result.errorMsg
						});
					} else {
						$('#dlg').dialog('close');		// close the dialog
						$('#dg').datagrid('reload');	// reload the user data
					}
				}
			});
		}
		function destroyUser(){
			var row = $('#dg').datagrid('getSelected');
			if (row){
                                    $.messager.confirm('Confirmación de Eliminación','Está seguro de eliminar la actividad?',function(r){
					if (r){
						$.post('destroy_user.php',{idCalendario:row.idCalendario},function(result){
							if (result.success){
								$('#dg').datagrid('reload');	// reload the user data
							} else {
								$.messager.show({	// show error message
									title: 'Error',
									msg: result.errorMsg
								});
							}
						},'json');
					}
				});
			}
		}
	</script>
	<style type="text/css">
		#fm{
			margin:0;
			padding:10px 30px;
		}
		.ftitle{
			font-size:14px;
			font-weight:bold;
			padding:5px 0;
			margin-bottom:10px;
			border-bottom:1px solid #ccc;
		}
		.fitem{
			margin-bottom:5px;
		}
		.fitem label{
			display:inline-block;
			width:80px;
		}
		.fitem input{
			width:160px;
		}
	</style>
</body>
</html>
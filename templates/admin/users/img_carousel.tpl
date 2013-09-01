{{include file ="admin/header.tpl"}} {{include file
="admin/navibar.tpl"}} {{include file ="admin/sidebar.tpl"}}


<link rel="stylesheet" type="text/css"
	href="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-easyui-1.3.4/themes/bootstrap/easyui.css">
<link rel="stylesheet" type="text/css"
	href="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-easyui-1.3.4/themes/icon.css">
<script type="text/javascript"
	src="{{$smarty.const.WEBSITE_URL}}/public/assets/lib/jquery-easyui-1.3.4/jquery.easyui.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
		$('#win_add').window('close'); 
		$('#win_edit').window('close'); 
	});
	 
	function addWindow(){
		$('#win_add').window('open'); 
		$('#win_edit').window('close'); 
		$("#form").form('clear');
		
	}
	function editWindow(){
		var select = getSelectUser();
		if(select == null || select.length == 0 ){
			$.messager.alert('错误','请选择要修改的记录!');
			return;
		}
		
		$('#win_add').window('close'); 
		$('#win_edit').window('open'); 

		$("input[id='edit_id']").val(select[0].id);
		$("input[id='edit_title']").val(select[0].title);
		$("input[id='edit_url']").val(select[0].url);
		$("input[id='edit_product_time']").val(select[0].product_time);
		
		$("textarea[id='edit_desc']").val(select[0].desc);
		$("select[id='edit_showindex']").val(select[0].showindex);
	}
	function deleteItem(){

		$.messager.confirm('删除确定','确定要删除当前选择的记录!',function(r){
		    if (r){
		    	var select = getSelectUser();
				if(select == null || select.length == 0 ){
					$.messager.alert('错误','请选择要删除的记录!');
					return;
				}
				$.ajax({  
		            type: "POST",  
		            dataType: "json",  
		            url: '{{$smarty.const.WEBSITE_URL}}admin/imgcarousel/delete',
		            data: { id: select[0].id },  
		            success: function (data) {  
		                $.messager.alert("消息", "删除成功!", "info");  
		             	$('#grid').datagrid('reload'); 
		            },  
		            error: function () {  
		            }  
		        });  
		    }
		});
		
	}
	function addNewItem(){

		  if(!$('#form').form('validate')){
		        return;
		     }
		$('#form').form({
		    url:'{{$smarty.const.WEBSITE_URL}}admin/imgcarousel/add',
		    type: "POST",  
            dataType: "json", 
		    onSubmit: function(){
		        //进行表单验证
		        //如果返回false阻止提交
		    },
		    success:function(data){
			    if(data <0){
			    	$.messager.alert('错误','存在相同的用户!');
			    	return;
				 }
		    	win_close();
		    	$.messager.alert('成功','添加成功!');
		    	$('#grid').datagrid('reload'); 
		    	
		    }
		});
		//提交表单
		$('#form').submit();
	}
	  
	function win_close(){
		$('#win_add').window('close'); 
		$('#win_edit').window('close'); 
	}


	function getSelectUser(){
		var select  = $("#grid").datagrid('getSelections');
		if(select == null || select.length == 0 ){
			return null;
		}
		return select;
	}

	function CallbackFunction(str){  
	 	$.messager.alert('消息',str); 
	 	if(str =="添加成功 " || str =="修改成功 "  ){
	 		win_close();
	 		$('#grid').datagrid('reload'); 
		}
	}
</script>

<div class="content">
	<div class="header">
		<div class="stats">
			<p class="stat">
				<!--span class="number"></span-->
			</p>
		</div>

		<h1 class="page-title">后台管理员管理</h1>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">

			<!--- START 以上内容不需更改，保证该TPL页内的标签匹配即可 --->
			<table id="grid"
				data-options="url:'{{$smarty.const.WEBSITE_URL}}admin/imgcarousel/getpage',fitColumns:true,singleSelect:true"
				class="easyui-datagrid" style="width: 700px; height: 370px"
				toolbar="#toolbar" iconCls="icon-save" pagination="true"
				rownumbers="true">
				<thead>
					<tr>
						<th data-options="field:'id',width:100,checkbox:true"></th>
						<th data-options="field:'title',width:100">Title名称</th>
						<th data-options="field:'url',width:100">地址</th>
						<th data-options="field:'imgname',width:100">图片名称</th>
						<th data-options="field:'product_time',width:100">时间</th>
						<th data-options="field:'showindex',width:100">显示位置</th>
						<th data-options="field:'updatetime',width:100">最后修改时间</th>
						<th data-options="field:'desc',width:100">描述</th>
					</tr>
				</thead>
			</table>

			<div id="toolbar">
				<a href="#" class="easyui-linkbutton" iconCls="icon-add"
					plain="true" onclick="addWindow()">添加</a> <a href="#"
					class="easyui-linkbutton" iconCls="icon-edit" plain="true"
					onclick="editWindow()">修改</a> <a href="#" class="easyui-linkbutton"
					iconCls="icon-remove" plain="true" onclick="deleteItem()">删除</a>
			</div>

			<div id="win_add" class="easyui-window" title="添加"
				style="width: 600px; height: 425px"
				data-options="iconCls:'icon-save',collapsible:false,minimizable:false,maximizable:false,modal:true">
				<div class="easyui-layout" data-options="fit:true">
					<form id="form" method="post" target="if" class="form-horizontal"
						enctype="multipart/form-data"
						action="{{$web_root}}imgcarousel/add">
						<div class="control-group" hidden="true">
							<input type="text" name="id" hidden="true">
						</div>
						<div class="control-group">
							<label class="control-label" for="Text input">Title名称:</label>
							<div class="controls">
								<input type="text" class="easyui-validatebox"
									data-options="required:true" id="title" name="title"
									placeholder="Title">
							</div>
						</div>


						<div class="control-group">
							<label class="control-label" for="Text input">图片选择:</label>
							<div class="controls">
								<input type="file" id="file" name="file"
									class="easyui-validatebox" placeholder="图片选择:!">
							</div>
						</div>

						<!-- 						<div class="control-group"> -->
						<!-- 							<label class="control-label" for="Text input">ImageName:</label> -->
						<!-- 							<div class="controls"> -->
						<!-- 								<input type="text" class="easyui-validatebox" -->
						<!-- 									data-options="required:true" id="imgname" name="Imgname" -->
						<!-- 									placeholder="input img name!"> -->
						<!-- 							</div> -->
						<!-- 						</div> -->

						<div class="control-group">
							<label class="control-label" for="Text input">Url:</label>
							<div class="controls">
								<input id="url" name="url"></input>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="Text input">显示位置:</label>
							<div class="controls">
								<select id="showindex" name="showindex">
									<option selected="selected">1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
									<option>7</option>
									<option>8</option>
									<option>9</option>
									<option>10</option>
									<option>11</option>
									<option>12</option>
									<option>13</option>
									<option>14</option>
									<option>15</option>
									<option>16</option>
									<option>17</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="Text input">时间:</label>
							<div class="controls">
								<input id="product_time" name="product_time"></input>
							</div>
						</div>

						<div class="control-group">
							<label class="control-label" for="Text input">描述:</label>
							<div class="controls">
								<textarea rows="2" name="desc"></textarea>
							</div>
						</div>
						<div class="form-actions" id="div_add">
							<button type="submit" style="width: 100px;"
								class="btn btn-primary">添加</button>
							<button type="button" onclick="win_close()" style="width: 100px;"
								class="btn">取消</button>
						</div>

					</form>
					<iframe name="if" src="" width=600px height="0" frameborder=0
						SCROLLING="no" style="display: NONE"></iframe>
				</div>



				<div id="win_edit" class="easyui-window" title="修改"
					style="width: 600px; height: 425px"
					data-options="iconCls:'icon-save',collapsible:false,minimizable:false,maximizable:false,modal:true">
					<div class="easyui-layout" data-options="fit:true">


						<form id="form_edit" method="post" target="if"
							class="form-horizontal" enctype="multipart/form-data"
							action="{{$web_root}}imgcarousel/editData">



							<div class="control-group" hidden="true">
								<input type="text" id="edit_id" name="id" hidden="true">
							</div>
							<div class="control-group">
								<label class="control-label" for="Text input">Title名称:</label>
								<div class="controls">
									<input type="text" class="easyui-validatebox"
										data-options="required:true" id="edit_title" name="title"　>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="Text input">图片选择:</label>
								<div class="controls">
									<input type="file" id="file" name="file"
										class="easyui-validatebox">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="Text input">Url:</label>
								<div class="controls">
									<input id="edit_url" name="url">
									</textarea>
								</div>
							</div>


							<div class="control-group">
								<label class="control-label" for="Text input">显示位置:</label>
								<div class="controls">
									<select id="edit_showindex" name="showindex">
										<option selected="selected">1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
										<option>12</option>
										<option>13</option>
										<option>14</option>
										<option>15</option>
										<option>16</option>
										<option>17</option>
									</select>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="Text input">时间:</label>
								<div class="controls">
									<input id="edit_product_time" name="product_time"></input>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="Text input">描述:</label>
								<div class="controls">
									<textarea rows="2" id="edit_desc" name="desc"></textarea>
								</div>
							</div>

							<div class="form-actions" id="div_edit">
								<button type="submit" style="width: 100px;"
									class="btn btn-primary">修改</button>
								<button type="button" onclick="win_close()"
									style="width: 100px;" class="btn">取消</button>
							</div>
						</form>
						<iframe name="if" src="" width=600px height="0" frameborder=0
							SCROLLING="no" style="display: NONE"></iframe>
					</div>
				</div>
				<!--- END 以下内容不需更改，请保证该TPL页内的标签匹配即可 --->
				{{include file="admin/footer.tpl" }}
@extends('layouts.master')
@section('title','後台管理 學校')

@section('content')
    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif


    <table id="dg" title="學校" class="easyui-datagrid" style="width:1200px;height:500px" 
        url="school" toolbar="#toolbar" pagination="true" method="get"
        rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                
                <th id="qwer" field="isPrivate" width="30">公立:0/私立:1</th>
                <th field="schoolCode" width="30">學校代碼</th>
                <th field="schoolName" width="70">學校</th>
                <th field="collegeName" width="70">學院</th>
                <th field="departmentName" width="70">系所</th>
                <th field="educationSystemName" width="50">學制</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">新增</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">編輯</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">刪除</a>
    </div>
    
    <div id="dlg" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <form id="fm" method="post" acion="{{ action('SchoolController@save')}}" style="margin:0;padding:20px 50px">
          
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h3>學校資訊</h3>
            <div style="margin-bottom:10px">
                <input name="isPrivate" class="easyui-textbox" required="true" label="公立/私立:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="schoolCode" class="easyui-textbox" required="true" label="學校代碼:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input name="schoolName" class="easyui-textbox" required="true" label="學校:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input name="collegeName" class="easyui-textbox" required="true" label="學院:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input name="departmentName" class="easyui-textbox" required="true" label="系所:" style="width:100%">
            </div>
            <div style="margin-bottom:10px">
                <input name="educationSystemName" class="easyui-textbox" required="true" label="學制:" style="width:100%" >
            </div>
            <div id="dlg-buttons" class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary btn-block" onclick="saveUser()">
                    修改
                    </button>
                </div>
                <div class="col-md-6">
                    <a href="{{ url('/btschool') }}" class="btn btn-danger btn-block">
                    返回
                    </a>
                </div>
            </div>
        </form>
    </div>
    <div id="dlg-buttons">
        <!-- <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a> -->
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')" style="width:90px">Cancel</a>
    </div>
    <script type="text/javascript">
        
        

        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','New School');
            url = '{{ action('SchoolController@save')}}';
        }
        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit School');
                $('#fm').form('load',row);
                url = 'update_user.php?id='+row.id;
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
                        $('#dlg').dialog('close');        // close the dialog
                        $('#dg').datagrid('reload');    // reload the user data
                    }
                }
            });
        }
        function destroyUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $.messager.confirm('Confirm','Are you sure you want to destroy this user?',function(r){
                    if (r){
                        $.post('destroy_user.php',{id:row.id},function(result){
                            if (result.success){
                                $('#dg').datagrid('reload');    // reload the user data
                            } else {
                                $.messager.show({    // show error message
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
    
@stop
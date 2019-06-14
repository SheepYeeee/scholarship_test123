@extends('layouts.master')
@section('title','後台管理 獎學金')

@section('scholarship_active','active')

@section('content')
    @if($errors->any())
        <h4>{{$errors->first()}}</h4>
    @endif


    <table id="dg" title="獎學金" class="easyui-datagrid" style="width:1200px;height:500px" 
        url="scholarship" toolbar="#toolbar" pagination="true" method="get"
        rownumbers="true" fitColumns="true" singleSelect="true">
        <thead>
            <tr>
                <th field="scholarshipId" width="30">獎學金ID</th>
                <th field="scholarshipCode" width="30">獎學金序號</th>
                <th field="sponsor" width="70">獎學金單位</th>
                <th field="schedule" width="70">發放期程</th>
                <th field="isGovernmentScholarship" width="70">公費限制</th>
                <th field="isStudent" width="50">獎金限制</th>
            </tr>
        </thead>
    </table>
    <div id="toolbar">
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newUser()">新增</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editUser()">編輯</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="destroyUser()">刪除</a>
    </div>
    <div id="dlg" class="easyui-dialog" style="width:400px;" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons'">
        <input id="crud" type="hidden" name="crud">
        <input type="hidden" name="schoolId" value="">
        <h3>獎學金資訊</h3>
        <form id="fm4" method="post" acion="{{ action('ScholarshipController@save')}}" style="margin:0;padding:20px 50px">
            <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <div style="margin-bottom:10px">
                <input name="scholarshipId" class="easyui-textbox" required="true" label="獎學金ID:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input name="scholarshipCode" class="easyui-textbox" required="true" label="獎學金序號:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input id="nn" name="sponsor" class="easyui-textbox" required="true" label="獎學金單位:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input id="nc" name="scholarshipName" class="easyui-textbox" required="true" label="獎學金名稱:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input id="od" name="schedule" class="easyui-textbox" required="true" label="發放期程:" style="width:100%" value>
            </div>
            <div style="margin-bottom:10px">
                <input name="isGovernmentScholarship" class="easyui-textbox" required="true" label="公費限制:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input name="isOtherRestrictions" class="easyui-textbox" required="true" label="其他限制:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input name="isStudent" class="easyui-textbox" required="true" label="在學生限制:" style="width:100%" >
            </div>

            <div id="dlg-buttons" class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary btn-block" onclick="step2()">
                    下一步
                    </button>
                </div>
            </div>
        </form>
    </div>


    <div id="dlg-buttons" >
        <!-- <a href="javascript:void(0)" class="easyui-linkbutton c6" iconCls="icon-ok" onclick="saveUser()" style="width:90px">Save</a> -->
        <center>
        <button style="align: center;width:78%;" href="javascript:void(0)" type="submit" class="btn btn-danger btn-block" onclick="javascript:$('#dlg').dialog('close');  $('#fm').form('clear'); document.getElementById('token').value='{{ csrf_token() }}'">取消</button>
        </center>
        <!-- <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close');  $('#fm').form('clear'); document.getElementById('token').value='{{ csrf_token() }}'" style="width:90px">Cancel</a> -->
    </div>

    <!-- ******************************************************************************************************* -->


    <div id="dlg1" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons1'">
        <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
        <input id="crud" type="hidden" name="crud">
        <input type="hidden" name="schoolId" value="">
        <h3>獎學金資訊</h3>
        <form id="fm4" method="post" acion="{{ action('ScholarshipController@save')}}" style="margin:0;padding:20px 50px">
            <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

            <div style="margin-bottom:10px">
                <input name="schoolId" class="easyui-textbox" required="true" label="學校ID:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input name="collegeId" class="easyui-textbox" required="true" label="學院ID:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input id="nn" name="departmentId" class="easyui-textbox" required="true" label="系所ID:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input id="nc" name="disciplineId" class="easyui-textbox" required="true" label="學門ID:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input id="od" name="isPublic" class="easyui-textbox" required="true" label="公立:" style="width:100%" value>
            </div>
            <div style="margin-bottom:10px">
                <input name="isPrivate" class="easyui-textbox" required="true" label="私立:" style="width:100%" >
            </div>
            <div style="margin-bottom:10px">
                <input name="educationSystemId" class="easyui-textbox" required="true" label="學制ID:" style="width:100%" >
            </div>

            <div id="dlg-buttons1" class="row">
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary btn-block" onclick="step3_back()">
                    上一步
                    </button>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-primary btn-block" onclick="step3()">
                    下一步
                    </button>
                </div>
            </div>
        </form>
    </div>


    <div id="dlg-buttons1" >
        <center>
            <button style="align: center;width:78%;" href="javascript:void(0)" type="submit" class="btn btn-danger btn-block" onclick="javascript:$('#dlg1').dialog('close');  $('#fm').form('clear'); document.getElementById('token').value='{{ csrf_token() }}'">取消
            </button>
        </center>
    </div>


    <!-- ******************************************************************************************************* -->


      <div id="dlg2" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons2'">
            <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <input id="crud" type="hidden" name="crud">
            <input type="hidden" name="schoolId" value="">
            <h3>獎學金資訊</h3>
            <form id="fm4" method="post" acion="{{ action('ScholarshipController@save')}}" style="margin:0;padding:20px 50px">
                <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

                <div style="margin-bottom:10px">
                    <input name="intellectualEducation" class="easyui-textbox" required="true" label="智育:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input name="moralEducation" class="easyui-textbox" required="true" label="操行:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input id="nn" name="physicalEducation" class="easyui-textbox" required="true" label="體育:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input id="nc" name="averageScore" class="easyui-textbox" required="true" label="總成績:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input id="od" name="nationId" class="easyui-textbox" required="true" label="國籍ID:" style="width:100%" value>
                </div>
                <div style="margin-bottom:10px">
                    <input name="countyId" class="easyui-textbox" required="true" label="戶籍ID:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input name="amount" class="easyui-textbox" required="true" label="金額:" style="width:100%" >
                </div>
                 <div style="margin-bottom:10px">
                    <input name="quota" class="easyui-textbox" required="true" label="名額:" style="width:100%" >
                </div>


                <div id="dlg-buttons2" class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary btn-block" onclick="step4_back()">
                        上一步
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary btn-block" onclick="step4()">
                        下一步
                        </button>
                    </div>
                </div>
            </form>
        </div>

    <div id="dlg-buttons2" >
        <center>
        <button style="align: center;width:78%;" href="javascript:void(0)" type="submit" class="btn btn-danger btn-block" onclick="javascript:$('#dlg2').dialog('close');  $('#fm').form('clear'); document.getElementById('token').value='{{ csrf_token() }}'">取消</button>
        </center>
    </div>


    <!-- ******************************************************************************************************* -->


      <div id="dlg3" class="easyui-dialog" style="width:400px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons3'">
            <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <input id="crud" type="hidden" name="crud">
            <input type="hidden" name="schoolId" value="">
            <h3>獎學金資訊</h3>
            <form id="fm4" method="post" acion="{{ action('ScholarshipController@save')}}" style="margin:0;padding:20px 50px">
                <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
                <div style="margin-bottom:5px">
                    <p style="margin-bottom:0px">申請條件說明:</p>
                    <textarea name="condition" required="true" label="" style="width:90%;height:80px; margin-left:20px;"></textarea>
                </div>
               <div style="margin-bottom:5px">
                    <p style="margin-bottom:0px">申請方式說明:</p>
                    <textarea name="description " required="true" label="" style="width:90%;height:80px; margin-left:20px;"></textarea>
                </div>
                <div style="margin-bottom:10px">
                    <input id="nn" name="contactInfomation" class="easyui-textbox" required="true" label="聯絡資訊:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input id="nc" name="deadline" class="easyui-textbox" required="true" label="截止時間:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input id="od" name="contactNumber" class="easyui-textbox" required="true" label="聯絡電話:" style="width:100%" value>
                </div>

                <div id="dlg-buttons3" class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary btn-block" onclick="step5_back()">
                        上一步
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary btn-block" onclick="step5()">
                        下一步
                        </button>
                    </div>
                </div>
            </form>
        </div>

    <div id="dlg-buttons3" >
        <center>
        <button style="align: center;width:78%;" href="javascript:void(0)" type="submit" class="btn btn-danger btn-block" onclick="javascript:$('#dlg3').dialog('close');  $('#fm').form('clear'); document.getElementById('token').value='{{ csrf_token() }}'">取消</button>
        </center>
    </div>

 
    <!-- ******************************************************************************************************* -->

        <div id="dlg4" class="easyui-dialog" style="width:500px" data-options="closed:true,modal:true,border:'thin',buttons:'#dlg-buttons4'">
            <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
            <input id="crud" type="hidden" name="crud">
            <input type="hidden" name="schoolId" value="">
            <h3>獎學金資訊</h3>
            <form id="fm4" method="post" acion="{{ action('ScholarshipController@save')}}" style="margin:0;padding:20px 50px">
                <input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">

                <div style="margin-bottom:10px">
                    <input id="nn" name="organizer" class="easyui-textbox" required="true" label="承辦人員:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input id="nc" name="announcementWebsite" class="easyui-textbox" required="true" label="公告資訊:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input id="od" name="accountIdOfDuty" class="easyui-textbox" required="true" label="處理人員:" style="width:100%" value>
                </div>
                <div style="margin-bottom:10px">
                    <input name="accountIdOfReview" class="easyui-textbox" required="true" label="複查人員:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input name="isLaunch" class="easyui-textbox" required="true" label="上架:" style="width:100%" >
                </div>
                <div style="margin-bottom:10px">
                    <input name="accountIdOfLaunch" class="easyui-textbox" required="true" label="上架人員:" style="width:100%" >
                </div>


                <div id="dlg-buttons4" class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary btn-block" onclick="step6_back()">
                        上一步
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-primary btn-block" onclick="allPost()">
                        送出
                        </button>
                    </div>
                </div>
            </form>
        </div>

    <div id="dlg-buttons4" >
        <center>
        <button style="align: center;width:78%;" href="javascript:void(0)" type="submit" class="btn btn-danger btn-block" onclick="javascript:$('#dlg4').dialog('close');  $('#fm').form('clear'); document.getElementById('token').value='{{ csrf_token() }}'">取消</button>
        </center>
    </div>

    <!-- ******************************************************************************************************* -->

    <script type="text/javascript">

        function allPost(){
            
            // var tform = document.getElementById('fm');
            // var tform1 = document.getElementById('fm1');
            // var tform2 = document.getElementById('fm2');
            // var tform3 = document.getElementById('fm3');
            // var tform4 = document.getElementById('fm4');

            // tform.submit();
            // tform1.submit();
            // tform2.submit();
            // tform3.submit();
            // alert(tform4.submit());

            //這個方法失敗
            //目前問題:只能post的一個表單的資料出去，無法post全部的資料
            //最Crazy的想法是所有input都給一個id，利用JS的DOM取值到同一個form，再一起Post出去。

        }
        
        function step2(){
             $('#dlg').dialog('close');
             $('#dlg1').dialog('open').dialog('center').dialog('setTitle','New Scholarship');
        }

        function step3(){
             $('#dlg1').dialog('close');
             $('#dlg2').dialog('open').dialog('center').dialog('setTitle','New Scholarship');
        }

        function step3_back(){
             $('#dlg1').dialog('close');
             $('#dlg').dialog('open').dialog('center').dialog('setTitle','New Scholarship');
        }

        function step4(){
             $('#dlg2').dialog('close');
             $('#dlg3').dialog('open').dialog('center').dialog('setTitle','New Scholarship');
        }

        function step4_back(){
             $('#dlg2').dialog('close');
             $('#dlg1').dialog('open').dialog('center').dialog('setTitle','New Scholarship');
        }

        function step5(){
             $('#dlg3').dialog('close');
             $('#dlg4').dialog('open').dialog('center').dialog('setTitle','New Scholarship');
        }

        function step5_back(){
            $('#dlg3').dialog('close');
             $('#dlg2').dialog('open').dialog('center').dialog('setTitle','New Scholarship');
        }

        function step6_back(){
             $('#dlg4').dialog('close');
             $('#dlg3').dialog('open').dialog('center').dialog('setTitle','New Scholarship');
        }

        var url;
        function newUser(){
            $('#dlg').dialog('open').dialog('center').dialog('setTitle','New Scholarship');
             document.getElementById('crud').value='insert';

        }
        function editUser(){
            var row = $('#dg').datagrid('getSelected');
            if (row){
                $('#dlg').dialog('open').dialog('center').dialog('setTitle','Edit Scholarship');
                $('#fm').form('load',row);
                document.getElementById('crud').value='edit';
            }
             var dp = document.getElementById('od').value;
                    document.getElementById('ppd').value=dp;
             var sn = document.getElementById('nn').value;
                    document.getElementById('osn').value=sn;
             var cn = document.getElementById('nc').value;
                    document.getElementById('ocn').value=cn;

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
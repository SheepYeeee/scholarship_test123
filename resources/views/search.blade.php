@extends('layouts.end')
@section('title','台灣公益組織教育基金會')

@section('content')

 <!-- MAIN -->
 <main class="w-main w-main-a">
        <article class="w-search-wrap">
            <div class="container">
                <div class="post-header">
                    <div class="title-box">
                        <h2 class="title">搜尋獎學金</h2>
                        <p class="desc">Search</p>
                    </div>
                </div>
                <div class="post-body">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="search.html">在校學生
                            </a>
                        </li>
                        <li>
                            <!-- <a href="http://www.ftope.org.tw/searchNoStudent">論文獎學金</a> -->
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="title-img"><img src="http://www.ftope.org.tw/resources/views/home/images/cap.png"></div>
                        
                        <div class="tab-pane fade in active" id="student">

                            <div class="alert-box">
                                <p>請設定以下條件，搜尋適合的獎助學金資訊。<img src="http://www.ftope.org.tw/resources/views/home/images/must.png" style=" padding: 3px 10px;">為必填欄位，請務必填寫完成，謝謝！</p>
                            </div>


                            <!--  表單  -->
                            <form role="form" class="scholarship-search-form" method="post" action="file:///D:/%E5%91%B5%E5%91%B5%E5%85%86%E8%BF%AA/%E5%B0%88%E6%A1%88%E5%94%B7/searchResultPage.html">

                                <!--  sub表單1 begin  -->
                                <div id="form1">
                                    <div class="form-group">
                                        <label class="form-title"><span class="s-must"></span><span class="form-text">學制</span></label>
                                        <div class="ui-radio-9 search-list">
                                            <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem1" name="educationSystemItem" value="1" onClick="getSchoolItem(1)">
                                                        <label class="radio-label" for="educationSystemItem1">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>博士班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem2" name="educationSystemItem" value="2" onClick="getSchoolItem(2)">
                                                        <label class="radio-label" for="educationSystemItem2">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>碩士班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem3" name="educationSystemItem" value="3" onClick="getSchoolItem(3)">
                                                        <label class="radio-label" for="educationSystemItem3">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>學士班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem4" name="educationSystemItem" value="4" onClick="getSchoolItem(4)">
                                                        <label class="radio-label" for="educationSystemItem4">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>碩士在職專班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem5" name="educationSystemItem" value="5" onClick="getSchoolItem(5)">
                                                        <label class="radio-label" for="educationSystemItem5">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>進修學士班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem6" name="educationSystemItem" value="6" onClick="getSchoolItem(6)">
                                                        <label class="radio-label" for="educationSystemItem6">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>二年制在職專班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem7" name="educationSystemItem" value="7" onClick="getSchoolItem(7)">
                                                        <label class="radio-label" for="educationSystemItem7">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>四技(日)</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem8" name="educationSystemItem" value="8" onClick="getSchoolItem(8)">
                                                        <label class="radio-label" for="educationSystemItem8">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>二技(日)</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem9" name="educationSystemItem" value="9" onClick="getSchoolItem(9)">
                                                        <label class="radio-label" for="educationSystemItem9">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>產業碩士專班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem10" name="educationSystemItem" value="10" onClick="getSchoolItem(10)">
                                                        <label class="radio-label" for="educationSystemItem10">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>四技進修部</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem11" name="educationSystemItem" value="11" onClick="getSchoolItem(11)">
                                                        <label class="radio-label" for="educationSystemItem11">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>二技進修部</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem12" name="educationSystemItem" value="12" onClick="getSchoolItem(12)">
                                                        <label class="radio-label" for="educationSystemItem12">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>進修學院(二技)</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem13" name="educationSystemItem" value="13" onClick="getSchoolItem(13)">
                                                        <label class="radio-label" for="educationSystemItem13">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>七年一貫制前3年</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem14" name="educationSystemItem" value="14" onClick="getSchoolItem(14)">
                                                        <label class="radio-label" for="educationSystemItem14">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>五專(日)</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem15" name="educationSystemItem" value="15" onClick="getSchoolItem(15)">
                                                        <label class="radio-label" for="educationSystemItem15">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>二專進修專校</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem16" name="educationSystemItem" value="16" onClick="getSchoolItem(16)">
                                                        <label class="radio-label" for="educationSystemItem16">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>4+X(進修)</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem17" name="educationSystemItem" value="17" onClick="getSchoolItem(17)">
                                                        <label class="radio-label" for="educationSystemItem17">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>二專夜間部</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem18" name="educationSystemItem" value="18" onClick="getSchoolItem(18)">
                                                        <label class="radio-label" for="educationSystemItem18">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>二專(日)</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem19" name="educationSystemItem" value="19" onClick="getSchoolItem(19)">
                                                        <label class="radio-label" for="educationSystemItem19">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>日間二年制專科班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem20" name="educationSystemItem" value="20" onClick="getSchoolItem(20)">
                                                        <label class="radio-label" for="educationSystemItem20">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>四技在職專班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem21" name="educationSystemItem" value="21" onClick="getSchoolItem(21)">
                                                        <label class="radio-label" for="educationSystemItem21">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>4+X(日間)</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem22" name="educationSystemItem" value="22" onClick="getSchoolItem(22)">
                                                        <label class="radio-label" for="educationSystemItem22">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>二專在職專班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem23" name="educationSystemItem" value="23" onClick="getSchoolItem(23)">
                                                        <label class="radio-label" for="educationSystemItem23">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>五年制專科班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem24" name="educationSystemItem" value="24" onClick="getSchoolItem(24)">
                                                        <label class="radio-label" for="educationSystemItem24">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>進修二年制專科班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem25" name="educationSystemItem" value="25" onClick="getSchoolItem(25)">
                                                        <label class="radio-label" for="educationSystemItem25">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>二技(日)七年一貫</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem26" name="educationSystemItem" value="26" onClick="getSchoolItem(26)">
                                                        <label class="radio-label" for="educationSystemItem26">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>五專(日)七年一貫</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem27" name="educationSystemItem" value="27" onClick="getSchoolItem(27)">
                                                        <label class="radio-label" for="educationSystemItem27">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>二技在職專班</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem32" name="educationSystemItem" value="32" onClick="getSchoolItem(32)">
                                                        <label class="radio-label" for="educationSystemItem32">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>五專前三年</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem33" name="educationSystemItem" value="33" onClick="getSchoolItem(33)">
                                                        <label class="radio-label" for="educationSystemItem33">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>高中</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem34" name="educationSystemItem" value="34" onClick="getSchoolItem(34)">
                                                        <label class="radio-label" for="educationSystemItem34">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>國中</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem35" name="educationSystemItem" value="35" onClick="getSchoolItem(35)">
                                                        <label class="radio-label" for="educationSystemItem35">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>國小</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem36" name="educationSystemItem" value="36" onClick="getSchoolItem(36)">
                                                        <label class="radio-label" for="educationSystemItem36">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>高職</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem37" name="educationSystemItem" value="37" onClick="getSchoolItem(37)">
                                                        <label class="radio-label" for="educationSystemItem37">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>博士後研究</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="radio-group">
                                                        <input class="radio-input" type="radio" id="educationSystemItem38" name="educationSystemItem" value="38" onClick="getSchoolItem(38)">
                                                        <label class="radio-label" for="educationSystemItem38">
                                                            <div class="inner info">
                                                                <div class="radio-text">
                                                                    <p>幼稚園</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                    
                                                                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-title"></span><span class="form-text">學校科系</span></label>
                                        <div class="ui-radio-9 search-list">
                                            <div class="select-group">
                                                <div class="select-box">
                                                    <div class="select-control">
                                                        <select id="schoolItem" onChange="getDepartmentItem(this)" name="schoolItem" class="selectpicker">
                                                            <option selected disabled hidden style='display:none' value=''> </option>
                                                        </select>  
                                                    </div>
                                                    <span class="select-text-after">(就讀學校)</span> 
                                                </div>
                                                <div class="select-box">
                                                    <div class="select-control">
                                                        <select id="departmentItem" name="departmentItem" class="selectpicker">
                                                            <option selected disabled hidden style='display:none' value=''> </option>
                                                        </select>  
                                                    </div>
                                                    <span class="select-text-after">(系所名稱)</span> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-title"><span class="s-must"></span><span class="form-text">我的成績</span></label>
                                        <div class="ui-radio-9 search-list">
                                            <div class="select-group">
                                                <div class="select-box">
                                                    <span class="select-text-before">德育</span>
                                                    <div class="select-control grade-control">
                                                        <select name="moralEducation" class="selectpicker">
                                                            <option value="a">90分以上</option>
                                                            <option value="b">80~89分</option>
                                                            <option value="c">70~79分</option>
                                                            <option value="d">60~69分</option>
                                                            <option value="e">不拘</option>
                                                        </select>  
                                                    </div>
                                                </div>
                                                <div class="select-box">
                                                    <span class="select-text-before">智育</span>
                                                    <div class="select-control grade-control">
                                                        <select name="intellectualEducation" class="selectpicker">
                                                            <option value="a">90分以上</option>
                                                            <option value="b">80~89分</option>
                                                            <option value="c">70~79分</option>
                                                            <option value="d">60~69分</option>
                                                            <option value="e">不拘</option>
                                                        </select>  
                                                    </div>
                                                </div>
                                                <div class="select-box">
                                                    <span class="select-text-before">體育</span>
                                                    <div class="select-control grade-control">
                                                        <select name="physicalEducation" class="selectpicker">
                                                            <option value="a">90分以上</option>
                                                            <option value="b">80~89分</option>
                                                            <option value="c">70~79分</option>
                                                            <option value="d">60~69分</option>
                                                            <option value="e">不拘</option>
                                                        </select>  
                                                    </div>
                                                </div>
                                                <div class="select-box">
                                                    <span class="select-text-before">平均學年成績</span>
                                                    <div class="select-control grade-control">
                                                        <select name="averageScore" class="selectpicker">
                                                            <option value="a">90分以上</option>
                                                            <option value="b">80~89分</option>
                                                            <option value="c">70~79分</option>
                                                            <option value="d">60~69分</option>
                                                            <option value="e">不拘</option>
                                                        </select>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn-box col-md-12">
                                        <button type="button" class="btn btn-next" onclick="goToStudentForm2();" value="下一頁">下一頁</button>
                                    </div>
                                </div>
                                <!--  sub表單1 end  -->

                                <!--  sub表單2 begin  -->
                                <div id="form2" hidden>
                                    <div class="form-group">
                                        <label class="form-title"><span class="form-text">獎學金申請身份條件 (可複選、最多6項)</span></label>
                                        <div class="ui-checkbox-9 search-list">
                                            <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem1" name="identityItem[]" value="1">
                                                        <label class="checkbox-label" for="identityItem1">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>新生</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem2" name="identityItem[]" value="2">
                                                        <label class="checkbox-label" for="identityItem2">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>在職生</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem3" name="identityItem[]" value="3">
                                                        <label class="checkbox-label" for="identityItem3">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>成績優異</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem4" name="identityItem[]" value="4">
                                                        <label class="checkbox-label" for="identityItem4">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>女性學生</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem5" name="identityItem[]" value="5">
                                                        <label class="checkbox-label" for="identityItem5">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>同鄉會</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                        <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem6" name="identityItem[]" value="6">
                                                        <label class="checkbox-label" for="identityItem6">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>區域性</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                        <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem7" name="identityItem[]" value="7">
                                                        <label class="checkbox-label" for="identityItem7">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>低收入戶</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                        <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem8" name="identityItem[]" value="8">
                                                        <label class="checkbox-label" for="identityItem8">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>中低收入戶</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                        <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem9" name="identityItem[]" value="9">
                                                        <label class="checkbox-label" for="identityItem9">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>清寒生</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem10" name="identityItem[]" value="10">
                                                        <label class="checkbox-label" for="identityItem10">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>身心障礙人士</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem11" name="identityItem[]" value="11">
                                                        <label class="checkbox-label" for="identityItem11">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>勞工子女</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem12" name="identityItem[]" value="12">
                                                        <label class="checkbox-label" for="identityItem12">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>農民子女</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem13" name="identityItem[]" value="13">
                                                        <label class="checkbox-label" for="identityItem13">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>漁民子女</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem14" name="identityItem[]" value="14">
                                                        <label class="checkbox-label" for="identityItem14">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>特殊境遇家庭</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem15" name="identityItem[]" value="15">
                                                        <label class="checkbox-label" for="identityItem15">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>特殊教育生</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem16" name="identityItem[]" value="16">
                                                        <label class="checkbox-label" for="identityItem16">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>失怙學生</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem17" name="identityItem[]" value="17">
                                                        <label class="checkbox-label" for="identityItem17">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>單親子女</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem18" name="identityItem[]" value="18">
                                                        <label class="checkbox-label" for="identityItem18">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>病友類  
                                                                    （癌症家庭子女、心臟病、肝病…等）</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem19" name="identityItem[]" value="19">
                                                        <label class="checkbox-label" for="identityItem19">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>宗親會</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem20" name="identityItem[]" value="20">
                                                        <label class="checkbox-label" for="identityItem20">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>僑生</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem21" name="identityItem[]" value="21">
                                                        <label class="checkbox-label" for="identityItem21">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>原住民</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem22" name="identityItem[]" value="22">
                                                        <label class="checkbox-label" for="identityItem22">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>新住民</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem23" name="identityItem[]" value="23">
                                                        <label class="checkbox-label" for="identityItem23">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>榮民遺眷子女</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem24" name="identityItem[]" value="24">
                                                        <label class="checkbox-label" for="identityItem24">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>軍公教警消子女</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem25" name="identityItem[]" value="25">
                                                        <label class="checkbox-label" for="identityItem25">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>公會會員及子女</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem26" name="identityItem[]" value="26">
                                                        <label class="checkbox-label" for="identityItem26">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>工會會員及子女</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem28" name="identityItem[]" value="28">
                                                        <label class="checkbox-label" for="identityItem28">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>產學合作</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem29" name="identityItem[]" value="29">
                                                        <label class="checkbox-label" for="identityItem29">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>服務類</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem30" name="identityItem[]" value="30">
                                                        <label class="checkbox-label" for="identityItem30">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>論文類</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem31" name="identityItem[]" value="31">
                                                        <label class="checkbox-label" for="identityItem31">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>期刊類</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem32" name="identityItem[]" value="32">
                                                        <label class="checkbox-label" for="identityItem32">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>特殊才藝</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem33" name="identityItem[]" value="33">
                                                        <label class="checkbox-label" for="identityItem33">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>未享有公費者</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                                                                    <div class="checkbox-group">
                                                        <input class="checkbox-input identityItem" type="checkbox" id="identityItem34" name="identityItem[]" value="34">
                                                        <label class="checkbox-label" for="identityItem34">
                                                            <div class="inner info">
                                                                <div class="checkbox-text">
                                                                    <p>具有其他省籍身份</p>
                                                                </div>
                                                            </div>
                                                        </label>                            
                                                    </div>
                                                    
                                                                                      
                                        </div>
                                    </div>

                                    <div class="btn-box col-md-12">
                                        <button type="button" class="btn btn-back" onclick="goToStudentForm1();" value="上一頁">上一頁</button>
                                        <button type="button" class="btn btn-next" onclick="goToStudentForm3();" value="下一頁">下一頁</button>
                                    </div>
                                </div>
                                <!--  sub表單2 end  -->

                                <!--  sub表單3 begin  -->
                                <div id="form3" hidden>
                                    <div class="form-group">
                                        <label class="form-title"><span class="form-text">國籍</span></label>
                                        <div class="ui-radio-9 search-list">
                                            <div class="radio-group">
                                                <input class="radio-input" type="radio" id="native" name="nationality" value="native" onClick="getCountyItem()">
                                                <label class="radio-label" for="native">
                                                    <div class="inner info">
                                                        <div class="radio-text">
                                                            <p>中華民國國籍</p>
                                                        </div>
                                                    </div>
                                                </label>                            
                                            </div>
                                            <!-- <div class="radio-group">
                                                <input class="radio-input" type="radio" id="foreign" name="nationality" value="foreign" onClick="getNationItem()">
                                                <label class="radio-label" for="foreign">
                                                    <div class="inner info">
                                                        <div class="radio-text">
                                                            <p>非中華民國國籍</p>
                                                        </div>
                                                    </div>
                                                </label>                            
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-title"><span class="form-text">區域限制條件 (設籍)</span></label>
                                        <div class="ui-radio-9 search-list">

                                            <span id="area"></span>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label class="form-title"><span class="form-text">其他獎金及補助 (可複選)</span></label>
                                        <div class="ui-checkbox-9 search-list">
                                            <div class="checkbox-group">
                                                <input class="checkbox-input" type="checkbox" id="isGovernmentScholarship" name="isGovernmentScholarship" value="1">
                                                <label class="checkbox-label" for="isGovernmentScholarship">
                                                    <div class="inner info">
                                                        <div class="checkbox-text">
                                                            <p>未領公費</p>
                                                        </div>
                                                    </div>
                                                </label>                            
                                            </div>
                                            <div class="checkbox-group">
                                                <input class="checkbox-input" type="checkbox" id="isOtherRestrictions" name="isOtherRestrictions" value="1">
                                                <label class="checkbox-label" for="isOtherRestrictions">
                                                    <div class="inner info">
                                                        <div class="checkbox-text">
                                                            <p>未領其他獎金</p>
                                                        </div>
                                                    </div>
                                                </label>                            
                                            </div> 
                                        </div>
                                    </div> -->

                                    <div class="ui-tip">必填欄位請填寫完成，謝謝。</div>

                                    <div class="btn-box col-md-12">
                                        <button type="button" class="btn btn-back" onclick="goToStudentForm2();" value="上一頁">上一頁</button>
                                        <button type="submit" class="btn btn-next">送出</button>
                                    </div>
                                </div>
                                <!--  sub表單3 end  -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </main>
    <!-- MAIN 結束 -->


    <!-- messsageModal 公告-->
    <div id="messageModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form role="form">
                    <div class="modal-body">
                        <h4 class="s-title ui-tip" id="msg_content">獎學金資訊寄送至</h4>
                        <div class="form-group">
                        </div>
                        <button type="button" class="btn btn-cancel" data-dismiss="modal" onclick="">確定</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- messsageModal 結束 -->

    <!-- MAIN 結束 -->

    <!-- FOOTER -->
        <footer class="w-footer">
    <div class="ft-top">
        <div class="container">
            <div class="ft-top-left">
                <div class="ft-box">
                    <div class="ft-logo">
                        <img src="http://www.ftope.org.tw/resources/views/home/images/logo-white.png">
                    </div>
                    <ul>
                        <li class="ft-list">
                            客服信箱：<a href="mailto:ftope.tw@gmail.com">ftope.tw@gmail.com</a>
                        </li>
                        <li class="ft-list">
                            地址：台北市松山區慶城街46巷17號5樓
                        </li>
                        <li class="ft-list">
                            聯絡電話：02-89541861
                        </li>
                    </ul>
                    <div class="ft-link">
                        <a href="https://www.facebook.com/ftope.tw/" target="_black"><i class="icon-facebook"></i></a>
                        <a href="https://www.youtube.com/channel/UCcVmOPDXk_GjOAzxbRY24jQ/videos"><i class="icon-youtube" target="_black"></i></a>
                        <a href="javascript: void(window.open(&apos;https://lineit.line.me/share/ui?url=&apos; .concat(encodeURIComponent(location.href)) ));" title="分享至LINE"><i class="icon-line"></i></a>
                    </div>
                </div>
            </div>

            <div class="ft-top-right">
                <div class="ft-box">
                    <div class="title">捐款方式</div>
                    <ul class="ft-item">
                        <li>捐款帳號：<br>彰化銀行 6204-01-30271-4-00</li>
                        <li>戶名：<br>財團法人台灣公益組織教育基金會</li>
                    </ul>
                </div>
                <div class="ft-box">
                    <div class="title">總計 Total</div>
                    <ul class="ft-item">
                        <li><span id="scholarshipCountFooter"></span> 筆獎學金</li>
                        <li><span id="people"></span> 瀏覽人次</li>
                    </ul>
                </div>
            </div>   
        </div>
    </div>
    <div class="ft-bottom">
        <div class="container">
            <div class="copyright">
                <p>Copyright © 2018 台灣公益組織教育基金會. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>   <!-- FOOTER 結束  -->

        
<script type="text/javascript" async="" src="<?php echo asset('../js/analytics.js'); ?>"></script>
<script src="https://connect.facebook.net/signals/plugins/inferredEvents.js?v=2.8.51" async=""></script>
<script src="https://connect.facebook.net/signals/config/746238395721181?v=2.8.51&amp;r=stable" async=""></script>
<script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" src="<?php echo asset('../bower/jquery/dist/jquery.min.js'); ?>"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo asset('../bower/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo asset('../bower/bootstrap-select/dist/js/bootstrap-select.min.js'); ?>"></script>

<!--vendor-->
        <script type="text/javascript" src="<?php echo asset('../bower/swiper/dist/js/swiper.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo asset('../bower/webticker/jquery.webticker.min.js'); ?>"></script>
        <!-- parallax -->
        <script type="text/javascript" src="<?php echo asset('../bower/stellar/js/jquery.stellar.js'); ?>"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="<?php echo asset('../bower/magnific-popup/dist/jquery.magnific-popup.min.js'); ?>"></script>
        <!-- 多行溢出 -->
        <script type="text/javascript" src="<?php echo asset('../bower/shave-master/dist/shave.min.js'); ?>"></script>
        <!-- into -->
        <script type="text/javascript" src="<?php echo asset('../js/into.js'); ?>"></script>
        <!-- my-js -->
<script>
/** include my-js */
$(document).ready(function() {
    // console.log('include my-js');
    //取得會員資料
    memberInfo();
});

//PARAM
var myHostUrl = 'http://www.ftope.org.tw/';

/** 登入 */
function login() {

    var parameter = {
        account: $("#loginEmail").val(),
        password: $("#loginPassword").val(),
        captcha: $("#captcha").val(),
    }

    var verify = verificationLoginParameter(parameter);

    if (verify.error) {

        $('.ui-tip').html(verify.errorMsg);

    } else if (verify === true) {

        $.ajax({
            url: myHostUrl+'member/login',
            type: 'POST',
            data: parameter,
            dataType: 'json',
            success: function(res) {
                if (res.success === true) {
                    //取得會員資料
                    memberInfo();
                } else if (res.error) {
                    $('.ui-tip').html(res.errorMsg);
                } else {
                    $('.ui-tip').html('不明錯誤原因');
                }
            },
            error: function(err) {
                // console.log(err);
            }
        });
    }
}

/** 登入參數驗證 */
function verificationLoginParameter(parameter) {

    if (!parameter.account) {
        return {error:'requireKeyNotExist', errorMsg:'請輸入您申請的Email'}
    }
    if (!parameter.password) {
        return {error:'requireKeyNotExist', errorMsg:'請輸入您的密碼'}
    }
    if (!parameter.captcha) {
        return {error:'requireKeyNotExist', errorMsg:'請輸入驗證碼'}
    }

    return true;
}

/** 注冊清空 */
function loginClear() {
    $("#loginAccount").val('');
    $("#loginPassword").val('');
    $('#captcha').val('');
    $("#captcha_img").click();
    clearUiTip();
}

/** 申請偵測短碼 */
function registerCounter() {

    var image = new Image(1, 1);
    image.src = "//www.facebook.com/tr?id=746238395721181&ev=PageView&noscript=1";

}

/** 註冊 */
function register() {

    var parameter = {
        account: $("#registerEmail").val(),
        password: $("#registerPassword").val(),
        name: $('#registerName').val(),
    }

    var verify = verificationRegisterParameter(parameter);

    if (verify.error) {

        $('.ui-tip').html(verify.errorMsg);

    } else if (verify === true) {

        $.ajax({
            url: myHostUrl+'member/register',
            type: 'POST',
            data: parameter,
            dataType: 'json',
            success: function(res) {
                // console.log(res);
                if (res.success === true) {
                    //取得會員資料
                    memberInfo();
                } else if (res.error) {
                    $('.ui-tip').html(res.errorMsg);
                } else {
                    $('.ui-tip').html('不明錯誤原因');
                }
            },
            error: function(err) {
                // console.log(err);
            }
        });
    }
}

/** 註冊參數驗證 */
function verificationRegisterParameter(parameter) {

    if (!parameter.account) {
        return {error:'requireKeyNotExist', errorMsg:'請輸入欲申請的Email'}
    }
    if (!parameter.password) {
        return {error:'requireKeyNotExist', errorMsg:'請輸入密碼'}
    }
    if (!parameter.name) {
        return {error:'requireKeyNotExist', errorMsg:'請輸入姓名'}
    }

    return true;
}

/** 注冊清空 */
function registerClear() {
    $("#registerAccount").val('');
    $("#registerPassword").val('');
    $('#registerName').val('');
    $("#registerEmail").val('');
    clearUiTip();
}

/** 忘記密碼 */
function forgetPassword() {

    var parameter = {
        email: $("#forgetEmail").val()
    }

    var verify = verificationForgetPwdParameter(parameter);

    if (verify.error) {

        $('.ui-tip').html(verify.errorMsg);

    } else if (verify === true) {

        $.ajax({
            url: myHostUrl+'member/password/forget',
            type: 'POST',
            data: parameter,
            dataType: 'json',
            success: function(res) {
                // console.log(res);
                if (res.success === true) {
                    //切換登入Modal
                    $('#forgetModal').modal('hide');
                    $('#loginModal').modal('show');
                    $('.ui-tip').html(res.message);
                } else if (res.error) {
                    $('.ui-tip').html(res.errorMsg);
                } else {
                    $('.ui-tip').html('不明錯誤原因');
                }
            },
            error: function(err) {
                // console.log(err);
            }
        });
    }
}

/** 忘記密碼參數驗證 */
function verificationForgetPwdParameter(parameter) {

    if (!parameter.email) {
        return {error:'requireKeyNotExist', errorMsg:'請輸入您申請的Email'}
    }

    return true;
}

/** 忘記密碼清空 */
function forgetClear() {
    $("#forgetAccount").val('');
    $("#forgetEmail").val('');
    clearUiTip();
}

/** 修改密碼 */
function editPassword() {

    var parameter = {
        password: $("#editOldPwd").val(),
        newPassword: $("#editNewPwd").val(),
        confirmNewPassword: $("#editNewConfirmPwd").val()
    }

    var verify = verificationEditPwdParameter(parameter);

    if (verify.error) {

        $('.ui-tip').html(verify.errorMsg);

    } else if (verify === true) {

        $.ajax({
            url: myHostUrl+'member/password',
            type: 'PUT',
            data: parameter,
            dataType: 'json',
            success: function(res) {
                // console.log(res);
                if (res.success === true) {
                    //重整
                    window.location.href = 'member/logout';
                } else if (res.error) {
                    $('.ui-tip').html(res.errorMsg);
                } else {
                    $('.ui-tip').html('不明錯誤原因');
                }
            },
            error: function(err) {
                // console.log(err);
            }
        });
    }
}

/** 修改密碼參數驗證 */
function verificationEditPwdParameter(parameter) {

    if (!parameter.password) {
        return {error:'requireKeyNotExist', errorMsg:'請輸入舊密碼'}
    }
    if (!parameter.newPassword) {
        return {error:'requireKeyNotExist', errorMsg:'請輸入新密碼'}
    }
    if (!parameter.confirmNewPassword) {
        return {error:'requireKeyNotExist', errorMsg:'請輸入確認新密碼'}
    }
    if (parameter.password === parameter.newPassword) {
        return {error:'passwordNotDifference', errorMsg:'舊密碼與新密碼相同'}
    }
    if (parameter.newPassword !== parameter.confirmNewPassword) {
        return {error:'passwordNotDifference', errorMsg:'新密碼與確認新密碼不相同'}
    }

    return true;
}

/** 修改密碼清空 */
function editClear() {
    $("#editOldPwd").val('');
    $("#editNewPwd").val('');
    $("#editNewConfirmPwd").val('');
    clearUiTip();
}

/** 清除ui-tip */
function clearUiTip() {
    // console.log('clearUiTip');
    $('.ui-tip').html('');
}

//獎學金搜尋紀錄 在學獎學金 其他條件
$('#otherModal').on('shown.bs.modal', function (e) {

    var nationId = $(e.relatedTarget).data('nation-id');
    var countyId = $(e.relatedTarget).data('county-id');
    var nationName = $(e.relatedTarget).data('nation-name');
    var countyName = $(e.relatedTarget).data('county-name');
    var schoolName = $(e.relatedTarget).data('school-name');
    var educationSystemName = $(e.relatedTarget).data('education-system-name');
    var collegeName = $(e.relatedTarget).data('college-name');
    var departmentName = $(e.relatedTarget).data('department-name');
    var moralEducation = $(e.relatedTarget).data('moral-education');
    var intellectualEducation = $(e.relatedTarget).data('intellectual-education');
    var physicalEducation = $(e.relatedTarget).data('physical-education');
    var averageScore = $(e.relatedTarget).data('average-score');
    var identityItem = $(e.relatedTarget).data('identity-item');
    var isGovernmentScholarship = $(e.relatedTarget).data('is-government-scholarship');
    var isOtherRestrictions = $(e.relatedTarget).data('is-other-restrictions');

    // // console.log(isGovernmentScholarship);
    // // console.log(isOtherRestrictions);

    var modal = $(this);

    if(moralEducation=='a'){
        moralEducation = '德育90分以上';
    }else if(moralEducation=='b'){
        moralEducation = '德育80~89分';                                            
    }else if(moralEducation=='c'){
        moralEducation = '德育70~79分';
    }else if(moralEducation=='d'){
        moralEducation = '德育60~69分';
    }else if(moralEducation=='e'){
        moralEducation = '德育不拘';
    }

    if(intellectualEducation=='a'){
        intellectualEducation = '智育90分以上';
    }else if(intellectualEducation=='b'){
        intellectualEducation = '智育80~89分';
    }else if(intellectualEducation=='c'){
        intellectualEducation = '智育70~79分';
    }else if(intellectualEducation=='d'){
        intellectualEducation = '智育60~69分';
    }else if(intellectualEducation=='e'){
        intellectualEducation = '智育不拘';
    }
                                                               
    if(physicalEducation=='a'){
        physicalEducation = '體育90分以上';
    }else if(physicalEducation=='b'){
        physicalEducation = '體育80~89分';
    }else if(physicalEducation=='c'){
        physicalEducation = '體育70~79分';
    }else if(physicalEducation=='d'){
        physicalEducation = '體育60~69分';
    }else if(physicalEducation=='e'){
        physicalEducation = '體育不拘';
    }

    if(averageScore=='a'){
        averageScore = '平均學年成績90分以上';
    }else if(averageScore=='b'){
        averageScore = '平均學年成績80~89分';
    }else if(averageScore=='c'){
        averageScore = '平均學年成績70~79分';
    }else if(averageScore=='d'){
        averageScore = '平均學年成績60~69分';
    }else if(averageScore=='e'){
        averageScore = '平均學年成績不拘';
    }
    
    if(nationId!=0){
        var area = '外國籍'+' '+nationName;
        $(e.currentTarget).find('#area').text(area);
        
    }else if(countyId!=0){
        var area = '中華民國國籍'+' '+countyName;
        $(e.currentTarget).find('#area').text(area);
    }

    $(e.currentTarget).find('#schoolName').text(schoolName);
    $(e.currentTarget).find('#educationSystemName').text(educationSystemName);
    $(e.currentTarget).find('#collegeName').text(collegeName);
    $(e.currentTarget).find('#departmentName').text(departmentName);

    $(e.currentTarget).find('#moralEducation').text(moralEducation);
    $(e.currentTarget).find('#intellectualEducation').text(intellectualEducation);
    $(e.currentTarget).find('#physicalEducation').text(physicalEducation);
    $(e.currentTarget).find('#averageScore').text(averageScore);

    $(e.currentTarget).find('#identityItem').text(identityItem);

    if(isGovernmentScholarship==1){
        $(e.currentTarget).find('#isGovernmentScholarship').text('未領公費者');
    }

    if(isOtherRestrictions==1){
        $(e.currentTarget).find('#isOtherRestrictions').text('未領其他獎金者');
    }

});


//獎學金搜尋紀錄 論文獎學金 其他條件
$('#otherModal2').on('shown.bs.modal', function (e) {

    var isGovernmentScholarship = $(e.relatedTarget).data('is-government-scholarship');
    var isOtherRestrictions = $(e.relatedTarget).data('is-other-restrictions');
    var disciplineName = $(e.relatedTarget).data('discipline-name');

    $(e.currentTarget).find('#disciplineName').text(disciplineName);

    if(isGovernmentScholarship==1){
        $(e.currentTarget).find('#isGovernmentScholarship2').text('未領公費者');
    }

    if(isOtherRestrictions==1){
        $(e.currentTarget).find('#isOtherRestrictions2').text('未領其他獎金者');
    }
});

/** 點擊寄至信箱 reset Checkbox*/
$('.btn-mail').click(function() {
    resetMailCheck();
});

/** 驗證獎學金Checkbox */
function verifyScholarshipCheckbox() {
    var scholarshipId = scholarshipChecked();

    if (scholarshipId.length) {
        $('#confirmMail').attr('disabled',false);
    } else {
        $('#confirmMail').attr('disabled',true);
    }
    
}

/** 發送獎學金Mail */
function sendScholarshipMail(recordId) {

    var parameter = {
        recordId: recordId,
        scholarshipId :scholarshipChecked()
    }

    $.ajax({
        url: myHostUrl+'scholarshipRecord/email',
        type: 'POST',
        data: parameter,
        dataType: 'json',
        success: function(res) {
            // console.log(res);
            
            $('#messageModal').modal('hide');

            if (res.success == true) {
                $('#messageModal').modal('hide');
                $('#messageModal2').modal('show');
                resetMailCheck();
            } else if (res.error) {
                $('.ui-tip').html(res.errorMsg);
            } else {
                $('.ui-tip').html('不明錯誤原因');
            }
        },
        error: function(err) {
            // console.log(err);
        }
    });
}

/** 取得選取的獎學金ID */
function scholarshipChecked() {

    var scholarshipId = $(".my-scholarship input:checkbox:checked").map(function(){
      return $(this).val();
    }).get();

    return scholarshipId;
}

/** 重新選取 */
function resetMailCheck() {
    $('.my-scholarship input:checkbox').prop('checked', false); // Unchecks it
    verifyScholarshipCheckbox();
}

/** 取得會員資料 */
function memberInfo() {

    $.ajax({
        url: myHostUrl+'member/info',
        type: 'GET',
        dataType: 'json',
        success: function(res) {
            // console.log(res);

            if ('name' in res) {
                $('#loginModal, #registModal').modal('hide');
                $('memberSign').show();
                $('memberLogin').hide();
                $('.memberName').html(res.name);
            } else {
                $('memberSign').hide();
                $('memberLogin').show();
            }
        },
        error: function(err) {
            // console.log(err);
        }
    });
}
</script>        <script>
        $(document).ready(function(){

            //錯誤訊息回傳
            
            //獎學金筆數
            $.ajax({
                type: "GET",
                url: 'http://www.ftope.org.tw/scholarshipCount',
                async: false,      
                success: function(res){
                    $("#scholarshipCountHeader").html(res);
                    $("#scholarshipCountHeaderSub").html(res);
                    $("#scholarshipCountFooter").html(res);
                }
            });

            //人數
            $.ajax({
                type: "GET",
                url: 'http://www.ftope.org.tw/people',
                async: false,      
                success: function(res){
                    if(res!='loadError'){
                        $("#people").html(res);    
                    }
                }
            });

            //人數+1
            $.ajax({
                type: "GET",
                url: 'http://www.ftope.org.tw/peoplePlus',
                async: false,      
                success: function(res){
                    // console.log(res);
                }
            });

        });


        //錯誤訊息回傳
        

        //限制身分別數量
        var limit = 6;
        $('.identityItem:input:checkbox').on('change', function(evt) {
           if($('.identityItem:input:checkbox:checked').length > limit) {
               this.checked = false;
           }
        });


        function checkIdentity(){

            var numberNotChecked = $('.identityItem:input:checkbox:checked').length;
            console.log(numberNotChecked);

        }


        function goToStudentForm1(){

            $("#form1").show();
            $("#form2").hide();
            $("#form3").hide();

            window.document.body.scrollTop = 0;
            window.document.documentElement.scrollTop = 0;

        }


        function goToStudentForm2(){

            $("#form1").hide();
            $("#form2").show();
            $("#form3").hide();

            window.document.body.scrollTop = 0;
            window.document.documentElement.scrollTop = 0;

        }


        function goToStudentForm3(){

            $("#form1").hide();
            $("#form2").hide();
            $("#form3").show();

            window.document.body.scrollTop = 0;
            window.document.documentElement.scrollTop = 0;

        }


        //取得國家資料
        function getNationItem(){

            //ajax getNationItem
            $.ajax({
                url: 'http://www.ftope.org.tw/getNationItem',
                type: 'GET',
                success: function(result) {

                    // console.log(result);

                    var area = '';
                    var nationItem = 'nationItem';

                    //設置國家資料
                    if(result.length>0){
                        $.each(result,function(key){ 

                            area += '<div class="radio-group">';
                            area +=     '<input class="radio-input" type="radio" id="' + nationItem + result[key].nationId + '" name="' + nationItem + '" value="' + result[key].nationId + '">';
                            area +=     '<label class="radio-label" for="' + nationItem + result[key].nationId + '">';
                            area +=        '<div class="inner info">';
                            area +=             '<div class="radio-text">';
                            area +=                 '<p>' + result[key].nationName + '</p>';
                            area +=             '</div>';
                            area +=         '</div>';
                            area +=     '</label>';
                            area += '</div>';

                        });
                    }
                    
                    $('#area').html(area);

                }
            });

        }


        //取得縣市資料
        function getCountyItem(){

            //ajax getCountyItem
            $.ajax({
                url: 'http://www.ftope.org.tw/getCountyItem',
                type: 'GET',
                success: function(result) {

                    // console.log(result);

                    var area = '';
                    var countyItem = 'countyItem';

                    //設置縣市資料
                    if(result.length>0){
                        $.each(result,function(key){ 

                            area += '<div class="radio-group">';
                            area +=     '<input class="radio-input" type="radio" id="' + countyItem + result[key].countyId + '" name="' + countyItem + '" value="' + result[key].countyId + '">';
                            area +=     '<label class="radio-label" for="' + countyItem + result[key].countyId + '">';
                            area +=        '<div class="inner info">';
                            area +=             '<div class="radio-text">';
                            area +=                 '<p>' + result[key].countyName + '</p>';
                            area +=             '</div>';
                            area +=         '</div>';
                            area +=     '</label>';
                            area += '</div>';

                        });
                    }
                    
                    $('#area').html(area);

                }
            });

        }


        //以學制Id取得學校
        function getSchoolItem(educationSystemId){

            //ajax getSchoolItem
            $.ajax({
                url: 'http://www.ftope.org.tw/getSchoolItem/'+educationSystemId,
                type: 'GET',
                success: function(result) {

                    // console.log(result);

                    var school = '';

                    //設置學校option
                    if(result.length>0){

                        school = '<option selected disabled hidden style="display:none" value="">請選擇</option>';

                        $.each(result,function(key){ 

                            school += '<option value="' + educationSystemId + '_' + result[key].schoolId + '">' + result[key].schoolName + '</option>';

                        });

                    }else{

                        school = '<option selected disabled hidden style="display:none" value="">無資料</option>';

                    }

                    $('#schoolItem').html(school).selectpicker('refresh');

                }
            });


            //系所重置
            var department = '<option selected disabled hidden style="display:none" value=""> </option>';

            $('#departmentItem').html(department).selectpicker('refresh');

        }


        //以學校Id取得系所
        function getDepartmentItem(school){

            console.log(school.value);
            var temp = school.value.split('_');
            console.log(temp);

            //ajax getDepartmentItem
            $.ajax({
                url: 'http://www.ftope.org.tw/getDepartmentItem/'+temp[0]+'/educationSystem/'+temp[1]+'/school',
                type: 'GET',
                success: function(result) {

                    // console.log(result);

                    var department = '';

                    //設置系所option
                    if(result.length>0){

                        department = '<option selected disabled hidden style="display:none" value="">請選擇</option>';

                        $.each(result,function(key){ 

                            department += '<option value="' + result[key].departmentId + '">' + result[key].departmentName + '</option>';

                        });
                        
                    }else{

                        department = '<option selected disabled hidden style="display:none" value="">無資料</option>';

                    }

                    $('#departmentItem').html(department).selectpicker('refresh');

                }
            });

        }

        function goToNoStudentForm1(){

            $("#form1").show();
            $("#form2").hide();

            window.document.body.scrollTop = 0;
            window.document.documentElement.scrollTop = 0;

        }


        function goToNoStudentForm2(){

            $("#form1").hide();
            $("#form2").show();

            window.document.body.scrollTop = 0;
            window.document.documentElement.scrollTop = 0;

        }

        </script>

        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '746238395721181');
        fbq('track', 'PageView');
        </script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-129270511-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-129270511-1');
        </script>

@stop

@extends('layouts.end')
@section('title','台灣公益組織教育基金會')

@section('content')



    <!-- MAIN -->
        <!-- slider -->
<div class="w-slider">
    <!-- Slider 輪播圖 -->
    <div class="ui-slider-wrap">
        <div class="container">
            <!-- Swiper -->
            <div class="swiper-container swiper-container-horizontal" id="slider">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-1842px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2" style="width: 921px;">
                        <a href="/searchStudent" class="slide-outer" style="background-image:url(http://www.ftope.org.tw/public/media/slider/20190224111606074.jpg);"></a>
                    </div>
                                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 921px;">
                        <a href="http://project.ftope.org.tw" class="slide-outer" style="background-image:url(http://www.ftope.org.tw/public/media/slider/20190509220942443.jpg);"></a>
                    </div>
                                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 921px;">
                        <a href="/searchStudent" class="slide-outer" style="background-image:url(http://www.ftope.org.tw/public/media/slider/20181030233137179.jpg);"></a>
                    </div>
                                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 921px;">
                        <a href="/searchStudent" class="slide-outer" style="background-image:url(http://www.ftope.org.tw/public/media/slider/20190224111606074.jpg);"></a>
                    </div>
                                    <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 921px;">
                        <a href="http://project.ftope.org.tw" class="slide-outer" style="background-image:url(http://www.ftope.org.tw/public/media/slider/20190509220942443.jpg);"></a>
                    </div></div>
                <!-- Add Pagination -->
                <div class="swiper-pagination slider-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span></div>
                <!-- <div class="button">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div> -->
            </div>                
        </div>
    </div>   
    <!-- Slider 輪播圖 結束 -->
</div>
<!-- slider 結束 -->
 
    <main class="w-main">
        <!-- 最新消息、blog -->
        <div class="w-posts-wrap">
            <div class="container">
                <div class="post-header">
                    <div class="title-box">
                        <h2 class="title">最新消息</h2>
                        <p class="desc">News</p>
                    </div>
                </div>
                <div class="post-body">
                                                            <div class="post-list post-list-l">
                        <a class="ui-card post-item" href="http://www.ftope.org.tw/news/14">
                            <div class="card-header">
                                <div class="card-img" style="background-image: url(http://www.ftope.org.tw/public/media/news/20181228191532539.jpg);"></div>
                            </div>
                            <div class="card-block">
                                <div class="card-info">
                                    <div class="card-info-meta">
                                        <div class="meta-box">
                                            <div class="meta-text">
                                                <span class="year">2018</span>/<span class="month">12</span>
                                                <span class="day">28</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-info-title">
                                        <div class="title-text info" style="">由本會主辦「第一屆台北大師星秀音樂節」開鑼了！</div>
                                    </h4>  
                                </div>
                            </div>
                        </a>                   
                    </div>
                    <div class="post-list post-list-r">
                        <a class="ui-card post-item" href="http://www.ftope.org.tw/news/13"> 
                            <div class="card-block">
                                <div class="card-info">
                                    <div class="card-info-meta">
                                        <div class="meta-box">
                                            <div class="meta-text">
                                                <span class="year">2018</span>/<span class="month">11</span>
                                                <span class="day">13</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-info-title">
                                        <div class="title-text info" style="">2018台灣獎學金資訊平台啟動典禮</div>
                                    </h4>  
                                </div>
                            </div>
                        </a>
                            <a class="ui-card post-item" href="http://www.ftope.org.tw/news/8"> 
                            <div class="card-block">
                                <div class="card-info">
                                    <div class="card-info-meta">
                                        <div class="meta-box">
                                            <div class="meta-text">
                                                <span class="year">2018</span>/<span class="month">04</span>
                                                <span class="day">23</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-info-title">
                                        <div class="title-text info" style="">2018日本交流參訪</div>
                                    </h4>  
                                </div>
                            </div>
                        </a>
                            <a class="ui-card post-item" href="http://www.ftope.org.tw/news/11"> 
                            <div class="card-block">
                                <div class="card-info">
                                    <div class="card-info-meta">
                                        <div class="meta-box">
                                            <div class="meta-text">
                                                <span class="year">2017</span>/<span class="month">05</span>
                                                <span class="day">24</span>
                                            </div>
                                        </div>
                                    </div>
                                    <h4 class="card-info-title">
                                        <div class="title-text info" style="">2017韓國交流參訪</div>
                                    </h4>  
                                </div>
                            </div>
                        </a>
                        </div>
                </div>
                <div class="btn-box col-md-12">
                    <button type="button" class="btn btn-more" onclick="javascript:location.href='news.html'" value="news.html">More</button>
                </div>
            </div>
        </div>
        <!-- 最新消息、blog 結束 -->

        <!-- 培訓課程 -->
        <div class="w-media-wrap">
            <div class="container">
                <div class="media-header">
                    <div class="title-box">
                        <h2 class="title">培訓課程</h2>
                        <p class="desc">Training Courses</p>
                    </div>
                </div> 
                <div class="media-body">
                    <div class="md-box">
                        <div class="md-list">
                            <a class="md-item" href="http://www.ftope.org.tw/course/16"> 
                                <div class="card-header">
                                    <div class="card-img" style="background-image: url(http://www.ftope.org.tw/public/media/course/20181105112243342.png);"></div>
                                </div>
                                <div class="card-block">
                                    <div class="card-info">
                                        <h4 class="card-info-title info" style="">【2017社企論壇系列講座】唐鳳 政委：對社企的QA座談上線囉～</h4>
                                    </div> 
                                    <button type="button" class="btn btn-vedio"><i class="icon-vedio"></i></button>  
                                </div>
                             </a>
                        </div> 
                        <div class="md-list">
                            <a class="md-item" href="###"> 
                                <div class="card-header">
                                    <div class="card-img" style="background-image: url(http://www.ftope.org.tw/public/media/course/20181105111151334.png);"></div>
                                </div>
                                <div class="card-block">
                                    <div class="card-info">
                                        <h4 class="card-info-title info" style="">【2017社企論壇系列講座】方元沂 教授：淺談社會企業法制發展與未來</h4>
                                    </div> 
                                    <button type="button" class="btn btn-vedio"><i class="icon-vedio"></i></button>  
                                </div>
                             </a>
                        </div> 
                        <div class="md-list">
                            <a class="md-item" href="http://www.ftope.org.tw/course/14"> 
                                <div class="card-header">
                                    <div class="card-img" style="background-image: url(http://www.ftope.org.tw/public/media/course/20181105111631741.png);"></div>
                                </div>
                                <div class="card-block">
                                    <div class="card-info">
                                        <h4 class="card-info-title info" style="">【2017社企論壇系列講座】林崇偉 教授：社會創新與科技創意</h4>
                                    </div> 
                                    <button type="button" class="btn btn-vedio"><i class="icon-vedio"></i></button>  
                                </div>
                             </a>
                        </div> 
                    </div>
                </div>
                <div class="btn-box col-md-12">
                    <button type="button" class="btn btn-more" onclick="javascript:location.href='course.html'" value="training-courses.html">More</button>
                </div>                    
            </div>
        </div>
        <!-- 培訓課程 結束 -->

        <!-- 廣告輪播 -->
        <div class="w-ad-wrap">
           <!--  <div class="container"> -->
                <!-- <div class="client-body"> -->
                <div class="ad-slider-wrap">
                    <!-- Swiper -->
                    <div class="swiper-container swiper-container-horizontal" id="ad-slider">
                        <div class="swiper-wrapper" style="transition-duration: 0ms;">
                                                    </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination ad-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
                    </div> 
                </div>            
                <!-- </div> -->
           <!--  </div> -->
        </div>
        <!-- 廣告輪播 結束 -->
    </main>
    
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
                        <a href="javascript: void(window.open('https://lineit.line.me/share/ui?url=' .concat(encodeURIComponent(location.href)) ));" title="分享至LINE"><i class="icon-line"></i></a>
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
                        <li><span id="scholarshipCountFooter">4,626</span> 筆獎學金</li>
                        <li><span id="people">47,811</span> 瀏覽人次</li>
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

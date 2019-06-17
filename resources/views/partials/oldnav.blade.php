<!-- HEADER -->
<button onclick="topFunction()" id="btn-top"><i class="fa fa-angle-up"></i></button>

<header class="w-header w-full-header">
    <div class="ui-navbartop"></div>
    <nav class="navbar ui-navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--Navbar Brand-->
                <a class="navbar-brand" href="index"><img src="http://www.ftope.org.tw/resources/views/home/images/logo.png"></a>
            </div>
            <div class="navbar-btn">
               <div class="btn-search">
                    <a href="search" title="搜尋獎學金">
                        <i class="fa fa-search"></i><span>搜尋獎學金</span>
                        <p>共<span style="color:red;" id="scholarshipCountHeader">4,626</span>筆獎學金</p>
                    </a>
               </div>
               <div class="btn-box">
                    <!-- 會員登入 -->
                    <membersign style="display: none;">
                        <div class="dropdown user-dropdown">
                            <a href="#" class="header-btn login-in dropdown-toggle" data-toggle="dropdown">
                                <div class="btn-text"><i class="icon-user"></i><span class="memberName"></span>
                                </div>
                            <div class="arrow-bottom"></div>
                            </a>
                            <!--  這裡的連結不知道要不要改   因為我還不知道要不要做到登入後搜尋 -->
                            <ul class="dropdown-menu user-dropdown-menu">
                                <li><a href="http://www.ftope.org.tw/scholarshipRecord" class="user-list"><i class="icon-record" style="font-size: 2.2rem;"></i>獎學金搜尋記錄</a></li>
                                <li><a href="#" class="user-list" data-toggle="modal" data-target="#editModal" onclick="editClear()"><i class="icon-edit"></i>修改密碼</a></li>
                                <li><a href="http://www.ftope.org.tw/member/logout" class="user-signout">登出</a></li>
                            </ul>
                        </div>
                    </membersign>
                    <!-- 會員未登入 -->
                    <memberlogin style="">
                        <a href="#" class="header-btn login" data-toggle="modal" data-target="#loginModal" title="獎學金資訊登入" onclick="loginClear()">
                            <div class="btn-text"><i class="icon-user"></i><span>登入</span></div>
                        </a>
                        <a href="#" class="header-btn regist" data-toggle="modal" data-target="#registModal" title="獎學金資訊申請" onclick="registerClear();registerCounter();">
                            <div class="btn-text"><i class="icon-regist"></i><span>申請</span></div>
                        </a>
                    </memberlogin>
               </div> 
            </div>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav ui-navbar-nav">
                    <li class="ui-nav-item multi-menu">
                        <div class="wrap-content">
                            <div class="dropdown">
                                <a class="dropdown-toggle menu-item" data-toggle="dropdown">基金會簡介<div class="arrow-bottom"></div></a>
                                <ul class="dropdown-menu ui-dropdown-menu">
                                    <li class="dropdown dropdown-submenu"><a href="introduction-1.html">基金會簡介</a></li>
                                    <li class="dropdown dropdown-submenu"><a href="introduction-2.html">本會服務</a></li>
                                    <li class="dropdown dropdown-submenu"><a href="introduction-3.html">董事長簡介</a></li>
                                </ul>
                            </div> 
                        </div>
                    </li>
                    <li class="ui-nav-item"><a href="news.html">最新消息</a></li>
                    <li class="ui-nav-item"><a href="course.html">培訓課程</a></li>
                    <li class="ui-nav-item phone-link">
                        <a href="http://www.ftope.org.tw/searchStudent"><i class="fa fa-search"></i>搜尋獎學金
                            <p>共<span style="color:red;" id="scholarshipCountHeaderSub">4,626</span>筆獎學金</p></a>
                    </li>
                    <!-- myNavbar 會員登入  -->
                    <membersign style="display: none;">
                        <li class="ui-nav-item multi-menu phone-link">
                            <div class="wrap-content">
                                <div class="dropdown">
                                    <a class="dropdown-toggle menu-item" data-toggle="dropdown"><i class="icon-user"></i><span class="memberName"></span><div class="arrow-bottom"></div></a>
                                    <ul class="dropdown-menu ui-dropdown-menu">
                                        <li class="dropdown dropdown-submenu"><a href="http://www.ftope.org.tw/scholarshipRecord">獎學金搜尋記錄</a></li>
                                        <li class="dropdown dropdown-submenu"><a href="#" data-toggle="modal" data-target="#editModal" onclick="editClear()">修改密碼</a></li>
                                    </ul>
                                </div> 
                            </div>
                        </li>
                        <li class="ui-nav-item phone-link user-signout"><a href="http://www.ftope.org.tw/member/logout">登出</a></li>
                    </membersign>
                    <!-- myNavbar 會員未登入 -->
                    <memberlogin style="">
                        <li class="ui-nav-item phone-link"><a href="#" data-toggle="modal" data-target="#loginModal" onclick="loginClear()"><i class="icon-user"></i>獎學金資訊登入</a></li>
                        <li class="ui-nav-item phone-link"><a href="#" data-toggle="modal" data-target="#registModal" onclick="registerClear()"><i class="icon-regist"></i>獎學金資訊申請</a></li>
                    </memberlogin>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- load Modal -->

<!-- editModal 修改密碼-->
<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <div class="modal-header">
                <p class="modal-title">修改密碼</p>
            </div>
            <form role="form">
                <div class="modal-body">
                    <p>修改密碼後，請重新登入，謝謝！</p>
                    <div class="form-group">
                        <label for="password">舊密碼</label>
                        <div class="input-box">
                            <input type="password" class="form-control" id="editOldPwd" placeholder="請輸入舊密碼">
                            <p class="note">*請輸入6~8個混合英數字元</p>
                        </div>   
                    </div>
                    <div class="form-group">
                        <label for="password">新密碼</label>
                        <div class="input-box">
                            <input type="password" class="form-control" id="editNewPwd" placeholder="請輸入新密碼">
                            <p class="note">*請輸入6~8個混合英數字元</p>
                        </div>   
                    </div>
                    <div class="form-group">
                        <label for="password">再次輸入</label>
                        <div class="input-box">
                            <input type="password" class="form-control" id="editNewConfirmPwd" placeholder="請再次輸入新密碼">
                            <p class="note">*請輸入6~8個混合英數字元</p>
                        </div>   
                    </div>
                    <div class="ui-tip">舊密碼輸入錯誤，請重新輸入，謝謝。</div>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-confirm" onclick="editPassword()">確定</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- editModal 結束 -->


<!-- loginModal 獎學金資訊登入-->
<div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <div class="modal-header">
                <p class="modal-title">獎學金資訊登入</p>
            </div>
            <div class="modal-body">
                <div class="btn btn-first" type="button"  data-toggle="modal" data-dismiss="modal" data-target="#registModal" onclick="registerLogin()">
                    <span class="first-login-t">第一次登入？</span>
                    <!-- 拼錯 抓到 -->
                    <span class="first-login-c">請先申請</span>
                </div>
                <form role="form">
                    <div class="form-group">
                        <label for="email" style="letter-spacing: 0;">Email</label>
                        <div class="input-box"> 
                            <input type="email" class="form-control" id="loginEmail" placeholder="請輸入您申請的Email">
                        </div>   
                    </div>
                    <div class="form-group">
                        <label for="password">密碼</label>
                        <div class="input-box">
                            <i class="icon-password"></i>
                            <input type="password" class="form-control" id="loginPassword" placeholder="請輸入您的密碼">
                        </div>   
                    </div>
                    <div class="form-group form-code">
                        <label for="code">驗證碼</label>
                        <div class="input-box code-box">
                            <i class="fa fa-undo btn-reset" onclick="$('#captcha_img').attr('src',$('#captcha_img').attr('src')+'?'+Math.random())"></i>
                            <input type="text" class="form-control code-control" id="captcha" placeholder="請輸入驗證碼">
                        </div>
                        <img id="captcha_img" src="http://www.ftope.org.tw/member/login/code" alt="" onclick="this.src=this.src+'?'+Math.random()">
                    </div>
                </form>
                <div class="ui-tip">帳號或密碼輸入錯誤，請重新輸入。</div>
            </div>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-forget" data-toggle="modal" data-dismiss="modal" data-target="#forgetModal" onclick="forgetClear()">忘記密碼</button>
                <button type="button" class="btn btn-login" onclick="login()">登入</button>
            </div>
        </div>
    </div>
</div><!-- loginModal 結束 -->

<!-- registerModal 獎學金資訊申請-->
<div id="registModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i></button>
            <div class="modal-header">
                <p class="modal-title">獎學金資訊申請</p>
            </div>
            <form role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="email" style="letter-spacing: 0;"><span class="s-must"></span><span class="form-text">Email</span></label>
                            <div class="input-box"> 
                                <input type="email" class="form-control" id="registerEmail" placeholder="請輸入您欲申請的Email">
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="password"><span class="s-must"></span><span class="form-text">密碼</span></label>
                            <div class="input-box">
                                <input type="password" class="form-control" id="registerPassword" placeholder="請輸入您的密碼">
                                <p class="note">*請輸入6~8個混合英數字元</p>
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="name"><span class="s-must"></span><span class="form-text">姓名</span></label>
                            <div class="input-box">
                                <input type="text" class="form-control" id="registerName" placeholder="請輸入您的姓名">
                            </div>
                        </div>
                    <div class="ui-tip">尚有欄位未填寫，請填寫完畢。</div>
                </div>
                <div class="modal-footer"> 
                    <button type="reset" class="btn btn-cancel" onclick="registerClear()">重新填寫</button>
                    <button type="button" class="btn btn-regist" onclick="register()">申請</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- registerModal 結束 -->

<!-- forgetModal 忘記密碼-->
<div id="forgetModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <!-- <button type="button" class="btn-close" data-dismiss="modal"><i class="fa fa-times"></i></button> -->
            <div class="modal-header">
                <p class="modal-title">忘記密碼</p>
            </div>
            <form role="form">
                <div class="modal-body">
                    <p>忘記密碼嗎?  請重新設定密碼。<br>
                        請輸入申請時的信箱，驗證資料完成後，<br>系統會變更您的密碼，請使用新密碼登入，謝謝。</p>
                    <div class="form-group">
                        <label for="email" style="letter-spacing: 0;"><span class="s-must"></span><span class="form-text">Email</span></label>
                        <div class="input-box"> 
                            <input type="email" class="form-control" id="forgetEmail" placeholder="請輸入您申請的Email">
                        </div>   
                    </div>
                    <div class="ui-tip">此信箱未申請過，請重新輸入，謝謝。</div>
                </div>
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">取消</button>
                    <button type="button" class="btn btn-confirm" onclick="forgetPassword()">確定</button>
                </div>
            </form>
        </div>
    </div>
</div><!-- forgetModal 結束 -->

<!-- END/ load Modal-->    
<!-- HEADER 結束-->
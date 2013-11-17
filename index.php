<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SSKY STORY</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" >

  <!--UI-->
  <script src="./js/jquery.min.js"></script>
  <script src="./js/kendo.mobile.min.js"></script>
  <link href="./styles/kendo.common.min.css" rel="stylesheet" />
  <link href="./styles/kendo.mobile.all.min.css" rel="stylesheet" />

  <!--SSKY_LIBRARY-->
  <script src="js/ssky-1.0.js"></script>
  <script src="js/story.js"></script>

  <!--APPLICATION-->
  <meta name="viewport" content="width=320.1, user-scalable=0, initial-scale=1.0" />
  <meta name="apple-mobile-web-app-status-bar-style" content="white">
  <meta name="apple-mobile-web-app-capable" content="yes">
</head> 
<body>


<script>
function initPullToRefreshScroller(e) {
  var scroller = e.view.scroller;
  scroller.setOptions({
      pullToRefresh: true,
      pull: function() {
        setTimeout(function() { scroller.pullHandled(); }, 800);
      }
  });
}
</script>



<div data-before-show="loginView_load" data-role="view" data-layout="overview-layout" data-title="SSKY" id="overview-login">
    <header data-role="header">
    </header>
    <div id="loginView_Logo">SSKY STORY</div>

    <ul data-role="listview" data-style="inset">
        <li><label for="username">Username:</label> <input type="text" id="username" /></li>
        <li><label for="password">Password:</label> <input type="password" id="password" /></li>
    </ul>
    <a id="login-button" type="button" data-role="button" data-click="loginFunction">Login</a>
    <a id="reg-button" type="button" data-role="button" href="#overview-register">Register</a>
    <a id="facebook-button" type="button" data-role="button">Login with Facebook</a>

    <footer data-role="footer">
    </footer>
</div>


<div data-role="view" data-layout="overview-layout" data-title="SSKY" id="overview-register">
    <div data-role="header">
        <div data-role="navbar">
            <span>Register</span>
            <a data-role="backbutton" data-align="left">Cancel</a>
            <a data-role="button" data-align="right">Submit</a>
        </div>
    </div>

    <ul data-role="listview" data-style="inset">
        <li><label for="register_username">Username:</label> <input type="text" id="register_username" /></li>
        <li><label for="register_password">Password:</label> <input type="password" id="register_password" /></li>
        <li><label for="register_email">Email:</label> <input type="text" id="register_email" /></li>
    </ul>

    <footer data-role="footer">
    </footer>
</div>



<div data-before-show="newsfeedView_load" data-role="view" data-layout="overview-layout" id="overview-newsfeed" data-title="뉴스피드"  data-init="initPullToRefreshScroller">
  <ul data-role="listview" data-style="inset" data-type="group">

        <li>
            양준혁
            <ul>
                <li>
                 ㅁㄴㅇㄹㅁㄴㅇㄹㅁㄴㅇㄹㅁㄴㅇ<br>
                 <img src="res/mystory.jpg" width="100%" style="padding-top:7px">
                </li>
            </ul>
        </li>
        <li>

        <li>
            김태훈
            <ul>
                <li>
                 ㅁㄴㅇㄹㅁㄴㅇㄹㅁㄴㅇㄹㅁㄴㅇ<br>
                 <img src="res/mystory.jpg" width="100%" style="padding-top:7px">
                </li>
            </ul>
        </li>
        <li>

    </ul>
</div>



<div data-before-show="mystoryView_load" data-role="view" data-layout="overview-layout" id="overview-mystory" data-title="내스토리">
   <header data-role="header">
        <div data-role="navbar">
          <span data-role="view-title">SSKY STORY</span>
          <a data-align="right" data-role="button" class="nav-button" data-icon="writeicon" href="#overview-write" id="writeButton"></a>
        </div>
    </header>
</div>



<div data-before-show="myfriendsView_load" data-role="view" data-layout="overview-layout" id="overview-myfriends" data-title="친구목록">
    <header data-role="header">
        <div data-role="navbar">
            <ul data-role="buttongroup" data-index="0" data-select="friendsBar">
                <li>
                    친구목록
                </li>
                <li>
                    친구찾기
                </li>
                <li>
                    친구신청
                </li>
            </ul>
        </div>
    </header>

   <ul data-role="listview" data-type="group" id="friendsSubView1">
        <li>
          내 친구목록
            <ul>
                <li><h2>Ann Devon</h2><img src="./examples/content/mobile/overview/ann.jpg" /> <a data-role="button" class="unFriendsBtn">삭제</a></li>
                <li><h2>Annette Roulet</h2><img src="./examples/content/mobile/overview/annette.jpg" /></li>
                <li><h2>Antonio Moreno</h2><img src="./examples/content/mobile/overview/antonio.jpg" /></li>
                <li><h2>Carine Schmitt</h2><img src="./examples/content/mobile/overview/carine.jpg" /></li>
                <li><h2>Catherine Dewey</h2><img src="./examples/content/mobile/overview/catherine.jpg" /></li>
            </ul>
        </li>
    </ul>

    <ul data-role="listview" data-type="group" id="friendsSubView2" style="display:none">
        <li>
          페이스북으로 친구찾기
            <ul>
                <li><h2>Ann Devon</h2><img src="./examples/content/mobile/overview/ann.jpg" /></li>
                <li><h2>Annette Roulet</h2><img src="./examples/content/mobile/overview/annette.jpg" /></li>
                <li><h2>Antonio Moreno</h2><img src="./examples/content/mobile/overview/antonio.jpg" /></li>
            </ul>
        </li>
    </ul>

    <ul data-role="listview" data-type="group" id="friendsSubView3" style="display:none">
      <li>
          받은신청
            <ul>
                <li><h2>Ann Devon</h2><img src="./examples/content/mobile/overview/ann.jpg" /></li>
                <li><h2>Annette Roulet</h2><img src="./examples/content/mobile/overview/annette.jpg" /></li>
                <li><h2>Antonio Moreno</h2><img src="./examples/content/mobile/overview/antonio.jpg" /></li>
            </ul>
        </li>
        <li>
          보낸신청
            <ul>
                <li><h2>Carine Schmitt</h2><img src="./examples/content/mobile/overview/carine.jpg" /></li>
                <li><h2>Catherine Dewey</h2><img src="./examples/content/mobile/overview/catherine.jpg" /></li>
            </ul>
        </li>
    </ul>

</div>

<div data-before-show="moreView_load" data-role="view" data-layout="overview-layout" data-init="mobileAccountViewInit" id="overview-more" data-title="더보기">
    <ul id="settings-view" data-index="0">
        <li>
            프로필설정
        </li>
        <li>
            환경설정
        </li>
        <li>
            개발자소개
        </li>
    </ul>
    <ul data-role="listview" data-style="inset" data-type="group">
        <li>
            나의 프로필
            <ul>
                <li><h2>Christina <span>Berglund</span></h2><img src="./examples/content/mobile/overview/christina.jpg" /></li>
                <li>Username <span class="value">christina</span></li>
                <li>Email <span class="value">clientservice at kendoui.com</span></li>
            </ul>
        </li>
        <li>
            SNS 설정
            <ul>
                <li>페이스북 연동 <input type="checkbox" data-role="switch" checked></li>
            </ul>
        </li>
        <li>
            계정관리
            <ul>
                <li>회원정보 수정</li>
                <li>로그아웃</li>
            </ul>
        </li>
    </ul>
    <ul data-role="listview" data-style="inset" data-type="group" style="display:none">
        <li>
            <ul>
                <li><a>공지사항</a></li>
                <li>버전정보<span class="value">1.2</span></li>
                <li><a>도움말</a></li>
            </ul>
            <br>
            <ul>
                <li>푸시알림 <input type="checkbox" data-role="switch" checked></li>
                <li>자동사진 저장 <input type="checkbox" data-role="switch"></li>
                <li><a>캐쉬 삭제</a></li>
            </ul>
        </li>
    </ul>

    <ul data-role="listview" data-style="inset" data-type="group" style="display:none">
        <li>
            <ul>
                <li><h2>멘토<span>송치형</span></h2><img src="./res/profile_1.png" /></li>
                <li>개발분야 <span class="value">개발기획</span></li>
                <li>Email <span class="value">scroco@gmail.com</span></li>
            </ul>
        </li>

        <li>
            <ul>
                <li><h2>팀장 <span>김태훈</span></h2><img src="./res/profile_2.png" /></li>
                <li>개발분야 <span class="value">안드로이드, 자바, 백엔드</span></li>
                <li>Email <span class="value">conakuki@gmail.com</span></li>
            </ul>
        </li>

        <li>
            <ul>
                <li><h2>팀원 <span>양준혁</span></h2><img src="./res/profile_3.png" /></li>
                <li>개발분야 <span class="value">웹,아이폰,서버</span></li>
                <li>Email <span class="value">yangjunehyuk@gmail.com</span></li>
                <li>Web <span class="value">http://joyjune.com/</span></li>
            </ul>
        </li>

        <li>
            <ul>
                <li><h2>팀원 <span>송용주</span></h2><img src="./res/profile_4.png" /></li>
                <li>개발분야 <span class="value">데이터베이스</span></li>
                <li>Email <span class="value">stankonlines@gmail.com</span></li>
            </ul>
        </li>
    </ul>

</div>



<div data-before-show="writeView_load" data-role="view" data-layout="overview-layout" id="overview-write" data-title="글쓰기" >
  <header data-role="header">
        <div data-role="navbar" class="fileinput-button">
            <span data-role="view-title"></span>
            <a data-align="left" data-role="button" class="nav-button" data-click="writeBack">Back</a>
            <div data-align="right" data-role="button" class="nav-button" id="inputPhotoBtn"><input type="file" id="profilePhotoFileUpload" onclick="fileClick();"><span class="km-icon km-camera" style="margin-left:7px;"></span></input></div>
        </div>
    </header>

  <form name="myform">
    <ul data-role="listview" data-style="inset">
      <textarea rows="7" style="width:100%; border:0px;" name="mytextfield" id="mytextfield"></textarea>
    </ul>
  </form>

</div>



<div data-role="layout" data-id="overview-layout">
    <header data-role="header">
        <div data-role="navbar">
          <span data-role="view-title">SSKY STORY</span>
        </div>
    </header>

    <footer data-role="footer">
      <div data-role="tabstrip">
        <a data-icon="bookmarks" href="#overview-newsfeed">뉴스피드
        </a><a data-icon="home" href="#overview-mystory">내스토리
        </a><a data-icon="contacts" href="#overview-myfriends">친구목록
        </a><a data-icon="settings" href="#overview-more">더보기</a>
      </div>
    </footer>

</div>


<script>


///////////////////////////////////////////////////////
// 친구 관련부분
///////////////////////////////////////////////////////
function friendsBar() {
  $("#friendsSubView1").css("display","none");
  $("#friendsSubView2").css("display","none");
  $("#friendsSubView3").css("display","none");

  if(this.selectedIndex==0){
  $("#friendsSubView1").css("display","block");
  } else if(this.selectedIndex==1) {
  $("#friendsSubView2").css("display","block");
  } else {
  $("#friendsSubView3").css("display","block");
  }
}

///////////////////////////////////////////////////////
// 로그인 부분
///////////////////////////////////////////////////////


function loginFunction(){
  location.href = "#overview-newsfeed";
}



function closeModalViewJoin() {
    $("#modalview-join").kendoMobileModalView("close");
}


///////////////////////////////////////////////////////
// 포스트 작성 부분
///////////////////////////////////////////////////////

  // 글쓰기메서드
  var writeMode = 0;
  var writeFileMode = 0;
  function WriteMethod(){

    if(writeFileMode==0 && writeMode ==1){
      kendoMobileApplication.showLoading(); 
      setTimeout(function() { 
        kendoMobileApplication.hideLoading();
        $(".km-tabstrip").show();
        location.href = "#overview-mystory";
      }, 2500);

    }
  }

  //파일첨부 눌렀을때
  function fileClick(){
    writeFileMode = 1;
  }

  //텍스트필드가 포커스 잃었을때 
  document.addEventListener('focusout', function(e) { 
    if(writeMode==1){
      writeFileMode = 0;
      setTimeout(WriteMethod,700);
    }
   });

  //텍스트필드가 포커스 GET
  $('textarea#mytextfield').focus(function() { 
    writeMode = 1;
    writeFileMode = 0;
    $(".km-tabstrip").hide();
  });

  //뒤로가기
  function writeBack(){
    writeMode = 0;
    location.href = "#overview-mystory";
    $(".km-tabstrip").show();
  }
  
  //사진을 첨부했을때
  $("#profilePhotoFileUpload").on('change',function() {
    $("#inputPhotoBtn").css("background-color","#25b3fd");
    setTimeout(function(){ document.myform.mytextfield.focus(); },100);
  });


///////////////////////////////////////////////////////
// 뷰 관련 부분
///////////////////////////////////////////////////////
  function loginView_load(){

  }

  //글쓰기뷰
  function writeView_load(){
    $('textarea#mytextfield').val('');
    $("#inputPhotoBtn").css("background-color","#dcdcdc");
    writeMode = 1;
    $(".km-tabstrip").hide();
    setTimeout(function(){ document.myform.mytextfield.focus(); },500);
  }

  //뉴스피드뷰
  function newsfeedView_load(){
  
  }

  //마이스토리뷰
  function mystoryView_load(){


  }

  //친구목록뷰
  function myfriendsView_load(){

  }

  //더보기뷰
  function moreView_load(){

  }

  function mobileAccountViewInit() {
    var listviews = this.element.find("ul.km-listview");

    $("#settings-view").kendoMobileButtonGroup({
        select: function() {
            listviews.hide()
             .eq(this.selectedIndex)
             .show();
        },
        index: 0
    });
  }
</script>

<style scoped>
#loginView_Logo{
  padding-top:40px;
  padding-bottom:10px;
  
  font-size:30pt;
  text-align: center;
}

#login-button,
#reg-button,
#facebook-button {
    display: block;
    text-align: center;
    margin: .6em .8em 0;
    font-size: 1.2em;
}

#login-button{
    background-color: Green;
    color: #fff;
}

.unFriendsBtn {
  margin-top:13px;
  float: right;
}

.addFriendsBtn {
  float: right;
}

.okFriendsBtn {
  float: right;
}


.km-writeicon:after,
.km-writeicon:before
{
    content: "\e07b";
}

#overview-myfriends h2,
#overview-cities h2 {
    display: inline-block;
    font-size: 1.1em;
    margin: 1em 0 .5em 1em;
}
#overview-more h2 {
    display: inline-block;
    font-size: 1.1em;
    margin: 1.5em 0 0 .6em;
}
#overview-more h2 span {
    display: block;
    clear: both;
    font-size: 1.8em;
    margin: .1em 0 0 0;
}
#overview-myfriends img,
#overview-cities img,
#overview-more img {
    float: left;
    width: 4em;
    height: 4em;
    margin: 0;
    -webkit-box-shadow: 0 1px 3px #333;
    box-shadow: 0 1px 3px #333;
    -webkit-border-radius: 8px;
    border-radius: 8px;
}

.km-flat #overview-myfriends img,
.km-flat #overview-cities img,
.km-flat #overview-more img {
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,.1);
    box-shadow: 0 0 0 1px rgba(0,0,0,.1);
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

#overview-more img {
    width: 5em;
    height: 5em;
    margin: 1em;
}
#overview-more .value {
    float: right;
    color: #ccc;
}
#settings-view {
    margin: 1em auto .4em auto;
}
#friends-view {
    margin: 1em auto .4em auto;
}

#overview-mystory .photo {
    width: 277px;
    margin: 20px 20px 7px;
    height: 220px;
    display: inline-block;
    -webkit-background-size: auto 100%;
    background-size: auto 100%;
    background-repeat: no-repeat;
    background-position: center center;
    -webkit-transform: translatez(0);
}
.km-wp #overview-mystory .photo {
    width: 15em;
    height: 15em;
}

.km-flat {
    background: transparent;
    border: 0;
    box-shadow: none;
}

#overview-mystory .km-ios .km-content {
    background: #bbb;
}

.fileinput-button input {
  position: absolute;
  top: 0;
  right: 0;
  margin: 0;
  opacity: 0;
  -ms-filter: 'alpha(opacity=0)';
  font-size: 200px;
  direction: ltr;
  cursor: pointer;
}

/* Fixes for IE < 8 */
@media screen\9 {
  .fileinput-button input {
    filter: alpha(opacity=0);
    font-size: 100%;
    height: 100%;
  }
}
body,html{background-color:#f4f4f4;}

</style>


<script>

  document.title = "SSKY STORY";
  window.kendoMobileApplication = new kendo.mobile.Application($(document.body), {
    skin : "flat",
    transition: "slide",
    statusBarStyle: "black-translucent",
    icon: {
      "" : '/favicon.png',
      "72x72" : '/favicon.png',
      "114x114" : '/favicon114.png'
    }
  });

</script>


</body>
</html>
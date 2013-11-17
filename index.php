<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SSKY STORY</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" >
  <script src="./js/jquery.min.js"></script>
  <script src="./js/kendo.mobile.min.js"></script>
  <link href="./styles/kendo.common.min.css" rel="stylesheet" />
  <link href="./styles/kendo.mobile.all.min.css" rel="stylesheet" />
  <script src="js/ssky-1.0.js"></script>

  <meta name="viewport" content="width=320.1, user-scalable=0, initial-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="white">
</head> 
<body>

<div data-before-show="newsfeedView_load" data-role="view" data-layout="overview-layout" id="overview-newsfeed" data-title="뉴스피드">
  <ul data-role="listview" data-style="inset" data-type="group">
        <li>
            양준혁
            <ul>
                <li><h2>Nairobi</h2><img src="./examples/content/mobile/overview/nairobi.jpg" /></li>
            </ul>
        </li>
        <li>
            김태훈
            <ul>
                <li><h2>Boston</h2><img src="./examples/content/mobile/overview/boston.jpg" /></li>
                <li><h2>Ottawa</h2><img src="./examples/content/mobile/overview/ottawa.jpg" /></li>
                <li><h2>San Francisco</h2><img src="./examples/content/mobile/overview/san-francisco.jpg" /></li>
            </ul>
        </li>
        <li>
            Asia
            <ul>
                <li><h2>Bombay</h2><img src="./examples/content/mobile/overview/bombay.jpg" /></li>
            </ul>
        </li>
        <li>
            Australia
            <ul>
                <li><h2>Melbourne</h2><img src="./examples/content/mobile/overview/melbourne.jpg" /></li>
                <li><h2>Sydney</h2><img src="./examples/content/mobile/overview/sydney.jpg" /></li>
            </ul>
        </li>
        <li>
            Europe
            <ul>
                <li><h2>Cannes</h2><img src="./examples/content/mobile/overview/cannes.jpg" /></li>
                <li><h2>Liverpool</h2><img src="./examples/content/mobile/overview/liverpool.jpg" /></li>
                <li><h2>London</h2><img src="./examples/content/mobile/overview/london.jpg" /></li>
            </ul>
        </li>
    </ul>
</div>



<div data-before-show="mystoryView_load" data-role="view" data-layout="overview-layout" id="overview-mystory" data-title="내스토리">
   <header data-role="header">
        <div data-role="navbar">
          <span data-role="view-title">SSKY STORY</span>
          <a data-align="right" data-role="button" class="nav-button" data-icon="writeicon" href="#overview-write" id="writeButton"></a>
        </div>
    </header>

    <div id="scrollview-container">
        <div data-role="scrollview">
            <div class="photo photo1"></div>

            <div class="photo photo2"></div>

            <div class="photo photo3"></div>

            <div class="photo photo4"></div>

            <div class="photo photo5"></div>

            <div class="photo photo6"></div>

            <div class="photo photo7"></div>

            <div class="photo photo8"></div>

            <div class="photo photo9"></div>

            <div class="photo photo10"></div>
        </div>
    </div>
</div>




<div data-before-show="myfriendsView_load" data-role="view" data-layout="overview-layout" id="overview-myfriends" data-title="친구목록">
    <ul data-role="listview" data-type="group">
        <li>
            A
            <ul>
                <li><h2>Ann Devon</h2><img src="./examples/content/mobile/overview/ann.jpg" /></li>
                <li><h2>Annette Roulet</h2><img src="./examples/content/mobile/overview/annette.jpg" /></li>
                <li><h2>Antonio Moreno</h2><img src="./examples/content/mobile/overview/antonio.jpg" /></li>
            </ul>
        </li>
        <li>
            C
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
            Profile
        </li>
        <li>
            General
        </li>
        <li>
            Group
        </li>
    </ul>
    <ul data-role="listview" data-style="inset" data-type="group">
        <li>
            Profile
            <ul>
                <li><h2>Christina <span>Berglund</span></h2><img src="./examples/content/mobile/overview/christina.jpg" /></li>
                <li>Username <span class="value">christina</span></li>
                <li>Email <span class="value">clientservice at kendoui.com</span></li>
            </ul>
        </li>
        <li>
            Languages
            <ul>
                <li>English <span class="value">Native</span></li>
                <li>French<span class="value">Advanced</span></li>
            </ul>
        </li>
        <li>
            PC Skills
            <ul>
                <li>MS Word</li>
                <li>MS Excel</li>
                <li>MS Outlook</li>
                <li>MS PowerPoint</li>
                <li>Windows (XP, Vista)</li>
                <li>Internet</li>
            </ul>
        </li>
    </ul>
    <ul data-role="listview" data-style="inset" data-type="group" style="display:none">
        <li>
            General Settings
            <ul>
                <li>Notifications <input type="checkbox" data-role="switch" checked></li>
                <li>Local Services <input type="checkbox" data-role="switch"></li>
                <li><a>About</a></li>
            </ul>
        </li>
    </ul>
    <ul data-role="listview" data-style="inset" data-type="group" style="display:none">
        <li>
            Group
            <ul>
                <li><a>Your Group Name</a></li>
                <li><a>Group Email</a></li>
            </ul>
        </li>
    </ul>
</div>



<div data-before-show="writeView_load" data-role="view" data-layout="overview-layout" id="overview-write" data-title="글쓰기" >
  <header data-role="header">
        <div data-role="navbar" class="fileinput-button">
            <span data-role="view-title"></span>
            <a data-align="left" data-role="button" class="nav-button" data-click="writeBack">Back</a>
            <div data-align="right" data-role="button" class="nav-button"><input type="file" id="profilePhotoFileUpload" onclick="fileClick();"><span class="km-icon km-camera" style="margin-left:7px;"></span></input></div>
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
// 포스트 작성 부분
///////////////////////////////////////////////////////

  // 글쓰기메서드
  var writeMode = 0;
  var writeFileMode = 0;
  function WriteMethod(){
    if(writeFileMode==0){
      $(".km-tabstrip").show();
      location.href = "#overview-mystory";
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
      setTimeout(WriteMethod,500);
    }
   });

  //텍스트필드가 포커스 GET
  $('textarea#mytextfield').focus(function() { 
    writeMode = 1;
    writeFileMode = 0;
    $(".km-tabstrip").hide();
  });

  function writeBack(){
    writeMode = 0;
    location.href = "#overview-mystory";
    $(".km-tabstrip").show();
  }







///////////////////////////////////////////////////////
// 뷰 관련 부분
///////////////////////////////////////////////////////

  function writeView_load(){
    $(".km-tabstrip").hide();
    setTimeout(function(){ document.myform.mytextfield.focus(); },500);
  }

  function newsfeedView_load(){
  
  }

  function mystoryView_load(){


  }

  function myfriendsView_load(){



  }

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


.km-writeicon:after,
.km-writeicon:before
{
    content: "\e07b";
}

#overview-contacts h2,
#overview-cities h2 {
    display: inline-block;
    font-size: 1.1em;
    margin: 1em 0 .5em 1em;
}
#overview-account h2 {
    display: inline-block;
    font-size: 1.1em;
    margin: 1.5em 0 0 .6em;
}
#overview-account h2 span {
    display: block;
    clear: both;
    font-size: 1.8em;
    margin: .1em 0 0 0;
}
#overview-contacts img,
#overview-cities img,
#overview-account img {
    float: left;
    width: 4em;
    height: 4em;
    margin: 0;
    -webkit-box-shadow: 0 1px 3px #333;
    box-shadow: 0 1px 3px #333;
    -webkit-border-radius: 8px;
    border-radius: 8px;
}

.km-flat #overview-contacts img,
.km-flat #overview-cities img,
.km-flat #overview-account img {
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,.1);
    box-shadow: 0 0 0 1px rgba(0,0,0,.1);
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

#overview-account img {
    width: 5em;
    height: 5em;
    margin: 1em;
}
#overview-account .value {
    float: right;
    color: #ccc;
}
#settings-view {
    margin: 1em auto .4em auto;
}
#overview-gallery .photo {
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
.km-wp #overview-gallery .photo {
    width: 15em;
    height: 15em;
}
.photo1 {background-image: url("./examples/content/mobile/cities/220/sydney.jpg");}
.photo2 {background-image: url("./examples/content/mobile/cities/220/bonn.jpg");}
.photo3 {background-image: url("./examples/content/mobile/cities/220/boston.jpg");}
.photo4 {background-image: url("./examples/content/mobile/cities/220/cairo.jpg");}
.photo5 {background-image: url("./examples/content/mobile/cities/220/cancun.jpg");}
.photo6 {background-image: url("./examples/content/mobile/cities/220/cape-town.jpg");}
.photo7 {background-image: url("./examples/content/mobile/cities/220/liverpool.jpg");}
.photo8 {background-image: url("./examples/content/mobile/cities/220/london.jpg");}
.photo9 {background-image: url("./examples/content/mobile/cities/220/melbourne.jpg");}
.photo10 {background-image: url("./examples/content/mobile/cities/220/san-francisco.jpg");}

#scrollview-container {
    margin: 3px 0 1em 0;
    padding-bottom: 10px;
    background: rgba(0,0,0,.1);
    border: 1px solid rgba(0,0,0,.3);
    border-width: 1px 0;
    box-shadow: 0 1px 1px rgba(255,255,255,.3);
}
.km-flat #scrollview-container {
    background: transparent;
    border: 0;
    box-shadow: none;
}

#overview-gallery .km-ios .km-content {
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

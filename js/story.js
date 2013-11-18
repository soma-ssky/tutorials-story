///////////////////////////////////////////////////////
// 프로그램 초기화 부분
///////////////////////////////////////////////////////

  var DocumentComplete = false; 

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

  $(document).ready(function(){
    window.kendoMobileApplication.showLoading(); 
    setTimeout(initSSKY, 800);
  });

function initSSKY(){
  if (Parse.User.current()) {

    friendsListUpdate();
    mystoryUpdate();

  if(window.location.hash.substring(1)=="overview-login" || window.location.hash.substring(1)=="/"){
      location.href = "#overview-newsfeed";  
    }
  } else {
    if(window.location.hash.substring(1)!="overview-login" || window.location.hash.substring(1)=="/"){
      location.href = "#overview-login";  
    }
  }
  kendoMobileApplication.hideLoading();
  DocumentComplete = true;



}



function newsfeedUpdate(){


}

var fbscope = "email,user_likes,read_stream,publish_stream";
Parse.serverURL = "http://localhost:8080/";
Parse.initialize("0Oq3tTp9JMvd72LOrGN25PiEq9XgVHCxo57MQbpT",
                 "vUFy2o7nFx3eeKVlZneYMPI2MBoxT5LhWNoIWPja");


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

  var self = this;
  var username = $("#login-username").val();
  var password = $("#login-password").val();

  Parse.User.logIn(username, password, {
    success: function(user) {
      location.href = "#overview-newsfeed";
      if(Parse.FacebookUtils.isLinked(user)) {
        friendsListUpdate();
        mystoryUpdate();
      }

    },
    error: function(user, error) {
      alert("Invalid username or password. Please try again.");
    }
  });
}


function registerFunction(){

  var user = new Parse.User();
  user.set("username", $("#register_username").val());
  user.set("password", $("#register_password").val());
  user.set("email", $("#register_email").val());

  user.signUp(null, {
    success: function(user) {
      location.href= "#overview-newsfeed";
    },
    error: function(user, error) {
      alert("Error: " + error.code + " " + error.message);
    }
  });

}


window.fbAsyncInit = function() {
  Parse.FacebookUtils.init({
    appId      : '644854305526171', 
    channelUrl : 'http://story.ssky.me/channel.html', 
    status     : true, 
    cookie     : true, 
    xfbml      : true
  });
};

(function(d){
  var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js";
  ref.parentNode.insertBefore(js, ref);
}(document));    


function loginWithFacebookFunction(){
  Parse.FacebookUtils.logIn(fbscope, {
    success: function(user) {
      userDataUpdateFacebook();
      location.href = "#overview-newsfeed";
    },
    error: function(user, error) {
      if(error.code == 251) Parse.User.logOut();
      else alert("User cancelled the Facebook login or did not fully authorize.");
    }
  });
}

function logoutFunction(){
  Parse.User.logOut();
  location.href = "/";  
}


function closeModalViewJoin() {
    $("#modalview-join").kendoMobileModalView("close");
}


function userDataUpdateFacebook(){
  FB.api('/me', function(response) {

    var currentUser = Parse.User.current();
    if(response.name) currentUser.set("nickname", response.name);
    if(response.education[0].school.name) currentUser.set("school", response.education[0].school.name);
    if(response.email) currentUser.set("email", response.email);
    if(response.id) currentUser.set("picture", "http://graph.facebook.com/"+response.id+"/picture?type=large");
    currentUser.save();

  });
}

function connectFacebook(e){
  var currentUser = Parse.User.current();

  if(e.checked){

    Parse.FacebookUtils.link(currentUser, fbscope, {
      success: function(user) {
        userDataUpdateFacebook();
        location.href="/#overview-more";
      },
      error: function(user, error) {
        alert("페이스북과 연결 실패했습니다.");
        $("#facebookSwitch").removeAttr("checked");
      }
    });

  } else {

    Parse.FacebookUtils.unlink(currentUser, {
      success: function(user) {
        $("#facebookSwitch").removeAttr("checked");
      }
    });
      
  }
}

function settingClick(e){
  if(e.target.closest('a').attr('id')=="setting_logout") logoutFunction();
}


function test(){
  alert("update");
}

function myRemove(number){

  var MyObject = Parse.Object.extend("Post");
  var query = new Parse.Query(MyObject);
  var myObject = new MyObject;
  query.get(number, {
  success: function(myObject) {
    $('#'+number).remove();
    myObject.destroy();
  }
  });
  
}

///////////////////////////////////////////////////////
// 포스트 작성 부분
///////////////////////////////////////////////////////

function mystoryUpdate(){

  var currentUser = Parse.User.current();
  var myPostObject = Parse.Object.extend("Post");
  var query = new Parse.Query(myPostObject);
  query.equalTo("writer", currentUser.id);
  query.descending("updatedAt");

  query.find({
  success: function(myPostObject) {
    
    myPostObject.reverse();
    var changeList = "";
    $.each(myPostObject,function(index, value){

      changeList += '<li id="'+ value.id + '" class="postlist"><b>';
      changeList += value.get("nickname");
      changeList += "</b><ul class='km-list'><li>";
      changeList += value.get("post");
      if(value.get("photo")){
        changeList += '<img src="';
        changeList += value.get("photo");
        changeList += '" width="100%" style="padding-top:7px">';
      } 
      changeList += '</li><li><a onclick="myRemove(\''+value.id+'\');">삭제</a></li></ul></li>';

      //changeList += "</li></ul></li>";

    });
    $('#mystoryView').html(changeList);

  // The object was retrieved successfully.
  },
  error: function(object, error) {
  // The object was not retrieved successfully.
  // error is a Parse.Error with an error code and description.
  }
  });

}


/*
    query.equalTo("playerName", ["Sulsa","1"]);
    //query.equalTo("playerName", "Sulsa");
    query.find({
      success: function(results) {
        alert("Successfully retrieved " + results.length + " scores.");
        // Do something with the returned Parse.Object values
        for (var i = 0; i < results.length; i++) { 
          var object = results[i];
          alert(object.id + ' - ' + object.get('playerName'));
        }
      },
      error: function(error) {
        alert("Error: " + error.code + " " + error.message);
      }
    });*/


  // 글쓰기메서드
  var writeMode = 0;
  var writeFileMode = 0;

  function FinishWriteOK(){
    kendoMobileApplication.hideLoading();
    $(".km-tabstrip").show();
    location.href = "#overview-mystory";
  }

  function FinishWrite(){

    var currentUser = Parse.User.current();
    var PostObject = Parse.Object.extend("Post");
    var postObject = new PostObject();
     
    postObject.set("writer", currentUser.id);
    postObject.set("nickname", currentUser.get("nickname"));
    postObject.set("post", $('textarea#mytextfield').val());
    
    var fileUploadControl = $("#profilePhotoFileUpload")[0];
    if (fileUploadControl.files.length > 0) {
      var file = fileUploadControl.files[0];
      var name = "photo.jpg";
      var parseFile = new Parse.File(name, file);
      parseFile.save().then(function(e) {
        postObject.set("photo", e._url);
        postObject.save(null, {
          success: function(postObject) {
            mystoryUpdate();
            setTimeout(FinishWriteOK, 1000);
          }
        });

      });
    } else {
      postObject.set("photo", "");
      postObject.save(null, {
        success: function(postObject) {
          mystoryUpdate();
          setTimeout(FinishWriteOK, 1000);
        }
      });
    }

    //var bodys = '양준혁님이 SSKY Story에 새로운 포스트를 작성했습니다.';
    //FB.api('/me/feed', 'post', { message: bodys }, function(response) {
     /* if (!response || response.error) {
        alert('Error occured');
      } else {
        alert('Post ID: ' + response.id);
      } */
    //});

  }

  function WriteMethod(){
    if(writeFileMode==0 && writeMode ==1){
      kendoMobileApplication.showLoading(); 
      FinishWrite();
    }
  }

  //파일첨부 눌렀을때
  function fileClick(){
    writeFileMode = 1;
  }

  //텍스트필드가 포커스 잃었을때 
  var onceWrite;
  document.addEventListener('focusout', function(e) { 

    if(writeMode==1 && ($('textarea#mytextfield').val()) ){
      writeFileMode = 0;
      onceWrite = setTimeout(WriteMethod,700);
    }
   });

  //뒤로가기
  function writeBack(){
    writeMode = 0;
    location.href = "#overview-mystory";
    $(".km-tabstrip").show();
  }
  


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

  function friendsListUpdate(){
    var changeList = "";
    FB.api('/me/friends', function(response) {
      $.each(response.data,function(index, value){
        changeList += '<li><h2>'+value.name+'</h2><img src="http://graph.facebook.com/'+value.id+'/picture?type=large" /> </li>';
      });
      $('#friendsbyFacebook').html(changeList);
    });
  }

  //친구목록뷰
  function myfriendsView_load(){


  }



  //더보기뷰
  function moreView_load(){
    var currentUser = Parse.User.current();

    $('#moreinfo_school').text(currentUser.get("school"));
    $('#moreinfo_nickname').text(currentUser.get("nickname"));
    $('#moreinfo_username').text(currentUser.get("username"));
    $('#moreinfo_email').text(currentUser.get("email"));
    if(currentUser.get("picture")) $('#myprofilePicture').attr("src",currentUser.get("picture"));

    if(Parse.FacebookUtils.isLinked(currentUser)){
      $("#facebookSwitch").attr("checked",true);
      //$("#facebookSwitch").removeAttr("checked");
    }
  }

  //더보기뷰 기본세팅
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


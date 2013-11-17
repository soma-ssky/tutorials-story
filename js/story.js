if (Parse.User.current()) {
  alert("Login");
} else {
  alert("Not Login");
}


function logout(){
  Parse.User.logOut();
}

function login(e){
  var self = this;
  var username = this.$("#login-username").val();
  var password = this.$("#login-password").val();

  Parse.User.logIn(username, password, {
    success: function(user) {

      $(".login-form button").removeAttr("disabled");
    },

    error: function(user, error) {
      $(".login-form .error").html("Invalid username or password. Please try again.").show();
      $(".login-form button").removeAttr("disabled");
    }
  });

  this.$(".login-form button").attr("disabled", "disabled");
}

function signUp(e) {
  var self = this;
  var username = this.$("#signup-username").val();
  var password = this.$("#signup-password").val();

  Parse.User.signUp(username, password, { ACL: new Parse.ACL() }, {
    success: function(user) {


    },

    error: function(user, error) {
      alert("error.message");
      this.$(".signup-form button").removeAttr("disabled");
    }
});



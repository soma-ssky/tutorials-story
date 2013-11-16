<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Parse JavaScript Todo App</title>
    <link href="css/todos.css" media="all" rel="stylesheet" type="text/css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/underscore-1.1.6.js"></script>
    <script src="js/ssky-1.0.js"></script>
    <script src="js/story.js"></script>
  </head>



  <body>

  <script type="text/javascript">
    Parse.initialize("YUH91TBS1TBOKVrgDRRxvmUi95luezVVQqNW5j0x", "DltKiTzyzqJ7VJUzGrtfrsKbQoDBX0aU3K3xUHx5");
    Parse.serverURL = "http://api.ssky.me";
    
    function test(){

      var fileUploadControl = $("#profilePhotoFileUpload")[0];
      if (fileUploadControl.files.length > 0) {
        var file = fileUploadControl.files[0];
        var name = "photo.jpg";
        var parseFile = new Parse.File(name, file);
        parseFile.save().then(function(e) {
          var body = document.getElementsByTagName('body')[0];
            body.style.backgroundImage = 'url(' + e._url + ')';
          //alert(e._url);
        }, function(error) {
          // The file either could not be read, or could not be saved to Parse.
        });
      }


    }
  </script>

  <input type="file" id="profilePhotoFileUpload">
  <input type="button" onclick="test();"></input>



    <!-- Todo App Interface -->

    <div id="todoapp">
      <div class="title">
        <h1>Parse Todos</h1>
      </div>

      <div class="content">
      </div>
    </div>

    <div id="credits">
      Powered by <a href="https://www.parse.com">Parse</a> using the <a href="https://www.parse.com/docs/js_guide">JavaScript SDK</a>.<br /><br />
      Learn how we built it in the <a href='https://parse.com/tutorials/todo-app-with-javascript'>tutorial</a>.
    </div>

    <!-- Templates -->

    <script type="text/template" id="login-template">
      <header id="header"></header>
      <div class="login">
        <form class="login-form">
          <h2>Log In</h2>
          <div class="error" style="display:none"></div>
          <input type="text" id="login-username" placeholder="Username" />
          <input type="password" id="login-password" placeholder="Password" />
          <button>Log In</button>
        </form>

        <form class="signup-form">
          <h2>Sign Up</h2>
          <div class="error" style="display:none"></div>
          <input type="text" id="signup-username" placeholder="Username" />
          <input type="password" id="signup-password" placeholder="Create a Password" />
          <button>Sign Up</button>
        </form>
      </div>
    </script>

    <script type="text/template" id="manage-todos-template">
      <div id="user-info">
        Signed in as <%= Parse.User.current().get("username") %> (<a href="#" class="log-out">Log out</a>)
      </div>

      <div class="section">

        <header id="header">
          <input id="new-todo" placeholder="What needs to be done?" type="text" />
        </header>

        <div id="main">
          <input id="toggle-all" type="checkbox">
          <label for="toggle-all">Mark all as complete</label>
          
          <ul id="todo-list">
            <img src='images/spinner.gif' class='spinner' />
          </ul>
        </div>

        <div id="todo-stats"></div>
      </div>
    </script>

    <script type="text/template" id="item-template">
      <li class="<%= done ? 'completed' : '' %>">
	<div class="view">
	  <input class="toggle" type="checkbox" <%= done ? 'checked="checked"' : '' %>>
	  <label class="todo-content"><%= content %></label>
	  <button class="todo-destroy"></button>
	</div>
	<input class="edit" value="<%= content %>">
      </li>
    </script>

    <script type="text/template" id="stats-template">
      <footer id="footer">
	<span id="todo-count"><strong><%= remaining %></strong> <%= remaining == 1 ? 'item' : 'items' %> left</span>
	<ul id="filters">
	  <li>
	    <a href="javascript:void(0)" id="all" class="selected">All</a>
	  </li>
	  <li>
	    <a href="javascript:void(0)" id="active">Active</a>
	  </li>
	  <li>
	    <a href="javascript:void(0)" id="completed">Completed</a>
	  </li>
	</ul>
	<button id="clear-completed">Clear completed (<%= done %>)</button>
      </footer>
    </script>

  </body>

</html>

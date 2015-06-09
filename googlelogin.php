<html>
  <head>
    <link rel="stylesheet" href="css/credential.css"/>
    <script src="https://apis.google.com/js/client:platform.js" async defer></script>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '341688402685087',
          xfbml      : true,
          version    : 'v2.3'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>

  </head>
  <body>
    <span id="signinButton">
  <span
    class="g-signin"
    data-callback="signinCallback"
    data-clientid="4/pu8L3M2M1-WQGujJoFW4y1ZkW1OkyRQB398R4Cp7Uxg.Eki8XQmINzMUEnp6UAPFm0GiY_vymQI"
    data-cookiepolicy="single_host_origin"
    data-requestvisibleactions="http://schema.org/AddAction"
    data-scope="https://www.googleapis.com/auth/plus.login">
  </span>
</span>

    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '341688402685087',
          xfbml      : true,
          version    : 'v2.3'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    <a href="register1.php">Register</a>
    <a href="login.php">Login</a>
    
    <center>Helpeep</center>
    <br>
    <center>
      <form method="post" action="searchresult.php">
        <input type="text"></input>
        <input type="submit"></input>
      </form>
    </center>
  </body>
</html>


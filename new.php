<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>new</title>
    <link rel="stylesheet" href="new.css">
    <script>
    function nightDayHander (self){
      var target = document.querySelector('body');
      if(self.value === 'night') {
        target.style.color = 'white';
        self.value = 'day';
      } else {
        target.style.color = 'black';
        self.value = 'night';
      }
    }
    </script>
  </head>
  <body>
    <section class-"login-form">
      <h1>LOGO</h1>
      <form action="enter.php">
        <div class="id-area">
          <input type="text" name="id" id="id" autocomplete="off" required>
          <label for="id">USER NAME</label>
        </div>
        <div class="pw-area">
          <input type="password" name="password" id="pw" autocomplete="off" required>
          <label for="pw">PASSWORD</label>
        </div>
        <div class="button-area">
          <button type="submit">LOGIN</button>
        </div>
      </form>
      <div class="caption">
        <a href="">Forgot password?</a>
      </div>
      <input id="darkMode" type="button" value="night" onclick="nightDayHander(this);">
    </section>
  </body>
</html>

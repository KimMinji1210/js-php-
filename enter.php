<div class="menu">
  <h1><a href="new.php">HOME</a></h1>
  <h1><a href="new.php?id=intro">Introduction</a></h1>
  <?php
  if(isset ($_GET['id'])) {
    echo file_get_contents("intro/description");
  }
  ?>
  <h1><a href="">Post</a></h1>
  <h1><a href="">Photo</a></h1>
</div>
<script>
function nightDayHander (self){
  var target = document.querySelector('body');
  var title = document.querySelector('a');
  if(self.value === 'night') {
    target.style.backgroundColor = 'black';
    target.style.color = 'white';
    title.style.color = 'white';
    self.value = 'day';
  } else {
    target.style.backgroundColor = 'white';
    target.style.color = 'black';
    title.style.color = 'blue';
        self.value = 'night';
    }
  }
</script>
<input type="button" value="night" onclick="nightDayHander(this);">

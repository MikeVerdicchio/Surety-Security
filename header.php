<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Surety Security</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php
        //$topics = array("Passwords", "XSS", "SQL Injection");
        $topics = array("Passwords");
        $url = "$_SERVER[REQUEST_URI]";
        $page = explode("/", $url)[1];
        foreach ($topics as $topic){
          $temp = explode(" ", $topic)[0];
          if($page == strtolower($temp)){
            echo "<li class='active'><a href=/". strtolower($topic) . ">" . $topic . "</a></li>";
          }
          else{
            echo "<li><a href=/". strtolower($topic) . ">" . $topic . "</a></li>";
          }

        } 
        
        ?>
      </ul>
    </div>
  </div>
</nav>
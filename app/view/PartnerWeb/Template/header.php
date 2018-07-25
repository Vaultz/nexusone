<?php

$path=getPath();
?>

<header>
  <nav class="main-nav">
    <div class="navbar nav-wrapper indigo darken-1">
      <div class="row">
        <a href="/" class="brand-logo center">NEXUS ONE</a>
      </div>
    </div>
  </nav>
  <nav class="path-nav">
    <div class="navbar nav-wrapper indigo darken-1">
      <div class="row">
        <?php
          $pathSize=sizeof($path);
          for ($i=0; $i <$pathSize ; $i++) {
            echo '<a class="pathelement" href="'.$path[$i][0].'">'.$path[$i][1].'</a>';
            if ($i+1<$pathSize) echo ' > ';
          }
        ?>
      </div>
    </div>
  </nav>
</header>

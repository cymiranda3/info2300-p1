<!--
 * Citation: I do not want to violate the Academic Integrity Agreement, thus I
 * am citing Lab 2 in INFO 2300 for the idea of the header array. I maintain
 * that I did not copy and paste, I simply referenced.
-->

<header>
  <h1 id="title">Constantin Miranda</h1>

  <nav id="menu">
    <ul>
      <?php
      foreach($pages as $page => $name) {
        if ($page == $current_page_id) {
          $css_id = "id='current_page'";
          $filetype = ".php";
          $target = "";
        } else if ("resume" == $page) {
          $css_id = "";
          $filetype = ".pdf";
          $target = "target = '_blank'";
        }
        else {
          $css_id = "";
          $filetype = ".php";
          $target = "";
        }
        echo "<li><a ".$target.$css_id . " href='" . $page.$filetype. "'>$name</a></li>";
      }
      ?>
    </ul>
  </nav>
</header>

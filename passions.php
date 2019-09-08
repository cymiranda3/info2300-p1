<!--
 * Citation: I do not want to violate the Academic Integrity Agreement, thus I
 * am citing activity the confitionals/functions lecture in INFO 2300 for the
 * idea of the image gallery. I maintain that I did not copy and paste,
 * simply referenced.
-->

<?php
  include("includes/init.php");
  $current_page_id = "passions";
  $booklist = array(
    "1984.jpg", //DesignYourWay.net, source: http://www.designyourway.net/blog/wp-content/uploads/2017/12/1984-book-cover-1.jpg
    'jobs.jpg', //Simon & Schuster, source: http://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781501127625/steve-jobs-9781501127625_hr.jpg
    'algernon.jpg', //Behance.net, source: https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/c1336821079483.562fb20322fe5.jpg
    'arabian.jpg', //Amazon.com, source: https://images-na.ssl-images-amazon.com/images/I/61W29YPte8L._SX322_BO1,204,203,200_.jpg
    'thiel.jpg', //imgur.com, source: https://i.imgur.com/0SKKLKC.jpg
    'musk.jpg', //Amazon.com, source: https://images-na.ssl-images-amazon.com/images/I/5179mrE%2BWWL.jpg
    'mocking.jpg' //Harper Collins, source: https://i.harperapps.com/covers/9780062420701/x500.jpg
  );

  $languages = array(
    'bluetext">&lt;h2&gt;Languages&lt;/h2',
    'greentext">&lt;ul',
    'orangetext">&lt;li&gt;PHP&lt;li',
    'orangetext">&lt;li&gt;HTML&lt;li',
    'orangetext">&lt;li&gt;CSS&lt;li',
    'orangetext">&lt;li&gt;JavaScript&lt;li',
    'orangetext">&lt;li&gt;Python&lt;li',
    'orangetext">&lt;li&gt;Java&lt;li',
    'greentext">&lt;/ul'
  );

  $projects = array(
    'bluetext">&lt;h2&gt;Projects&lt;/h2',
    'greentext">&lt;ul',
    'orangetext">&lt;li&gt;<a id="orangelink" href="index.php">This Very Site</a>&lt;/li',
    'comment">&lt;!-- Created for Cornell:INFO 2300 Project 1 --',
    'orangetext">&lt;li&gt;<a id="orangelink" href="http://www.abbeysnowsports.com/">AbbeySnowsports.com</a>&lt;/li',
    'comment">&lt;!-- Site to Automate Ski Club Registration Process --',
    'orangetext">&lt;li&gt;<a id="orangelink" href="http://www.findmydividend.com/">FindMyDividend.com</a>&lt;/li',
    'comment">&lt;!-- Site to Automate Researching Stock Dividends --',
    'orangetext">&lt;li&gt;<a id="orangelink" href="http://www.religioapp.com/">ReligioApp.com</a>&lt;/li',
    'comment">&lt;!-- Web Development Work for Cornell Startup --',
    'orangetext">&lt;li&gt;<a id="orangelink" href="http://www.petercetale.com/">PeterCetale.com</a>&lt;/li',
    'comment">&lt;!-- Web Development Work for Startup Founder --',
    'greentext">&lt;/ul'
  );

  $coursework = array(
    'bluetext">&lt;h2&gt;Relevant Coursework&lt;/h2',
    'greentext">&lt;ul',
    'orangetext">&lt;li&gt;CS 1110: Introduction to Computing Using Python&lt;/li',
    'orangetext">&lt;li&gt;CS 2110: OO Programming & Data Structures</a>&lt;/li',
    'orangetext">&lt;li&gt;INFO 2040: Networks&lt;/li',
    'orangetext">&lt;li&gt;INFO 2300: Intermediate Web Design & Programming&lt;/li',
    'greentext">&lt;/ul',
  );

  function image_gallery($book) {
    echo "<img src=\"images/".$book."\"/>";
  }

  //User Defined function
  function build_html($arrayname, $arrayname_short) {
    foreach ($arrayname as $arrayname_short) {
      echo '<span class="'.$arrayname_short.'&gt;</span><br>';
    }
    echo "<br>";
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Passions</title>
  <link href="styles/all.css" rel="stylesheet"/>
</head>

<body>
  <?php include("includes/header.php");?>
  <h1 class="reading">Reading List</h1>
  <div id="booklist">
    <?php
    foreach($booklist as $cover) {
      image_gallery($cover);
    }
    ?>
    <p id="credit">Credits:<br>&nbsp&nbsp1.1984 -
      <a href="http://www.designyourway.net/blog/wp-content/uploads/2017/12/1984-book-cover-1.jpg">DesignYourWay.net</a>&nbsp2. Steve Jobs -
      <a href="http://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781501127625/steve-jobs-9781501127625_hr.jpg">Simon & Schuster</a>&nbsp3. Flowers for Algernon -
      <a href="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/c1336821079483.562fb20322fe5.jpg">Behance.net</a>&nbsp4. Arabian Nights & Days -
      <a href="https://images-na.ssl-images-amazon.com/images/I/61W29YPte8L._SX322_BO1,204,203,200_.jpg">Amazon.com<a>&nbsp5. Zero to One -
      <a href="https://i.imgur.com/0SKKLKC.jpg">Imgur.com</a>&nbsp6. Elon Musk -
      <a href="https://images-na.ssl-images-amazon.com/images/I/5179mrE%2BWWL.jpg">Amazon.com</a>&nbsp7. To Kill a Mockingbird -
      <a href="https://i.harperapps.com/covers/9780062420701/x500.jpg">Harper Collins</a>
    </p>
  </div>

  <section class="passions">
    <div class="investing-section">
      <h1>Investing</h1>
      <p id="investing-description"> From a young age, I have taken an interest
        in investment analysis. I manage a personal portfolio consisting of stocks,
        bonds, ETFs, and mutual funds. <br><br>My personal investment strategy is
        focused on dividend returns as well as Warren Buffet and Benjamin
        Graham's value investment model. I have read several biographies
        regarding their strategies. Furthermore, I regularly use sites like The
        Motley Fool, Seeking Alpha, and Market Watch to inform my investing
        decisions. <br><br>Based on these readings, I have worked on two personal
        projects directly related to investment analysis. The first was a project
        for my AP Computer Science course in high school where I used Java to build
        a stock screener and accompanying GUI to filter stocks based on the user's
        choice of one of three focuses: value, growth, or dividend. The second is
        an ongoing project: <a href="http://www.findmydividend.com/">FindMyDividend.com</a>.
        I am using an API to pull dividend data to better inform investors
        on key dividend metrics and dates. The link to this site as well as
        a Reddit post where I received feedback is linked to the right under
        the 'Web Development' section of this page.</p>
    </div>
    <div class="webdev-section">
      <h1>Web Development</h1>
      <p>
        <!-- Opening Tags -->
          <span class="redtext">&lt;html&gt;</span><br><br>

        <?php
          /* Languages Section */
          build_html($languages, "lang");

          /*Projects Section */
          build_html($projects, "proj");

          /*Relevant Coursework Section*/
          build_html($coursework, "courses");
        ?>

        <!-- Closing Tags -->
        <span class="redtext">&lt;/html&gt;</span><br><br>
      </p>
    </div>
  </section>

  <section class="footer-section">
    <div id="footer">
      <?php include("includes/footer.php");?>
    </div>
  </section>
</body>
</html>

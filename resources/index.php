   <?php 
      $pagetitle = 'Resources';
      $pagescripts = "<!-- MathJax -->
         <script id='MathJax-script' async src='https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js'></script>";
      include("../templates/head.php"); 
   ?>
   
   <div class="mainwrapper">
      <div class="subwrapper">
         <?php
            $db = new PDO("mysql:dbname=mathsite;host=localhost","root"); 
            $rows = $db->query("SELECT title, link, description FROM reference"); 
         ?> 
         <ul> 
         <?php
         foreach ($rows as $row) {
            ?>
            <li class="definition listitem">
               <a href="<?= $row['link'] ?>" target="blank"><?= $row['title'] ?></a>
               : <?= $row['description'] ?>
            </li>
            <?php
         }
         ?>
         </ul>
      </div>
   </div>
</body>
<?php 
   include 'header.php';  
?> 
<?php 
   include 'nav.php';  
?> 
   
      
      <main>
      <?php 
      function getPostDetailsFromDatabase() {
      $postDetails = array('title' => 'Blog post 1', 
                           'content' => 'My first blog post', 
                           'date' => '01/01/2019', 
                           'author' => 'christidaes');  
                
               return $postDetails; 
              }
       ?> 

      
      <div class="container-copy"> 
       <?php 
          $postDetails = getPostDetailsFromDatabase(); 
       
       ?>


      <h1><?php echo $postDetails["title"];?> </h1> 
      <div class="author"><?php echo $postDetails["author"];?></div> 
      <div class="date"><?php echo $postDetails["date"]; ?></div> 
      <div class="copy-container post-content"> 
                 <?php echo $postDetails["content"]; ?> 

       </div> 
       </div> 
      </main>
      <?php 
   include 'footer.php';  
?> 
      </main>
     </body>
     </html>
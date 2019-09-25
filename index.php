<?php 
   include 'header.php';  
?> 
<?php 
   include 'nav.php';  
?> 


<main>
<ul>
 <li><a href="post.html">Blog Post</a></li>
</ul>
<?php 
function getPostTitlesFromDatabase() {
//TODO in Module4
// get his data fro ma database instead of hardcoding it 

$postTitle = array("Blog Post 1", "Blog Post 2", "Blog Post 3"); 
return $postTitles; 

}
?> 
<ul>
<?php 

$postTitles = getPostTitlesFromDatabase(); 

foreach($postTitles as $postTitle) {
	echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>"; 
}


?> 
</ul>
</main>
<?php 
   include 'footer.php';  
?> 

</body>
</html>
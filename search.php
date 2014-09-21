<!DOCTYPE html>

  <html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="lk">
   

    <title>网络流行语</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="dist/js/bootstrap.js"></script>
<script type="text/javascript" src="dist/js/holder.js"></script>
   
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
   <?php include "header.php";?>
   <?php 
    $searchCondition=$_GET['searchCondition'];
    $con=mysql_connect("localhost","root","051110");
    if(!con)
    {
      die("Could not connect".mysql_error());
    }
    mysql_select_db("liuxinyu",$con);
    mysql_query("set names utf8;");   
    $result=mysql_query("select * from popularwords where title='$searchCondition' ");
    $row=mysql_fetch_array($result);
     if(!$row){
     	echo '
     	<div class="container">
  
      	<h1>未找到您要的结果！</h1>
		</div>';
     }else{
     	echo "<div class='container'>
		
		<div class='page-header'>
  
     	 <h1>  ".$row['title'] ."<small> ".$row['pinyin']." </small></h1>
		</div>
		<p>[释义]</p>
		<p>/ ".$row['category']." /</p>
		<p> ".$row['explanation']."</p>
		<p>[源起]</p>
		<p> ".$row['origins']."</p>
		<p>[衍生词]</p>
		<p> ".$row['derivative']."</p>
		<p>[例]</p>
		<p> ".$row['example']."</p>
		<p>[注意]</p>
		<p>". $row['attention']."</p>
</div>";
     }
    
   ?>
	
	
	
 
	
	
    </body>

    </html>
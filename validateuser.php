<?php
$uname = $_POST['uname'];
$password = $_POST['password'];


if(!empty($uname)){
    session_start();
} else {
    header("location: userlogin.html");
}

if(!empty($password)){
    session_start();
} else {
    header("location: userlogin.html");
}
echo "<div class='user-info'>";
echo "<h2>Hello, " . $uname . ". Below you will find a list of books!</h2>";

echo "<br>";

echo "<br>";
echo "</div>";


$xmlData = simplexml_load_file("book.xml") or die("Failed to Load");
echo "<div class='table'>";
echo "<table class='book-info'>";
echo "<tr>
        <th>AUTHOR</th>
        <th>TITLE</th>
        <th>GENRE</th>
        <th>PRICE</th>
        <th>PUBLISH DATE</th>
        <th>DESCRIPTION</th>
</tr>";
foreach ($xmlData->children() as $book){
    echo "<tr>";
    echo "<td align='center'><strong>" . $book->author . "</strong></td>";
    echo "<td align='center'>" . $book->title . "</td>";
    echo "<td align='center'>" . $book->genre . "</td>";
    echo "<td align='center'>" . $book->price . "</td>";
    echo "<td align='center'>" . $book->publish_date . "</td>";
    echo "<td align='center'>" . $book->description . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</div>";
echo "<div class='button'>";
echo "<br><a href='logout.php'><input type='button' value='Logout' name='logout' class='logout'></a>";
echo "</div>";
?>

<style>
body{
    margin: 0;
	padding: 0;
	font-family: Verdana, Geneva, sans-serif;
	background: #2c3e50  
}
.book-info {
  font-family: Verdana, Geneva, sans-serif;
  border-collapse: collapse;
  width: 55%;
}

.book-info td, .book-info th {
  border: 1px solid #7F7F7F;
  padding: 10px;
}

.book-info tr:nth-child(even){background-color: #FBD4BC;}
.book-info tr:nth-child(odd){background-color: #fff;}


.book-info th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #e67300;
  color: black;
} 
.table{
   display: flex;
   align-items: center;
   justify-content: center;
}
.user-info{
   display: flex;
   align-items: center;
   justify-content: center;
   text-align: center;
   color: #fff;
   font-weight: 400;
}
.button{
    display: flex;
    justify-content: center;
}

.logout{
  background-color: #d35400; 
  border: none;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 20px;
  font-size: 15px;
  cursor: pointer;
}

</style>
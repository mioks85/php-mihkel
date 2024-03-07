<?php include("header.php"); ?>
<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if ($page=="services") {
        include("services.php");
    }else if($page=="contact") {
        include("contact.php");
    }
}else{

?>

<h1>avalehe asjad</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores ipsa at eaque! Quod soluta similique rem porro delectus facere aspernatur, modi, voluptates minima laborum, natus molestias ea et optio ex.</p>
<?php 
}
?>
<?php include("footer.php"); ?>
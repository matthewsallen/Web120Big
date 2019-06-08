<?php 

$page = "flexbox";

$title = "Flexbox Information";

$metaD = "flexbox";

include 'includes/header.php';

?>
      
<!-- START LEFT COL -->
<section>


 <p>A CSS Flexbox is a model designed to be more responsive to different browsers or screen sizes. The Flexbox layout is direction based unlike block and inline, which are vertically and horizontally based. It consists of a parent flex container with children called flex items, set on 2 axis. (1) To use Flexbox, you can enter the display property inline in the HTML document, or include it in a referenced style sheet.<br><br>

 It is possible to modify the order of the child items by setting the order property. Flex-grow can allow an item to grow in width using a unitless value that is a proportion. CSS determines how much space the item will take up based on available space. Flex-grow is by default set to 1 for each child, so they would all grow at the same proportion. Giving one child a higher flex-grow value will use portions of space from the other children. You can also use flex-shrink, flex-basis, and align-self to modify the child items. (2)<br><br>
     
You can also modify the parent container properties. Giving a flex-wrap property can control if the flex container lay out its items in single or multiple lines, and the direction the new lines are stacked in. Flex items that are displayed in one row are shrunk to fit the flex container's width, by default. Items can also be displayed in multiple rows if needed. You can also control the order in which children of a flex container appear inside the flex container. By default, they are ordered as initially added in the flex container.All major browsers have been able to run flexbox since 2015. It has largely replaced the float property.<br><br>

</p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Sources</h3>
<ol>
    <li>“Basic Concepts of Flexbox.” MDN Web Docs, Mozilla, 23 Mar. 2019, <a href="developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox</a></li>
    <br>
    <li>“A Complete Guide to Flexbox | CSS-Tricks.” CSS-Tricks, CSS-Tricks.com, 8 Apr. 2013, <a href="css-tricks.com/snippets/css/a-guide-to-flexbox/">css-tricks.com/snippets/css/a-guide-to-flexbox/</a></li>   
    
    </ol>

</aside>
<!-- END RIGHT COL -->
 
<?php include 'includes/footer.php';?>


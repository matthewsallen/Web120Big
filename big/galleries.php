<?php 

$page = "galleries";

$title = "Image Galleries";

$metaD = "galleries";

include 'includes/header.php';

?>

<link rel="stylesheet" href="css/gallery.css" />

<body>

<!-- START LEFT COL -->
<section>

    <div class="container">

        <p>
            There are many tools to make attractive and functional image galleries for websites. While you can simply link a photo in HTML, there are more dynamic methods using CSS and JavaScript & Jquery. Photos can be ‘heavy’ and can slow loading times. I remember as a child being frustrated at how slow images would load on a dial-up connection. This is because images take more resources than text or other static elements. A page with a lot of images can benefit from code that makes loading faster, scrolling easier, and is compatible with all devices and browsers. (1) <br><br>
            
            There are many easy ways to make an attractive and functional gallery on your site. If you use simple HTML, you could include a thumbnail/link to the larger photo. While simple, this can be clunky and may take the user directly to the large image file, leaving the main layout (header, nav, footer, etc.). CSS makes galleries much more customizable and interesting, as well as improving visual appeal. CSS can also make the images responsive to different devices and browsers. <br><br>
            
            Expanding on the HTML and CSS, JavaScript can be added to make navigating the images more dynamic. JavaScript and JQuery can modify how a user can click, open, swipe, and how images can transition. Some code can even query external media like YouTube and Flickr. Lightbox is a popular tool that we learned how to use in Web 110. It uses a combination of HTML, CSS, and JavaScript. (2)  When a photo is selected, a pop-up interface (not window) with a larger image, clickable thumbnails, an “x” close button, and two directional buttons. It works very seamlessly because you are not leaving the original webpage to enlarge or navigate the images. Along with Lightbox, there are (at least) hundreds of other solutions for making your image gallery a pleasant experience.
        </p>
        
</section>
    
<!-- START RIGHT COLUMN -->
    
<aside>
    <h3>Sources</h3>
    <ol>
        <li>“How to Create a Photo Gallery for Your Website.” 1&1 Ionos Digital Guide, 1&1 Ionos, 14 Oct. 2016, <a href="https://www.sitemanager.io/blog/how-to-create-high-quality-responsive-website-galleries/">https://www.sitemanager.io/blog/how-to-create-high-quality-responsive-website-galleries/</a>
        </li>
        <br>
        <li>“How TO - Lightbox.” How To Create a Lightbox, W3 Schools, <a href="www.w3schools.com/howto/howto_js_lightbox.asp.">www.w3schools.com/howto/howto_js_lightbox.asp.<br></a>
        </li>
    </ol>
    
</aside>

<!-- END RIGHT COL -->
    
<?php include 'includes/footer.php';?>

<!--
 * Author:  abon duttaroy<abon@sbcreationgroup.com>
 * Created: 5 May, 2018
-->

<?php require_once('_header.php'); ?>
<?php 
    print_r(Post::getDetails($_GET['slug']));
//
//slug goes for database takes out post details.
?>
<?php require_once('_footer.php'); ?>

<?php 
$allPosts = Post::getList();
?>
<?php 
require_once('_header.php'); ?>
<?php
foreach ($allPosts as $post){
 echo $post['title'];
 echo "<br>".$post['content'];
}
?>
<div class="container-fluid">
    <div class="row toprow">
    </div>
    <div class="row navspace">
    </div>
</div>
<div class="container">
<div class="row">
    <div class="col-sm-3">
    </div>
    <div style="border:none!importent" class="col-sm-6">
      <form class="form-control" action="post.html" method="post" enctype="text/plain">
        <input type="text" style="margin-top:2px;" class="form-control" required="required" placeholder="Title" />
        <textarea rows="3" style="margin-top:2px;" class="form-control" required="required" placeholder="Type your Thinking"></textarea>
        <input type="text" style="margin-top:2px;" class="form-control"  placeholder="Add Friends" />
        <div class="text-right">
        Share with <input  type="checkbox" class="form-check-inline" />Facebook &nbsp;&nbsp; <input type="checkbox" class="form-check-inline" />Twitter&nbsp;&nbsp;
        <input name="Submit" type="submit" class="btn btn-info post" style="margin-top:2px;" value="Post" />
        
        </div>
        
        </form>
        <br />
        <div class="postupdate">
        <h3>Post @$#! 1234</h3>
        <h6>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a </h6>
        <hr />
        <div>
        	<button>LIKE</button>
        	<button>COMMENT</button>
        	<button>SHARE</button>
        </div>
        <div>
      
        </div>
        
        
        </div>
       
        </div>
        <div class="col-sm-3">
    </div>
</div>
<?php require_once('_footer.php'); ?>

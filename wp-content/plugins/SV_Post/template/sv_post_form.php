<?php

function sv_post_form($post_title, $post_content)
{
    echo ' <form action = "' . $_SERVER['REQUEST_URI'] . '" method = "POST" >
	
         <div class="form-group">
            <label for = "post_title"> post_title <strong>*</strong></label>
            <input class="form-control" type = "text" id = "post_title" name = "post_title" value = "' . (isset($_POST['post_title']) ? $post_title : null) . '">
         </div>
         
          <div class="form-group">
            <label for = "post_content"> BIO </label>
            <textarea class="form-control" id = "post_content" name = "post_content">' . (isset($_POST['post_content']) ? $post_content : null) . '</textarea>
          </div>
		  
          <input class = "btn btn-block" type ="submit" name="submit" value = "Register" />
          </form>
    ';
}

?>
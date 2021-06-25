<?php
	if( post_password_required() ){
		return;
	}
?>
<!-- Comments -->
<div id="comments" class="clearfix">

	<?php
		if( have_comments() ){
			?>

				<h3 id="comments-title"><span><?php comments_number(); ?></span></h3>

				<!-- Comments List -->
			    <ol class="commentlist clearfix">
			    	<?php
						
			    		foreach( $comments as $comment ){
			    			?>

						    	<li class="comment even thread-even depth-1" id="li-comment-1">

							        <div id="comment-1" class="comment-wrap clearfix">

							          <div class="comment-meta">

							            <div class="comment-author vcard">

							              <span class="comment-avatar clearfix">
							                <?php
							                	$avatar_args = array(
							                		'class'	 =>	'avatar avatar-60 photo avatar-default'
							                	);
							                	echo get_avatar( $comment, 60, 'wavatar', '', $avatar_args );
							                ?>
							              </span>

							            </div>

							          </div>

							          <div class="comment-content clearfix">

							            <div class="comment-author">
							              <?php comment_author(); ?>
							              <span><?php comment_date(); ?></span>
							            </div>

							            <?php comment_text(); ?>

							          </div>

							          <div class="clear"></div>

							        </div>

						    	</li>

			    			<?php
			    		}

			    		the_comments_pagination();

			    	?>
			    </ol>
			    <!-- .commentlist end -->

			<?php
		}
	?>

	<div class="clear"></div>

    <!-- Comment Form-->
    <div id="respond" class="clearfix">

    	<?php
    		$comment_field = '
					<div class="col_full">
			          <label>'. __( "Comment &#42;", "wp-clinic" ) .'</label>
			          <textarea name="comment" cols="58" rows="7"  class="sm-form-control"></textarea>
			        </div>
			';
			$author_field = '
					<div class="col_one_third">
			          <label>'. __( "Name &#42;", "wp-clinic" ) .'</label>
			          <input type="text" name="author" class="sm-form-control" />
			        </div>
			';
			$email_field = '
					<div class="col_one_third">
			          <label>'. __( "Email &#42;", "wp-clinic" ) .'</label>
			          <input type="text" name="email" class="sm-form-control" />
			        </div>
			';
			$url_field = '
					<div class="col_one_third col_last">
			          <label>'. __( "Website", "wp-clinic" ) .'</label>
			          <input type="text" name="url" class="sm-form-control" />
			        </div>
			';
			$fields	= array(
				'author'	=>	$author_field,
				'email'		=>	$email_field,
				'url'		=>	$url_field
			);
			$class_submit	=	'button button-3d nomargin';
			$label_submit	=	__( 'Submit Comment', 'wp-clinic' );
			$title_reply	=	__( 'Leave a ', 'wp-clinic' ). '<span>' . __( 'Comment', 'wp-clinic' ) . '</span>';
			$args = array(
				'comment_field'		=>	$comment_field,
				'fields'			=>	$fields,
				'class_submit'		=>	$class_submit,
				'label_submit'		=>	$label_submit,
				'title_reply'		=>	$title_reply,
			);
			comment_form( $args );
    	?>

    </div>
    <!-- #respond end -->

</div>
<!-- #comments end -->
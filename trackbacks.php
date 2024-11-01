<?php if (is_array($trackbacks) && count($trackbacks) > 0) { ?>
<div id="trackbackslist">
	<h3>Trackbacks</h3>
	<ul>
<?php 	foreach ($trackbacks as $comment) { ?>
		<li id="comment-<?php echo $comment->comment_ID ?>">
			<p><?php echo $comment->comment_content ?></p>
			<cite><a href="<?php  echo $comment->comment_author_url; ?>" rel="external nofollow"><?php echo $comment->comment_author; ?></a> &#8212; <?php echo mysql2date( get_option('date_format'), $comment->comment_date); ?> @ <a href="#comment-<?php echo $comment->comment_ID ?>"><?php echo mysql2date( get_option('time_format'), $comment->comment_date); ?></a></cite>
		</li>
<?php 	} ?>
	</ul>
</div>
<?php } ?>
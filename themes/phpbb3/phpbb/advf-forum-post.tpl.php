<?php
// $Id: advf-forum-post.tpl.php,v 1.1 2008/09/29 18:02:43 q8doc Exp $

/**
 * advf-forum-post.tpl.php is the template file for both
 * the top post (the node) and the comments/replies
 * Changes here will affect an individual forum post.
 
 * The following standard variables are available to you:
    $top_post    - TRUE if we are formatting the main post (ie, not a comment)
    $title       - Title of this post/comment
    $content     - Content of this post/comment
    $reply_link  - Separated out link to reply to topic
    $jump_first_new - Shows number of new (to user) comments and links to the first one
    $links       - Formatted links (reply, edit, delete, etc)
    $links_array - Unformatted array of links
    $submitted   - Formatted date post/comment submitted

    $accountid   - ID of the poster
    $name        - User name of poster
 */
?> 
<a name="up"></a>
<?php if ($top_post): ?>
  <?php $postclass = "top-post"; ?> 
  
  <div class="forum-post-header">
    <?php print $reply_link; ?>
    <?php print $jump_first_new;?>
  </div><?php endif; ?>
 <br>
<div class="<?php print $postclass ? $postclass . ' ' : ''; ?>forum-comment<?php print $row_class ? ' forum-comment-' . $row_class : ''; print $comment->new ? ' comment-new forum-comment-new' : ''; ?> clearfix">
  <div class="forum-post-wrapper">
  <table bgcolor="#f2f2f2"><tr><td valign="top" width=100%>
  <table><tr><td>
  <div class="posttitle">
<span class="posted-on"><?php print $name . t(" ") . t("On: ") . $date;?></span>  
    <?php if ($comment->new) : ?>
      <a id="new"></a>
      <span class="new"><?php print $new ?></span>
    <?php endif ?><?php
      if (!$top_post) {
        print '<span class="post-num">';
        print $comment_link;
        print ' ' . $page_link;
        print '</span>' ;
      }?>
</div></td></tr>
  <tr><td valign="top">
<div class="forum-comment-right" > 
<table><tr><td width="1000px" style="word-wrap:break-word">
        <?php print $content ?></td></tr></table>
      <!-- Note: This is only used in 6.x -->
      <?php if ($signature): ?>
        <div class="user-signature clear-block">
        <?php print $signature ?>
        </div>
      <?php endif; ?>
 
    </div></div></td></tr></table></td>
    <td width=18% valign="top" >
    <div class="forum-comment-left">
      <div class="innertube">
      <?php print $user_info_pane; ?>   
     </div>
    </div></td></tr>
  <tr><td colspan=2><div class="links" style="background-color:#f2f2f2;">
<?php print $links;?><div class="top"><A href="#up">_</a></div></div></td></tr></table>
</div>
<div class="clear"></div>
<?php if ($top_post) { ?>
  <br />
<?php } ?>

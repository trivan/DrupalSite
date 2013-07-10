<?php
// $Id: advf-forum-repeat-post.tpl.php,v 1.1 2008/09/29 18:02:43 q8doc Exp $
/*modified by bisho for phpbb style for AF*/
/**
 * advf-forum-repeat-post.tpl.php is a blank template file used for the 
 * repeated node on the top of each page of a paginated forum thread.
 * If you leave it empty, subsequent pages will start with the next comment
 * like you typically find in forum software. You could also put a specially
 * formatted teaser to remind people what post they are reading. If you like
 * having the entire node repeated, simply copy the entire contents of 
 * advf-forum-post.tpl.php into this file. All the same variables are available.
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
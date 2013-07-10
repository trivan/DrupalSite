<?php
// $Id: advf-forum-topic-list.tpl.php,v 1.1 2008/09/29 18:02:43 q8doc Exp $

/**
 * @file advf-forum-topic-list.tpl.php
 * Theme implementation to display a list of forum topics.
 *
 * Available variables:
 * - $header: The table header. This is pre-generated with click-sorting
 *   information. If you need to change this, @see template_preprocess_forum_topic_list().
 * - $pager: The pager to display beneath the table.
 * - $topics: An array of topics to be displayed.
 * - $topic_id: Numeric id for the current forum topic.
 * - $forum_description: Description of the forum these topics are in.
 *
 * Each $topic in $topics contains:
 * - $topic->icon: The icon to display.
 * - $topic->moved: A flag to indicate whether the topic has been moved to
 *   another forum.
 * - $topic->title: The title of the topic. Safe to output.
 * - $topic->message: If the topic has been moved, this contains an
 *   explanation and a link.
 * - $topic->zebra: 'even' or 'odd' string used for row class.
 * - $topic->sticky_class: 'sticky-topic' or 'first-not-sticky' or 'not-sticky'
 * - $topic->num_comments: The number of replies on this topic.
 * - $topic->new_replies: A flag to indicate whether there are unread comments.
 * - $topic->new_url: If there are unread replies, this is a link to them.
 * - $topic->new_text: Text containing the translated, properly pluralized count.
 * - $topic->created: An outputtable string represented when the topic was posted.
 * - $topic->last_reply: An outputtable string representing when the topic was
 *   last replied to.
 * - $topic->timestamp: The raw timestamp this topic was posted.
 *
 * @see template_preprocess_forum_topic_list()
 * @see advanced_forum_preprocess_forum_topic_list()
 */
?>

<?php print $pager; ?>

<table id="forum-topic-<?php print $topic_id; ?>" class="forum-topics">
  <thead>
   <tr><td><font color="#FFFFFF">Status</font></td><td><font color="#FFFFFF">Topic</font></td><td><font color="#FFFFFF">Replies</font></td><td><font color="#FFFFFF">Views</font></td><td><font color="#FFFFFF">Created</font></td><td><font color="#FFFFFF">Last reply</font></td></tr>
  </thead>
  
  <tbody>
  <?php foreach ($topics as $topic): ?>
    <?php 
    if ($topic->sticky) {
      $stickyclass = 'stickytopic';
      $wassticky = TRUE;
      $topic->title = '<em>' . t('Sticky') . ':</em> ' . $topic->title;
    } else {
      if ($wassticky) {
        $stickyclass = 'firstnotsticky notsticky';
        $wassticky = FALSE;
      } else {
        $stickyclass = 'notsticky';
      }
    }  
    ?>
    <tr class="<?php print $topic->zebra;?> <?php print $stickyclass;?>">
      <td width="5%" class="icon"><?php print $topic->icon; ?></td>
      <td width="45%"class="title">
      <?php 
      print $topic->title; 
      if (!empty($topic->pager)) {
        print $topic->pager;
      }
      ?></td>
    <?php if ($topic->moved): ?>
      <td colspan="3">
      <?php print $topic->message; ?>
      </td>
    <?php else: ?>
      <td width="5%"class="replies">
        <?php print $topic->num_comments; ?>
        <?php if ($topic->new_replies): ?>
          (<a href="<?php print $topic->new_url; ?>"><?php print $topic->new_text; ?></a>)
        <?php endif; ?>
      </td>
      <?php if (module_exists('statistics')): ?><td width="5%"class="views"><?php print $topic->views;?></td><?php endif; ?>
      <td width="20%" class="created"><?php print $topic->created; ?> </td>
      <td width="15%" class="last-reply"><?php print $topic->last_reply; ?> </td>
    <?php endif; ?>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>

<?php print $pager; ?>
  </thead>
  <tbody>
  
  </tbody>
</table></div>
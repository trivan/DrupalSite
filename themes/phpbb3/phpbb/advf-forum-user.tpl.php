<?php
// $Id: advf-forum-user.tpl.php,v 1.1 2008/09/29 18:02:43 q8doc Exp $
/*modified by bisho for phpbb style for AF*/
/**
 * @file advf-forum-user.tpl.php
 * Theme implementation to display information about the posting user.
 *
 * Available variables (core modules):
 * - $account: The entire user object.
 * - $picture: Themed user picture.
 * - $name: Themed user name wrapped in a div class "username". 
 * - $name_raw: Themed user name. 
 *
 * - $joined: Date the user joined the site in the format "Joined: DATE"
 * - $joined_raw: Date the user joined the site with no markup
 * - $joined_ago: Time since the user registered in the format "Joined: TIME ago"
 * - $joined_ago_raw: Amount of time since the user joined the site with no markup.
 *
 * - $online_icon: Online/Offline icon.
 * - $online_status: Translated text "Online" or "Offline"
 *
 * - $contact: Marked up and linked icon and text.
 * - $contact_icon: Unlinked icon.
 * - $contact_link: raw link to user contact page. ie: 'user/1/contact'.
 * 
 * - $profile - Profile object from core profile. 
 *     Usage: $profile['category']['field_name']['value']
 *     Example: <?php print $profile['Personal info']['profile_name']['value']; ?>
 *
 * Available variables (contributed modules):
 * - $facebook_status: Status from the facebook status module.
 *
 * - $privatemsg: Marked up and linked icon and text.  
 * - $privatemsg_icon: Unlinked icon. 
 * - $privatemsg_link: Raw link to send private message to user. 
 *
 * - $user_stats_posts: Marked up number of posts from user stats module.
 * - $user_stats_posts_raw: Just the post count.
 * - $user_stats_ip: Marked up IP address from user stats module.
 * - $user_stats_ip_raw: Just the IP address.
 *
 * - $userpoints_points: Marked up number of points from userpoints module.
 * - $userpoints_points_raw: Just the points count.
 *
 * 5.x only at this time:
 *
 * - $buddylist: Marked up and linked icon and text.  
 * - $buddylist_icon: Unlinked icon. 
 * - $buddylist_link: Raw link to send add/remove poster as a buddy. 
 *
 * - $subscribe: Formatted link to subscribe to the author's forum topics.
 * - $subscribe_link: As above but just the relative path.
 *
 * - $user_title: Marked up title from user titles module.
 * - $user_title_raw: Just the title.
 *
 * - $user_badges: Marked up badges from user badges module.
 * - $user_badges_raw: Just the badges.

*/
?>
<div class="author-info-inner">
  <div class="author-info-first">
  <table><tr><td width=130px>
  <div class="author-info-name-section">
      <div class="author-info-line author-name"> <?php print $account_name; ?> </div>
  <?php if (!empty($picture)): ?> 
      <?php print $picture; ?>
    <?php endif; ?>
  </td><td valign="top" align="right"><?php print $online_icon; ?></td></tr></table>
      <?php if (!empty($user_title)): ?>
        <div class="author-info-line author-title"> <?php print $user_title; ?> </div>
      <?php endif; ?>
      
      <?php if (!empty($user_badges)): ?>
        <div class="author-info-line author-badges"> <?php print $user_badges;  ?> </div>
      <?php endif; ?>
    </div>
  </div> 
  
  <div class="author-info-last"> 
    
    <div class="author-info-line author-id">
      <span class="author-info-label"><?php print t('Member'); ?>:</span> <?php print $account_id; ?> 
    </div>
    
    <div class="author-info-line author-joined">
      <span class="author-info-label"><?php print t('Joined'); ?>:</span> <?php print $joined; ?> 
    </div>
    
    <?php if (isset($user_stats_posts)): ?>
      <div class="author-info-line author-posts">
        <span class="author-info-label"><?php print t('Posts'); ?>:</span> <?php print $user_stats_posts; ?> 
      </div>
    <?php endif; ?>
    
    <?php if (isset($userpoints_points)): ?>
      <div class="author-info-line author-points">
        <span class="author-info-label"><?php print t('!Points: ', userpoints_translation()); ?></span> <?php print $userpoints_points; ?> 
      </div>
    <?php endif; ?>
    
    <?php if (!empty($user_stats_ip)): ?>
      <div class="author-info-line author-ip">
        <span class="author-info-label"><?php print t('IP'); ?>:</span> <?php print $user_stats_ip; ?> 
      </div>
    <?php endif; ?>
    <?php if (!empty($contact)): ?>
      <div class="author-info-icon"><?php print $contact; ?></div>
    <?php endif; ?>
    
    <?php if (!empty($privatemsg)): ?>
      <div class="author-info-icon"><?php print $privatemsg; ?></div>
    <?php endif; ?>
    
    <?php if (!empty($buddylist)): ?>
      <div class="author-info-icon"><?php print $buddylist; ?></div>
    <?php endif; ?>
  
  </div>
  
</div>
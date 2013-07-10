Vineyard 1.0 -- A Drupal theme

The vision of Vineyard is to not look like an easily identifiable Drupal theme.
Many Drupal themes can be distinguished by a heavy "rectangular" feel, when the
page is broken into a header area and left and right sidebars with strong
separating lines. In Vineyard there is only one background color and no lines
dividing the page into parts. If needed margins and empty space is used to
separate blocks and content from each other (think Google vs Yahoo). To further
"break" the feeling of a "rectangular" layout, the top edge of both sidebars and
main area are set at different heights.

Vineyard was originally created as a Drupal 4.7 theme for www.openlife.cc. In
2009 the site was upgraded to Drupal 6, and as part of that the same look was
recreated from scratch as a Drupal 6 theme, using the standard Bluemarine
theme as starting point.

Some special tricks used in the theme:

Normal links (but not menu's and other Drupal generated links) are preceded by
a small grape icon added from CSS. The grape can of course be substituted with
some other icon.

Similarly there is a background image which is positioned relative to the
browser window, ie it does not scroll with the page. The default image is a
group of grapes and a leaf. Of course this image can also be easily changed.

Blocks placed in the "header" and "footer" areas are modifiead so that instead
of being inside <div> elements they are inside a <td> cell of a table, and laid
out next to each other, rather than on top of each other. This is useful if you
want to place small links, icons or other items in these areas. The 2 lines of
code enabling this are in page.tpl.php.

The class attribute of the <div> element containing a node also contains the
node type as a class. Example: <div class="node story">. This makes it
straightforward to apply CSS styles for a specific node type. (Like different
font for book pages.)


See www.openlife.cc for an example of Vineyard theme used on a live site!

copyright henrik.ingo@avoinelama.fi -- Released under GPL (as is Drupal)


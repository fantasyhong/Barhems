# Barhems

This repo contains the custom theme for Barhems' website. (http://www.barhems.com)


<strong style="font-size:20px">Change Log</strong><br />

4/24/2018:
<ul><li>Drop-down menu no longer needs to be clicked to show the submenu</li>
<li>The background color of the submenu is changed to a dark grey color that matches the theme better</li>
</ul>
<br />

4/23/2018:
<ul><li>Added new pages that show the company plan</li>
<li>Convert HTML code to a template that works for any pages under drop-down menu for <b>Plans</b> tab</li>
<li>Added a separate login account so that other people can also edit pages and posts</li>
</ul>
<br />

4/20/2018:
<ul><li>Fixed the drop-down menu problem by using WP_Bootstrap_Navwalker()</li>
<li>Fixed the click delay problem by adding viewpoint meta on the top of the page</li>
<li>Improved support for mobile devices</li>
<li>Site migration is completed for both English and Chinese</li>
</ul>
<br />

4/19/2018:
<ul><li>Upgraded Bootstrap from V4.0 beta3 to V4.1</li>
<li>Update all the links in the footer menu, like telephone and map links</div>
</ul>
<strike> 
<strong style="font-size:15px">Known Issue(s)</strong><br />
<ul>
<li>Navigation menu for mobile devices has a 200ms delay when hamburger icon is clicked</li>
</ul>
</strike>
<br />

4/18/2018:
<ul><li>Added Google Map and Connect Form 7 plugin</li>
<li>Added basic mobile support</li>
</ul>
<br />

4/17/2018:
<ul><li>With the help of the Polylang plugin, multi-language support is done</li>
<li>Experimenting with Contact Form 7 plugin</li>
</ul>
<br />

4/16/2018:
<ul><li>Start working on the multi-language support</li>
<li>Fixed some grammar problems on different pages</li>
</ul>
<br />

4/13/2018:
<ul><li>Removed hard-coded navigation menu in the header, and replaced it with wp_nav_menu()</li>
<li>Made some changes to the Tawk plugin so it matches our theme better</li>
</ul>
<strike> 
<strong style="font-size:15px">Known Issue(s)</strong><br />
<ul>
<li>Drop-down menu for Bootstrap is not supported by Wordpress by default, so any previous drop-down menu is removed</li>
<li>The hard-coded language switcher remained on the nav bar</li>
</ul>
</strike>
<br />


4/12/2018:
<ul><li>Migration is close to completion for the English site</li>
<li>Added wp_footer() in the footer.php to fix the plugin not working issue</li>
</ul>
<br />

4/9/2018:
<ul><li>Separate header.php and footer.php from body content</li>
<li>Merge CSS files in the header.php</li>
<li>Fixed the company email issue by updating MX records with GoDaddy</li>
</ul>
<strike> 
<strong style="font-size:15px">Known Issue(s)</strong><br />
<ul>
<li>Wordpress plugin doesn't work out of the box, the code needs to be manually inserted into each page</li>
</ul>
</strike>
<br />

4/6/2018: 
<ul><li>Initial migration from HTML code to a Wordpress theme</li>
<li>Codebase remained unchanged</li>
<li>Migrated from AWS S3 to E2, DNS record is also updated with GoDaddy</li>
</ul>
<strike> 
<strong style="font-size:15px">Known Issue(s)</strong><br />
<ul>
<li>Company emails can only send emails but not receiving emails after DNS record is updated.</li>
</ul>
</strike>
</ul>

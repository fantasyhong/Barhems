# Barhems

This repo contains the custom theme for the barhems website. (http://www.barhems.com)


<strong style="font-size:20px">Change Log</strong><br />

4/24/2018:
<ul><li>The drop-down menu no longer needs to be clicked to show the submenu</li>
<li>Background color of the submenu is changed to a dark grey color that matches the theme better</li>
</ul>
<br />

4/23/2018:
<ul><li>Added new pages that show the company plan</li>
<li>Convert the HTML code to a template that works for any pages under the Plans drop-down menu</li>
<li>Added a separate login account for Wordpress so that other people can also edit pages and posts</li>
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
<li>The navigation menu for the mobile version of the website has a 200ms delay when the hamburger icon is clicked</li>
</ul>
</strike>
<br />

4/18/2018:
<ul><li>Added Google Map and Connect Form 7 plugin to the website</li>
<li>Added basic mobile support</li>
</ul>
<br />

4/17/2018:
<ul><li>With the help of the Polylang plugin, the multi-language support is done</li>
<li>Experimenting with the Contact Form 7 plugin</li>
</ul>
<br />

4/16/2018:
<ul><li>Start working on the multi-language support for the website</li>
<li>Fixed some grammar problems on different pages</li>
</ul>
<br />

4/13/2018:
<ul><li>Remove the hard-coded navigation menu in the header, and replace it with the wp_nav_menu()</li>
<li>Made some changes to the tawk plugin so it matches our theme better</li>
</ul>
<strike> 
<strong style="font-size:15px">Known Issue(s)</strong><br />
<ul>
<li>The drop-down menu is not supported by Wordpress by default, so any previous drop-down menu is removed</li>
<li>The hard-coded language switcher remained on the nav bar</li>
</ul>
</strike>
<br />


4/12/2018:
<ul><li>Migration is close to completion for the English version of the website</li>
<li>Added wp_footer() in the footer.php to fix the plugin not working issue</li>
</ul>
<br />

4/9/2018:
<ul><li>Separate header.php and footer.php from body</li>
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

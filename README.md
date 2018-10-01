# Barhems

This repo contains the custom theme for Barhems' website. (https://www.barhems.com)


<strong style="font-size:20px">Change Log</strong><br />

10/1/2018:

<b>Update:</b> Cronjob confirmed to be working, and HTTPS certificate is auto-renewed successfully.
<br /><br />


9/7/2018:
<ul>
	<li>Front Page code cleanup</li>
</ul>
<br />

9/6/2018:
<ul>
	<li>Resolved the Bootstrap CDN loading issue on Apple devices</li>
</ul>
<br />

9/5/2018:
<ul>
	<li>Fixed the animation problem for the submit button on the Contact Us page</li>
</ul>
<br />


8/30/2018:
<ul><li>Added alt tag on images</li>
</ul>
<br />

7/27/2018:
<ul><li>Lazy loading enabled to improve loading speed</li>
<li><b>Jetpack</b> plugin installed to compress large images</li>
</ul>
<br />

7/25/2018:
<ul><li>HTTPS is enabled on the website</li>
<li>Setup cronjob to auto-renvew HTTPS certificate</li>
</ul>
<br />

5/2/2018:
<ul><li>Fixed some UI issues on iPad Pro</li>
<li>Removed unused JS from footer</li>
</ul>
<br />

5/1/2018:
<ul><li>Added Social Media, Cover Letter and Work Authorization option on the <b>Apply Now</b> page</li>
<li>Admin will receive a more formatted email after each submission on the <b>Career</b> page</li>
<li>Fixed <b>Yoast SEO</b> site-map error</li>
<li>Added 404 page</li>
</ul>
<br />


4/30/2018:
<ul><li>Added Gender option on the <b>Apply Now</b> page</li>
<li>Applicant will receive a confirmation email after the application is submitted</li>
</ul>
<br />

4/27/2018:
<ul><li>Pushed <b>Apply online</b> plugin live to the <b>Career</b> page</li>
<li>Fixed the application saving issue by using <b>Contact Form 7</b> plugin for submission</li>
<li>Fixed the layout issue on the resume submission page</li>
<li>Added <b>Contact Form 7 Dynamic Text Extension</b> to autofill the position field</li> 
</ul>
<strong style="font-size:15px">Known Issue(s)</strong><br />
<ul>
<strike><li>Mobile support for the <b>Career</b> page needs improvement</li></strike>
<strike><li>Every applicant has to enter which position they need to apply manually</li></strike>
</ul>
<br />

4/26/2018:
<ul><li>Still trying out <b>Apply online</b> plugin</li> 
</ul>
<strike> 
<strong style="font-size:15px">Known Issue(s)</strong><br />
<ul>
<li>After an applicant clicks Submit, the page refreshes itself without saving the application</li>
<li>The default layout looks hideous</li>
</ul>
</strike>
<br />

4/25/2018:
<ul><li>Fixed the drop-down menu width problem on iPads</li>
<li>Fixed the drop-down menu color problem after mouse click event happens</li>
<li>Fixed the heading alignment issue on <b>Plans</b> template</li>
<li>Experimenting with <b>Apply online</b> plugin </li> 
</ul>
<br />

4/24/2018:
<ul><li>Drop-down menu no longer needs to be clicked to show the submenu</li>
<li>The background color of the submenu is changed to a dark grey color that matches the theme better</li>
</ul>
<br />

4/23/2018:
<ul><li>Added new pages that show company plans</li>
<li>Convert HTML code to a template that works for any pages under drop-down menu for <b>Plans</b> tab</li>
<li>Added a separate login account so that other people can also edit pages and posts</li>
<li>Added <b>Tuxdeo Big File Uploads</b> plugin to fix the 2 MB upload limit issue</li>
<li>Added <b>Yoast SEO</b> plugin to improve SEO reach</li>
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
<li>Update all href links in the footer menu, like telephone and map links</div>
</ul>
<strike> 
<strong style="font-size:15px">Known Issue(s)</strong><br />
<ul>
<li>Navigation menu for mobile devices has a 200ms delay when hamburger icon is clicked</li>
</ul>
</strike>
<br />

4/18/2018:
<ul><li>Added <b>WP Google Maps</b> and <b>Contact Form 7</b> plugin</li>
<li>Added basic mobile support</li>
</ul>
<br />

4/17/2018:
<ul><li>With the help of <b>Polylang</b> plugin, multi-language support is done</li>
<li>Experimenting with <b>Contact Form 7</b> plugin</li>
</ul>
<br />

4/16/2018:
<ul><li>Start working on multi-language support</li>
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

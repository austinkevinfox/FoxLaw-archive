<div id="header_row1"><h1>Serving Williamson County, Travis County and Surrounding Areas</h1>
	<div id="social_icons" class="dark">
    	<a href="http://www.facebook.com/pages/Fox-Law/353185678047580" id="facebook_icon_link" target="_blank" title="Friend Us on Facebook"></a>
    	<a href="https://twitter.com/foxlawtexas" id="twitter_icon_link" target="_blank" title="Follow Us on Twitter"></a>
        <a href="http://maps.google.com/maps/place?cid=3797136840784948603&q=fox+law+round+rock&hl=en&authuser=0&cd=1&cad=src:ppiwlink&ei=naNfT-ubG5jKMsXqnaQJ&sig2=kEtAbP7CWxVR21zzbAjdpA&dtab=2" id="google_icon_link" target="_blank" title="Find Us On Google"></a>
        <a href="/wordpress" id="feed_icon_link" target="_blank" title="Follow Our Blog"></a>
    </div>
</div>
<div id="header_row2">
	<div id="top_nav">
		<ul class="sf-menu-small sf-shadow">
        	<li><a href="<?=$root?>/">Home</a></li>
        	<li><a href="">About Us</a>
            	<ul>
                	<li><a href="<?=$root?>/mission.php">Our Mission</a></li>
                    <li><a href="<?=$root?>/attorney-client-relationship.php">Relationship</a></li>
                    <li><a href="<?=$root?>/media.php">Media</a></li>
                	<li><a href="">Firm Profiles</a>
                    	<ul class="large">
                        	<li><a href="<?=$root?>/about/margo_fox.php">Margo Fox - Attorney, Mediator</a></li>
                            <li><a href="<?=$root?>/about/bernadette_olvera.php">Bernadette Olvera - Paralegal</a></li>
                            <li><a href="<?=$root?>/about/jennifer_yates.php">Jennifer Yates - Litigation Assistant</a></li>
                            <li><a href="<?=$root?>/about/darcy_miller.php">Darcy Miller - Business Manager</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="">Contact Us</a>
            	<ul>
                	<li><a href="<?=$root?>/map.php">Map</a></li>
                    <li><a href="<?=$root?>/contact.php">Call or Email</a></li>
                </ul>
            </li>
        </ul>
	</div>
</div>
<div id="big_header">
    <div id="big_header_content">
        <div id="slideshow">
        <?php foreach ($slideImages as $image) { ?>
        	<img src="<?=$image->getSrc()?>" class="<?=$image->getClass()?>" id="<?=$image->getId()?>"/>
        <?php } ?>
        </div>
    </div>
<!-- end #header --></div>
<div id="header_row4">
	<div id="navWrapper">
	<ul class="sf-menu sf-shadow">
        <li>
        	<div class="horizontalNav" id="family_law"></div>
            <ul>
            	<li><a href="<?=$root?>/divorce.php">Areas of Practice</a>
                	<ul>
                    	<li><a href="<?=$root?>/divorce.php">Divorce</a></li>
                        <li><a href="<?=$root?>/conservatorship-possession-child-support.php">Conservatorship, Possession &amp; Child Support</a></li>
                        <li><a href="<?=$root?>/possession-and-access.php">Possession and Access</a></li>
                        <li><a href="<?=$root?>/adoption.php">Adoption Legal Services</a></li>
                        <li><a href="<?=$root?>/maintenance.php">Maintenance &amp; Spousal Support</a></li>
                        <li><a href="<?=$root?>/paternity.php">Paternity</a></li>
                        <li><a href="<?=$root?>/prenuptial.php">Prenuptial Agreements</a></li>
                        <li><a href="<?=$root?>/grandparent.php">Grandparent &amp; Sibling Access</a></li>
                        <li><a href="<?=$root?>/enforcement.php">Enforcement</a></li>
                    </ul>
                </li>
                <li><a href="<?=$root?>/divorce-resolution-5-ways.php">Divorce Resolution</a></li>
                <li><a href="<?=$root?>/divorce-five-step-process.php">Divorce 5-Step Process</a></li>
                <!-- <li><a href="<?=$root?>/collaborative_law.php">Collaborative Law vs. Litigation</a></li> -->
                <li><a href="<?=$root?>/child-support-calculator.php">Child Support Calculator</a></li>
                <!-- <li><a href="<?=$root?>/for_christians.php" class="plus">Christians</a></li> -->
            </ul>
        </li>
        <img src="<?=$root?>/images/nav_button_divider_35.jpg" />
   		<div class="horizontalNav" id="collaborative_law"></div>
        <img src="<?=$root?>/images/nav_button_divider_35.jpg" />
   		<div class="horizontalNav" id="mediation"></div>
        <img src="<?=$root?>/images/nav_button_divider_35.jpg" />
   		<div class="horizontalNav" id="testimonials"></div>
        <img src="<?=$root?>/images/nav_button_divider_35.jpg" />
   		<div class="horizontalNav" id="resources"></div>
    </ul>
    </div>
</div>
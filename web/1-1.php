<?php include("/includes/head.html") ?>
<body>
    <?php include("/includes/nav.html") ?>
  
	<div class="row">
		<div class="large-12 columns">
      <h1>Implementing a Content Strategy</h1>
      <h2>Content Inventory</h2>
      <p>The first step in developing the new site was to create an inventory of pages on the current site. This was done by one of the reference department’s student workers. At my direction, she created a spreadsheet with each page’s title, URL, and a brief summary of the content. I then looked up Google analytics statistics for each page for the Fall 2013-Spring 2014 school year. Google Analytics segments user sessions using a computer’s IP address and a default time of 30 minutes (“How a Session”). Since the library’s computers can be used by several students within that timeframe, I used pageview counts rather than the session information to analyze the content. Each page’s percentage of the total number of pageviews was listed on the inventory as a percentage. The content inventory is included as Appendix A, but below is a subset of information from the inventory in order of the top-performing pages (see table 1).
      </p>

    <p class="caption" id="t1">Table 1: Content Inventory section
        <img src="/assets/images/content-inventory.png" />
    </p>
    
    <p>The analytics were less useful than I anticipated they would be. I thought I would be able to use the spreadsheet to discover out-of-date information that should be removed from the current site and not ported to the new one (Pressley 2011), but the vast number of pages on the site either had no data<sup><a href="#sup1" id="refsup1">1</a></sup> or had a less than one percent view rate. 
    </p>
    
  
    <p class="caption" id="f1">Figure 1: Pageviews above and below 1%</p>
    <p class="caption">As a percentage of total pageviews from 19 Aug 19, 2013 - 10 May 2014</p>
    <img src="/assets/images/pageviews.png" />
        
      <p>
    I had planned on using the statistics to weed the website of unpopular pages by determining a pageview threshold: pages below a cutoff point would not be included in the new site. The statistics showed that another approach would have to be taken. Only a few pages on the site had significant usage, and using a threshold would suggest that most pages on the site should be dropped. But a lack of pageviews did not indicate old or unnecessary information, as others have found (Betz 2014). The fines and fees page, for example, had an access rate of only 0.09%, but this is still critical content that will need to be included in the new site as it tells students&mdash;who cannot graduate if they have any outstanding fines&mdash;how to determine the amount due and where to pay their fines. Pages outlining other library policies and services have a similarly low percentage of pageviews, but they must remain on the site so that staff have publicly-available text to refer to when enforcing an unpopular policy. 
  </p>

  <p>
    One area where the analytics were helpful was in viewing pageviews for the satellite libraries under my purview. Currently, the Graham Resource Center (located in Crown Hall on the main campus) and the Institute of Food Safety & Health Library (located at the Moffett campus) have their own sites; they exist as subfolders under the main website structure (<a href="http://library.iit.edu/grc" target="_blank">http://library.iit.edu/grc</a>). They each have their own content, but the vast majority of the pages are pulling content in from the main site using PHP “include” functions. Each library has a separate code for analytics tracking, and the statistics have shown that only minimal information simply including a page that lists each library’s hours and location will be sufficient for the new site. In the image below, there are only two pieces of content that are not duplicated on the Galvin site. One is the library hours page at number two, and the other is number nine (<a href="http://library.iit.edu/grc/mies" target="_blank">http://library.iit.edu/grc/mies/</a>), which uncovered a directory of web pages that are not accessible from the GRC website but still exist on the server. They were likely accessed by someone who was doing research on the architect Mies van der Rohe. This content will be reviewed to determine if it contains any unique material, or if the IIT University Archives pages about IIT’s most famous architect are sufficiently robust. 
  </p>    
  
  <p class="caption" id="f2">Figure 2: Google Analytics’ pageviews for the Graham Resource Center,</p>
  <p class="caption">in order of most visited pages from 19 Aug 19, 2013 - 10 May 2014</P>
        <img src="/assets/images/grc.png" />

      
  </div>  
</div>
  
  

	<div class="row">
    <div class="large-12 columns">
      <p><sup><a id="sup1" href="#refsup1">1</a></sup>Some pages redirected to another domain not included in Galvin Library’s statistics, but most pages without data were due to an unknown error.</p>
    </div>
  </div>

  

<?php include("/includes/footer.html") ?>
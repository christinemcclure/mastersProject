<?php include("/includes/head.html") ?>
<body>
    <?php include("/includes/nav.html") ?>
  
	<div class="row">
		<div class="large-12 columns">
      <h1>Implementing a Content Strategy</h1>
      <h2>Content Inventory</h2>
      <p>The first step in developing the new site was to create an inventory of pages on the current site. This was done by one of the reference department's student workers. At my direction, she created a spreadsheet with each page's title, URL, and a brief summary of the content. I then looked up Google analytics statistics for each page for the Fall 2013-Spring 2014 school year. Google Analytics segments user sessions using a computer's IP address and a default time of 30 minutes ("How a Session"). Since the library's computers can be used by several students within that timeframe, I used pageview counts rather than the session information to analyze the content. Each page's percentage of the total number of pageviews was listed on the inventory as a percentage. The content inventory is included as Appendix A, but below is a subset of information from the inventory in order of the top-performing pages (see table 1).
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
    One area where the analytics were helpful was in viewing pageviews for the satellite libraries under my purview. Currently, the Graham Resource Center (located in Crown Hall on the main campus) and the Institute of Food Safety & Health Library (located at the Moffett campus) have their own sites; they exist as subfolders under the main website structure (<a href="http://library.iit.edu/grc" target="_blank">http://library.iit.edu/grc</a>). They each have their own content, but the vast majority of the pages are pulling content in from the main site using PHP "include" functions. Each library has a separate code for analytics tracking, and the statistics have shown that only minimal information simply including a page that lists each library's hours and location will be sufficient for the new site. In the image below, there are only two pieces of content that are not duplicated on the Galvin site. One is the library hours page at number two, and the other is number nine (<a href="http://library.iit.edu/grc/mies" target="_blank">http://library.iit.edu/grc/mies/</a>), which uncovered a directory of web pages that are not accessible from the GRC website but still exist on the server. They were likely accessed by someone who was doing research on the architect Mies van der Rohe. This content will be reviewed to determine if it contains any unique material, or if the IIT University Archives pages about IIT's most famous architect are sufficiently robust. 
  </p>    
  
  <p class="caption" id="f2">Figure 2: Google Analytics' pageviews for the Graham Resource Center,</p>
  <p class="caption">in order of most visited pages from 19 Aug 19, 2013 - 10 May 2014</P>
   <img src="/assets/images/grc.png" />
  </div>  
</div>
  
	<div class="row">
		<div class="large-12 columns">
      <h2>Content Structure</h2>  
      <p>The greatest improvement to the site will be having a plan in how the content is presented to users. The most pertinent information is not always highlighted, for example, on the faculty page (see figure 3), there is a link to information for new IIT faculty, but it is the very last item listed and will scroll off the page on smaller computer monitors. </p>
      
      <p class="caption" id="f3">Figure 3: Screenshot of the faculty page for the current library website.</p>
      <p class="caption">Available online at <a href="http://library.iit.edu/faculty/" target="_blank">http://library.iit.edu/faculty/</a></p>
      <img src="/assets/images/faculty.png" />
      
    <p>Our current site was hand-coded using PHP and a MySQL database; there is no content management system to help control the flow of information. The new Drupal site will allow us to plan for related content rules that will automatically display along with certain subjects. The most noticeable example will be including the types of content our subscription databases contain. Right now, one can find a list of databases by format on the current site and then access a list of databases like the thesis example in figure 4:</p>
    
      <p class="caption" id="f4">Figure 4: Screenshot of the resources available for dissertations and theses.</p>
      <p class="caption">Available online at <a href="http://library.iit.edu/formats" target="_blank">http://library.iit.edu/formats</a>.</p>
      <img src="/assets/images/dissertations.png" />    
      
      <p>This format link is difficult to find on the website, and exists independently of the main databases page (<a href="http://library.iit.edu/databases/" target="_blank">http://library.iit.edu/databases/</a>). The new site includes a one-to many field reference for format type within the database record (see figure 5):</p>
        
      <p class="caption" id="f5">Figure 5: Screenshot of a sample database page, providing links to other resources using the same subjects and formats.</p>
      <p class="caption">Available online at <a href="http://216.47.136.104/databases/538" target="_blank">http://216.47.136.104/databases/538</a></p>
      <img src="/assets/images/psycinfo.png" />    
      
      <p>Users will be able to click on the format type listed to access more resources. </p>
      
      <h3>Microinteractions</h3>
      <p>There is a new phrase being used user design: microinteractions. They are, as described by Saffer "a tiny piece of functionality that does only one thing" (2013). Inviting a user to "like" a Facebook page or sign up for an email list (King 2014) are two examples. Most microinteractions seem to be designed for marketing purposes, but I think the idea can be leveraged for patron questions as well. One example would be on the pages that deal with user policies; the text could end with a form: "Have more questions about our 24-hour access policy? Ask us here." The form submission would then send an email to the appropriate department. I expect that fewer questions would be left unanswered in users' minds if we offer a "point of sale" contact method rather than making them locate our contact information themselves.</p>
      
      <h3>Increase Readability</h3>
      <p>The current site is very text heavy and written in paragraph style rather than an outline. Many of the current site's pages average a fourteenth grade reading level, using a simple online tool at readability-score.com (see figure 6). This should be lowered substantially to remove barriers to students accessing our resources (Costello 2014) and will be particularly helpful for our non-native English speaking students.</p>
      
      <p class="caption" id="f6">Figure 6: Assessment of the Access & Usage text from readability-score.com.</p>
      <p class="caption">Text from <a href="http://library.iit.edu/policies/access.php" target="_blank">http://library.iit.edu/policies/access.php</a></p>
      <img src="/assets/images/readability.png" />  
      
      <p>The example above displays only about one-third of the text on the site and is a very dense read. The reference department has a library student doing practicum work for us this semester, and she is currently making a first attempt at re-writing much of this content.</p>
      
      <p>The switch to a content management system will also allow us to create staff logins with different levels of access to the system. The internal stakeholders can then implement a workflow that will require a review process for certain types of information, similar to what was implemented at one New York University health Sciences Libraries (Morten-Owens 2011).</p>
    </div>
  </div>
  
  	<div class="row">
      <div class="large-12 columns">
        <h1>Highlighting electronic resources</h1>
        <h2>Remove the catalog search from the home page</h2>
        <p>The home page of the current library website (<a href="http://library.iit.edu" target="_blank">http://library.iit.edu</a>) includes a search box that sends a query to the local instance of the library's online public access catalog (OPAC). There only three types of items an OPAC search will return. The first type includes physical items in the library's collection: books, videos, theses, etc. The second are scanned files from the HathiTrust digital project. This includes digitized content from the Google Books and Internet Archives projects, as well as individual libraries' digitization efforts ("Our Partnership"). The last type of items are bibliographic records for electronic books from vendors. Books24x7 and SpringerLink are two vendors that supply us with these records, but they are in the minority; the library does not receive (nor could our infrastructure accommodate) files of the millions of journal articles that comprise the majority of our database subscriptions. This means that only searching the OPAC for material will leave the majority of the library's collection unused.</p>
        <p>Students will often ignore all other options on the library's cluttered home page in favor of entering their research topic directly into the home page search box,<sup><a id="refsup2" href="#sup2">2</a></sup> which triggers an OPAC search. Some searches yield fruitful results: a search for "javascript" will turn up many relevant examples from our e-book subscriptions (see result at <a href="http://tinyurl.com/OMQSRUT" target="_blank">http://tinyurl.com/OMQSRUT</a>). If the search doesn't locate items owned by the Galvin Library, however, the results page will either show results from the HathiTrust database, or display a "no results found" message. An example would be a search about the "fall of the Roman Empire". Searching for this phrase will return many results from the OPAC (seen here: <a href="http://tinyurl.com/Q5VT9MX" target="_blank">http://tinyurl.com/Q5VT9MX</a>), but it is unlikely that an undergraduate student writing a short paper for a history class will be interested in the five-volume set written in 1845â€”this was the first item returned when this paper was written.</p>
        <p>Students who only search for their topic from the library home page become frustrated by the limited results and often abandon the library site for Google. A cognitive bias now known as the Dunning-Kruger effect leads them to believe that the thousands of results they get from a search in Google or another search engine means that they are performing research effectively (Gross 2012). Justin Kruger and David Dunning's 1999 study of psychology students showed that those who lack knowledge in an area cannot successfully judge competence in that areaâ€”either their own or in others (Kruger 1999). </p>
        <p>Software has been developed to simulate the Google experience for library users; it is called a "discovery layer" and allows an institution access to a centralized index of millions of journal articles, along with the local holdings of the library (Hoeppner 2012). Galvin Library does not have a subscription to discovery later software such as Primo, Summon, or AquaBrowser, so it is imperative we improve the display of our electronic resources. The library budget from 2013 allocated 88% of its purchasing funds on subscription resources like databases versus 3% of one-time purchase of books, videos, and similar items. This suggests that the website should focus more on database subscriptions rather than books, but that is not currently the case. Figure 7 below is a screenshot of the library's home page, with book resource links highlighted</p>

        <p class="caption" id="f7">Figure 7: Current home page, book-related items.</p>
        <img src="/assets/images/home-page-books.png" />          
        <p>Next is the same page with the library's electronic resources highlighted (those that can be accessed from off-campus). </p>
        <p class="caption" id="f8">Figure 8: Current home page, database items.</p>
        <img src="/assets/images/home-page-databases.png" />          
        
        <p>All of these items require an additional clicks to get to the information, something many students aren't willing to attempt. One major change to the new site will be to remove the OPAC search box from the library home page and replace it links that will more quickly direct students to databases. The new home page change will reflect the preference for electronic items over print. This will also bring the site into alignment with the library's vision of providing "innovative programs, infrastructure and outreach" ("Paul V. Galvin - Mission"). A recent study has shown that use of the library's databases or e-books are one predictor of success in first year undergraduates: students who used the library and its resources had a higher average GPA than those who did not (Soria, 2013).</p>
  

        <h2>Add a database quick search on the new home page</h2>
        <p>There is a method to allow students to perform a search of severalâ€”not allâ€”subscription databases that could be placed on the home page of the new site without additional cost. Interfaces by the companies EBSCO and ProQuest have the ability to search several of their own database holdings. For the student quickly looking for articles to support a short research paper, a search form such as this may provide enough immediate results to encourage them to stay on the library's website instead of abandoning it for Google. <span class="fix">Create this and add link</span></p>
      </div>  
    </div>
  
    
  	<div class="row">
      <div class="large-12 columns">
        <h1>User-Centered Design</h1>
        <h2>Customize the main navigation to library's needs</h2>
        <p>The look and feel of the current library website was developed by IIT's Marketing and Communication department. It uses the same color scheme, header and footer as the university site. The only areas that were customized for the library were the address and contact links; all of the other items remained the same. One problem our students have with this design is with this secondary header (figure 9).</p>
        <p class="caption" id="f9">Figure 9: Current website secondary header.</p>
        <img src="/assets/images/header.png" />   
        <p>These links were designed to appeal to people who are not currently students at IIT: prospective students, employers, and former students. Current students looking for library resources often click on these links because of their bright colors and prominence on the page. Doing this removes them from the library website: library.iit.edu is located on a different server than www.iit.edu so that we can easily make changes to the site. Students become confused when they click on one of these links and leave the library site entirely. </p>
        <p>The header on the new IIT site would cause even more confusion for students. Figure 10 is a screenshot of the new site at web.iit.edu with the "research" submenu displayed:</p>
        
        <p class="caption" id="f10">Figure 10: IIT main site secondary header.</p>
        <img src="/assets/images/web.iit.png" />  
        
        <p>None of the submenu links shown point to library resources, even though the main heading is "research." In the spring of 2014 I made the case to the Marketing and Communications team for the library to customize this header for our own use. Table 2 shows the statistics I collected from Google Analytics and sent to the team:</p>
<p class="caption" id="t2">Table 2: Website statistics sent to Communications & Marketing.</p>        
 <?php include("/includes/stats-table.html"); ?>

        <p>I also included a mockup of the proposed custom header for the library:</p>
        
        <p class="caption" id="f11">Figure 11: Proposed header for new library site.</p>
        <img src="/assets/images/proposed-header.png" />        
   
        <p>The combination of statistics and mockup was successful; the Marketing and Communications team will allow us to create our own header for the website. <span class="fix">Add more to header and include link</span></p>
        
        <h3>Custom sort for database subjects</h3>
        <p>The importance of electronic resources differs by subject area, and even within different sub-sections of one discipline. There are many databases that are useful for a broad range of subjects: Business Source Premier is listed as a resource for several major areas of study at IIT, from Applied Economics to Engineering Management to Psychology. But the importance of this resource can be different for each area. A code library was in the Drupal online community that solved this dilemma. The databases by subject lists now include a sort by relevance (created by the subject librarian) as well as a title sort. This can be viewed in the placement of the Business Source Premier database for one subject (figure 12) versus another (figure 13).</p>
        <p class="caption" id="f12">Figure 12: Databases sorted for the psychology subject.</p>
        <p class="caption">Available at <a href="http://216.47.136.104/databases/by-subject/psychology" target="_blank">http://216.47.136.104/databases/by-subject/psychology</a>.</p>
        <img src="/assets/images/psychology.png" />          

        <p class="caption" id="f13">Figure 13: Databases sorted for the business subject.</p>
        <p class="caption">Available at <a href="http://216.47.136.104/databases/by-subject/business" target="_blank">http://216.47.136.104/databases/by-subject/business</a>.</p>
        <img src="/assets/images/business.png" />          

        <h2>User personas</h2>
        <p>I wanted to create user personas to guide design decisions for the new site. There was no user testing that done for the current website, and I think that it is evident in the current site's design: the home page includes more than 50 links. This obscures the three-to-four links that are constantly used, and so I was determined to make IIT student input a large factor in the site redesign. </p>
        <p>I advertised within the university's daily email communication for students willing to be interviewed about their research habits. I chose six to interview: two graduate students and four undergraduates, with five different areas of study between them. I scheduled to interview them in reference suite, which is not a public area; each interview lasted 30 to 45 minutes. I received permission from all the students to record the audio of these sessions. </p>
        <p>I used the same question structure for each interview, borrowing heavily from the topics suggested in Mulder's <em>The User is Always Right: A Practical Guide to Creating and Using Personas for the Web</em> (2007). </p>
        
         <p class="caption" id="t3">Table 3: Questions used for user interviews.</p>
         <?php include("/includes/interview-table.html"); ?>

         <p>After the interviews were complete, I realized that I had limited my subjects to students who were proactive enough to read university communications and respond to a survey. I also wanted to get the perspectives of students who don't normally engage with the library, so I developed a short, five-minute interview that used a subset of the questions above and conducted several additional interviews outside of the student cafeteria at lunchtime. </p>
         <p>Here are some paraphrased quotes from both the short and extended interviews</p>
         <blockquote>If you go to library.iit.edu, it shows up one way. If you go to it through Blackboard, it shows up a different way. And if you go to it through [my.iit.edu/ library resources], it shows up a different way.</blockquote>
         <blockquote>My "perfect site" would include a single search box that searches all IIT resources.</blockquote>
         <blockquote>I would like the site to be more simple, with a better layout and color scheme.</blockquote>
         <blockquote>I use the SciFinder database from the databases page and start with an author search. If the author is prolific, I'll use the title stub from the citation I have. I also might Google the author first, and then use Google Scholar to see what references come up.</blockquote>
         <p>
           The interviews helped me define two types of student users: those who wouldn't normally use the library website, but need to in order to access subscription resources, and those who are interested in learning about library resources and use the website as the first stop in their research. Rather than thinking about these types as undergraduate versus graduate students, I instead created the "sporadic" and "power" user personas that can be viewed in Appendix B: <em>Harried Javier</em> and <em>Resolute Rebecca</em>.</p>
         <p>Javier and Rebecca's personas are now posted in my office so that I will remember to consider their needs as the new site is built. I plan to create a faculty persona in the future as well.</p>
         <h2>User experience testing</h2>
         <p>The project I conducted with two classmates for the COM525 (User Experience Research and Evaluation) class helped inform the approach I will use to create a "database finder" to help guide students to locate scholarly library sources. The semester-long project started with interviewing students to find out how they conduct research for their assignments. We were not surprised to find out that students preferred to use Google as it is already a tool they use every day. What did surprise us was how they would simply accept whatever results they found in Google and would not bother seek help from another source, whether from a database or from IIT librarians. Here are some work activity notes from that process:</p>
         <blockquote>I'd rather use Google Scholar first because it searches many databases instead of just one at a time.</blockquote>
         <blockquote>I used Google to find people who agreed with my thesis statement to find resources for my paper.</blockquote>
         <blockquote>The user thinks the library's material is very reliable, but there's not as much available as compared to Google Scholar.</blockquote>
         <p>The last note in particular highlights the need for better design in the library website. The library has much more information than will appear in Google Scholar, but the site needs to provide better access to it.</p>
         <p>Working from the user research, we designed a very simple Google-like paper prototype that students could use to find a subscription database on the new library website, named "HawkEye." It would include each database's name and description, as well as tags with IIT course prefixes (MMAE, ECE, etc.) so that students could quickly find resources tied to one of their classes. The search box would be the most visible item, with a list of suggested ways to use it (see figure 14).</p>

        <p class="caption" id="f14">Figure 14: HawkEye prototype&mdash;initial home page</p>
        <img src="/assets/images/hawkeye-home.png" />   

        <p>We anticipated that students would enter searches that were too discrete to be successful, so we constructed a more detailed error page. The error page would still include the search box, but would also provide direct links to database resources by subject area and content type (see figure 15).</p>
        <p class="caption" id="f15">Figure 15: HawkEye prototype&mdash;error page</p>
        <img src="/assets/images/hawkeye-error.png" />   
        
        <p>The results were conclusive: our design was not successful. The testers ignored the directions on the home page in favor of submitting too-discrete entries into the search box. One task was to locate a database by the type of content it contained:</p>
        <blockquote>You have an assignment to write a 4-page paper on animal physiology for your biology class. Your professor has instructed you to cite at least 2 sources from scholarly articles. You have arrived at the HawkEye home page to search for these sources.</blockquote>
        <p>As noted earlier, our testers used terms that were too narrow (animal physiology) instead of those tied to a particular subject or course (biology). The main take-away from this project for me was: <em>don't make it look like Google if you can't make it act like Google</em>.</p>
        
        <p>In the executive summary section of the report, we included a revised home page that focused more on browsing than on searching (see figure 16).</p>
        <p class="caption" id="f16">Figure 16: HawkEye prototype&mdash;revised home page</p>
        <img src="/assets/images/hawkeye-revised-home.png" />   
        
        <p>I am committed to continuing user experience testing throughout the design and build process. It will not be as expansive as the semester-long research I conducted with my COM525 team, but I plan on creating many small, quickly-completed tests to help me make design and content decisions while I build the site.</p>
      </div>
    </div>

  
	<div class="row">
		<div class="large-12 columns">
      <h1>Conclusion</h1>
      <p>The work on the site continues, and I am now working on mini-projects to recreate the dynamic content that exists in our current site, such as pulling library hours from a Google calendar and creating a custom textbook lookup module. The addition of an Information Technology Librarian this past spring has been a boon for the new environment’s server setup and maintenance, and he is interested in learning how to create a complex site in Drupal as well.</p>
      <p>I do not have the luxury of working on this site full-time, so it is important to have a roadmap to use to track its progress. The IT Librarian and I have been using Google Docs to work both collaboratively and asynchronously. With two librarians and several student workers, I hope to have the site ready to launch in beta mode in the fall of 2015.</p>
    </div>
  </div>  

	<div class="row">
    <div class="large-12 columns">
      <p><sup><a id="sup1" href="#refsup1">1</a></sup>Some pages redirected to another domain not included in Galvin Library's statistics, but most pages without data were due to an unknown error.</p>
      <p><sup><a id="sup2" href="#refsup2">2</a></sup>This and the following are examples of IIT students' behavior, either provided anecdotally by the students themselves, or witnessed by librarians watching students do research.</p>
    </div>
  </div>

  

<?php include("/includes/footer.html") ?>
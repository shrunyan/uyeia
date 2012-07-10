<?php 
session_start();//allows us to use $_SESSION

//initalization
require_once('objects/init.php');
$init = new init();
$init->init();

?>

<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	  include('includes/header.php');
}?>
<div id="content_wrap">
    <div id="content">
        <div id="load_content">
          <h1 id="top">www.uyeia.com ("Site")</h1>
          <h2>Privacy Statement - <a href="#top">Back to Top</a></h2>
          <p>We are committed to safeguarding your privacy online. This privacy policy applies to your information that we collect and receive; it does not apply to practices of businesses that we do not own or control or people we do not employ. At no time will we sell your information or release your personally-identifiable data without your permission. You can visit this Site without revealing who you are or providing any personal information about yourself.</p>
          
          <p>By using this Site, you agree to the terms of this privacy policy. Please read the following policy to understand how your personal information will be treated as you use our services. The following discloses our information gathering and dissemination practices.</p>
        
          <p>This Site contains links to other sites. These include links to resources in related topics and third-party sites that offer other related products. If you visit another website through a link on our site, please consult the privacy policy of the website you are visiting. We are not responsible for the privacy practices or the content of other websites that you may visit.</p>
          
          <h2>Browsing the Site - <a href="#top">Back to Top</a></h2>
          <p>If you browse through the Site without entering any personal data, we will gather and store certain information about your visit. This information does not identify you personally and cannot be linked back to you unless you decide at some point to identify yourself. If you are only browsing, we collect the following information: IP address, the type of browser and operating system used to access our site, the date and time you access our site, the pages you visit (click-through), and if you linked to our website from another website, the address of that website as well as additional information related to your visit. We use your IP address to help diagnose problems with our server, and to administer the Site.</p> 
          
          <h2>Information Collected - <a href="#top">Back to Top</a></h2>
          <p>We collect the email addresses of consumers who communicate with us or through our authorized vendors via email.</p> 
          <p>Any information provided by consumers becomes our property once received by us and may be used and disclosed as permitted in this Policy.</p>
          <p>We may share your personal information with our affiliated companies in order to identify products or services in which you may have interest, to improve our user experience and generally to engage in market research and for other internal business purposes. We may also aggregate your personal information with others' information and prepare reports on site usage, purchase history or other factors for sale or distribution to others. Those reports are aggregated and include no personally identifying information. Finally, we may use your personal information to send you email or postal communications regarding products or services offered by us or by third parties with whom we have relationships in which we think you may be interested. We do not share, sell, trade or rent your personal information to third parties for unknown reasons. You may at any time choose not to receive promotional emails from us by contacting us at <a href="mailto:info@uyeia.com">info@uyeia.com</a>. Notwithstanding the foregoing, we may continue to contact you for the purpose of communicating information relating to this Site, as well as to facilitate, complete, or confirm any transaction that you may enter into or responding to your inquiry or request.</p>
        
        <p>If you prefer for us not to provide your name and email or postal address to third parties for direct marketing purposes, please contact us at <a href="mailto:info@uyeia.com">info@uyeia.com</a>.</p>
        
          <h2>Use of Forums - <a href="#top">Back to Top</a></h2>
          <p>If you choose to transmit, submit or post information through the Site's chat rooms, bulletin boards or other forums (the "Forums"), we will collect that information you provide. We retain this information as necessary to resolve disputes, provide customer support and troubleshoot problems as permitted by law and pursuant to our Terms of Use.</p>
          
          <h2>Cookies - <a href="#top">Back to Top</a></h2>
          <p>We may place "cookies" on your personal computer. "Cookies" are small identifiers sent from a web server and stored on your computer's hard drive, similar to a license plate, that help us to recognize you if you visit our website again. Also, our site uses cookies to track how you found our site. Cookies are not designed to be used to get data from your hard drive, your e-mail or any other personal data about you. To protect your privacy, we do not use cookies to store or transmit any personal information about you on the Internet. You can reject cookies by changing your browser settings. Please note, however, that if you reject our cookies, it is possible that some web pages may not properly load, your access to certain information might be denied or you might have to enter information about yourself more than once.</p>
          
          
          <h2>Security - <a href="#top">Back to Top</a></h2>
          <p>This site has reasonable security measures in place to protect the loss, misuse and alteration of the information under our control.</p>
          
          <h2>Third Party Advertising </h2>
          <p>We use third-party advertising companies to serve ads when you visit our website. These companies use non-personally identifiable information regarding your visit to this website and other sites, such as the user IP address, pages viewed, date and time of your visit, and number of times you have viewed an ad (but not your name, address, or other personal information), to serve ads to you on this site and other sites that may be of interest to you. In the course of serving advertisements to this site, our third-party advertiser may place or recognize a unique cookie on your browser.</p>
          
          <p>Specifically, Google, as a third party vendor, uses cookies to serve ads on this website.  Google&#180;s use of the DART cookie enables it to serve ads to you based on your visit to this website and other websites on the Internet.  You may opt out of the use of the DART cookies by visiting the Google ad and content network <a href="http://www.google.com/privacy_ads.html" target="_new">privacy policy</a>.</p>
          
          <p>In addition, we use clear GIFs or pixel tags to help manage our online advertising. These clear GIFs enable our ad serving company to recognize a browser's cookie when a browser visits this site. This allows us to learn which banner ads bring users to our website. The information we collect and share through this technology is not personally identifiable.</p>
        
          <p>To learn more about these practices and your choices about not having this information used by these companies please <a href="http://www.networkadvertising.org/consumer/opt_out.asp" target="_new">click here</a>.</p>
          
          
          <h2>Contacting the Web Site - <a href="#top">Back to Top</a></h2>
          <p>Please be aware that we may change our Privacy Policy from time to time. If we do, we will update this Privacy Policy at our website, so be sure to check back here frequently.</p>
          <p>If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this Web site, you can contact: <a href="mailto:info@uyeia.com">info@uyeia.com</a>.</p>
          
          <p>www.uyeia.com</p>
        
          <p>Feburary 24th, 2010</p>
        
        
        <p>P.S. THIS SITE IS <STRONG>NOT</STRONG> REAL AND IS JUST A STUDENT PROJECT!</p>
        
        <a href="#top">Back to Top</a>
        </div>
    <div class="clearfix"></div>
</div>
</div>

<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	 include('includes/footer.php');
}?>
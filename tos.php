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
          <h2>TERMS AND CONDITIONS OF USE - <a href="#top">Back to Top</a></h2>
          <p>Welcome to the Site.  The Site is provided to you for your personal entertainment, information, education and communication through our featured content and interactive forums on the World Wide Web.</p>
        
          <p>Please read these Terms and Conditions carefully.  These Terms and Conditions include our policy for acceptable use of the Site and content posted on the Site, your rights, obligations and restrictions regarding your use of the Site and the Site's Privacy Policy found <a href="privacy.php" class="ajaxtrigger">here</a>.</p>
          <p>By accessing this Site, you accept, without limitation or qualification, the following Terms and Conditions. You are only authorized to use the Site and its services if you agree to abide by all applicable laws and to these Terms and Conditions.  If you do NOT accept the Terms and Conditions, then please discontinue your use of the Site.</p>
          <p>We may modify these Terms and Conditions from time to time and such modification shall be effective upon posting on the Site.  You agree to be bound to any changes to these Terms and Conditions when you use the Site after any such modification is posted.  Is it important that you review these Terms and conditions regularly to ensure you are updated as to any changes made.  These Terms and Conditions constitute the entire agreement regarding your use of the Site and the services it offers and supercede any such prior terms. </p>
          <p>Without limiting any other provisions of this Agreement, you may not use this Site for any purpose that is unlawful or prohibited by this Agreement and/or any applicable additional terms.  Your access to this Site may be terminated immediately in our sole discretion, with or without notice, if you fail to comply with any provision of this agreement and/or additional terms, or for any other reason, or no reason.  You expressly agree not to: </p>
          
	        <ul>
		        <li>Use this Site or its contents for any commercial purpose;</li>
	    	    <li>Access, monitor or copy any content or information of this Website using any robot, spider, scraper or other automated means or any manual process for any purpose without our express written permission;</li>
	    	    <li>Take any action that imposes, or may impose, in our discretion, an unreasonable or disproportionate burden on our infrastructure; and</li>
	        	<li>"frame," "mirror" or otherwise incorporate any part of this Site into any other website without our prior written permission.</li>
	     	</ul>
        
         
          
          <h2>Content on the Site - <a href="#top">Back to Top</a></h2>
          <p>The material on this Site is protected by copyright, trademark, and other applicable laws. You may not modify, copy, reproduce, republish, upload, post, transmit, publicly display, prepare derivative works based on, or distribute in any way any material from the Site, including but not limited to text, audio, video, code and software. During your visit, however, you may download material displayed on the Site for non-commercial, personal use only (provided that you also retain all copyright and other proprietary notices contained on the materials).  We neither warrant nor represent that your use of materials displayed on the Site will not infringe rights of third parties not owned by us or affiliated with this Site.</p>
         <p>The Site may provide you and other users an opportunity to submit, post, display, transmit and/or exchange information, ideas, opinions, photographs, images, video, creative works or other information, messages, transmissions or material to us, the Site or others ("Post" or "Postings"). Postings do not reflect our views; and we do not have any obligation to monitor, edit, or review any Postings on the Site. We assume NO responsibility or liability arising from the content of any such Postings nor for any error, defamation, libel, slander, omission, falsehood, obscenity, pornography, profanity, danger, or inaccuracy contained in any information within such Postings on the Site. You are strictly prohibited from posting or transmitting any unlawful, threatening, libelous, defamatory, obscene, scandalous, inflammatory, pornographic, or profane material that could constitute or encourage conduct that would be considered a criminal offense, give rise to civil liability, or otherwise violate any law.</p>
         <p>Without limiting the foregoing, the following behaviors are strictly prohibited:</p>
        
        <ul>
	        <li>Strong, vulgar, obscene or otherwise harmful language,</li>
	        <li>Racially, ethnically or otherwise, objectionable language,</li>
	        <li>Harassing, intimidating, stalking or threatening other community members,</li>
	        <li>Libelous, defamatory or otherwise tortuous language,</li>
	        <li>Online vandalism,</li>
	        <li>Impersonation of another person,</li>
	        <li>Posting, distributing, transmitting or promoting illegal content,</li>
	        <li>Invasion of another's privacy,</li>
	        
	        <li>Actions that are hurtful to minors,</li>
	        <li>Posting, providing, transmitting or otherwise making available any materials or information infringing on the rights of a third party,</li>
	        <li>Posting, providing, transmitting or otherwise making available any junk mail or spam, and</li>
	        <li>Posting, uploading, emailing or otherwise transmitting any material that contains any malicious computer code, or reverse engineering or hacking any materials on the Site.</li>
	    </ul>
        <p>We will fully cooperate with any law enforcement authorities or court order requesting or directing the Site to disclose the identity of anyone posting any such information or materials.</p>
        
        
          <h2>Intellectual Property - <a href="#top">Back to Top</a></h2>
         <p>You represent and warrant that: (i) you own the content posted by you on or through the Site or otherwise have the right to grant the license set forth below, and (ii) the Posting of your content does not violate the privacy rights, publicity rights, copyrights, contract rights or any other rights of any person. </p> 
         <p>By displaying or posting content on the Site, you hereby grant us a nonexclusive global license to publish the content submitted by you to the Site.  You also grant us global nonexclusive adaptation and resale rights over any content and material submitted to the Site.  These nonexclusive publishing license and resale/adaptation rights extend to any materials submitted "for publication" within the Site, including both message board postings and content submitted for uploading and subsequent publishing within non-message board portions of the Site.  Neither we nor our staff will be responsible for any misleading, false or otherwise injurious information and advice communicated on the Site or for any results obtained from the use of such information or advice.  We will not be liable for any loss or damage suffered by a user through the user's reliance on information and advice gained on the Site.</p>
        
          <h2>Links - <a href="#top">Back to Top</a></h2>
          <p>The Site may provide links to other websites or resources.  Because we have no control over such sites and resources, you acknowledge and agree that we are not responsible for the availability of such external sites and resources, and do not endorse and is not responsible or liable for any content, advertising, products or other materials on or available from such sites or resources.  You further acknowledge and agree that we shall not be liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use or reliance on any such content, goods or services available on or through any such site or resource.</p>
         
          <h2>Children Online Protection Act Notification - <a href="#top">Back to Top</a></h2>
          <p>Pursuant to 47 U.S.C. Section 230 (d) as amended, we hereby notify you that parental control protections (such as computer hardware, software, or filtering services) are commercially available that may assist you in limiting access to material that is harmful to minors. Information identifying current providers of such protections is available at the American Links Up web site, <a href="http://www.netparents.org" target="_blank">http://www.netparents.org</a>.</p> 
        
        
          <h2>Infringement Policy - <a href="#top">Back to Top</a></h2>
         <p>Pursuant to 17 U.S.C. Section 512 as amended by Title II of the Digital Millennium Copyright Act (the "Act"), we reserve the right, but not the obligation, to terminate your license to use the Site if we determine in its sole and absolute discretion that you are involved in infringing activity, including allege acts of first-time or repeat infringement, regardless of whether the material or activity is ultimately determined to be infringing. We accommodate and do not interfere with standard technical measures used by copyright owners to protect their materials. In addition, pursuant to 17 U.S.C. Section 512 (c), we have implemented procedures for receiving written notification of claimed infringements and for processing such claims in accordance with the Act. All claims of infringement must be submitted in a written complaint that complies with the requirements below and delivered to our designated agent to receive notification of claimed infringement by mail: </p>
        
         <p>
        The Legal Department<br  />
        5555 Main St.<br />
        Somewhere, California 55555<br />
        <a href="mailto:info@uyeia.com">info@uyeia.com</a>
         </p>
         <p>In addition, any written notice regarding any defamatory or infringing activity, whether of a copyright, patent, trademark or other proprietary right must include the following information: <br />
        A. A physical or electronic signature of a person authorized to act on behalf of (1) the owner of an exclusive right that is allegedly infringed or (2) the person defamed. <br />
        
        B. Identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site. Similarly, for materials that are defamatory or infringe patent, trademark, or other proprietary rights of a third party, please submit a list of such materials. <br />
        C. Identification of the material that is claimed to be infringing, to be the subject of infringing activity, or that is claimed to be defamatory and that is to be removed or access to which is to be disabled, and information reasonably sufficient to permit us to locate the material. <br />
        D. Information reasonably sufficient to permit us to contact you, such as your address, telephone number, and/ or e-mail address. <br />
        E. A statement that you have a good faith belief that use of the material, in the manner complained, of is not authorized by the copyright or other proprietary right owner, its agent, or the law. <br />
        F. A statement that the information in the notification is accurate, and under penalty of perjury, that you are authorized to act on behalf of the owner of an exclusive right that is allegedly infringed or on behalf of the person defamed. <br />
         </p>
          <h2>Indemnity - <a href="#top">Back to Top</a></h2>
         <p>You agree to indemnify and hold us, and our subsidiaries, affiliates, directors, officers, agents, vendors or other partners and employees harmless from any claim or demand, including attorneys' fees, made by any third party due to or arising out of any material or information posted, provided, transmitted or otherwise made available by you on the Site or through the Site's services, or by your violation of these Terms and Conditions, or by your violation of the rights of another.</p>
        
          <h2>Disclaimers and Limitation of Liability - <a href="#top">Back to Top</a></h2>
         <p>You understand and agree that the Site is provided "As-Is" and that we assume no responsibility for your ability to (or any costs or fees associated with your ability to) obtain access to the Site.  Nor do we assume any liability for the failure to store or maintain any user communications or personal settings.</p>
         <p>NO ADVICE OR INFORMATION, WHETHER ORAL OR WRITTEN, OBTAINED BY YOU FROM THE SITE OR THROUGH OR FROM ITS SERVICES SHALL CREATE ANY WARRANTY NOT EXPRESSLY STATED IN THESE TERMS AND CONDITIONS.</p>
         <p>IN NO EVENT SHALL THE SITE OR ITS OWNER BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT DAMAGES ARISING FROM YOUR USE OF THE SITE OR ITS SERVICES EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>
         <p>Some jurisdictions do not allow the disclaimer, exclusion or limitation of incidental or consequential damages, so the foregoing disclaimer, exclusion and limitation may not apply to you, and you may have other legal rights that vary according to jurisdiction.  In no event will damages provided by law (if any) apply unless they are required to apply by statute, notwithstanding their exclusion by contract.</p>
         <p>If there is any dispute about or involving the Site or its Services, you agree that the dispute shall be governed by the laws of the State of California, USA, without regard to conflict of law provisions and you agree to exclusive personal jurisdiction and venue in the state and federal courts of the United States located in the State of California, City of Los Angeles.  You also agree and hereby submit to the exclusive personal jurisdiction and venue of the federal district and state courts of California with respect to such matters.  We make no representation that materials on the Site are appropriate or available for use in other locations, and accessing them from territories where their content is illegal is prohibited.  Those who choose to use or access the Site from other locations do so on their own initiative and are responsible for compliance with local laws.</p>
        
         <p>The section titles and other headings in these Terms and Conditions are for convenience only and have no legal or contractual effect.  Our failure to exercise or enforce any right or provision of these Terms and Conditions shall not operate as a waiver of such right or provision.  If any provision of these Terms and Conditions is unlawful, void or unenforceable, that provision is deemed severable and does not affect the validity and enforceability of any remaining provisions.</p>
        
          
          <p>www.uyeia.com</p>

        </div>
    <div class="clearfix"></div>
</div>
</div>

<?php if($_SERVER['HTTP_X_REQUESTED_WITH']==''){
	 include('includes/footer.php');
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently working on a rehabilitation project where a standalone InTouch 2014 HMI is being used as a SCADA system, although it is quite basic. One major issue is the presence of outdated and cumbersome 1995 schematics pages that serve as PandID drawings. While these are">
    <meta name="keywords" content="wonderware, intouch 2014 hmi, scada functionality, rehabilitation project, p&id drawings, operational pages, commissioning process, vector scaling, analog values, pop-ups, detailed information, unmanned station, ww report generation, galaxy">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/best-practices-for-integrating-wonderware-and-intouch-2014-hmi-for-enhanced-scada-functionality">
    <title>Best Practices for Integrating Wonderware and InTouch 2014 HMI for Enhanced SCADA Functionality | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Best Practices for Integrating Wonderware and InTouch 2014 HMI for Enhanced SCADA Functionality | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently working on a rehabilitation project where a standalone InTouch 2014 HMI is being used as a SCADA system, although it is quite basic. One major issue is the presence of outdated and cumbersome 1995 schematics pages that serve as PandID drawings. While these are">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/best-practices-for-integrating-wonderware-and-intouch-2014-hmi-for-enhanced-scada-functionality">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Practices for Integrating Wonderware and InTouch 2014 HMI for Enhanced SCADA Functionality | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently working on a rehabilitation project where a standalone InTouch 2014 HMI is being used as a SCADA system, although it is quite basic. One major issue is the presence of outdated and cumbersome 1995 schematics pages that serve as PandID drawings. While these are">
    <meta name="twitter:image" content="https://community.oxmaint.com/assets/img/favicon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6M0T9NLP4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-Y6M0T9NLP4');
    </script>

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://community.oxmaint.com/discussion-forum/best-practices-for-integrating-wonderware-and-intouch-2014-hmi-for-enhanced-scada-functionality"
      },
      "headline": "Best Practices for Integrating Wonderware and InTouch 2014 HMI for Enhanced SCADA Functionality",
      "description": "Hello everyone, I am currently working on a rehabilitation project where a standalone InTouch 2014 HMI is being used as a SCADA system, although it is quite basic. One major issue is the presence of outdated and cumbersome 1995 schematics pages that serve as PandID drawings. While these are",
      "author": {
        "@type": "Person",
        "name": "dalporto"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-11",
      "image": "https://community.oxmaint.com/assets/img/favicon.png"
    }
    </script>

<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" defer></script>
<link rel="stylesheet" href="./../assets/css/home.css"/>
</head>
<body>
    <div class="content-wrapper bg-gray">
        <?php include "../include/header.php" ?>
        <!-- /header -->
        <div class="container my-5">
            

            <div class="bg-primary card p-4 mb-4">
                <h1 class="text-white">Best Practices for Integrating Wonderware and InTouch 2014 HMI for Enhanced SCADA Functionality</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">311</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">452</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently working on a rehabilitation project where a standalone InTouch 2014 HMI is being used as a SCADA system, although it is quite basic. One major issue is the presence of outdated and cumbersome 1995 schematics pages that serve as P&ID drawings. While these are nice to have, they are not practical for day-to-day operations, especially since InTouch does not support vector scaling, making it difficult to utilize them effectively in a 16:9 format.

I have taken it upon myself to create new operational pages for the commissioning process, as the existing setup leaves much to be desired. Recently, the customer expressed a desire to retain the P&ID pages as their team struggles to interpret P&ID DWGs. I am considering placing them in pop-ups or leaving them unscaled, but this would result in a disjointed testing process during commissioning.

Additionally, the customer has requested that all analog values boxes (approximately 100-120 values) be able to open pop-ups displaying detailed information about the value. While this feature may have been useful in a different context, it does not add significant value to this particular unmanned station, where operators are restricted from altering most values.

The customer has also mentioned a WW report generation solution, which I have not encountered before. I am unsure if this solution is compatible with InTouch Standalone or a Galaxy system. Considering the customer's evolving needs and the desire for a comprehensive SCADA system, I am contemplating the transition to a Galaxy platform, despite the inherent challenges and learning curve associated with it.

In conclusion, I am seeking advice on how to proceed with implementing the requested features, such as the "faceplate" pop-up for analog values, and whether transitioning to a Galaxy system would be a more suitable long-term solution. Additionally, any insights on the compatibility of the WW report generation solution with the existing setup would be greatly appreciated. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing Alisis tags and some scripting allows for the implementation of popups on your website. When it comes to viewing P&ID's, consider using Acrobat as a viable option. In terms of transitioning a system from 2017 to 2024 using Galaxy, the consensus suggests that the cost outweighs the benefits unless starting from scratch. In fact, we observed that incorporating Galaxy slowed down the project and extended failover times significantly, particularly with twin servers. The primary drawback was the high cost of licensing compared to the minimal advantages gained.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mad4x4</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Instead of embedding bitmap images, consider creating an HTML version of the drawings and loading it in a web browser window using a window script like the following: Code:#Explorer1.Navigate("C:\Drawings\DWG1.htm"). Quick functions can streamline indirect scripting processes. In this case, the quick function "AnalogQF" is used, with IO tags "AinXY123_LL" and "AinXY123_SP". When clicking a button with actionCode:CALL AnalogQF ("Thingie", "XY123"), different arguments are passed to the quick function. The AnalogQF arguments include Name and Input, where the PopupTitle is set to display the Name followed by "Parameters". The indirect tags are then set to show the values of the AinXY123 tags with the title "Thingie Parameters" in the AnalogPopup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When deciding between using Standalone InTouch or System Platform Galaxy, the key factor to consider is the approach you want to take. Standalone InTouch involves creating Indirect tags for analog faceplate popups and linking them to the faceplate in WindowMaker. On the other hand, System Platform requires creating template objects with all the necessary attributes and creating instances of these templates for each analog device.

With Standalone InTouch, using tools like DBDump/DBLoad and Excel can help in building the tag database efficiently. In contrast, System Platform offers a more structured approach to creating and maintaining graphics and templates.

Overall, transitioning to System Platform may require a significant investment in learning how to bind objects to PLC tags effectively. However, if done correctly, it can result in a more sustainable system compared to the limitations of Standalone InTouch's "Smart Tags."

It's important to recognize that any changes requested by the customer may go beyond a simple software upgrade and instead require a complete overhaul of the existing system. This could potentially come with a hefty price tag, but it's ultimately a part of the business of keeping systems up-to-date and functional.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your message, it aligns with my thoughts. We are currently working on two units that are 99.9% similar, and the SP aspect is also intriguing. In our industry, the WW App Server is not as widely used as in other sectors, so we have limited experience with it. However, I have been interested in learning more about it for quite some time. While I had some exposure to it in 2012 while working on a WW system, my main focus has been on Citect for the past six years. Now, due to licensing costs, our primary client is considering a switch to VT SCADA. I personally view this as a downgrade, but we will see how it unfolds.

I had a discussion with Aveva earlier today, and they were able to provide information on their licenses. Currently, AppServer and Aveva Reports for Operations are not covered, but for a similar cost, our local distributor could make it happen. As you mentioned, this would involve some commercial considerations and project management responsibilities. We are also exploring the timeline for transitioning to SP2023 with assistance from our integrator license providers. I am uncertain about the feasibility of starting from scratch, especially in terms of reusing existing work done in Standalone InTouch.

While embarking on a fresh project sounds exciting, I am wary of potential setbacks. It is crucial to deliver a functional system without unnecessary embellishments. Despite the client's preference for reusing PLC modules, budget constraints may limit extensive customization. Moreover, our workload is already substantial. We will need to carefully evaluate the project scope and timeline. Your insights are greatly appreciated.

PS: The P&IDs are not traditional DWG files; instead, they are interactive windows displaying the P&ID with minimal animations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
                        </div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 outer-container">
        <!-- Related Topics -->
    <?php include "./related-topic.php" ?>
    </div>
            </div>
             <!-- cta button -->
        <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 1.  How can I effectively integrate outdated P&ID drawings into InTouch 2014 HMI for enhanced SCADA functionality?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Consider placing the P&ID pages in pop-ups or leaving them unscaled, but be mindful of potential challenges in the testing process during commissioning.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is it feasible to create pop-ups displaying detailed information for analog values in InTouch 2014 HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While it is possible to create pop-ups for analog values, ensure that the feature aligns with the operational needs of the station to avoid unnecessary complexities.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What are the considerations when transitioning from a standalone InTouch setup to a Wonderware Galaxy system for a comprehensive SCADA solution?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Transitioning to a Galaxy system may offer enhanced functionality but comes with challenges and a learning curve. Evaluate the long-term benefits against the immediate needs of the project before making a decision.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is the Wonderware report generation solution compatible with InTouch Standalone or a Galaxy system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Verify the compatibility of the WW report generation solution with both the existing InTouch setup and the potential Galaxy system before proceeding with implementation.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <script src="like-view-counter.js"></script>
    </div>
<script>
document.addEventListener("DOMContentLoaded", () => {
    function initializeToggleFunctionality() {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");
        const noRepliesMessage = document.querySelector(".no-replies-message");

        if (!toggleLink || !moreRepliesContent || !noRepliesMessage) {
            console.error("Required elements not found. Ensure the correct class names are used.");
            console.log({
                toggleLink,
                moreRepliesContent,
                noRepliesMessage,
            });
            return;
        }

        const hasReplies = Array.from(moreRepliesContent.children).some(
            (child) => child.nodeType === Node.ELEMENT_NODE
        );

        if (hasReplies) {
            noRepliesMessage.style.display = "none";
        } else {
            noRepliesMessage.style.display = "block";
            toggleLink.style.display = "none";
            return;
        }

        toggleLink.addEventListener("click", (event) => {
            event.preventDefault();
            const isHidden = getComputedStyle(moreRepliesContent).display === "none";
            moreRepliesContent.style.display = isHidden ? "block" : "none";
            toggleLink.textContent = isHidden ? "Hide More Replies" : "More Replies →";
        });
    }

    initializeToggleFunctionality();

    const observer = new MutationObserver(() => {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");

        if (toggleLink && moreRepliesContent) {
            initializeToggleFunctionality();
            observer.disconnect();
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
});
</script>
</body>
</html>

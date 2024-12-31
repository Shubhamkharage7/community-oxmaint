
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am interested in retrieving CPU Usage % data similar to what the Task Monitor tool offers from one ControlLogix to another using a CIP Message. Any suggestions on how to achieve this would be highly valuable and appreciated! Keywords: CPU Usage, Task Monitor tool, ControlLogix, CIP Message.">
    <meta name="keywords" content="cpu usage, task monitor tool, controllogix, cip message, monitor cpu, monitor controllogix, cpu usage monitoring, task monitor tool data, cip message communication, retrieve cpu usage, controllogix monitoring, cip message data">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-monitor-cpu-usage-on-controllogix-via-cip-message">
    <title>How to Monitor CPU Usage on ControlLogix via CIP Message | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Monitor CPU Usage on ControlLogix via CIP Message | Oxmaint Community">
    <meta property="og:description" content="I am interested in retrieving CPU Usage % data similar to what the Task Monitor tool offers from one ControlLogix to another using a CIP Message. Any suggestions on how to achieve this would be highly valuable and appreciated! Keywords: CPU Usage, Task Monitor tool, ControlLogix, CIP Message.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-monitor-cpu-usage-on-controllogix-via-cip-message">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Monitor CPU Usage on ControlLogix via CIP Message | Oxmaint Community">
    <meta name="twitter:description" content="I am interested in retrieving CPU Usage % data similar to what the Task Monitor tool offers from one ControlLogix to another using a CIP Message. Any suggestions on how to achieve this would be highly valuable and appreciated! Keywords: CPU Usage, Task Monitor tool, ControlLogix, CIP Message.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-monitor-cpu-usage-on-controllogix-via-cip-message"
      },
      "headline": "How to Monitor CPU Usage on ControlLogix via CIP Message",
      "description": "I am interested in retrieving CPU Usage % data similar to what the Task Monitor tool offers from one ControlLogix to another using a CIP Message. Any suggestions on how to achieve this would be highly valuable and appreciated! Keywords: CPU Usage, Task Monitor tool, ControlLogix, CIP Message.",
      "author": {
        "@type": "Person",
        "name": "PLCPrgmr"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-30",
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
                <h1 class="text-white">How to Monitor CPU Usage on ControlLogix via CIP Message</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>PLCPrgmr</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">6463</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">374</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am interested in retrieving CPU Usage % data similar to what the Task Monitor tool offers from one ControlLogix to another using a CIP Message. Any suggestions on how to achieve this would be highly valuable and appreciated! Keywords: CPU Usage, Task Monitor tool, ControlLogix, CIP Message.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I was unaware of this, but it appears that certain Logix controllers offer support for class 72 "user memory object". To find out more information, you can refer to the documentation provided by Rockwell Automation at the following link: https://literature.rockwellautomation.com/idc/groups/literature/documents/pm/1756-pm015_-en-p.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for inquiring! I am currently retrieving information from the memory.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCPrgmr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am pleased that I could provide assistance so quickly. It is always rewarding to be able to help others in need.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems they have successfully executed the task in the Task Monitor tool. I received a response from Rockwell advising me to refer to a technote regarding CPU utilization of a Logix controller. The message from Michael at Rockwell Automation provides guidance on monitoring and optimizing CPU usage. Please click on the following link for more information: https://rockwellautomation.custhelp.com/app/answers/answer_view/a_id/116890/track/AvP8KQrqDv8S~S4sGoIK~yI8XP8qrC75Mv8W~zj~PP~f"</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLCPrgmr</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PLCPrgmr, could you please copy and paste the response by Rockwell? I am experiencing difficulty accessing the link or viewing it on this platform. Thank you, Derek.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>_Derek</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Derek requested PLCPrgmr to provide the text of Rockwell's response since he couldn't access the link. If you have techconnect, simply copy and paste the linked text into a new browser window. Thank you, Derek. Click to expand for more information on this tech-related issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RedDraw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Due to quotation marks, the link provided in the post is not functional. Simply copy and paste the link manually to access it, even though it is restricted to TechConnect users. If needed, you can remove everything following the ID number (116890) in the link.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your reply, I'm not at the tech-savvy level yet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>_Derek</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What practical reasons are there for wanting to know this programmatically? Just curious!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>janner_10</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Currently, I am in the process of incorporating the "Top 20 Secure PLC Coding Practices" into my work. By following these best practices, I will be able to successfully implement Practice 19. For more information on these secure coding practices, you can visit the link: https://plc-security.com/</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>_Derek</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's always surprising to see the creativity of some of our "I know best" clients, that is until they are faced with the hefty PITA tax.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>janner_10</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of industrial automation, there are always some challenging situations that can come up when dealing with customers who think they know best. However, these customers quickly realize the additional PITA tax they must pay. Each customer is unique, especially when it comes to power plants and water treatment facilities.

For those seeking answers to their questions, I recommend checking out RA's document number 1756-rm003-en-p. This document provides a comprehensive breakdown of the objects that can be used with the GSV/SSV instruction. Consider organizing these values into an array for your CIP message instruction.

While it may be tempting to focus solely on extracting data, following the "top 20 secure plc practices" is essential for maintaining system security. By closely monitoring data, you can prevent unauthorized code modifications. For instance, someone with access to your system could tamper with GSV instructions, causing the CIP message to continually report false positives.

To enhance security, consider implementing change detection mechanisms and other relevant security protocols. Prioritizing these measures can significantly improve the overall safety and integrity of your industrial automation system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ARandomFieldEngineer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User janner_10's observation sheds light on the unrealistic expectations of some customers who think they know best, only to be surprised by the PITA tax they are eventually faced with. This comment deserves more recognition as it highlights an often overlooked truth in a world where words often fall short in conveying the full message.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>trueninjalo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recommend checking out the PlantPAX libraries to see the implemented features. Explore the PlantPAX libraries to discover the functionalities they offer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I retrieve CPU Usage % data on a ControlLogix using a CIP Message?
   - To retrieve CPU Usage % data on a ControlLogix using a CIP Message, you can utilize specific CIP objects and services to request and receive this information from the target device.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to monitor CPU Usage similar to the Task Monitor tool between ControlLogix devices?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to monitor CPU Usage between ControlLogix devices by implementing a solution that involves exchanging CIP Messages to request and receive the CPU Usage % data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific recommendations or best practices for monitoring CPU Usage on ControlLogix via CIP Message?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is recommended to thoroughly understand the CIP protocol, relevant objects, and services related to CPU Usage monitoring on ControlLogix. Additionally, consider implementing error handling mechanisms and ensuring proper data formatting during the CIP Message exchange process.</p>
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

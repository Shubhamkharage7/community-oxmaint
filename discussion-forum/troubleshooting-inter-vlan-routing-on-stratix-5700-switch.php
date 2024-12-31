
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I need help with configuring inter-VLAN routing on my network. I have provided a visual layout for reference, which you can view here: [link]. I want VLAN30 to have access to VLAN10 and VLAN20, but I do not want VLAN10 and VLAN20 to communicate with each other.">
    <meta name="keywords" content="inter-vlan routing, troubleshooting, stratix 5700 switch, vlan configuration, vlan30, vlan10, vlan20, communication restriction, routing error, trunk line connection, lanbase routing, sdm-template, vlan settings">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-inter-vlan-routing-on-stratix-5700-switch">
    <title>Troubleshooting Inter-VLAN Routing on Stratix 5700 Switch | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Inter-VLAN Routing on Stratix 5700 Switch | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I need help with configuring inter-VLAN routing on my network. I have provided a visual layout for reference, which you can view here: [link]. I want VLAN30 to have access to VLAN10 and VLAN20, but I do not want VLAN10 and VLAN20 to communicate with each other.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-inter-vlan-routing-on-stratix-5700-switch">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Inter-VLAN Routing on Stratix 5700 Switch | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I need help with configuring inter-VLAN routing on my network. I have provided a visual layout for reference, which you can view here: [link]. I want VLAN30 to have access to VLAN10 and VLAN20, but I do not want VLAN10 and VLAN20 to communicate with each other.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-inter-vlan-routing-on-stratix-5700-switch"
      },
      "headline": "Troubleshooting Inter-VLAN Routing on Stratix 5700 Switch",
      "description": "Hello everyone, I need help with configuring inter-VLAN routing on my network. I have provided a visual layout for reference, which you can view here: [link]. I want VLAN30 to have access to VLAN10 and VLAN20, but I do not want VLAN10 and VLAN20 to communicate with each other.",
      "author": {
        "@type": "Person",
        "name": "DJShardy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-08",
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
                <h1 class="text-white">Troubleshooting Inter-VLAN Routing on Stratix 5700 Switch</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DJShardy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1045</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">376</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I need help with configuring inter-VLAN routing on my network. I have provided a visual layout for reference, which you can view here: [link]. I want VLAN30 to have access to VLAN10 and VLAN20, but I do not want VLAN10 and VLAN20 to communicate with each other.

I have been following a guide for setting this up, but I am encountering an error when trying to enable routing. I also have a connection to another switch via a Trunk line, which may be causing complications.

Below is the error message I am receiving: [link]. Here are the VLAN settings on JM MS 02: [link]. I have selected "Lanbase routing" in the SDM-Template and ensured that both switches have the same VLAN configurations.

Can anyone spot what I might be missing in my setup? Thank you for any guidance you can provide.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm sorry, but I don't have experience with Stratix switches. However, I have successfully achieved the desired outcome using a Cisco firewall and trust settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have primarily utilized the command line for setting up inter-VLAN routing, so I may not be as familiar with configuring it through the web interface. However, I can offer some potentially useful insights. If both of your switches are configured identically to the VLAN screenshot you provided, and you only want one switch to act as the router, there may be an IP address conflict if both switches have the same IP addresses for each VLAN. It's important to note that just because a VLAN is configured on a switch, it doesn't necessarily mean that switch needs to have an IP address assigned for that VLAN. Typically, IP addresses are only assigned to VLANs if the switch management interface needs to be accessible from that VLAN, or if the switch is functioning as a router for that VLAN.

The IP addresses of the switch acting as your router should serve as the gateway addresses for devices on each VLAN. For instance, referring to your screenshots, PLC-1 on VLAN 20 should have 172.029.118.65 as its gateway address (assuming this has not been set up yet). As for blocking communications between VLANS 10 and 20 through the web interface, this may require the use of Access Control Lists, which cannot be configured through the web interface.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ben Pugh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Insufficient information provided. In addition to routing, it is essential to also utilize Network Address Translation (NAT).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Displaying screenshots of the dashboard and settings can provide a visual overview of the platform's interface and customization options.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L33er</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered the same issue when I conducted a trial. To make this process successful (or visible), you need to deactivate your internet-connected Ethernet port. Windows automatically attempts to direct traffic through this port. By disabling the port and configuring your switch, you can establish your VLANs and direct traffic as desired. If you are utilizing FactoryTalk Linx as your communication software, avoid using a Broadcast driver and opt for range mode instead. Then, include the desired IPs for monitoring. I struggled with this tutorial in the past but resolved it by implementing these steps, which eliminated VLAN cross-talk. Feel free to reach out for further assistance if needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JCreel</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello! After the forum upgrade, I encountered login issues and am now using a new account as I am unable to recall the email associated with my previous account. I have included a link below with additional information and diagrams regarding my current project, JV-PCN-Overview: Lucidchart.

Explore my Lucidchart document for a comprehensive visualization tool that enables teams to simplify complexity, align ideas, and accelerate progress. Design your own diagrams or flowcharts at lucidchart.com.lucid.app.

In essence, my goal is to allow the Engineering VLAN to access different areas of the factory while ensuring that communication between Part 1 and Part 2 remains separate. Despite already having numerous connections on a single network, I am surprised by the lack of communication issues.

Would segregating them into different VLANs effectively isolate them from each other? For instance, would I be unable to assign an IP address within VLAN10's range while connected to a port designated for VLAN20?

The Engineering VLAN is connected to JM MS 02, which then links to two Stratix switches through a trunk. Do I require routing on all three devices or just one? I acknowledge that these questions may seem basic, as I am still learning about networking.

I attempted a solution recommended by @JCreel but encountered the same issues. Any suggestions are appreciated. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>zzTSH</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the issue with enabling inter-VLAN routing on the Stratix 5700 switch?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The user is facing an error when trying to enable routing, possibly due to a configuration issue or a complication with the Trunk line connection to another switch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I configure VLAN30 to have access to VLAN10 and VLAN20, while preventing communication between VLAN10 and VLAN20?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can achieve this by setting up proper inter-VLAN routing rules and access control lists (ACLs) on the switch.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What is the significance of selecting "Lanbase routing" in the SDM-Template for inter-VLAN routing?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Selecting "Lanbase routing" in the SDM-Template is important for enabling the switch to perform Layer 3 routing functions between different VLANs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I ensure that both switches have the same VLAN configurations for successful inter-VLAN routing?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You need to verify and synchronize the VLAN configurations on both switches to ensure consistency and proper communication between VLANs.</p>
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

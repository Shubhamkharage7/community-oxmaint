
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently facing an issue with my 1756-EN2TR dual-port Ethernet IP Module connected to my 1756-L73 PLC. Both ports in my project tree are showing hazard symbols. I previously had hazard symbols on two 1783-ETAP modules connected to the ports of the 1756-EN2TR, but I resolved">
    <meta name="keywords" content="1756-en2tr, ethernet ip module, 1756-l73 plc, hazard symbols, 1783-etap modules, eds file, power cycling, ip addresses, module info, properties, invalid path, communication issues">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-1756-en2tr-ethernet-ip-module">
    <title>Troubleshooting Communication Issues with 1756-EN2TR Ethernet IP Module | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Issues with 1756-EN2TR Ethernet IP Module | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently facing an issue with my 1756-EN2TR dual-port Ethernet IP Module connected to my 1756-L73 PLC. Both ports in my project tree are showing hazard symbols. I previously had hazard symbols on two 1783-ETAP modules connected to the ports of the 1756-EN2TR, but I resolved">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-1756-en2tr-ethernet-ip-module">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Issues with 1756-EN2TR Ethernet IP Module | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently facing an issue with my 1756-EN2TR dual-port Ethernet IP Module connected to my 1756-L73 PLC. Both ports in my project tree are showing hazard symbols. I previously had hazard symbols on two 1783-ETAP modules connected to the ports of the 1756-EN2TR, but I resolved">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-issues-with-1756-en2tr-ethernet-ip-module"
      },
      "headline": "Troubleshooting Communication Issues with 1756-EN2TR Ethernet IP Module",
      "description": "Hello everyone, I am currently facing an issue with my 1756-EN2TR dual-port Ethernet IP Module connected to my 1756-L73 PLC. Both ports in my project tree are showing hazard symbols. I previously had hazard symbols on two 1783-ETAP modules connected to the ports of the 1756-EN2TR, but I resolved",
      "author": {
        "@type": "Person",
        "name": "DomM27"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-29",
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
                <h1 class="text-white">Troubleshooting Communication Issues with 1756-EN2TR Ethernet IP Module</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DomM27</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">464</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">428</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently facing an issue with my 1756-EN2TR dual-port Ethernet IP Module connected to my 1756-L73 PLC. Both ports in my project tree are showing hazard symbols. I previously had hazard symbols on two 1783-ETAP modules connected to the ports of the 1756-EN2TR, but I resolved this by running the eds file and power cycling. However, I am unable to find an eds file for the 1756-EN2TR, so this solution may not work for my current issue. I have changed the IP addresses of the ports, but I am unable to access the module info under properties due to an invalid path. Can anyone provide insights on why my PLC is unable to communicate with either port of the 1756-EN2TR Ethernet IP module?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is beneficial to include context and screenshots when seeking assistance. Are you experiencing issues with accessing the Property in RSLinx or the Studio Project tree? If you changed the IP, what method did you use - such as the bootp-DHCP Tool? Are the ports assigned separate IPs or a single IP (DLR)?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>harryting</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is possible that the specified path is attempting to access the original IP address before any configuration changes were made. If browsing the entire subnet displays devices as "unknown" or indicates IP conflicts, consider uploading screenshots for further assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robb B</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To begin with, an en2tr module is assigned a single IP address. Both of its ports share this IP address in a linear or ring configuration. You can configure the IP address using BootP, network settings, or by accessing the PLC online through another port to set the card's IP address. It's important to note that the IP address set in the offline module configuration may not be the same as the module's actual IP address. While they are usually set to be the same, they operate independently from each other.

If you see a yellow triangle, navigate to the lower left panel in the project tree to identify the error. When online, access the module properties and view the module info tab to compare the configuration in the project with the actual module settings. This difference could be due to a version mismatch.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's always beneficial to include context and screenshots when seeking assistance. Are you unable to pull up the Property in RSLinx or the Studio Project tree? How did you change the IP address - using a bootp-DHCP Tool? Are you assigning separate IP addresses to ports or a single IP for DLR? I didn't assign the IPs, but I will discuss it with the engineer who did. The hazard symbols can be found in the project tree. I'll attempt to provide screenshots, although I'm working on a secure lab PC, so it may not be possible. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DomM27</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee explained that an EN2TR module only utilizes one IP address, with the two ports operating in a linear configuration or ring. The IP address must be configured within the module using BootP, network configuration, or by accessing the PLC online through another port. It's important to note that the IP address set in offline module configuration may not be the actual IP of the module. Although they are usually set to be the same, they are independent from each other.

If encountering a yellow triangle error, expand the lower left panel in the project tree to view the error details. While online, access the module properties and navigate to the module info tab for information on any configuration discrepancies. This could potentially be caused by a version mismatch.

In response, the individual stated that they would investigate the IP configuration further and consult with the previous engineer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DomM27</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Robb B noted that the specified path may be attempting to access the original IP address before any configuration changes were made. Are you seeing the expected devices when browsing the entire subnet, but possibly listed as "unknown" or experiencing IP conflicts? I second the request for screenshots. I will investigate further, although obtaining screenshots may be challenging since I am using a secure PC. Thank you for your help!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DomM27</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The -EN2TR is equipped with rotary switches for setting the IP address. Can you remove the module from the chassis to inspect them? The User Manual can be found at: https://literature.rockwellautomation.com/idc/groups/literature/documents/um/1756-um004_-en-p.pdf. Refer to page 24 for details on the rotary knobs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The rotary switches play a crucial role in configuring the 192.168.1."rotary switch" for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize RSLinx Classic for comprehensive module configuration and IP address setup. Connect via USB cord to easily access and adjust settings. For manual configuration of IP settings, ensure a secure connection using an Ethernet cord. In RSLinx, navigate to the Ethernet node, right-click to configure the driver, and enter the IP address under the host name. Allow for a short delay for the system to locate the device if the IP address is accurately set.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JunQ</span></li>
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
<h4 class='text-dark'>FAQ: 1. FAQ: Why are hazard symbols showing on both ports of my 1756-EN2TR Ethernet IP Module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Hazard symbols on the ports could indicate communication issues or configuration errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: How can I resolve hazard symbols on the ports of my 1756-EN2TR Ethernet IP Module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Try running the Electronic Data Sheet (EDS) file for the module and power cycling. Ensure correct IP addresses and configurations are set.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: Where can I find the EDS file for the 1756-EN2TR Ethernet IP Module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: EDS files for Rockwell Automation products are typically available on their website or through their support services.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. FAQ: What could be causing the PLC to be unable to communicate with the ports of the 1756-EN2TR Ethernet IP Module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Invalid path errors, inaccessible module info, or incorrect configurations could prevent successful communication. Double-check settings and troubleshoot step by step.</p>
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

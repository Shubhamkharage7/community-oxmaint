
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently attempting to establish a connection with a Zebra printer. I have successfully printed labels using hyperterminal through both RS232 and TCP/IP. However, I am now facing an issue when trying to send labels from the PLC via Ethernet. A message stating Error processing connection">
    <meta name="keywords" content="zebra printer troubleshooting, zebra printer connectivity issues, zebra printer error processing connection related service, troubleshooting zebra printer connection problems, 1768-enbt/a rev. 2">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-zebra-printer-connectivity-issue-with-1768-enbt-a-rev-2-3-error-processing-connection-related-service">
    <title>Troubleshooting Zebra Printer Connectivity Issue with 1768-ENBT/A Rev. 2.3: Error Processing Connection Related Service | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Zebra Printer Connectivity Issue with 1768-ENBT/A Rev. 2.3: Error Processing Connection Related Service | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently attempting to establish a connection with a Zebra printer. I have successfully printed labels using hyperterminal through both RS232 and TCP/IP. However, I am now facing an issue when trying to send labels from the PLC via Ethernet. A message stating Error processing connection">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-zebra-printer-connectivity-issue-with-1768-enbt-a-rev-2-3-error-processing-connection-related-service">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Zebra Printer Connectivity Issue with 1768-ENBT/A Rev. 2.3: Error Processing Connection Related Service | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently attempting to establish a connection with a Zebra printer. I have successfully printed labels using hyperterminal through both RS232 and TCP/IP. However, I am now facing an issue when trying to send labels from the PLC via Ethernet. A message stating Error processing connection">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-zebra-printer-connectivity-issue-with-1768-enbt-a-rev-2-3-error-processing-connection-related-service"
      },
      "headline": "Troubleshooting Zebra Printer Connectivity Issue with 1768-ENBT/A Rev. 2.3: Error Processing Connection Related Service",
      "description": "Hello everyone, I am currently attempting to establish a connection with a Zebra printer. I have successfully printed labels using hyperterminal through both RS232 and TCP/IP. However, I am now facing an issue when trying to send labels from the PLC via Ethernet. A message stating Error processing connection",
      "author": {
        "@type": "Person",
        "name": "asteroide"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-30",
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
                <h1 class="text-white">Troubleshooting Zebra Printer Connectivity Issue with 1768-ENBT/A Rev. 2.3: Error Processing Connection Related Service</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>asteroide</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">449</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">279</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone,
I am currently attempting to establish a connection with a Zebra printer. I have successfully printed labels using hyperterminal through both RS232 and TCP/IP. However, I am now facing an issue when trying to send labels from the PLC via Ethernet. A message stating "Error processing connection related service" appears when I attempt to create sockets.

I have researched various posts and attempted different solutions, but the error persists. The hardware in use includes: 1768-L45 Revision 17.4 and 1768-ENBT/A Revision 2.3. I am unsure if the 1768-ENBT is compatible with socket connections or if a firmware update is necessary. Would updating the CPU firmware also be required in this scenario?

Any advice or suggestions on what steps I should take next would be greatly appreciated. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to resolve the issue, it is recommended to have ver 1.002 or higher of technoteIN37624 (Access Level Techconnect) installed. From the screenshot provided, it appears that the path may not have been set correctly as it is directing to Slot 3. Considering the location of the module next to the processor, Slot 1 should be the correct placement. If an ENBT module is included in the IO configuration, the module name would be displayed instead.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I came across a technical note addressing a similar error in a different scenario, advising against the use of cached connections.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Contr_Conn noted that ver 1.002 or higher of technote IN37624 (Access Level Techconnect) is necessary. Based on the provided screenshot, it seems like the path may not have been set correctly, as it is pointing to Slot 3. It is important to note that the module next to the processor is actually in Slot 1. If an ENBT module is included in the IO configuration, it should display the module name instead of just the slot number.

In the setup described, the 1768-ENBT/A is in Slot 1, next to the slot 0 CPU. When browsing for the ethernet card in the communications tab and selecting the card name, the path displayed after closing is 1,3. Adjusting the path to 1,1 and applying the changes is accepted, but upon reopening the communications tab, the path reverts back to 1,3.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asteroide</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder noted that he came across a technote advising against using cached connections to address a similar error in a separate scenario. Despite disabling cached connections and toggling the Connected option, the error persists.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asteroide</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The author of the code is unknown, but it is clear that the code is consistently replacing the message pathway.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Contr_Conn pointed out that there may be an issue with the code overriding the message path. The code was originally used in a Domino Printer by AB a couple of years ago and is now being reused for a Zebra Printer with just two small routines. After fixing the path overwrite, a new error message has appeared with Error Code 16#0005 stating that the class or instance is not supported. Despite changing some options, the issue persists. What steps can be taken next to resolve this issue? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>asteroide</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I mistakenly thought that the 1768-ENBT module supported sockets, but in fact it does not. It is actually the 1769-EWEB module that has socket support. My apologies for the confusion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
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
<h4 class='text-dark'>FAQ: 1.  I am encountering an "Error processing connection related service" message when trying to establish a connection with a Zebra printer via Ethernet. Any suggestions on troubleshooting this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> It is recommended to check the compatibility of the 1768-ENBT/A Revision 2.3 module with socket connections and consider if a firmware update may be necessary for proper functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Can the 1768-ENBT/A Revision 2.3 module be used for establishing connections with a Zebra printer via Ethernet and sending labels from a PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> The compatibility of the 1768-ENBT/A Revision 2.3 module for socket connections with Zebra printers should be verified, and if needed, firmware updates should be considered to ensure smooth communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Would updating the CPU firmware, specifically on a 1768-L45 Revision 17.4, be necessary to resolve the "Error processing connection related service" issue when connecting to a Zebra printer via Ethernet?</h4>
<p class='text-muted'><strong>Answer:</strong> Updating the CPU firmware, along with checking the compatibility of the 1768-ENBT/A Revision 2.3 module for socket connections, might be necessary to troubleshoot the connectivity issue with the Zebra printer.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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

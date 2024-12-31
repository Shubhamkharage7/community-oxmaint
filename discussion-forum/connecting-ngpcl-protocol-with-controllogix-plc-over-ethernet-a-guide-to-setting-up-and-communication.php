
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="For years, we successfully communicated via RS232 using AWT and ARD ASCII commands in the Controllogix program. Recently, Markem introduced an Ethernet-based firmware version which we tested with basic NGPCL commands over HyperTerminal, yielding positive results. Has anyone connected NGPCL over Ethernet with a Controllogix PLC before? It may">
    <meta name="keywords" content="ngpcl protocol, controllogix plc, ethernet communication, setting up ngpcl over ethernet, connecting ngpcl to controllogix, hyperterminal testing, ethernet-based firmware, rs232 communication, awt ascii commands, ard ascii">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/connecting-ngpcl-protocol-with-controllogix-plc-over-ethernet-a-guide-to-setting-up-and-communication">
    <title>Connecting NGPCL Protocol with Controllogix PLC over Ethernet: A Guide to Setting Up and Communication | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Connecting NGPCL Protocol with Controllogix PLC over Ethernet: A Guide to Setting Up and Communication | Oxmaint Community">
    <meta property="og:description" content="For years, we successfully communicated via RS232 using AWT and ARD ASCII commands in the Controllogix program. Recently, Markem introduced an Ethernet-based firmware version which we tested with basic NGPCL commands over HyperTerminal, yielding positive results. Has anyone connected NGPCL over Ethernet with a Controllogix PLC before? It may">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/connecting-ngpcl-protocol-with-controllogix-plc-over-ethernet-a-guide-to-setting-up-and-communication">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Connecting NGPCL Protocol with Controllogix PLC over Ethernet: A Guide to Setting Up and Communication | Oxmaint Community">
    <meta name="twitter:description" content="For years, we successfully communicated via RS232 using AWT and ARD ASCII commands in the Controllogix program. Recently, Markem introduced an Ethernet-based firmware version which we tested with basic NGPCL commands over HyperTerminal, yielding positive results. Has anyone connected NGPCL over Ethernet with a Controllogix PLC before? It may">
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
        "@id": "https://community.oxmaint.com/discussion-forum/connecting-ngpcl-protocol-with-controllogix-plc-over-ethernet-a-guide-to-setting-up-and-communication"
      },
      "headline": "Connecting NGPCL Protocol with Controllogix PLC over Ethernet: A Guide to Setting Up and Communication",
      "description": "For years, we successfully communicated via RS232 using AWT and ARD ASCII commands in the Controllogix program. Recently, Markem introduced an Ethernet-based firmware version which we tested with basic NGPCL commands over HyperTerminal, yielding positive results. Has anyone connected NGPCL over Ethernet with a Controllogix PLC before? It may",
      "author": {
        "@type": "Person",
        "name": "Fourpaw"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-21",
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
                <h1 class="text-white">Connecting NGPCL Protocol with Controllogix PLC over Ethernet: A Guide to Setting Up and Communication</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Fourpaw</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">11835</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">300</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>For years, we successfully communicated via RS232 using AWT and ARD ASCII commands in the Controllogix program. Recently, Markem introduced an Ethernet-based firmware version which we tested with basic NGPCL commands over HyperTerminal, yielding positive results. Has anyone connected NGPCL over Ethernet with a Controllogix PLC before? It may require setting up the interface as a generic Ethernet module, mapping an I/O table, and communicating through the PLC. The possibility of utilizing raw Ethernet Messaging with the Controllogix command set remains uncertain. Any insights or experiences to share?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To establish communication between devices through a PLC, it is essential to configure the interface as a generic Ethernet module. However, it is a common misconception that the "Generic Ethernet Module" object is used for this purpose. In reality, the correct feature to use is the Open Sockets feature. This feature is available in the latest 5370 series CompactLogix as well as ControlLogix with the 1756-EN2T or 1756-EWEB modules. By utilizing the Open Sockets feature, devices can communicate without the need to emulate an I/O block.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For comprehensive information on the Socket Interface, be sure to consult the official reference manual, RA Publication ENET-AT002. Access the document directly through the provided PDF link.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Experiencing Connectivity Problems between ControlLogix and Markem Imaje SmartDate X40I am encountering difficulties in establishing communication between the Markem-Imaje SmartDate X40 and ControlLogix via Ethernet. The task at hand is to update the Job through the PLC. I am seeking guidance on the steps to send commands to the SmartDate X40 via Ethernet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Yasir Maqsood</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This might be of assistance to you. I received this information from the Markem hotline earlier today.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ak0004</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I'm looking for guidance on configuring the Markem-Image NGPCL Protocol on Ethernet for the CompactLogix system. Can you provide instructions on how to set this up?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ABnorm123</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The process is similar for both ControlLogix and CompactLogix systems. We recommend referring to a whitepaper from Rockwell Automation for detailed information: [insert clickable link]. In my experience, I found the Rockwell AOI referenced on page 52 to be beneficial. More details can be found here: [insert clickable link].</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ak0004</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you looking for a guide on how to access the Markem-Image NGPCL Protocol via Ethernet?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>valer85</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I connect NGPCL protocol over Ethernet with a Controllogix PLC?
- To connect NGPCL over Ethernet with a Controllogix PLC, you may need to set up the interface as a generic Ethernet module, map an I/O table, and establish communication through the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the process for setting up the NGPCL protocol over Ethernet with a Controllogix PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The process involves configuring the interface as a generic Ethernet module, mapping I/O tables, and establishing communication channels within the Controllogix program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can raw Ethernet Messaging be used with the Controllogix PLC command set when connecting NGPCL over Ethernet?</h4>
<p class='text-muted'><strong>Answer:</strong> - The possibility of utilizing raw Ethernet Messaging with the Controllogix command set when connecting NGPCL over Ethernet remains uncertain. It is recommended to seek further insights or experiences from the community.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Has anyone successfully connected NGPCL over Ethernet with a Controllogix PLC and can share their experience?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you have successfully connected NGPCL over Ethernet with a Controllogix PLC, your insights and experiences would be valuable to others in the community. Feel free to share your knowledge to help others navigate this setup.</p>
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

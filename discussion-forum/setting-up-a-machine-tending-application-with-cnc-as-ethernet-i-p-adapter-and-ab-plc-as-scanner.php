
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am seeking assistance with setting up a machine tending application involving configuring a CNC as an Ethernet I/P adapter and an AB PLC as a scanner. While I have a basic understanding of the process, implementing it through Sycon.net has been challenging. I have followed a manual">
    <meta name="keywords" content="setting up machine tending application, cnc ethernet i/p adapter, ab plc scanner, sycon.net configuration, cnc manufacturer manual, comx100 gateway, eds file import, adapter settings, ethernetip master configuration, network setup components, gateway">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-a-machine-tending-application-with-cnc-as-ethernet-i-p-adapter-and-ab-plc-as-scanner">
    <title>Setting up a Machine Tending Application with CNC as Ethernet I/P Adapter and AB PLC as Scanner | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting up a Machine Tending Application with CNC as Ethernet I/P Adapter and AB PLC as Scanner | Oxmaint Community">
    <meta property="og:description" content="Hello, I am seeking assistance with setting up a machine tending application involving configuring a CNC as an Ethernet I/P adapter and an AB PLC as a scanner. While I have a basic understanding of the process, implementing it through Sycon.net has been challenging. I have followed a manual">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-a-machine-tending-application-with-cnc-as-ethernet-i-p-adapter-and-ab-plc-as-scanner">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting up a Machine Tending Application with CNC as Ethernet I/P Adapter and AB PLC as Scanner | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am seeking assistance with setting up a machine tending application involving configuring a CNC as an Ethernet I/P adapter and an AB PLC as a scanner. While I have a basic understanding of the process, implementing it through Sycon.net has been challenging. I have followed a manual">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-a-machine-tending-application-with-cnc-as-ethernet-i-p-adapter-and-ab-plc-as-scanner"
      },
      "headline": "Setting up a Machine Tending Application with CNC as Ethernet I/P Adapter and AB PLC as Scanner",
      "description": "Hello, I am seeking assistance with setting up a machine tending application involving configuring a CNC as an Ethernet I/P adapter and an AB PLC as a scanner. While I have a basic understanding of the process, implementing it through Sycon.net has been challenging. I have followed a manual",
      "author": {
        "@type": "Person",
        "name": "cwick"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-21",
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
                <h1 class="text-white">Setting up a Machine Tending Application with CNC as Ethernet I/P Adapter and AB PLC as Scanner</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>cwick</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">185</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">288</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am seeking assistance with setting up a machine tending application involving configuring a CNC as an Ethernet I/P adapter and an AB PLC as a scanner. While I have a basic understanding of the process, implementing it through Sycon.net has been challenging. I have followed a manual from the CNC manufacturer, but it assumes a certain level of experience halfway through, making it difficult for me to proceed.

I have successfully configured a COMX100 gateway to my machine and can ping it with the USB and Ethernet cables connected to my PC. However, I am now at a point where I need to import an EDS file for adapter settings. I am confused about whether I actually need this file since I already have adapter profiles listed. Additionally, the manual includes a section on configuring an EthernetIP Master, which I did not set up initially. 

Could someone explain the necessary components of my network setup? Will my final project include a gateway, a master, and an adapter hanging from the master? What should the configuration settings be for the Master - should it have the same IP address as my PLC, for example? Is the Adapter module's IP the same as the gateway or the machine's IP address?

I am eager to learn and succeed in this project, so any guidance from this community would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Learning how to navigate the Hilscher gateways and devices with Sycon can be a bit challenging at first, as you try to understand the functions of each pane. It has been some time since I last set up Sycon on a virtual machine, so I am unable to provide sample screenshots at this moment. 

If you are using a COMX100, it is important to note that there is only one network fieldbus connection configuration available - the EtherNet/IP Adapter mode, with the other side being the dual-port memory, rather than another fieldbus. It is possible that there may be a misconfiguration in Sycon where it is being set up as an EtherNet/IP Scanner for the COMX100, which is incorrect. The A-B controller should be the "Scanner" or "Originator", while the COMX100 serves as an Adapter only. 

When setting up the COMX100, the IP address is the only one you need to focus on; you do not need to specify the IP address of the Scanner to the Adapter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for responding. I believe there may be some errors in my process, even though I am following the CNC's procedure, which has been translated multiple times from Japanese. Today, I will be referring to Hilscher's configuration manual to set up accordingly. I have a query regarding Hilscher's manual, which presents two scenarios: Adapter DTM at the Root-Line (Stand-Alone Slave) and Adapter DTM at the Scanner busline. Can you advise me on which one to prioritize or focus on? The CNC's manual suggests setting up a gateway at the root-line, followed by adding a Master and an adapter module on the master's line, which is quite confusing for me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cwick</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Do I need to import an EDS file for adapter settings when setting up a machine tending application with a CNC as an Ethernet I/P adapter and an AB PLC as a scanner?
- It is recommended to import an EDS file for adapter settings to ensure proper configuration and compatibility.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the necessary components of the network setup for this project?</h4>
<p class='text-muted'><strong>Answer:</strong> - The network setup will typically include a gateway, a master (PLC), and an adapter connected to the master.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should be the configuration settings for the Master (PLC) in this setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Master (PLC) should have its own unique IP address, which may or may not be the same as the CNC or other devices on the network.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Should the Adapter module's IP address be the same as the gateway or the machine's IP address?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Adapter module's IP address should typically be different from both the gateway and the machine's IP address to ensure proper communication within the network.</p>
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

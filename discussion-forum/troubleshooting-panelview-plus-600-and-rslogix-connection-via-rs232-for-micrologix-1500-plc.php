
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have a machine controlled by a PanelView Plus 600 HMI touch screen through RS232 to a Micrologix 1500 PLC. I am troubleshooting the equipment by linking RSLogix 500 through a laptop to the PLCs RS232 port. However, I need guidance on how to connect both the touch screen">
    <meta name="keywords" content="panelview plus 600, rslogix connection, rs232, micrologix 1500 plc, troubleshooting, hmi touch screen, rslogix 500, laptop connection, plc's rs232 port, simultaneous operation, guidance, solutions">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-plus-600-and-rslogix-connection-via-rs232-for-micrologix-1500-plc">
    <title>Troubleshooting PanelView Plus 600 and RSLogix connection via RS232 for Micrologix 1500 PLC操作。 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PanelView Plus 600 and RSLogix connection via RS232 for Micrologix 1500 PLC操作。 | Oxmaint Community">
    <meta property="og:description" content="I have a machine controlled by a PanelView Plus 600 HMI touch screen through RS232 to a Micrologix 1500 PLC. I am troubleshooting the equipment by linking RSLogix 500 through a laptop to the PLCs RS232 port. However, I need guidance on how to connect both the touch screen">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-plus-600-and-rslogix-connection-via-rs232-for-micrologix-1500-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PanelView Plus 600 and RSLogix connection via RS232 for Micrologix 1500 PLC操作。 | Oxmaint Community">
    <meta name="twitter:description" content="I have a machine controlled by a PanelView Plus 600 HMI touch screen through RS232 to a Micrologix 1500 PLC. I am troubleshooting the equipment by linking RSLogix 500 through a laptop to the PLCs RS232 port. However, I need guidance on how to connect both the touch screen">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-panelview-plus-600-and-rslogix-connection-via-rs232-for-micrologix-1500-plc"
      },
      "headline": "Troubleshooting PanelView Plus 600 and RSLogix connection via RS232 for Micrologix 1500 PLC操作。",
      "description": "I have a machine controlled by a PanelView Plus 600 HMI touch screen through RS232 to a Micrologix 1500 PLC. I am troubleshooting the equipment by linking RSLogix 500 through a laptop to the PLCs RS232 port. However, I need guidance on how to connect both the touch screen",
      "author": {
        "@type": "Person",
        "name": "chippieboy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-24",
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
                <h1 class="text-white">Troubleshooting PanelView Plus 600 and RSLogix connection via RS232 for Micrologix 1500 PLC操作。</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>chippieboy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">229</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">257</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have a machine controlled by a PanelView Plus 600 HMI touch screen through RS232 to a Micrologix 1500 PLC. I am troubleshooting the equipment by linking RSLogix 500 through a laptop to the PLC's RS232 port. However, I need guidance on how to connect both the touch screen and RSLogix simultaneously for operation. Can anyone provide solutions or suggestions on this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The LRP model features dual serial ports - one located on the front and another on the side. In contrast, the LSP model only has a single serial port. If you possess the LSP model and require additional ports, consider utilizing a port splitter such as the 1747-DPS1. This device can help expand connectivity options for your equipment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for serial splitters, consider browsing eBay for a selection of options available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently using the 1747-CP3 cable to connect my PC to the PLC, which features DB9 connectors on both ends. My laptop is equipped with a traditional Com port, and I have had issues with USB emulators in the past. The Panelview also connects using a DB9 cable. The 1747-DPS1 cable has a round connector similar to the Microtouch cable. I am wondering if AB offers a DB9 port splitter. Is it possible to connect the PC to the PLC using the Microtouch cable with the round port, and connect the Panelview to the DB9 port?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chippieboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reconnecting the Panelview to the PLC and plugging in my Microtouch to Com1 cable, the connection was established effortlessly without any additional steps. It seems like I have found the solution to my query independently. Many thanks to everyone for their support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chippieboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to RS232 communication, it is strictly limited to a 1:1 connection between two devices, with no option for adding a third device into the mix. To expand your setup, you have the choice of either incorporating a second RS232 port into your PLC or upgrading to a more modern and versatile option, such as Ethernet connectivity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
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
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I connect a PanelView Plus 600 HMI touch screen and RSLogix simultaneously to a MicroLogix 1500 PLC for troubleshooting?
- To connect both the touch screen and RSLogix to the PLC simultaneously, you can use a laptop with RSLogix 500 software connected to the PLC's RS232 port, while maintaining the existing RS232 connection between the PanelView Plus 600 and the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What steps should I follow to troubleshoot the connection between PanelView Plus 600 and RSLogix via RS232 for a MicroLogix 1500 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Ensure that the RS232 connections are properly configured and that the communication settings on both the HMI touch screen and RSLogix are set correctly. Verify the cable connections, baud rates, data bits, parity, and stop bits to establish a reliable connection for troubleshooting.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific settings or configurations needed in RSLogix 500 to communicate with a MicroLogix 1500 PLC connected via RS232?</h4>
<p class='text-muted'><strong>Answer:</strong> - In RSLogix 500, you need to configure the communication settings to match those of the MicroLogix 1500 PLC, including the correct port configuration (RS232), baud rate, data bits, parity, and stop bits. Ensure that the communication path is established and that the software can communicate effectively with the PLC for troubleshooting purposes.</p>
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

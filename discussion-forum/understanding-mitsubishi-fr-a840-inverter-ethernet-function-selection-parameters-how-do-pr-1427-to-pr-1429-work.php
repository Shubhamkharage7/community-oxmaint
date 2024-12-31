
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently utilizing MODBUS/TCP communication with a device, where a laptop program acts as the MODBUS master and the inverter serves as the MODBUS slave. While I have successfully set this up, I am unsure about how the Ethernet function selection parameters (Pr.1427 to Pr.1429) operate. The Mitsubishi">
    <meta name="keywords" content="mitsubishi fr-a840 inverter, ethernet function selection parameters, modbus/tcp communication, pr.1427 to pr.1429 parameters, a800-e / f800-e ethernet function">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-mitsubishi-fr-a840-inverter-ethernet-function-selection-parameters-how-do-pr-1427-to-pr-1429-work">
    <title>Understanding Mitsubishi FR-A840 Inverter Ethernet Function Selection Parameters: How do Pr.1427 to Pr.1429 Work? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding Mitsubishi FR-A840 Inverter Ethernet Function Selection Parameters: How do Pr.1427 to Pr.1429 Work? | Oxmaint Community">
    <meta property="og:description" content="I am currently utilizing MODBUS/TCP communication with a device, where a laptop program acts as the MODBUS master and the inverter serves as the MODBUS slave. While I have successfully set this up, I am unsure about how the Ethernet function selection parameters (Pr.1427 to Pr.1429) operate. The Mitsubishi">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-mitsubishi-fr-a840-inverter-ethernet-function-selection-parameters-how-do-pr-1427-to-pr-1429-work">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding Mitsubishi FR-A840 Inverter Ethernet Function Selection Parameters: How do Pr.1427 to Pr.1429 Work? | Oxmaint Community">
    <meta name="twitter:description" content="I am currently utilizing MODBUS/TCP communication with a device, where a laptop program acts as the MODBUS master and the inverter serves as the MODBUS slave. While I have successfully set this up, I am unsure about how the Ethernet function selection parameters (Pr.1427 to Pr.1429) operate. The Mitsubishi">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-mitsubishi-fr-a840-inverter-ethernet-function-selection-parameters-how-do-pr-1427-to-pr-1429-work"
      },
      "headline": "Understanding Mitsubishi FR-A840 Inverter Ethernet Function Selection Parameters: How do Pr.1427 to Pr.1429 Work?",
      "description": "I am currently utilizing MODBUS/TCP communication with a device, where a laptop program acts as the MODBUS master and the inverter serves as the MODBUS slave. While I have successfully set this up, I am unsure about how the Ethernet function selection parameters (Pr.1427 to Pr.1429) operate. The Mitsubishi",
      "author": {
        "@type": "Person",
        "name": "RichardEll"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-06",
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
                <h1 class="text-white">Understanding Mitsubishi FR-A840 Inverter Ethernet Function Selection Parameters: How do Pr.1427 to Pr.1429 Work?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RichardEll</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">182</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">125</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently utilizing MODBUS/TCP communication with a device, where a laptop program acts as the MODBUS master and the inverter serves as the MODBUS slave. While I have successfully set this up, I am unsure about how the Ethernet function selection parameters (Pr.1427 to Pr.1429) operate. The Mitsubishi document A800-E / F800-E ETHERNET FUNCTION MANUAL in section 2.5.2 explains that a value of 0 selects MODBUS/TCP, but section 2.5.6 suggests using a value of 502 for any MODBUS/TCP parameters. This discrepancy raises questions about the functionality and priority of the three function selection parameters. Is there a specific order in which the inverter attempts to use these selections, or are they used simultaneously? Would using multiple devices with conflicting settings result in control conflicts? Any insights from experienced users of these inverters would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I may not have fully grasped your message, I am committed to assisting you as best as I can. It is crucial to note that 502 is a designated port number that should not be altered. There are numerous methods available to regulate speed, with one straightforward approach being to directly connect the RH terminal and adjust the RH reference number. For additional guidance and practical demonstrations, I recommend accessing the myMitsubishi web platform, where you can find useful examples already implemented. Explore the various options and solutions provided to optimize your system's performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to controlling the speed of your device, there are various methods you can try. One simple option is to hardwire the RH terminal and adjust the RH reference number. It's important to note that 502 is a port number that should not be altered. If you visit the myMitsubishi webpage, you can find helpful examples to guide you. In Section 2.5.6, it states that you can set "502" in Pr.1427 to Pr.1429 Ethernet function selection 1 to 3 to choose MODBUS/TCP for the application. This may not actually refer to a port number, so it's worth clarifying. Understanding the purpose of the three function selection parameters and how to use them will be key in optimizing your device's performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RichardEll</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ethernet devices that support multiple protocols have the capability to have several protocols active at the same time. The A800 drives can have up to 3 Ethernet protocols active simultaneously. Each parameter from Pr.1427 to Pr.1429 selects an active protocol by specifying the TCP or UDP port used for that protocol. When configuring Modbus/TCP, the value should ideally be set to 502. It is uncertain if the value of 0 in the manual is a typo, or if it is a special value that also selects Modbus/TCP. Testing this hypothesis can be done by setting one of the parameters (Pr.1427 - Pr.1429) to 0 and checking if communication with the drive using Modbus/TCP is still possible.

Having multiple protocols enabled, or multiple Modbus/TCP clients connected (up to 3 supported by the drive), can lead to conflicts as multiple sources can control the drive simultaneously. Addressing this issue requires system-level design solutions or alternative arbitration methods, instead of solely relying on the drive to manage conflicts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jschulze</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Richard, The parameters (Pr. 1427 -> Pr. 1429) determine the protocols the VFD will respond to. These settings can be found in Section 2.5.2 on page 22, along with their descriptions. The notes (*1) below explain the priority order, which is Pr. 1427 > Pr. 1428 > Pr. 1429. Priority dictates which connection is established first when multiple connection types are requested. To enable MODBUS/TCP support, set 502 in Pr. 1427. Other options cater to protocols like MELSOFT/FA, SLMP, and CC-LINK IE. For utilizing FR Configurator 2 for VFD setup, set Pr. 1428 to the default value 45237. I hope this addresses your queries. Best regards, Mark Silbernagel - Senior Systems Integrator at Automation Solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Automation Solutions</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I've discovered a typo in my manual - it seems I have an older version. I will now search for the most up-to-date copy. Appreciate your assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RichardEll</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>According to jschulze, many Ethernet devices are capable of supporting multiple protocols simultaneously. The A800 drives, for example, can have up to 3 Ethernet protocols active at once. Each parameter from Pr.1427 to Pr.1429 designates an active protocol by specifying the TCP or UDP port used for that protocol. To use Modbus/TCP, the value should ideally be set to 502. It is possible that the value of 0 in the manual is either a mistake or a special value that also selects Modbus/TCP. Testing this theory by setting one of the parameters to 0 can determine if communication with the drive using Modbus/TCP is still possible.

Enabling multiple protocols or multiple Modbus/TCP clients, as the drive supports up to 3, can result in multiple sources controlling the drive simultaneously, potentially causing conflicts. However, addressing this issue is more of a system design concern and could be resolved through alternative methods instead of relying on the drive to arbitrate it. It seems that the value of 0 is indeed a typo in the manual. Thank you for the clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RichardEll</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the Ethernet function selection parameters (Pr.1427 to Pr.1429) in Mitsubishi FR-A840 inverter, and how do they work?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Ethernet function selection parameters in the Mitsubishi FR-A840 inverter are used to configure the communication protocol and settings for Ethernet communication. For example, a value of 0 typically selects MODBUS/TCP, while other values may be used for different protocols or configurations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How do I set up MODBUS/TCP communication with a Mitsubishi FR-A840 inverter?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set up MODBUS/TCP communication with a Mitsubishi FR-A840 inverter, you need to configure the Ethernet function selection parameters (Pr.1427 to Pr.1429) accordingly. Refer to the Mitsubishi document A800-E / F800-E ETHERNET FUNCTION MANUAL for detailed instructions on setting up and configuring MODBUS/TCP communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there a specific order in which the inverter attempts to use the Ethernet function selection parameters, or are they used simultaneously?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is important to understand the priority and functionality of the Ethernet function selection parameters in the Mitsubishi FR-A840 inverter. Clarify whether the parameters are used sequentially or simultaneously to determine how the inverter communicates over Ethernet.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What happens if multiple devices with conflicting settings are connected to the Mitsubishi FR-A840 inverter?</h4>
<p class='text-muted'><strong>Answer:</strong> - Connecting multiple devices with conflicting settings to the Mitsubishi FR-A840 inverter</p>
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

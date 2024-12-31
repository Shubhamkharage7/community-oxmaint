
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello Everyone, I am working on utilizing Aveva Plant SCADA 2020 for communication with an Omron CJ2M CPU35 PLC using the OMFINS protocol. I am encountering an issue with Bad Data (Not #COM) during runtime. The configuration details of the SCADA and PLC are as follows: Omron CJ2M CPU35">
    <meta name="keywords" content="aveva plant scada 2020, omron cj2m plc, omfins protocol, bad data issue, troubleshooting, communication error, scada configuration, plc configuration, omron cj2m cpu35, fins">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-bad-data-issue-in-aveva-plant-scada-2020-communication-with-omron-cj2m-plc-using-omfins-protocol">
    <title>Troubleshooting Bad Data Issue in Aveva Plant SCADA 2020 Communication with Omron CJ2M PLC using OMFINS Protocol | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Bad Data Issue in Aveva Plant SCADA 2020 Communication with Omron CJ2M PLC using OMFINS Protocol | Oxmaint Community">
    <meta property="og:description" content="Hello Everyone, I am working on utilizing Aveva Plant SCADA 2020 for communication with an Omron CJ2M CPU35 PLC using the OMFINS protocol. I am encountering an issue with Bad Data (Not #COM) during runtime. The configuration details of the SCADA and PLC are as follows: Omron CJ2M CPU35">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-bad-data-issue-in-aveva-plant-scada-2020-communication-with-omron-cj2m-plc-using-omfins-protocol">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Bad Data Issue in Aveva Plant SCADA 2020 Communication with Omron CJ2M PLC using OMFINS Protocol | Oxmaint Community">
    <meta name="twitter:description" content="Hello Everyone, I am working on utilizing Aveva Plant SCADA 2020 for communication with an Omron CJ2M CPU35 PLC using the OMFINS protocol. I am encountering an issue with Bad Data (Not #COM) during runtime. The configuration details of the SCADA and PLC are as follows: Omron CJ2M CPU35">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-bad-data-issue-in-aveva-plant-scada-2020-communication-with-omron-cj2m-plc-using-omfins-protocol"
      },
      "headline": "Troubleshooting Bad Data Issue in Aveva Plant SCADA 2020 Communication with Omron CJ2M PLC using OMFINS Protocol",
      "description": "Hello Everyone, I am working on utilizing Aveva Plant SCADA 2020 for communication with an Omron CJ2M CPU35 PLC using the OMFINS protocol. I am encountering an issue with Bad Data (Not #COM) during runtime. The configuration details of the SCADA and PLC are as follows: Omron CJ2M CPU35",
      "author": {
        "@type": "Person",
        "name": "xcyong89"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">Troubleshooting Bad Data Issue in Aveva Plant SCADA 2020 Communication with Omron CJ2M PLC using OMFINS Protocol</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>xcyong89</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">910</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">483</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello Everyone, I am working on utilizing Aveva Plant SCADA 2020 for communication with an Omron CJ2M CPU35 PLC using the OMFINS protocol. I am encountering an issue with Bad Data (Not #COM) during runtime. The configuration details of the SCADA and PLC are as follows:

Omron CJ2M CPU35 with built-in Ethernet CJ2M-EIP21 - Unit 0, Node 10, Network: 1, IP Address: 192.168.1.10, FINS/TCP Port: 9600. Declared Symbol: A_Test_AI1, INT, D501, Publication.

Aveva Plant SCADA 2020 configuration:
- Network Address: 192.168.1.1
- Server Name: IOServer1, Board Name: BOARD1, Board Type: TCP/IP, Address: 0
- Port Name: PORT1_BOARD1, Port Number: 1, Special Opt: -I192.168.1.10 -P9600 -T
- IODevice: Server Name: IOServer1, Name: Omron_PLC, Number: 1, Address: 1/10/0/V, Protocol: OMFINS3
- Automatic Refresh: TRUE
Declared Variable: A_TEST_AI1, Cluster1, Omron_PLC, INT, D501

Error message from Kernel: Error: Unit offline UINT 000c PORT1_BOARD1 Omron_PLC Error_in_CMD-3 16 Generic 000012 Driver 0000022 (0X00000016)

I am able to successfully ping 192.168.1.10 (PLC IP address) from the SCADA PC. I would appreciate any hints or guidance on how to resolve this issue. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Were you able to successfully make this work?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plcplcplcplc</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the cause of the "Bad Data" issue during runtime when communicating between Aveva Plant SCADA 2020 and Omron CJ2M PLC using OMFINS protocol?</h4>
<p class='text-muted'><strong>Answer:</strong> - The cause of the "Bad Data" issue could be related to a specific error message from the Kernel, indicating problems with unit offline, port configurations, or error in command.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the "Bad Data" issue in Aveva Plant SCADA 2020 communication with Omron CJ2M PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can troubleshoot the issue by checking the configuration details such as network addresses, server names, board types, port numbers, and protocol settings for both the SCADA and PLC. Verify the declared symbols and variables match correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are some common solutions to resolve the Bad Data issue in Aveva Plant SCADA communication with Omron CJ2M PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some common solutions include verifying network connectivity, ensuring correct IP addresses and port settings, checking for any communication errors in the Kernel logs, and ensuring proper declaration of symbols and variables.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I ensure proper communication setup between Aveva Plant SCADA 2020 and Omron CJ2M PLC using the OMFINS protocol?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure proper communication setup, double-check the network configurations, server names, board types, port numbers, and protocol settings in both the SCADA and PLC. Ensure that symbols and variables are correctly declared and match between the</p>
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

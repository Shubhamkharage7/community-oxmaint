
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="How to set up PM710 meter for MODBUS communication with pm2120 (Schneider) in Machine Edition? In PM710, the address 4000 is in INT format, while in pm2120, it is in FLOAT format at address 3000. How can I achieve this conversion using Machine Edition?">
    <meta name="keywords" content="pm710 meter, pm2120 (schneider), modbus communication, machine edition, address conversion guide, int format, float format, address 4000, address 3000, conversion process, schneider pm2120 setup, pm710 mod">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-pm710-meter-for-modbus-communication-with-pm2120-schneider-in-machine-edition-address-conversion-guide">
    <title>Setting up PM710 Meter for MODBUS Communication with PM2120 (Schneider) in Machine Edition: Address Conversion Guide | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting up PM710 Meter for MODBUS Communication with PM2120 (Schneider) in Machine Edition: Address Conversion Guide | Oxmaint Community">
    <meta property="og:description" content="How to set up PM710 meter for MODBUS communication with pm2120 (Schneider) in Machine Edition? In PM710, the address 4000 is in INT format, while in pm2120, it is in FLOAT format at address 3000. How can I achieve this conversion using Machine Edition?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-pm710-meter-for-modbus-communication-with-pm2120-schneider-in-machine-edition-address-conversion-guide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting up PM710 Meter for MODBUS Communication with PM2120 (Schneider) in Machine Edition: Address Conversion Guide | Oxmaint Community">
    <meta name="twitter:description" content="How to set up PM710 meter for MODBUS communication with pm2120 (Schneider) in Machine Edition? In PM710, the address 4000 is in INT format, while in pm2120, it is in FLOAT format at address 3000. How can I achieve this conversion using Machine Edition?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-pm710-meter-for-modbus-communication-with-pm2120-schneider-in-machine-edition-address-conversion-guide"
      },
      "headline": "Setting up PM710 Meter for MODBUS Communication with PM2120 (Schneider) in Machine Edition: Address Conversion Guide",
      "description": "How to set up PM710 meter for MODBUS communication with pm2120 (Schneider) in Machine Edition? In PM710, the address 4000 is in INT format, while in pm2120, it is in FLOAT format at address 3000. How can I achieve this conversion using Machine Edition?",
      "author": {
        "@type": "Person",
        "name": "rodrigoscheid"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-02",
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
                <h1 class="text-white">Setting up PM710 Meter for MODBUS Communication with PM2120 (Schneider) in Machine Edition: Address Conversion Guide</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rodrigoscheid</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">100</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">125</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>How to set up PM710 meter for MODBUS communication with pm2120 (Schneider) in Machine Edition? In PM710, the address 4000 is in INT format, while in pm2120, it is in FLOAT format at address 3000. How can I achieve this conversion using Machine Edition?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am struggling to grasp your intentions. To use the Rx3i as a Modbus master to retrieve data from multiple devices, you will need to configure two distinct Modbus commands. The image you provided suggests that you aim to extract 33 integer registers from Modbus device 15, beginning at address 40000, and store the acquired data at %R26600 - %R26632. To execute this, a COMREQ instruction should be linked with the CTR_R241 array. A similar arrangement for fetching REAL values from another Modbus device would involve utilizing Modbus function code 4, specifying the appropriate Modbus device number, starting address 30000, and a length of 66 due to REALs being 32-bit variables.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey expressed his struggle in understanding the desired outcome. If the goal is to utilize the Rx3i as a Modbus master to retrieve data from two devices, separate Modbus commands need to be established. The image provided indicates an attempt to retrieve 33 integer registers from Modbus device 15, starting at address 40000, and store the data at %R26600 - %R26632. An associated COMREQ instruction should be linked to the CTR_R241 array. For retrieving REAL values from a different Modbus device, Modbus function code 4 would be used with the appropriate device number, starting address 30000, and a length of 66 for 32-bit variables.
He serves as both a master and a slave to the RX3i through the Modbus map on PM710 (starting at address 4000 as INTEGER). In the case of the new PM2120 meter (starting at address 3000 and as FLOAT), the focus is on exploring how to carry out the transfer or conversion within this setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rodrigoscheid</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Boost your efficiency and productivity by utilizing PM 710 to PM 2120 software solutions!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rodrigoscheid</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that you are upgrading from a PM710, which outputs data in integers from 4xxxxx memory, to a PM2120, which outputs the same data as floating point from 3xxxxx memory. To accommodate this change, you may need to create a new REAL (floating point) array in the rx3i to store the data from the PM2120. It may be necessary to adjust the starting address and number of registers to ensure you are retrieving the same information as before. While it may seem like a lot of details to manage, setting up the new variables and COMREQ instruction for the PM2120 would likely be more efficient than trying to modify the existing ladder logic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I set up PM710 meter for MODBUS communication with PM2120 (Schneider) in Machine Edition?</h4>
<p class='text-muted'><strong>Answer:</strong> To set up the PM710 meter for MODBUS communication with PM2120 in Machine Edition, you need to address the conversion between INT format (PM710) and FLOAT format (PM2120) correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What is the difference between address formats in PM710 and PM2120 for MODBUS communication?</h4>
<p class='text-muted'><strong>Answer:</strong> In PM710, the address 4000 is in INT format, while in PM2120, it is in FLOAT format at address 3000. This difference in formats requires a conversion process to ensure proper communication between the two devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I achieve the conversion of address formats between PM710 and PM2120 in Machine Edition?</h4>
<p class='text-muted'><strong>Answer:</strong> To achieve the conversion of address formats between PM710 and PM2120 in Machine Edition, you may need to implement a conversion mechanism to translate INT format (PM710) to FLOAT format (PM2120) and vice versa.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Are there any specific guidelines or resources available for addressing conversion in MODBUS communication between PM710 and PM2120 using Machine Edition?</h4>
<p class='text-muted'><strong>Answer:</strong> Yes, you can refer to the address conversion guide provided by Schneider or consult the documentation for Machine Edition to understand the process of converting addresses between different formats for seamless</p>
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

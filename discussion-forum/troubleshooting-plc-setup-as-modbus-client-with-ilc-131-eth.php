
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am looking to set up a PLC as a Modbus client to connect to an Arduino acting as the Modbus server. However, I have encountered difficulties during the setup process. I have followed the manual Application Note AH EN MODBUS/TCP but am facing errors at step 5.1.12. The">
    <meta name="keywords" content="plc setup, modbus client, ilc 131 eth, troubleshooting, arduino modbus server, application note ah en modbus/tcp, errors in step 12, modbus registers, i/o configuration, mb_async">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-setup-as-modbus-client-with-ilc-131-eth">
    <title>Troubleshooting PLC Setup as Modbus Client with ILC 131 ETH | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PLC Setup as Modbus Client with ILC 131 ETH | Oxmaint Community">
    <meta property="og:description" content="I am looking to set up a PLC as a Modbus client to connect to an Arduino acting as the Modbus server. However, I have encountered difficulties during the setup process. I have followed the manual Application Note AH EN MODBUS/TCP but am facing errors at step 5.1.12. The">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-plc-setup-as-modbus-client-with-ilc-131-eth">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PLC Setup as Modbus Client with ILC 131 ETH | Oxmaint Community">
    <meta name="twitter:description" content="I am looking to set up a PLC as a Modbus client to connect to an Arduino acting as the Modbus server. However, I have encountered difficulties during the setup process. I have followed the manual Application Note AH EN MODBUS/TCP but am facing errors at step 5.1.12. The">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-plc-setup-as-modbus-client-with-ilc-131-eth"
      },
      "headline": "Troubleshooting PLC Setup as Modbus Client with ILC 131 ETH",
      "description": "I am looking to set up a PLC as a Modbus client to connect to an Arduino acting as the Modbus server. However, I have encountered difficulties during the setup process. I have followed the manual Application Note AH EN MODBUS/TCP but am facing errors at step 5.1.12. The",
      "author": {
        "@type": "Person",
        "name": "Snaperino"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-31",
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
                <h1 class="text-white">Troubleshooting PLC Setup as Modbus Client with ILC 131 ETH</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Snaperino</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">67</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">469</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am looking to set up a PLC as a Modbus client to connect to an Arduino acting as the Modbus server. However, I have encountered difficulties during the setup process. I have followed the manual Application Note AH EN MODBUS/TCP but am facing errors at step 5.1.12. The issue seems to be that the variables assigned to the Modbus registers are not included in the I/O configuration. Additionally, I am experiencing challenges using the MB_ASYNC_RW function block. My goal is to create a simple program where the PLC receives values from the Arduino through 3 input variables and sends back 6 variables (3 inputs and 3 outputs, all BOOL). Can you assist me in configuring the PLC as a Modbus client in this scenario? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you experimented with utilizing a modbus software on your PC to analyze communication protocols?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ojz0r</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing errors during the setup of a PLC as a Modbus client?</h4>
<p class='text-muted'><strong>Answer:</strong> - Errors during setup could be due to variables assigned to Modbus registers not being included in the I/O configuration, as mentioned in step 5.1.12. Double-check that the variables are properly configured.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I resolve challenges with the MB_ASYNC_RW function block when setting up a PLC as a Modbus client?</h4>
<p class='text-muted'><strong>Answer:</strong> - Ensure that the MB_ASYNC_RW function block is correctly implemented in your program. Check the syntax and parameters to make sure it aligns with the communication requirements between the PLC and Arduino.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I configure a PLC as a Modbus client to communicate with an Arduino acting as a Modbus server?</h4>
<p class='text-muted'><strong>Answer:</strong> - To configure the PLC as a Modbus client, refer to the manual Application Note AH EN MODBUS/TCP for guidance. Make sure to include the necessary variables in the I/O configuration and correctly use function blocks for communication.</p>
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

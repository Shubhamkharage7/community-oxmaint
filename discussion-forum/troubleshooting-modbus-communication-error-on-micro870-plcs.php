
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, everyone! I am currently working on establishing Modbus communication between two Micro870 PLCs using RS485 and 2x2080-SERIALISOL plug-in modules. PLC1 has been configured as the master with a Baud Rate of 19200, No Parity, and set to a Modbus Role of Master, while PLC2 is configured as the">
    <meta name="keywords" content="modbus communication error, micro870 plcs, rs485, 2080-serialisol plug-in modules, baud rate 19200, no parity, modbus role master, modbus role slave, error 130">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-communication-error-on-micro870-plcs">
    <title>Troubleshooting Modbus Communication Error on Micro870 PLCs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus Communication Error on Micro870 PLCs | Oxmaint Community">
    <meta property="og:description" content="Greetings, everyone! I am currently working on establishing Modbus communication between two Micro870 PLCs using RS485 and 2x2080-SERIALISOL plug-in modules. PLC1 has been configured as the master with a Baud Rate of 19200, No Parity, and set to a Modbus Role of Master, while PLC2 is configured as the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-communication-error-on-micro870-plcs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus Communication Error on Micro870 PLCs | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, everyone! I am currently working on establishing Modbus communication between two Micro870 PLCs using RS485 and 2x2080-SERIALISOL plug-in modules. PLC1 has been configured as the master with a Baud Rate of 19200, No Parity, and set to a Modbus Role of Master, while PLC2 is configured as the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-communication-error-on-micro870-plcs"
      },
      "headline": "Troubleshooting Modbus Communication Error on Micro870 PLCs",
      "description": "Greetings, everyone! I am currently working on establishing Modbus communication between two Micro870 PLCs using RS485 and 2x2080-SERIALISOL plug-in modules. PLC1 has been configured as the master with a Baud Rate of 19200, No Parity, and set to a Modbus Role of Master, while PLC2 is configured as the",
      "author": {
        "@type": "Person",
        "name": "pml_28"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-14",
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
                <h1 class="text-white">Troubleshooting Modbus Communication Error on Micro870 PLCs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>pml_28</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1782</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">408</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, everyone! I am currently working on establishing Modbus communication between two Micro870 PLCs using RS485 and 2x2080-SERIALISOL plug-in modules. 

PLC1 has been configured as the master with a Baud Rate of 19200, No Parity, and set to a Modbus Role of Master, while PLC2 is configured as the Slave with a Baud Rate of 19200, No Parity, and Modbus Role of Slave with a Slave ID of 1. 

Despite these settings, I am encountering Error 130 during the message exchange on PLC1. I have consulted Rockwell Automation documentation, which suggests that Error 130 could indicate an issue with the Modbus address. However, after trying various address variations such as 4000, 40000, and 400001, I have not been able to resolve the error. 

Could anyone provide insights or suggestions on what may be causing this issue? Your input would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>This issue often arises when no configuration has been established in the Modbus Address Table. This can lead to communication errors and hinder the operation of the system. It is essential to properly configure the Modbus Address Table to ensure seamless data exchange between devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, you are right. I successfully set up the Modbus mapping, and the communication functioned flawlessly. Initially, I mistakenly assumed that the modbus mapping was only effective when utilizing the controller's serial port. However, I stand corrected. Much appreciation for the insight. Matter resolved. Cheers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pml_28</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, could you please share what you mapped? I am experiencing a similar issue and would greatly appreciate your help. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>shesame</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, shesame. Please ensure to check the Modbus Mapping in the Controller section of the CCW software. It is crucial to set up a proper Modbus mapping to ensure the correct functioning of your Modbus communication.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pml_28</span></li>
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
<h4 class='text-dark'>FAQ: 1. What could be causing Error 130 during Modbus communication on the Micro870 PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - Error 130 during Modbus communication on the Micro870 PLCs could indicate an issue with the Modbus address settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How should I configure the Micro870 PLCs for Modbus communication using RS485 and 2x2080-SERIALISOL plug-in modules?</h4>
<p class='text-muted'><strong>Answer:</strong> - PLC1 should be configured as the Master with specific settings, while PLC2 should be configured as the Slave with different settings. Ensure correct Baud Rate, Parity, Modbus Role, and Slave ID configurations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are some common troubleshooting steps to resolve Modbus communication errors on Micro870 PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some common troubleshooting steps include verifying Modbus address settings, checking cable connections, ensuring proper termination, confirming correct communication module settings, and checking for any hardware issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. I have tried various Modbus address variations such as 4000, 40000, and 400001, but the error persists. What else can I do to troubleshoot this issue?</h4>
<p class='text-muted'><strong>Answer:</strong> - In addition to trying different Modbus address variations, you can double-check the configuration of both PLCs, verify the physical connections, review the Modbus communication protocol setup, and consider checking for any software or firmware updates that may address known issues.</p>
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

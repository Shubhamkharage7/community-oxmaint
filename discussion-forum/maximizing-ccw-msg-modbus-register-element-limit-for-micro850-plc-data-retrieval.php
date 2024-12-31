
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am working with a Micro850 PLC system to retrieve data from a DEPOLOX 400M water analyzer. I have successfully extracted the first two parameters (registers 100 and 115), but I am unable to access the last parameter I need, which is located at register 160. The Rockwell help">
    <meta name="keywords" content="maximizing ccw, msg_modbus register element limit, micro850 plc, data retrieval, depolox 400m water analyzer, extracting parameters, registers 100, 115, register 160, rockwell help page">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/maximizing-ccw-msg-modbus-register-element-limit-for-micro850-plc-data-retrieval">
    <title>Maximizing CCW Msg_Modbus Register Element Limit for Micro850 PLC Data Retrieval | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Maximizing CCW Msg_Modbus Register Element Limit for Micro850 PLC Data Retrieval | Oxmaint Community">
    <meta property="og:description" content="I am working with a Micro850 PLC system to retrieve data from a DEPOLOX 400M water analyzer. I have successfully extracted the first two parameters (registers 100 and 115), but I am unable to access the last parameter I need, which is located at register 160. The Rockwell help">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/maximizing-ccw-msg-modbus-register-element-limit-for-micro850-plc-data-retrieval">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Maximizing CCW Msg_Modbus Register Element Limit for Micro850 PLC Data Retrieval | Oxmaint Community">
    <meta name="twitter:description" content="I am working with a Micro850 PLC system to retrieve data from a DEPOLOX 400M water analyzer. I have successfully extracted the first two parameters (registers 100 and 115), but I am unable to access the last parameter I need, which is located at register 160. The Rockwell help">
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
        "@id": "https://community.oxmaint.com/discussion-forum/maximizing-ccw-msg-modbus-register-element-limit-for-micro850-plc-data-retrieval"
      },
      "headline": "Maximizing CCW Msg_Modbus Register Element Limit for Micro850 PLC Data Retrieval",
      "description": "I am working with a Micro850 PLC system to retrieve data from a DEPOLOX 400M water analyzer. I have successfully extracted the first two parameters (registers 100 and 115), but I am unable to access the last parameter I need, which is located at register 160. The Rockwell help",
      "author": {
        "@type": "Person",
        "name": "DocL"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-30",
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
                <h1 class="text-white">Maximizing CCW Msg_Modbus Register Element Limit for Micro850 PLC Data Retrieval</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>DocL</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">167</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">280</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am working with a Micro850 PLC system to retrieve data from a DEPOLOX 400M water analyzer. I have successfully extracted the first two parameters (registers 100 & 115), but I am unable to access the last parameter I need, which is located at register 160. The Rockwell help page states that there is a 125-word limit per MSG_MODBUS when reading registers. Is there a way to create a new MSG_MODBUS configuration that allows for an offset start or extends the word limit beyond 125?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To access data from specific Modbus addresses, simply utilize (2) Msg_Modbus function blocks. Each block can read up to 125 words starting from your designated address. Please note that a maximum of 16 Msg_Modbus blocks can be used simultaneously. You have the flexibility to specify the exact number of words to read, up to the maximum of 125. For example, if you require data from addresses 100 and 115, you can instruct the system to read in 6 words. In this scenario, the first address read would be 100 and the sixth address read would be 115.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Old Man</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The limit of 125 registers is not specific to the Micro850 PLC, but rather a requirement of the Modbus protocol. This limitation stems from the historical need to encode a count of bytes into a single byte, with 125 registers being equivalent to 250 bytes, close to the maximum value of 255. This limitation is also influenced by practical considerations related to data packet sizes in serial systems. While one might expect packet sizes to increase when transitioning from serial to Ethernet protocols like Modbus and AB DF1, this was not the case, except for potentially General Electric's SRTP. Ethernet/IP, specifically designed for Ethernet, allows for larger packet sizes, but much of this extra space is required for protocol overhead such as address segments, data typing, and tag names. In contrast, Modbus and DF1 have minimal overhead. Despite this limitation, modern protocols are able to handle complex data efficiently, making them a valuable choice for industrial applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Corsair</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I made a mistake with the address section on Facebook by setting it to 1 instead of 100. By adjusting it to 100, I was able to skip over parameters 1-99 and begin higher on the list. This adjustment proved to be beneficial in prioritizing certain tasks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DocL</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: Is there a way to extend the word limit per MSG_MODBUS beyond 125 in a Micro850 PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: According to the Rockwell help page, the word limit per MSG_MODBUS when reading registers in a Micro850 PLC system is 125. Currently, there is no built-in way to extend this limit.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Can offset start be used to access register 160 in a Micro850 PLC system when the word limit per MSG_MODBUS is 125?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Unfortunately, as of now, there is no direct support for offset start in MSG_MODBUS configurations for the Micro850 PLC system. You may need to explore alternative solutions or workarounds to access register 160.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: How can I retrieve data from register 160 of the DEPOLOX 400M water analyzer using a Micro850 PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Since the word limit per MSG_MODBUS is 125 in a Micro850 PLC system, accessing register 160 directly may not be possible. You might consider splitting the data retrieval process into multiple transactions or optimizing the data retrieval strategy to work within the 125-word limit constraint.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: Are there any recommendations for maximizing the CCW MSG_MODBUS register element limit for data retrieval in a Micro850 PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To maximize the use of the 125-word limit per MSG_MODBUS in a Micro</p>
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

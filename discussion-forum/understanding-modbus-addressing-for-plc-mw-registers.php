
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I recently came across information regarding Modbus addressing using %MW registers. I am currently working with a PLC with the address MW4513, while the machine constructor has specified the MODBUS address as 44514. When attempting to read the value using TCP Modbus, I noticed that the value matches">
    <meta name="keywords" content="modbus addressing, plc %mw registers, understanding modbus addressing, tcp modbus communication, modbus addressing discrepancies, node.js node-red modbus module, java application for">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-modbus-addressing-for-plc-mw-registers">
    <title>Understanding Modbus Addressing for PLC %MW Registers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding Modbus Addressing for PLC %MW Registers | Oxmaint Community">
    <meta property="og:description" content="Hello, I recently came across information regarding Modbus addressing using %MW registers. I am currently working with a PLC with the address MW4513, while the machine constructor has specified the MODBUS address as 44514. When attempting to read the value using TCP Modbus, I noticed that the value matches">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-modbus-addressing-for-plc-mw-registers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding Modbus Addressing for PLC %MW Registers | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I recently came across information regarding Modbus addressing using %MW registers. I am currently working with a PLC with the address MW4513, while the machine constructor has specified the MODBUS address as 44514. When attempting to read the value using TCP Modbus, I noticed that the value matches">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-modbus-addressing-for-plc-mw-registers"
      },
      "headline": "Understanding Modbus Addressing for PLC %MW Registers",
      "description": "Hello, I recently came across information regarding Modbus addressing using %MW registers. I am currently working with a PLC with the address MW4513, while the machine constructor has specified the MODBUS address as 44514. When attempting to read the value using TCP Modbus, I noticed that the value matches",
      "author": {
        "@type": "Person",
        "name": "marcolino76"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-16",
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
                <h1 class="text-white">Understanding Modbus Addressing for PLC %MW Registers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>marcolino76</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">8075</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">201</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I recently came across information regarding Modbus addressing using %MW registers. I am currently working with a PLC with the address MW4513, while the machine constructor has specified the MODBUS address as 44514. When attempting to read the value using TCP Modbus, I noticed that the value matches the address 4513 Modbus (1st byte), which is puzzling. Additionally, I am trying to set the 7th bit of %MW10100 from my supervisor software. However, when I attempt to use an OR operation on the Modbus addresses 10100 or 50101 (10100 + 40001), it does not work as expected.

I have been experimenting with reading and writing %MW registers in a prototype scenario using the Node.js Node-RED Modbus Module. Eventually, I plan to implement a Java application to address this issue permanently. Any assistance would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response! %MW10100 is located in the extended memory area of the Modbus protocol. Originally, Modbus only had 9999 registers numbered from 40001 to 49999. However, with extended addressing, numbering starts at 10000 and goes beyond. It's important to note that Modbus addresses only have 0X, 1X, 3X, and 4X starting addresses. For example, %MW10100 can be found at Modbus address 410099 on Schneider CPU. Similarly, %MW1100 is at address 41099 or 401099 on extended addressing. Addresses from %MW0 to %MW9999 can have 5 or 6 numbers in Modbus, while %MW10000 and above always have 6 numbers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>marcolino76</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is commonly referred to as 5-digit addressing in the tech world, where the maximum register value is (4)9999. Extended addressing, known as 6-digit addressing, allows for a maximum register value of (4)65536. The same concept applies to other memory area designations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting up Schneider PLC for Modbus addressing, it is important to understand the different address formats. In general, the 0x format is used for %Mx bits (both read and write functions), while 1x is typically for %Mx bits that are only for reading. The 3x format is reserved for %MWx words that are only for reading, and the 4x format is for %MW words that can be both read and written.

However, it is worth noting that on some PLC models, the 1x format may actually be used for discrete inputs (%Ix), while the 3x format may point to the analog input area (%IWx).

Additionally, M340 PLCs come equipped with system words that can be utilized to adjust the Modbus addressing offsets from the %M and %MWx addresses. By default, the offset is set at 0, resulting in a difference of 1 between the Modbus address and the %M and %MW areas.

This discrepancy is due to the fact that Modbus addressing begins at 1, while the %M and %MW areas start from %M0 and %MW0, respectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to set a Modbus offset of 1 on M340 or M580 PLCs, you will need to establish four variables using the addresses %SW138, %SW139, %SW140, and %SW141. Ensure that the value of each variable is set to "1" in order to implement the offset successfully.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Thudman</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is there a discrepancy between the PLC address MW4513 and the Modbus address specified as 44514?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancy in addresses may be due to how the Modbus addressing is configured or interpreted. Double-check the addressing scheme and ensure proper translation between PLC addresses and Modbus addresses.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why does the value read using TCP Modbus match the Modbus address 4513 (1st byte) instead of the expected 44514?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This could be related to how the Modbus addressing is being handled in the communication setup or software. Verify the Modbus addressing and data interpretation to ensure correct data retrieval.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why is the OR operation not working as expected when trying to set the 7th bit of %MW10100 using Modbus addresses 10100 or 50101?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue with the OR operation could be due to how the Modbus addresses are being mapped or manipulated in the software. Ensure that the correct Modbus addresses are being used and that the bitwise operation is implemented correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What tools or libraries can be used for experimenting with reading and writing %MW registers in a prototype scenario, like in Node.js Node-RED Modbus Module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Tools like Node.js Node-RED Modbus Module can be utilized for experimentation with Modbus communication in a prototype setting. Additionally, libraries for Java applications can be</p>
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

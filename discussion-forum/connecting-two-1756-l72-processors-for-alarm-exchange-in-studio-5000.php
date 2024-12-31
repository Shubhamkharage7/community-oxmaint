
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently in the process of establishing a connection between two 1756-L72 processors for the purpose of exchanging alarms. One processor is running on rev 26.13 while the other is on rev 32.11. They were initially on different networks but have now been linked at a central point">
    <meta name="keywords" content="1756-l72 processors, alarm exchange, studio 5000, rev 13, rev 11, network connection, ip address adjustment, central point, control room, en2t module, stratix switch, linx">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/connecting-two-1756-l72-processors-for-alarm-exchange-in-studio-5000">
    <title>Connecting Two 1756-L72 Processors for Alarm Exchange in Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Connecting Two 1756-L72 Processors for Alarm Exchange in Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="I am currently in the process of establishing a connection between two 1756-L72 processors for the purpose of exchanging alarms. One processor is running on rev 26.13 while the other is on rev 32.11. They were initially on different networks but have now been linked at a central point">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/connecting-two-1756-l72-processors-for-alarm-exchange-in-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Connecting Two 1756-L72 Processors for Alarm Exchange in Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="I am currently in the process of establishing a connection between two 1756-L72 processors for the purpose of exchanging alarms. One processor is running on rev 26.13 while the other is on rev 32.11. They were initially on different networks but have now been linked at a central point">
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
        "@id": "https://community.oxmaint.com/discussion-forum/connecting-two-1756-l72-processors-for-alarm-exchange-in-studio-5000"
      },
      "headline": "Connecting Two 1756-L72 Processors for Alarm Exchange in Studio 5000",
      "description": "I am currently in the process of establishing a connection between two 1756-L72 processors for the purpose of exchanging alarms. One processor is running on rev 26.13 while the other is on rev 32.11. They were initially on different networks but have now been linked at a central point",
      "author": {
        "@type": "Person",
        "name": "smm1099"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-08",
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
                <h1 class="text-white">Connecting Two 1756-L72 Processors for Alarm Exchange in Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>smm1099</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">179</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">423</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently in the process of establishing a connection between two 1756-L72 processors for the purpose of exchanging alarms. One processor is running on rev 26.13 while the other is on rev 32.11. They were initially on different networks but have now been linked at a central point within the control room. By adjusting the IP address, it is possible to access both processors from a single PC. To ensure they are on the same network, I added an EN2T to one of the processors and connected it to an available port on the nearby Stratix switch.

While using Linx, I can observe the connection between the processors through their respective IP configurations. However, I am facing difficulties in adding them to the controller tree in Studio as they are not communicating effectively. In the 26.13 project, I encountered a problem where the revision required to add the processor to the controller tree was missing. In the 32.11 project, the processor does not appear when attempting to discover devices.

It is essential to take note that both versions of the software are running on the same computer within the control room, making it a straightforward task to adjust the IP addresses for connectivity. My goal is to streamline the project path to avoid changing the IPs repeatedly in the future. If anyone has insights on what could be missing in this setup, I would greatly appreciate your input.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are able to successfully ping both devices using the same ethernet connection, it indicates that there is data routing between them. You should be able to manually establish the producer in the PLC's tree that is receiving the data, even if it is not an exact match in terms of PLC type or firmware. What truly matters is the structure of communication, specifically how the data is being transmitted to the PLC - whether through the CPU ports or via the network card. Browsing is not essential as this process can be carried out offline without the need for a network connection.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geoff White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In terms of data routing between devices, it is crucial to ensure that both can be pinged from the same ethernet connection. Manually creating the producer in the PLC tree that is receiving the data is key, regardless of an exact match in PLC type or firmware. The focus should be on the structure of communication and how the data reaches the PLC, whether through CPU ports or a network card. Browsing is not necessary as this can be done offline with no network connection. Understanding the system setup, such as having separate software instances instead of versions through studio, is essential for successful connectivity. Connecting to the processor through administrator and Windows XP sp3 may require specific configurations, but ensuring the correct revisions and communication protocols are in place is paramount for smooth operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>smm1099</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the challenges faced when connecting two 1756-L72 processors for alarm exchange in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Some challenges include difficulties in adding the processors to the controller tree in Studio, communication issues between processors, missing revisions required for adding processors, and processors not appearing during device discovery.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I ensure effective communication between two 1756-L72 processors in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To ensure effective communication, ensure both processors are on the same network, adjust IP addresses for connectivity, add an EN2T module to one of the processors and connect it to a Stratix switch, and verify the IP configurations using Linx.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can be taken to streamline the project path when connecting two 1756-L72 processors in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To streamline the project path, consider running both software versions on the same computer, adjust IP addresses to establish connectivity, and troubleshoot any issues with adding processors to the controller tree or during device discovery.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What could be missing in the setup when trying to connect two 1756-L72 processors for alarm exchange in Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Possible missing elements could include incorrect IP configurations, communication issues between processors, missing software revisions required for adding processors to the controller tree, or connectivity problems with the network setup.</p>
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

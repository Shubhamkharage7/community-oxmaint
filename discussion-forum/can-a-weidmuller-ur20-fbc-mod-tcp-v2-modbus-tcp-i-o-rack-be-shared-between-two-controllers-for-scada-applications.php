
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently came across a scenario that got me thinking... Do any of you have any insights or advice on this topic? One of my clients is utilizing a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack for a SCADA application, with a secondary Ethernet card in a PC. An individual">
    <meta name="keywords" content="weidmuller ur20-fbc-mod-tcp-v2, modbus tcp i/o rack, shared between two controllers, scada applications, ethernet card, analog values, ignition edge, read-only mode, sharing i/o rack">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/can-a-weidmuller-ur20-fbc-mod-tcp-v2-modbus-tcp-i-o-rack-be-shared-between-two-controllers-for-scada-applications">
    <title>Can a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack be shared between two controllers for SCADA applications? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Can a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack be shared between two controllers for SCADA applications? | Oxmaint Community">
    <meta property="og:description" content="I recently came across a scenario that got me thinking... Do any of you have any insights or advice on this topic? One of my clients is utilizing a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack for a SCADA application, with a secondary Ethernet card in a PC. An individual">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/can-a-weidmuller-ur20-fbc-mod-tcp-v2-modbus-tcp-i-o-rack-be-shared-between-two-controllers-for-scada-applications">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Can a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack be shared between two controllers for SCADA applications? | Oxmaint Community">
    <meta name="twitter:description" content="I recently came across a scenario that got me thinking... Do any of you have any insights or advice on this topic? One of my clients is utilizing a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack for a SCADA application, with a secondary Ethernet card in a PC. An individual">
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
        "@id": "https://community.oxmaint.com/discussion-forum/can-a-weidmuller-ur20-fbc-mod-tcp-v2-modbus-tcp-i-o-rack-be-shared-between-two-controllers-for-scada-applications"
      },
      "headline": "Can a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack be shared between two controllers for SCADA applications?",
      "description": "I recently came across a scenario that got me thinking... Do any of you have any insights or advice on this topic? One of my clients is utilizing a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack for a SCADA application, with a secondary Ethernet card in a PC. An individual",
      "author": {
        "@type": "Person",
        "name": "AutomationTechBrian"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-27",
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
                <h1 class="text-white">Can a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack be shared between two controllers for SCADA applications?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">307</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">395</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently came across a scenario that got me thinking... Do any of you have any insights or advice on this topic? One of my clients is utilizing a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack for a SCADA application, with a secondary Ethernet card in a PC. An individual in the client's office needs to access a couple of analog values from the I/O rack for around 20 minutes daily. Initially, I considered utilizing Ignition Edge for this purpose. However, I have concerns about whether the I/O rack can be shared between two controllers, specifically if it can be set to read-only mode for Ignition. What are your thoughts on this? Do you believe it is feasible to share this I/O rack between controllers in this manner?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The IO module functions as a modbus TCP server, able to communicate with a maximum of 64 clients. It is ideal for input operations, but handling output commands with multiple clients can introduce complexity. In such cases, managing which clients the IO module responds to becomes essential.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For a more streamlined approach, consider sending this data to Ignition. You can either create a 'read-only' Ignition instance that pulls data from the primary instance, or use the same instance for both and implement authentication to control access. This setup allows front office staff to log into an accessible HMI while system operators access the full HMI interface. Experience the convenience of centralizing data management and enhancing user control with Ignition.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to idiotsectant, the IO module functions as a modbus TCP server and can communicate with up to 64 clients. This makes it suitable for use on the 'I' side of I/O. I found this information useful and I look forward to delving deeper into it on my next visit to the site.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomationTechBrian</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can a Weidmuller UR20-FBC-MOD-TCP-V2 Modbus TCP I/O rack be shared between two controllers for SCADA applications?</h4>
<p class='text-muted'><strong>Answer:</strong> - Sharing the I/O rack between two controllers is possible, but it may require configuration adjustments for simultaneous access. It's recommended to consult the product manual or contact the manufacturer for specific guidance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to set the I/O rack in read-only mode for Ignition Edge?</h4>
<p class='text-muted'><strong>Answer:</strong> - Depending on the capabilities of the I/O rack and the compatibility with Ignition Edge, setting the rack to read-only mode may be achievable. You may need to explore the configuration options available for the I/O rack and the SCADA software being used.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can analog values from the I/O rack be accessed by an individual in the client's office?</h4>
<p class='text-muted'><strong>Answer:</strong> - To access analog values from the I/O rack, consider using a secondary Ethernet card in a PC or integrating the necessary communication protocols between the I/O rack and the SCADA system. It's essential to ensure proper permissions and security measures are in place for data access.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are the considerations when sharing an I/O rack between multiple controllers in a SCADA application?</h4>
<p class='text-muted'><strong>Answer:</strong> - When sharing an I/O rack between controllers, factors such as data integrity, communication protocols, access control, and system performance need to be carefully evaluated. It's advisable to plan the setup thoroughly and test for compatibility and reliability before implementation.</p>
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

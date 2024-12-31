
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The PLC (S7-1200) and HMI (KTP-1200 Basic) have been successfully delivered to the customers site. To facilitate offline updates to the code, I am attempting to utilize PLCSIM. However, I am currently facing a challenge as I no longer have access to the HMI. Is there a built-in HMI">
    <meta name="keywords" content="tia portal v18, plc sim, offline code updates, s7-1200, hmi integration, ktp-1200 basic, plcsim, hmi simulator, virtual hmi interface, button clicks, hmi interaction">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/tia-portal-v18-utilizing-plc-sim-for-offline-code-updates-in-s7-1200-and-hmi-ktp-1200-basic-integration">
    <title>TIA Portal v18: Utilizing PLC SIM for Offline Code Updates in S7-1200 and HMI (KTP-1200 Basic) Integration. | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="TIA Portal v18: Utilizing PLC SIM for Offline Code Updates in S7-1200 and HMI (KTP-1200 Basic) Integration. | Oxmaint Community">
    <meta property="og:description" content="The PLC (S7-1200) and HMI (KTP-1200 Basic) have been successfully delivered to the customers site. To facilitate offline updates to the code, I am attempting to utilize PLCSIM. However, I am currently facing a challenge as I no longer have access to the HMI. Is there a built-in HMI">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/tia-portal-v18-utilizing-plc-sim-for-offline-code-updates-in-s7-1200-and-hmi-ktp-1200-basic-integration">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TIA Portal v18: Utilizing PLC SIM for Offline Code Updates in S7-1200 and HMI (KTP-1200 Basic) Integration. | Oxmaint Community">
    <meta name="twitter:description" content="The PLC (S7-1200) and HMI (KTP-1200 Basic) have been successfully delivered to the customers site. To facilitate offline updates to the code, I am attempting to utilize PLCSIM. However, I am currently facing a challenge as I no longer have access to the HMI. Is there a built-in HMI">
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
        "@id": "https://community.oxmaint.com/discussion-forum/tia-portal-v18-utilizing-plc-sim-for-offline-code-updates-in-s7-1200-and-hmi-ktp-1200-basic-integration"
      },
      "headline": "TIA Portal v18: Utilizing PLC SIM for Offline Code Updates in S7-1200 and HMI (KTP-1200 Basic) Integration.",
      "description": "The PLC (S7-1200) and HMI (KTP-1200 Basic) have been successfully delivered to the customers site. To facilitate offline updates to the code, I am attempting to utilize PLCSIM. However, I am currently facing a challenge as I no longer have access to the HMI. Is there a built-in HMI",
      "author": {
        "@type": "Person",
        "name": "Mas01"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-23",
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
                <h1 class="text-white">TIA Portal v18: Utilizing PLC SIM for Offline Code Updates in S7-1200 and HMI (KTP-1200 Basic) Integration.</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">377</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">368</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>The PLC (S7-1200) and HMI (KTP-1200 Basic) have been successfully delivered to the customer's site. To facilitate offline updates to the code, I am attempting to utilize PLCSIM. However, I am currently facing a challenge as I no longer have access to the HMI. Is there a built-in HMI simulator available in TIA Portal? In other words, can I simulate button clicks on a virtual HMI interface using a mouse, similar to interacting with a physical HMI? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To initiate the simulation, first click on the HMI folder and then select "Online" from the toolbar. Next, navigate to the Simulation option and click on "Start" to begin. This process is essential for running a simulation successfully.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, the WinCC Advanced RT is utilized to run Basic/Comfort/Adv projects. It was offered as an installation option with TIA, making it easy to automatically install the HMI Simulation/Runtime. While there are some nuances between PC-based simulation and an actual panel, the simulation is quite effective. Regional differences, such as time format, currency symbol, and language, are managed slightly differently. Depending on your Windows settings, text scaling issues may arise, but the testing logic remains solid. Periodically, a license reminder window may pop up, but you can disregard it during simulation tests.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to be aware of the differences as mentioned by mk42 in using VBA scripts in an HMI. Make sure to understand the distinctions between WinCE commands and regular Windows commands, as the simulator may not interpret CE specific commands correctly and may result in errors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rob...</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>mk42 pointed out that periodically, a nagging license window will appear, but it can be disregarded for the purpose of simulation. The term "nag window" is a concise description that resonates with me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mas01</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Can I use PLCSIM for offline code updates in S7-1200 and HMI integration in TIA Portal v18?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, you can use PLCSIM in TIA Portal v18 to facilitate offline updates to the code for S7-1200 PLC and HMI integration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is there a built-in HMI simulator available in TIA Portal for simulating HMI interactions without physical access?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: TIA Portal does not have a built-in HMI simulator, but you can simulate button clicks on a virtual HMI interface using a mouse for interacting with the HMI without physical access.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I simulate button clicks on a virtual HMI interface in TIA Portal v18 for code updates?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can simulate button clicks on a virtual HMI interface in TIA Portal v18 by using mouse interactions to replicate the functionality of interacting with a physical HMI.</p>
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

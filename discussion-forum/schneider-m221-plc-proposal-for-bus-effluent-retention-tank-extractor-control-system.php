
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am in the process of creating a proposal for a control system for a bus effluent retention tank extractor. The system consists of 8 modules in the field and 1 plant room. Each module has 2 operating modes: 1. Pressing the Extract Only button closes a">
    <meta name="keywords" content="schneider m221 plc, bus effluent retention tank, extractor control system, module operating modes, vfc, standalone pump set, extraction valve, rinse valve, back flushing, modbus protocol, distributed io, extensive">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/schneider-m221-plc-proposal-for-bus-effluent-retention-tank-extractor-control-system">
    <title>Schneider M221 PLC Proposal for Bus Effluent Retention Tank Extractor Control System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Schneider M221 PLC Proposal for Bus Effluent Retention Tank Extractor Control System | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am in the process of creating a proposal for a control system for a bus effluent retention tank extractor. The system consists of 8 modules in the field and 1 plant room. Each module has 2 operating modes: 1. Pressing the Extract Only button closes a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/schneider-m221-plc-proposal-for-bus-effluent-retention-tank-extractor-control-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Schneider M221 PLC Proposal for Bus Effluent Retention Tank Extractor Control System | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am in the process of creating a proposal for a control system for a bus effluent retention tank extractor. The system consists of 8 modules in the field and 1 plant room. Each module has 2 operating modes: 1. Pressing the Extract Only button closes a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/schneider-m221-plc-proposal-for-bus-effluent-retention-tank-extractor-control-system"
      },
      "headline": "Schneider M221 PLC Proposal for Bus Effluent Retention Tank Extractor Control System",
      "description": "Hello everyone, I am in the process of creating a proposal for a control system for a bus effluent retention tank extractor. The system consists of 8 modules in the field and 1 plant room. Each module has 2 operating modes: 1. Pressing the Extract Only button closes a",
      "author": {
        "@type": "Person",
        "name": "Jordan.Welton"
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
                <h1 class="text-white">Schneider M221 PLC Proposal for Bus Effluent Retention Tank Extractor Control System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jordan.Welton</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">154</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">362</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am in the process of creating a proposal for a control system for a bus effluent retention tank extractor. The system consists of 8 modules in the field and 1 plant room. Each module has 2 operating modes: 1. Pressing the Extract Only button closes a VFC in the main panel, activating a standalone pump set, and opening the module extraction valve for a set time period when the vacuum reaches the necessary level. 2. Pressing the Extraction & Rinse button follows the same process, but also opens a separate rinse valve in the module for back flushing the tank before another extraction cycle.

For the proposal, I am considering using 1 M221 PLC in the plant room that communicates with the 8 M221's in the field via the MODBUS protocol as distributed IO. This approach avoids the need for extensive cabling to each module (approximately 300m to the end one) and eliminates the need for a main control panel with numerous terminals and expansion modules on the M221.

Has anyone implemented a similar system before? If so, I would greatly appreciate any advice on where to begin. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Explore their product selector tool: Customize your control system with a Programmable Logic Controller (PLC) and I/O modules. Easily select your PLC and PAC solution in just three steps using the Modicon PLC Configurator online. Configuring your PLC has never been quicker. Visit www.se.com to get started.

Upon reviewing the options, you'll notice that they suggest using a TM3 bus coupler that can connect via serial or Ethernet. Are there reasons for placing a PLC in each module? Perhaps the module has a standalone local function that needs to operate even when the network is down. Or maybe you prefer to have a more advanced PLC in the main panel instead.

The setup you're outlining could function by utilizing READ_VAR and WRITE_VAR function blocks over your network (Modbus TCP or RS485 serial) and addressing the IO indirectly through %M and %MW with some programming. It could also involve accessing the IO points (%I, %Q, %IW, %QW?) in a similar manner.

Please note that while Machine Expert Basic may serve your needs, upgrading to Machine Expert (a Schneider Codesys system) may not seamlessly translate any solutions you develop here. Consider opting for the Ethernet models whenever available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>modiconguy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the proposed control system for the bus effluent retention tank extractor?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The proposed control system consists of 8 modules in the field and 1 plant room. Each module has 2 operating modes: Extract Only and Extraction & Rinse.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How does the Extract Only mode function in the control system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In the Extract Only mode, pressing the button closes a VFC in the main panel, activates a standalone pump set, and opens the module extraction valve for a set time period when the vacuum reaches the necessary level.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What additional functionality does the Extraction & Rinse mode provide in the control system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In the Extraction & Rinse mode, pressing the button follows the Extract Only process but also opens a separate rinse valve in the module for back flushing the tank before another extraction cycle.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What PLC model is being considered for the control system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The proposal includes using 1 M221 PLC in the plant room that communicates with the 8 M221's in the field via the MODBUS protocol as distributed IO.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5.  What are the advantages of using the proposed PLC setup for the control system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Using the M221 PLC setup eliminates the need for extensive cabling to each module and a main control panel with numerous terminals and expansion modules, providing a more streamlined solution.</p>
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

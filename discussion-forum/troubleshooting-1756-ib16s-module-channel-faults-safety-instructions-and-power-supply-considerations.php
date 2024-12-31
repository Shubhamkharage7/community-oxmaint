
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently installed a programmed system with two IB16S modules experiencing random channel faults in a 1756 rack. These modules are housed in a series C chassis and are not located near controllers or communication modules. When they fail, all connected channels display an internal fault, causing safety instructions">
    <meta name="keywords" content="1756-ib16s module channel faults, troubleshooting ib16s module faults, safety instructions for ib16s module, power supply considerations for ib16s module, internal fault code">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-1756-ib16s-module-channel-faults-safety-instructions-and-power-supply-considerations">
    <title>Troubleshooting 1756-IB16S Module Channel Faults: Safety Instructions and Power Supply Considerations | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting 1756-IB16S Module Channel Faults: Safety Instructions and Power Supply Considerations | Oxmaint Community">
    <meta property="og:description" content="I recently installed a programmed system with two IB16S modules experiencing random channel faults in a 1756 rack. These modules are housed in a series C chassis and are not located near controllers or communication modules. When they fail, all connected channels display an internal fault, causing safety instructions">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-1756-ib16s-module-channel-faults-safety-instructions-and-power-supply-considerations">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting 1756-IB16S Module Channel Faults: Safety Instructions and Power Supply Considerations | Oxmaint Community">
    <meta name="twitter:description" content="I recently installed a programmed system with two IB16S modules experiencing random channel faults in a 1756 rack. These modules are housed in a series C chassis and are not located near controllers or communication modules. When they fail, all connected channels display an internal fault, causing safety instructions">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-1756-ib16s-module-channel-faults-safety-instructions-and-power-supply-considerations"
      },
      "headline": "Troubleshooting 1756-IB16S Module Channel Faults: Safety Instructions and Power Supply Considerations",
      "description": "I recently installed a programmed system with two IB16S modules experiencing random channel faults in a 1756 rack. These modules are housed in a series C chassis and are not located near controllers or communication modules. When they fail, all connected channels display an internal fault, causing safety instructions",
      "author": {
        "@type": "Person",
        "name": "robertmee"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-04",
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
                <h1 class="text-white">Troubleshooting 1756-IB16S Module Channel Faults: Safety Instructions and Power Supply Considerations</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">239</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">485</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently installed a programmed system with two IB16S modules experiencing random channel faults in a 1756 rack. These modules are housed in a series C chassis and are not located near controllers or communication modules. When they fail, all connected channels display an internal fault, causing safety instructions to display code 32, indicating a loss of connection. The majority of channels show a solid red indicator, which signifies an internal fault according to the manual. Resetting the channel requires a power cycle by removing and reseating the module. Additionally, standard inputs in the rack may drop out when these faults occur. It is noted in the manual the importance of using a SELV rated power supply, and considering this system was a PLC5 backplane retrofit with a 2000s vintage linear 300W 24vdc supply powering everything in the cabinet, including modules, PLC, field inputs, and outputs, it may be the cause of the issue. Rockwell tech support suggested swapping the power supply, although a standard power cycle typically wouldn't result in multiple safety modules hard faulting. The recurring issue has happened twice in 24 hours, and further diagnostic checks will be performed if it reoccurs. All safety configurations are set to pulse, and changing to safety mode may be considered to eliminate potential interference from external factors.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the current method for wiring these components in the field?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the standard procedure, each input goes through its designated test point using NC/NOHC contacts found on push/pull 800T emergency stop buttons or 440E-L lifeline pull cables.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was referring to the wiring of the cards in connection with the power supply and any other components they come into contact with.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A single 24vdc, 12A linear power supply is connected to all devices requiring 24vdc power, including the IB16S, OBV8S, and field input devices for IB16 and OB16 modules. The rack consists of 4 IB16s, 2 OBV8S, 2 IB16S, 2 OB16, and 1 EN2TR. This setup was not my original design but was implemented by the electrical installer before I arrived to program the system. Typically, I prefer to use the AB 1606-XL power supply for similar installations, but in this particular case, I had to work with the existing setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the random channel faults in the IB16S modules installed in the 1756 rack?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The random channel faults in the IB16S modules could be caused by an internal fault signified by a solid red indicator, which may be related to power supply considerations and safety instructions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve the internal faults in the IB16S modules displaying code 32 and causing a loss of connection?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Resetting the channels by performing a power cycle, which involves removing and reseating the module, can help resolve the internal faults and loss of connection issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why is it important to use a SELV rated power supply in the system housing the IB16S modules?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Using a SELV rated power supply is important as it ensures safety extra-low voltage operation and can potentially prevent issues such as internal faults in the modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What steps are recommended to troubleshoot and potentially resolve the recurring channel faults in the IB16S modules?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Diagnostic checks and potentially swapping the power supply, as suggested by Rockwell tech support, are recommended steps to troubleshoot and resolve the recurring channel faults in the IB16S modules.</p>
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

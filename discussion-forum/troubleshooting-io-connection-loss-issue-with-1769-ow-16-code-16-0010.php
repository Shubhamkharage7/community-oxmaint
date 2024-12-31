
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I was experiencing a recurring issue with my 1769-L23-E PLC and its IO setup, including embedded inputs and outputs, 1769-IQ32, and 1769-OW16. Every 3-6 hours, a major fault for IO connection loss would occur. Despite replacing the end cap, IQ32, and OW-16, the problem persisted. Even after trying different">
    <meta name="keywords" content="1769-l23-e plc troubleshooting, io connection loss issue, 1769-ow16 fault, plc io setup problems, 1769-iq32 end cap replacement, res">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-io-connection-loss-issue-with-1769-ow-16-code-16-0010">
    <title>Troubleshooting IO Connection Loss Issue with 1769 OW-16: Code 16#0010 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting IO Connection Loss Issue with 1769 OW-16: Code 16#0010 | Oxmaint Community">
    <meta property="og:description" content="I was experiencing a recurring issue with my 1769-L23-E PLC and its IO setup, including embedded inputs and outputs, 1769-IQ32, and 1769-OW16. Every 3-6 hours, a major fault for IO connection loss would occur. Despite replacing the end cap, IQ32, and OW-16, the problem persisted. Even after trying different">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-io-connection-loss-issue-with-1769-ow-16-code-16-0010">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting IO Connection Loss Issue with 1769 OW-16: Code 16#0010 | Oxmaint Community">
    <meta name="twitter:description" content="I was experiencing a recurring issue with my 1769-L23-E PLC and its IO setup, including embedded inputs and outputs, 1769-IQ32, and 1769-OW16. Every 3-6 hours, a major fault for IO connection loss would occur. Despite replacing the end cap, IQ32, and OW-16, the problem persisted. Even after trying different">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-io-connection-loss-issue-with-1769-ow-16-code-16-0010"
      },
      "headline": "Troubleshooting IO Connection Loss Issue with 1769 OW-16: Code 16#0010",
      "description": "I was experiencing a recurring issue with my 1769-L23-E PLC and its IO setup, including embedded inputs and outputs, 1769-IQ32, and 1769-OW16. Every 3-6 hours, a major fault for IO connection loss would occur. Despite replacing the end cap, IQ32, and OW-16, the problem persisted. Even after trying different",
      "author": {
        "@type": "Person",
        "name": "patrickmoneyy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-10",
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
                <h1 class="text-white">Troubleshooting IO Connection Loss Issue with 1769 OW-16: Code 16#0010</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">987</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">476</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I was experiencing a recurring issue with my 1769-L23-E PLC and its IO setup, including embedded inputs and outputs, 1769-IQ32, and 1769-OW16. Every 3-6 hours, a major fault for IO connection loss would occur. Despite replacing the end cap, IQ32, and OW-16, the problem persisted. Even after trying different end caps and confirming a stable 24.4V voltage, the OW-16 continued to fault. I then replaced the PLC with a L24ER-QB1B and installed a new end cap, but the issue remained. The fault seemed to only affect the OW-16, raising questions about the cause. With all components now new, I ensured a solid ground for the DIN rail and monitored voltage fluctuations while the system was operational. Additionally, buzzing from the 120v contactors connected to the OW-16 raised concerns about possible EMF interference. Any insights on resolving this perplexing issue would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>"Hello! I believe the answer you're looking for can be found in the post by Ken Roach. Check it out here: https://www.plctalk.net/qanda/showpost.php?p=509698&postcount=7"</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I came across that information previously. It appears that the AENTR Ethernet module could be applicable in this scenario, as it features a webpage and customizable chassis size. However, it seems that my PLC does not have the functionality to configure chassis size. If I am mistaken, please feel free to correct me as I am feeling frustrated with this situation. Additionally, I discovered that entering the IP address into a web browser reveals a webpage with diagnostic data, but no other configuration options are available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to mention that the system will continue running normally for a period before experiencing a fault. When dealing with the L23E model, simply clearing the fault and switching it back to run mode will reset the system. However, with the L24ER model, the module remains faulted and requires a power cycle for it to reset. This discrepancy is believed to be caused by the different behaviors of V19 and V33.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you experimented with RSLinx software for Rockwell remote IO devices? When accessing the device properties in RSLinx, you may come across a property page with a specific tab where you are able to adjust the chassis size settings on some Rockwell remote IO modules.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AlfredoQuintero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The L24ER-QB1B does not require or support setting the chassis size, unlike the L19ER-BB1B. When creating a project for the L19, you are prompted to input the number of expansion modules, and the expansion I/O folder in the Controller Organizer allows for editing later. The L24, however, does not offer this feature. It is assumed that the chassis size is determined by the configured modules. The machine running for an extended period implies that the issue is not a simple configuration error. Ensure that all inductive loads from relay output modules are suppressed to prevent potential faults, especially on MicroLogix systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate the feedback. The relay output consists mainly of contactors without any suppression. If the problem persists before my next shift, I will certainly investigate further. I have noticed significant buzzing from some of the contactors when they are energized.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During troubleshooting, we encountered a recurring issue where a controller, possibly an L33ER, would experience an IO connection loss to a relay output card every few hours. Even after replacing the card, the problem persisted. It turned out that the root cause was a loose or unreliable ground wire in a terminal block. Worth noting, the system would operate normally for some time before showing the fault again, and simply resetting it by clearing the fault and switching it back to run mode would temporarily resolve the issue. This scenario serves as a reminder that thorough diagnostics and attention to detail are crucial in maintaining efficient system operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>WhinnieThePooh</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>WhinnieThePooh noted that the issue was likely caused by a loose or flaky ground wire in a terminal block. It seems that tightening the ground screws may have resolved the problem, as it hasn't recurred in a day. The last technician to work on it mentioned adjusting the ground screws by a quarter turn.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. What could be causing the recurring IO connection loss issue with the 1769 OW-16 module?</h4>
<p class='text-muted'><strong>Answer:</strong> - The issue could be related to possible EMF interference from the buzzing 120V contactors connected to the OW-16 module.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What troubleshooting steps have been taken to address the fault with the OW-16 module?</h4>
<p class='text-muted'><strong>Answer:</strong> - The user has replaced various components including the end cap, IQ32, OW-16, and even the PLC itself. They have also ensured a stable 24.4V voltage, checked for voltage fluctuations, and monitored the grounding of the DIN rail.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Despite replacing all components, why does the fault persist only with the OW-16 module?</h4>
<p class='text-muted'><strong>Answer:</strong> - The fault persisting only with the OW-16 module could indicate a specific issue related to this particular module, possibly due to EMF interference or other underlying factors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can one effectively troubleshoot and resolve issues related to IO connection loss in a PLC setup?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting steps may involve checking for grounding issues, monitoring voltage stability, investigating potential sources of interference like EMF, and ensuring proper connections and configurations within the IO setup.</p>
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

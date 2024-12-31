
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am looking for advice on the best method for connecting shielded twisted pair and common wires to an RJ45 connector for a RedLion RS485 system. I am using a multi-pair cable, specifically the Belden 3106A. Is it recommended to connect the twisted pair, common, and shield">
    <meta name="keywords" content="wiring best practices, redlion rs485 system, shielded twisted pair, common wires, belden 3106a cable, rj45 connector, terminal blocks, emc installation guidelines, shield wire connection, gnd terminal, specialized rj45">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/best-practices-for-wiring-redlion-rs485-system-with-shielded-twisted-pair-and-common-wires">
    <title>Best Practices for Wiring RedLion RS485 System with Shielded Twisted Pair and Common Wires | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Best Practices for Wiring RedLion RS485 System with Shielded Twisted Pair and Common Wires | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am looking for advice on the best method for connecting shielded twisted pair and common wires to an RJ45 connector for a RedLion RS485 system. I am using a multi-pair cable, specifically the Belden 3106A. Is it recommended to connect the twisted pair, common, and shield">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/best-practices-for-wiring-redlion-rs485-system-with-shielded-twisted-pair-and-common-wires">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Best Practices for Wiring RedLion RS485 System with Shielded Twisted Pair and Common Wires | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am looking for advice on the best method for connecting shielded twisted pair and common wires to an RJ45 connector for a RedLion RS485 system. I am using a multi-pair cable, specifically the Belden 3106A. Is it recommended to connect the twisted pair, common, and shield">
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
        "@id": "https://community.oxmaint.com/discussion-forum/best-practices-for-wiring-redlion-rs485-system-with-shielded-twisted-pair-and-common-wires"
      },
      "headline": "Best Practices for Wiring RedLion RS485 System with Shielded Twisted Pair and Common Wires",
      "description": "Hello everyone, I am looking for advice on the best method for connecting shielded twisted pair and common wires to an RJ45 connector for a RedLion RS485 system. I am using a multi-pair cable, specifically the Belden 3106A. Is it recommended to connect the twisted pair, common, and shield",
      "author": {
        "@type": "Person",
        "name": "moistcat"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-12",
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
                <h1 class="text-white">Best Practices for Wiring RedLion RS485 System with Shielded Twisted Pair and Common Wires</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>moistcat</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">391</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">15</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am looking for advice on the best method for connecting shielded twisted pair and common wires to an RJ45 connector for a RedLion RS485 system. I am using a multi-pair cable, specifically the Belden 3106A. Is it recommended to connect the twisted pair, common, and shield wires to terminal blocks first, and then modify an RJ45 cable to connect B+, A-, and Comm to the RedLion unit? Additionally, should the shield wire be connected to the RedLion's GND terminal? Are there any EMC installation guidelines that should be followed? Perhaps using a specialized RJ45 plug that accommodates external shielding and 1.5mm twisted pair cables would be a better option?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Terminal Block Adapter for RJ45 with Google Compatibility</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>danw</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Danw praised the Google RJ45 terminal block adapter, expressing gratitude for providing the ideal solution he was seeking.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>moistcat</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our conversation focused on the termination of ethernet cables, specifically utilizing an RJ45 jack splitter for 100BASE-TX to connect two network devices to a switch efficiently. When installing two remote ethernet devices in a control panel, it is essential to ensure a neat setup. Typically, a single shielded ethernet cable terminated with a plug is provided by the customer, with each remote device utilizing half of the pairs. In this case, adjustments must be made to reconfigure the pairs for optimal connectivity. While it is possible to strip the wires and connect them to a terminal block, using complete patch cables may be a more convenient option. Ensure to maintain correct polarity, as companies like Red Lion and Schneider Electric may have conflicting assignments for A/B +/- designation. Visit www.plctalk.net for more information and consider products like the patch panel FL PP RJ45 SCC from Phoenix Contact for a seamless installation process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. Should I connect the twisted pair, common, and shield wires to terminal blocks first before modifying an RJ45 cable for a RedLion RS485 system?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is recommended to connect the wires to terminal blocks first to ensure a secure and organized connection before modifying an RJ45 cable for the RedLion unit.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Where should the shield wire be connected in a RedLion RS485 system?</h4>
<p class='text-muted'><strong>Answer:</strong> - The shield wire should typically be connected to the GND terminal of the RedLion unit to help with electromagnetic compatibility (EMC) and reduce interference.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any EMC installation guidelines that should be followed when wiring a RedLion RS485 system with shielded twisted pair and common wires?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is important to follow EMC installation guidelines to ensure proper functioning and minimize electromagnetic interference. This may include grounding the shield wire and using specialized RJ45 plugs that accommodate external shielding and specific cable types.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Would using a specialized RJ45 plug that accommodates external shielding and 1.5mm twisted pair cables be a better option for wiring a RedLion RS485 system?</h4>
<p class='text-muted'><strong>Answer:</strong> - Using a specialized RJ45 plug designed for external shielding and compatible with 1.5mm twisted pair cables can help improve the overall performance and reliability of the RS485 system, particularly in terms of EMC considerations.</p>
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

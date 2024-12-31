
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am looking to establish communication between two CompactLogix controllers using a MSG instruction. I am curious to know if the built-in Ethernet connection in the processor supports communication or if an external Ethernet module is required. Both PLCs will be connected to an Ethernet switch for networking purposes.">
    <meta name="keywords" content="compactlogix controllers, msg instruction, establish communication, ethernet connection, built-in ethernet, external ethernet module, plcs networking, ethernet switch, compactlogix communication, msg instruction setup, compactlogix programming, plc networking, compactlogix ethernet">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-establish-communication-between-two-compactlogix-controllers-using-msg-instruction">
    <title>How to Establish Communication Between Two CompactLogix Controllers using MSG Instruction | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Establish Communication Between Two CompactLogix Controllers using MSG Instruction | Oxmaint Community">
    <meta property="og:description" content="I am looking to establish communication between two CompactLogix controllers using a MSG instruction. I am curious to know if the built-in Ethernet connection in the processor supports communication or if an external Ethernet module is required. Both PLCs will be connected to an Ethernet switch for networking purposes.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-establish-communication-between-two-compactlogix-controllers-using-msg-instruction">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Establish Communication Between Two CompactLogix Controllers using MSG Instruction | Oxmaint Community">
    <meta name="twitter:description" content="I am looking to establish communication between two CompactLogix controllers using a MSG instruction. I am curious to know if the built-in Ethernet connection in the processor supports communication or if an external Ethernet module is required. Both PLCs will be connected to an Ethernet switch for networking purposes.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-establish-communication-between-two-compactlogix-controllers-using-msg-instruction"
      },
      "headline": "How to Establish Communication Between Two CompactLogix Controllers using MSG Instruction",
      "description": "I am looking to establish communication between two CompactLogix controllers using a MSG instruction. I am curious to know if the built-in Ethernet connection in the processor supports communication or if an external Ethernet module is required. Both PLCs will be connected to an Ethernet switch for networking purposes.",
      "author": {
        "@type": "Person",
        "name": "MagMonk"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-14",
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
                <h1 class="text-white">How to Establish Communication Between Two CompactLogix Controllers using MSG Instruction</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MagMonk</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">793</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">362</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am looking to establish communication between two CompactLogix controllers using a MSG instruction. I am curious to know if the built-in Ethernet connection in the processor supports communication or if an external Ethernet module is required. Both PLCs will be connected to an Ethernet switch for networking purposes.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For effective communication between PLCs on a shared network, it is essential that each device has a distinct IP address and is properly subnetted. This allows for seamless messaging between the devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance communication between PLCs, consider setting up Produced/Consumed tags. To do this, add both PLCs to each other's IO trees and create identical tags in each PLC. For more information, refer to the user manual. This process improves data exchange and efficiency in industrial automation systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>That's fantastic news - it means we won't need to include an Ethernet module! Also, I'm wondering if I need to consistently add the additional PLC to the IO tree while utilizing the MSG instruction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MagMonk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When sending a message, there is no need to include anything in the tree. The main benefit of including a PLC in the tree is the simplification of the pathway. Personally, I refrain from adding PLCs to the tree when simply sending a message.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Many CompactLogix models are limited to the onboard Ethernet port and do not support adding another Ethernet module, with a couple of exceptions being the 1768-L43 and L45. The necessity of adding them to the IO tree typically arises when utilizing Produced/Consumed data functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you intend to utilize Consumed data, it is essential to incorporate them into the IO tree. This step is crucial for proper functionality and data integration within your system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BachPhi</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An important tip for using MSG instructions is to either utilize read on both sides or properly document write on both sides (including the who, what, and where). This will help prevent confusion for users unfamiliar with the program/system or for future reference, ensuring no time is wasted trying to identify unexpected changes in tag values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jeev</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jeev advised to include a housekeeping note when using MSG instructions: either ensure reads on both sides or document the use of writes on both sides (including Who, What, and Where). This will prevent confusion for those unfamiliar with the program or system, saving time and avoiding unexpected changes to tag values. A great suggestion to follow is to strictly allow reads with MSG and avoid any writes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Do CompactLogix controllers support communication between each other using MSG instruction?
- Yes, CompactLogix controllers can communicate with each other using the MSG instruction.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Does the built-in Ethernet connection in the CompactLogix processor support communication between controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the built-in Ethernet connection in the CompactLogix processor supports communication between controllers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is an external Ethernet module required for establishing communication between two CompactLogix controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, an external Ethernet module is not required as the built-in Ethernet connection can be used for communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can both PLCs be connected to an Ethernet switch for networking purposes?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, both PLCs can be connected to an Ethernet switch for networking purposes.</p>
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

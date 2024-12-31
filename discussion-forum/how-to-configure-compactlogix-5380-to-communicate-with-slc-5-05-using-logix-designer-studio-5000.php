
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In a time crunch to set up communication between two unfamiliar systems: Allen-Bradley CompactLogix 5380 and SLC 5/05. Using Logix Designer Studio 5000 to configure CompactLogix 5380 to communicate with SLC 5/05 via the Message function. Attempted to add module to net configuration using Discover module option, but EDS">
    <meta name="keywords" content="compactlogix 5380, slc 5/05, logix designer studio 5000, configure compactlogix, communicate with slc 5/05, message function, net configuration, discover module, eds file">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-configure-compactlogix-5380-to-communicate-with-slc-5-05-using-logix-designer-studio-5000">
    <title>How to Configure CompactLogix 5380 to Communicate with SLC 5/05 using Logix Designer Studio 5000 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Configure CompactLogix 5380 to Communicate with SLC 5/05 using Logix Designer Studio 5000 | Oxmaint Community">
    <meta property="og:description" content="In a time crunch to set up communication between two unfamiliar systems: Allen-Bradley CompactLogix 5380 and SLC 5/05. Using Logix Designer Studio 5000 to configure CompactLogix 5380 to communicate with SLC 5/05 via the Message function. Attempted to add module to net configuration using Discover module option, but EDS">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-configure-compactlogix-5380-to-communicate-with-slc-5-05-using-logix-designer-studio-5000">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Configure CompactLogix 5380 to Communicate with SLC 5/05 using Logix Designer Studio 5000 | Oxmaint Community">
    <meta name="twitter:description" content="In a time crunch to set up communication between two unfamiliar systems: Allen-Bradley CompactLogix 5380 and SLC 5/05. Using Logix Designer Studio 5000 to configure CompactLogix 5380 to communicate with SLC 5/05 via the Message function. Attempted to add module to net configuration using Discover module option, but EDS">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-configure-compactlogix-5380-to-communicate-with-slc-5-05-using-logix-designer-studio-5000"
      },
      "headline": "How to Configure CompactLogix 5380 to Communicate with SLC 5/05 using Logix Designer Studio 5000",
      "description": "In a time crunch to set up communication between two unfamiliar systems: Allen-Bradley CompactLogix 5380 and SLC 5/05. Using Logix Designer Studio 5000 to configure CompactLogix 5380 to communicate with SLC 5/05 via the Message function. Attempted to add module to net configuration using Discover module option, but EDS",
      "author": {
        "@type": "Person",
        "name": "anoob"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-07",
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
                <h1 class="text-white">How to Configure CompactLogix 5380 to Communicate with SLC 5/05 using Logix Designer Studio 5000</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>anoob</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">199</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">274</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In a time crunch to set up communication between two unfamiliar systems: Allen-Bradley CompactLogix 5380 and SLC 5/05. Using Logix Designer Studio 5000 to configure CompactLogix 5380 to communicate with SLC 5/05 via the "Message" function. Attempted to add module to net configuration using "Discover module" option, but EDS or Profile is needed for SLC 5/05. Unable to resolve with EDS wizard or downloaded file from Rockwell (searched for "EDS files for 1747-L552" here). Facing challenges from previous errors, with no prior experience in working with PLCs or design program. Urgently seeking assistance to resolve the issue before the weekend. Any help is greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Adding the SLC to the Compact's I/O tree or EDS files is unnecessary. Simply utilize the message instruction in "SLC typed read" mode, ensuring the correct path is selected. This method saves time and streamlines the communication process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using the SLC Typed Read function, it is essential to utilize the Message (MSG) instruction as pointed out by lmscar12. Although it may seem confusing initially, reaching out for assistance can clarify any uncertainties. To utilize this instruction, simply provide the address to read from and specify the number of elements required. There is no need to make any changes within the SLC itself. Let us know if you require further guidance on this process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I set up communication between Allen-Bradley CompactLogix 5380 and SLC 5/05 using Logix Designer Studio 5000?</h4>
<p class='text-muted'><strong>Answer:</strong> You can configure communication between the CompactLogix 5380 and SLC 5/05 via the "Message" function in Logix Designer Studio 5000.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What is needed to add a module to the network configuration when setting up communication between CompactLogix 5380 and SLC 5/05?</h4>
<p class='text-muted'><strong>Answer:</strong> To add a module to the network configuration, you may need the EDS (Electronic Data Sheet) or Profile for the SLC 5/05.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I obtain the EDS or Profile for the SLC 5/05 to resolve communication setup issues with the CompactLogix 5380?</h4>
<p class='text-muted'><strong>Answer:</strong> You can try using the EDS wizard in Logix Designer Studio 5000 or download the EDS file from Rockwell's website by searching for "EDS files for 1747-L552".</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What can I do if I am facing challenges and errors while configuring communication between CompactLogix 5380 and SLC 5/05 with no prior experience in working with PLCs or design programs?</h4>
<p class='text-muted'><strong>Answer:</strong> Seeking assistance from experienced professionals or consulting Rock</p>
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

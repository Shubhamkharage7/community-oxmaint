
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently troubleshooting communications between a Westinghouse Eq7 VFD and two compressors connected via a Moxa to a 1756-L72 PLC. Each VFD and Moxa setup for the compressors are identical, with the only difference being the Moxa IP address gateway. One of the compressors is updating">
    <meta name="keywords" content="troubleshooting modbus tcp client, aoi sts_overlap and sts_overload issues, moxa setup problems, westinghouse eq7 vfd communication, 1756">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-client-aoi-sts-overlap-and-sts-overload-issues-with-moxa-setup">
    <title>Troubleshooting Modbus TCP Client AOI: Sts_Overlap and Sts_Overload Issues with Moxa Setup | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Modbus TCP Client AOI: Sts_Overlap and Sts_Overload Issues with Moxa Setup | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently troubleshooting communications between a Westinghouse Eq7 VFD and two compressors connected via a Moxa to a 1756-L72 PLC. Each VFD and Moxa setup for the compressors are identical, with the only difference being the Moxa IP address gateway. One of the compressors is updating">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-client-aoi-sts-overlap-and-sts-overload-issues-with-moxa-setup">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Modbus TCP Client AOI: Sts_Overlap and Sts_Overload Issues with Moxa Setup | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently troubleshooting communications between a Westinghouse Eq7 VFD and two compressors connected via a Moxa to a 1756-L72 PLC. Each VFD and Moxa setup for the compressors are identical, with the only difference being the Moxa IP address gateway. One of the compressors is updating">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-modbus-tcp-client-aoi-sts-overlap-and-sts-overload-issues-with-moxa-setup"
      },
      "headline": "Troubleshooting Modbus TCP Client AOI: Sts_Overlap and Sts_Overload Issues with Moxa Setup",
      "description": "Hello everyone, I am currently troubleshooting communications between a Westinghouse Eq7 VFD and two compressors connected via a Moxa to a 1756-L72 PLC. Each VFD and Moxa setup for the compressors are identical, with the only difference being the Moxa IP address gateway. One of the compressors is updating",
      "author": {
        "@type": "Person",
        "name": "sjatx72"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-15",
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
                <h1 class="text-white">Troubleshooting Modbus TCP Client AOI: Sts_Overlap and Sts_Overload Issues with Moxa Setup</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>sjatx72</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">211</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">478</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, 

I am currently troubleshooting communications between a Westinghouse Eq7 VFD and two compressors connected via a Moxa to a 1756-L72 PLC. Each VFD and Moxa setup for the compressors are identical, with the only difference being the Moxa IP address gateway. 

One of the compressors is updating data smoothly (Post Compressor) in the AOI, while the other is encountering Sts_Overlap and Sts_Overload errors (Internal Compressor). The configurations on the AOI and PLC sides are the same for both compressors. 

Attempts to swap IP addresses in the PLC AOI resulted in both compressors giving Sts_Overlap and Sts_Overload errors. Reverting back to the original configuration resolved the issue with the Post Compressor updating correctly. Swapping the Moxas did not change the situation, with the Post Compressor continuing to update and the Internal Compressor experiencing the same errors. 

We are using the standard template AOI provided by AB. Refer to the attached screenshot for details, noting that for the Internal Compressor (bottom one), Sts_Connected is highlighted. 

Any insights or suggestions would be greatly appreciated. 

Thank you, 
Scott</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Overlap occurs when the previous task is still running when the next one begins, due to a poll rate that is too high. In this case, the task is being executed too quickly. The AOI's in question are not performing well; they are slow and overly large. I am struggling to increase their speed beyond 500 milliseconds, even when reading 10 registers in a row from a single device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you. I resolved the issue and revamped it. Everything is now running smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sjatx72</span></li>
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
<h4 class='text-dark'>FAQ: 1. FAQ: What could be causing the Sts_Overlap and Sts_Overload errors in the Modbus TCP Client AOI setup with the Moxa devices and PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The errors could be due to issues related to data overlap or overload in the communication process between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: Why is one compressor updating data smoothly while the other is encountering errors in the AOI setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The difference in behavior could be attributed to specific configurations, network settings, or communication issues unique to each compressor-Moxa-PLC connection.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: How can I troubleshoot and resolve Sts_Overlap and Sts_Overload errors in my Modbus TCP Client AOI setup with the Westinghouse Eq7 VFD and compressors?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Troubleshooting steps may involve checking and ensuring consistent configurations, verifying network settings, analyzing communication protocols, and investigating potential hardware or software issues in the setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. FAQ: What impact does swapping IP addresses in the PLC AOI have on resolving or causing Sts_Overlap and Sts_Overload errors?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Swapping IP addresses can affect the data communication flow between devices, potentially leading to errors if not done correctly or if there are underlying issues in the setup.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. FAQ: How can I address the highlighted Sts_Connected status in the AOI for the Internal Compressor experiencing errors?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Investigate the</p>
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

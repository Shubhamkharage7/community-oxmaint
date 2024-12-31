
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently using TIA Portal V18 and have successfully imported a (v5.7) SIMATIC manager project through device proxy. Within TIA, I have developed a HMI project specifically for a TP700 display. All the elements I want to showcase are functioning correctly. However, I am looking to add">
    <meta name="keywords" content="profibus diagnostics, s7 device proxy, tia portal v18, simatic manager project, hmi project, tp700 display, stethoscope icon, diagnostic window, device proxy project, profibus troubleshooting, tia project setup, prof">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-profibus-diagnostics-with-s7-device-proxy-in-tia-portal-v18">
    <title>Troubleshooting Profibus Diagnostics with S7 Device Proxy in TIA Portal V18 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Profibus Diagnostics with S7 Device Proxy in TIA Portal V18 | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently using TIA Portal V18 and have successfully imported a (v5.7) SIMATIC manager project through device proxy. Within TIA, I have developed a HMI project specifically for a TP700 display. All the elements I want to showcase are functioning correctly. However, I am looking to add">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-profibus-diagnostics-with-s7-device-proxy-in-tia-portal-v18">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Profibus Diagnostics with S7 Device Proxy in TIA Portal V18 | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently using TIA Portal V18 and have successfully imported a (v5.7) SIMATIC manager project through device proxy. Within TIA, I have developed a HMI project specifically for a TP700 display. All the elements I want to showcase are functioning correctly. However, I am looking to add">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-profibus-diagnostics-with-s7-device-proxy-in-tia-portal-v18"
      },
      "headline": "Troubleshooting Profibus Diagnostics with S7 Device Proxy in TIA Portal V18",
      "description": "Hello, I am currently using TIA Portal V18 and have successfully imported a (v5.7) SIMATIC manager project through device proxy. Within TIA, I have developed a HMI project specifically for a TP700 display. All the elements I want to showcase are functioning correctly. However, I am looking to add",
      "author": {
        "@type": "Person",
        "name": "rob63"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-24",
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
                <h1 class="text-white">Troubleshooting Profibus Diagnostics with S7 Device Proxy in TIA Portal V18</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rob63</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">435</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">281</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently using TIA Portal V18 and have successfully imported a (v5.7) SIMATIC manager project through device proxy. Within TIA, I have developed a HMI project specifically for a TP700 display. All the elements I want to showcase are functioning correctly. However, I am looking to add a page dedicated to profibus diagnostics. In my previous TIA projects, I simply dragged the stethoscope icon to a new page, compiled, and downloaded the project to display all relevant information. 
Unfortunately, in the device proxy project, the diagnostic window appears blank. I have researched and it seems this feature should work without issue. I am unsure of what mistake I may have made. Is there any additional configuration or setup required to resolve this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there anyone that can assist with configuring this?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rob63</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like it may only be effective for integrated 300s compared to device proxy. My assumption is that you may have imported the tags, but not the alarms, or possibly missed something.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the profibus diagnostics window blank in my TIA Portal V18 project when using device proxy with a SIMATIC manager project?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The blank profibus diagnostics window in the device proxy project within TIA Portal V18 could be due to a configuration or setup issue. Further troubleshooting may be needed to identify the specific cause of this problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot profibus diagnostics issues in TIA Portal V18 when using S7 Device Proxy?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot profibus diagnostics issues in TIA Portal V18 with S7 Device Proxy, ensure that all relevant settings are correctly configured, check for any compatibility issues between the devices and software versions, and review the device proxy configuration settings for any errors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can the stethoscope icon be used to display profibus diagnostics on a new page in TIA Portal V18 projects with device proxy?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While in previous TIA projects dragging the stethoscope icon to a new page worked for displaying profibus diagnostics, in the device proxy project with TIA Portal V18, additional configuration or setup may be required to ensure the diagnostics window functions correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What steps should I take to add a dedicated profibus diagnostics page in a TIA Portal V18 project using device proxy?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To add a dedicated profibus diagnostics page in a TIA Portal V18 project</p>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have inherited a Fatek FBs-40MC PLC with 2 FBs-6AD modules. According to the manual, the data should transfer to R3840 and beyond automatically. However, when I input a signal into Ch0 (R3840), the value remains static. Are there any additional steps or troubleshooting tips that I may have">
    <meta name="keywords" content="fatek fbs-40mc plc, fbs-6ad modules, signal input issue, troubleshooting fatek plc, ch0 r3840 problem, fatek plc data transfer, fatek plc manual, fatek plc signal">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-fatek-fbs-40mc-plc-with-fbs-6ad-modules-signal-input-issue-at-ch0-r3840">
    <title>Troubleshooting Fatek FBs-40MC PLC with FBs-6AD modules: Signal input issue at Ch0 (R3840) | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Fatek FBs-40MC PLC with FBs-6AD modules: Signal input issue at Ch0 (R3840) | Oxmaint Community">
    <meta property="og:description" content="I have inherited a Fatek FBs-40MC PLC with 2 FBs-6AD modules. According to the manual, the data should transfer to R3840 and beyond automatically. However, when I input a signal into Ch0 (R3840), the value remains static. Are there any additional steps or troubleshooting tips that I may have">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-fatek-fbs-40mc-plc-with-fbs-6ad-modules-signal-input-issue-at-ch0-r3840">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Fatek FBs-40MC PLC with FBs-6AD modules: Signal input issue at Ch0 (R3840) | Oxmaint Community">
    <meta name="twitter:description" content="I have inherited a Fatek FBs-40MC PLC with 2 FBs-6AD modules. According to the manual, the data should transfer to R3840 and beyond automatically. However, when I input a signal into Ch0 (R3840), the value remains static. Are there any additional steps or troubleshooting tips that I may have">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-fatek-fbs-40mc-plc-with-fbs-6ad-modules-signal-input-issue-at-ch0-r3840"
      },
      "headline": "Troubleshooting Fatek FBs-40MC PLC with FBs-6AD modules: Signal input issue at Ch0 (R3840)",
      "description": "I have inherited a Fatek FBs-40MC PLC with 2 FBs-6AD modules. According to the manual, the data should transfer to R3840 and beyond automatically. However, when I input a signal into Ch0 (R3840), the value remains static. Are there any additional steps or troubleshooting tips that I may have",
      "author": {
        "@type": "Person",
        "name": "ydtech"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-19",
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
                <h1 class="text-white">Troubleshooting Fatek FBs-40MC PLC with FBs-6AD modules: Signal input issue at Ch0 (R3840)</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ydtech</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3219</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">440</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have inherited a Fatek FBs-40MC PLC with 2 FBs-6AD modules. According to the manual, the data should transfer to R3840 and beyond automatically. However, when I input a signal into Ch0 (R3840), the value remains static. Are there any additional steps or troubleshooting tips that I may have overlooked? I have attempted to adjust the jumper settings, but it only seems to affect the offset values (0 or 8192) and not much else.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>All resolved! It appears that an external power source is required for the device to function properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ydtech</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am experiencing a common issue with my PLC setup involving FBS 6AD. I have connected FBS 6AD to my PLC and supplied it with 24V DC from the PLC's 24V output. However, I am consistently receiving a reading of 8191 from CH 0 (R3840) and it remains constant without any fluctuations. Can anyone provide assistance with troubleshooting this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ankitjain</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Despite providing the FBs 6AD module and sensor power externally at 24V, the register R3840 (CH 0) is still displaying 8191.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ankitjain</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible to obtain analog output from Fatek BA4D module? If so, how can this be achieved?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hamza</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the signal input at Ch0 (R3840) on Fatek FBs-40MC PLC not updating even though it should transfer data automatically?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue might be related to the configuration or setup of the PLC or the FBs-6AD modules. Double-check the wiring, module configuration, and any software settings that might impact the data transfer.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What troubleshooting steps can I take if adjusting jumper settings on the Fatek FBs-6AD modules only affects offset values and not the signal input issue at Ch0 (R3840)?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It is recommended to review the module's manual for detailed setup instructions. You may also want to verify the input signal connections, check for any communication errors, and ensure the PLC program is correctly configured to receive and process the input signal data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there specific considerations or requirements for signal input at Ch0 (R3840) on Fatek FBs-40MC PLC when using FBs-6AD modules?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Make sure that the input signal type and range are compatible with the FBs-6AD modules. Additionally, verify that the PLC program is correctly addressing the input data location (R3840) and that any necessary scaling or conversion functions are applied within the program.</p>
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

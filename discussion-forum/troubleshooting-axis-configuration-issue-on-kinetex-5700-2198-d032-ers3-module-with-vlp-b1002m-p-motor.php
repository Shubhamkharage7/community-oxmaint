
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently dealing with an issue regarding my Kinetex 5700 2198-D032-ERS3 module equipped with a VLP-B1002M-P Motor. We recently upgraded the gearbox from a 40-1 to a 60-1 due to torque concerns. Despite making these changes and adjusting the axis ratio to 60-1 in the PLC,">
    <meta name="keywords" content="kinetex 5700, 2198-d032-ers3 module, vlp-b1002m-p motor, gearbox upgrade, axis configuration issue, plc settings, autotune failure, safety state unknown, rs studio v30">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-axis-configuration-issue-on-kinetex-5700-2198-d032-ers3-module-with-vlp-b1002m-p-motor">
    <title>Troubleshooting Axis Configuration Issue on Kinetex 5700 2198-D032-ERS3 Module with VLP-B1002M-P Motor | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Axis Configuration Issue on Kinetex 5700 2198-D032-ERS3 Module with VLP-B1002M-P Motor | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently dealing with an issue regarding my Kinetex 5700 2198-D032-ERS3 module equipped with a VLP-B1002M-P Motor. We recently upgraded the gearbox from a 40-1 to a 60-1 due to torque concerns. Despite making these changes and adjusting the axis ratio to 60-1 in the PLC,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-axis-configuration-issue-on-kinetex-5700-2198-d032-ers3-module-with-vlp-b1002m-p-motor">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Axis Configuration Issue on Kinetex 5700 2198-D032-ERS3 Module with VLP-B1002M-P Motor | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently dealing with an issue regarding my Kinetex 5700 2198-D032-ERS3 module equipped with a VLP-B1002M-P Motor. We recently upgraded the gearbox from a 40-1 to a 60-1 due to torque concerns. Despite making these changes and adjusting the axis ratio to 60-1 in the PLC,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-axis-configuration-issue-on-kinetex-5700-2198-d032-ers3-module-with-vlp-b1002m-p-motor"
      },
      "headline": "Troubleshooting Axis Configuration Issue on Kinetex 5700 2198-D032-ERS3 Module with VLP-B1002M-P Motor",
      "description": "Hello everyone, I am currently dealing with an issue regarding my Kinetex 5700 2198-D032-ERS3 module equipped with a VLP-B1002M-P Motor. We recently upgraded the gearbox from a 40-1 to a 60-1 due to torque concerns. Despite making these changes and adjusting the axis ratio to 60-1 in the PLC,",
      "author": {
        "@type": "Person",
        "name": "Elijah58"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-22",
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
                <h1 class="text-white">Troubleshooting Axis Configuration Issue on Kinetex 5700 2198-D032-ERS3 Module with VLP-B1002M-P Motor</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Elijah58</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5485</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">426</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently dealing with an issue regarding my Kinetex 5700 2198-D032-ERS3 module equipped with a VLP-B1002M-P Motor. We recently upgraded the gearbox from a 40-1 to a 60-1 due to torque concerns. Despite making these changes and adjusting the axis ratio to 60-1 in the PLC, the system is now indicating that the axis is not configured. I have carefully reviewed all settings but am unable to identify the root cause of this problem. I have attempted to perform an autotune, but the message received is "Axis Not Configured" and the Safety State shows as Unknown with no motion connection. Any suggestions or insights would be greatly appreciated. I am using RS Studio v30 for this setup. Thank you, Eli.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the drive still indicating its online connection status? If you're not receiving any responses from the axis in your project, it's possible that your project has become corrupted. If you only modified the ratio and downloaded it, first verify that the part numbers exactly match what is currently installed. It's important to not make assumptions and to physically check for accuracy. AB emphasizes revision numbers, with Revision A being distinct from Revision B. This attention to detail is crucial for reproducing your issue accurately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>seth350</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Seth350 inquired about the drive's online connection status. If there is no response from the axis in the project, it may indicate a corrupted project. Before making any changes, ensure that the part numbers exactly match what is installed. It is important to verify this physically, as Revision A differs significantly from Revision B in AB. This should help to troubleshoot and address the issue at hand. I appreciate the suggestion and plan to give it a try. - Eli</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Elijah58</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, team! I successfully identified the issue - one of the axes was inadvertently disconnected on the dual-axis controller. Ready to get back to work at the TESLA Gigafactory and keep things running smoothly! - Eli</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Elijah58</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for responding with the reason, that's a great deal!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>seth350</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered a similar problem when I discovered that one of the drives in my motion group had an invalid safety network number. To fix this issue, I went to the general tab of the module properties in the IO tree and regenerated the safety network number.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>votecoffee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is my Kinetex 5700 2198-D032-ERS3 module with VLP-B1002M-P Motor indicating that the axis is not configured after upgrading the gearbox and adjusting the axis ratio?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The issue of the axis not being configured could be due to a mismatch between the configured axis ratio in the PLC and the actual gearbox ratio. Double-check the settings to ensure they align correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the "Axis Not Configured" message and Safety State showing as Unknown on my Kinetex 5700 system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot this issue, you can try verifying the motor and axis configuration settings, ensuring the correct motor parameters are entered, and checking for any communication errors between the PLC and the motor drive.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can I take if the autotune process on my Kinetex 5700 module is resulting in an "Axis Not Configured" message?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If the autotune process is failing with the "Axis Not Configured" message, you may need to review the motor and axis configuration parameters, verify the motor connections, and ensure proper communication between the PLC and the motor drive. Additionally, check for any errors or warnings in the system logs that could provide more insights into the issue.</p>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, Im currently experiencing an issue with encoder adjustment on the Sew Electric Cylinder CMS71L. The encoder being used is the Sick HiperfaceDrive and the drive is the MOVIDRIVE B (MDX61B). I followed the following procedure: - Released the brake and applied 10V DC to the V and">
    <meta name="keywords" content="sew electric cylinder cms71l, sick hiperfacedrive, movidrive b (mdx61b), encoder adjustment, troubleshooting, hardware adjustments, encoder error, motor error, v terminal, w terminal, movitool, encoder">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-encoder-adjustment-issues-with-sew-electric-cylinder-cms71l-and-sick-hiperfacedrive">
    <title>Troubleshooting Encoder Adjustment Issues with Sew Electric Cylinder CMS71L and Sick HiperfaceDrive | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Encoder Adjustment Issues with Sew Electric Cylinder CMS71L and Sick HiperfaceDrive | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, Im currently experiencing an issue with encoder adjustment on the Sew Electric Cylinder CMS71L. The encoder being used is the Sick HiperfaceDrive and the drive is the MOVIDRIVE B (MDX61B). I followed the following procedure: - Released the brake and applied 10V DC to the V and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-encoder-adjustment-issues-with-sew-electric-cylinder-cms71l-and-sick-hiperfacedrive">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Encoder Adjustment Issues with Sew Electric Cylinder CMS71L and Sick HiperfaceDrive | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, Im currently experiencing an issue with encoder adjustment on the Sew Electric Cylinder CMS71L. The encoder being used is the Sick HiperfaceDrive and the drive is the MOVIDRIVE B (MDX61B). I followed the following procedure: - Released the brake and applied 10V DC to the V and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-encoder-adjustment-issues-with-sew-electric-cylinder-cms71l-and-sick-hiperfacedrive"
      },
      "headline": "Troubleshooting Encoder Adjustment Issues with Sew Electric Cylinder CMS71L and Sick HiperfaceDrive",
      "description": "Hello everyone, Im currently experiencing an issue with encoder adjustment on the Sew Electric Cylinder CMS71L. The encoder being used is the Sick HiperfaceDrive and the drive is the MOVIDRIVE B (MDX61B). I followed the following procedure: - Released the brake and applied 10V DC to the V and",
      "author": {
        "@type": "Person",
        "name": "Suhail"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-24",
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
                <h1 class="text-white">Troubleshooting Encoder Adjustment Issues with Sew Electric Cylinder CMS71L and Sick HiperfaceDrive</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Suhail</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>17 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1217</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">95</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone,

I'm currently experiencing an issue with encoder adjustment on the Sew Electric Cylinder CMS71L. The encoder being used is the Sick HiperfaceDrive and the drive is the MOVIDRIVE B (MDX61B).

I followed the following procedure:
- Released the brake and applied 10V DC to the V and W terminals (-ve to V, +ve to W), then held the brake and fitted the encoder.
- Connected to MOVIDRIVE B and connected the drive to movitool for encoder adjustment.

Issue 1:
However, I encountered errors during the encoder adjustment process and was unable to complete it. After several hardware adjustments, I was able to successfully finish the encoder adjustment.

Issue 2:
Unfortunately, while running the motor, it displayed an encoder error after some time.

I hope this explanation clarifies the problem. I would appreciate any assistance in resolving these issues. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Can you please provide the part number for your encoder?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DarrylR inquired about the encoder part numbers for the motors in use. One motor is equipped with the SRM50-HZA0-S05 encoder, another with the SRM50-HZZ0-S21 encoder, and a third motor with the SRM50S-HFZ0-S22 encoder.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Suhail</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Which interface card should I use for my system? Options include the DEH11B, DEU21B...</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What specific error or errors are currently appearing on your screen?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DarrylR inquired about which interface card to use, mentioning options such as DEH11B and DEU21B. Click to expand for more information on the DEH11B card.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Suhail</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>According to DarrylR, could you please specify the error or errors you are encountering? The error codes you may come across are F14 without a sub code or occasionally F14 with subcode 30.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Suhail</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the information. The F14 sub code 30 error, "unknown encoder type at X14/X15," is a common issue. In our setup, we utilize MDX61 drives with Sick Hiperface encoders. These encoders require programming using a specific device from Sick to set the motor type and pulses per revolution (ppr). Unfortunately, it is not possible to configure them using Movitools software. For more detailed instructions, I recommend visiting the Sick website.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the information provided, DarrylR. The F14 sub code 30, "unknown encoder type at X14/X15," corresponds to issues with encoder compatibility in drives like the MDX61, particularly when using Sick Hiperface encoders. These specific encoders require programming via a device from Sick to adjust settings such as motor type and PPR. It's important to note that these adjustments cannot be made through movitools software. For more detailed instructions, refer to the Sick website. Regarding the mention of PPR, could you clarify its meaning in this context?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Suhail</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you believe the encoders are correctly programmed and set up, the next step would be to inspect the cables and connections. Ensure the pulses per revolution (PPR) are configured properly to optimize the encoder's performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DarrylR explained that ppr stands for pulses per revolution. If you believe the encoders have been correctly set up/programmed, then it may be worth investigating the cables and connections for any issues. Could it be that all their encoders require their respective devices to be properly configured?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Suhail</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yes, the SRM50 series offers a wide range of features that cater to various needs and preferences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DarrylR mentioned that the SRM50 series is compatible. Are you also considering the skm36 series?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Suhail</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to DarrylR, it was confirmed that the SRM50 series is compatible. Hi DarryIR, I discovered that Control Techniques' Unidrive SP can both read and write data to SICK Hiperface encoders. When attempting to read data from an older encoder, the drive displayed an EnP.Er error. Do you have any insight into what the issue might be?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Suhail</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to the Unidrive manual, an ENP.ErData error occurs when there is an issue with the electronic nameplate stored in the chosen position feedback device. To resolve this issue, it is recommended to replace the feedback device.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>DarrylR shared information from the Unidrive manual regarding an ENP.ErData error related to the electronic nameplate stored in the selected position feedback device. The manual suggests replacing the feedback device. However, after purchasing and installing a new encoder, the same error persists when attempting to read data from it. This indicates that the issue may be something other than the encoder. Are there any other solutions available besides replacing the device?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Suhail</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ensure that all feedback parameters are checked thoroughly. The encoder must align with the expectations of the drive system for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to troubleshoot a discrepancy between the encoder and drive, it's essential to verify all feedback parameters for accuracy. Make sure that the encoder output aligns with the drive's expectations. I adjusted all parameters accordingly to ensure that the drive accurately reads real-time positions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Suhail</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing errors during the encoder adjustment process with the Sew Electric Cylinder CMS71L and Sick HiperfaceDrive?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Errors during the encoder adjustment process could be caused by incorrect wiring, faulty components, or improper setup. It is important to double-check the connections and follow the adjustment procedure accurately.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot encoder adjustment issues with the MOVIDRIVE B (MDX61B) drive and the Sick HiperfaceDrive?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot encoder adjustment issues, ensure that all connections are secure and correct, follow the adjustment procedure provided by the manufacturer, and check for any error messages or indicators on the drive interface.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can be taken to address an encoder error displayed while running the motor with the Sew Electric Cylinder CMS71L?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When encountering an encoder error while running the motor, it is recommended to check the encoder connections, verify the encoder settings in the drive software, and inspect the encoder itself for any damage or malfunctions. Repeating the adjustment process may also help resolve the issue.</p>
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

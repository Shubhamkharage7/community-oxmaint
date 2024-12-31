
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I currently have a Compactlogix 5380 controller that was previously in operation, then temporarily stored in our office for approximately a year. We are now attempting to reintegrate the controller into the same system, but encountering challenges. Despite providing a 24vdc input on any channel of the digital">
    <meta name="keywords" content="compactlogix 5380, digital input problems, troubleshooting, controller integration, 24vdc input, green indicator light, digital input card, 18vdc observation, system reintegration, channel challenges, input card wiring, compact">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-compactlogix-5380-digital-input-problems">
    <title>Troubleshooting Compactlogix 5380 Digital Input Problems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Compactlogix 5380 Digital Input Problems | Oxmaint Community">
    <meta property="og:description" content="Hello, I currently have a Compactlogix 5380 controller that was previously in operation, then temporarily stored in our office for approximately a year. We are now attempting to reintegrate the controller into the same system, but encountering challenges. Despite providing a 24vdc input on any channel of the digital">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-compactlogix-5380-digital-input-problems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Compactlogix 5380 Digital Input Problems | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I currently have a Compactlogix 5380 controller that was previously in operation, then temporarily stored in our office for approximately a year. We are now attempting to reintegrate the controller into the same system, but encountering challenges. Despite providing a 24vdc input on any channel of the digital">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-compactlogix-5380-digital-input-problems"
      },
      "headline": "Troubleshooting Compactlogix 5380 Digital Input Problems",
      "description": "Hello, I currently have a Compactlogix 5380 controller that was previously in operation, then temporarily stored in our office for approximately a year. We are now attempting to reintegrate the controller into the same system, but encountering challenges. Despite providing a 24vdc input on any channel of the digital",
      "author": {
        "@type": "Person",
        "name": "jSturm"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-26",
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
                <h1 class="text-white">Troubleshooting Compactlogix 5380 Digital Input Problems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jSturm</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">288</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">9</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I currently have a Compactlogix 5380 controller that was previously in operation, then temporarily stored in our office for approximately a year. We are now attempting to reintegrate the controller into the same system, but encountering challenges. Despite providing a 24vdc input on any channel of the digital input card, we are not seeing a green indicator light. Additionally, we are observing 18vdc on all other channels even when no other wires are connected to the input card.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the PLCTalk forum community! When using the 5380 series CompactLogix, it is important to ensure that you are utilizing the correct 5069-series "Compact 5000" I/O modules. Do you know the specific part number of the digital input module you are currently using? If you are experiencing issues with the DC Common for the "Sensor / Actuator" I/O power bus, it may not be connected properly. Make sure to thoroughly review Chapter 2 or 3 (for standard and GuardLogix) to verify that the power inputs are connected correctly for both the CPU and the I/O modules. For further reference, you can access the manual here: https://literature.rockwellautomation.com/idc/groups/literature/documents/um/5069-um001_-en-p.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach warmly welcomes you to the PLCTalk forum community! The CompactLogix 5380 series utilizes 5069-series "Compact 5000" I/O modules. Could you provide the specific part number of the digital input module you are currently using? It is possible that the issue may lie in the connectivity of the DC Common for the "Sensor/Actuator" I/O power bus (the bottom connector). It is recommended to thoroughly review Chapter 2 or 3 (for standard and GuardLogix) to ensure proper connection of power inputs for both the CPU and the I/O. For further information, you can refer to this link: [insert link here]. Thank you for your response. We have confirmed the presence of a DC Com on the SA power bus. Today, we will conduct additional troubleshooting to identify and resolve any potential issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jSturm</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I not seeing a green indicator light on the Compactlogix 5380 digital input card despite providing 24vdc input?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The absence of a green indicator light could indicate a potential issue with the digital input card or its configuration. It might be worth checking the wiring connections and the programming logic to ensure proper functioning.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why am I observing 18vdc on all other channels of the digital input card even when no wires are connected?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The presence of voltage on channels without any wires connected could suggest a potential short circuit or incorrect wiring. It is advisable to carefully inspect the connections and troubleshoot for any wiring errors or faults in the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps should I take when reintegrating a stored Compactlogix 5380 controller back into a system after a year of storage?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When reintegrating a controller after a period of storage, it is recommended to verify the physical condition of the components, check for any signs of damage, ensure proper environmental conditions, and review the configuration settings to address any potential issues that may have arisen during storage.</p>
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

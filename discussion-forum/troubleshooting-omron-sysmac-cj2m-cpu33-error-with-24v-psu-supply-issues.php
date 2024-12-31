
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am seeking assistance with a customers CPU experiencing issues with the 24v PSU supply and now displaying an error state. I am unfamiliar with this system, so any guidance would be greatly appreciated. The CPU is showing error codes ER E1 IP 2 with a solid green">
    <meta name="keywords" content="omron sysmac cj2m cpu33, troubleshooting, 24v psu supply, error state, error codes, er e1 ip 2, run led, ms led, ns led, plc rack, module nx-eic202">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-omron-sysmac-cj2m-cpu33-error-with-24v-psu-supply-issues">
    <title>Troubleshooting Omron Sysmac CJ2M CPU33 Error with 24v PSU Supply Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Omron Sysmac CJ2M CPU33 Error with 24v PSU Supply Issues | Oxmaint Community">
    <meta property="og:description" content="Hello, I am seeking assistance with a customers CPU experiencing issues with the 24v PSU supply and now displaying an error state. I am unfamiliar with this system, so any guidance would be greatly appreciated. The CPU is showing error codes ER E1 IP 2 with a solid green">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-omron-sysmac-cj2m-cpu33-error-with-24v-psu-supply-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Omron Sysmac CJ2M CPU33 Error with 24v PSU Supply Issues | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am seeking assistance with a customers CPU experiencing issues with the 24v PSU supply and now displaying an error state. I am unfamiliar with this system, so any guidance would be greatly appreciated. The CPU is showing error codes ER E1 IP 2 with a solid green">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-omron-sysmac-cj2m-cpu33-error-with-24v-psu-supply-issues"
      },
      "headline": "Troubleshooting Omron Sysmac CJ2M CPU33 Error with 24v PSU Supply Issues",
      "description": "Hello, I am seeking assistance with a customers CPU experiencing issues with the 24v PSU supply and now displaying an error state. I am unfamiliar with this system, so any guidance would be greatly appreciated. The CPU is showing error codes ER E1 IP 2 with a solid green",
      "author": {
        "@type": "Person",
        "name": "Iandb0812"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-04",
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
                <h1 class="text-white">Troubleshooting Omron Sysmac CJ2M CPU33 Error with 24v PSU Supply Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Iandb0812</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">277</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">243</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am seeking assistance with a customer's CPU experiencing issues with the 24v PSU supply and now displaying an error state. I am unfamiliar with this system, so any guidance would be greatly appreciated. The CPU is showing error codes ER E1 IP 2 with a solid green Run LED, solid green MS LED, and flashing red NS LED. The PLC rack also contains module NX-EIC202 with only the I/O Power LED illuminated in green. Any insights or advice on troubleshooting would be helpful.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're seeing Error E1, it may mean that the ethernet link isn't being detected on page 235 of the CJ2 CPU units hardware user manual. IP 2 can help identify the specific port causing the issue. For more information, refer to the manual available for download at the link provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to DarrylR, the error code E1 signifies that the "ethernet link is not detected" on page 235 of the CJ2 CPU Units Hardware User's Manual. IP 2 may identify the specific port in question. For further details, refer to section 3-1-2 on page 109 of the manual. Click the link to access the manual: https://assets.omron.eu/downloads/latest/manual/en/w472_cj2_cpu_units_hardware_users_manual_en.pdf</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DarrylR</span></li>
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
<h4 class='text-dark'>FAQ: 1. What do the error codes ER E1 IP 2 indicate on an Omron Sysmac CJ2M CPU33?</h4>
<p class='text-muted'><strong>Answer:</strong> - The error codes ER E1 IP 2 indicate specific issues with the Omron Sysmac CJ2M CPU33. In this case, it seems to be related to the 24v PSU supply problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What do the different LED statuses (solid green Run LED, solid green MS LED, flashing red NS LED) on the CPU and PLC rack modules signify?</h4>
<p class='text-muted'><strong>Answer:</strong> - The solid green Run LED and MS LED indicate that the CPU is powered and running, while the flashing red NS LED may suggest a specific fault or issue that needs attention. The illuminated green I/O Power LED on the module NX-EIC202 indicates that the input/output power is functioning.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I troubleshoot issues with the 24v PSU supply on the Omron Sysmac CJ2M CPU33?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting the 24v PSU supply issues may involve checking the power supply unit, connections, wiring, and related components for any faults or malfunctions. It may also include verifying the voltage output and ensuring proper power distribution within the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific steps or procedures recommended for troubleshooting the displayed error state on the Omron Sysmac CJ2M CPU33?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some general troubleshooting steps may include reviewing the system's documentation for error code interpretations, checking for loose connections or faulty</p>
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

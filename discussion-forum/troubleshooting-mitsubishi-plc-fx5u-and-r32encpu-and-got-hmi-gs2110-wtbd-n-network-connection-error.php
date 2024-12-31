
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am currently facing an issue with connecting my Mitsubishi PLCs (FX5U and R32ENCPU) and GOT HMI (GS2110 WTBD-N) on the same network. While I am able to successfully ping all three devices from my laptop, I am unable to establish an online connection with the FX5U PLC.">
    <meta name="keywords" content="mitsubishi plc, fx5u, r32encpu, got hmi, gs2110 wtbd-n, network connection error, troubleshooting, online connection issue, ping successful, communication problem, fxcpu, sd/rd lights blinking">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-plc-fx5u-and-r32encpu-and-got-hmi-gs2110-wtbd-n-network-connection-error">
    <title>Troubleshooting Mitsubishi PLC (FX5U and R32ENCPU) and GOT HMI (GS2110 WTBD-N) network connection error | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Mitsubishi PLC (FX5U and R32ENCPU) and GOT HMI (GS2110 WTBD-N) network connection error | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am currently facing an issue with connecting my Mitsubishi PLCs (FX5U and R32ENCPU) and GOT HMI (GS2110 WTBD-N) on the same network. While I am able to successfully ping all three devices from my laptop, I am unable to establish an online connection with the FX5U PLC.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-plc-fx5u-and-r32encpu-and-got-hmi-gs2110-wtbd-n-network-connection-error">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Mitsubishi PLC (FX5U and R32ENCPU) and GOT HMI (GS2110 WTBD-N) network connection error | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am currently facing an issue with connecting my Mitsubishi PLCs (FX5U and R32ENCPU) and GOT HMI (GS2110 WTBD-N) on the same network. While I am able to successfully ping all three devices from my laptop, I am unable to establish an online connection with the FX5U PLC.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-mitsubishi-plc-fx5u-and-r32encpu-and-got-hmi-gs2110-wtbd-n-network-connection-error"
      },
      "headline": "Troubleshooting Mitsubishi PLC (FX5U and R32ENCPU) and GOT HMI (GS2110 WTBD-N) network connection error",
      "description": "Greetings, I am currently facing an issue with connecting my Mitsubishi PLCs (FX5U and R32ENCPU) and GOT HMI (GS2110 WTBD-N) on the same network. While I am able to successfully ping all three devices from my laptop, I am unable to establish an online connection with the FX5U PLC.",
      "author": {
        "@type": "Person",
        "name": "Irfan_plus"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-31",
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
                <h1 class="text-white">Troubleshooting Mitsubishi PLC (FX5U and R32ENCPU) and GOT HMI (GS2110 WTBD-N) network connection error</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Irfan_plus</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">297</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">425</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am currently facing an issue with connecting my Mitsubishi PLCs (FX5U and R32ENCPU) and GOT HMI (GS2110 WTBD-N) on the same network. While I am able to successfully ping all three devices from my laptop, I am unable to establish an online connection with the FX5U PLC. The R32ENCPU and HMI are communicating with each other without any issues. When attempting to connect the FXCPU directly to the HMI, the SD/RD lights are blinking. If anyone has a solution to this problem, please provide assistance. The error message can be found in the attached screenshot.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When I say "take the FX5 PLC online," I'm referring to using the GOT interface to connect to the PLC. Have you configured the ports for this connection?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mark-</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a possibility of additional devices on the network besides the 3 devices and laptop? If so, it's possible that the IP address assigned to the FX5U PLC is being used by another device. This could explain the issues you are experiencing, where there is a response to the Ping but communication is still not happening.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lfe</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your helpful response! The problem was resolved by replacing the Ethernet switch that was used to connect the three mentioned devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Irfan_plus</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I unable to establish an online connection with the FX5U PLC when it is on the same network as the R32ENCPU and GOT HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This issue could be due to various reasons such as network configuration settings, compatibility issues, or communication protocol mismatches. Troubleshooting steps may involve checking the network settings, ensuring proper protocols are configured, and verifying compatibility between the devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be the reason behind the blinking SD/RD lights when attempting to connect the FXCPU directly to the HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The blinking SD/RD lights indicate a communication error between the devices. This could be caused by incorrect wiring, incompatible communication settings, or faulty hardware. Troubleshooting steps may include rechecking the wiring connections, verifying communication settings, and testing with different hardware components if possible.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I resolve the network connection error between the Mitsubishi PLCs and the GOT HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve the network connection error, you can start by checking the IP addresses, subnet masks, and gateway settings of the devices to ensure they are on the same network. Additionally, verify the communication protocols and settings are correctly configured on both the PLCs and the HMI. If the issue persists, consider checking for any firmware updates or consulting the device manuals for troubleshooting guidance.</p>
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

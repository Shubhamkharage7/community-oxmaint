
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently troubleshooting a Micrologix 1400 model 1766-L32BXB PLC. Even with no input wires connected to in12 through in19, the unit is reading 24 volts when powered on. Could this indicate a malfunctioning PLC? Thank you for your help.">
    <meta name="keywords" content="micrologix 1400 plc, 1766-l32bxb, input voltage issue, troubleshooting, in12, in19, 24 volts, malfunctioning plc, troubleshoot micrologix 1400, model">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-micrologix-1400-model-1766-l32bxb-plc-input-voltage-issue">
    <title>Troubleshooting Micrologix 1400 Model 1766-L32BXB PLC Input Voltage Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Micrologix 1400 Model 1766-L32BXB PLC Input Voltage Issue | Oxmaint Community">
    <meta property="og:description" content="I am currently troubleshooting a Micrologix 1400 model 1766-L32BXB PLC. Even with no input wires connected to in12 through in19, the unit is reading 24 volts when powered on. Could this indicate a malfunctioning PLC? Thank you for your help.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-micrologix-1400-model-1766-l32bxb-plc-input-voltage-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Micrologix 1400 Model 1766-L32BXB PLC Input Voltage Issue | Oxmaint Community">
    <meta name="twitter:description" content="I am currently troubleshooting a Micrologix 1400 model 1766-L32BXB PLC. Even with no input wires connected to in12 through in19, the unit is reading 24 volts when powered on. Could this indicate a malfunctioning PLC? Thank you for your help.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-micrologix-1400-model-1766-l32bxb-plc-input-voltage-issue"
      },
      "headline": "Troubleshooting Micrologix 1400 Model 1766-L32BXB PLC Input Voltage Issue",
      "description": "I am currently troubleshooting a Micrologix 1400 model 1766-L32BXB PLC. Even with no input wires connected to in12 through in19, the unit is reading 24 volts when powered on. Could this indicate a malfunctioning PLC? Thank you for your help.",
      "author": {
        "@type": "Person",
        "name": "Taterfarmer"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-23",
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
                <h1 class="text-white">Troubleshooting Micrologix 1400 Model 1766-L32BXB PLC Input Voltage Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Taterfarmer</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">395</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">259</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently troubleshooting a Micrologix 1400 model 1766-L32BXB PLC. Even with no input wires connected to "in12" through "in19", the unit is reading 24 volts when powered on. Could this indicate a malfunctioning PLC? Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When testing voltage potential on PLC input terminals (such as COM 3 for IN12 to IN19), ensure a wire is landed on the COM terminals for proper reference. Without a proper reference point, it is difficult to accurately measure voltage on the PLC inputs. Make sure to check for the presence of voltage only after the wiring is securely connected to both the input and its associated COM terminal to avoid any discrepancies in readings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Each input group of the ML1400 can be wired as sinking or sourcing. When wired as sourcing, you should expect to measure a voltage on the input even when nothing is connected to it. In other words, this is essentially checking COM 3. If wired as sourcing, a 24V wire should be present.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I apologize for the confusion, com 0-3 are interconnected. The input banks only receive voltage when connected to a sensor, and this particular bank is the only one where voltage is present at the input terminals.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Taterfarmer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Last year, there was an issue with a 1400 unit where the inputs in a group were displaying voltage even when field devices were disconnected. Upon investigation, it was determined to be an internal electronic failure within the unit. The unit was promptly replaced thanks to the warranty coverage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Q: Why is my Micrologix 1400 model 1766-L32BXB PLC reading 24 volts on inputs "in12" through "in19" with no wires connected?
    Reading 24 volts on the inputs without any wires connected could indicate a potential issue with the PLC or the input module.
   
2. Q: How can I troubleshoot the input voltage issue on my Micrologix 1400 PLC?
    To troubleshoot the input voltage issue, you can start by checking the wiring connections, ensuring proper grounding, and testing the PLC with known working input modules.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it common for a Micrologix 1400 PLC to show a voltage reading when no input wires are connected?</h4>
<p class='text-muted'><strong>Answer:</strong> It is not common for a PLC to register a voltage reading on input channels with no wires connected, which suggests a potential problem with the unit.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What should I do if my Micrologix 1400 PLC continues to show 24 volts on the inputs despite no wires being connected?</h4>
<p class='text-muted'><strong>Answer:</strong> If the PLC persists in displaying 24 volts on the inputs without any connections, it may be necessary to further investigate the issue by consulting the PLC manual or contacting technical support for assistance.</p>
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

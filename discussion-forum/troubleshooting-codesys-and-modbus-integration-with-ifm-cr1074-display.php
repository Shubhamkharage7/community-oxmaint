
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am a beginner in Codesys and currently delving into it for a project we are working on. The project involves controlling a portable rollformer specifically designed for roofing metal. We are in need of a PLC with a 7 HMI, but with a unique requirement from the">
    <meta name="keywords" content="codesys, modbus integration, ifm cr1074, troubleshooting, hmi operation, non-touchscreen, membrane keypad, outdoor readable display, portable rollformer, roofing metal, plc communication, do-more brx, modbus addresses">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-codesys-and-modbus-integration-with-ifm-cr1074-display">
    <title>Troubleshooting Codesys and Modbus Integration with IFM CR1074 Display | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Codesys and Modbus Integration with IFM CR1074 Display | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am a beginner in Codesys and currently delving into it for a project we are working on. The project involves controlling a portable rollformer specifically designed for roofing metal. We are in need of a PLC with a 7 HMI, but with a unique requirement from the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-codesys-and-modbus-integration-with-ifm-cr1074-display">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Codesys and Modbus Integration with IFM CR1074 Display | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am a beginner in Codesys and currently delving into it for a project we are working on. The project involves controlling a portable rollformer specifically designed for roofing metal. We are in need of a PLC with a 7 HMI, but with a unique requirement from the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-codesys-and-modbus-integration-with-ifm-cr1074-display"
      },
      "headline": "Troubleshooting Codesys and Modbus Integration with IFM CR1074 Display",
      "description": "Greetings, I am a beginner in Codesys and currently delving into it for a project we are working on. The project involves controlling a portable rollformer specifically designed for roofing metal. We are in need of a PLC with a 7 HMI, but with a unique requirement from the",
      "author": {
        "@type": "Person",
        "name": "JasonO"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-13",
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
                <h1 class="text-white">Troubleshooting Codesys and Modbus Integration with IFM CR1074 Display</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JasonO</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">310</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">67</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am a beginner in Codesys and currently delving into it for a project we are working on. The project involves controlling a portable rollformer specifically designed for roofing metal. We are in need of a PLC with a 7" HMI, but with a unique requirement from the client - they prefer non-touchscreen operation. This means all interactions on the screen must be done through buttons, function keys, a membrane keypad, or a similar mechanism. Finding an HMI that fits these criteria, functions at temperatures as low as -10 degrees Celsius, and is readable outdoors has proven to be quite challenging. The equipment will be installed in enclosed trailers, with the screen positioned just inside the trailer door for easy access by the operator. After thorough research, the IFM CR1074 seems to meet all our requirements.

My plan is to utilize the CR1074 solely as an HMI and have it communicate with a Do-More BRX PLC via either Modbus or Ethernet/IP. I have experience mapping variables into Modbus memory blocks on the PLC side, but I am unsure about configuring this setup in Codesys. Specifically, I need to establish Modbus addresses and potentially convert registers to 32-bit integers as necessary. Additionally, some variables will be editable on the screen (e.g., entering quantities for parts to cut and target lengths using a USB numeric keypad connected to the CR1974). These edited variables must be written back to the PLC.

Typically, traditional HMIs handle data conversion and Modbus writes automatically, but I am uncertain about how this process works in Codesys. I am seeking guidance on whether the CR1074 should act as the Modbus slave or Master, and how to configure it to display values from the PLC while allowing input of new values to be written back. Any assistance or insights on this matter would be greatly appreciated!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In my opinion, it would be more efficient to develop the PLC program using Codesys, taking advantage of the HMI's runtime capabilities, and then incorporating another system for remote IO. This simplifies the process significantly. If you have already invested a lot of time in the BRX platform and are not keen on switching to Codesys, you can still integrate Modbus data into the Codesys device smoothly. This allows you the flexibility to apply various logic and manipulation functions within the Codesys environment. There are plenty of valuable resources available online for Codesys, so a quick search using relevant keywords can provide great insights. You can also check out tutorials from experts like Tohid Alizadeh and Jakob Sagatowski on YouTube, as well as consulting Codesys documentation for additional support (although the help files may be concise).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What are the unique requirements for the HMI in the project involving the portable rollformer for roofing metal?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The client prefers non-touchscreen operation, requiring all interactions on the screen to be done through buttons, function keys, a membrane keypad, or a similar mechanism. The HMI must also function at temperatures as low as -10 degrees Celsius and be readable outdoors.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How does the IFM CR1074 meet the requirements for the project?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The IFM CR1074 meets the criteria of non-touchscreen operation, functioning at low temperatures, and being readable outdoors. It is planned to be used solely as an HMI to communicate with a Do-More BRX PLC via Modbus or Ethernet/IP.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: What are the key considerations when configuring the IFM CR1074 and Do-More BRX PLC integration using Modbus in Codesys?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The configuration involves establishing Modbus addresses, potentially converting registers to 32-bit integers, and ensuring that variables editable on the HMI can be written back to the PLC. The setup may require determining whether the CR1074 should act as the Modbus slave or Master and configuring it to display values from the PLC while allowing input of new values to be written back.</p>
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

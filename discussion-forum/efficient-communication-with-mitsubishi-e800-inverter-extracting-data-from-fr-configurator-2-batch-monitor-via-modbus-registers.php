
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am currently developing a software program for PC that interfaces with a Mitsubishi E800 inverter using Modbus over Ethernet (Modbus/TCP) for efficient communication. The FR Configurator 2 software, which is utilized to configure the inverter, includes a batch monitor function with 58 different selectable readings for monitoring and">
    <meta name="keywords" content="mitsubishi e800 inverter, modbus over ethernet, modbus/tcp communication, fr configurator 2 software, batch monitor function, selectable readings, data extraction, pc software interface, modbus holding registers, modbus register documentation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/efficient-communication-with-mitsubishi-e800-inverter-extracting-data-from-fr-configurator-2-batch-monitor-via-modbus-registers">
    <title>Efficient Communication with Mitsubishi E800 Inverter: Extracting Data from FR Configurator 2 Batch Monitor via Modbus Registers. | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Efficient Communication with Mitsubishi E800 Inverter: Extracting Data from FR Configurator 2 Batch Monitor via Modbus Registers. | Oxmaint Community">
    <meta property="og:description" content="I am currently developing a software program for PC that interfaces with a Mitsubishi E800 inverter using Modbus over Ethernet (Modbus/TCP) for efficient communication. The FR Configurator 2 software, which is utilized to configure the inverter, includes a batch monitor function with 58 different selectable readings for monitoring and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/efficient-communication-with-mitsubishi-e800-inverter-extracting-data-from-fr-configurator-2-batch-monitor-via-modbus-registers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Efficient Communication with Mitsubishi E800 Inverter: Extracting Data from FR Configurator 2 Batch Monitor via Modbus Registers. | Oxmaint Community">
    <meta name="twitter:description" content="I am currently developing a software program for PC that interfaces with a Mitsubishi E800 inverter using Modbus over Ethernet (Modbus/TCP) for efficient communication. The FR Configurator 2 software, which is utilized to configure the inverter, includes a batch monitor function with 58 different selectable readings for monitoring and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/efficient-communication-with-mitsubishi-e800-inverter-extracting-data-from-fr-configurator-2-batch-monitor-via-modbus-registers"
      },
      "headline": "Efficient Communication with Mitsubishi E800 Inverter: Extracting Data from FR Configurator 2 Batch Monitor via Modbus Registers.",
      "description": "I am currently developing a software program for PC that interfaces with a Mitsubishi E800 inverter using Modbus over Ethernet (Modbus/TCP) for efficient communication. The FR Configurator 2 software, which is utilized to configure the inverter, includes a batch monitor function with 58 different selectable readings for monitoring and",
      "author": {
        "@type": "Person",
        "name": "RichardEll"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-01",
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
                <h1 class="text-white">Efficient Communication with Mitsubishi E800 Inverter: Extracting Data from FR Configurator 2 Batch Monitor via Modbus Registers.</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>RichardEll</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">315</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">336</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am currently developing a software program for PC that interfaces with a Mitsubishi E800 inverter using Modbus over Ethernet (Modbus/TCP) for efficient communication. The FR Configurator 2 software, which is utilized to configure the inverter, includes a batch monitor function with 58 different selectable readings for monitoring and display. These readings are precisely the data points I aim to extract in my PC software. However, it is unclear how these readings are calculated within the software. Ideally, I am looking for a consecutive bank of Modbus holding registers that can be easily accessed in one read operation. Despite reviewing the Modbus register documentation, I have not come across a simple solution like "Output frequency" as seen in the FR Configurator 2 software. It seems that the registers store more complex data, lacking straightforward readings like the one mentioned.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If my memory serves me correctly, the PR numbers range from PR0-999, corresponding to registers 41000 to 41999. I am unsure which registers are for reading or read/write functions. I came across a manual for the Mitsubishi Electric FR-E800 that seems to be more reliable than the one on the Mitsubishi website, which appears to be corrupted with missing data. The FR-E800 instruction manual for communication can be viewed and downloaded here. Additionally, a slightly improved version of the manual can be found at the following link: https://eu-assets.contentstack.com/v3/assets/blt5412ff9af9aef77f/blt0b885f651034bc7e/6172b5b657efba120b414818/c982ca47-18ee-11eb-901c-b8ca3a62a094_ib0600871engd.pdf</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, thank you for your response. Apologies for the confusion earlier. I am actually referring to a Mitsubishi A840 inverter. I received assistance from a Mitsubishi representative, but even with the manual, I struggled to locate the section detailing the registers I needed. However, it can be found on page 447 of the "FR-A800 instruction manual (detailed)". There is a set of 58 registers starting at address 40201 in the holding registers. This information was helpful and resolved my issue. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RichardEll</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I extract specific data points from a Mitsubishi E800 inverter using Modbus over Ethernet?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To extract specific data points from the inverter, you can utilize Modbus over Ethernet (Modbus/TCP) communication protocol. You can refer to the FR Configurator 2 software's batch monitor function, which offers 58 different selectable readings for monitoring and display.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Are there consecutive Modbus holding registers that can be easily accessed to retrieve the desired data points from the inverter?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While reviewing the Modbus register documentation, it may not be straightforward to find a consecutive bank of registers that directly correspond to the data points displayed in the FR Configurator 2 software. The data stored in the registers might be more complex and not as simple as the readings provided in the software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I access detailed information such as "Output frequency" from the inverter through Modbus registers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Extracting detailed information like "Output frequency" from the inverter using Modbus registers may require understanding the specific register mappings and data structures used by the inverter. It is essential to explore the documentation provided by Mitsubishi for the Modbus communication setup and data interpretation.</p>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am seeking assistance with reconfiguring the communication settings for my Mettler Toledo IND780 scale connected to a SLC5/04 PLC with a 1747-sn RIO Scanner card. The A-B RIO, PLC Data Format, and PLC Message slots need to be adjusted. If anyone is experienced with this equipment, your">
    <meta name="keywords" content="mettler toledo ind780 scale communication settings, troubleshooting mettler toledo ind780 scale communication, slc5/04 plc communication with mettler toledo ind780 scale, 1747-s">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-settings-for-mettler-toledo-ind780-scale-with-slc5-04-plc-and-1747-sn-rio-scanner-card">
    <title>Troubleshooting Communication Settings for Mettler Toledo IND780 Scale with SLC5/04 PLC and 1747-SN RIO Scanner Card | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Communication Settings for Mettler Toledo IND780 Scale with SLC5/04 PLC and 1747-SN RIO Scanner Card | Oxmaint Community">
    <meta property="og:description" content="Hello, I am seeking assistance with reconfiguring the communication settings for my Mettler Toledo IND780 scale connected to a SLC5/04 PLC with a 1747-sn RIO Scanner card. The A-B RIO, PLC Data Format, and PLC Message slots need to be adjusted. If anyone is experienced with this equipment, your">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-communication-settings-for-mettler-toledo-ind780-scale-with-slc5-04-plc-and-1747-sn-rio-scanner-card">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Communication Settings for Mettler Toledo IND780 Scale with SLC5/04 PLC and 1747-SN RIO Scanner Card | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am seeking assistance with reconfiguring the communication settings for my Mettler Toledo IND780 scale connected to a SLC5/04 PLC with a 1747-sn RIO Scanner card. The A-B RIO, PLC Data Format, and PLC Message slots need to be adjusted. If anyone is experienced with this equipment, your">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-communication-settings-for-mettler-toledo-ind780-scale-with-slc5-04-plc-and-1747-sn-rio-scanner-card"
      },
      "headline": "Troubleshooting Communication Settings for Mettler Toledo IND780 Scale with SLC5/04 PLC and 1747-SN RIO Scanner Card",
      "description": "Hello, I am seeking assistance with reconfiguring the communication settings for my Mettler Toledo IND780 scale connected to a SLC5/04 PLC with a 1747-sn RIO Scanner card. The A-B RIO, PLC Data Format, and PLC Message slots need to be adjusted. If anyone is experienced with this equipment, your",
      "author": {
        "@type": "Person",
        "name": "BrettL"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-10",
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
                <h1 class="text-white">Troubleshooting Communication Settings for Mettler Toledo IND780 Scale with SLC5/04 PLC and 1747-SN RIO Scanner Card</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BrettL</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2322</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">9</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am seeking assistance with reconfiguring the communication settings for my Mettler Toledo IND780 scale connected to a SLC5/04 PLC with a 1747-sn RIO Scanner card. The A-B RIO, PLC Data Format, and PLC Message slots need to be adjusted. If anyone is experienced with this equipment, your guidance would be greatly appreciated. Both communication lights on the 1747 and AB-RIO are displaying solid Green. The 1747-sn is located in slot 1 of the PLC with the following setup: 
- Scanned input words: 32
- Scanned output words: 32
- ISR #: 0
- M0/M1 Length: 3300
- G file Length: 3
- G file Config: Group 0, Full rack
The information needed for the IND780 includes:
- A-B RIO:
   - Node address: (octal/decimal)
   - Start Quarter: (1-4)
   - Last Rack: (enable/disable)
   - Data Rate: 57.6kB
   - Block Transfer: (enable/disable)
- PLC Data Format: Integer, Float, Division, Template, Application (float)
- Byte order: historical, word swap, byte swap
- PLC Message slots: to address the issue at hand
I have experimented with various configurations but have not been successful in viewing data in the input module. The only way I have been able to transmit data from the scale is by utilizing a template and selecting a shared data value. Mettler Toledo representatives mentioned that setting up floating point correctly should automatically send data from the scale. Within the output module of the PLC, a byte changes every 6 seconds with values of 10, 11, 12, and then clears. These values likely correspond to gross weight, net weight, and tare weight.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello there! Has this issue been resolved yet? I'm asking because I'm currently experiencing the same problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>manex</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I managed to resolve the issue by adjusting the communication configuration in the Ind780. Although it's been some time, if you are experiencing the same issue, I may be able to assist you with it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BrettL</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm struggling to locate AB RIO cards for the 780 series, as they appear to have been discontinued and are no longer available for purchase. Can anyone advise me on where I can find these essential cards? I need them to last until we are able to upgrade all units next year.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Michaelhyatt</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I configure the communication settings for the Mettler Toledo IND780 scale with a SLC5/04 PLC and 1747-SN RIO Scanner Card?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To configure the communication settings, you need to adjust the A-B RIO settings (including Node address, Start Quarter, Last Rack, Data Rate, and Block Transfer), PLC Data Format (Integer, Float, Division, Template, Application), Byte order (historical, word swap, byte swap), and PLC Message slots as per the specific requirements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What should I do if I am unable to view data in the input module despite experimenting with various configurations on the Mettler Toledo IND780 scale?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are unable to view data in the input module, consider setting up the floating point correctly as suggested by Mettler Toledo representatives. They mentioned that configuring the floating point correctly should automatically send data from the scale. Additionally, check the output module of the PLC for any changes in bytes that may correspond to different weight values.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I ensure successful communication between the Mettler Toledo IND780 scale and the SLC5/04 PLC with the 1747-SN RIO Scanner Card?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To ensure successful communication, verify that the A-B RIO settings, PLC Data Format, and PLC Message slots are correctly configured according to the requirements of the equipment. Also, monitor the communication lights on</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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

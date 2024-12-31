
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Our company created a compact testing device utilizing a Micro800 PLC and CCW software due to its simplicity. As we explore adding more functions, we are uncertain if CCW can meet our requirements. One feature we are keen to incorporate is the ability to print pass/fail labels. Although the">
    <meta name="keywords" content="micro800 plc, ccw software, pass/fail labels, printing labels, printer communication, connecting printer to micro800, plc testing device, compact testing, user manual, printer integration, ccw capabilities, printing from micro800, label printing">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-print-pass-fail-labels-from-a-micro800-plc">
    <title>How to Print Pass/Fail Labels from a Micro800 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Print Pass/Fail Labels from a Micro800 PLC | Oxmaint Community">
    <meta property="og:description" content="Our company created a compact testing device utilizing a Micro800 PLC and CCW software due to its simplicity. As we explore adding more functions, we are uncertain if CCW can meet our requirements. One feature we are keen to incorporate is the ability to print pass/fail labels. Although the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-print-pass-fail-labels-from-a-micro800-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Print Pass/Fail Labels from a Micro800 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Our company created a compact testing device utilizing a Micro800 PLC and CCW software due to its simplicity. As we explore adding more functions, we are uncertain if CCW can meet our requirements. One feature we are keen to incorporate is the ability to print pass/fail labels. Although the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-print-pass-fail-labels-from-a-micro800-plc"
      },
      "headline": "How to Print Pass/Fail Labels from a Micro800 PLC",
      "description": "Our company created a compact testing device utilizing a Micro800 PLC and CCW software due to its simplicity. As we explore adding more functions, we are uncertain if CCW can meet our requirements. One feature we are keen to incorporate is the ability to print pass/fail labels. Although the",
      "author": {
        "@type": "Person",
        "name": "Drew Ethridge"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-31",
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
                <h1 class="text-white">How to Print Pass/Fail Labels from a Micro800 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Drew Ethridge</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">393</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">266</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Our company created a compact testing device utilizing a Micro800 PLC and CCW software due to its simplicity. As we explore adding more functions, we are uncertain if CCW can meet our requirements. One feature we are keen to incorporate is the ability to print pass/fail labels. Although the user manual suggests that the software can communicate with a printer, we are seeking insights from those who have connected a printer to a Micro800. Tutorials and examples on this topic have been challenging to find.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Which Micro 800 series and printer model should you choose for your project? The Micro 810 does not have serial or Ethernet capabilities, while the 830 lacks Ethernet connectivity. On the other hand, the 820 and 850 models offer both options. When it comes to printing, you can use either Serial or Telnet (via Ethernet TCP Socket) for communication. Rockwell provides sample code imports for both methods.

Regardless of the Micro 800 series you choose, here are some essential guidelines for basic programming logic: utilize a single instruction for communication output and ensure that a program only requires one instruction for each print output. Send ASCII characters or strings to a buffer, then transmit each buffer line to the output instruction. This approach helps to handle any slow or lost communications while preserving the data stored in the buffer.

For serial communications, focus on sending data to the printer without worrying about receiving data back. Typically, only two lines are needed for communication: the send line (TxD from the PLC to the RxD of the printer) and the common line (GND). If you need to use Telnet for serial communication and a serial port is unavailable or already in use, you can install a cost-effective device server like the Antaira ST-501 to convert the signal.

When utilizing Telnet, always include communication timeout and error handling mechanisms to automatically close sockets and clear instruction errors. It is important to note that the Rockwell sample code may not include these features. Additionally, for increased data capacity or longer loglines, most mid-level office printers support the Telnet Port 9100 communication protocol. For advanced printing capabilities, ensure that the printer is equipped with PCL6 functionality to modify fonts and colors. You can add PCL characters before and after text strings to achieve this desired effect. Make sure to incorporate these best practices to optimize your Micro 800 and printer setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DaDaDadeo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for ways to have a PLC (such as Logix) communicate with a specific printer (potentially a Zebra printer) for a unique printing task? You can find helpful discussions on forums on how to pre-configure the printer to print a specific format, with some data sourced from the PLC. For example, the PLC can send a barcode-equivalent number for printing. Check out the thread about a Zebra printer for sample code and tips on making sure your printer and PLC can communicate effectively, potentially using models like the 820 or 850 and an E/IP-capable printer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Can CCW software for Micro800 PLC support printing pass/fail labels?
- While the user manual mentions the software's capability to communicate with a printer, actual implementation for printing pass/fail labels can be challenging.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Are there any tutorials or examples available for connecting a printer to a Micro800 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Finding tutorials and examples specifically for connecting a printer to a Micro800 PLC can be difficult, as this topic seems to have limited resources online.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What considerations should be taken into account when trying to print pass/fail labels from a Micro800 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - When attempting to print pass/fail labels, factors to consider include the compatibility of the printer with the PLC, the communication protocol required, and the programming steps needed to send print commands from the PLC.</p>
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

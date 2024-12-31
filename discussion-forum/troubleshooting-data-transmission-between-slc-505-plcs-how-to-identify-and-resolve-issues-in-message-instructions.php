
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am in need of setting up a message instruction to transmit data between two SLC-505 PLCs. I am experiencing difficulties in transferring the data successfully. I have provided pictures illustrating the configuration and setup for reference. I have set a timer.dn bit to initiate the message instruction,">
    <meta name="keywords" content="slc-505 plcs, data transmission, troubleshooting, message instruction, identify issues, resolve issues, timer.dn bit, .en bit, pressure value, floating point format, integer conversion, .er bit, error identification, configuration">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-data-transmission-between-slc-505-plcs-how-to-identify-and-resolve-issues-in-message-instructions">
    <title>Troubleshooting Data Transmission between SLC-505 PLCs: How to Identify and Resolve Issues in Message Instructions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Data Transmission between SLC-505 PLCs: How to Identify and Resolve Issues in Message Instructions | Oxmaint Community">
    <meta property="og:description" content="Hello, I am in need of setting up a message instruction to transmit data between two SLC-505 PLCs. I am experiencing difficulties in transferring the data successfully. I have provided pictures illustrating the configuration and setup for reference. I have set a timer.dn bit to initiate the message instruction,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-data-transmission-between-slc-505-plcs-how-to-identify-and-resolve-issues-in-message-instructions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Data Transmission between SLC-505 PLCs: How to Identify and Resolve Issues in Message Instructions | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am in need of setting up a message instruction to transmit data between two SLC-505 PLCs. I am experiencing difficulties in transferring the data successfully. I have provided pictures illustrating the configuration and setup for reference. I have set a timer.dn bit to initiate the message instruction,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-data-transmission-between-slc-505-plcs-how-to-identify-and-resolve-issues-in-message-instructions"
      },
      "headline": "Troubleshooting Data Transmission between SLC-505 PLCs: How to Identify and Resolve Issues in Message Instructions",
      "description": "Hello, I am in need of setting up a message instruction to transmit data between two SLC-505 PLCs. I am experiencing difficulties in transferring the data successfully. I have provided pictures illustrating the configuration and setup for reference. I have set a timer.dn bit to initiate the message instruction,",
      "author": {
        "@type": "Person",
        "name": "Ones_Zeros"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-30",
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
                <h1 class="text-white">Troubleshooting Data Transmission between SLC-505 PLCs: How to Identify and Resolve Issues in Message Instructions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Ones_Zeros</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">310</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">118</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am in need of setting up a message instruction to transmit data between two SLC-505 PLCs. I am experiencing difficulties in transferring the data successfully. I have provided pictures illustrating the configuration and setup for reference. I have set a timer.dn bit to initiate the message instruction, but I am not observing the .en bit turning true. The data being transferred is a pressure value in floating point format, which I have converted to an integer before transmission. Despite no apparent errors, the .en bit never activates. Is there a way to utilize the .ER bit to identify errors in the MSG instruction? I would appreciate it if you could review the screenshots and point out any errors on my part. Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are experiencing a full queue space with message buffers, take a look at the number of MSG instructions you have. Consider staggering them to optimize performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for providing assistance. I have only programmed one message instruction on this programmable logic controller (PLC).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ones_Zeros</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ones_Zeros expressed gratitude for the assistance with a PLC issue involving a single message instruction. Do you have additional PLCs, HMIs, or programmers linked to this PLC? Furthermore, what is the reasoning behind selecting "YES" for multihop in SLC to SLC communications? Your insight is appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I made a mistake with the multihop feature thinking it was necessary. Can I remove it? I need to confirm that no other PLCs are sending data to the PLC I am trying to read from using the message instruction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ones_Zeros</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have noticed that another programmable logic controller (plc) is transmitting data to the plc I am currently retrieving information from, causing a buffer error. They seem to be out of sync. How can I resolve this buffer error issue? Your assistance is greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ones_Zeros</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It is unlikely that the buffer overrun is the cause of the issue. It has been a while since I last worked on slc messaging. If you are only toggling the read by the timer, the message itself may have filled the buffers with unsuccessful reads. To troubleshoot, start over and redo the multihop process. Include an xio msg.en in series with the timer.dn, switch the program back to run mode to clear the buffers, and observe if the message initiates successfully.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apart from the multi-hop issue, everything else seems to be in good condition. As a temporary troubleshooting measure, I suggest replacing the input before the MSG with an XIC on an unused B3 bit. Toggle that bit to check if the EN and ER bits activate. Another troubleshooting step would be to add a parallel branch around the MSG with a Latch on another unused B3 bit. If the latch activates, it confirms that the MSG is indeed true. The EN bit will be triggered when the rung becomes true, which will happen when the Timer DN switches on. However, this may only last for one scan. The EN will stay on even if the rung becomes false, but it will switch off when the MSG rung is false and either the DN or ER become true. Your logic is retriggering every 250ms, which resets the DN and ER.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I troubleshoot issues with data transmission between SLC-505 PLCs using message instructions?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot data transmission issues, ensure that the message instruction setup is correct, check for errors in the configuration, validate data conversion processes, and monitor relevant status bits like .en and .ER.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why is the .en bit not turning true after setting up a message instruction between two SLC-505 PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The .en bit may not activate due to configuration errors, improper data conversion, or other setup issues. Review your configuration, data format conversions, and message instruction settings to identify the root cause.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can the .ER bit be used to identify errors in the MSG instruction for data transmission?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, the .ER bit in the message instruction can help identify errors. Monitor this bit to troubleshoot issues related to data transmission between the SLC-505 PLCs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I ensure successful transmission of floating-point data between two SLC-505 PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To transmit floating-point data successfully, ensure proper data conversion to integer format before transmission, validate message instruction setup, and monitor status bits like .en and .ER for error identification.</p>
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

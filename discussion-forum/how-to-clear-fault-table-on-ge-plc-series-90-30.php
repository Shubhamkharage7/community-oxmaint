
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, knowledgeable experts! Our GE PLC Series 90-30, which is more than 20 years old, has suddenly stopped running. The run LED is off and the battery LED is not illuminated. The HMI is displaying an error message stating that the PLC has lost a card. Unfortunately, we do">
    <meta name="keywords" content="ge plc series 90-30, fault table, clear fault table, error message, run led off, battery led not illuminated, hmi display, plc lost a card, logicmaster 90 software, troubleshooting, resolve issue, error">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-clear-fault-table-on-ge-plc-series-90-30">
    <title>How to Clear Fault Table on GE PLC Series 90-30 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Clear Fault Table on GE PLC Series 90-30 | Oxmaint Community">
    <meta property="og:description" content="Greetings, knowledgeable experts! Our GE PLC Series 90-30, which is more than 20 years old, has suddenly stopped running. The run LED is off and the battery LED is not illuminated. The HMI is displaying an error message stating that the PLC has lost a card. Unfortunately, we do">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-clear-fault-table-on-ge-plc-series-90-30">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Clear Fault Table on GE PLC Series 90-30 | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, knowledgeable experts! Our GE PLC Series 90-30, which is more than 20 years old, has suddenly stopped running. The run LED is off and the battery LED is not illuminated. The HMI is displaying an error message stating that the PLC has lost a card. Unfortunately, we do">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-clear-fault-table-on-ge-plc-series-90-30"
      },
      "headline": "How to Clear Fault Table on GE PLC Series 90-30",
      "description": "Greetings, knowledgeable experts! Our GE PLC Series 90-30, which is more than 20 years old, has suddenly stopped running. The run LED is off and the battery LED is not illuminated. The HMI is displaying an error message stating that the PLC has lost a card. Unfortunately, we do",
      "author": {
        "@type": "Person",
        "name": "mike3475"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-16",
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
                <h1 class="text-white">How to Clear Fault Table on GE PLC Series 90-30</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mike3475</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">355</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">160</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, knowledgeable experts! Our GE PLC Series 90-30, which is more than 20 years old, has suddenly stopped running. The run LED is off and the battery LED is not illuminated. The HMI is displaying an error message stating that the "PLC has lost a card." Unfortunately, we do not have the software (Logicmaster 90) to address this issue. Can you provide guidance on how to clear the fault table of the PLC? Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Losing an I/O module typically isn't a critical issue, so there may be other factors at play. Do you know what HMI system you're using? Some editions of GE's Cimplicity HMI software allow you to reset the fault table. If your CPU has a keyswitch and is set to run/stop mode, you might be able to restart it unless the fault is severe. Otherwise, you'll need the programming software to reset the fault table. The entry in the fault table is crucial for diagnosing the root cause of the stoppage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If an I/O module fails, it is not necessarily a critical issue and there may be other factors at play. Are you using GE's Cimplicity HMI software? Certain versions of this software have the capability to clear fault tables. If your CPU has a keyswitch for run/stop functions, you may be able to use it to restart, unless the fault is severe. If not, you will need programming software to clear the fault table. The fault entry in the table can help troubleshoot the root cause of the issue.

We encountered a situation where the top latch of an output card was broken, so we secured it with tape. It is possible that the tape came loose, leading to communication issues with the output card. Attempting to clear the fault using the key switch was unsuccessful, and there is no option on the HMI to clear the fault. The solution may lie in using logicmaster 90 software to resolve the fault. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mike3475</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're in need of Logicmaster software, please message me your email. I have the program stored on my Google Drive and can add you to the sharing list. Please note that Logicmaster requires a 32-bit operating system to run properly, as the serial port driver is incompatible with 64-bit systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve has sent me the LM90 software, and I understand that I need to install it on a virtual machine (VM) running a 32-bit operating system. Which VM would be most suitable for this purpose? The GE PLC being used utilizes the SNP port on the power supply and port 2 on the CPU351, leaving only port 1 RS232 (RJ11) open. I have come across a cable with an FDTI chip, and you can find it here: [link]. Can someone confirm if this cable is the correct one to use? Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mike3475</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I operate Logicmaster through DOSBox on a 32-bit Windows XP virtual machine using VMWare. The cable provided seems compatible and should work effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>The original cable link is no longer accessible, but I discovered a new one available on eBay: the IC693CBL316 cable for GE Fanuc programming. Grab yours while it's in stock! This cable is from the brand FANUC with the MPN IC693CBL316. Don't miss out - get yours on eBay today! Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mike3475</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're interested in purchasing, check out www.PLCCable.com, where one of our members, geniusintraining, also sells similar products. While I can't vouch for the eBay seller, I can confidently say that geniusintraining offers reliable products and excellent customer service.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Why is my GE PLC Series 90-30 displaying an error message about losing a card and how do I address this issue?
- The error message indicating that the "PLC has lost a card" can occur due to various reasons, such as a loose connection or a faulty card. To address this issue, you may need to check and ensure all cards are properly seated and functioning correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I clear the fault table on a GE PLC Series 90-30 without the Logicmaster 90 software?</h4>
<p class='text-muted'><strong>Answer:</strong> - Unfortunately, clearing the fault table on a GE PLC Series 90-30 typically requires using the Logicmaster 90 software. Without access to the software, it may be challenging to clear the fault table directly from the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What should I do if the run LED is off and the battery LED is not illuminated on my GE PLC Series 90-30?</h4>
<p class='text-muted'><strong>Answer:</strong> - If the run LED is off and the battery LED is not illuminated on your GE PLC Series 90-30, it could indicate a power issue or a potential hardware failure. You may need to check the power supply, connections, and the status of the battery to troubleshoot and resolve the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it possible to reset the GE PLC Series 90-30 to clear faults without using the Logicmaster 90 software?</h4>
<p class='text-muted'><strong>Answer:</strong> - While it may be possible to reset the GE PLC Series 90-30 to clear faults without the Logicmaster 90 software,</p>
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

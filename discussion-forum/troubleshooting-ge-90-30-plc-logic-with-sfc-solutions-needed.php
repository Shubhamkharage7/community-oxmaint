
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I managed to salvage a Fanuc servo motor and drive from a discarded lathe barfeeder and am looking to get it running for a DIY project. To communicate with the servo drive/amplifier, I have the necessary GE 90-30 PLC with the I/O Master Link module. I aim to control">
    <meta name="keywords" content="ge 90-30 plc troubleshooting, sfc logic solutions, fanuc servo motor diy project, ge 90-30 plc programming commands, proficy machine edition error message, logicmaster">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-90-30-plc-logic-with-sfc-solutions-needed">
    <title>Troubleshooting GE 90-30 PLC Logic with SFC: Solutions Needed | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting GE 90-30 PLC Logic with SFC: Solutions Needed | Oxmaint Community">
    <meta property="og:description" content="I managed to salvage a Fanuc servo motor and drive from a discarded lathe barfeeder and am looking to get it running for a DIY project. To communicate with the servo drive/amplifier, I have the necessary GE 90-30 PLC with the I/O Master Link module. I aim to control">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ge-90-30-plc-logic-with-sfc-solutions-needed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting GE 90-30 PLC Logic with SFC: Solutions Needed | Oxmaint Community">
    <meta name="twitter:description" content="I managed to salvage a Fanuc servo motor and drive from a discarded lathe barfeeder and am looking to get it running for a DIY project. To communicate with the servo drive/amplifier, I have the necessary GE 90-30 PLC with the I/O Master Link module. I aim to control">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ge-90-30-plc-logic-with-sfc-solutions-needed"
      },
      "headline": "Troubleshooting GE 90-30 PLC Logic with SFC: Solutions Needed",
      "description": "I managed to salvage a Fanuc servo motor and drive from a discarded lathe barfeeder and am looking to get it running for a DIY project. To communicate with the servo drive/amplifier, I have the necessary GE 90-30 PLC with the I/O Master Link module. I aim to control",
      "author": {
        "@type": "Person",
        "name": "Jaycobie"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-20",
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
                <h1 class="text-white">Troubleshooting GE 90-30 PLC Logic with SFC: Solutions Needed</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jaycobie</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">347</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">144</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I managed to salvage a Fanuc servo motor and drive from a discarded lathe barfeeder and am looking to get it running for a DIY project. To communicate with the servo drive/amplifier, I have the necessary GE 90-30 PLC with the I/O Master Link module. I aim to control basic functions like start/stop, speed control, and possibly reading the encoder. I am currently trying to decipher the existing logic on the 90-30 PLC to understand the previous programming commands, even though it may be challenging to interpret without comments. The Proficy software is showing an error message when I attempt to upload the logic from the PLC, indicating a configuration version mismatch with the software. It seems I may need Logicmaster 90 with the SFC extension, which is no longer easily accessible. If unable to obtain the extension, I am considering wiping the PLC's memory with Proficy Machine Edition and creating my own logic. Would this work despite the current presence of SFC logic? Any suggestions or downloads for the SFC extension would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>First and foremost, let's address the question: Can you reset and clear the memory to start fresh? The answer is yes. SFC, which was an additional feature to Logicmaster, was originally distributed on a separate 3.5" floppy disk. Installation had to be done directly from the floppy disk, as it could not be transferred to the computer's hard drive. It is worth noting that you may encounter issues when trying to use a USB drive instead of a floppy. For the serial communications driver to function properly, Logicmaster must be running on a 32-bit operating system and your computer must have a physical serial port. Challenges may arise when using a USB/serial converter with Logicmaster, as some users experience intermittent connection drops. If you are interested in obtaining the SFC installer, please reach out to me, and I will check my software archives. Additionally, even if you do not have the SFC option installed, it is possible to upload the SFC program and hardware configuration using Logicmaster and print it out. If you need access to Logicmaster, I have it stored on my Google Drive. Feel free to send me a private message with your email address so I can add you to the sharing list.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey confirmed that it is possible to reset the memory and start fresh. The SFC software was an additional feature to Logicmaster that required installation from a separate 3.5" floppy disk. It was not possible to transfer the contents to the computer's hard drive. It is recommended to run Logicmaster on a 32-bit operating system with a real serial port for the serial communications driver to function properly. Using a USB/serial converter may result in occasional connection drops. Additionally, it is noted that the SFC program and hardware configuration can be uploaded and printed in Logicmaster, even without the SFC option installed. If interested, the files can be shared via Google Drive by sending a private message with an email address. Considering the outdated computer requirements for Logicmaster, starting fresh with a clean slate by wiping the PLC may be a simpler option for troubleshooting and learning PLC programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jaycobie</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I communicate with a Fanuc servo motor using a GE 90-30 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To communicate with a Fanuc servo motor using a GE 90-30 PLC, you will need the necessary I/O Master Link module and appropriate software such as Logicmaster 90 with the SFC extension.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What should I do if I encounter a configuration version mismatch error when trying to upload logic from the GE 90-30 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you encounter a configuration version mismatch error, consider obtaining Logicmaster 90 with the SFC extension to ensure compatibility with the software. Alternatively, wiping the PLC's memory with Proficy Machine Edition and creating your own logic could be a viable solution.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it possible to create new logic on the GE 90-30 PLC despite the current presence of SFC logic?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to create new logic on the GE 90-30 PLC even with existing SFC logic. You can use Proficy Machine Edition to clear the PLC's memory and start fresh with your own programming.</p>
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

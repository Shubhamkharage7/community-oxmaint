
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am encountering communication issues between two ControlLogix processors when trying to use the MSG instruction with the CIP Data Table Read message type. Specifically, I am attempting to read an 8 double word array but keep receiving an IOI Syntax Error message. I even tried reducing the array">
    <meta name="keywords" content="controllogix, msg instruction, cip data table read, communication issues, troubleshooting, ioi syntax error, double word array, processor, error message, array size, element, solution, community thread, controllogix processors, communication problem">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-msg-instruction-communication-issues-with-cip-data-table-read">
    <title>Troubleshooting ControlLogix MSG Instruction Communication Issues with CIP Data Table Read | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting ControlLogix MSG Instruction Communication Issues with CIP Data Table Read | Oxmaint Community">
    <meta property="og:description" content="I am encountering communication issues between two ControlLogix processors when trying to use the MSG instruction with the CIP Data Table Read message type. Specifically, I am attempting to read an 8 double word array but keep receiving an IOI Syntax Error message. I even tried reducing the array">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-msg-instruction-communication-issues-with-cip-data-table-read">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting ControlLogix MSG Instruction Communication Issues with CIP Data Table Read | Oxmaint Community">
    <meta name="twitter:description" content="I am encountering communication issues between two ControlLogix processors when trying to use the MSG instruction with the CIP Data Table Read message type. Specifically, I am attempting to read an 8 double word array but keep receiving an IOI Syntax Error message. I even tried reducing the array">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-controllogix-msg-instruction-communication-issues-with-cip-data-table-read"
      },
      "headline": "Troubleshooting ControlLogix MSG Instruction Communication Issues with CIP Data Table Read",
      "description": "I am encountering communication issues between two ControlLogix processors when trying to use the MSG instruction with the CIP Data Table Read message type. Specifically, I am attempting to read an 8 double word array but keep receiving an IOI Syntax Error message. I even tried reducing the array",
      "author": {
        "@type": "Person",
        "name": "garodrig"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-03",
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
                <h1 class="text-white">Troubleshooting ControlLogix MSG Instruction Communication Issues with CIP Data Table Read</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>garodrig</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5717</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">51</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am encountering communication issues between two ControlLogix processors when trying to use the MSG instruction with the CIP Data Table Read message type. Specifically, I am attempting to read an 8 double word array but keep receiving an "IOI Syntax Error" message. I even tried reducing the array size to 1 element but the error persists. Has anyone else experienced this issue and found a solution? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you using Ethernet, ControlNet, or DH+ protocol in your setup? It is recommended to avoid using CIP if you are using DH+ protocol.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Oakley</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you experienced in setting up this type of messaging? If this is your first attempt, make sure you connect the processors using ethernet, specifically the ENBT/A cards. Begin by adding the other processor's ENBT/A card to your I/O configuration from the processor you want to perform the CIP read. Then, in the message instruction configuration tab, specify the path to the processor's name in the I/O configuration. Ensure that your source and destination elements are valid. Apologies if this is basic and not what you were seeking.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bobwithdana</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are receiving an error message indicating a missing tag or incorrect path to the processor when attempting a CIP read, the first step is to add the other processor's ENBT/A card to your I/O configuration. It is important to note that communication cards should not be included in the I/O configuration for MSG purposes. The I/O configuration is specifically for I/O control.

To specify the path correctly, use the following format: 1,<Local ENBT SLOT>,2,<Remote ENBT IP>, 1, <PROCESSOR SLOT> This will help ensure smooth communication between processors and avoid errors during CIP reads.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When troubleshooting error 16#203 as an IO Fault error, it is important to ensure that the communication cards are correctly configured. Adding communication cards in the I/O configuration for MSG instructions can lead to issues. Remember, the I/O configuration is specifically for I/O control, not communication. To resolve this error, specify the correct path by using the following format: 1,<Local ENBT SLOT>,2,<Remote ENBT IP>, 1,<PROCESSOR SLOT>. If you are experiencing this error, it could be due to a missing tag on the opposite side or an incorrect path to the processor. Clarifying and addressing these issues will help resolve the problem.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>divinecontrol</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the PLCTalk forum community! The thread you are responding to was last active in 2005, over 18 years ago. To contribute your own question, please navigate back to the main Q&A page and make use of the vibrant new orange "Start a New Thread" button located on the right side of the screen. When posting, be sure to provide ample context and detail, such as the specific module part numbers being utilized, the desired program operation, and any troubleshooting steps already attempted. This information will help other members assist you more effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the "IOI Syntax Error" message when using the MSG instruction with the CIP Data Table Read message type in ControlLogix processors?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The "IOI Syntax Error" message could be caused by various factors such as incorrect addressing, data type mismatch, or improper configuration of the MSG instruction. Troubleshooting these aspects could help resolve the issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot communication issues between ControlLogix processors when using the MSG instruction with the CIP Data Table Read message type?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot communication issues, you can check the configuration of the MSG instruction, verify the addressing scheme, ensure data types match between devices, and confirm that the network settings are correct. Additionally, checking for any firmware compatibility issues between the processors is recommended.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any specific considerations when reading an array using the CIP Data Table Read message type in ControlLogix processors?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When reading an array using the CIP Data Table Read message type, ensure that the array size and data types match between the devices involved in the communication. It's also important to double-check the addressing and configuration settings to avoid errors like the "IOI Syntax Error" message.</p>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey everyone, I am currently setting up an OLDI card which involves creating a message instruction in the PLC to activate an event on the card. I attempted to create a new Controller tag of the type MESSAGE, but encountered a warning during verification stating message tag not configured.">
    <meta name="keywords" content="logix5000 troubleshooting, logix5000 message control problems, rslogix5000 v01 issues, plc message instruction setup, controller tag configuration error, message">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-logix5000-message-control-problems">
    <title>Troubleshooting Logix5000 Message Control Problems | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Logix5000 Message Control Problems | Oxmaint Community">
    <meta property="og:description" content="Hey everyone, I am currently setting up an OLDI card which involves creating a message instruction in the PLC to activate an event on the card. I attempted to create a new Controller tag of the type MESSAGE, but encountered a warning during verification stating message tag not configured.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-logix5000-message-control-problems">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Logix5000 Message Control Problems | Oxmaint Community">
    <meta name="twitter:description" content="Hey everyone, I am currently setting up an OLDI card which involves creating a message instruction in the PLC to activate an event on the card. I attempted to create a new Controller tag of the type MESSAGE, but encountered a warning during verification stating message tag not configured.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-logix5000-message-control-problems"
      },
      "headline": "Troubleshooting Logix5000 Message Control Problems",
      "description": "Hey everyone, I am currently setting up an OLDI card which involves creating a message instruction in the PLC to activate an event on the card. I attempted to create a new Controller tag of the type MESSAGE, but encountered a warning during verification stating message tag not configured.",
      "author": {
        "@type": "Person",
        "name": "SimonDreyer"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-16",
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
                <h1 class="text-white">Troubleshooting Logix5000 Message Control Problems</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>SimonDreyer</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5502</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">139</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey everyone, I am currently setting up an OLDI card which involves creating a message instruction in the PLC to activate an event on the card. I attempted to create a new Controller tag of the type MESSAGE, but encountered a warning during verification stating "message tag not configured." Furthermore, when trying to utilize the tag in the message Control block, I received an error indicating that no tag had been specified. My system is running RSLogix5000 V20.01. Any assistance on how to resolve this issue would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When creating a message instruction, it is essential to assign a specific tag name for defining the instruction itself and another tag name for the data being exchanged. It appears that there may be confusion regarding the use of tag names in the message control block configuration options. Let's clarify the distinction between the tag names for the message instruction and the data being communicated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>beethoven_ii</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To efficiently create a Message Instruction for triggering a tManager Event in ControlLogix, follow these steps outlined in the email from the card supplier:

1. Use the RSLOGIX5000 Tag Editor to generate a tag with a MESSAGE data type at controller scope.
2. In the Ladder Editor, add a rung containing a MSG instruction with the newly created MESSAGE tag as the operand.
3. Access the Message Configuration dialog by clicking the button next to the operand.
4. Select "CIP Generic" as the Message Type.
5. Choose "Set Attribute Single" as the Service Type (Service Code 10) and specify the Class and Attribute values.
6. Input 4 for Class and 3h for Attribute.
7. Leave Source Element empty.
8. Enter 0 for Source Length.
9. Match the Instance (decimal) with the Message Instance defined in the tManager Event trigger (1024-4095).
10. Navigate to the Communication tab.
11. Provide the module name or CIP path in the Path field.
12. Select "CIP" as the Communication Method.
13. Check the "Connected" box.
14. Depending on message frequency, choose to enable or disable "Cache Connections".
15. In case of a connection-related issue, AB pre-defined error codes will be utilized. If a tManager processing error occurs, specific error codes apply (7001h-7006h).

The MSG done bit remains unset until the trigger process concludes. Consider using a PERIODIC trigger instead of a message instruction for monitoring PLC tags without the need for ladder logic.

Feel free to confirm successful implementation of these instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>SimonDreyer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate the message, and I'm glad to hear that it was successful for me!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jochem</span></li>
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
<h4 class='text-dark'>FAQ: What does the warning "message tag not configured" mean when setting up an OLDI card in Logix5000?</h4>
<p class='text-muted'><strong>Answer:</strong> The warning "message tag not configured" indicates that the message tag has not been properly set up or configured in the Controller tag of type MESSAGE. This can lead to errors when trying to utilize the tag in the message Control block.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How can I resolve the error indicating that no tag has been specified when trying to use a tag in the message Control block in RSLogix5000 V20.01?</h4>
<p class='text-muted'><strong>Answer:</strong> To resolve the error indicating no tag has been specified, ensure that the Controller tag of type MESSAGE is properly configured with the necessary parameters and that the tag is selected correctly in the message Control block. Double-check the tag configuration and make sure it meets the requirements for the operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: I need help setting up an OLDI card with a message instruction in Logix5000. Where can I find assistance?</h4>
<p class='text-muted'><strong>Answer:</strong> For assistance with setting up an OLDI card and creating a message instruction in Logix5000, you can refer to the software documentation, online forums, or reach out to the manufacturer's technical support for guidance and troubleshooting tips.</p>
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

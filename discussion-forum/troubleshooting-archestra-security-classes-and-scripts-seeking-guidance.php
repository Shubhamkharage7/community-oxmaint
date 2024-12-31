
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am seeking guidance on a technical issue. In using IAS 2017 SP1, I have come across some Archestra graphics that utilize classes such as Security.SymbolAccessController.ControlSecurityInfo and Security.SymbolAccessController.Controller for about 20 controls. The goal is for these controls to return a true value when enabled. This unconventional">
    <meta name="keywords" content="archestra troubleshooting, archestra security classes, ias 2017 sp1, security.symbolaccesscontroller.controlsecurityinfo, security.symbolaccesscontroller.controller, unconventional security measures, generic security model, design specification, installation guide, setup guide">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-archestra-security-classes-and-scripts-seeking-guidance">
    <title>Troubleshooting Archestra Security Classes and Scripts: Seeking Guidance | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Archestra Security Classes and Scripts: Seeking Guidance | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am seeking guidance on a technical issue. In using IAS 2017 SP1, I have come across some Archestra graphics that utilize classes such as Security.SymbolAccessController.ControlSecurityInfo and Security.SymbolAccessController.Controller for about 20 controls. The goal is for these controls to return a true value when enabled. This unconventional">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-archestra-security-classes-and-scripts-seeking-guidance">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Archestra Security Classes and Scripts: Seeking Guidance | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am seeking guidance on a technical issue. In using IAS 2017 SP1, I have come across some Archestra graphics that utilize classes such as Security.SymbolAccessController.ControlSecurityInfo and Security.SymbolAccessController.Controller for about 20 controls. The goal is for these controls to return a true value when enabled. This unconventional">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-archestra-security-classes-and-scripts-seeking-guidance"
      },
      "headline": "Troubleshooting Archestra Security Classes and Scripts: Seeking Guidance",
      "description": "Hello everyone, I am seeking guidance on a technical issue. In using IAS 2017 SP1, I have come across some Archestra graphics that utilize classes such as Security.SymbolAccessController.ControlSecurityInfo and Security.SymbolAccessController.Controller for about 20 controls. The goal is for these controls to return a true value when enabled. This unconventional",
      "author": {
        "@type": "Person",
        "name": "mort81"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-30",
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
                <h1 class="text-white">Troubleshooting Archestra Security Classes and Scripts: Seeking Guidance</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mort81</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">284</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">58</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am seeking guidance on a technical issue. In using IAS 2017 SP1, I have come across some Archestra graphics that utilize classes such as "Security.SymbolAccessController.ControlSecurityInfo" and "Security.SymbolAccessController.Controller" for about 20 controls. The goal is for these controls to return a true value when enabled. This unconventional approach to security is new to me, and I am unsure if it is indeed a security measure or not.

In addition, there are references to a document titled 'Generic Security Model - Design Specification & Installation / Setup Guide' in the scripts associated with the objects. Despite my efforts, I have been unable to locate this document. The system logger indicates that the View is attempting to access "GenericSecurityUserCache1" from the file path C:\Security\ServerCopy\AppConfig.dat, which I have copied from the production server. However, I am unable to open this file in a text editor for further investigation.

The system logger also issues a warning about the Archestra graphic being unable to retrieve security information related to "GenericSecurityUserCache1." I am reaching out for assistance in resolving these issues and ensuring that everything functions properly in our development environment. If anyone has encountered similar challenges or knows where to find the document mentioned in the object comments, I would greatly appreciate your help. Thank you for any guidance you can provide.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>For those facing a similar issue in the future, it's important to note that this particular situation is not related to Wonderware's outdated practices, as I initially thought based on the comments. Instead, it involves custom script function libraries requiring encrypted dat files, which are essentially XML files. After some research, I was able to locate the necessary resources to resolve the issue. While I'm unsure why someone would opt for this approach over Archestra's built-in security measures, my main focus was getting it to function properly without passing judgement.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mort81</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the classes "Security.SymbolAccessController.ControlSecurityInfo" and "Security.SymbolAccessController.Controller" used for in Archestra graphics?</h4>
<p class='text-muted'><strong>Answer:</strong> - These classes are used for about 20 controls in Archestra graphics to handle security measures and return a true value when enabled.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Where can I find the document 'Generic Security Model - Design Specification & Installation / Setup Guide' mentioned in the scripts associated with Archestra objects?</h4>
<p class='text-muted'><strong>Answer:</strong> - Despite efforts to locate the document, it may not be readily available. The system logger indicates that the View is attempting to access "GenericSecurityUserCache1" from a specific file path, but further investigation may be needed to find the document.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I resolve issues with Archestra graphics being unable to retrieve security information related to "GenericSecurityUserCache1"?</h4>
<p class='text-muted'><strong>Answer:</strong> - Troubleshooting steps may involve checking file permissions, ensuring the file path is correct, and investigating why the file cannot be opened in a text editor for further examination. Reaching out for assistance from experienced users or technical support can also help in resolving these issues.</p>
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

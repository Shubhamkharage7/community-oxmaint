
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I recently completed a project using a Wago 750-880 controller and needed to transfer it to a new facility where a Wago 750-882 controller is installed. However, I faced an issue while attempting to log in. Please forgive any errors, as English is not my first language.">
    <meta name="keywords" content="wago 750-882 controller, external login issue, troubleshooting, wago 750-880, transfer project, new facility, controller installation, login problem, language barrier, wago controller login, wago controller issue, wago">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-wago-750-882-controller-external-login-issue">
    <title>Troubleshooting Wago 750-882 Controller External Login Issue | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Wago 750-882 Controller External Login Issue | Oxmaint Community">
    <meta property="og:description" content="Greetings, I recently completed a project using a Wago 750-880 controller and needed to transfer it to a new facility where a Wago 750-882 controller is installed. However, I faced an issue while attempting to log in. Please forgive any errors, as English is not my first language.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-wago-750-882-controller-external-login-issue">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Wago 750-882 Controller External Login Issue | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I recently completed a project using a Wago 750-880 controller and needed to transfer it to a new facility where a Wago 750-882 controller is installed. However, I faced an issue while attempting to log in. Please forgive any errors, as English is not my first language.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-wago-750-882-controller-external-login-issue"
      },
      "headline": "Troubleshooting Wago 750-882 Controller External Login Issue",
      "description": "Greetings, I recently completed a project using a Wago 750-880 controller and needed to transfer it to a new facility where a Wago 750-882 controller is installed. However, I faced an issue while attempting to log in. Please forgive any errors, as English is not my first language.",
      "author": {
        "@type": "Person",
        "name": "krom"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-05",
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
                <h1 class="text-white">Troubleshooting Wago 750-882 Controller External Login Issue</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>krom</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">195</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">209</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I recently completed a project using a Wago 750-880 controller and needed to transfer it to a new facility where a Wago 750-882 controller is installed. However, I faced an issue while attempting to log in. Please forgive any errors, as English is not my first language.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Krom, it seems like there may be a missing library reference in your program. It's possible that the library is located in a different directory in the new environment compared to the original program. Here is a snapshot of my screen for your reference. It appears that 'Ethernet.lib' is missing.

To identify the missing library for both programs:
1. Go to the 'Resources' tab.
2. Click on 'Library Manager'.
3. You will see a list of libraries used by the program in the pane.
4. If a referenced library is missing, it will be displayed in this pane.

To check where the program is searching for a specific library:
1. Right-click in the pane.
2. Choose 'Properties' and check the location.

To locate a specific Program Organization Unit (POU):
1. Select a library.
2. The list of POUs within that library will be displayed.
3. Open the folders in the pane to find the missing items.

If you are missing a Wago provided PLC specific library, you can visit the Controller ETHERNET (750-882) page on the WAGO MX website. You can also use the website search function to find the library. For assistance in choosing the right library, contact their support team through the Technical Support Contact Page on the WAGO USA website or call Tech Support at 1-800-DIN-RAIL (346-7245). Best of luck!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Automation Solutions</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your response, and I'm happy to report that the issue has been successfully resolved. It was determined that the problem stemmed from the library used. While the Wago 750-880 had no issues with the Modbus library, the 750-882 did not support it. As a solution, I switched to the Wago library and made necessary edits to my POU.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>krom</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the login issue when transferring a project from a Wago 750-880 controller to a Wago 750-882 controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The login issue could be due to differences in firmware versions, software configurations, or network settings between the two controllers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the external login issue between a Wago 750-880 and a Wago 750-882 controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can start by checking the network connectivity, ensuring the correct software versions are used, and verifying the login credentials and permissions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there any language-specific considerations that may affect the login process between Wago controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Language barriers can sometimes lead to confusion during troubleshooting. Double-checking settings and inputs with the help of translation tools or seeking assistance in your preferred language can be beneficial.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Can the issue with logging in be resolved by adjusting certain settings or configurations on the Wago 750-882 controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, adjusting network settings, updating firmware, or configuring user permissions on the Wago 750-882 controller could potentially resolve the login issue.</p>
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

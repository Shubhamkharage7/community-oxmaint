
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone! We are currently developing a ME runtime for a Windows PC using an InTouch INDT156 touchscreen, and we are experiencing an issue with the touch functionality. While using a mouse, buttons on the screen respond immediately upon clicking, which is the desired behavior. However, when using the">
    <meta name="keywords" content="touchscreen troubleshooting, intouch indt156 touchscreen, factorytalk me runtime, touch functionality issue, windows pc touchscreen problem, button delay on touchscreen, touchscreen button activation, 8">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-touch-functionality-issue-on-intouch-indt156-touchscreen-for-factorytalk-me-runtime">
    <title>Troubleshooting Touch Functionality Issue on InTouch INDT156 Touchscreen for FactoryTalk ME Runtime | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Touch Functionality Issue on InTouch INDT156 Touchscreen for FactoryTalk ME Runtime | Oxmaint Community">
    <meta property="og:description" content="Hello everyone! We are currently developing a ME runtime for a Windows PC using an InTouch INDT156 touchscreen, and we are experiencing an issue with the touch functionality. While using a mouse, buttons on the screen respond immediately upon clicking, which is the desired behavior. However, when using the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-touch-functionality-issue-on-intouch-indt156-touchscreen-for-factorytalk-me-runtime">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Touch Functionality Issue on InTouch INDT156 Touchscreen for FactoryTalk ME Runtime | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone! We are currently developing a ME runtime for a Windows PC using an InTouch INDT156 touchscreen, and we are experiencing an issue with the touch functionality. While using a mouse, buttons on the screen respond immediately upon clicking, which is the desired behavior. However, when using the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-touch-functionality-issue-on-intouch-indt156-touchscreen-for-factorytalk-me-runtime"
      },
      "headline": "Troubleshooting Touch Functionality Issue on InTouch INDT156 Touchscreen for FactoryTalk ME Runtime",
      "description": "Hello everyone! We are currently developing a ME runtime for a Windows PC using an InTouch INDT156 touchscreen, and we are experiencing an issue with the touch functionality. While using a mouse, buttons on the screen respond immediately upon clicking, which is the desired behavior. However, when using the",
      "author": {
        "@type": "Person",
        "name": "fulch"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-11",
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
                <h1 class="text-white">Troubleshooting Touch Functionality Issue on InTouch INDT156 Touchscreen for FactoryTalk ME Runtime</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>fulch</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">248</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">322</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone! We are currently developing a ME runtime for a Windows PC using an InTouch INDT156 touchscreen, and we are experiencing an issue with the touch functionality. While using a mouse, buttons on the screen respond immediately upon clicking, which is the desired behavior. However, when using the touchscreen, the buttons only activate upon releasing the touch on the screen. This poses a problem as we need to be able to hold a momentary push button (PB) down with the touchscreen. We have tested this on different PC folders and files, and it behaves differently, leading us to believe it may be a setting on the Rockwell side. Any insights on how to address this issue would be greatly appreciated. Thank you for any assistance you can offer!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The problem you are experiencing with the press and hold function on a Windows touchscreen is a common issue that mimics a right-click. A helpful post on a forum details this specific behavior and offers a possible solution, although it appears that resolving this issue may be challenging.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A few years back, I encountered a similar issue on a B&R IPC. I vividly remember adjusting a setting in the touch screen driver utility to enable long presses to function properly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you so much for your help, team. I will investigate the touch screen driver to see if I can identify any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>fulch</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why are the buttons on the InTouch INDT156 touchscreen only activating upon releasing the touch, unlike when using a mouse?</h4>
<p class='text-muted'><strong>Answer:</strong> - The behavior where buttons activate upon releasing the touch on the touchscreen instead of immediately upon clicking may be due to a setting on the Rockwell side. Further troubleshooting and configuration adjustments may be required to address this issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can we ensure that momentary push buttons (PB) can be held down with the touchscreen on the FactoryTalk ME runtime?</h4>
<p class='text-muted'><strong>Answer:</strong> - To enable the ability to hold down momentary push buttons with the touchscreen, it may be necessary to adjust settings or configurations within the runtime software or the touchscreen device. Consulting the user manual or contacting technical support for guidance on customizing the touch functionality could help resolve this issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Why does the touch functionality behave differently on various PC folders and files when using the InTouch INDT156 touchscreen?</h4>
<p class='text-muted'><strong>Answer:</strong> - The variation in touch functionality behavior across different PC folders and files might indicate inconsistencies in settings or configurations that impact how the touchscreen interacts with the runtime software. It is advisable to review and compare settings, as well as consult with Rockwell support or the touchscreen manufacturer for insights on troubleshooting and resolving these differences.</p>
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

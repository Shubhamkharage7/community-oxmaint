
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I utilize a 1769-L16ER for code testing and recently discovered that MSG tags can only be created at the controller scope, not the local program scope. Initially, I attributed this limitation to firmware, but given that both my L71 and L16ER are operating on v32, it seems to be">
    <meta name="keywords" content="1769-l16er, msg scope, controller scope, hardware constraint, firmware limitation, v32 firmware, msg tags, code testing, local program scope, l71 controller, hardware restriction, plc programming, allen bradley, communication tags, firmware version">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/hardware-constraint-msg-scope-in-1769-l16er-controller">
    <title>Hardware Constraint: MSG Scope in 1769-L16ER Controller. | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Hardware Constraint: MSG Scope in 1769-L16ER Controller. | Oxmaint Community">
    <meta property="og:description" content="I utilize a 1769-L16ER for code testing and recently discovered that MSG tags can only be created at the controller scope, not the local program scope. Initially, I attributed this limitation to firmware, but given that both my L71 and L16ER are operating on v32, it seems to be">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/hardware-constraint-msg-scope-in-1769-l16er-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Hardware Constraint: MSG Scope in 1769-L16ER Controller. | Oxmaint Community">
    <meta name="twitter:description" content="I utilize a 1769-L16ER for code testing and recently discovered that MSG tags can only be created at the controller scope, not the local program scope. Initially, I attributed this limitation to firmware, but given that both my L71 and L16ER are operating on v32, it seems to be">
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
        "@id": "https://community.oxmaint.com/discussion-forum/hardware-constraint-msg-scope-in-1769-l16er-controller"
      },
      "headline": "Hardware Constraint: MSG Scope in 1769-L16ER Controller.",
      "description": "I utilize a 1769-L16ER for code testing and recently discovered that MSG tags can only be created at the controller scope, not the local program scope. Initially, I attributed this limitation to firmware, but given that both my L71 and L16ER are operating on v32, it seems to be",
      "author": {
        "@type": "Person",
        "name": "TheWaterboy"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-11",
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
                <h1 class="text-white">Hardware Constraint: MSG Scope in 1769-L16ER Controller.</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">322</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">470</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I utilize a 1769-L16ER for code testing and recently discovered that MSG tags can only be created at the controller scope, not the local program scope. Initially, I attributed this limitation to firmware, but given that both my L71 and L16ER are operating on v32, it seems to be a hardware constraint.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It has always been present since the inception.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jstolaruk</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I presume that is the case. It just seems unusual for it to be a restriction related to hardware.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's fascinating to discover that certain hardware restrictions exist, such as the inability to assign string literals on L7x controllers compared to L8xE controllers. While I haven't experimented much with compactlogix like I have with controllogix, I was surprised to find that message tags only function in controller tags and not program tags on the L16ER. Have you tried updating the firmware to see if this limitation was resolved in a newer version on that hardware? It's worth investigating if Rockwell eventually added support for it on the L16ER. I can't recall which firmware update included support for message instructions in program tags - perhaps it has always been exclusive to L8xE controllers. Now I'm curious if the L7x controllers also allow for this capability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe the decision to prioritize revenue over technology often drives product development. For example, if you desire a specific feature, you may need to upgrade your device. The focus tends to be on generating income through new product releases, rather than updating firmware.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Q: Can MSG tags be created at the local program scope on a 1769-L16ER controller?
    No, MSG tags can only be created at the controller scope on a 1769-L16ER controller due to a hardware constraint.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is the limitation of creating MSG tags at the controller scope specific to certain firmware versions?</h4>
<p class='text-muted'><strong>Answer:</strong> No, the limitation of creating MSG tags at the controller scope is not related to firmware versions, as it seems to be a hardware constraint on the 1769-L16ER controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are other controllers in the 1769 series affected by the same hardware constraint regarding MSG tag creation?</h4>
<p class='text-muted'><strong>Answer:</strong> It appears that the hardware constraint of creating MSG tags at the controller scope is specific to the 1769-L16ER controller, as other controllers like the L71 do not have the same limitation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is there a workaround or alternative method to create MSG tags at the local program scope on the 1769-L16ER controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Unfortunately, due to the hardware constraint, creating MSG tags at the local program scope on the 1769-L16ER controller is not possible, and there is no known workaround for this limitation.</p>
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

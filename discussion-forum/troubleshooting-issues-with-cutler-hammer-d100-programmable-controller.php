
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I understand that this may be an older issue, but we are currently facing a problem with our d100 wrapper. It has stopped functioning properly. While the input lights are working and turning on when pressed, the output light is not coming on. Additionally, all of the">
    <meta name="keywords" content="cutler-hammer d100 programmable controller troubleshooting, d100 wrapper not functioning properly, cutler-hammer d100 input and output light issues, diagnostic lights not illuminated cutler-hammer d">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-cutler-hammer-d100-programmable-controller">
    <title>Troubleshooting Issues with CUTLER-HAMMER D100 Programmable Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Issues with CUTLER-HAMMER D100 Programmable Controller | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I understand that this may be an older issue, but we are currently facing a problem with our d100 wrapper. It has stopped functioning properly. While the input lights are working and turning on when pressed, the output light is not coming on. Additionally, all of the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-cutler-hammer-d100-programmable-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Issues with CUTLER-HAMMER D100 Programmable Controller | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I understand that this may be an older issue, but we are currently facing a problem with our d100 wrapper. It has stopped functioning properly. While the input lights are working and turning on when pressed, the output light is not coming on. Additionally, all of the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-issues-with-cutler-hammer-d100-programmable-controller"
      },
      "headline": "Troubleshooting Issues with CUTLER-HAMMER D100 Programmable Controller",
      "description": "Hello everyone, I understand that this may be an older issue, but we are currently facing a problem with our d100 wrapper. It has stopped functioning properly. While the input lights are working and turning on when pressed, the output light is not coming on. Additionally, all of the",
      "author": {
        "@type": "Person",
        "name": "carlos1984"
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
                <h1 class="text-white">Troubleshooting Issues with CUTLER-HAMMER D100 Programmable Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>carlos1984</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">391</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">98</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I understand that this may be an older issue, but we are currently facing a problem with our d100 wrapper. It has stopped functioning properly. While the input lights are working and turning on when pressed, the output light is not coming on. Additionally, all of the diagnostic lights are not illuminated. According to the manual, the battery should not be removed while the machine is on and the prom is not backed up. However, during diagnosis, the battery was disconnected while the machine was powered on, which may have resulted in the deletion of the ram.

Due to the diagnostic lights not functioning, we are considering the possibility that the entire board may be faulty. If this is the case, would replacing the board solve the issue, or would it also require reprogramming? We are also interested in knowing if there are any companies or individuals who can repair these controllers or even upgrade them to a newer version. Any assistance or advice on this matter would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If the battery was removed while the unit was off, the program stored in RAM would have been lost. If the program was backed up to the accessory PROM, it can be retrieved and restored to RAM. Without the PROM or a backup, a paper copy of the program would be necessary for someone to reprogram it. Purchasing a new unit would still require programming, either by retrieving it from the PROM or inputting it manually. Most system integrators can assist in upgrading to a new system, but they would need a program for conversion. It is recommended to have a printed copy of the current logic for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to program these units, you will need a DOS-based software that requires a dongle for operation. It's a situation where you have to start anew.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ron S</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your prompt response. Since there is a lack of knowledge about this particular Programmable Logic Controller (PLC) here, I am considering bringing in a professional to upgrade and program a new one. Is it possible and beneficial to hire expertise for this task?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>carlos1984</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be the possible reasons for the output light not coming on and the diagnostic lights not being illuminated on the CUTLER-HAMMER D100 programmable controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Possible reasons could include a faulty board, deletion of the RAM due to the battery being disconnected while the machine was powered on, or other internal issues.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  If the board of the CUTLER-HAMMER D100 programmable controller is found to be faulty, would simply replacing the board solve the issue, or would it also require reprogramming?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Replacing the board may solve the issue, but reprogramming might be necessary depending on the specific circumstances and whether the programming was affected by the fault.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Are there companies or individuals who specialize in repairing CUTLER-HAMMER D100 programmable controllers or upgrading them to newer versions?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, there are companies and individuals who offer repair services for these controllers and might also provide options for upgrading to newer versions.</p>
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

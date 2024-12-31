
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am working on creating my own DIY ControlLogix power supply and have been experiencing some issues with certain modules not powering up properly. I am utilizing four separate power sources to supply the chassis with various voltages (1.2V, 3.3V, 5V, 24V). Currently, I have successfully powered up an">
    <meta name="keywords" content="diy controllogix power supply troubleshooting, controllogix power supply module issues, controllogix power supply troubleshooting guide, diy controllogix power supply tips, controllogix power supply module faults">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-diy-controllogix-power-supply-module-issues">
    <title>Troubleshooting DIY ControlLogix Power Supply Module Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting DIY ControlLogix Power Supply Module Issues | Oxmaint Community">
    <meta property="og:description" content="I am working on creating my own DIY ControlLogix power supply and have been experiencing some issues with certain modules not powering up properly. I am utilizing four separate power sources to supply the chassis with various voltages (1.2V, 3.3V, 5V, 24V). Currently, I have successfully powered up an">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-diy-controllogix-power-supply-module-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting DIY ControlLogix Power Supply Module Issues | Oxmaint Community">
    <meta name="twitter:description" content="I am working on creating my own DIY ControlLogix power supply and have been experiencing some issues with certain modules not powering up properly. I am utilizing four separate power sources to supply the chassis with various voltages (1.2V, 3.3V, 5V, 24V). Currently, I have successfully powered up an">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-diy-controllogix-power-supply-module-issues"
      },
      "headline": "Troubleshooting DIY ControlLogix Power Supply Module Issues",
      "description": "I am working on creating my own DIY ControlLogix power supply and have been experiencing some issues with certain modules not powering up properly. I am utilizing four separate power sources to supply the chassis with various voltages (1.2V, 3.3V, 5V, 24V). Currently, I have successfully powered up an",
      "author": {
        "@type": "Person",
        "name": "thinkpad"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-26",
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
                <h1 class="text-white">Troubleshooting DIY ControlLogix Power Supply Module Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>thinkpad</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1168</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">472</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am working on creating my own DIY ControlLogix power supply and have been experiencing some issues with certain modules not powering up properly. I am utilizing four separate power sources to supply the chassis with various voltages (1.2V, 3.3V, 5V, 24V). Currently, I have successfully powered up an L63/A, CNB/E, and IB16/E. I am able to connect online with the processor and use the controlnet without any issues. However, when I try to insert other cards such as L61/B, ENET, DHRIO/B, DNB/D, they either do not light up or display a solid red fault light.

I have confirmed that these cards work by reinstalling the proper power supply, and I have also tried placing them in different slots within the chassis. I am unsure if there is a necessary communication link between the chassis and the power supply that is missing. There are four pins on the power supply whose functions I am unsure of.

Any guidance or assistance on this matter would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>How did you manage to discover the additional pins? It's fascinating!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently tested a 1756-PB72 using a multimeter. It is important to note that I have properly linked all the common terminals of the power sources. In the Allen Bradley power supply, all common terminals are grounded. Interestingly, my investigation revealed that four pins appear to be unconnected. I discovered that a voltage of 1.2V is essential for backplane communication. While the cards can operate without it, they may encounter communication issues. At this point, the purpose of the 3.3V remains unclear as there is no noticeable impact whether it is connected or not.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thinkpad</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I identified the issue with my electronics setup: the 5v power supply experienced voltage sag when other modules were turned on. While my multimeter didn't detect this, my scope did. For future troubleshooting, I can verify that the provided wiring diagram is effective.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thinkpad</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named ThinkPad successfully identified and resolved an issue with their 5v power supply experiencing voltage sag when other modules were powering up. Despite not being detectable with a multimeter, the issue was visible when using a scope. This serves as a valuable reference for others facing similar challenges. Well done, MacGyver! Welcome to the forum.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ThinkPad mentioned that they identified the issue with their 5V power supply, which experienced voltage sag when other modules were powering up. Despite not being able to detect this with a multimeter, it was visible using a scope. This information is valuable for anyone facing a similar problem, as it confirms the effectiveness of the wiring diagram. Thank you for sharing, this knowledge will definitely be beneficial for future troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Thankpad, uncovering a communication protocol and identifying the protocol used on the additional 4 pins would be a significant breakthrough. By understanding the backplane protocol, it opens up the possibility of creating an intelligent power supply that can communicate on the backplane. This has been a long-time desire of mine.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tlf30</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance the functionality of your AB power supply, consider creating a breakout cable using header connectors. This will allow you to test the unknown pins with a scope to determine if any activity is occurring. While it is unlikely that these pins communicate, it is always worth checking to be sure.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why are some modules not powering up properly in my DIY ControlLogix power supply setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: There could be several reasons for modules not powering up properly, such as incorrect power supply connections, faulty modules, or missing communication links between the chassis and power supply.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be causing the solid red fault light on certain modules like L61/B, ENET, DHRIO/B, DNB/D in my ControlLogix setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The solid red fault light on modules could indicate power supply issues, incorrect installation, or compatibility problems. It's important to check the power supply connections, module compatibility, and installation procedures.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I troubleshoot power supply module issues in my DIY ControlLogix setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To troubleshoot power supply module issues, you can verify the power supply connections, test the modules in a different setup to confirm functionality, check for any communication links missing between the chassis and power supply, and review the documentation for the power supply to understand the functions of the pins in question.</p>
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

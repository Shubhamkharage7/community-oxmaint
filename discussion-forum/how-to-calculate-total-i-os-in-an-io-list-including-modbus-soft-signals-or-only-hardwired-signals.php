
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Can someone assist me with a question on how to calculate the total number of I/Os in an I/O list? Should I include soft signals from modbus, or only count the hardwired signals?">
    <meta name="keywords" content="calculate total i/os, i/o list calculation, modbus soft signals, hardwired signals, modbus vs hardwired signals, i/o list calculation methods, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-calculate-total-i-os-in-an-io-list-including-modbus-soft-signals-or-only-hardwired-signals">
    <title>How to Calculate Total I/Os in an IO List: Including Modbus Soft Signals or Only Hardwired Signals? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Calculate Total I/Os in an IO List: Including Modbus Soft Signals or Only Hardwired Signals? | Oxmaint Community">
    <meta property="og:description" content="Can someone assist me with a question on how to calculate the total number of I/Os in an I/O list? Should I include soft signals from modbus, or only count the hardwired signals?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-calculate-total-i-os-in-an-io-list-including-modbus-soft-signals-or-only-hardwired-signals">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Calculate Total I/Os in an IO List: Including Modbus Soft Signals or Only Hardwired Signals? | Oxmaint Community">
    <meta name="twitter:description" content="Can someone assist me with a question on how to calculate the total number of I/Os in an I/O list? Should I include soft signals from modbus, or only count the hardwired signals?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-calculate-total-i-os-in-an-io-list-including-modbus-soft-signals-or-only-hardwired-signals"
      },
      "headline": "How to Calculate Total I/Os in an IO List: Including Modbus Soft Signals or Only Hardwired Signals?",
      "description": "Can someone assist me with a question on how to calculate the total number of I/Os in an I/O list? Should I include soft signals from modbus, or only count the hardwired signals?",
      "author": {
        "@type": "Person",
        "name": "qamarimma"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-26",
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
                <h1 class="text-white">How to Calculate Total I/Os in an IO List: Including Modbus Soft Signals or Only Hardwired Signals?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>qamarimma</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">418</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">412</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Can someone assist me with a question on how to calculate the total number of I/Os in an I/O list? Should I include soft signals from modbus, or only count the hardwired signals?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you working with RSLogix software and in need of comprehensive connection information? Look no further than the Logix5000 Task Monitor, which provides in-depth I/O data.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>patrickmoneyy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not specifically seeking a loop diagram. Rather, I am curious about whether vendors typically consider only hardwired 4-20mA signals or if they also include signals received through Modbus from various PLCs when determining the total I/O count. Can you clarify this distinction for me in the I/O count list?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>qamarimma</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am referencing the document labeled I/O list for the count.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>qamarimma</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When creating an IO list for maintenance technicians and contractors involved in building solutions, it is advisable to exclude network signals and focus on developing a communication map that outlines the data flow between PLCs. This map should include details such as frequency, size, and addresses of data being sent or read. When it comes to the hardware IO list, it is beneficial to include columns for Tag, Description, Direction (In or Out), Type (digital, analog, frequency), HART compatibility (Yes/No), I.S. certification (Yes/No), signal ranges (0-10V, 4-20mA), and the variables being measured along with their respective ranges. Additionally, for digital inputs, it is important to specify the normal and detected states (High, Low, etc.).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The effectiveness of using a list depends on its intended purpose. In my previous job, we utilized I/O lists as a valuable resource in the process of creating project proposals. Through continuous refinement, we established a systematic approach that allocated specific timeframes for different inputs and outputs, as well as additional time for loops and sequences. It was important to distinguish between "soft points" and "hard points" in order to accurately account for the varying configuration requirements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Qamarimma inquired about the inclusion of various signal types in the total I/O count provided to vendors. The determination on what to include in the count depends on the type of vendor involved. For panel builders, emphasis is placed on electrical components such as DI, DO, AI, AO, RTD, pneumatic valves, etc. Factors such as voltage requirements, signal types, and communication protocols (such as modbus) play a crucial role in specifying the necessary hardware for the system. Integrators responsible for programming the system's HMI will require detailed information on the devices, both local I/O and field instruments, to be integrated. Each device incurs a certain time and licensing cost, making it essential to accurately account for each item.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The answer may vary depending on the vendor's preferences. It's best to communicate with the vendor directly to determine their preferred choice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
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
<h4 class='text-dark'>FAQ: 1. Should I include both modbus soft signals and hardwired signals when calculating the total number of I/Os in an I/O list?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is recommended to include both modbus soft signals and hardwired signals when calculating the total number of I/Os in an I/O list to have an accurate count of all inputs and outputs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the importance of considering modbus soft signals in the total I/O count?</h4>
<p class='text-muted'><strong>Answer:</strong> - Modbus soft signals are virtual signals that represent data points from external devices, and including them in the total I/O count ensures that all communication interfaces and data points are accounted for in the system design.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I differentiate between modbus soft signals and hardwired signals in an I/O list?</h4>
<p class='text-muted'><strong>Answer:</strong> - Modbus soft signals are typically software-based and communicate over a network protocol, while hardwired signals are physical connections between devices. It is essential to identify and distinguish between the two types of signals when creating an I/O list.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any specific considerations or challenges to keep in mind when dealing with modbus soft signals in I/O calculations?</h4>
<p class='text-muted'><strong>Answer:</strong> - When including modbus soft signals in I/O calculations, ensure that the communication protocol and data mapping are correctly configured to accurately reflect the inputs and outputs in the system. Additionally, consider factors such as network latency and reliability for proper signal processing.</p>
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

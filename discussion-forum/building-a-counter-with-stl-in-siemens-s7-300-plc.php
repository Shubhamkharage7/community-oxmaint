
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Thank you in advance for your assistance. I am new to using STL and need help building a counter with one count up option and 23 count down options. Could you please confirm if my setup is correct? The system is initialized with the message SYSTEM STARTED before proceeding">
    <meta name="keywords" content="siemens s7-300 plc counter, stl programming for counter, count up and count down options in siemens s7-300 plc, building a counter in siemens plc, stl instructions for counter in siemens">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/building-a-counter-with-stl-in-siemens-s7-300-plc">
    <title>Building a Counter with STL in Siemens S7-300 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Building a Counter with STL in Siemens S7-300 PLC | Oxmaint Community">
    <meta property="og:description" content="Thank you in advance for your assistance. I am new to using STL and need help building a counter with one count up option and 23 count down options. Could you please confirm if my setup is correct? The system is initialized with the message SYSTEM STARTED before proceeding">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/building-a-counter-with-stl-in-siemens-s7-300-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Building a Counter with STL in Siemens S7-300 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Thank you in advance for your assistance. I am new to using STL and need help building a counter with one count up option and 23 count down options. Could you please confirm if my setup is correct? The system is initialized with the message SYSTEM STARTED before proceeding">
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
        "@id": "https://community.oxmaint.com/discussion-forum/building-a-counter-with-stl-in-siemens-s7-300-plc"
      },
      "headline": "Building a Counter with STL in Siemens S7-300 PLC",
      "description": "Thank you in advance for your assistance. I am new to using STL and need help building a counter with one count up option and 23 count down options. Could you please confirm if my setup is correct? The system is initialized with the message SYSTEM STARTED before proceeding",
      "author": {
        "@type": "Person",
        "name": "Kceaglesfan"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-19",
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
                <h1 class="text-white">Building a Counter with STL in Siemens S7-300 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Kceaglesfan</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">556</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">345</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Thank you in advance for your assistance. I am new to using STL and need help building a counter with one count up option and 23 count down options. Could you please confirm if my setup is correct? The system is initialized with the message "SYSTEM STARTED" before proceeding with the specified counting sequence. This includes various "415TRANSFER" and "SOL CT422" actions, followed by a "RESET COUN" command to reset the count flag. The total count is displayed as "C5 TOTAL" in the end. Your guidance on this setup would be greatly appreciated.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the specific motivation behind your choice to utilize the Standard Template Library (STL)?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I attempted to use a regular cu/cd, but I struggled to handle multiple outputs going high simultaneously, resulting in an inaccurate count of objects. Upon receiving advice from a colleague, I was recommended to explore utilizing STL for more effective control and accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kceaglesfan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to meet the necessary functionality, it is essential to create a custom counter. An example using a function block has been provided for reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In situations where two inputs are triggered simultaneously, do you prefer to count them as one occurrence or two separate occurrences?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RVaughan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>My main concern is that it happened twice, not just once.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kceaglesfan</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to achieve the necessary functionality, it is recommended to create a custom counter. A simplified example utilizing a function block is provided below. Feel free to explore it further for a better understanding. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kceaglesfan</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I build a counter with one count up option and 23 count down options using STL in Siemens S7-300 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To build a counter with such specifications, you can initialize the system with the message "SYSTEM STARTED" and proceed with the counting sequence using "415TRANSFER" and "SOL CT422" actions. Additionally, include a "RESET COUN" command to reset the count flag. The total count can be displayed as "C5 TOTAL" at the end.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What is the importance of initializing the system with the message "SYSTEM STARTED" in the counter setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Initializing the system with a message like "SYSTEM STARTED" helps in providing a clear indication that the system has started and is ready to proceed with the counting sequence. It serves as a starting point for the operation of the counter.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I reset the count flag in the counter setup?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can reset the count flag by using a "RESET COUN" command in your STL program. This command will effectively reset the count flag, allowing the counter to start counting again from the beginning or from a specified point in the sequence.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Can you explain the significance of the various actions like "415TRANSFER" and "SOL CT422" in the counting sequence?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The actions like "415TRANSFER" and "SOL CT422" are</p>
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

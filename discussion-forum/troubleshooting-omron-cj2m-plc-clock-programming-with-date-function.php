
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently attempting to use the DATE function to program the clock on a PLC. I have noticed that when the DATE function is active, A351-A354 display the register values (D100-D103), but when the rung is not true, they revert back to the PLC clock time.">
    <meta name="keywords" content="omron cj2m plc, clock programming, date function, troubleshooting, a351-a354 registers, d100-d103 values, plc clock time, 8">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-omron-cj2m-plc-clock-programming-with-date-function">
    <title>Troubleshooting Omron CJ2M PLC Clock Programming with DATE Function | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Omron CJ2M PLC Clock Programming with DATE Function | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently attempting to use the DATE function to program the clock on a PLC. I have noticed that when the DATE function is active, A351-A354 display the register values (D100-D103), but when the rung is not true, they revert back to the PLC clock time.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-omron-cj2m-plc-clock-programming-with-date-function">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Omron CJ2M PLC Clock Programming with DATE Function | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently attempting to use the DATE function to program the clock on a PLC. I have noticed that when the DATE function is active, A351-A354 display the register values (D100-D103), but when the rung is not true, they revert back to the PLC clock time.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-omron-cj2m-plc-clock-programming-with-date-function"
      },
      "headline": "Troubleshooting Omron CJ2M PLC Clock Programming with DATE Function",
      "description": "Hello everyone, I am currently attempting to use the DATE function to program the clock on a PLC. I have noticed that when the DATE function is active, A351-A354 display the register values (D100-D103), but when the rung is not true, they revert back to the PLC clock time.",
      "author": {
        "@type": "Person",
        "name": "Jothiswarup"
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
                <h1 class="text-white">Troubleshooting Omron CJ2M PLC Clock Programming with DATE Function</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jothiswarup</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">534</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">361</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently attempting to use the DATE function to program the clock on a PLC. I have noticed that when the DATE function is active, A351-A354 display the register values (D100-D103), but when the rung is not true, they revert back to the PLC clock time. Can anyone offer insight into what I might be doing incorrectly?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The Date settings are encoded in BCD format, but you're inputting them in Decimal. If the instruction fails with an "out of range" error, it may revert to the previous time/date. To check for this issue, use P_ER right after the DATE function. Monitor in HEX to see the settings in BCD, indicated by "#" instead of "&".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>IO_Rack pointed out that all Date settings are in BCD format, while you are inputting them in Decimal format. This mismatch may cause the instruction to fail due to being "out of range," leading to a revert to the previous time/date. To verify this, you can use P_ER immediately after the DATE function. To view the settings in BCD, monitor them in HEX format instead, where they will be indicated with "#" instead of "&". 
Do you confirm this is the issue you are facing? If so, it remains unchanged. Additionally, I want to clarify that I am simulating this scenario, which may impact the outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jothiswarup</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was referring to the "Hex" display in the monitoring window. When inputting values in the watch window or ladder, make sure to use "#" before the value. The Date function cannot be simulated due to its storage on the PLC. Since simulation works with a virtual PLC, it uses the computer's time instead. The limitations of simulation also apply to functions like PID and high-speed outputs. I confirmed the functionality of Hex (BCD) on a real PLC and in the simulator, with results matching.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I use the DATE function to program the clock on an Omron CJ2M PLC?
- To program the clock using the DATE function on an Omron CJ2M PLC, you can utilize the A351-A354 registers which correspond to D100-D103 registers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why do the A351-A354 registers display D100-D103 values when the DATE function is active and revert back to the PLC clock time when the rung is not true?</h4>
<p class='text-muted'><strong>Answer:</strong> - This behavior is expected as the DATE function is controlling the display of register values. When the rung is true, the DATE function is active and displays the D100-D103 values. When the rung is not true, the PLC clock time is displayed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What could I be doing incorrectly if I am facing issues with the DATE function in programming the clock on my Omron CJ2M PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are experiencing issues with the DATE function, double-check your ladder logic programming to ensure that the conditions for the DATE function to be active are correctly set up. Additionally, verify that the A351-A354 registers are correctly linked to the D100-D103 registers.</p>
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

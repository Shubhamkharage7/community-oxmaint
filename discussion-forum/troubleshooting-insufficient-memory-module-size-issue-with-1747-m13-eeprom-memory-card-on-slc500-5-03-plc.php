
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently facing a challenge with adding an eeprom memory card to my SLC500 5/03 PLC. I aim to have the program load from the eeprom upon boot or in case of a memory issue with the main 5/03 PLC. However, I am encountering an error">
    <meta name="keywords" content="slc500 5/03 plc eeprom memory card, 1747-m13 memory module, troubleshooting memory module size issue, insufficient memory error slc500 plc, slc500">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-insufficient-memory-module-size-issue-with-1747-m13-eeprom-memory-card-on-slc500-5-03-plc">
    <title>Troubleshooting Insufficient Memory Module Size Issue with 1747-M13 EEPROM Memory Card on SLC500 5/03 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Insufficient Memory Module Size Issue with 1747-M13 EEPROM Memory Card on SLC500 5/03 PLC | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently facing a challenge with adding an eeprom memory card to my SLC500 5/03 PLC. I aim to have the program load from the eeprom upon boot or in case of a memory issue with the main 5/03 PLC. However, I am encountering an error">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-insufficient-memory-module-size-issue-with-1747-m13-eeprom-memory-card-on-slc500-5-03-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Insufficient Memory Module Size Issue with 1747-M13 EEPROM Memory Card on SLC500 5/03 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently facing a challenge with adding an eeprom memory card to my SLC500 5/03 PLC. I aim to have the program load from the eeprom upon boot or in case of a memory issue with the main 5/03 PLC. However, I am encountering an error">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-insufficient-memory-module-size-issue-with-1747-m13-eeprom-memory-card-on-slc500-5-03-plc"
      },
      "headline": "Troubleshooting Insufficient Memory Module Size Issue with 1747-M13 EEPROM Memory Card on SLC500 5/03 PLC",
      "description": "Hello everyone, I am currently facing a challenge with adding an eeprom memory card to my SLC500 5/03 PLC. I aim to have the program load from the eeprom upon boot or in case of a memory issue with the main 5/03 PLC. However, I am encountering an error",
      "author": {
        "@type": "Person",
        "name": "Mr. Ro Bot"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-23",
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
                <h1 class="text-white">Troubleshooting Insufficient Memory Module Size Issue with 1747-M13 EEPROM Memory Card on SLC500 5/03 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Mr. Ro Bot</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">321</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">35</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently facing a challenge with adding an eeprom memory card to my SLC500 5/03 PLC. I aim to have the program load from the eeprom upon boot or in case of a memory issue with the main 5/03 PLC. However, I am encountering an error message stating "insufficient memory module size" every time I attempt to download the file to the eeprom. The eeprom module in question is 1747-M13 with a capacity of 64kb. I am unsure if the issue lies with my actions or the file itself. Interestingly, my program indicates a size of 70kb, but upon creating a blank program with just one line, it showed a size of 65kb. Any guidance on this matter would be highly appreciated as this is my first experience with an eeprom module, leading me to believe that I may be overlooking a simple step.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible that the PLC requires a firmware update? If so, double-check the memory card labeling. Consider upgrading the firmware to resolve any issues. - James</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>James Mcquade</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>James Mcquade asked about the firmware version of the PLC and suggested that it may require an update for optimal performance. In addition, the processor manual specifies that the OS302 series C is necessary to utilize a memory module. Mr. Ro Bot shared a humorous anecdote about program file sizes, highlighting that the size on a computer may not accurately reflect the memory usage in the processor. Different 5/03 models come in 8k, 16k, and 32k memory sizes, making the 1747-M13 a suitable option for any model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have encountered an issue with my 5/03 w/ OS302 series C PLC. Despite adding a memory module, I am unable to download the program as it shows an error message: "StoreToEeprom failed: 0x4". I am currently in PROG mode and can proceed to selecting a permanent write option, but the download fails immediately after clicking ok. Any ideas on how to troubleshoot this issue?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mr. Ro Bot</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the timeframe of "right after" in connecting devices? One possible explanation for connection issues is that the SLC may stop communicating with your PC during a write operation, causing a timeout depending on the connection method (such as using a 1747-UIC). If this is the case, allow for more time for the write to complete (approximately a couple of minutes) and monitor the processor's LEDs for confirmation. Unfortunately, there is no direct way to verify the success of the write operation other than attempting to load from the EEPROM and checking if the stored program is intact.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I had previously referenced that particular thread, but initially brushed off the error code I received when saving to EEPROM. After further investigation, I confirmed that the data is indeed being saved correctly. It is odd, however, that an error message persistently appeared despite successful saving. Moving forward, I will be sure to double-check my work to avoid any future misunderstandings. Thank you to everyone who provided assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mr. Ro Bot</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why am I receiving an "insufficient memory module size" error when trying to download the file to the EEPROM on my SLC500 5/03 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The error message indicates that the file size exceeds the capacity of the EEPROM module (1747-M13 with a capacity of 64kb). This could be due to the actual program size being larger than the available memory on the EEPROM.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I resolve the "insufficient memory module size" issue with the 1747-M13 EEPROM on my SLC500 5/03 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To resolve this issue, you may need to optimize your program to fit within the 64kb capacity of the EEPROM module. You can try reducing the program size by removing unnecessary code or optimizing existing code to make it more memory-efficient.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why does my program show a size of 70kb, but when I created a blank program with just one line, it showed a size of 65kb on the EEPROM module?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The discrepancy in program sizes could be due to how the program is compiled or stored in memory. It's important to ensure that the actual program size does not exceed the capacity of the EEPROM module to avoid the "insufficient memory module size" error.</p>
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

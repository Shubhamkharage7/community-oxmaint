
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am a beginner learning how to interpret hex values from a G120 (CU240e-2pn) controlled by 1200plc1, specifically for the motor temperature (16#1357) and other output data. I have observed that while the values from the VFD appear fixed online, their corresponding hex values sent to the PLC keep">
    <meta name="keywords" content="g120 motor temperature interpretation, hex values interpretation for g120 motor temperature, g120 vfd output data analysis, understanding g120 control word and speed settings, address mapping for vfd output data in">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-and-interpreting-g120-data-values-for-motor-temperature-and-output-data">
    <title>Understanding and Interpreting G120 Data Values for Motor Temperature and Output Data | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding and Interpreting G120 Data Values for Motor Temperature and Output Data | Oxmaint Community">
    <meta property="og:description" content="I am a beginner learning how to interpret hex values from a G120 (CU240e-2pn) controlled by 1200plc1, specifically for the motor temperature (16#1357) and other output data. I have observed that while the values from the VFD appear fixed online, their corresponding hex values sent to the PLC keep">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-and-interpreting-g120-data-values-for-motor-temperature-and-output-data">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding and Interpreting G120 Data Values for Motor Temperature and Output Data | Oxmaint Community">
    <meta name="twitter:description" content="I am a beginner learning how to interpret hex values from a G120 (CU240e-2pn) controlled by 1200plc1, specifically for the motor temperature (16#1357) and other output data. I have observed that while the values from the VFD appear fixed online, their corresponding hex values sent to the PLC keep">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-and-interpreting-g120-data-values-for-motor-temperature-and-output-data"
      },
      "headline": "Understanding and Interpreting G120 Data Values for Motor Temperature and Output Data",
      "description": "I am a beginner learning how to interpret hex values from a G120 (CU240e-2pn) controlled by 1200plc1, specifically for the motor temperature (16#1357) and other output data. I have observed that while the values from the VFD appear fixed online, their corresponding hex values sent to the PLC keep",
      "author": {
        "@type": "Person",
        "name": "adam_lhadi"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-08",
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
                <h1 class="text-white">Understanding and Interpreting G120 Data Values for Motor Temperature and Output Data</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>adam_lhadi</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">262</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">396</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am a beginner learning how to interpret hex values from a G120 (CU240e-2pn) controlled by 1200plc1, specifically for the motor temperature (16#1357) and other output data. I have observed that while the values from the VFD appear fixed online, their corresponding hex values sent to the PLC keep changing, especially with voltage fluctuations. Additionally, I have noticed that setting the control word to 16#047f and the speed to 500 does not start the motor unless I adjust the values sequentially to 16#047e, then to 16#047f. 

Is there a straightforward method to determine the addresses associated with each VFD output data? For example, the first data address is iw100, followed by iw102, iw106, and iw114. Is there a way to directly link each row to its corresponding address based on the start address configured from the telegram? Your guidance on this matter is appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>1. Scaling values to and from the G120 motor control drive is based on reference values, with 16384(decimal) equaling the reference value (refer to P200 onwards for specific values). 2. The update rate from the G120 to your laptop can sometimes affect performance. 3/4. To streamline communication, create a data type for control parameters such as the control word and speed, and include them in your tag table. Assign the base address for each G120 drive. Refer to the manual for guidance on setting the control word bits required to operate the drive efficiently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As a beginner, I am currently studying the G120 (CU240e-2pn) controlled by 1200plc1. I am interested in interpreting the hex values received from the VFD, such as motor temperature (16#1357), into real values. Additionally, I have observed that while the values displayed online from the VFD remain constant, their hex values sent to the PLC keep changing, particularly in relation to voltage fluctuations. 

Furthermore, I have noticed that in the initial run, setting the control word to 16#0000 and then adjusting it to 16#047f along with a speed setting of 500 does not start the motor unless I cycle through the values by changing to 16#047e first and then back to 16#047f. 

I am seeking a direct method to determine the associated addresses for each VFD output data. For example, the first data address is iw100, followed by iw102, iw106, and iw114. Is there a specific way to easily identify which address corresponds to each row based on the configured start address from the telegram? 

Lastly, I am curious about the type of telegram used to monitor the motor temperature. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Michelot99</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why do the hex values for motor temperature and other output data from the G120 VFD keep changing in the PLC, especially with voltage fluctuations?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The hex values can change due to variations in the input voltage affecting the VFD's performance, resulting in different data being sent to the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why does setting the control word to 16047f and speed to 500 not start the motor on the G120 VFD unless adjusting the values sequentially to 16047e and then to 16047f?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: This behavior could be due to specific control sequences or conditions required by the VFD for motor startup, which might not be met when directly setting the control word and speed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a direct method to determine the addresses associated with each VFD output data when interfacing with a PLC like the 1200plc1?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To link VFD output data with PLC addresses, you may need to refer to the telegram configuration settings and mapping to establish the correspondence between the specific data rows and their respective addresses in the PLC memory.</p>
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

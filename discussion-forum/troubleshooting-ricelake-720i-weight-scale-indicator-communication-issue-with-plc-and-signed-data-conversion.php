
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey there! Recently, I installed the Ricelake 720i weight scale indicator and added the Ethernet IP module to enable communication between my PLC (L62) and the scale. To address an issue where the scale reading matches up to 32767 kg and then displays a negative value in the PLC">
    <meta name="keywords" content="ricelake 720i, weight scale indicator, communication issue, plc, ethernet ip module, l62, signed data conversion, swpb swap byte instruction, unsigned integer, troubleshooting, ricelake scale, plc communication, negative">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-ricelake-720i-weight-scale-indicator-communication-issue-with-plc-and-signed-data-conversion">
    <title>Troubleshooting Ricelake 720i Weight Scale Indicator Communication Issue with PLC and Signed Data Conversion | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Ricelake 720i Weight Scale Indicator Communication Issue with PLC and Signed Data Conversion | Oxmaint Community">
    <meta property="og:description" content="Hey there! Recently, I installed the Ricelake 720i weight scale indicator and added the Ethernet IP module to enable communication between my PLC (L62) and the scale. To address an issue where the scale reading matches up to 32767 kg and then displays a negative value in the PLC">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-ricelake-720i-weight-scale-indicator-communication-issue-with-plc-and-signed-data-conversion">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Ricelake 720i Weight Scale Indicator Communication Issue with PLC and Signed Data Conversion | Oxmaint Community">
    <meta name="twitter:description" content="Hey there! Recently, I installed the Ricelake 720i weight scale indicator and added the Ethernet IP module to enable communication between my PLC (L62) and the scale. To address an issue where the scale reading matches up to 32767 kg and then displays a negative value in the PLC">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-ricelake-720i-weight-scale-indicator-communication-issue-with-plc-and-signed-data-conversion"
      },
      "headline": "Troubleshooting Ricelake 720i Weight Scale Indicator Communication Issue with PLC and Signed Data Conversion",
      "description": "Hey there! Recently, I installed the Ricelake 720i weight scale indicator and added the Ethernet IP module to enable communication between my PLC (L62) and the scale. To address an issue where the scale reading matches up to 32767 kg and then displays a negative value in the PLC",
      "author": {
        "@type": "Person",
        "name": "MarvelJoe872"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-27",
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
                <h1 class="text-white">Troubleshooting Ricelake 720i Weight Scale Indicator Communication Issue with PLC and Signed Data Conversion</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MarvelJoe872</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">182</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">56</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey there! Recently, I installed the Ricelake 720i weight scale indicator and added the Ethernet IP module to enable communication between my PLC (L62) and the scale. To address an issue where the scale reading matches up to 32767 kg and then displays a negative value in the PLC (-31267 or something similar for any weight above 32767 kg), I've been using the SWPB swap byte instruction as per the manual. After some research, I considered converting the signed values to unsigned, but I'm unsure how to retrieve the weight from an unsigned integer. Any assistance on this matter would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe I needed to utilize the DINT data type rather than INT while awaiting its testing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MarvelJoe872</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The MOV instruction copies the value of a signed integer from one memory location to another. It then performs an addition operation, increasing the value by 65536.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A more straightforward option is to use the MOV instruction to handle signed integers in the range of 0 to 65535. It is important to note that both of these techniques can only manage values up to 65535.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am grateful for your assistance, sir. Your help is exactly what I was looking for. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MarvelJoe872</span></li>
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
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                <div class="col-lg-3 outer-container">
                    <!-- Related Topics -->
                    <?php include "./related-topic.php" ?>
                </div>
            </div>
            <!-- </div> -->
            <!-- cta button -->
            <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I address the issue of the Ricelake 720i weight scale indicator displaying negative values in the PLC when the weight exceeds 32767 kg?
- The issue can be addressed by using the SWPB swap byte instruction as per the manual or by converting the signed values to unsigned.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How do I convert signed values to unsigned for retrieving the weight from an unsigned integer on the Ricelake 720i weight scale indicator?</h4>
<p class='text-muted'><strong>Answer:</strong> - To convert signed values to unsigned, you may need to implement specific data conversion techniques as per the requirements of your system. Consider consulting the manual or seeking technical assistance for guidance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What communication module did you add to enable communication between the PLC (L62) and the Ricelake 720i weight scale indicator?</h4>
<p class='text-muted'><strong>Answer:</strong> - An Ethernet IP module was added to facilitate communication between the PLC (L62) and the Ricelake 720i weight scale indicator.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any recommended troubleshooting steps for resolving communication issues between the PLC and the weight scale indicator?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can refer to the manual for troubleshooting steps, reach out to technical support for assistance, or seek guidance from online forums and communities specializing in industrial automation and weighing systems.</p>
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

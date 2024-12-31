
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="One way to enhance user experience on a PLC is by implementing a PopUp screen that appears after a specific condition is met, such as when a bit goes on TRUE. This PopUp screen can also be triggered if a user holds a button pressed for a certain amount">
    <meta name="keywords" content="plc popup screen trigger, view designer popup display, user experience enhancement, plc bit triggered popup, create popup screen with plc, popup screen navigation design">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-create-a-popup-screen-triggered-by-plc-bit-in-view-designer">
    <title>How to Create a PopUp Screen Triggered by PLC Bit in View Designer | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Create a PopUp Screen Triggered by PLC Bit in View Designer | Oxmaint Community">
    <meta property="og:description" content="One way to enhance user experience on a PLC is by implementing a PopUp screen that appears after a specific condition is met, such as when a bit goes on TRUE. This PopUp screen can also be triggered if a user holds a button pressed for a certain amount">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-create-a-popup-screen-triggered-by-plc-bit-in-view-designer">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Create a PopUp Screen Triggered by PLC Bit in View Designer | Oxmaint Community">
    <meta name="twitter:description" content="One way to enhance user experience on a PLC is by implementing a PopUp screen that appears after a specific condition is met, such as when a bit goes on TRUE. This PopUp screen can also be triggered if a user holds a button pressed for a certain amount">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-create-a-popup-screen-triggered-by-plc-bit-in-view-designer"
      },
      "headline": "How to Create a PopUp Screen Triggered by PLC Bit in View Designer",
      "description": "One way to enhance user experience on a PLC is by implementing a PopUp screen that appears after a specific condition is met, such as when a bit goes on TRUE. This PopUp screen can also be triggered if a user holds a button pressed for a certain amount",
      "author": {
        "@type": "Person",
        "name": "Shivsrikakolum"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-02",
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
                <h1 class="text-white">How to Create a PopUp Screen Triggered by PLC Bit in View Designer</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">204</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">312</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>One way to enhance user experience on a PLC is by implementing a PopUp screen that appears after a specific condition is met, such as when a bit goes on TRUE. This PopUp screen can also be triggered if a user holds a button pressed for a certain amount of time, regardless of which screen they are on. In the image provided, the button has been set to a 5-second hold time. Is this hold time for the button or the bit? Unfortunately, there doesn't seem to be a direct workaround for this issue. As of now, the only option found in the View Designer is to set up PopUp displays through navigation.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Once you have set up your pop-up "group" and applied a visibility tag to ensure it remains hidden unless certain conditions are met, you can easily accomplish this task. Within the Properties menu, you can simply right click on the visibility option and then assign a tag to it, often referred to as an alias. While it has been some time since I last utilized View Designer, I recommend managing your conditions within the PLC. Choose the method that best suits your needs to toggle the visibility tag between true and false, especially if you are utilizing falling edge detection. Additionally, consider using a timer within the PLC to automatically adjust this visibility setting if a specific button is held down for a predetermined amount of time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JTCat</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. Is it necessary for the content to appear as a PopUp or in a separate NewPage?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Shivsrikakolum inquired about whether a popup display or a new page is needed for a recatnage. Thank you for your response! Feel free to view the attachment. Click to expand for more details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Sir. 

JTCat suggests creating a pop-up "group" and using a visibility tag to control its visibility based on certain conditions. This method is the simplest way to achieve this task. 
In the Properties tab, right click on the visibility option and select the option to assign a tag to it (also known as an alias). If you're not familiar with the View Designer tool, don't worry – it's been a while since I've used it too. 
Handle your conditions in the PLC and choose the method that works best for you to set the visibility tag to true or false. You can also use a timer in your PLC to automatically change the visibility based on the length of time a specific button is held down.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I create a PopUp screen triggered by a PLC bit in View Designer?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To create a PopUp screen triggered by a PLC bit in View Designer, you can set up PopUp displays through navigation as there may not be a direct workaround for this specific issue.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: Can a PopUp screen be triggered by a user holding a button pressed for a certain amount of time in View Designer?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, a PopUp screen can be triggered by a user holding a button pressed for a certain amount of time in View Designer. In the provided example, the button has been set to a 5-second hold time.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: Is the hold time specified for the button or the bit in triggering the PopUp screen?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The hold time, as mentioned in the discussion, is set for the button which triggers the PopUp screen.</p>
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

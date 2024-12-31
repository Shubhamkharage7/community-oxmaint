
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am using a machine equipped with a Mitsubishi Q03UDVCPU PLC, Q172DSCPU motion control module, and MR J3 servo drives. I have successfully uploaded the Q03UDVCPU PLC using GX Works 2 and configured the servo drives with MR Configuration 2. Now, I am wondering if it is">
    <meta name="keywords" content="mitsubishi q series plc, gx works 2, mr configuration 2, q03udvcpu, q172dscpu, mr j3 servo drives, motion control module">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/uploading-from-mitsubishi-q-series-plc-with-motion-control-how-to-do-it-with-gx-works-2-and-mr-configuration-2">
    <title>Uploading from Mitsubishi Q series PLC with motion control: How to do it with GX Works 2 and MR Configuration 2. | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Uploading from Mitsubishi Q series PLC with motion control: How to do it with GX Works 2 and MR Configuration 2. | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am using a machine equipped with a Mitsubishi Q03UDVCPU PLC, Q172DSCPU motion control module, and MR J3 servo drives. I have successfully uploaded the Q03UDVCPU PLC using GX Works 2 and configured the servo drives with MR Configuration 2. Now, I am wondering if it is">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/uploading-from-mitsubishi-q-series-plc-with-motion-control-how-to-do-it-with-gx-works-2-and-mr-configuration-2">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Uploading from Mitsubishi Q series PLC with motion control: How to do it with GX Works 2 and MR Configuration 2. | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am using a machine equipped with a Mitsubishi Q03UDVCPU PLC, Q172DSCPU motion control module, and MR J3 servo drives. I have successfully uploaded the Q03UDVCPU PLC using GX Works 2 and configured the servo drives with MR Configuration 2. Now, I am wondering if it is">
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
        "@id": "https://community.oxmaint.com/discussion-forum/uploading-from-mitsubishi-q-series-plc-with-motion-control-how-to-do-it-with-gx-works-2-and-mr-configuration-2"
      },
      "headline": "Uploading from Mitsubishi Q series PLC with motion control: How to do it with GX Works 2 and MR Configuration 2.",
      "description": "Hello everyone, I am using a machine equipped with a Mitsubishi Q03UDVCPU PLC, Q172DSCPU motion control module, and MR J3 servo drives. I have successfully uploaded the Q03UDVCPU PLC using GX Works 2 and configured the servo drives with MR Configuration 2. Now, I am wondering if it is",
      "author": {
        "@type": "Person",
        "name": "tientran"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-16",
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
                <h1 class="text-white">Uploading from Mitsubishi Q series PLC with motion control: How to do it with GX Works 2 and MR Configuration 2.</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tientran</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">87</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">23</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am using a machine equipped with a Mitsubishi Q03UDVCPU PLC, Q172DSCPU motion control module, and MR J3 servo drives. I have successfully uploaded the Q03UDVCPU PLC using GX Works 2 and configured the servo drives with MR Configuration 2. Now, I am wondering if it is possible to upload from the Q172DSCPU motion control module as well. Do I need to use MT Developer 2 for this task? If so, should I upload from the PLC or the motion control module? Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Although I am not too familiar with that particular CPU, I believe that uploading using MT is necessary. The configuration of the system will determine the methods available for controlling the drives, such as utilizing an SFC program in the QD CPU or passing information via the standard CPU. To set up, you will need to upload the configuration and if a new QD module is installed, you also need to download the OS using MT. These tasks can be completed by connecting to either the Q CPU or the QD CPU. If connecting via the Q CPU, simply select the CPU number, which is likely CPU01 (though this may not be accurate, as the other CPU would presumably be CPU00).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To successfully program MT Developer, you will require two different applications - one for PLC and one for Motion CPU. The PLC application requires either GxWorks2 or GX Developer for uploading purposes. Meanwhile, the Q172DSCPU application specifically requires MT Developer for proper functioning. Additionally, MR Configurator is essential for configuring servos.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Can I upload from the Mitsubishi Q172DSCPU motion control module using GX Works 2?
- Unfortunately, GX Works 2 does not support uploading from the motion control modules directly. You will need to use MT Developer 2 for this task.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Should I upload from the PLC or the motion control module when using MT Developer 2?</h4>
<p class='text-muted'><strong>Answer:</strong> - When using MT Developer 2, you should upload from the motion control module (Q172DSCPU) to access its specific programming and configuration settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is MR Configuration 2 compatible with MR J3 servo drives for configuration?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, MR Configuration 2 is the appropriate software tool for configuring MR J3 servo drives in conjunction with Mitsubishi Q series PLCs and motion control modules.</p>
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

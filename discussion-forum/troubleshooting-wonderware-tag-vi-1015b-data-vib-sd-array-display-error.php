
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Im facing an array problem with the tag VI_1015B_DATA.VIB_SD[0] to [50] while trying to display it in Wonderware. Unfortunately, Wonderware is not accepting the tag and showing errors. Additionally, the tag is not appearing in the SMC ArchestrA tag server. I would greatly appreciate any assistance on this issue.">
    <meta name="keywords" content="wonderware, tag vi_1015b_data.vib_sd, array display error, troubleshooting, array problem, smc archestra, tag server, wonderware errors, wonderware tag issue, vi_1015b_data.v">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-tag-vi-1015b-data-vib-sd-array-display-error">
    <title>Troubleshooting Wonderware Tag VI_1015B_DATA.VIB_SD Array Display Error | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Wonderware Tag VI_1015B_DATA.VIB_SD Array Display Error | Oxmaint Community">
    <meta property="og:description" content="Im facing an array problem with the tag VI_1015B_DATA.VIB_SD[0] to [50] while trying to display it in Wonderware. Unfortunately, Wonderware is not accepting the tag and showing errors. Additionally, the tag is not appearing in the SMC ArchestrA tag server. I would greatly appreciate any assistance on this issue.">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-tag-vi-1015b-data-vib-sd-array-display-error">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Wonderware Tag VI_1015B_DATA.VIB_SD Array Display Error | Oxmaint Community">
    <meta name="twitter:description" content="Im facing an array problem with the tag VI_1015B_DATA.VIB_SD[0] to [50] while trying to display it in Wonderware. Unfortunately, Wonderware is not accepting the tag and showing errors. Additionally, the tag is not appearing in the SMC ArchestrA tag server. I would greatly appreciate any assistance on this issue.">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-wonderware-tag-vi-1015b-data-vib-sd-array-display-error"
      },
      "headline": "Troubleshooting Wonderware Tag VI_1015B_DATA.VIB_SD Array Display Error",
      "description": "Im facing an array problem with the tag VI_1015B_DATA.VIB_SD[0] to [50] while trying to display it in Wonderware. Unfortunately, Wonderware is not accepting the tag and showing errors. Additionally, the tag is not appearing in the SMC ArchestrA tag server. I would greatly appreciate any assistance on this issue.",
      "author": {
        "@type": "Person",
        "name": "LP_337"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-03",
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
                <h1 class="text-white">Troubleshooting Wonderware Tag VI_1015B_DATA.VIB_SD Array Display Error</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>LP_337</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">153</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">374</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I'm facing an array problem with the tag VI_1015B_DATA.VIB_SD[0] to [50] while trying to display it in Wonderware. Unfortunately, Wonderware is not accepting the tag and showing errors. Additionally, the tag is not appearing in the SMC ArchestrA tag server. I would greatly appreciate any assistance on this issue. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When using classic InTouch, a minimum of 51 tags are required for managing the array. However, Wonderware (WW) simplifies this process by automatically incrementing tag names. This means you can easily start with WWTagname00 for PLCArray[0] and continue adding new tags with just a few clicks. With this streamlined approach, interacting with tag numbers becomes more efficient and hassle-free.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>My psychic abilities are acting up, so could you kindly share some screen captures of your work? Are you assigning the HMI tag as a Wonderware tag in the Tag Database or as a System Platform/ArchestrA tag using a binding script? I can see that your tag is part of an array within a UDT/AOI, indicated by the dot between 'DATA' and 'VIB'. Is this dot included in your linking process? Have you granted External Access to the elements in the PLC, or is External Access set to 'None'? When you mention "It will not accept the tag," are you referring to a problem with an HMI tag name containing a "[" character, or with the tag link address? Are you attempting to create a single tag that encompasses the entire array (as there are no "array" data types in Wonderware, only in iFix)? There could be numerous factors contributing to the issue, and without further information, it's difficult to pinpoint the exact cause.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Q: What could be causing the error when trying to display the VI_1015B_DATA.VIB_SD array in Wonderware?
 The error could be caused by various issues such as incorrect tag configuration, communication problems, or data type mismatches.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Why is Wonderware not accepting the VI_1015B_DATA.VIB_SD tag and showing errors?</h4>
<p class='text-muted'><strong>Answer:</strong> Wonderware may not be accepting the tag due to issues such as incorrect tag configuration settings, communication disruptions, or conflicts with existing tags.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why is the VI_1015B_DATA.VIB_SD tag not appearing in the SMC ArchestrA tag server?</h4>
<p class='text-muted'><strong>Answer:</strong> The tag may not be appearing in the SMC ArchestrA tag server due to synchronization issues between Wonderware and the tag server, incorrect tag naming or configuration, or communication problems between systems.</p>
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

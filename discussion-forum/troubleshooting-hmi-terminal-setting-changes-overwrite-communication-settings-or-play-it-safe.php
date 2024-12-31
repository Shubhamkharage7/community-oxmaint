
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my industry, our PLC and HMI systems are powered on and off daily before being deployed. I am relatively new to the PLC and HMI technology, having only been working with them for a few months. Recently, I encountered a situation where the HMI ran a .mer file">
    <meta name="keywords" content="plc and hmi technology, troubleshooting hmi terminal settings, communication settings for hmi systems, overwriting terminal communication settings, hmi .mer file issues, screen saver settings for">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-terminal-setting-changes-overwrite-communication-settings-or-play-it-safe">
    <title>Troubleshooting HMI Terminal Setting Changes: Overwrite Communication Settings or Play It Safe? | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting HMI Terminal Setting Changes: Overwrite Communication Settings or Play It Safe? | Oxmaint Community">
    <meta property="og:description" content="In my industry, our PLC and HMI systems are powered on and off daily before being deployed. I am relatively new to the PLC and HMI technology, having only been working with them for a few months. Recently, I encountered a situation where the HMI ran a .mer file">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-terminal-setting-changes-overwrite-communication-settings-or-play-it-safe">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting HMI Terminal Setting Changes: Overwrite Communication Settings or Play It Safe? | Oxmaint Community">
    <meta name="twitter:description" content="In my industry, our PLC and HMI systems are powered on and off daily before being deployed. I am relatively new to the PLC and HMI technology, having only been working with them for a few months. Recently, I encountered a situation where the HMI ran a .mer file">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-hmi-terminal-setting-changes-overwrite-communication-settings-or-play-it-safe"
      },
      "headline": "Troubleshooting HMI Terminal Setting Changes: Overwrite Communication Settings or Play It Safe?",
      "description": "In my industry, our PLC and HMI systems are powered on and off daily before being deployed. I am relatively new to the PLC and HMI technology, having only been working with them for a few months. Recently, I encountered a situation where the HMI ran a .mer file",
      "author": {
        "@type": "Person",
        "name": "jhnblckwood"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-04",
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
                <h1 class="text-white">Troubleshooting HMI Terminal Setting Changes: Overwrite Communication Settings or Play It Safe?</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jhnblckwood</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1122</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">23</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my industry, our PLC and HMI systems are powered on and off daily before being deployed. I am relatively new to the PLC and HMI technology, having only been working with them for a few months. Recently, I encountered a situation where the HMI ran a .mer file upon boot up, but when I tried to change the screen saver to promote our company instead of AB, I faced a dilemma. Upon loading and running the .mer file again, I was prompted to choose between overwriting the terminal communication settings with application communication settings. This left me unsure, as I assumed the terminal would already be configured with the application settings. In the end, I decided to restart by flipping the breaker to avoid any potential issues. I know this may seem like a novice question, but I wanted to avoid causing any disruptions. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The communication settings for your PanelView Plus only require one download. Therefore, when making edits to a pre-existing, operational panel, you can avoid overwriting the terminal's communication settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to avoid overwriting the terminal communications settings when editing an existing PanelView Plus, they only need to be downloaded once. This means that even if you are running the same application that has been working fine, overwriting the settings should not have any effect. It may seem unnecessary to confirm this, but it is always best to ensure that the settings match. Thank you for the clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jhnblckwood</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In theory, it is possible. When editing an existing screen, I always avoid overwriting the communications to ensure clarity and avoid any potential confusion. This is especially important in a plant network with multiple PLCs, where things can easily become disorganized. Additionally, when loading a new application, it does not automatically compare, so it will prompt you for confirmation each time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>IO_Rack</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Every individual's circumstances vary, but when it comes to communication protocols, I have a strict policy of always overwriting them. This is crucial to prevent potential issues that may arise from incomplete or flawed communication paths in new applications. It's better to address any potential issues immediately while working with the application, rather than waiting for a problem to occur in the middle of the night. By ensuring proper communication paths are in place, you can avoid any unpleasant surprises down the line.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>dmroeder mentioned that each person's circumstances are unique. In their case, they always overwrite communications and advise their service team to do the same. This is to avoid potential issues with new applications that have flawed communication paths. It's crucial to ensure everything is working correctly while working with the application to prevent any issues later on. They emphasized the importance of making changes promptly to avoid unexpected problems. 

In the past, the individual used to frequently visit new customers to make modifications or repairs to systems. They opted for the least intrusive methods, especially with older equipment. However, their current situation involves maintaining all equipment and backups. As a result, they are considering changing their approach based on the advice provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. What are the potential risks of overwriting terminal communication settings with application communication settings on an HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - Overwriting terminal communication settings with application communication settings can potentially lead to communication issues between the HMI and other devices, causing disruptions in the system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is it important to be cautious when making changes to HMI settings, especially regarding communication settings?</h4>
<p class='text-muted'><strong>Answer:</strong> - Making changes to HMI settings, especially communication settings, can impact the functionality and reliability of the system. It is important to proceed with caution to avoid unintended consequences.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps can be taken to ensure a smooth transition when changing HMI settings?</h4>
<p class='text-muted'><strong>Answer:</strong> - Before making changes to HMI settings, it is recommended to back up the existing settings, document the changes being made, and test the new settings in a controlled environment to avoid any disruptions during deployment.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can one ensure that the HMI terminal is properly configured with the application settings?</h4>
<p class='text-muted'><strong>Answer:</strong> - To ensure that the HMI terminal is properly configured with the application settings, it is advisable to review the configuration settings, consult the system documentation, and seek guidance from experienced professionals if needed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What are some best practices for managing HMI settings to avoid potential issues?</h4>
<p class='text-muted'><strong>Answer:</strong> - Some best practices for managing HHI settings include regular backups of configurations, documenting changes made, testing new settings before deployment, and seeking guidance from experienced individuals or resources when unsure.</p>
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

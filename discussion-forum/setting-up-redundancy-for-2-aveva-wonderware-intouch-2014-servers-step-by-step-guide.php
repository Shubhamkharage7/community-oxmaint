
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello Experts,(this post follows up on yesterdays discussion regarding using Aveva/Wonderware InTouch 2014 Runtime with dual MSSQL servers)I am interested in establishing redundancy for 2 InTouch 2014 Servers, and I would like to know the steps needed to synchronize them to ensure redundancy. Currently, there is one InTouch 2014">
    <meta name="keywords" content="aveva intouch 2014, wonderware intouch 2014, intouch redundancy setup, intouch server synchronization, intouch redundancy guide, intouch redundancy steps, intouch redundancy tutorial, intouch redundancy resources, intouch redundancy">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-redundancy-for-2-aveva-wonderware-intouch-2014-servers-step-by-step-guide">
    <title>Setting Up Redundancy for 2 Aveva/Wonderware InTouch 2014 Servers: Step-by-Step Guide | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting Up Redundancy for 2 Aveva/Wonderware InTouch 2014 Servers: Step-by-Step Guide | Oxmaint Community">
    <meta property="og:description" content="Hello Experts,(this post follows up on yesterdays discussion regarding using Aveva/Wonderware InTouch 2014 Runtime with dual MSSQL servers)I am interested in establishing redundancy for 2 InTouch 2014 Servers, and I would like to know the steps needed to synchronize them to ensure redundancy. Currently, there is one InTouch 2014">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-redundancy-for-2-aveva-wonderware-intouch-2014-servers-step-by-step-guide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting Up Redundancy for 2 Aveva/Wonderware InTouch 2014 Servers: Step-by-Step Guide | Oxmaint Community">
    <meta name="twitter:description" content="Hello Experts,(this post follows up on yesterdays discussion regarding using Aveva/Wonderware InTouch 2014 Runtime with dual MSSQL servers)I am interested in establishing redundancy for 2 InTouch 2014 Servers, and I would like to know the steps needed to synchronize them to ensure redundancy. Currently, there is one InTouch 2014">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-redundancy-for-2-aveva-wonderware-intouch-2014-servers-step-by-step-guide"
      },
      "headline": "Setting Up Redundancy for 2 Aveva/Wonderware InTouch 2014 Servers: Step-by-Step Guide",
      "description": "Hello Experts,(this post follows up on yesterdays discussion regarding using Aveva/Wonderware InTouch 2014 Runtime with dual MSSQL servers)I am interested in establishing redundancy for 2 InTouch 2014 Servers, and I would like to know the steps needed to synchronize them to ensure redundancy. Currently, there is one InTouch 2014",
      "author": {
        "@type": "Person",
        "name": "AK5fa"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-20",
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
                <h1 class="text-white">Setting Up Redundancy for 2 Aveva/Wonderware InTouch 2014 Servers: Step-by-Step Guide</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>AK5fa</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">168</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">432</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello Experts,(this post follows up on yesterday's discussion regarding using Aveva/Wonderware InTouch 2014 Runtime with dual MSSQL servers)I am interested in establishing redundancy for 2 InTouch 2014 Servers, and I would like to know the steps needed to synchronize them to ensure redundancy. Currently, there is one InTouch 2014 Server with 2 or 3 connected clients, and I have been tasked with setting up a second InTouch server to act as a redundant backup for those clients. I would appreciate any guidance, tutorials, or resources on how to accomplish this task. Any advice or insights on this topic would be highly valued! I apologize if this question has been asked before, but I have not found the specific answers I am seeking. Thank you and Regards, AK</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you referring to the tag server? Let's proceed with that assumption. To set up a secondary server, you will need to follow these steps: 
1. Install the System Platform Management Console (SMC) and the necessary communication drivers (such as OI.ABCIP, GESTRP, etc) on the new server. Refer to your existing server's SMC to determine which drivers are required.
2. Create the appropriate communication paths/topics on the new server's SMC. Mirror the settings from your existing server's SMC.
3. In your InTouch access names, enable the "Secondary Source" option and input the same information as the primary source, except for the node name, which should be the server name or IP address of your new server.
4. After pushing out the changes to clients, your secondary server should become operational. To test, temporarily disable the communication driver on your primary server. Keep in mind that the switchover process may take several minutes depending on the size of your InTouch application's tag database.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, @lmscar12, for your prompt and thorough response! I am looking forward to getting more involved in the project soon. I will implement your suggestions and provide an update on this thread with the outcomes. Best regards, AK.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AK5fa</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the purpose of setting up redundancy for 2 Aveva/Wonderware InTouch 2014 Servers?</h4>
<p class='text-muted'><strong>Answer:</strong> - Redundancy is important to ensure continuous operation in case of server failures. It allows for seamless switching to a backup server to minimize downtime.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the steps involved in synchronizing 2 InTouch 2014 Servers for redundancy?</h4>
<p class='text-muted'><strong>Answer:</strong> - The steps typically involve configuring both servers to share data, ensuring data synchronization between them, setting up failover mechanisms, and testing to ensure the redundancy system works as expected.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any specific tutorials or resources available to guide in setting up redundant InTouch servers?</h4>
<p class='text-muted'><strong>Answer:</strong> - There may be official documentation provided by Aveva/Wonderware, online tutorials, or community forums where experienced users share their insights and best practices for setting up redundancy in InTouch servers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I ensure a seamless transition for clients from one server to another in case of a failure?</h4>
<p class='text-muted'><strong>Answer:</strong> - Setting up proper failover mechanisms, ensuring data synchronization, and testing the failover process are crucial steps to ensure a smooth transition for clients from one server to another in case of a failure.</p>
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

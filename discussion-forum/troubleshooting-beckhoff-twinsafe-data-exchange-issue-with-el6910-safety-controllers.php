
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey guys, Im working on a Beckhoff TwinSAFE project using TwinCAT 3 with 2 EL6910 Safety controllers. I need to establish data exchange between them. I have set up a Custom FSoE Connection on both controllers with matching IO configurations and linked the data to the appropriate Messages. Both">
    <meta name="keywords" content="beckhoff twinsafe, twincat 3, el6910 safety controllers, data exchange troubleshooting, custom fsoe connection, io configurations, messages linking, safe address, alias device, fsoe master, startup-slave">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-beckhoff-twinsafe-data-exchange-issue-with-el6910-safety-controllers">
    <title>Troubleshooting Beckhoff TwinSAFE Data Exchange Issue with EL6910 Safety Controllers | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Beckhoff TwinSAFE Data Exchange Issue with EL6910 Safety Controllers | Oxmaint Community">
    <meta property="og:description" content="Hey guys, Im working on a Beckhoff TwinSAFE project using TwinCAT 3 with 2 EL6910 Safety controllers. I need to establish data exchange between them. I have set up a Custom FSoE Connection on both controllers with matching IO configurations and linked the data to the appropriate Messages. Both">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-beckhoff-twinsafe-data-exchange-issue-with-el6910-safety-controllers">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Beckhoff TwinSAFE Data Exchange Issue with EL6910 Safety Controllers | Oxmaint Community">
    <meta name="twitter:description" content="Hey guys, Im working on a Beckhoff TwinSAFE project using TwinCAT 3 with 2 EL6910 Safety controllers. I need to establish data exchange between them. I have set up a Custom FSoE Connection on both controllers with matching IO configurations and linked the data to the appropriate Messages. Both">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-beckhoff-twinsafe-data-exchange-issue-with-el6910-safety-controllers"
      },
      "headline": "Troubleshooting Beckhoff TwinSAFE Data Exchange Issue with EL6910 Safety Controllers",
      "description": "Hey guys, Im working on a Beckhoff TwinSAFE project using TwinCAT 3 with 2 EL6910 Safety controllers. I need to establish data exchange between them. I have set up a Custom FSoE Connection on both controllers with matching IO configurations and linked the data to the appropriate Messages. Both",
      "author": {
        "@type": "Person",
        "name": "nightline"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-23",
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
                <h1 class="text-white">Troubleshooting Beckhoff TwinSAFE Data Exchange Issue with EL6910 Safety Controllers</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>nightline</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1219</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">480</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey guys, I'm working on a Beckhoff TwinSAFE project using TwinCAT 3 with 2 EL6910 Safety controllers. I need to establish data exchange between them. I have set up a Custom FSoE Connection on both controllers with matching IO configurations and linked the data to the appropriate Messages. Both sides of the Custom FSoE Connection have the same Safe Address and share the Alias Device. Despite being able to successfully verify and download the project, I am unable to run it as the Custom FSoE Connection State keeps toggling between 0x64 (reset) and 0x65 (starting). The diagnosis indicates that the FSoE Master and StartUp-Slave are reporting Failsafe Value active. Unfortunately, I have not been able to find a solution in the Beckhoff manual or through their support. I'm hoping that someone here can assist me with resolving this issue. Thank you in advance for your help! - Jack.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I hope you were able to resolve the issue. Thank you in advance for your response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Djindjin6714</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The issue has been resolved thanks to a factory Safety engineer from Beckhoff Germany who informed me that setting an Error Acknowledge for COM ERR Ack of the FSoE Connections is not permitted unless certain conditions are met. This feature will be disabled in future versions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nightline</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What could be causing the Custom FSoE Connection State to toggle between 0x64 (reset) and 0x65 (starting) in a Beckhoff TwinSAFE project with EL6910 Safety controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The toggling between 0x64 and 0x65 states may indicate issues with the FSoE communication setup or configuration mismatch between the controllers. It could also point to problems with the Safe Address, Alias Device, or IO configurations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I troubleshoot the 'Failsafe Value active' error reported by the FSoE Master and StartUp-Slave in a Beckhoff TwinSAFE project with EL6910 Safety controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To address the 'Failsafe Value active' error, ensure that the data exchange setup, including the Custom FSoE Connection, is correctly configured with matching parameters on both controllers. Verify the Safe Address, Alias Device, and IO configurations to ensure consistency.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Where can I find assistance for resolving Beckhoff TwinSAFE data exchange issues like the one described in the thread with EL6910 Safety controllers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While the Beckhoff manual and support resources are valuable, community forums and discussion platforms like this one can also provide helpful insights and solutions from experienced users who may have encountered similar challenges.</p>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Are you experiencing issues with your iFix system after losing the original RAID archive storage? Trends initially were blank, but after redirecting to an external hard drive for data collection, they are now displaying as flatlined at a single value. I have tried troubleshooting with the historian administrator, but">
    <meta name="keywords" content="troubleshooting, flatlined trends, proficy historian system, ifix system, raid archive storage, external hard drive, data collection, historian administrator, machine 3, data collector nodes, proficy historian collectors list, operational nodes">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-flatlined-trends-in-proficy-historian-system">
    <title>Troubleshooting Flatlined Trends in Proficy Historian System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Flatlined Trends in Proficy Historian System | Oxmaint Community">
    <meta property="og:description" content="Are you experiencing issues with your iFix system after losing the original RAID archive storage? Trends initially were blank, but after redirecting to an external hard drive for data collection, they are now displaying as flatlined at a single value. I have tried troubleshooting with the historian administrator, but">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-flatlined-trends-in-proficy-historian-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Flatlined Trends in Proficy Historian System | Oxmaint Community">
    <meta name="twitter:description" content="Are you experiencing issues with your iFix system after losing the original RAID archive storage? Trends initially were blank, but after redirecting to an external hard drive for data collection, they are now displaying as flatlined at a single value. I have tried troubleshooting with the historian administrator, but">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-flatlined-trends-in-proficy-historian-system"
      },
      "headline": "Troubleshooting Flatlined Trends in Proficy Historian System",
      "description": "Are you experiencing issues with your iFix system after losing the original RAID archive storage? Trends initially were blank, but after redirecting to an external hard drive for data collection, they are now displaying as flatlined at a single value. I have tried troubleshooting with the historian administrator, but",
      "author": {
        "@type": "Person",
        "name": "bigLee"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-14",
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
                <h1 class="text-white">Troubleshooting Flatlined Trends in Proficy Historian System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>bigLee</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">184</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">178</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Are you experiencing issues with your iFix system after losing the original RAID archive storage? Trends initially were blank, but after redirecting to an external hard drive for data collection, they are now displaying as flatlined at a single value. I have tried troubleshooting with the historian administrator, but I seem to have hit a roadblock in resolving this issue. One thing that stands out to me is that the historian server is listed as Machine 3, and the data collector nodes within the proficy historian collectors list are all operational, except for Machine 3, which is showing as paused and in red. Unfortunately, I am unsure of how to proceed from here. If you have any insights or suggestions, I would greatly appreciate your input. Thank you, Ben.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Ben, have you been able to address the issue at hand? I came across your message and wanted to reach out to offer my assistance. With my extensive experience as a GE solution architect, I am well-versed in products such as iFix and Proficy Historian. If you still require assistance, please feel free to contact me via LinkedIn at www.linkedin.com/in/stucobb. Send me a message there so we can connect and provide the help you need. Best regards, Stuart Cobb, Senior Solution Architect at GE Vernova.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>stucobb</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>bigLee recently joined iFix and encountered a problem with the RAID archive storage system. Initially, the trends were not showing any data, so they redirected the data collection to an external hard drive. However, the trends are now displaying but remain flatlined at a single value. Despite trying different approaches in the historian administrator, they are stuck and seeking suggestions from others. This issue could possibly be related to the collector not capturing diverse values and getting stuck on the last recorded value. To troubleshoot, one can check the timestamp of the frozen tag in the historian administrator to verify if it reflects the recent time. While this doesn't completely resolve the issue, it narrows down the potential causes.

Another noticeable issue is that the historian server is labeled as Machine 3, and the data collector nodes in the proficy historian collectors list are active, except for Machine 3 which is highlighted in red and is in a paused state. Restarting the machine or the collection service might resolve this issue, as it has helped in similar situations before.

Feeling stuck on how to proceed further, bigLee is open to any insights or suggestions from the community. It might be a good idea to explore alternatives to GE systems in resolving this recurring issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Facing a storage capacity problem, our server, an aging 11-year-old Dell, was on the verge of shutting down due to a full 5MB limit. The server had a degraded C: drive, causing frequent crashes upon restarting. To resolve the issue, we transferred the operating system to a new solid state drive and redirected the archive target to an external hard drive. By doing so, we were able to restore the backed-up archives and successfully bring our services back online. Special thanks to stuccobb and cardosoccea for their assistance throughout the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bigLee</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why are the trends in my Proficy Historian system displaying as flatlined at a single value after redirecting data collection to an external hard drive?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The flatlined trends issue could be related to the historian server Machine 3 being paused and in red status within the Proficy Historian collectors list. This could indicate a problem with data collection from that specific machine.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What could be causing the historian server Machine 3 to show as paused and in red status in the Proficy Historian collectors list?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The paused and red status of Machine 3 in the collectors list could be due to an operational issue with that specific data collector node. It might require troubleshooting to determine the exact cause of the problem.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I resolve the flatlined trends issue in my Proficy Historian system when facing roadblocks in troubleshooting with the historian administrator?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If troubleshooting with the historian administrator has hit a roadblock, you may need to investigate further by checking the operational status of all data collector nodes, particularly focusing on resolving the paused and red status of Machine 3. Additionally, seeking assistance from GE Digital support or consulting relevant documentation could also help in resolving the issue.</p>
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

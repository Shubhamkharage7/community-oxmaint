
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Has anyone successfully set up a standby x duty PM schedule in D7i? Specifically, I am interested in having the main pump run for 12 weeks on and 2 weeks off, while the back-up pump runs for 2 weeks on and 12 off. This setup ensures continuous operation as">
    <meta name="keywords" content="standby pump schedule, duty pump operation, continuous pump operation, d7i pump setup, main pump maintenance, back-up pump rotation, vibration readings scheduling, pump servicing transition, standby duty pm, pump operation strategy, pump maintenance routine, continuous pump">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/setting-up-a-standby-and-duty-pump-schedule-for-continuous-operation-in-d7i">
    <title>Setting up a Standby and Duty Pump Schedule for Continuous Operation in D7i | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Setting up a Standby and Duty Pump Schedule for Continuous Operation in D7i | Oxmaint Community">
    <meta property="og:description" content="Has anyone successfully set up a standby x duty PM schedule in D7i? Specifically, I am interested in having the main pump run for 12 weeks on and 2 weeks off, while the back-up pump runs for 2 weeks on and 12 off. This setup ensures continuous operation as">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/setting-up-a-standby-and-duty-pump-schedule-for-continuous-operation-in-d7i">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Setting up a Standby and Duty Pump Schedule for Continuous Operation in D7i | Oxmaint Community">
    <meta name="twitter:description" content="Has anyone successfully set up a standby x duty PM schedule in D7i? Specifically, I am interested in having the main pump run for 12 weeks on and 2 weeks off, while the back-up pump runs for 2 weeks on and 12 off. This setup ensures continuous operation as">
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
        "@id": "https://community.oxmaint.com/discussion-forum/setting-up-a-standby-and-duty-pump-schedule-for-continuous-operation-in-d7i"
      },
      "headline": "Setting up a Standby and Duty Pump Schedule for Continuous Operation in D7i",
      "description": "Has anyone successfully set up a standby x duty PM schedule in D7i? Specifically, I am interested in having the main pump run for 12 weeks on and 2 weeks off, while the back-up pump runs for 2 weeks on and 12 off. This setup ensures continuous operation as",
      "author": {
        "@type": "Person",
        "name": "Steven Van Els"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-30",
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
                <h1 class="text-white">Setting up a Standby and Duty Pump Schedule for Continuous Operation in D7i</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Steven Van Els</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1054</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">271</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Has anyone successfully set up a standby x duty PM schedule in D7i? Specifically, I am interested in having the main pump run for 12 weeks on and 2 weeks off, while the back-up pump runs for 2 weeks on and 12 off. This setup ensures continuous operation as the back-up pump takes over during main pump servicing. Additionally, vibration readings work orders should be triggered during this transition.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Incorporating duty and standby maintenance tasks into a CMMS system can provide valuable insights and ensure equipment reliability. Utilizing a multi-level PM approach at the Functional location can allow for separate PMs for duty and standby with vibration checks. Collaboration with IT may be necessary to effectively implement this configuration. Consider three potential options: generating two PM work orders for duty and standby with vibration checks, generating three PM work orders for duty, standby, and vibration checks, or creating one PM work order with three distinct tasks. Evaluate which option aligns best with your PM work order management needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zoe Peterson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Svanels, were you able to accomplish the task successfully?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lila Long</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I set up a standby and duty pump schedule in D7i like the one described in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set up a standby and duty pump schedule in D7i, navigate to the scheduling or maintenance section of the software. Input the desired run times for the main pump (e.g., 12 weeks on and 2 weeks off) and the backup pump (e.g., 2 weeks on and 12 weeks off). Ensure that vibration readings and work orders are triggered during pump transition for continuous operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What are the benefits of having a standby and duty pump schedule like the one mentioned in the discussion thread?</h4>
<p class='text-muted'><strong>Answer:</strong> - Having a standby and duty pump schedule ensures continuous operation of the system by alternating between the main pump and backup pump for maintenance and servicing. This setup minimizes downtime and enhances system reliability.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I configure vibration readings and work orders to be triggered during the transition between the main pump and backup pump?</h4>
<p class='text-muted'><strong>Answer:</strong> - In D7i, you can set up triggers for vibration readings and work orders during pump transitions by customizing the maintenance settings. Specify the conditions under which these actions should be triggered, such as when the main pump goes offline and the backup pump starts operating.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can the standby and duty pump schedule described in the thread be customized to suit specific operational requirements?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, the standby and duty pump schedule can be customized in D7i to meet specific operational needs. You can</p>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am using an Automation Direct D2-262 PLC and a C-more HMI EA9T6CL-R for a project. Im looking to create a program that can be scheduled for a specific date and time in the future, which needs to be set through the HMI interface. With a deadline of">
    <meta name="keywords" content="automation direct d2-262 plc, hmi ea9t6cl-r, setting date and time, scheduled program, hmi interface, sample program, deadline, manual reference, triggering activity, comparator instruction, month, day, hour, minute">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-set-date-and-time-on-automation-direct-d2-262-plc-using-hmi-ea9t6cl-r">
    <title>How to Set Date and Time on Automation Direct D2-262 PLC Using HMI EA9T6CL-R | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Set Date and Time on Automation Direct D2-262 PLC Using HMI EA9T6CL-R | Oxmaint Community">
    <meta property="og:description" content="Hello, I am using an Automation Direct D2-262 PLC and a C-more HMI EA9T6CL-R for a project. Im looking to create a program that can be scheduled for a specific date and time in the future, which needs to be set through the HMI interface. With a deadline of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-set-date-and-time-on-automation-direct-d2-262-plc-using-hmi-ea9t6cl-r">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Set Date and Time on Automation Direct D2-262 PLC Using HMI EA9T6CL-R | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am using an Automation Direct D2-262 PLC and a C-more HMI EA9T6CL-R for a project. Im looking to create a program that can be scheduled for a specific date and time in the future, which needs to be set through the HMI interface. With a deadline of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-set-date-and-time-on-automation-direct-d2-262-plc-using-hmi-ea9t6cl-r"
      },
      "headline": "How to Set Date and Time on Automation Direct D2-262 PLC Using HMI EA9T6CL-R",
      "description": "Hello, I am using an Automation Direct D2-262 PLC and a C-more HMI EA9T6CL-R for a project. Im looking to create a program that can be scheduled for a specific date and time in the future, which needs to be set through the HMI interface. With a deadline of",
      "author": {
        "@type": "Person",
        "name": "roni"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">How to Set Date and Time on Automation Direct D2-262 PLC Using HMI EA9T6CL-R</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>roni</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">259</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">397</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am using an Automation Direct D2-262 PLC and a C-more HMI EA9T6CL-R for a project. I'm looking to create a program that can be scheduled for a specific date and time in the future, which needs to be set through the HMI interface. With a deadline of 2 days, I am short on time to refer to the manual. Can you please provide a sample program for me to use? The task involves triggering an activity when the set date and time match. This requires the HMI to set the month, day, hour, and minute, which then compares to the PLC's values using a comparator instruction. Any assistance is greatly appreciated. Thanks, Roni.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Browse through the sample programs provided by Automation Direct for executing logic based on the time of day. These example programs, suitable for DirectLogic PLCs and various intelligent devices, can be downloaded from AutomationDirect's technical support page. Join the AutomationDirect community to connect with other users and access more helpful resources.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I set the date and time on an Automation Direct D2-262 PLC using an HMI EA9T6CL-R?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set the date and time on the PLC using the HMI, you would typically create a program within the HMI interface that allows you to input the desired month, day, hour, and minute values. These values can then be sent to the PLC for comparison with its internal clock.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is there a sample program available for scheduling tasks based on a specific date and time using an Automation Direct D2-262 PLC and a C-more HMI EA9T6CL-R?</h4>
<p class='text-muted'><strong>Answer:</strong> - While creating a sample program tailored to your specific requirements would be ideal, it is recommended to refer to the product manuals for detailed instructions on setting up scheduled tasks. However, you can consider creating logic that involves setting the date and time parameters and using a comparator instruction to trigger activities when they match.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What is the process for comparing the set date and time values on the HMI with the PLC's internal clock using a comparator instruction?</h4>
<p class='text-muted'><strong>Answer:</strong> - To compare the set date and time values from the HMI with the PLC's clock, you would typically use a comparator instruction in your PLC program. This instruction would compare the input values (month, day, hour, minute) from the HMI with the current values stored in the PLC's clock registers. If there is a match, you can then trigger</p>
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

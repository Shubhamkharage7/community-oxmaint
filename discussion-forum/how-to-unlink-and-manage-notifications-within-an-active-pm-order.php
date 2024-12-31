
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, our company relies on defect reports to create PM orders for task completion. Sometimes we have multiple tasks of the same kind that can be linked to one PM order, allowing several notifications to be addressed at once. However, one of the notifications has evolved into a larger">
    <meta name="keywords" content="unlink notifications, manage pm orders, task completion, defect reports, multiple tasks, notifications handling, track costs, separate pm order, attachments management, rel status, system access limitations, sub orders creation, notifications detachment, task evolution, address">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-unlink-and-manage-notifications-within-an-active-pm-order">
    <title>How to Unlink and Manage Notifications within an Active PM Order | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Unlink and Manage Notifications within an Active PM Order | Oxmaint Community">
    <meta property="og:description" content="Hello, our company relies on defect reports to create PM orders for task completion. Sometimes we have multiple tasks of the same kind that can be linked to one PM order, allowing several notifications to be addressed at once. However, one of the notifications has evolved into a larger">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-unlink-and-manage-notifications-within-an-active-pm-order">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Unlink and Manage Notifications within an Active PM Order | Oxmaint Community">
    <meta name="twitter:description" content="Hello, our company relies on defect reports to create PM orders for task completion. Sometimes we have multiple tasks of the same kind that can be linked to one PM order, allowing several notifications to be addressed at once. However, one of the notifications has evolved into a larger">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-unlink-and-manage-notifications-within-an-active-pm-order"
      },
      "headline": "How to Unlink and Manage Notifications within an Active PM Order",
      "description": "Hello, our company relies on defect reports to create PM orders for task completion. Sometimes we have multiple tasks of the same kind that can be linked to one PM order, allowing several notifications to be addressed at once. However, one of the notifications has evolved into a larger",
      "author": {
        "@type": "Person",
        "name": "Justin Knight"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-31",
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
                <h1 class="text-white">How to Unlink and Manage Notifications within an Active PM Order</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Justin Knight</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">793</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">489</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, our company relies on defect reports to create PM orders for task completion. Sometimes we have multiple tasks of the same kind that can be linked to one PM order, allowing several notifications to be addressed at once. However, one of the notifications has evolved into a larger task than expected, and I need to track the costs separately under a new PM order. Unfortunately, I am unable to detach the notification from the original PM order in order to reattach it to the new one. There are also instances where I need to address notifications attached to a PM order while keeping the order open and at REL status. Any suggestions on how to handle this situation? I have limited access to our system and cannot create Sub orders. Thank you for any assistance you can provide.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you wondering which version of SAP you have installed? If you are using SAP version 4.7 or later, you have the capability to detach notifications from the order they were created from. The process involves detaching the notification twice - once from the work order header and once from the notification itself - to fully disconnect the link. Unfortunately, in earlier versions of SAP, this functionality is not available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jessica Freeman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Issue Resolved: I successfully assigned a notification within a PM order, but I'm facing difficulties un-assigning it. I am using SAP Ecc 6.0 and may need to check a different field for the solution. Due to this, I may not be able to resolve the notification un-assignment issue at this time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tina Murray</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you need assistance, consult your Project Management Analyst. Do you currently have a PM Analyst on your team?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jasmine Howard</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Although we have a SAP expert on our team, he is often occupied with other tasks. As I strive to expand my knowledge, I have encountered challenges in seeking information on forum sites due to the unique configuration of our SAP system. This has made it difficult to find accurate and relevant answers to our queries.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ruby Cooper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are authorized to make changes in SAP, you can delete the assignment of a notification to an order by using transaction code IW22. Navigate to Maintenance Notification - Order -- Delete Assignment. If the work order was linked to this notification, you must also disconnect the notification from the Order Header Data tab of the work order. Look for the specific icon on this tab to complete this disconnection process. Unfortunately, there does not seem to be a menu option for this task in my system (ECC 6.0).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Victor Thompson</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello David, I have noticed that the two options are currently greyed out and inaccessible, but I plan to address this with the project management analyst. Thank you for your assistance, it is greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Marcus Woods</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As a PM Analyst, offering daily support is typically expected unless you have a PM expert user assisting you. Consider treating them to a drink or lunch to show appreciation and potentially free up their schedule. Have you received training in using SAP PM?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chad Cook</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Each of our 10 modules is vital for our nationwide operations, making it challenging to secure his availability. Our company is hesitant to explore SAP, but I had to advocate strongly to implement Maintenance plans successfully. Sometimes, I wish a simple gesture could capture his focus.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Vince Myers</span></li>
            </ul>
        </div>
        
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I unlink a notification from an active PM order to attach it to a new one for separate tracking of costs?
- To unlink a notification from an active PM order, you may need higher system access to create Sub orders or explore other options such as changing the task type or using different notification types.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to address notifications attached to a PM order while keeping the order open and at REL status?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can address notifications attached to a PM order while keeping the order open and at REL status by ensuring that the tasks are managed separately within the same order or by exploring alternative solutions within your system's limitations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What can I do if a notification within a PM order has evolved into a larger task than expected?</h4>
<p class='text-muted'><strong>Answer:</strong> - If a notification within a PM order has evolved into a larger task than expected, consider creating a new PM order to track the costs separately. If you are unable to detach the notification, explore workarounds like creating new tasks within the existing order.</p>
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

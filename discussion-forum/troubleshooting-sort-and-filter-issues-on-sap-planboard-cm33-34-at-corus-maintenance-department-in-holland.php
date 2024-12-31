
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="At Corus in Holland (Ijmuiden), we have successfully implemented the CRP (Capacity Requirements Planning) functionality for our maintenance department. However, during the regression test conducted before the official launch, we encountered two issues that need to be addressed. The first issue involves the incorrect consideration of available capacity in">
    <meta name="keywords" content="sap planboard, cm33, cm34, troubleshooting, sort issues, filter problems, corus maintenance department, crp functionality, capacity requirements planning, regression test, incorrect consideration, available capacity, graphical planning board, workcenter">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-sort-and-filter-issues-on-sap-planboard-cm33-34-at-corus-maintenance-department-in-holland">
    <title>Troubleshooting Sort and Filter Issues on SAP Planboard (CM33/34) at Corus Maintenance Department in Holland | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Sort and Filter Issues on SAP Planboard (CM33/34) at Corus Maintenance Department in Holland | Oxmaint Community">
    <meta property="og:description" content="At Corus in Holland (Ijmuiden), we have successfully implemented the CRP (Capacity Requirements Planning) functionality for our maintenance department. However, during the regression test conducted before the official launch, we encountered two issues that need to be addressed. The first issue involves the incorrect consideration of available capacity in">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-sort-and-filter-issues-on-sap-planboard-cm33-34-at-corus-maintenance-department-in-holland">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Sort and Filter Issues on SAP Planboard (CM33/34) at Corus Maintenance Department in Holland | Oxmaint Community">
    <meta name="twitter:description" content="At Corus in Holland (Ijmuiden), we have successfully implemented the CRP (Capacity Requirements Planning) functionality for our maintenance department. However, during the regression test conducted before the official launch, we encountered two issues that need to be addressed. The first issue involves the incorrect consideration of available capacity in">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-sort-and-filter-issues-on-sap-planboard-cm33-34-at-corus-maintenance-department-in-holland"
      },
      "headline": "Troubleshooting Sort and Filter Issues on SAP Planboard (CM33/34) at Corus Maintenance Department in Holland",
      "description": "At Corus in Holland (Ijmuiden), we have successfully implemented the CRP (Capacity Requirements Planning) functionality for our maintenance department. However, during the regression test conducted before the official launch, we encountered two issues that need to be addressed. The first issue involves the incorrect consideration of available capacity in",
      "author": {
        "@type": "Person",
        "name": "frits renooij"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-30",
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
                <h1 class="text-white">Troubleshooting Sort and Filter Issues on SAP Planboard (CM33/34) at Corus Maintenance Department in Holland</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>frits renooij</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>1 comment</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2377</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">336</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>At Corus in Holland (Ijmuiden), we have successfully implemented the CRP (Capacity Requirements Planning) functionality for our maintenance department. However, during the regression test conducted before the official launch, we encountered two issues that need to be addressed. 

The first issue involves the incorrect consideration of available capacity in transaction CM33 when using the filter. The second issue pertains to the incorrect assignment of sort criteria to the charts in the Graphical Planning board created for the Corus maintenance department. The screen is divided into three separate sections: 
1. Workcenter load by Workcenter (Dispatched)
2. Workcenter Load by operation (Dispatched)
3. Operation pool (Not Dispatched)

Starting with the Sort issue, there are two Sort criteria assigned to the second chart and three to the third chart. However, there seems to be a cross-linking issue between the assignments, as selecting one chart may display the sort criteria of the other. Additionally, the operations are not sorting consecutively as expected. 

The more crucial problem lies in the filter and its impact on the correct consideration of available capacity. The standard SAP Filter (5KFIL4) assigned in the selection profile is causing dispatched operations to overlook the actual available capacity when the filter is activated. This issue became apparent when the workcenter became overloaded with dispatched orders, which is unacceptable. 

To resolve these issues, we seek assistance from anyone who may have a solution. Your prompt response is highly appreciated. Thank you, Frits.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In SAP, the planning board operates as intended, taking into account specific work orders or a list of orders specified in the filter. When accessing the planning board from the IW32 transaction, SAP considers all orders with requirements for the work centers used by the initial order. This allows for a targeted evaluation of requirements and available capacity, aligning with your desired outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>31-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Alice Johnson</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the main issues encountered with SAP Planboard (CM33/34) at the Corus Maintenance Department in Holland?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The main issues identified are related to incorrect consideration of available capacity when using filters in transaction CM33 and incorrect sort criteria assignment in the graphical planning board.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What specific problems are faced with the Sort criteria in the graphical planning board at Corus Maintenance Department?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: There are issues with cross-linking between sort criteria assignments in different charts, leading to unexpected display of criteria and non-consecutive sorting of operations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Why is the filter causing problems in the correct consideration of available capacity in the Corus maintenance department?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The standard SAP Filter (5KFIL4) assigned in the selection profile is causing dispatched operations to overlook the actual available capacity when activated, leading to workcenters being overloaded with dispatched orders.</p>
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

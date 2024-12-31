
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are currently working on implementing an FMEA template for our existing systems using Dyadems FMEA Pro, and it has been quite challenging. Our systems have been in operation for approximately 9 years, with spares being added over time based on real-time failure experiences. Job plans and PMs have">
    <meta name="keywords" content="fmea template, existing systems, challenges, solutions, dyadem fmea pro, spares management, job plans, pms, nc/capa system, root cause analysis, corrective actions, system integration, failure modes, real-time improvement, equipment">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/implementing-fmea-template-for-existing-systems-challenges-and-solutions">
    <title>Implementing FMEA Template for Existing Systems: Challenges and Solutions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Implementing FMEA Template for Existing Systems: Challenges and Solutions | Oxmaint Community">
    <meta property="og:description" content="We are currently working on implementing an FMEA template for our existing systems using Dyadems FMEA Pro, and it has been quite challenging. Our systems have been in operation for approximately 9 years, with spares being added over time based on real-time failure experiences. Job plans and PMs have">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/implementing-fmea-template-for-existing-systems-challenges-and-solutions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Implementing FMEA Template for Existing Systems: Challenges and Solutions | Oxmaint Community">
    <meta name="twitter:description" content="We are currently working on implementing an FMEA template for our existing systems using Dyadems FMEA Pro, and it has been quite challenging. Our systems have been in operation for approximately 9 years, with spares being added over time based on real-time failure experiences. Job plans and PMs have">
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
        "@id": "https://community.oxmaint.com/discussion-forum/implementing-fmea-template-for-existing-systems-challenges-and-solutions"
      },
      "headline": "Implementing FMEA Template for Existing Systems: Challenges and Solutions",
      "description": "We are currently working on implementing an FMEA template for our existing systems using Dyadems FMEA Pro, and it has been quite challenging. Our systems have been in operation for approximately 9 years, with spares being added over time based on real-time failure experiences. Job plans and PMs have",
      "author": {
        "@type": "Person",
        "name": "Jeff Wahl"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-08",
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
                <h1 class="text-white">Implementing FMEA Template for Existing Systems: Challenges and Solutions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jeff Wahl</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4855</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">340</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>We are currently working on implementing an FMEA template for our existing systems using Dyadem's FMEA Pro, and it has been quite challenging. Our systems have been in operation for approximately 9 years, with spares being added over time based on real-time failure experiences. Job plans and PMs have also been continuously enhanced. We have a robust NC/CAPA system in place for root cause failure analysis and implementing corrective actions.

However, we are facing two main challenges. Firstly, FMEA Pro does not easily integrate existing system information for analyzing spares, PMs, and job plans. We are working on determining the best approach for conducting the FMEA and organizing the layout in a logical manner. It feels redundant to start from scratch when we already have a wealth of data on existing spares. Listing functions and failure modes for each spare has proven to be time-consuming and somewhat redundant.

Secondly, we believe that our current real-time improvement programs, combined with our experienced workforce, may already cover what the FMEA is meant to validate. Our existing improvement processes are efficient at maintaining equipment across all systems in real-time. An inexperienced FMEA team may not be able to identify the actual failure experiences we have encountered, potentially leading to ineffective results. 

If anyone has an example of an FMEA that successfully incorporates existing systems, including equipment, spares, PMs, job plans, and CM data, we would greatly appreciate the opportunity to review it for inspiration. Thank you, J.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Wally, if FMEA-Pro has Open Data Base Configuration and your current data is in ODBC format, you can create a data transformer to transfer data seamlessly. This can be especially helpful for filling in any missing data fields. Most RCM packages use ODBC, so if FMEA-Pro does not, it may be worth considering using an RCM package instead. 

Performing an FMEA solely to validate current practices may not be the best approach from a business standpoint. If your failure and downtime trends are showing improvement, it is a strong indicator that you are likely on the right track.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ulysses Ross</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response, Vee. I wanted to clarify my issue with FMEA-Pro. It is an open database, and although our servers are validated, FMEA-Pro itself has not been validated. Therefore, we do not allow direct communication between the two databases. Instead, we use a database query program called Brio to extract data from Maximo. The results are then exported to Excel and subsequently imported into FMEA-Pro. While this process is not overly complex, I am struggling with how to design the template effectively.

Initially, we listed the equipment with its corresponding spares underneath. While this seemed logical, we ended up listing failure modes for each spare instead of the equipment itself. I am unsure if a Bill of Material (BOM) or Build List should be incorporated into an FMEA. I would greatly benefit from seeing a well-structured FMEA on an existing system to understand which data is crucial for consideration during the analysis and which data is for reference or comparison with the FMEA results.

I am debating whether to start from scratch or utilize existing information such as CMs (Configuration Management), PMs (Preventive Maintenance), job plans, and spares. Any guidance on this matter would be appreciated. Thank you, J-</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nina Sanders</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Wally, you inquired about whether a Bill of Material (BOM) or Build List should be included in an FMEA. As far as I know, a BOM is typically a result of tasks generated from an FMEA. While every failure mode (FM) may have several related parts, not every component in a BOM necessarily corresponds to a specific FM, as multiple parts may be related to the same FM. 

It would be beneficial to observe a well-executed FMEA within an existing system to understand which data is essential for the FMEA process and which data is used for reference or comparison to the FMEA output. Functional FMEAs, such as those used in Reliability Centered Maintenance (RCM), are the most effective in determining maintenance tasks. On the other hand, Design FMEAs involve analyzing every component part in a BOM, making them less ideal for maintenance task identification due to their detailed nature and high costs.

When deciding whether to start fresh or utilize existing information such as CMs, PMs, job plans, and spare parts, I believe it is beneficial to consider existing data. Kindly refer to the email I previously sent for further details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Denise Reed</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What are the main challenges faced when implementing an FMEA template for existing systems?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The challenges include difficulties in integrating existing system information into the FMEA tool for analyzing spares, PMs, and job plans, as well as concerns about redundancy and time-consuming processes in listing functions and failure modes for each spare.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How do existing real-time improvement programs and an experienced workforce affect the need for FMEA validation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The existing real-time improvement programs and experienced workforce may cover what the FMEA is meant to validate, potentially leading to concerns about the effectiveness of the FMEA process in identifying actual failure experiences.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is there a way to incorporate existing systems, equipment, spares, PMs, job plans, and CM data successfully into an FMEA?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: While challenging, successful examples of incorporating existing systems into an FMEA template exist, and reviewing such examples for inspiration can provide insights on how to structure the FMEA layout in a logical manner.</p>
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

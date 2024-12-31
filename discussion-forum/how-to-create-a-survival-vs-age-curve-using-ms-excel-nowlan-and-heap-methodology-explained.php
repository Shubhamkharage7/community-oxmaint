
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am in the process of creating a survival vs age curve for component data, similar to Exhibit C-10 in Appendix C of the RCM report by Nowlan and Heap. Instead of relying on specialized software, I am attempting to replicate the process using MS Excel by following the">
    <meta name="keywords" content="nowlan and heap methodology, survival vs age curve, ms excel, rcm report, exhibit c-10, appendix c, component data, specialized software, methodology, accuracy, challenge, exhibit c-9, page 406, analysis, excel">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-create-a-survival-vs-age-curve-using-ms-excel-nowlan-and-heap-methodology-explained">
    <title>How to Create a Survival vs Age Curve Using MS Excel: Nowlan and Heap Methodology Explained | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Create a Survival vs Age Curve Using MS Excel: Nowlan and Heap Methodology Explained | Oxmaint Community">
    <meta property="og:description" content="I am in the process of creating a survival vs age curve for component data, similar to Exhibit C-10 in Appendix C of the RCM report by Nowlan and Heap. Instead of relying on specialized software, I am attempting to replicate the process using MS Excel by following the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-create-a-survival-vs-age-curve-using-ms-excel-nowlan-and-heap-methodology-explained">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Create a Survival vs Age Curve Using MS Excel: Nowlan and Heap Methodology Explained | Oxmaint Community">
    <meta name="twitter:description" content="I am in the process of creating a survival vs age curve for component data, similar to Exhibit C-10 in Appendix C of the RCM report by Nowlan and Heap. Instead of relying on specialized software, I am attempting to replicate the process using MS Excel by following the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-create-a-survival-vs-age-curve-using-ms-excel-nowlan-and-heap-methodology-explained"
      },
      "headline": "How to Create a Survival vs Age Curve Using MS Excel: Nowlan and Heap Methodology Explained",
      "description": "I am in the process of creating a survival vs age curve for component data, similar to Exhibit C-10 in Appendix C of the RCM report by Nowlan and Heap. Instead of relying on specialized software, I am attempting to replicate the process using MS Excel by following the",
      "author": {
        "@type": "Person",
        "name": "Matthew McLeod"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-18",
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
                <h1 class="text-white">How to Create a Survival vs Age Curve Using MS Excel: Nowlan and Heap Methodology Explained</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Matthew McLeod</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3079</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">47</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am in the process of creating a "survival" vs "age" curve for component data, similar to Exhibit C-10 in Appendix C of the RCM report by Nowlan & Heap. Instead of relying on specialized software, I am attempting to replicate the process using MS Excel by following the methodology outlined in the report. While trying to replicate their example to ensure accuracy in my own analysis, I encountered a challenge in transitioning from Exhibit C-9 (which I successfully replicated) to Exhibit C-10 (which I struggled to replicate). These specific steps are discussed on page 406 of the appendix. Although my Excel file is currently disorganized, I am working on cleaning it up before sharing. If anyone can recommend a detailed resource explaining these steps further, or if you have experience with a similar analysis and are willing to provide guidance, please let me know. Thank you, Matt.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Matt, I have attached a spreadsheet containing an example of a fictitious accelerated life test that may be beneficial to you. I often use this in my engineering classes to illustrate how to analyze the resulting data and create reliability functions such as R(t), f(t), F(t), h(t), and mean life for each interval. Please take note that columns J and K display the same values for the function h(t), but are calculated differently (column K based on the Nowlan and Heap RCM report). Pay attention to the R(t) curve, as it seems to be of particular interest to you. If you have any questions, feel free to reach out. Regards, Attachment: Life_test.xls (57 KB, 1 version)</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Betty Young</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the example provided, a total of 300 electric switches were tested until all eventually failed. A significant portion of the switches experienced failure early on in the testing process, known as "infant mortality". This common occurrence demonstrates the importance of rigorous testing procedures in identifying and addressing faults in electrical components.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bob Smith</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you so much for your assistance, Rui. I will carefully review your response over the weekend. Appreciatively, Matt.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Hannah Stone</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my book, I have illustrated the N&H failure patterns using dummy data on pages 47-53 of Appendix 3-1. Due to my frequent travels, I may not be able to promptly address comments or posts. I apologize for any inconvenience this may cause.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Olivia Brown</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hi Matt, I remembered discussing the various exhibits and consolidating all the data into one place. I believe that is what I have done in the spreadsheet I am sharing with you. I created this spreadsheet a while ago for training purposes. Please let me know if it meets your requirements. The graphs included are specific to the training I conduct, so don't focus too much on them. I will review the appendix again tonight and provide feedback on both the appendix and the spreadsheet. I trust everything is going well on your end. Attachment: actuarial analysis spreadsheet (38 KB, 1 version).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Marcus Woods</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>When analyzing the example provided in the attached spreadsheet, it is important to note the presence of the "bathtub curve" function h(t). This well-known curve exhibits early failures, random failures, and wear out failures over time, as illustrated in the accompanying graph. Increasing the number of tested units would result in a smoother h(t) curve. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mason Rogers</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear Rui, attached for your review is an important document that provides an analysis of the figures presented in the previous spreadsheet. This document specifically discusses the performance of a Pratt & Whitney 7T8D-7 engine on a Boeing 737. It is crucial to note that this analysis pertains to the overall performance of the engine and is not focused on a specific failure mode within a group of engines. Please find the attachment "Actuarial_analysis.pdf" for further details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Andrew Clark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear Sirs, 

I want to express my gratitude for your assistance. Upon reviewing the data you provided, I realized that my confusion stemmed from a misunderstanding of the terminology. I now see that the survival curve can be easily generated using the information in Exhibit C-7 on page 401, specifically columns (1) "age interval" and (5) "cumulative probability". I had previously believed that more complex steps were involved, but after observing the sheets from Rui and Daryl, everything became clear in a sudden moment of insight. I have attached my version of the charts from Exhibit C-9 (Age-Reliability) and C-10 (Age-Probability of Survival) for your reference. 

Thank you once again for your help.

Sincerely,
Matt

Attachment: Actuarial_Analysis.xls (53 KB) - Version 1</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Helen Diaz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Daryl, for providing the section of the document sourced from Nowlan and Heap. Your work is greatly appreciated (it must be warm in your area...) Warm regards and keep up the good work!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Liam Foster</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is the Nowlan and Heap methodology for creating a survival vs age curve?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Nowlan and Heap methodology, as outlined in their RCM report, involves analyzing component data to create a survival vs age curve. This method is commonly used in reliability-centered maintenance (RCM) practices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I replicate Exhibit C-10 from the Nowlan and Heap report using Microsoft Excel?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Replicating Exhibit C-10 in MS Excel may require following the specific steps outlined in the report. It's important to ensure accuracy in transitioning from earlier exhibits like C-9 to successfully create the survival vs age curve.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Where can I find detailed resources or guidance on creating a survival vs age curve in Excel based on Nowlan and Heap's methodology?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To find detailed resources or guidance on replicating Exhibit C-10 from the Nowlan and Heap report in Excel, you may consider searching online for related articles, tutorials, or forums where others have shared their experiences with similar analyses.</p>
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

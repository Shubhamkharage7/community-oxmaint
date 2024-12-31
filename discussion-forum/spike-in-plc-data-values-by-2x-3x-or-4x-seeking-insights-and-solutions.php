
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I collaborate closely with the Maintenance/Engineering department in a food and beverage production setting, focusing on PLCs and their functionalities. Currently, we are facing a perplexing issue that our Maintenance manager is unable to pinpoint. I am reaching out for insights and suggestions to resolve this matter. Heres some">
    <meta name="keywords" content="plc data values, spike in data values, maintenance/engineering collaboration, food and beverage production, packaging equipment, streamsheets data processing, trending tools development, reporting tools development, equipment operation statuses, finished goods production rate, total finished goods produced">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/spike-in-plc-data-values-by-2x-3x-or-4x-seeking-insights-and-solutions">
    <title>Spike in PLC data values by 2x, 3x, or 4x: Seeking insights and solutions | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Spike in PLC data values by 2x, 3x, or 4x: Seeking insights and solutions | Oxmaint Community">
    <meta property="og:description" content="I collaborate closely with the Maintenance/Engineering department in a food and beverage production setting, focusing on PLCs and their functionalities. Currently, we are facing a perplexing issue that our Maintenance manager is unable to pinpoint. I am reaching out for insights and suggestions to resolve this matter. Heres some">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/spike-in-plc-data-values-by-2x-3x-or-4x-seeking-insights-and-solutions">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Spike in PLC data values by 2x, 3x, or 4x: Seeking insights and solutions | Oxmaint Community">
    <meta name="twitter:description" content="I collaborate closely with the Maintenance/Engineering department in a food and beverage production setting, focusing on PLCs and their functionalities. Currently, we are facing a perplexing issue that our Maintenance manager is unable to pinpoint. I am reaching out for insights and suggestions to resolve this matter. Heres some">
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
        "@id": "https://community.oxmaint.com/discussion-forum/spike-in-plc-data-values-by-2x-3x-or-4x-seeking-insights-and-solutions"
      },
      "headline": "Spike in PLC data values by 2x, 3x, or 4x: Seeking insights and solutions",
      "description": "I collaborate closely with the Maintenance/Engineering department in a food and beverage production setting, focusing on PLCs and their functionalities. Currently, we are facing a perplexing issue that our Maintenance manager is unable to pinpoint. I am reaching out for insights and suggestions to resolve this matter. Heres some",
      "author": {
        "@type": "Person",
        "name": "BDKPLCASAP"
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
                <h1 class="text-white">Spike in PLC data values by 2x, 3x, or 4x: Seeking insights and solutions</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>BDKPLCASAP</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">346</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">235</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I collaborate closely with the Maintenance/Engineering department in a food and beverage production setting, focusing on PLCs and their functionalities. Currently, we are facing a perplexing issue that our Maintenance manager is unable to pinpoint. I am reaching out for insights and suggestions to resolve this matter.

Here's some background information: Click PLCs are utilized across various packaging equipment to manage data processing. The data is transmitted to Streamsheets, where I am developing trending and reporting tools. Primarily, the data involves "TRUE/FALSE" statuses of equipment operation, with additional calculations for finished goods production rate (per hour) and total finished goods produced. Data is collected every 500ms, with values displayed in a table.

The problem arises when, at irregular intervals (approximately every 10-30 seconds), the production rate and total produced values spike to 2x, 3x, or 4x their actual values before reverting to the correct numbers. These spikes always occur in multiples of the correct value and often in clusters. The most common deviations are 2x, followed by 4x. Despite various attempts to troubleshoot by adjusting data reporting timing, the errors are only seen in Streamsheets and not in the PLC programming software.

We have observed that the discrepancies only affect the active production shift, while the values for the inactive shift remain unaffected. The issue persists without a clear explanation, and we welcome any suggestions on why these spikes occur and how to address them effectively. Your insights and advice would be greatly appreciated. Thank you. -BDKPLCASAP</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Just experienced a rare 5x event after not seeing one all day.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BDKPLCASAP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It can be quite challenging to diagnose issues without the help of a troubleshooting tool. With the right program, you can easily identify and resolve any issues that may arise.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>idiotsecant</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A possible issue could be that the data scraping process from your PLC may interrupt the calculation halfway through. The PLC always provides a consistent value because it completes the calculation before reporting it. To resolve this, consider performing the calculation in a different register and then transferring it to the register accessed by the reporting system. This adjustment could potentially improve outcomes. Try this method to see if it resolves the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF suggested that the issue could be caused by the data scraping process getting interrupted mid-calculation. The PLC will always return the same value because it completes the calculation before reporting. To address this issue, try storing the calculation in a separate register before transferring it to the reporting register. Test this solution to see if it resolves the issue. Additionally, consider adjusting the reporting rate of the PLC to potentially reduce the likelihood of calculation errors. It is possible that slowing down the reporting rate could help mitigate the issue, but further testing is needed to confirm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BDKPLCASAP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>BDKPLCASAP mentioned that they will give it a shot and appreciate the suggestion. If we adjust the reporting rate of the PLC, would it affect the occurrence of this issue? Slowing down the reporting frequency could potentially reduce the chance of calculation errors. However, it is important to consider the synchronization of messages as they occur asynchronously to the PLC scan. This issue may arise when the PLC tag changes during the calculation, possibly due to handling a roll over or intermediate value. To address this, it is recommended to modify the PLC to provide a final value within a single computational block for better accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In the case of data scraping from your PLC, it's possible that the calculations are getting interrupted halfway through. The PLC does not update its reported value until the calculation is complete. One solution to try is to perform the calculation in a separate register and then transfer the result to the register read by the reporting system. This may help prevent discrepancies in the reported values. Consider implementing the following in your STL code: 
L VariableThatWillBeReadBySCADA
L ConversionFactor 
*R 
T VariableThatWillBeReadBySCADA</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>BDKPLCASAP stated their intention to explore a potential solution to their issue. They questioned whether adjusting the reporting rate of the PLC would impact the occurrence of calculation errors. While they believed that slowing down the reporting rate could reduce the likelihood of errors, they acknowledged their limited expertise in the matter.

As a new programmer overseeing the development of an HMI for a food factory's forming line, the individual shared a personal experience. They explained how they incorporated multiple code rungs into the PLC to update an integer tag read by the HMI for displaying line status. Despite the assumption that the "last rung wins" in determining the final value of the tag, the individual encountered discrepancies in the status indicator's display during line operation.

Reflecting on this experience, the individual emphasized the importance of finalizing data before transmitting it to other systems or users. Drawing an analogy to sandwich preparation in a café, they highlighted the need to complete tasks before presenting the end product to avoid misunderstandings or errors.

Regarding the query about adjusting the PLC data read rate, the individual suggested that reducing the frequency of data retrieval could potentially lessen the occurrence of errors. However, they underscored the significance of addressing the root problem within the PLC system for a more effective resolution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF suggests that by decreasing the speed at which data is read from the PLC, you will decrease the likelihood of receiving incorrect data. Essentially, reducing the rate of data reading by half will cut the number of potential errors in half as well. In simpler terms, this means you will also reduce the amount of correct data received. It is advisable to buffer data to be transmitted asynchronously as a best practice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you performing computations as individual operations or as a series of mathematical calculations? If it's a series, are the results of each step stored in the same tag consistently? When I perform multiple mathematical operations, I make sure to store intermediate results in temporary tags, only saving the final computation in the designated tag. The same approach is taken for BOOLEAN tags that begin with XIC and are repeated as OTE in subsequent rungs, often spanning multiple steps.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>I_Automation</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Furthermore, this issue can also occur in specific communication protocols such as Profibus, which include dedicated functions for retrieving "consistent data". This is due to the potential for half of the bytes in a word to be altered during the reading process, resulting in the transmission of nonsensical information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ASF pondered the complexity of their program, with numerous rungs and intricate AOIs, questioning the likelihood of errors occurring daily. Upon starting the line, they noticed the status indicator flashing with incorrect values, much like a lit Christmas tree. The frequency of the HMI catching tags in the wrong place was astonishing.

ASF likened the situation to a chef preparing a sandwich, emphasizing the importance of timing in PLC programming. They highlighted the need to focus on when events occur rather than just what happens.

In response to a query about spiking values in a process, users discussed potential reasons for the erratic behavior. They suggested considering how quantities and rates are calculated, the involvement of FIFO, and the possibility of batch production. To unravel the mystery, they recommended analyzing the production process and sharing code or flowcharts for further examination. Separating intermediate calculations from final results in the PLC was proposed as a potential solution to the issues at hand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. Why are the production rate and total produced values spiking to 2x, 3x, or 4x their actual values intermittently?</h4>
<p class='text-muted'><strong>Answer:</strong> - The spikes occur at irregular intervals, approximately every 10-30 seconds, in multiples of the correct value and often in clusters. Despite troubleshooting efforts, the cause remains unidentified.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the impact of these spikes on the production process?</h4>
<p class='text-muted'><strong>Answer:</strong> - The discrepancies only affect the active production shift, while the values for the inactive shift remain unaffected. Understanding the impact these spikes have on operations is crucial for mitigation strategies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can the discrepancies be resolved effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> - Suggestions are welcomed on why these spikes occur and how to address them, particularly in the context of data reporting to Streamsheets. Insights and advice on effective solutions would be greatly beneficial.</p>
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

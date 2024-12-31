
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am working with a DINT array containing 99 entries. I am looking for a way to assign values to each array element based on the number selected on the HMI. For example, if the operator selects ID 15 and enters a length of 50, the HMI">
    <meta name="keywords" content="dint array, hmi input, assign values, operator selection, array element, id selection, write values, hmi interaction, array manipulation, control system, plc programming, data input, user interface, automation system, input handling, control interface">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-assign-values-to-dint-array-based-on-hmi-input">
    <title>How to Assign Values to DINT Array Based on HMI Input | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Assign Values to DINT Array Based on HMI Input | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am working with a DINT array containing 99 entries. I am looking for a way to assign values to each array element based on the number selected on the HMI. For example, if the operator selects ID 15 and enters a length of 50, the HMI">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-assign-values-to-dint-array-based-on-hmi-input">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Assign Values to DINT Array Based on HMI Input | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am working with a DINT array containing 99 entries. I am looking for a way to assign values to each array element based on the number selected on the HMI. For example, if the operator selects ID 15 and enters a length of 50, the HMI">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-assign-values-to-dint-array-based-on-hmi-input"
      },
      "headline": "How to Assign Values to DINT Array Based on HMI Input",
      "description": "Hello everyone, I am working with a DINT array containing 99 entries. I am looking for a way to assign values to each array element based on the number selected on the HMI. For example, if the operator selects ID 15 and enters a length of 50, the HMI",
      "author": {
        "@type": "Person",
        "name": "JJG0701"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-06",
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
                <h1 class="text-white">How to Assign Values to DINT Array Based on HMI Input</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>JJG0701</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">103</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">287</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am working with a DINT array containing 99 entries. I am looking for a way to assign values to each array element based on the number selected on the HMI. For example, if the operator selects ID 15 and enters a length of 50, the HMI will write 50 to DINT[15]. Is there a way to achieve this functionality?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If your Human Machine Interface (HMI) allows for indirect addressing, you can perform all actions within it. The handling of this feature may vary depending on the HMI environment, with the ID typically serving as an internal placeholder within the HMI system. For instance, the "Length" box could be represented as ExampleDINT[Placeholder]. 

If your HMI does not support indirect addressing, you can achieve the same functionalities within the Programmable Logic Controller (PLC) using similar methods. However, you may need to incorporate additional logic to complete the task. This could involve creating a buffer tag for the number "50" and implementing a mechanism to detect changes in order to trigger the writing of the value "15." Alternatively, you could add an execute button on the screen for manual input. Utilize your ID number to copy the data to the correct index and monitor for index changes to update the displayed number effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JJG0701 asked if there is a way to assign values to a DINT array with 99 entries based on the numbers selected on the HMI. For example, if the operator selects and enters ID 15 and inputs 50 as the Length, the HMI will write 50 to DINT[15]. To write a single value to a specific array index, a simple mov operation can be used. If the intention is to write different values to multiple array indices starting at 15, a FAL instruction should be utilized.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I assign values to a DINT array based on HMI input in a PLC system?
- To assign values to a DINT array based on HMI input, you can use the HMI to select an index (ID) and enter a value, which the PLC will then write into the corresponding element of the DINT array.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the process for mapping HMI input to specific elements of a DINT array in a PLC program?</h4>
<p class='text-muted'><strong>Answer:</strong> - The process involves capturing the selected index (ID) and value input from the HMI interface, then using this information to write the value into the corresponding element of the DINT array in the PLC program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Can you provide an example code snippet or logic for assigning values to a DINT array based on HMI input?</h4>
<p class='text-muted'><strong>Answer:</strong> - Certainly! Here's a basic example of how you can achieve this functionality:
  - Read the selected index (ID) and value input from the HMI.
  - Use the selected index to access the corresponding element in the DINT array.
  - Write the entered value into the selected element of the DINT array.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any considerations or best practices to keep in mind when implementing this functionality in a PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is important to validate the input values from the HMI to ensure they fall within the acceptable range for the array indices. Additionally, error handling mechanisms should be in place to handle any unexpected input or communication issues between the HMI</p>
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

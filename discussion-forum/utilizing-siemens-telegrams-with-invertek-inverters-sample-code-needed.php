
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In my latest project, I have successfully integrated Invertek inverters into my hardware configuration in TIA. These inverters provide 4 input words and 4 output words for monitoring and control. By referring to the Invertek Profinet module manual, I have gained insight into the functionality of each word/bit such">
    <meta name="keywords" content="siemens telegrams, invertek inverters, sample code, tia configuration, invertek profinet module, input words, output words, monitoring and control, start/stop functionality, frequency adjustments, writing to words">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/utilizing-siemens-telegrams-with-invertek-inverters-sample-code-needed">
    <title>Utilizing Siemens Telegrams with Invertek Inverters: Sample Code Needed | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Utilizing Siemens Telegrams with Invertek Inverters: Sample Code Needed | Oxmaint Community">
    <meta property="og:description" content="In my latest project, I have successfully integrated Invertek inverters into my hardware configuration in TIA. These inverters provide 4 input words and 4 output words for monitoring and control. By referring to the Invertek Profinet module manual, I have gained insight into the functionality of each word/bit such">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/utilizing-siemens-telegrams-with-invertek-inverters-sample-code-needed">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Utilizing Siemens Telegrams with Invertek Inverters: Sample Code Needed | Oxmaint Community">
    <meta name="twitter:description" content="In my latest project, I have successfully integrated Invertek inverters into my hardware configuration in TIA. These inverters provide 4 input words and 4 output words for monitoring and control. By referring to the Invertek Profinet module manual, I have gained insight into the functionality of each word/bit such">
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
        "@id": "https://community.oxmaint.com/discussion-forum/utilizing-siemens-telegrams-with-invertek-inverters-sample-code-needed"
      },
      "headline": "Utilizing Siemens Telegrams with Invertek Inverters: Sample Code Needed",
      "description": "In my latest project, I have successfully integrated Invertek inverters into my hardware configuration in TIA. These inverters provide 4 input words and 4 output words for monitoring and control. By referring to the Invertek Profinet module manual, I have gained insight into the functionality of each word/bit such",
      "author": {
        "@type": "Person",
        "name": "rtgibson"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-08",
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
                <h1 class="text-white">Utilizing Siemens Telegrams with Invertek Inverters: Sample Code Needed</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rtgibson</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>9 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">467</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">162</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In my latest project, I have successfully integrated Invertek inverters into my hardware configuration in TIA. These inverters provide 4 input words and 4 output words for monitoring and control. By referring to the Invertek Profinet module manual, I have gained insight into the functionality of each word/bit such as start/stop and frequency adjustments. While I am able to write directly to these words, I am aware that utilizing telegrams may be a better approach. If anyone has experience with this and can provide sample code, I would greatly appreciate it. Thank you in advance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In essence, these words represent the telegram, providing a clear definition of the data. Profinet follows certain standard definitions, which Siemens utilizes and adds their own to. Different manufacturers may also create their own unique definitions. By creating a User Defined Tag (UDT) to organize the data for input and output, you can easily access all the information and integrate it into your code. This allows you to efficiently utilize the entire data structure in your programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to efficiently manage data, I recommend creating a User-Defined Type (UDT) that differentiates between incoming and outgoing information. By establishing a tag that specifies the initial input or output data point (such as I40.0 or Q32.0), you can easily access and manipulate the entire data structure within your programming. Additionally, I highly recommend implementing a STRUCT named "STATUS" and "CONTROL" for seamless integration with Simotion and various drives. Feel free to customize these names to better suit your preferences, such as "STATUS_DRV1" and "CONTROL_DRV1" or any other preferred designation. This approach enhances organization and facilitates smooth operations within your programming environment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An example of User-Defined Types (UDTs) and the resulting Tag table reveals a crucial limitation: it is not possible to define a UDT with 8 boolean data types followed by a byte without the byte occupying the next available address. This is why bit numbers are utilized for assigning fault codes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>..

In today's fast-paced society, it is crucial to prioritize self-care in order to maintain mental and physical well-being. Taking time to focus on yourself can lead to increased happiness and decreased stress levels. Implementing a self-care routine that includes activities like exercise, meditation, and quality sleep can help improve overall quality of life. Remember, prioritizing self-care is not selfish, it is necessary for achieving a healthy work-life balance. So take the time to invest in yourself and watch as your overall well-being flourishes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, everyone! After setting up tags/UDTs, there is no need for MOVE or READ/WRITE commands. You can simply write to the tags. It's that simple!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rtgibson</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Certainly, affirmative.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After conducting further testing on the Programmable Logic Controller (PLC), I encountered a warning message regarding the use of non-existing inputs or outputs on the configured hardware. This warning specifically pertained to the addresses assigned to my Invertek data. My drives were not showing any I/O addresses initially, but I was able to view the assigned addresses by right-clicking on the input/output word in the treeview and selecting "properties." If you are facing a similar issue, it is important to ensure that the addresses are correctly assigned to avoid this warning message.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rtgibson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was surprised to find that the writetoinvertek addresses are I addresses instead of Q addresses, although this may not directly answer your question.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>L D[AR2P#0.0]</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe that might have been a contributing factor as we finally resolved the issue towards the end of the workday. I must also admit to a mistake of not properly assigning the network for these devices to the PLC (programmable logic controller) during the project implementation phase, which caused it to compile without any problems. I appreciate your assistance in sorting this out.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rtgibson</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. What are Siemens Telegrams and how can they be utilized with Invertek Inverters?
- Siemens Telegrams are a method of communication used in industrial automation to exchange data between devices. When integrated with Invertek inverters, they can streamline the monitoring and control process by enabling efficient data exchange through structured messages.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why is using telegrams considered a better approach than writing directly to input/output words in Invertek Inverters?</h4>
<p class='text-muted'><strong>Answer:</strong> - Utilizing telegrams offers advantages such as improved data organization, better error handling, and enhanced communication efficiency compared to writing directly to individual words. It allows for a more structured and standardized way of exchanging information between devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Where can I find sample code for implementing Siemens Telegrams with Invertek Inverters in TIA?</h4>
<p class='text-muted'><strong>Answer:</strong> - While sample code specific to your configuration may not be readily available, you can refer to Siemens documentation, forums, or online resources for guidance on setting up and programming Siemens Telegrams with Invertek Inverters in TIA. Collaborating with experts or reaching out to the community for assistance can also be helpful in obtaining sample code or best practices.</p>
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

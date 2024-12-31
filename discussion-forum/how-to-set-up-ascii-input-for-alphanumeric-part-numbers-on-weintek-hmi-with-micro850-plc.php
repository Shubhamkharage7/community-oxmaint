
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I received an email from a customer seeking assistance with setting up an ASCII input on the Weintek HMI to identify and save process data by part number. The customer is using a Micro850 PLC and wants to display alphanumeric part numbers. They have tried looking for solutions in">
    <meta name="keywords" content="ascii input, alphanumeric part numbers, weintek hmi, micro850 plc, process data, save part numbers, ascii object, variables as strings, arrays of strings, ccw, easybuilderpro, data type limitations, size limitations">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-set-up-ascii-input-for-alphanumeric-part-numbers-on-weintek-hmi-with-micro850-plc">
    <title>How to Set Up ASCII Input for Alphanumeric Part Numbers on Weintek HMI with Micro850 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Set Up ASCII Input for Alphanumeric Part Numbers on Weintek HMI with Micro850 PLC | Oxmaint Community">
    <meta property="og:description" content="I received an email from a customer seeking assistance with setting up an ASCII input on the Weintek HMI to identify and save process data by part number. The customer is using a Micro850 PLC and wants to display alphanumeric part numbers. They have tried looking for solutions in">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-set-up-ascii-input-for-alphanumeric-part-numbers-on-weintek-hmi-with-micro850-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Set Up ASCII Input for Alphanumeric Part Numbers on Weintek HMI with Micro850 PLC | Oxmaint Community">
    <meta name="twitter:description" content="I received an email from a customer seeking assistance with setting up an ASCII input on the Weintek HMI to identify and save process data by part number. The customer is using a Micro850 PLC and wants to display alphanumeric part numbers. They have tried looking for solutions in">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-set-up-ascii-input-for-alphanumeric-part-numbers-on-weintek-hmi-with-micro850-plc"
      },
      "headline": "How to Set Up ASCII Input for Alphanumeric Part Numbers on Weintek HMI with Micro850 PLC",
      "description": "I received an email from a customer seeking assistance with setting up an ASCII input on the Weintek HMI to identify and save process data by part number. The customer is using a Micro850 PLC and wants to display alphanumeric part numbers. They have tried looking for solutions in",
      "author": {
        "@type": "Person",
        "name": "geniusintraining"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-24",
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
                <h1 class="text-white">How to Set Up ASCII Input for Alphanumeric Part Numbers on Weintek HMI with Micro850 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">5173</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">141</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I received an email from a customer seeking assistance with setting up an ASCII input on the Weintek HMI to identify and save process data by part number. The customer is using a Micro850 PLC and wants to display alphanumeric part numbers. They have tried looking for solutions in manuals but haven't found much help. The only input/output object they found is the ASCII object. They have experimented with setting up variables as strings and arrays of strings in CCW and EASYBuilderPro, but encountered limitations with data type and size. The customer is unsure if setting up an array of characters for each string is the correct approach to achieve an ASCII input. Any assistance or guidance on this matter would be greatly appreciated. Thank you for your help. - Mark</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>These Weintek HMIs are equipped with ample memory capacity. To streamline the process, consider storing strings in a reference table on the HMI and transmitting them to the PLC as numbers using a consistent part number. On the AB side, creating an array for the "String" is essential. On the HMI side, your client should set up an ASCII input box to input data into memory. This input box can be used to initiate a macro for transferring the part to the PLC as shown in the code snippet below: 

macro_command main()
char recchar[60]="" 
GetData(recchar[0], "Local HMI", LW, 0, 10)
SetData(recchar[0], "Allen-Bradley EIP", "LOG_FILE[0]", 10)
end macro_command

Depending on the number of parts, your client can utilize a drop-down combo box for selecting parts, which will be converted into numbers before being sent to the PLC. This method is more efficient and space-saving. Upon selection, the part can be displayed as text on the HMI.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jape</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate the valuable information provided, and I will be sure to share it with others.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered a similar issue and found a solution by counting the characters in the data and then copying them to the desired length. In a programmable logic controller (PLC), you can achieve this by using the following code snippet:
```
VAR
    vari: INT;
    myString: ARRAY[0..255] OF INT;
    charCount: INT := 0;
END_VAR

FOR i := 0 TO 255 DO
    IF myString[i] = 0 THEN
        charCount := i;
        EXIT;
    END_IF
END_FOR

(* charCount now stores the length of the string *)

Simply copy the length that you require but are currently not receiving. I hope this explanation helps.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tolborg</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I set up ASCII input for alphanumeric part numbers on a Weintek HMI with a Micro850 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To set up ASCII input for alphanumeric part numbers, you can utilize the ASCII object available in Weintek HMI. Experiment with setting up variables as strings and arrays of strings in CCW and EASYBuilderPro to overcome limitations with data type and size.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What should I do if I am having trouble finding solutions in the manuals for setting up ASCII input on a Weintek HMI with a Micro850 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: If you are struggling to find solutions in the manuals, consider reaching out for assistance through forums or contacting the Weintek support team for guidance on setting up ASCII input for alphanumeric part numbers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is setting up an array of characters for each string the correct approach to achieve an ASCII input for alphanumeric part numbers?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, setting up an array of characters for each string can be a suitable approach to achieve an ASCII input for displaying alphanumeric part numbers on a Weintek HMI with a Micro850 PLC. Experiment with this method and adjust as needed based on your specific requirements.</p>
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

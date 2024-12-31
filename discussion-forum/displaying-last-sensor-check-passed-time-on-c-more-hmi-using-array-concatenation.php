
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I need assistance with my CompactLogix processor for my robot cell. Operators are required to place a faulty part into the machine every 200 cycles to ensure the quality check cameras are functioning properly. I want to display on the C-More HMI when the last sensor check">
    <meta name="keywords" content="displaying last sensor check passed time, c-more hmi, array concatenation, compactlogix processor, robot cell, quality check cameras, plc automation, gsv, date and time values, array format, text concatenation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/displaying-last-sensor-check-passed-time-on-c-more-hmi-using-array-concatenation">
    <title>Displaying Last Sensor Check Passed Time on C-More HMI Using Array Concatenation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Displaying Last Sensor Check Passed Time on C-More HMI Using Array Concatenation | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I need assistance with my CompactLogix processor for my robot cell. Operators are required to place a faulty part into the machine every 200 cycles to ensure the quality check cameras are functioning properly. I want to display on the C-More HMI when the last sensor check">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/displaying-last-sensor-check-passed-time-on-c-more-hmi-using-array-concatenation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Displaying Last Sensor Check Passed Time on C-More HMI Using Array Concatenation | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I need assistance with my CompactLogix processor for my robot cell. Operators are required to place a faulty part into the machine every 200 cycles to ensure the quality check cameras are functioning properly. I want to display on the C-More HMI when the last sensor check">
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
        "@id": "https://community.oxmaint.com/discussion-forum/displaying-last-sensor-check-passed-time-on-c-more-hmi-using-array-concatenation"
      },
      "headline": "Displaying Last Sensor Check Passed Time on C-More HMI Using Array Concatenation",
      "description": "Hello everyone, I need assistance with my CompactLogix processor for my robot cell. Operators are required to place a faulty part into the machine every 200 cycles to ensure the quality check cameras are functioning properly. I want to display on the C-More HMI when the last sensor check",
      "author": {
        "@type": "Person",
        "name": "nutcase511"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-15",
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
                <h1 class="text-white">Displaying Last Sensor Check Passed Time on C-More HMI Using Array Concatenation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>nutcase511</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">487</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">375</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I need assistance with my CompactLogix processor for my robot cell. Operators are required to place a faulty part into the machine every 200 cycles to ensure the quality check cameras are functioning properly. I want to display on the C-More HMI when the last sensor check passed, with the time being updated by the PLC automatically.

I am currently using a GSV to store the date and time values in an array format. How can I concatenate these array elements with text to display the last sensor check passed time on the HMI? I am looking for a solution that doesn't involve multiple individual text boxes for each date and time component. Any suggestions would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective method is to create the complete text within the PLC and utilize a dynamic text object for its presentation. This approach can streamline the efficiency of text generation and display in the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A potential solution is to create the complete text within the Programmable Logic Controller (PLC) and then utilize a dynamic text object to showcase it. I was considering this approach as well, but I am unsure about the implementation process. Are there any suggestions, examples, or screenshots available to guide me through this task?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nutcase511</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider using the CONCAT instruction to join strings together efficiently. To optimize memory usage, you can define smaller custom STRING types. Convert each time array value to a STRING using DTOS and incorporate constant values like slash and colon. Finally, merge all these elements into a single string.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I successfully managed to make it work, although the process was a bit rudimentary. In case others are facing a similar issue, I utilized DTOS to transfer values to a string (such as DAY, MONTH, YEAR, etc.) individually. Additionally, I created separate strings for characters like "Slash", "Space", "At", and so on. By using about 10 lines of code with CONCAT, I concatenated these strings together, generating a longer string each time. It may take some time to build, but you can observe the string length increasing gradually. This particular date/time string required the creation of 11 temporary strings before reaching the final result.

Once the desired string is obtained, navigate to the HMI program and ensure to add it as a tag in the tag database, setting it as 82-character ASCII. The Dynamic Text box should be activated by a constantly active element, like "SYSTEM_BIT_ALWAYS_ON". Although the process may seem perplexing, it effectively achieves the goal. Furthermore, the displayed format is in military time, rather than AM/PM. It would be beneficial if Allen-Bradley provided some pre-written code to capture date/time values and seamlessly transfer them to an HMI for presentation.

Displayed on the screen is the following:</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nutcase511</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>nutcase511 mentioned that they were able to get it working, albeit in a slightly crude manner. In case others encounter a similar issue, they used DTOS to transfer values to a string (such as DAY, MONTH, YEAR, etc) for each item. Additional strings were created for characters like "Slash," "Space," and "At." Approximately 10 lines of code were used to utilize CONCAT and merge the strings together, with the output going to a new string each time. It may take some time to assemble, but you can observe the string length increasing gradually. In this case, a total of 11 temporary strings were utilized to construct the final date/time string.

Once the desired string is obtained, it should be added as a tag in the HMI program by accessing the tag database, setting it as an 82-character ASCII type, and ensuring that the Dynamic Text box is activated by a constant element, like "SYSTEM_BIT_ALWAYS_ON". Although the process may be perplexing, it does yield results. It is worth noting that the displayed time format is in military time, rather than AM/PM.

Suggestions were also made for Allen-Bradley to offer pre-made code for capturing date/time values and easily transmitting them to an HMI for presentation.

Looking ahead, the query was posed regarding whether there is a more streamlined method for concatenating multiple strings, using fewer code rungs. Is it possible to consolidate the process, similar to Source A and Source B, by expanding to include more alphabet letters?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nutcase511</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>As far as I know, when adding pieces of code in onerungif, each one requires a separate CONCAT instruction. While you could create an AOI to streamline the process, you would still need to put in the same amount of effort. With newer processors, you have the option to use string literals instead of tags for static text. A user on a forum suggested that Allen-Bradley should provide pre-written code for capturing and displaying date/time values on an HMI. Additionally, it would be helpful if Automation Direct allowed users to embed tags in static text objects similar to multi-state text indicators. Another method to consider could be using an indicator set to a single state and embedding timestamp tags within it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@nutcase511, why does it take time to complete the construction process? With the right technique, you should be able to finish it in just one scan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dmroeder</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@nutcase511, why is there a delay in the building process? It should be achievable in just one scan. It did take some time to program it, but I am confident that the code runs in just one scan. I had hoped that over the past 30+ years of AllenBradley working on PLCs, there would have been a shortcut for programming such a simple instruction. I am sure I am not alone in wanting to log the date and time of an issue for future reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>nutcase511</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I display the last sensor check passed time on a C-More HMI using array concatenation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To display the last sensor check passed time on a C-More HMI using array concatenation, you can concatenate the array elements containing the date and time values with text to create a single string that represents the last sensor check passed time.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is it possible to update the last sensor check passed time on the HMI automatically using a PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, you can update the last sensor check passed time on the HMI automatically using a PLC by storing the date and time values in an array format and then concatenating them with text to display on the HMI.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I avoid using multiple individual text boxes for each date and time component when displaying the last sensor check passed time on a C-More HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can avoid using multiple individual text boxes by concatenating the array elements containing the date and time values with text to create a single string that represents the last sensor check passed time on the HMI. This approach allows you to display the information in a more organized and concise manner.</p>
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

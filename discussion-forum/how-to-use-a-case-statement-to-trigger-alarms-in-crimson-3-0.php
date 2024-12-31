
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am experiencing difficulties in Crimson 3.0 while trying to create a program with a case statement that references a fault word to change the state of a flag tag, which should trigger an alarm in the banner. I am unsure of how to properly configure the flag">
    <meta name="keywords" content="case statement, trigger alarms, crimson 0, program creation, flag tag, alarm configuration, fault word, setpoint value, script syntax, tutor assistance, alarm triggering, banner alarm, state change, crimson programming, alarm troubleshooting, alarm">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-use-a-case-statement-to-trigger-alarms-in-crimson-3-0">
    <title>How to Use a Case Statement to Trigger Alarms in Crimson 3.0 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Use a Case Statement to Trigger Alarms in Crimson 3.0 | Oxmaint Community">
    <meta property="og:description" content="Hello, I am experiencing difficulties in Crimson 3.0 while trying to create a program with a case statement that references a fault word to change the state of a flag tag, which should trigger an alarm in the banner. I am unsure of how to properly configure the flag">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-use-a-case-statement-to-trigger-alarms-in-crimson-3-0">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Use a Case Statement to Trigger Alarms in Crimson 3.0 | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am experiencing difficulties in Crimson 3.0 while trying to create a program with a case statement that references a fault word to change the state of a flag tag, which should trigger an alarm in the banner. I am unsure of how to properly configure the flag">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-use-a-case-statement-to-trigger-alarms-in-crimson-3-0"
      },
      "headline": "How to Use a Case Statement to Trigger Alarms in Crimson 3.0",
      "description": "Hello, I am experiencing difficulties in Crimson 3.0 while trying to create a program with a case statement that references a fault word to change the state of a flag tag, which should trigger an alarm in the banner. I am unsure of how to properly configure the flag",
      "author": {
        "@type": "Person",
        "name": "Taintd"
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
                <h1 class="text-white">How to Use a Case Statement to Trigger Alarms in Crimson 3.0</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Taintd</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>5 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">463</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">25</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am experiencing difficulties in Crimson 3.0 while trying to create a program with a case statement that references a fault word to change the state of a flag tag, which should trigger an alarm in the banner. I am unsure of how to properly configure the flag tag despite confirming that the syntax in my script is correct. When I input the corresponding value into a setpoint, no alarms are being triggered. I have sought assistance from my tutor, but unfortunately, he has not been able to provide much help with this issue.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have a copy of your red file that you can share? I usually create alarms at the tag level by referencing individual faults using bits. By assigning the word from the field device to one tag, and treating the bits as flag tags with the data source pointing to that integer tag as a bit array, I can specify the bit number for each fault. For codes, I use a multi-state object and list all the faults as states, then use an expression in the Event Name field on the alarm tab that includes the tag value. This ensures that each unique alarm is displayed in the event viewer and alarm banner, without the need for complicated expressions or programs with case statements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Could you provide a demonstration of this concept?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Taintd</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Taintd asked for an example of a common practice in system organization. Here is an instance: when setting up a system with multiple pumps, I used a structured folder and tag system for each pump, along with widgets for display. To personalize the pump names, I utilized a memory string tag named "Title" instead of generic names like "Pump 1" and "Pump 2". The end users preferred names like "West" and "East", so by changing the data source of the Title tag, I was able to easily update the names throughout the system. By nesting another Title tag within the root Title tag, I ensured consistency across tags, alarms, and widgets. While this may seem like excessive indirection, it ultimately simplifies data entry for alarms and status updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When writing integer values using memory tags in Crimson software, it may seem illogical as it requires specific values like 2, 4, 8, 16, or 32 to trigger alarms. However, by inputting a different value, such as 3, into the fault word, the corresponding fault_3 flag tag alarm can be activated. An example of utilizing bit and word alarming is demonstrated with a system containing two pumps. A structured folder and tag system is used for each pump, with a memory string tag named Title for customizable pump names like "West" and "East". By referencing this title tag throughout other tags, alarms, and widgets, changing the data source of the Title tag allows for easy customization of pump names. Despite using nested tags for indirection, this approach simplifies the entry of strings in alarms and status words.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Taintd</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Taintd mentioned that they are capable of writing integer values using a memory tag in Crimson, but they are facing difficulty as the logic behind it seems unclear. In order to trigger the correct alarm, they need to input values like 2, 4, 8, 16, or 32. However, when they input a value like 3, it does not activate the corresponding fault_3 flag tag alarm as expected.

It appears there may be confusion regarding the source and data type of the alarm. In some cases, different bit values can represent various conditions, leading to multiple alarm events simultaneously. On the other hand, a fault code typically assigns a unique integer value to a single fault condition.

In Crimson, you can set up fault codes using a multi-state format, with the fault description included in each state's Text field. By selecting event mode "Data Mismatch" and setting the value to 0, you can reference the tag's value using AsText to display the corresponding fault description in the alarm banner and list objects. This method ensures that the alarm reflects the intended information accurately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I create a program in Crimson 3.0 with a case statement to trigger alarms based on a fault word?</h4>
<p class='text-muted'><strong>Answer:</strong> - To create a program with a case statement in Crimson 3.0 to trigger alarms based on a fault word, you need to properly configure a flag tag that changes state according to the condition specified in the case statement. Ensure the syntax in your script is correct and that the flag tag is linked correctly to the alarm trigger in the banner.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why aren't alarms being triggered in Crimson 3.0 despite inputting the correct value into a setpoint?</h4>
<p class='text-muted'><strong>Answer:</strong> - If alarms are not being triggered in Crimson 3.0 despite inputting the correct value into a setpoint, there may be an issue with the configuration of the flag tag or the alarm trigger setup. Double-check the syntax in your script, verify the linkage between the flag tag and the alarm trigger, and ensure that the fault word is correctly referenced in the case statement.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps can I take to troubleshoot issues with triggering alarms using a case statement in Crimson 3.0?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are facing difficulties in triggering alarms using a case statement in Crimson 3.0, you can troubleshoot by confirming the correctness of the script syntax, checking the configuration of the flag tag, verifying the linkage to the alarm trigger, and ensuring that the fault word is properly referenced in the case statement. You may also</p>
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

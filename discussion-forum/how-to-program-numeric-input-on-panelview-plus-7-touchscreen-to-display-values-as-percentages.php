
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="At my workplace, we use a thermoformer with a PanelView Plus 7 touchscreen and a MicroLogix 1500 controller. Our oven is divided into zones with temperature ranges from 0-1500. I am looking to program the numeric input on the touchscreen to display values as percentages. Can I set it">
    <meta name="keywords" content="panelview plus 7, touchscreen programming, numeric input, display percentages, thermoformer, micrologix 1500, temperature zones, temperature ranges, programming values, touchscreen setup, percent calculation, oven control, input conversion, display">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-program-numeric-input-on-panelview-plus-7-touchscreen-to-display-values-as-percentages">
    <title>How to Program Numeric Input on PanelView Plus 7 Touchscreen to Display Values as Percentages | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Program Numeric Input on PanelView Plus 7 Touchscreen to Display Values as Percentages | Oxmaint Community">
    <meta property="og:description" content="At my workplace, we use a thermoformer with a PanelView Plus 7 touchscreen and a MicroLogix 1500 controller. Our oven is divided into zones with temperature ranges from 0-1500. I am looking to program the numeric input on the touchscreen to display values as percentages. Can I set it">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-program-numeric-input-on-panelview-plus-7-touchscreen-to-display-values-as-percentages">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Program Numeric Input on PanelView Plus 7 Touchscreen to Display Values as Percentages | Oxmaint Community">
    <meta name="twitter:description" content="At my workplace, we use a thermoformer with a PanelView Plus 7 touchscreen and a MicroLogix 1500 controller. Our oven is divided into zones with temperature ranges from 0-1500. I am looking to program the numeric input on the touchscreen to display values as percentages. Can I set it">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-program-numeric-input-on-panelview-plus-7-touchscreen-to-display-values-as-percentages"
      },
      "headline": "How to Program Numeric Input on PanelView Plus 7 Touchscreen to Display Values as Percentages",
      "description": "At my workplace, we use a thermoformer with a PanelView Plus 7 touchscreen and a MicroLogix 1500 controller. Our oven is divided into zones with temperature ranges from 0-1500. I am looking to program the numeric input on the touchscreen to display values as percentages. Can I set it",
      "author": {
        "@type": "Person",
        "name": "jscampbell210"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-19",
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
                <h1 class="text-white">How to Program Numeric Input on PanelView Plus 7 Touchscreen to Display Values as Percentages</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jscampbell210</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">393</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">183</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>At my workplace, we use a thermoformer with a PanelView Plus 7 touchscreen and a MicroLogix 1500 controller. Our oven is divided into zones with temperature ranges from 0-1500. I am looking to program the numeric input on the touchscreen to display values as percentages. Can I set it up so that, for instance, entering 750 would show as 50%? I'm unsure if this is achievable. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>At my workplace, I recently upgraded the touchscreen on our thermoformer to a PanelView Plus 7, with a Micrologix 1500 controller. The oven has different temperature zones ranging from 0 to 1500. I am interested in programming the numeric input on the screen to represent values as percentages. For instance, typing in 750 would show as 50%. Is this feasible? I believe it is. By setting a percentage setpoint on the HMI and converting it in the PLC to Engineering Units, you can adjust the values as needed for your specific application. This conversion can be done by using a simple equation like Remote SP = (HMI setpoint/100) * 750, assuming a linear correlation between percentages and degrees. Depending on your PLC, you may also utilize a scaling block or function. If using a newer Micrologix 1500, consider employing the SCP function for this purpose.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By failing to consider OP's desired scaling and instead setting them up for potential integer rounding or truncation issues, this could lead to problems. It's important to avoid these errors at all costs. It is crucial for SCP to address and mitigate any potential rounding, truncation, or overflow problems to ensure a smooth and accurate process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy pointed out potential integer rounding and truncation issues for OP, disregarding their preferred scaling. This situation is preferable to dealing with overflow. And by the way, who mentioned integers in the first place?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee questioned, "Who mentioned anything about an Integer?" It seems no one did, but isn't anyone talking about REAL? Regardless, I have corrected the error.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned that nobody has discussed REAL yet, but they have now fixed it. Click to expand to see points (iv) and (viii) below.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, drbitboy mentioned the importance of using Reals over INTs and DINTs for accuracy in math calculations. While some may find INTs sufficient, using DINTs can improve precision. By multiplying the HMI Setpoint by 750 and dividing by 100 with Reals, you can minimize rounding errors. It's essential to consider readability when choosing between DINTs and Reals for calculations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee pointed out that what may come naturally to him could be unfamiliar to others. This realization serves as a reminder that assuming one's own behaviors are standard can lead to misunderstandings and conflicts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Instead of using a float, consider multiplying it by 15 to get the desired result. This is especially useful when dealing with temperatures that are likely in whole degrees. For example, if you want to calculate 50% of 750, you can use the formula: HMI_SP = HMI_SP/100 * 750 to get 375. Have you considered programming it to input a percentage? For instance, typing in 750 would automatically be recognized as 50%. It's worth exploring the possibility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While discussing the calculation, Parky suggested multiplying the value by 15 (15.0 if a float is used). This approach eliminates the need for a float since the temperature is likely in whole degrees. For instance, if we have a percentage (%) X 15 = 750SP formula to calculate HMI_SP, assuming HMI_SP is 50, the result would be 375. The question arises whether it's feasible to program the input value as a percentage. For example, could 750 represent 50%? The possibility is uncertain. In the end, the issue is addressed with a sense of humor, and the problem is resolved. Thank you for your input.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jscampbell210</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One suggestion is to multiply the number by 15, or 15.0 if it's a float. This method may seem like using a "magic number," but it could be argued that incorporating the SCP instruction eliminates the need for additional comments to explain the code's functioning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>At first, I had to double-check to make sure I was reading it correctly! It strikes me as odd that a thermoformer allows for entering a percentage instead of a specific setpoint. Typically, the temperature for forming materials should be based on the manufacturer's recommendation. Brian, can you clarify how 50% of 1500 equals 375 degrees Celsius?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky asked Brian about where to find the value of 50% in relation to 1500 degrees Celsius. The discussion revolved around scaling 1500 degrees as 100%, making 750 degrees equivalent to 50%. RobertMEE provided an example where 750 degrees is considered 100%. The conversation between the users resembled spectators at Wimbledon, observing the back-and-forth exchange of ideas. This thread is a common occurrence in forums where calculations and discussions about scaling values take place.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was impressed by your superior math skills compared to mine - I almost thought I was losing my mind.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I wanted to make sure you were all on the lookout. It's a habit of mine - all of my numerous transmitters are calibrated to measure temperatures ranging from 0 to 750 degrees Fahrenheit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We all experience those moments of confusion, with some still clinging to the imperial system. While questioning my sanity briefly, I ultimately resorted to using a calculator for clarity. Let's embrace the metric system for a smoother experience!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can I program the numeric input on a PanelView Plus 7 touchscreen to display values as percentages?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to set up the numeric input on the touchscreen to display values as percentages.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I configure the touchscreen to display percentage values based on a temperature range?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can achieve this by setting up a formula or calculation in the programming of the touchscreen to convert the entered temperature values to percentages.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it feasible to show a value of 750 as 50% on the touchscreen interface?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can program the touchscreen to display 750 as 50% by implementing the necessary logic in the PanelView Plus 7 configuration.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What programming software or tools do I need to accomplish this task?</h4>
<p class='text-muted'><strong>Answer:</strong> - You will need the appropriate programming software for PanelView Plus 7 and knowledge of the logic or scripting required to convert temperature values to percentages for display.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Are there any specific considerations or limitations when setting up numeric input to display percentages on a PanelView Plus 7 touchscreen?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is important to consider factors such as data conversion, scaling, and user interface design to ensure accurate and user-friendly percentage display on the touchscreen.</p>
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

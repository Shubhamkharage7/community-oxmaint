
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="As a novice in Rockwell software, I have received some basic training but lack advanced knowledge. At my company, we rely on Reliable products for HVAC programming. Our current challenge involves programming a Make-up Air Unit to activate based on commands from an HMI interface. For instance, an operator">
    <meta name="keywords" content="rockwell software programming for hvac, make-up air unit programming, hvac programming with rockwell software, rockwell software tips for hvac, hmi interface commands for hvac, make-up air unit">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-program-a-make-up-air-unit-for-hvac-using-rockwell-software">
    <title>How to Program a Make-up Air Unit for HVAC Using Rockwell Software | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Program a Make-up Air Unit for HVAC Using Rockwell Software | Oxmaint Community">
    <meta property="og:description" content="As a novice in Rockwell software, I have received some basic training but lack advanced knowledge. At my company, we rely on Reliable products for HVAC programming. Our current challenge involves programming a Make-up Air Unit to activate based on commands from an HMI interface. For instance, an operator">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-program-a-make-up-air-unit-for-hvac-using-rockwell-software">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Program a Make-up Air Unit for HVAC Using Rockwell Software | Oxmaint Community">
    <meta name="twitter:description" content="As a novice in Rockwell software, I have received some basic training but lack advanced knowledge. At my company, we rely on Reliable products for HVAC programming. Our current challenge involves programming a Make-up Air Unit to activate based on commands from an HMI interface. For instance, an operator">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-program-a-make-up-air-unit-for-hvac-using-rockwell-software"
      },
      "headline": "How to Program a Make-up Air Unit for HVAC Using Rockwell Software",
      "description": "As a novice in Rockwell software, I have received some basic training but lack advanced knowledge. At my company, we rely on Reliable products for HVAC programming. Our current challenge involves programming a Make-up Air Unit to activate based on commands from an HMI interface. For instance, an operator",
      "author": {
        "@type": "Person",
        "name": "Duchx2"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-05",
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
                <h1 class="text-white">How to Program a Make-up Air Unit for HVAC Using Rockwell Software</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Duchx2</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">550</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">342</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>As a novice in Rockwell software, I have received some basic training but lack advanced knowledge. At my company, we rely on Reliable products for HVAC programming. Our current challenge involves programming a Make-up Air Unit to activate based on commands from an HMI interface. For instance, an operator may choose to start the MAU between 9 am and 2 pm on one day but restrict it to 8 am to 10 am on another day. While I am familiar with using WallClockTime, I am unsure of how to compare DINT tags from the HMI with GSV values. I have attached a sketch of the HMI for reference. Explore more about this topic at Imgur, where you can find a variety of entertaining content ranging from funny jokes to viral videos.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, Duchx2 expressed uncertainty about comparing DINT tags from the HMI with GSV values. The Rockwell Automation website offers a set of routines for handling 64-bit WallClockTime values in Logix programming. It is crucial to align the time representations from both systems by ensuring they share the same zero epoch, time zone, and interval per count. The HMI's DINT value likely indicates a 32-bit count of whole seconds since the Unix™ epoch, while the Logix GSV WallClockTime object represents a 64-bit count of microseconds since the same epoch. To prevent rollover issues and ensure accurate comparisons, moving the values to LREALs with 53 bits of precision could be a practical solution. Considerations such as drift, clock synchronization, and required accuracy should also be taken into account for a successful comparison process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Converting the HMI DINT into a readable date and time format, such as year, month, day, hour, minute, and second, allows for comparison with the GSV WALLCLOCKTIME.DateTime DINT[7] from Logix. However, this comparison can be complicated and difficult to manage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your response. I find the concept of utilizing DINT tags in Logix Designer rather complex for my level of expertise. My plan was to create a DINT tag named "Monday" with sub-divisions such as Monday.8 for 8am, Monday.9 for 9am, and so forth. By assigning values to these subdivisions, such as 1792 for the time period from 8am to 10am, I can then compare it to the WallClockTime. As someone who is self-taught, I will begin by delving into the suggestions you have provided.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Duchx2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I was initially confused about the application. Are you suggesting having 7 DINTs, one for each day of the week, with the first 24 bits of each DINT representing hours of the day? Essentially, the PLC would only need to identify the current day of the week to determine which DINT to reference and which bit to check for the current hour using DINT[3] from the WallClockTime/LocalDateTime GSV. It's actually a clever approach. Instead of converting the day of the week and hour operator input into a seconds-since-epoch DINT value on the HMI side, focusing on the day of the week could streamline the process. You can search this forum or the Rockwell site for "day of week" to find a suitable AOI. Alternatively, by knowing that the 1970-Jan-01 epoch fell on a Thursday, you could divide the GSV WallClockTime/CurrentValue by 86,4000,000,000 (µs/d; truncated) to calculate days since the epoch, then determine the day of the week offset from Thursday (0=Thursday, 2=Friday, ..., 6=Wednesday) or adjust it by 4 initially to find the offset from Sunday:

Code:
GSV WALLCLOCKTIME CurrentValue wallclock_LINT
### Obtain CurrentValue of WALLCLOCKTIME, µs since epoch
MOD wallclock_LINT 86400000000 working_LINT
### Determine current day in µs
SUB wallclock_LINT working_LINT working_LINT
### Truncate CurrentValue to start of today
DIV working_LINT 86400000000 working_LINT
### Calculate today's offset from epoch in days
ADD working_LINT 4 working_LINT
### Determine today's offset from Sunday Dec. 28, 1969 in days
MOD working_LINT 7 working_LINT
### Find day of the week, offset from Sunday, in days</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to our online community!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
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
            <p>Now that I have successfully programmed my PLC to display the day of the week, I can easily compare the chosen day on my HMI interface. The next step is to implement time-based controls for my machine, such as operating from 8 a.m. to 5 p.m., with flexibility for adjustments based on production demands. Despite searching extensively on online forums, I have yet to find a solution for setting working hours. Any assistance on this matter would be greatly appreciated as it is the final hurdle in completing my project. Thank you for your help in advance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Duchx2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you wondering how to determine the day of the week? Take a look at the LocalDateTime attribute within the WALLCLOCKTIME GSV data (check out the link here, which is safe for non-@OkiePC users).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Following your instructions, when the operator selects the 8 o'clock square on Monday, a flag for Monday is activated. By checking this flag, I am able to verify the day.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Duchx2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for a fun and easy way to experiment and play around with? Check out Rockwell's downloadable Day of Week AOI, which features simple computational functions and a distinct yellow rectangle. It's a great tool for those looking to engage in interactive activities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I have been implementing the tips you shared on my project. I have now been tasked with addressing time drift management. Can anyone provide guidance on how to effectively manage time drift? Your assistance is greatly appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Duchx2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're curious about the concept of "logic NTP," don't hesitate to turn to Google for answers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I program a Make-up Air Unit (MAU) for HVAC using Rockwell Software if I have basic training but lack advanced knowledge?</h4>
<p class='text-muted'><strong>Answer:</strong> - To program a MAU using Rockwell Software, you can start by familiarizing yourself with the basics of the software and then gradually delve into more advanced concepts specific to HVAC programming.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I make the MAU activate based on commands from an HMI interface?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can set up the programming logic to trigger the MAU based on the commands received from the HMI interface, such as utilizing WallClockTime and comparing DINT tags with GSV values.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is it possible to schedule different activation times for the MAU on different days?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can program the MAU to activate at different times on different days by incorporating conditional statements in the logic based on user input from the HMI interface.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Where can I find more information or resources to help me with programming a Make-up Air Unit using Rockwell Software?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can explore online platforms like Imgur for a variety of content, but for specific technical guidance on Rockwell Software programming for HVAC systems, you may want to refer to official Rockwell Automation documentation or participate in relevant forums or training programs.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <!-- Lazy load for faster image loading -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const lazyImages = document.querySelectorAll('img[loading="lazy"]');
                lazyImages.forEach(img => {
                    img.src = img.dataset.src;
                });
            });
        </script>

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

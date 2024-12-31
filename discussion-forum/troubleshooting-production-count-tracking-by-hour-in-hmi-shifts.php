
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, lovely individuals! I am currently working on creating an hourly production table for HMI. I am encountering a challenge in tracking the production count for each hour of my shift. During the morning shift, which runs from 7 am to 3 pm, the parts produced in each hour">
    <meta name="keywords" content="production count tracking, hmi hourly production, shift hour counter, troubleshooting production table, hourly production tracking, hmi shift monitoring, production count by hour">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-production-count-tracking-by-hour-in-hmi-shifts">
    <title>Troubleshooting Production Count Tracking by Hour in HMI Shifts | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Production Count Tracking by Hour in HMI Shifts | Oxmaint Community">
    <meta property="og:description" content="Greetings, lovely individuals! I am currently working on creating an hourly production table for HMI. I am encountering a challenge in tracking the production count for each hour of my shift. During the morning shift, which runs from 7 am to 3 pm, the parts produced in each hour">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-production-count-tracking-by-hour-in-hmi-shifts">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Production Count Tracking by Hour in HMI Shifts | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, lovely individuals! I am currently working on creating an hourly production table for HMI. I am encountering a challenge in tracking the production count for each hour of my shift. During the morning shift, which runs from 7 am to 3 pm, the parts produced in each hour">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-production-count-tracking-by-hour-in-hmi-shifts"
      },
      "headline": "Troubleshooting Production Count Tracking by Hour in HMI Shifts",
      "description": "Greetings, lovely individuals! I am currently working on creating an hourly production table for HMI. I am encountering a challenge in tracking the production count for each hour of my shift. During the morning shift, which runs from 7 am to 3 pm, the parts produced in each hour",
      "author": {
        "@type": "Person",
        "name": "backendcode"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-01",
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
                <h1 class="text-white">Troubleshooting Production Count Tracking by Hour in HMI Shifts</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>backendcode</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3405</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">296</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, lovely individuals! I am currently working on creating an hourly production table for HMI. I am encountering a challenge in tracking the production count for each hour of my shift. During the morning shift, which runs from 7 am to 3 pm, the parts produced in each hour are assigned to specific elements in an array. Despite thorough testing, the shift hour counter does not seem to be incrementing as expected. I have provided the logic I used for reference, particularly focusing on rung 11: https://ibb.co/kUFg8y (PLC LOGIC). Any assistance in identifying the error would be greatly appreciated. Thank you for your help, and looking forward to your feedback.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I quickly glanced at the time and noticed that 3 pm is equal to 15, not 3. Just to clarify, 3 corresponds to 3 am. Remember, 24-hour time format can sometimes cause confusion, so it's important to understand the difference between morning and afternoon hours.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cwal61</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There seems to be an issue with the logic in the one shot triggering the condition change. The initial condition remains constant during the morning shift, resulting in the NEQ always being true. It only counts once until DATE_TIME.HOUR equals 3 (or 15) for it to count again. Why does the PLC need to track the number of parts produced during the morning shift? The individuals monitoring the parts per hour will already know which shift was responsible for them. Simplifying the logic can be beneficial. Consider a different approach like this: use CTU HOUR_COUNTER if DATE_TIME.HOUR is not equal to the previous hour, then update previous_Hour to DATE_TIME.HOUR. This streamlined logic eliminates the need for a one shot and ensures the second line is always executed, regardless of the first line. Translate this concept to your ladder editor for implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to ensure that a certain action only occurs once a day, the condition for triggering the action should involve both sources being equal at a specific time. To properly track the hours of a shift, it's important to capture the previous hour for comparison with the current hour in order to accurately count. To achieve this, consider adding a rung below your counter and moving the Date hour to the Previous Hour. This setup allows for the counting to occur before the previous hour is updated using the NEQ instruction. By implementing these steps, you can effectively manage and track the hours of a shift for better productivity and organization.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cwal61</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The condition in rung 11 is incorrect for incrementing the counter using the NEQ instruction. Even when Date_Time.Hour changes, it will still not be equal to Morning.Shift_End_Hours, preventing the counter from incrementing more than once.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chopin</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you CWAL61 for your response! I have made the adjustment to shift end hours, changing it to 15 from 3. And I must say, your idea is indeed effective! For testing purposes, I simply used minutes to observe if my counter would increase, and it seems to have worked perfectly. Here is the logic as per your suggestion: [link to image]. Your assistance is greatly appreciated. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>backendcode</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to cardosocea's feedback, there may be a problem with the current logic in the program. The issue lies in the one-shot as it needs to detect a change in condition. The initial condition remains the same for the morning shift, leading to a constant true state for the NEQ condition. This results in the count happening only once until DATE_TIME.HOUR equals 3 (or 15) for the next count to occur.

Why does the PLC need to track the number of parts produced during the morning shift? Surely, the individuals monitoring parts per hour already know which shift (A or B) is responsible. The logic seems overly complex. A simpler alternative could be implemented as follows:

if DATE_TIMER.HOUR does not equal previous_Hour, then CTU HOUR_COUNTER
previous_Hour := DATE_TIME.HOUR

This streamlined approach eliminates the need for a one-shot and ensures that the second line is always triggered, regardless of the first line's outcome. This efficient method simplifies the process.

Upon further discussion, it is understood that the afternoon shift supervisor and team wish to view the production numbers from the previous shift on the HMI at any given time. While this feature is valuable, it is agreed that the current logic is unnecessarily complicated. Despite the initial challenges, the counter is now functioning correctly. For more details, refer to the previous response with the updated logic.

Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>backendcode</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a response by cwal61, it was explained that a certain function in rung 11 will only activate when the current time does not equal 3. Both sources must be equal for any false transition to occur, ensuring that this event only happens once a day. To track hours during a shift, it is necessary to store the previous hour and compare it to the current one. To achieve this, add a rung under the counter and use MOV Date hour to store the Previous Hour. This setup allows for counting to occur before the previous hour is updated by the NEQ instruction. Shift end hours were changed to 15 from 3, and the suggested logic implementation seems to be effective for testing purposes with minute increments. Thank you for the assistance, it is greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>backendcode</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum discussion, a user pointed out that there was an error in the code related to using the NEQ instruction to increment a counter. The Date_Time.Hour changing does not necessarily make it equal to Morning.Shift_End_Hours, so the counter was not incrementing as intended. After making the necessary adjustments, the issue was resolved. The helpful input from other forum members was greatly appreciated. Click here to see the updated code: https://ibb.co/do2pvd</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>backendcode</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilize the GSV function to extract real-time system information from the PLC. To manage operations for 3 shifts, focus on retrieving hours and minutes using the 24-hour time format. For the first shift, set the time from 7:00 to 15:00. Adjust rung 13 to trigger a data transfer at the start of each hour by watching for minutes to equal 0. Similarly, monitor hour values for the start of each shift (7, 15, or 23) to transfer total shift data efficiently. Include a RES instruction in relevant rungs to reset variables as necessary. Consult online resources for detailed guidance on utilizing GSV and programming tips. Note that the current CTU may not work correctly, but monitoring system time variables can eliminate the need for unnecessary rungs (10, 11, and 12). Ensure your PLC is equipped with a Real-Time Clock (RTC) for accurate timekeeping.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MikeyN recommended utilizing GSV to retrieve system time data from the PLC in order to effectively control shifts. It is suggested to work with the 24-hour time format for easier management, such as setting the first shift from 7:00 to 15:00. By adjusting rung 13 to monitor minutes matching 0, a one-shot can be added to update data at the top of each hour. Similarly, for overall shift data, observing hours matching the start of each shift, with a one-shot, can facilitate moving the data. Quick Google searches can provide guidance on using GSV and programming examples. It is important to note that the current CTU may not work as expected, but by monitoring system time variables, certain rungs may no longer be necessary. This assumes the PLC has a Real-Time Clock (RTC). Additionally, consider implementing FIFO with an array of 8 elements to transfer hourly data for display on the HMI. Thank you for the valuable advice, MikeyN.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>backendcode</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing Gross Sales Value (GSV) and First-In-First-Out (FIFO) are essential practices to optimize inventory management. Taking it a step further, calculating Overall Equipment Effectiveness (OEE) can provide valuable insights, though it may be a challenging task. Implementing these techniques can lead to increased efficiency and satisfaction from upper management.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As mentioned by backendcode, the afternoon shift supervisor and team would like to easily track the number of parts produced in the previous shift. This information should be readily accessible on the HMI for anyone to view at any time. While it should not be overly complicated, it is important for tracking progress. Thank you for your assistance, my counter is now functioning correctly. Refer to my previous message for the attached logic. I was considering implementing a histogram to display production per hour throughout the day, but your suggestion aligns well with your needs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to MikeyN, backendcode expressed gratitude for the useful advice on using GSV to retrieve system time and value. The counter is also functioning as intended, and plans are in place to implement FIFO with an array containing 8 elements. The goal is to store hourly data in individual array elements and display it on the HMI. An image of the program is requested.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aamhic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Backendcode expressed gratitude towards MikeyN for their helpful advice. They mentioned utilizing GSV to obtain system time and value. In addition to the functioning counter, they are considering implementing FIFO with an array containing 8 elements. This will allow hourly data to be stored in individual elements of the array for display on the HMI. The user requested a program image.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aamhic</span></li>
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
<h4 class='text-dark'>FAQ: 1. Why is the shift hour counter not incrementing as expected in the hourly production table for HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - The shift hour counter may not be incrementing due to a logic error in the PLC code provided in rung 11. Review the logic closely to identify any issues with how the counter is being incremented.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the issue of tracking production count by hour during the morning shift in HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the tracking issue, carefully check the array elements where the parts produced in each hour are being assigned. Ensure that the assignment is correct for each hour of the shift from 7 am to 3 pm.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are some common reasons for production count tracking errors in HMI shifts?</h4>
<p class='text-muted'><strong>Answer:</strong> - Common reasons for tracking errors could include incorrect variable assignments, faulty logic in the PLC code, or issues with the shift hour counter implementation. Double-check all elements involved in the production count tracking process for accuracy.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can you provide guidance on improving the accuracy of hourly production tracking in HMI using PLC logic?</h4>
<p class='text-muted'><strong>Answer:</strong> - To enhance the accuracy of hourly production tracking, consider adding error handling mechanisms, implementing thorough testing procedures, and validating each step of the production count process. Additionally, seek feedback from peers or experts to identify any potential improvements in the logic.</p>
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

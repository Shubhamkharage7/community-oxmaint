
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="For the past 15 years, we have been utilizing RED LION HMI for our operations. Recently, we discovered a discrepancy in our log files, with data recorded up until March 22, 2024 at 1:16. However, a new log file was generated on January 1, 1997, and data has been">
    <meta name="keywords" content="red lion hmi, data log discrepancy, timestamp issue, troubleshooting hmi data log, log file generation problem, timestamp inconsistency, red lion hmi data logging error, log data timestamp issue, data log troubleshooting, hmi timestamp discrepancy">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-red-lion-hmi-data-log-timestamp-discrepancy">
    <title>Troubleshooting RED LION HMI data log timestamp discrepancy | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting RED LION HMI data log timestamp discrepancy | Oxmaint Community">
    <meta property="og:description" content="For the past 15 years, we have been utilizing RED LION HMI for our operations. Recently, we discovered a discrepancy in our log files, with data recorded up until March 22, 2024 at 1:16. However, a new log file was generated on January 1, 1997, and data has been">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-red-lion-hmi-data-log-timestamp-discrepancy">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting RED LION HMI data log timestamp discrepancy | Oxmaint Community">
    <meta name="twitter:description" content="For the past 15 years, we have been utilizing RED LION HMI for our operations. Recently, we discovered a discrepancy in our log files, with data recorded up until March 22, 2024 at 1:16. However, a new log file was generated on January 1, 1997, and data has been">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-red-lion-hmi-data-log-timestamp-discrepancy"
      },
      "headline": "Troubleshooting RED LION HMI data log timestamp discrepancy",
      "description": "For the past 15 years, we have been utilizing RED LION HMI for our operations. Recently, we discovered a discrepancy in our log files, with data recorded up until March 22, 2024 at 1:16. However, a new log file was generated on January 1, 1997, and data has been",
      "author": {
        "@type": "Person",
        "name": "gsanghvi"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-11",
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
                <h1 class="text-white">Troubleshooting RED LION HMI data log timestamp discrepancy</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>gsanghvi</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>23 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2174</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">251</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>For the past 15 years, we have been utilizing RED LION HMI for our operations. Recently, we discovered a discrepancy in our log files, with data recorded up until March 22, 2024 at 1:16. However, a new log file was generated on January 1, 1997, and data has been logged with varying timestamps.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Today, a widespread issue affecting all Red Lion HMIs (screens) globally has been identified. This timestamp bug is causing black screens with error messages such as "SOFTWARE EXCEPTION" or "INVALID DATABASE". Restarting the screen usually resolves the issue, but multiple reboots may be necessary in some cases. After restarting, the internal timestamp will reset to 01/01/1997, causing any "LOG" recordings and events to be outdated. It is advised not to attempt to set the time and date manually. Red Lion is actively working on a solution for this issue and updates will be provided as soon as they are available. We apologize for any inconvenience and remain available for support if needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Elcan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After submitting a support request, I received an email from Red Lion Tech Support informing me that they are aware of the issue with the Graphite 15" HMIs experiencing a "Software Exception 0F-2000-57AC-3707" error. Their development team is actively working on a solution and will provide updates as they become available. Despite any inconvenience, they appreciate my patience. Contact for any Red Lion Controls support at www.redlion.net or (877) 432-9908.

Regarding the issue, it is suspected that the incorrect time on the alarm history of one unit may be related to Daylight Savings Time (DST) changes, as the units are running an older version of Crimson 3.0. A similar incident occurred with a customer running the latest Crimson 3.1 version, where the HMI clock reverted to 1-1-1997 during a DST change.

To prevent future occurrences, I am seeking recommendations from Red Lion Tech Support aside from upgrading to version 3.2. Contact for more information or assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After resolving a clock issue for a customer last week, a new problem has emerged with their logs. The clock is no longer the concern, but now the focus is on troubleshooting the logs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Sure thing! Take a look at the document I received via email.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the Y2K bug making a comeback? Find out more about this potential delay in our latest article. Laugh out loud at the thought of Y2K causing issues in today's technology-driven world.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rube</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Whoosh. Upgrading from version 2.0 to version 3.2 is a significant step, indicating a potential issue within the common codebase or the operating system. While it may be tempting to laugh off the Y2K scare, those of us who worked to fix it know the dangers of making assumptions. The recent daylight saving switch in the USA on March 10, 2024, has raised concerns, with reports suggesting the issue could have occurred even earlier than believed. It will be intriguing to observe how Red Lion addresses this issue. They are known for their secrecy regarding their technology, so will they opt for a comprehensive system upgrade or limit it to Crimson 3.2? Perhaps they will dismiss it as a one-time occurrence. I am considering purchasing a FlexEdge device this week, as time functions are not essential for my application. Let's see how this unfolds!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Today, I encountered a situation where ten graphite displays malfunctioned for a single customer. This issue has now been identified by other customers as well, making it a challenging day for the Red Lion team.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>atc222</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This weekend in York, PA is all about indulging in donuts and plenty of coffee.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that Red Lion has been sending out global emails with varying levels of detail. One email indicates that the situation is similar to Y2K but with a randomly selected starting point and intervals. Red Lion's internal time tracking involves two methods: counting the seconds since 01/01/1997 and counting the number of 200ms ticks since the same starting point. The latter method is used for tasks requiring resolutions better than one second. Both values are stored in 32-bit numbers, suitable for the 1 second clock, but resulting in a wrap-around after just over 27 years for the 200ms clock. Specifically, the 200ms clock will reset at 01:17:39 on 03/22/24.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Calculate the time difference between January 1, 1997, and March 22, 2024, using Python code. The total duration is approximately 858993360 seconds, which is equivalent to 27.34 years. By taking the logarithm of the total seconds multiplied by 10 and dividing by the base 2 logarithm, the result is approximately 33. Similarly, when the total seconds multiplied by 5 is used in the logarithmic calculation, the result is around 32. 

Moreover, the Python code also demonstrates adding a timedelta of (1<<32)/5 seconds to January 1, 1997, resulting in the date and time being March 22, 2024, 1:17:39.200000. This calculation showcases the power and flexibility of datetime operations in Python.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Discover the best Llis options available on the market today. Explore a variety of Llis products and services to meet your needs and preferences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To convert spacecraft time into milliseconds, the function processes the spacecraft clock, represented in seconds as a 64-bit floating point number, to a 32-bit unsigned integer by multiplying it by 10. This conversion from floating point to integer is necessary to translate a decimal time value into a binary format that computers can understand. However, it's important to note that this computation does not prevent an overflow issue when the spacecraft time exceeds the maximum value that can be represented in 32 bits. An example of this was seen when the spacecraft clock reached 429,496,729.6 seconds on "DOY 223" in 2013, causing a floating point error that led to a processor reset.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The article is quite concerning, highlighting how even highly skilled professionals like rocket scientists can make errors. The recounting of the PATRIOT failure in Dhahran in 1991 serves as a stark reminder of the potential consequences of such mistakes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What are the chances of this still being operational in 27 years? Let's give it a shot.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Recently, I returned from a client's site where a 4" CR1000 device without logging capabilities was connected to a Click Plus system managing a small pump station. The CR1000 had a clock and alarm banner on the Master Slide, a common feature in Crimson applications. The device was frozen with an "Invalid Database" error, which required me to update it using my laptop. There is a high likelihood that I will need to revisit the site once Red Lion releases a solution to this issue.

En route back, I made a stop at another customer's location where they utilized the G12 trend feature in Crimson to identify peaks in filter turbidity for their reports. However, there was an issue with the trend plotting data from 3-22-2024 to 1-1-1997. I assisted by connecting their office PC to the Red Lion device and downloaded the log files in csv format. I discovered that there were two log files for the day, with one ending at 1:42 am and a new file with around 12,000 entries starting at midnight on 1-1-1997. Despite a slight discrepancy in the timestamps, it didn't affect the client's search for peak NTU levels during each batch.

While many of my installations can be monitored remotely, several simpler setups like standalone wells and pump stations are located throughout the state, requiring periodic on-site visits for maintenance and troubleshooting.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I do not personally use any Crimson products, I still have an opinion on them. It seems they may have bypassed the Y2K problem by setting an arbitrary epoch, as discussed in this thread. Perhaps they thought, "27 years from now is far off; we can address it later. Or let someone else handle it, as I'll be retired by then." Hopefully, Crimson can develop a 64-bit clock for users like you. Otherwise, they will need to establish a new epoch date, further delaying resolution of the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JordanCClark</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently received an email from RL.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As we head into Monday, I am gearing up to provide a remote update for a customer. If it doesn't go as planned, no worries - they are only 30 minutes away. Keep an eye on this thread for updates on whether my attempt was successful or not. I urge everyone else to do the same and report back on their results. Stay tuned for my next update by 8:00 am EST. Let's keep each other informed!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>atc222</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After installing version 3.2, we successfully updated a unit remotely. It's important to keep in mind that when using remote access, any existing shortcuts set up for direct access to remote view may need to be modified.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>atc222</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Yesterday, I remotely updated two devices - one from version 3.1 to 3.2 and the other already on version 3.2. While not extensively experienced with version 3.2, I noticed a change in setting the IP address for the Ethernet port(s), now requiring entry in the Link Options TCP/IP field. Surprisingly, the Find... option couldn't locate the HMI (even the one on version 3.2) via a VPN router. After installing the firmware, a login prompt appeared for further updates. Despite initial login rejections, the second attempt was successful, allowing me to complete the installation. The retentive tag data, crucial for email alarm notifications, remained intact in both cases. With two devices updated, around 150 more to go.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach explained that Crimson internally tracks time using two methods. The first method involves counting the number of seconds since January 1, 1997, while the second method counts the number of 200ms ticks since the same date. The 200ms clock is specifically used for tasks requiring better than one-second resolution, such as data logging. Both values are stored in 32-bit numbers. However, the 200ms clock will experience a wrap-around after slightly more than 27 years, precisely on March 22, 2024, at 01:17:39. Following the initial crash of all HMIs on March 22, they were successfully rebooted after a power cycle and are maintaining the correct time and date. Clock functions like GetDate() are functioning properly. It is important to determine which features rely on the 200ms clock and might be affected. Is it just the data logging or are there other functions as well? Understanding this will help in identifying which screens need to be updated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kolyur</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The bug only impacts Alarm and Event timestamps and data log timestamps. Other aspects of the system are functioning normally. If you do not utilize trending, alarms, or events, you will not encounter this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We sincerely apologize for this unforeseeable occurrence beyond our control. Click to learn more about the situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is there a discrepancy in the timestamps of the data logged by the RED LION HMI system?</h4>
<p class='text-muted'><strong>Answer:</strong> The discrepancy in timestamps could be due to a software glitch, incorrect system settings, or a potential hardware issue. It is essential to investigate these factors to identify the root cause.</p>
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

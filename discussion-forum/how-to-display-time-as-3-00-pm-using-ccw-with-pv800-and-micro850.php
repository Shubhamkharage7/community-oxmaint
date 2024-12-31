
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When using CCW with a PV800 and Micro850, I have created a scheduler allowing users to select a specific month, day (1-31), hour (0-23), and minute (0-59) for system startup. I want to display this time in a standard AM/PM format, such as 3:00 PM. However, my current method">
    <meta name="keywords" content="ccw, pv800, micro850, display time, 3:00 pm, scheduler, am/pm format, single-digit minutes, convert time, string, $systimestring, time variable, udfb, day of the week">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-display-time-as-3-00-pm-using-ccw-with-pv800-and-micro850">
    <title>How to Display Time as 3:00 PM Using CCW with PV800 and Micro850 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Display Time as 3:00 PM Using CCW with PV800 and Micro850 | Oxmaint Community">
    <meta property="og:description" content="When using CCW with a PV800 and Micro850, I have created a scheduler allowing users to select a specific month, day (1-31), hour (0-23), and minute (0-59) for system startup. I want to display this time in a standard AM/PM format, such as 3:00 PM. However, my current method">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-display-time-as-3-00-pm-using-ccw-with-pv800-and-micro850">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Display Time as 3:00 PM Using CCW with PV800 and Micro850 | Oxmaint Community">
    <meta name="twitter:description" content="When using CCW with a PV800 and Micro850, I have created a scheduler allowing users to select a specific month, day (1-31), hour (0-23), and minute (0-59) for system startup. I want to display this time in a standard AM/PM format, such as 3:00 PM. However, my current method">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-display-time-as-3-00-pm-using-ccw-with-pv800-and-micro850"
      },
      "headline": "How to Display Time as 3:00 PM Using CCW with PV800 and Micro850",
      "description": "When using CCW with a PV800 and Micro850, I have created a scheduler allowing users to select a specific month, day (1-31), hour (0-23), and minute (0-59) for system startup. I want to display this time in a standard AM/PM format, such as 3:00 PM. However, my current method",
      "author": {
        "@type": "Person",
        "name": "MikeBriggs"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-17",
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
                <h1 class="text-white">How to Display Time as 3:00 PM Using CCW with PV800 and Micro850</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>MikeBriggs</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">859</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">254</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When using CCW with a PV800 and Micro850, I have created a scheduler allowing users to select a specific month, day (1-31), hour (0-23), and minute (0-59) for system startup. I want to display this time in a standard AM/PM format, such as 3:00 PM. However, my current method of displaying the time results in inconsistencies, such as showing single-digit minutes. Is there a way for CCW to convert the time into a string for proper display? Utilizing $SysTimeString allows for the correct display of current time, but converting the scheduled time to a TIME variable results in an unattractive format like 15h00m. I also attempted to use a UDFB from AB's website to determine the day of the week based on input date, but encountered issues with importing it into CCW.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>While I don't have the specific hardware on hand, I recently set up a new PV800 project in CCW. When utilizing a Numeric Display for displaying minutes, there is an important setting labeled "Fill With" under the "Format" section. By adjusting the Number of Digits to 2 and choosing to Fill With Zeroes, you can customize the display to show the minutes exactly as desired.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One useful method is to utilize the RTC_READ function to retrieve the current time and date from the PLC system, including hours and minutes. This data can then be processed using DTOS and INSERT commands to create a formatted string for presentation on the HMI screen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I offer my sincere condolences for resorting to carrying concealed weapons (CCW).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geoff White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Joseph, for your two excellent suggestions. I will start with the first one and if it doesn't yield results, I will move on to the second one. Your input is greatly appreciated!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeBriggs</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Geoff White expressed his sympathy for using CCW, but I have to say that I have come to appreciate it. While many may not favor CCW, my background with text languages like C++, C#, and Python gives me a unique perspective. CCW is my first introduction to PLC programming and ladder logic, and surprisingly, I find myself preferring it over text-based programming. Is CCW considered less effective than other programming systems for PLCs?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeBriggs</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Geoff's question, MikeBriggs shared that despite initial skepticism, he has come to appreciate CCW for PLC programming and ladder logic. His background in text-based programming languages like C++, C#, and Python initially led him to question CCW's capabilities compared to other systems. However, his experience with CCW, being his first exposure to PLC programming, has made him prefer it over traditional text-based programming. While some CCW instructions may be flawed, MikeBriggs notes that the overall user interface has a simplistic design reminiscent of Fisher-Price toys. Despite this, he acknowledges that other PLC IDEs also have similar aesthetics but believes that Allen-Bradley's other programming tools surpass CCW in terms of functionality and efficiency. For instance, he praises the now outdated RSLogix 500 IDE for its faster startup, more efficient use of screen space, and overall user-friendly design. MikeBriggs emphasizes that even though RSLogix/Studio 5000 may have a more advanced memory model, he still finds the simplicity of RSLogix 500 to be superior.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned that some of the CCW instructions are not functioning correctly, such as both PIDs. Additionally, he criticized the software for its Fisher-Price appearance. While many PLC IDEs share a similar look and feel, CCW, developed by Allen-Bradley (although it may have been acquired), is often the target of jokes and criticism. In contrast, other Allen-Bradley IDEs like RSLogix 500 are praised for their efficiency, speed, and user interface. Despite its file-based memory model, drbitboy still prefers RSLogix 500 over RSLogix/Studio 5000.

Considering the limitations of CCW, drbitboy contemplates investing in a perpetual license for Studio 5000 and wonders if it is possible to import a project from CCW into Studio 5000. Having nearly completed programming the company's main product line in CCW, he is hesitant to start from scratch if they were to transition to a different software platform. This potential shift from National Instruments hardware to an AB PLC using CCW poses a dilemma that may require a discussion with his boss.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeBriggs</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MikeBriggs mentioned the possibility of consulting with his superior regarding investing in a perpetual license for Studio 5000. He is wondering if it is feasible to transfer an entire project from CCW to Studio 5000. Currently, he is close to completing the program for his company's primary product line, transitioning from National Instruments hardware with LabView and C# code to an AB PLC programmed with CCW. It is crucial for Mike to avoid starting from scratch if they decide to switch platforms. While a MicroLogix=>CCW converter exists, a CCW=>Studio 5000 converter may not be available.

If this project is a one-time endeavor for a widely sold product, sticking with CCW and a Micro8xx may suffice. Once the program is functioning, tested, validated, and confirmed, the choice of IDE becomes less important as the initial challenges of using CCW are distributed across multiple copies. It was simply an expression of understanding that CCW can be challenging to work with. Fortunately, if this is a one-time project, Mike is in a better position compared to those dealing with CCW in the long run. Additionally, it was noted that Mike seemed content with CCW until alternatives were mentioned, for which an apology was offered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The choice of software requirements is dictated by the hardware platform being used. In practical applications, the PLC model will determine the appropriate software. For Micro 8xx and PV8xx PLCs, CCW is the preferred software. On the other hand, for CompactLogix or ControlLogix PLCs, Studio 5000 is the recommended software. Make sure to select the right software based on your PLC model for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, drbitboy and joseph, for your insights. Our decision to stick with the Micro850 and PV800 for our main products has been affirmed. I have already successfully programmed one of our products in CCW, which was a significant project for me. As a result of its success, we are now migrating our other product from National Instruments & LabView to Allen Bradley hardware with CCW (which I find more preferable). 

In order to expand my skillset, I am considering learning Studio 5000 and other IDEs. I believe that while the overall ladder logic structure may remain similar, there may be additional built-in functions to explore. Thank you for your guidance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeBriggs</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The programming languages offered in CCW are comparable to those found in other PLC environments. However, the user experience with the IDE is subpar. CCW is aimed at the affordable standard machine market, with Rockwell making efforts to prevent cannibalization of sales from their main products by providing a less appealing user experience. It seems as though CCW has intentionally been limited in its capabilities. If you find CCW preferable to National Instruments and Labview, then those platforms must truly offer a minimalist programming experience for you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Geoff White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Before choosing a Micro 800 series processor, verify that it can accommodate the Realtime Clock module required. Some processors may not be compatible. Next, create a string data type and select a time to string converter for displaying the time. To trigger an event, compare the RTC value with your setpoint. While setting up and testing the trigger may be necessary, it is achievable. Please note that I utilize PVs only at the customer's request, with a preference for Net Studio.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Geoff White expressed his dissatisfaction with the programming environment in CCW, stating that it is similar to other PLC environments, but the IDE experience is lacking. The focus of CCW is on the low-cost standard machine market, with Rockwell making deliberate efforts to prevent cannibalization of sales from their core products by providing a less appealing user experience. National Instruments and LabView are pointed out as alternative options, but some find LabView to be cumbersome and non-intuitive compared to text-based languages like Basic. The lack of comments in the code further complicates understanding and tracking programming logic, especially when references to programs in C# are involved. Lacking proper comments in code is seen as a significant issue in the programming world.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeBriggs</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to display the time on a Micro 800 series processor, ensure that you choose a processor compatible with the Realtime Clock module. Some processors may not support this feature. Create a string data type and select a time to string converter to showcase the time. Compare the RTC value with your setpoint to activate the event. Testing and setup may be required to get the trigger working, but it is achievable. Note that PVs are only used when requested by the customer. Consider using Net Studio for a smoother experience. PanelViews are preferred, although some features in CCW may be slightly complex, such as displaying two digits for numeric entries.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeBriggs</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking to efficiently manage startup time control, consider utilizing the Real-Time Clock (RTC) in your Programmable Logic Controller (PLC). With the RTC function, you have the flexibility to set specific time and date parameters for comparison. It's important to note that in cases of power loss or program downloads, the time may need to be verified and readjusted. Be sure to refer to the data sheet for further guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>GaryS</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: 1. How can I display time as 3:00 PM using CCW with PV800 and Micro850?</h4>
<p class='text-muted'><strong>Answer:</strong> - To display time in a standard AM/PM format like 3:00 PM, you can convert the time into a string for proper display. Utilizing $SysTimeString can help with correct display of the current time.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why am I experiencing inconsistencies in displaying time with CCW?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you are facing issues such as showing single-digit minutes or unattractive time formats like 15h00m, it may be due to the method used to convert the time. Consider converting the scheduled time to a TIME variable for better display.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I determine the day of the week based on an input date in CCW?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can explore using User-Defined Function Blocks (UDFBs) provided by AB's website to determine the day of the week based on the input date. However, ensure that the UDFB can be imported and utilized correctly within CCW to avoid any issues.</p>
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

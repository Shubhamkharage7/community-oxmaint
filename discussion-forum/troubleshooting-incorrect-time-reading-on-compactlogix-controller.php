
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Following a power outage, the Current_Time(0) is reading as 568309 instead of 2024. Im unsure of where the controller is pulling this value from. Any suggestions on troubleshooting this issue?">
    <meta name="keywords" content="compactlogix controller troubleshooting, incorrect time reading fix, current_time(0) value issue, power outage time error, controller time discrepancy, troubleshooting time reading problem, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-incorrect-time-reading-on-compactlogix-controller">
    <title>Troubleshooting Incorrect Time Reading on CompactLogix Controller | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Incorrect Time Reading on CompactLogix Controller | Oxmaint Community">
    <meta property="og:description" content="Following a power outage, the Current_Time(0) is reading as 568309 instead of 2024. Im unsure of where the controller is pulling this value from. Any suggestions on troubleshooting this issue?">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-incorrect-time-reading-on-compactlogix-controller">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Incorrect Time Reading on CompactLogix Controller | Oxmaint Community">
    <meta name="twitter:description" content="Following a power outage, the Current_Time(0) is reading as 568309 instead of 2024. Im unsure of where the controller is pulling this value from. Any suggestions on troubleshooting this issue?">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-incorrect-time-reading-on-compactlogix-controller"
      },
      "headline": "Troubleshooting Incorrect Time Reading on CompactLogix Controller",
      "description": "Following a power outage, the Current_Time(0) is reading as 568309 instead of 2024. Im unsure of where the controller is pulling this value from. Any suggestions on troubleshooting this issue?",
      "author": {
        "@type": "Person",
        "name": "jeaton"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-20",
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
                <h1 class="text-white">Troubleshooting Incorrect Time Reading on CompactLogix Controller</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>jeaton</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">582</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">128</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Following a power outage, the Current_Time(0) is reading as 568309 instead of 2024. I'm unsure of where the controller is pulling this value from. Any suggestions on troubleshooting this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>How can you correctly set the value of Current_Time(0) in your program? Learn the steps to properly initialize Current_Time(0) in your code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User jeaton noticed that after experiencing a power outage, the Current_Time(0) is showing as 568309 instead of the expected value of 2024. They are unsure where the controller is sourcing this incorrect value from and are seeking suggestions. Is it possible that the controller is retrieving information from an uninitialized memory location following the power outage? Any insights or solutions would be appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alsevere</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>JeremyM inquired about the mechanism for setting Current_Time(0) in a program. It seems to be established within a GSV linked to the WallClockTime class and the LocalDateTime attribute. The origin of these values remains unclear. Is there an internal clock within the controller? Any insights would be appreciated. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jeaton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the GSV setting, the class is identified as WallClockTime with the attribute name LocalDateTime. The source of these values is currently unknown. Could the controller be equipped with an internal clock? Explore further by right-clicking on the Current_Time tag to cross-reference and determine if it is being controlled externally. Feel free to seek guidance on L35E. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JeremyM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the data type for the Current_Time variable? Is it DINT[7]? What is the role of the DEST parameter in the GSV instruction? If you deactivate the GSV instruction and manually input 0 into Current_Time[0], will the value of Current_Time[0] be altered?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
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
            <p>The content is unique and not generated by external sources. It is a DINT(7) with DEST set to Current_Time(0). I will verify whether it is being replaced or overwritten.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jeaton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When checking the Controller properties, it is essential to verify if the current date and time are accurately displayed. If the correct time is not shown, the issue likely lies with the GSV. In this case, the SSV should be inspected to adjust the controller's date and time. The GSV is responsible for reading the controller's date and time, while the SSV is used for setting it. Additionally, a visual aid, such as a diagram of the rung with the GSV, can be beneficial in troubleshooting the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Operaghost</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jeaton noted that the data is being handled in a specific manner. The data type being used is a DINT(7), with the DEST parameter set to Current_Time(0). It is important to verify if the data is being overwritten. To achieve this, consider creating a new array DINT[7] named cttest in the code. This will prevent any other interference or overwriting. Use cttest[0] as the DEST parameter when calling the GSV function and check if cttest[0] becomes 2024. It is crucial to ensure that the PLC is executing commands accurately. If a value other than 2024 appears for Current_Time[0], review where the PLC was instructed to write that value or where the GSV function was prevented from writing to Current_Time[0]. Another method is to establish a DINT tag named current_year with an initial value of -999. Following the GSV function, add an instruction to move Current_Time[0] to current_year. This approach should provide the necessary clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I will review the properties of the controller.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jeaton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We appreciate your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jeaton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jeaton inquired about a fix and expressed gratitude for the assistance provided. What solution was implemented to resolve the issue? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To update the date and time on the controller properties, I selected the "set from workstation" option. Initially, there were two question marks in the field, but now the controller displays the current date and time accurately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jeaton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>User jeaton shared their experience of setting the date and time on a controller by accessing controller properties and selecting the option to set it from the workstation. They encountered two question marks in the field, which were resolved by updating to the current date and time. This made them curious if it is common for this specific controller to lose its time values after a power outage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bit_Bucket_07</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently had to reset my clock due to a power outage. I came across a thread where someone else mentioned encountering the issue of two question marks displaying on the clock after a power disruption.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jeaton</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Bit_Bucket_07, merely adjusting the clock was all that was needed. Is it common for this particular controller to reset its time settings following a power outage? From what I recall, this only occurs when the battery is either dead or failing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RetiQlum2</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Why is my CompactLogix Controller displaying an incorrect time reading after a power outage?
   - After a power outage, the CompactLogix Controller may display an incorrect time reading due to various reasons such as a loss of synchronization with the system clock or incorrect configuration settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the incorrect time reading on my CompactLogix Controller?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the incorrect time reading, you can start by checking the synchronization settings with the system clock, verifying the time zone settings, and ensuring that the controller's internal clock is set correctly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps can I take to resolve the issue of the CompactLogix Controller displaying the wrong time after a power outage?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can try resetting the time on the controller, reconfiguring the time settings, checking for any firmware updates that address time-related issues, and ensuring that the power outage did not cause any hardware damage affecting the timekeeping functionality.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is there a specific location within the CompactLogix Controller where the time reading is stored?</h4>
<p class='text-muted'><strong>Answer:</strong> - The time reading on a CompactLogix Controller is commonly stored in a specific memory location, such as Current_Time(0). Checking this memory location can help identify where the controller is pulling the incorrect time value from.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. What are some best practices to prevent or mitigate incorrect time readings on a CompactLogix Controller post-power outage?</h4>
<p class='text-muted'><strong>Answer:</strong> - Implementing backup power solutions, regularly</p>
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

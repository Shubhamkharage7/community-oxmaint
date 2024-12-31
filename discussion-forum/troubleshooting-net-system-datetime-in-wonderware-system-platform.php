
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am a newcomer to programming in .NET on the Wonderware System Platform, and I am facing challenges with a .NET function. My goal is to initialize a .NET structure to retrieve the current date and time of the system where the Automated Object is operating. However,">
    <meta name="keywords" content=".net system.datetime, wonderware system platform, troubleshooting, .net programming, system date synchronization, plc clock, programming challenges, error message, struct initialization, current date and time retrieval, automation, troubleshooting error messages, system integration, .net structure">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-net-system-datetime-in-wonderware-system-platform">
    <title>Troubleshooting .NET System.DateTime in Wonderware System Platform | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting .NET System.DateTime in Wonderware System Platform | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am a newcomer to programming in .NET on the Wonderware System Platform, and I am facing challenges with a .NET function. My goal is to initialize a .NET structure to retrieve the current date and time of the system where the Automated Object is operating. However,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-net-system-datetime-in-wonderware-system-platform">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting .NET System.DateTime in Wonderware System Platform | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am a newcomer to programming in .NET on the Wonderware System Platform, and I am facing challenges with a .NET function. My goal is to initialize a .NET structure to retrieve the current date and time of the system where the Automated Object is operating. However,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-net-system-datetime-in-wonderware-system-platform"
      },
      "headline": "Troubleshooting .NET System.DateTime in Wonderware System Platform",
      "description": "Hello everyone, I am a newcomer to programming in .NET on the Wonderware System Platform, and I am facing challenges with a .NET function. My goal is to initialize a .NET structure to retrieve the current date and time of the system where the Automated Object is operating. However,",
      "author": {
        "@type": "Person",
        "name": "tranh2"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-08",
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
                <h1 class="text-white">Troubleshooting .NET System.DateTime in Wonderware System Platform</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tranh2</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">11731</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">189</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, 

I am a newcomer to programming in .NET on the Wonderware System Platform, and I am facing challenges with a .NET function. My goal is to initialize a .NET structure to retrieve the current date and time of the system where the Automated Object is operating. However, I am encountering an error message stating "Date._ErrorReport:Script Date (Execute). Unknown Property:Today..." 

The objective is to maintain a consistent system date that will be synchronized with a PLC clock. I have provided the code I have created below:

``` 
DIM DOB as System.DateTime;
DOB = new System.DateTime;
Me.DateTime = System.DateTime.Today; //Copy the date time to Me.Datetime
Me.DateTimeHour = System.DateTime.Hour;
Me.DateTimeMin = System.DateTime.Minute;
Me.DateTimeSec = System.DateTime.Second;
```

I am unsure why the code is not working as expected, especially since the MSDN site indicates that ".Today" is a property. I would prefer to stick to .NET programming rather than using InTouch variables like $Month, $Day, $Year. Any assistance on this matter would be greatly appreciated. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Learn how we synchronize System date and time with a Master Date and Time variable for PLC applications. By utilizing the MyPlatform.Scheduler.ScanTime as our reference point, we extract and convert the data into a format suitable for PLC usage. This process involves shifting the values to their respective positions and converting them to decimal for integration into PLC systems. Regular comparisons are conducted between the PLC Time and the timestamp generated by this script to ensure synchronization. Don't forget to enable synchronization in the PLC CPU function block within the PLC code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RheinhardtP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you RheinhardtP for your help! I appreciate the solution you provided, as it seems like it would be effective for my situation. Can anyone help clarify why I am encountering the "Unknown Property..." error in the .NET code snippet shared below? The code in question is as follows: '//Start Code DIM DOB as System.DateTime; DOB = new System.DateTime; Me.DateTime = System.DateTime.Today; - I'm curious to understand why this isn't functioning as expected.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tranh2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently revisited some code and found a better way to handle date and time. I created a User Defined Attribute (UDA) called DateTime of type Time to easily access the current time. By using the following code snippet, I was able to retrieve the time in the Time format UDA: Dim HourT as INT;
Dim MinT as INT
Me.DateTime = System.DateTime.Now; '
HourT = System.DateTime.Now.Hour ;
MinT = System.DateTime.Now.Minute ; 'This method worked well. I did not explore datetime.today, as it was unnecessary with the above approach. This new code is much more concise than our previous version.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RheinhardtP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, RheinhardtP, for your assistance. I have written the code in the following format: 

DIM SystemDate AS System.DateTime; 
SystemDate = Platform.Scheduler.ScanTime; 
Me.Year = SystemDate.Year; 
Me.Month = SystemDate.Month; 
Me.Day = SystemDate.Day; 
Me.Hour = SystemDate.Hour; 
Me.Min = SystemDate.Minute; 
Me.Sec = SystemDate.Second; 

I am curious about the .NET programming conventions used by the system platform. It appears to be similar to VB.NET, but there are some differences. Can you provide any insight on this? Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tranh2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Scripts are typically executed in objects within the .NET Framework 4.0. This is especially relevant if you are using the 2012 R2 operating system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>RheinhardtP</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>New to programming in Wonderware System Platform using .NET, I am facing challenges with initializing a .NET structure to retrieve the current date and time of the system the Automated Object is operating on. Despite referring to the MSDN site that mentions ".Today" as a property of System.DateTime, I keep encountering an error message stating "Date._ErrorReport:Script Date (Execute). Unknown Property: Today...". My goal is to maintain a consistent system date that will be synchronized with a PLC clock to ensure they match. 

I would prefer to stick to .NET coding rather than relying on InTouch variables like $Month, $Day, $Year. Any guidance on resolving this issue would be greatly appreciated. In my experience, running scripts in objects within .NET Framework 4.0 with 2012 R2 installed has been successful. I have effectively used the following code snippet to retrieve system date and time values:

Dim system_month as Integer;
Dim system_day as Integer;
Dim system_year as Integer;
Dim system_hour as Integer;
Dim system_minute as Integer;
Dim system_second as Integer;

System_hour = System.DateTime.Now.Hour;
System_minute = System.DateTime.Now.Minute;
System_second = System.DateTime.Now.Second;
System_year = System.DateTime.Now.Year;
System_Month = System.DateTime.Now.Month;
System_Day = System.DateTime.Now.Day;</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JoeElectro</span></li>
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
<h4 class='text-dark'>FAQ: FAQ 1:</h4>
<p class='text-muted'><strong>Answer:</strong> Question: What is the error message "Date._ErrorReport:Script Date (Execute). Unknown Property:Today" indicating in the provided .NET code snippet?
Answer: The error message indicates that the property `.Today` is not recognized in the context where it is being used. It seems there is a misunderstanding in how the `System.DateTime` object is being accessed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: FAQ 2:</h4>
<p class='text-muted'><strong>Answer:</strong> Question: Why is the code snippet not working as expected when trying to retrieve the current date and time using .NET in Wonderware System Platform?
Answer: The issue lies in how the `System.DateTime` object is being initialized and accessed in the code snippet. The usage of `System.DateTime.Today` to directly access the current date is incorrect.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: FAQ 3:</h4>
<p class='text-muted'><strong>Answer:</strong> Question: How can I correctly retrieve and set the current date and time in .NET on the Wonderware System Platform?
Answer: To retrieve the current date and time, you should initialize a new `System.DateTime` object and then access the properties `DateTime.Now` instead of `DateTime.Today` to get the current date and time.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: FAQ 4:</h4>
<p class='text-muted'><strong>Answer:</strong> Question: Is it possible to synchronize the system date with a PLC clock using .NET programming in Wonderware System Platform?
Answer: Yes, you can synchronize the system date with a PLC clock using .NET programming by correctly accessing the current date and time from the `System.DateTime.Now` property and implementing the synchronization</p>
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

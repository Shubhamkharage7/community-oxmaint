
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey there! I have been experiencing difficulty with my 1769-L36ERMS Rockwell PLC as it does not allow me to move or copy literal text into a string data type. I recall being able to do this in a previous project, but with this specific PLC model, it seems to">
    <meta name="keywords" content="rockwell automation 1769-l36erms plc, troubleshooting plc issues, literal text in string data type, rockwell plc data type restrictions, moving literal text in plc">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-rockwell-automation-1769-l36erms-plc-issue-with-literal-text-in-string-data-type">
    <title>Troubleshooting Rockwell Automation 1769-L36ERMS PLC Issue with Literal Text in String Data Type | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Rockwell Automation 1769-L36ERMS PLC Issue with Literal Text in String Data Type | Oxmaint Community">
    <meta property="og:description" content="Hey there! I have been experiencing difficulty with my 1769-L36ERMS Rockwell PLC as it does not allow me to move or copy literal text into a string data type. I recall being able to do this in a previous project, but with this specific PLC model, it seems to">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-rockwell-automation-1769-l36erms-plc-issue-with-literal-text-in-string-data-type">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Rockwell Automation 1769-L36ERMS PLC Issue with Literal Text in String Data Type | Oxmaint Community">
    <meta name="twitter:description" content="Hey there! I have been experiencing difficulty with my 1769-L36ERMS Rockwell PLC as it does not allow me to move or copy literal text into a string data type. I recall being able to do this in a previous project, but with this specific PLC model, it seems to">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-rockwell-automation-1769-l36erms-plc-issue-with-literal-text-in-string-data-type"
      },
      "headline": "Troubleshooting Rockwell Automation 1769-L36ERMS PLC Issue with Literal Text in String Data Type",
      "description": "Hey there! I have been experiencing difficulty with my 1769-L36ERMS Rockwell PLC as it does not allow me to move or copy literal text into a string data type. I recall being able to do this in a previous project, but with this specific PLC model, it seems to",
      "author": {
        "@type": "Person",
        "name": "Shivsrikakolum"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-06",
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
                <h1 class="text-white">Troubleshooting Rockwell Automation 1769-L36ERMS PLC Issue with Literal Text in String Data Type</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>13 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">620</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">480</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey there! I have been experiencing difficulty with my 1769-L36ERMS Rockwell PLC as it does not allow me to move or copy literal text into a string data type. I recall being able to do this in a previous project, but with this specific PLC model, it seems to be restricted. Are there any solutions or workarounds for this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems that the 5x70 controllers do not allow support for string literals. My assumption is that you utilized a 5x80 controller (5069-L3 or 1756-L8) for the other project. Are you utilizing this string repeatedly or only in specific conditions? If it is being used multiple times, I recommend creating a dedicated string to store the desired value and copying from there when needed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>aawilliams85</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to aawilliams85's comment, it seems that the 5x70 controllers may not support string literals. It is possible that a 5x80 controller (5069-L3 or 1756-L8) was used in the previous project. 

If you find yourself using the same string multiple times, it might be beneficial to create a separate string to store the value and then copy from that instead. 

I am uncertain about the necessity of passing a literal string. It may be more efficient to simply create a new string with the desired value.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hardaysknight</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ID QA5896: Understanding Literal Strings in RSLogix 5000

Unlock the secrets of literal strings in RSLogix 5000 with this comprehensive guide, suitable for users of all experience levels.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>aawilliams85 mentioned that the 5x70 controllers may not support string literals, suggesting the use of a 5x80 controller (5069-L3 or 1756-L8) for the other project. It is important to determine if the string is being used multiple times or only in specific states. If it is being used repeatedly, it is recommended to create a string to store the value and copy it from there as needed. Currently, there are multiple strings being utilized, with an array created to manage them. If a solution is not found, filling them up one by one may be necessary. These strings are used on an HMI banner to indicate the machine's current state. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for a way to display dynamic text lists on your HMI, similar to what Siemens HMI's offer, this feature could serve as a helpful alternative for showcasing state machine processes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When I needed to input preset values into multiple string tags, I employed three different methods: 1) Manually typing them out, 2) Using a complex code script on a Red Lion HMI to retrieve data from a CF card and send it to the PLC, and 3) Utilizing Advanced HMI to easily read from a CSV file and populate a string array. Across these methods, especially when dealing with array string tags, I found Advanced HMI to be the most efficient. I recall having to implement handshaking in the Red Lion program to ensure it could write data to a specific tag and communicate to the PLC which array section to update.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have there been recent firmware updates that make string literal manipulation available on versions 34 or 35?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The TerchNote highlights that firmware versions 29 and higher, along with processors 5380 and 5580, support the use of literal strings. This feature allows for more efficient processing of text data in compatible devices.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>alan_505</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to the TerchNote provided by alan_505, firmware versions 29 and higher, along with 5380 and 5580 processors, have the capability to handle literal strings. This feature may have caused confusion when tested on an L71 model.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheWaterboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my experience of populating multiple string tags with preset values, I have utilized three different methods. These include manually typing the values, using a complex code script in a Red Lion HMI to read from a CF card and write to the PLC, and employing Advanced HMI to easily read from a CSV file and write to a string array. Among these methods, especially when dealing with string tag arrays, Advanced HMI proves to be the most efficient.

I've been relying on Advanced HMI for over 5 years now, ever since I lost access to the rslinx platinum package with Excel support for string read/writes. One of the most notable instances was when I successfully downloaded over 10k alarms, warnings, and sequences for all the stations on the assembly line within half an hour. These were generated independently in an Excel spreadsheet, saving me from the tedious task of manually inputting each line of text.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jholm90</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently acquired a PanelView 5310 display and I am eager to explore the option of incorporating dynamic text. I am open to suggestions on the best approach to achieve this functionality. I will be testing the methods mentioned above to determine which one suits my needs best. Feel free to share any additional recommendations. Let's optimize the display with dynamic text features!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective method I have implemented for managing alarms is to store all alarm texts in a STRING array within the PLC. The HMI features a straightforward text display, with the PLC transferring the alarm text to the designated tag used by the HMI for its text display. This setup streamlines the process of adding or editing alarms, as changes can be made directly in the PLC. Additionally, I have created editable pages on the HMI accessible to users with appropriate password privileges for modifying alarm texts. While I have not yet utilized a PV5k, I am unsure of the level of difficulty it would present in this context.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my approach to managing alarms, I utilize a STRING array containing all alarm texts within the PLC. The HMI features a basic text display that receives the alarm text from the PLC. This allows for easy editing of alarms within the PLC without the need for extensive modifications in the HMI. Additionally, I have implemented HMI pages for authorized users to modify alarm texts. While I have not yet used a PV5k, I am considering the potential challenges it may present. I recently completed setting up 266 tags by manually inputting text values, and appreciate the helpful suggestions provided by the community.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. Q: Why can't I move or copy literal text into a string data type with my Rockwell Automation 1769-L36ERMS PLC?
    The 1769-L36ERMS PLC may have restrictions that prevent direct moving or copying of literal text into a string data type. This behavior could be specific to this PLC model.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is there a way to work around the limitation of not being able to input literal text into a string data type on the 1769-L36ERMS PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> It is recommended to check the user manual or documentation of the Rockwell Automation 1769-L36ERMS PLC for any specific methods or functions that can be used to handle literal text within a string data type.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Has anyone found a solution to the issue of moving or copying literal text in a string data type with the 1769-L36ERMS PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> It would be helpful to reach out to Rockwell Automation support or online forums to see if others have encountered and resolved similar issues with the 1769-L36ERMS PLC.</p>
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

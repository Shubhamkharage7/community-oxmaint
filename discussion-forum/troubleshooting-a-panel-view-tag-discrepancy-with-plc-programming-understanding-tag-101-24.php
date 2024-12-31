
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am using a ME program in German and I am trying to determine which tag in the PLC is activated by a latched button. However, upon reviewing the tag properties, I come across a tag that does not align with my PLC tags. I am curious to understand">
    <meta name="keywords" content="panel view, tag discrepancy, plc programming, understanding tag, me program, latched button, tag properties, plc tags, button programming, tag #24, troubleshooting, german program, button activation, tag alignment">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-a-panel-view-tag-discrepancy-with-plc-programming-understanding-tag-101-24">
    <title>Troubleshooting a Panel View Tag Discrepancy with PLC Programming: Understanding Tag #101.24 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting a Panel View Tag Discrepancy with PLC Programming: Understanding Tag #101.24 | Oxmaint Community">
    <meta property="og:description" content="I am using a ME program in German and I am trying to determine which tag in the PLC is activated by a latched button. However, upon reviewing the tag properties, I come across a tag that does not align with my PLC tags. I am curious to understand">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-a-panel-view-tag-discrepancy-with-plc-programming-understanding-tag-101-24">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting a Panel View Tag Discrepancy with PLC Programming: Understanding Tag #101.24 | Oxmaint Community">
    <meta name="twitter:description" content="I am using a ME program in German and I am trying to determine which tag in the PLC is activated by a latched button. However, upon reviewing the tag properties, I come across a tag that does not align with my PLC tags. I am curious to understand">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-a-panel-view-tag-discrepancy-with-plc-programming-understanding-tag-101-24"
      },
      "headline": "Troubleshooting a Panel View Tag Discrepancy with PLC Programming: Understanding Tag #101.24",
      "description": "I am using a ME program in German and I am trying to determine which tag in the PLC is activated by a latched button. However, upon reviewing the tag properties, I come across a tag that does not align with my PLC tags. I am curious to understand",
      "author": {
        "@type": "Person",
        "name": "TedTurner"
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
                <h1 class="text-white">Troubleshooting a Panel View Tag Discrepancy with PLC Programming: Understanding Tag #101.24</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>TedTurner</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">326</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">46</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am using a ME program in German and I am trying to determine which tag in the PLC is activated by a latched button. However, upon reviewing the tag properties, I come across a tag that does not align with my PLC tags. I am curious to understand how this button corresponds to the PLC programming. Any insights on what the tag "#101.24" could represent?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon loading the display, it automatically verifies a parameter file and updates the #101 section with an actual tagname. This customization allows for the display to be used with various tags. To locate the parameter file linked to a Goto Display button, simply open the button's properties and check the specified name under 'Parameter file'. Next, navigate to the Explorer window, expand the 'Parameters' section, and open the corresponding file to locate the line containing #101=[something]. The value of [something] will indicate the specific tag you are searching for. This process ensures seamless integration of multiple tags within the display.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have discovered that the "Parameter file" slot is currently empty, even after expanding the window. Does this imply that I am unable to proceed without obtaining the parameter file from the original equipment manufacturer (OEM)?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TedTurner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems likely that they are attempting to utilize faceplates following Siemens standards, possibly because the original machinery and programs were created on a Siemens platform. This indicates a strong connection to German engineering and technology in their operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am curious if it is possible to retrieve the "Parameter file" directly from the panel. It seems that the HMI is reliant on this file to function properly. Can the parameter file be accessed through the panel interface?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TedTurner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are there parameters listed on the left panel? I am trying to recall without access to ME or SE.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There is, and it is vacant.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TedTurner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I'm not quite sure what to advise, but I do agree with plvlce. The tag in question is searching for a parameter file and will populate accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When I choose the *complete* global entity, this is what I observe:</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TedTurner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I currently do not have the ME and Rockwell software on hand, but I am confident that other members in this community will offer their insights and solutions. There are plenty of experienced individuals here who are familiar with both ME and Rockwell technologies and can help address any issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I've received great assistance from everyone thus far.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TedTurner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you tried clicking on the "parameters" on the left pane to see if anything appears, even if it doesn't show any visible changes? Is there a way to conceal or secure the list with a password? Just a thought to consider.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There appears to be no visible output. I'm curious if the macros are being utilized within the parameter list.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TedTurner</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When multiple objects are selected, fields containing multiple values among the objects may appear blank. This includes the Parameter File field. For example, the "Left" attribute may be empty even though all objects have Top, Left, Width, and Height attributes. It is essential to check and review the values in your FTView12 instance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheer on Ken as he goes for the win!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
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
<h4 class='text-dark'>FAQ: 1. What does tag 101.24 represent in PLC programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - Tag 101.24 in PLC programming could potentially represent a specific input or output point, a memory location, a variable, or a bit within a register. It is important to refer to the PLC program documentation or consult with the programmer to understand its exact significance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot a panel view tag discrepancy with PLC programming?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot a panel view tag discrepancy with PLC programming, you can start by verifying the tag properties in the panel view application and cross-referencing them with the PLC tags. Additionally, checking the logic in the PLC program that corresponds to the panel view tags can help identify any discrepancies or inconsistencies.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I determine which tag in the PLC is activated by a latched button?</h4>
<p class='text-muted'><strong>Answer:</strong> - To determine which tag in the PLC is activated by a latched button, you can analyze the logic in the PLC program that handles the button input. Look for any latching mechanisms or memory bits that store the button state. By tracing the logic associated with the button, you can identify the corresponding tag in the PLC programming.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What should I do if I encounter a tag in the panel view application that does not align with my PLC tags?</h4>
<p class='text-muted'><strong>Answer:</strong> - If you come across a tag in the panel view application that does not align with your PLC tags, you should investigate the tag properties in both systems to identify any discrepancies. It may be</p>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am seeking assistance with ensuring that the machine only operates when a user is logged in. If no user is present and someone attempts to operate the machine, I want to display a message saying Need to login first. Additionally, I aim to monitor the logged in/logged out">
    <meta name="keywords" content="monitoring user login, user logout on plc, panelview 5310 hmi, machine operation control, user authentication, logged in status, logged out status, plc monitoring, user presence detection, operation restriction, login prompt message, machine security">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/monitoring-user-login-logout-on-plc-using-panelview-5310-hmi">
    <title>Monitoring User Login/Logout on PLC Using PanelView 5310 HMI | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Monitoring User Login/Logout on PLC Using PanelView 5310 HMI | Oxmaint Community">
    <meta property="og:description" content="I am seeking assistance with ensuring that the machine only operates when a user is logged in. If no user is present and someone attempts to operate the machine, I want to display a message saying Need to login first. Additionally, I aim to monitor the logged in/logged out">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/monitoring-user-login-logout-on-plc-using-panelview-5310-hmi">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Monitoring User Login/Logout on PLC Using PanelView 5310 HMI | Oxmaint Community">
    <meta name="twitter:description" content="I am seeking assistance with ensuring that the machine only operates when a user is logged in. If no user is present and someone attempts to operate the machine, I want to display a message saying Need to login first. Additionally, I aim to monitor the logged in/logged out">
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
        "@id": "https://community.oxmaint.com/discussion-forum/monitoring-user-login-logout-on-plc-using-panelview-5310-hmi"
      },
      "headline": "Monitoring User Login/Logout on PLC Using PanelView 5310 HMI",
      "description": "I am seeking assistance with ensuring that the machine only operates when a user is logged in. If no user is present and someone attempts to operate the machine, I want to display a message saying Need to login first. Additionally, I aim to monitor the logged in/logged out",
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
      "datePublished": "2024-08-01",
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
                <h1 class="text-white">Monitoring User Login/Logout on PLC Using PanelView 5310 HMI</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">356</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">171</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am seeking assistance with ensuring that the machine only operates when a user is logged in. If no user is present and someone attempts to operate the machine, I want to display a message saying 'Need to login first'. Additionally, I aim to monitor the logged in/logged out status on the PLC. While the panel view restricts operation without a login, I still want to keep track of the status on the PLC. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>With the introduction of v7 firmware, multiple new features were added to PanelView 5000 terminals, all of which are currently operating on v9 firmware. If you are still using v5 or an earlier version, it is likely that you are missing out on essential Project Events and security functions. The recommended approach to updating the User or User Role on the PLC is through a Project Event triggered by periodic System tags (such as blink fast, medium, or slow). The RA Knowledgebase provides helpful examples demonstrating how to utilize Project Events to transfer status information from System tags to the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The new Forum format shortens URLs to the "Sign In" URL, which I find unappealing. However, you can easily search for keywords in the Knowledgebase to find a clear example of utilizing a Project Event to input a System Value into a String Tag in the PLC. For more information, refer to ID QA63058 with Access Levels TechConnectView Designer, which demonstrates how to write the current user name to the PLC upon login.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Ken, I will give it a try.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach expressed his dissatisfaction with the way URLs are displayed in the new Forum format, as they are shortened to the "Sign In" URL. However, users can still search for keywords in the Knowledgebase to find a clear example of using a Project Event to write a System Value into a String Tag in the PLC. ID: QA63058 | Access Levels: TechConnectView Designer: Writing the current user name to the PLC on login. This approach proved successful for Ken, who was pleasantly surprised by the various options available in the Local HMI tags. Thank you for sharing this information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Shivsrikakolum</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Roach mentioned his dissatisfaction with how URLs are displayed on the new Forum format, as it shortens them to the "Sign In" URL. However, users can search for relevant keywords in the Knowledgebase to find a clear example of how to use a Project Event to write a System Value into a String Tag in the PLC. The ID for this topic is QA63058, and the Access Levels available are TechConnectView Designer. This topic demonstrates how to write the current user name to the PLC upon login. Despite attempting to undo formatting on the hyperlink in a previous post, the URL still appeared shortened as "Sign In," causing frustration for Ken Roach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheRooster</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Xenforo automatically tries to preview links in the message text, which may be an issue for some users. However, there are several ways to address this problem. One way is to embed the URL within other text, such as ID:QA63058| Access Levels: TechConnect. Alternatively, you can use the actual URL as the text, as long as it's not identical to the link (e.g., using http instead of https). Another option is to use the [plain] tag to prevent the link from being parsed as a hyperlink. 

If you only want to display the actual URL without it "unfurling," you can use the following code:
[url unfurl="false"]Link[/url] 
For example: https://rockwellautomation.custhelp.com/app/answers/answer_view/a_id/1133571. This can help improve the overall appearance and functionality of the links in your messages.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the valuable insight! The PanelView 5000 offers numerous possibilities with System tags and Project Events. Many functions previously carried out with Global Connections in older PanelView models are now handled through Project Events. I have become adept at utilizing Project Events to trigger pop-ups. It is important to differentiate between the logged-in User and User Role when managing security settings. While the default user may be "Admin" with the role of "Administrator," multiple users can be assigned as Administrators. While I would appreciate a scripting option in PanelView 5000, I understand the rationale behind keeping the product user-friendly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>plvlce mentioned that Xenforo automatically attempts to preview hyperlinks in the message text, which can sometimes cause issues. There are a few ways to work around this. One method is to embed the URL within other text, such as: ID:QA63058| Access Levels: TechConnect. Alternatively, you can use the URL as the text itself, as long as it's not identical (e.g. using "http" instead of "https"): http://rockwellautomation.custhelp.com/app/answers/answer_view/a_id/1133571. Another option is to use the [plain] tag to prevent the link from being parsed as a hyperlink. 

If the issue is with the URL unfurling, a better solution is to type the URL as follows: [url unfurl="false"]Link[/url]. For example, if you want to display the actual URL without it unfurling, you can use this method. Thank you for providing this helpful information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>TheRooster</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I ensure that the machine only operates when a user is logged in?
- You can achieve this by implementing a system where the machine operation is restricted unless a user is logged in. This can involve displaying a message such as 'Need to login first' if someone tries to operate the machine without being logged in.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Is it possible to monitor the logged in/logged out status on the PLC even if the PanelView restricts operation without a login?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can monitor the logged in/logged out status on the PLC by setting up appropriate monitoring and communication mechanisms between the PanelView HMI and the PLC. This will allow you to keep track of user login/logout status even if the PanelView restricts operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What steps can I take to track the user login/logout status on the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To track the user login/logout status on the PLC, you can implement a system that communicates the login/logout information from the PanelView HMI to the PLC. This can involve setting up data exchange protocols and logic in the PLC to monitor and update the user status accordingly.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I integrate user authentication with machine operation control using PanelView 5310 HMI?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can integrate user authentication with machine operation control by configuring the PanelView 5310 HMI to require login credentials before allowing access to machine operations. Additionally, you can set up communication between the HMI and PLC to monitor and control user access based on login</p>
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

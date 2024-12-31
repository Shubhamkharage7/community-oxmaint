
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am currently facing an issue with my Cimplicity v10 project that has around 7 to 8k tags communicating with an AB PLC through OPC and Rslinx Classic. The problem arises when I start adding more tags to the project, as Cimplicity is unable to read them">
    <meta name="keywords" content="cimplicity v10 tag limit issue, troubleshooting cimplicity v10, cimplicity v10 opc communication problem, ab plc tag limit, rslinx classic communication issue, 6">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-cimplicity-v10-tag-limit-issue-with-ab-plc-through-opc-communication">
    <title>Troubleshooting Cimplicity v10 Tag Limit Issue with AB PLC through OPC Communication | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Cimplicity v10 Tag Limit Issue with AB PLC through OPC Communication | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am currently facing an issue with my Cimplicity v10 project that has around 7 to 8k tags communicating with an AB PLC through OPC and Rslinx Classic. The problem arises when I start adding more tags to the project, as Cimplicity is unable to read them">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-cimplicity-v10-tag-limit-issue-with-ab-plc-through-opc-communication">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Cimplicity v10 Tag Limit Issue with AB PLC through OPC Communication | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am currently facing an issue with my Cimplicity v10 project that has around 7 to 8k tags communicating with an AB PLC through OPC and Rslinx Classic. The problem arises when I start adding more tags to the project, as Cimplicity is unable to read them">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-cimplicity-v10-tag-limit-issue-with-ab-plc-through-opc-communication"
      },
      "headline": "Troubleshooting Cimplicity v10 Tag Limit Issue with AB PLC through OPC Communication",
      "description": "Hello everyone, I am currently facing an issue with my Cimplicity v10 project that has around 7 to 8k tags communicating with an AB PLC through OPC and Rslinx Classic. The problem arises when I start adding more tags to the project, as Cimplicity is unable to read them",
      "author": {
        "@type": "Person",
        "name": "Eugene_k510"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-24",
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
                <h1 class="text-white">Troubleshooting Cimplicity v10 Tag Limit Issue with AB PLC through OPC Communication</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Eugene_k510</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">461</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">164</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am currently facing an issue with my Cimplicity v10 project that has around 7 to 8k tags communicating with an AB PLC through OPC and Rslinx Classic. The problem arises when I start adding more tags to the project, as Cimplicity is unable to read them from the PLC. The tags in my project involve various datatypes such as BOOL, DINT, INT, and REAL. I am wondering if there is a limit on the number of tags allowed for communication through the OPC driver in Cimplicity, as my project functions properly when I reduce the number of tags. Can anyone provide insight on this issue?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Eugene, it's important to note that there is a limit to the number of points you can accumulate. I recommend checking your license to see what the points limit is. I once encountered this issue myself and reached the limit, but was able to resolve it by upgrading my license.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JunQ</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello JunQ, thank you for your response. I am currently encountering a recurring issue, as depicted in the attachment provided. The error I am facing is COPCCallback::OnDataChange, which occurs when Cimplicity is browsing tags from my PLC and subsequently marks it as disconnected. Despite searching the manual for a resolution, I have been unable to find any information. Can you provide insight into the meaning of this error?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Eugene_k510</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I'm experiencing an OPC callback failure, which is a new issue for me. It's important to review the OPC configuration on both the server and Cimplicity. When it comes to OPC communication, it is recommended to use either unsolicited or unsolicited on change points update criteria.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JunQ</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
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
<p class='text-muted'><strong>Answer:</strong> 1. Is there a limit on the number of tags allowed for communication through the OPC driver in Cimplicity v10?
- Yes, there may be a limit on the number of tags that can be communicated through the OPC driver in Cimplicity v10, as increasing the number of tags can lead to communication issues with the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I troubleshoot the tag limit issue in Cimplicity v10 when communicating with an AB PLC through OPC?</h4>
<p class='text-muted'><strong>Answer:</strong> - To troubleshoot the tag limit issue, you can try reducing the number of tags in the project to see if communication improves. You can also check for any specific limitations or restrictions mentioned in the Cimplicity v10 documentation regarding tag communication.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are the common datatypes used in tags when communicating with an AB PLC through OPC in Cimplicity v10?</h4>
<p class='text-muted'><strong>Answer:</strong> - Common datatypes used in tags for communication with an AB PLC through OPC in Cimplicity v10 include BOOL, DINT, INT, and REAL, among others.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Are there any best practices for optimizing tag communication between Cimplicity v10 and an AB PLC through OPC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Best practices for optimizing tag communication may include organizing tags efficiently, monitoring network traffic, checking for any OPC server limitations, and ensuring compatibility between Cimplicity v10 and the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can I ensure proper communication between Cimplicity v10 and an AB PLC through OPC when dealing with a large number of tags?</h4>
<p class='text-muted'><strong>Answer:</strong> - Ensuring</p>
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

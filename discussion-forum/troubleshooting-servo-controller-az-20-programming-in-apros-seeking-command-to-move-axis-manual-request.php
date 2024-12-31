
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, we are currently facing an issue with the servo controller AZ 20 (an older model from AMK). The programming for it is done in APROS software. I am able to access the offline program and view the AWL file using notepad. However, I am in need of">
    <meta name="keywords" content="servo controller az 20, troubleshooting servo controller, apros software, awl file, programming manual, move axis command, setpoint position, multiple axes, older amk model, detailed documentation, offline program, programming software, programming knowledge">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-servo-controller-az-20-programming-in-apros-seeking-command-to-move-axis-manual-request">
    <title>Troubleshooting Servo Controller AZ 20 Programming in APROS: Seeking Command to Move Axis - Manual Request | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Servo Controller AZ 20 Programming in APROS: Seeking Command to Move Axis - Manual Request | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, we are currently facing an issue with the servo controller AZ 20 (an older model from AMK). The programming for it is done in APROS software. I am able to access the offline program and view the AWL file using notepad. However, I am in need of">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-servo-controller-az-20-programming-in-apros-seeking-command-to-move-axis-manual-request">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Servo Controller AZ 20 Programming in APROS: Seeking Command to Move Axis - Manual Request | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, we are currently facing an issue with the servo controller AZ 20 (an older model from AMK). The programming for it is done in APROS software. I am able to access the offline program and view the AWL file using notepad. However, I am in need of">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-servo-controller-az-20-programming-in-apros-seeking-command-to-move-axis-manual-request"
      },
      "headline": "Troubleshooting Servo Controller AZ 20 Programming in APROS: Seeking Command to Move Axis - Manual Request",
      "description": "Hello everyone, we are currently facing an issue with the servo controller AZ 20 (an older model from AMK). The programming for it is done in APROS software. I am able to access the offline program and view the AWL file using notepad. However, I am in need of",
      "author": {
        "@type": "Person",
        "name": "sarana.automation"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-04",
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
                <h1 class="text-white">Troubleshooting Servo Controller AZ 20 Programming in APROS: Seeking Command to Move Axis - Manual Request</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>sarana.automation</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>4 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4033</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">426</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, we are currently facing an issue with the servo controller AZ 20 (an older model from AMK). The programming for it is done in APROS software. I am able to access the offline program and view the AWL file using notepad. However, I am in need of detailed documentation from the programming manual. Specifically, I am looking for the command that will move the axis to the setpoint position, as this controller can manage multiple axes. Despite searching for information online, I have not been able to find much on this topic. If anyone has experience with this controller and is willing to share their knowledge or provide the programming manual, I would greatly appreciate it. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello there. I am currently holding AZ 20 modules that communicate via Profibus. Unfortunately, the AZ-PS5 board is malfunctioning. I am looking to upload the program using APROS or AIPAR software, but I do not have access to these programs. Could you kindly provide me with a copy?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mysterious5527</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for help with an issue regarding the AZ 20 servo controller? Our team at sarana.automation is currently facing difficulties with this old AMK Servo controller and its programming in APROS software. While we can access the offline program, we are in need of the programming manual for further guidance. Specifically, we are looking for the command to move the axis to the setpoint position, as this controller manages multiple axes. Despite our efforts, information online is limited. If you have experience with this controller or access to the programming manual, your help would be greatly appreciated. Thank you in advance for any assistance you can provide.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mysterious5527</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In need of assistance</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mysterious5527</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that there is a shortage of apros programs available.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mysterious5527</span></li>
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
<h4 class='text-dark'>FAQ: What is the specific issue being faced with the servo controller AZ 20?</h4>
<p class='text-muted'><strong>Answer:</strong> The user is seeking information on the command that will move the axis to the setpoint position in the programming of the servo controller AZ 20.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: In which software is the programming for the servo controller AZ 20 done?</h4>
<p class='text-muted'><strong>Answer:</strong> The programming for the servo controller AZ 20 is done in APROS software.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: Where can the user access the offline program and view the AWL file for the servo controller AZ 20?</h4>
<p class='text-muted'><strong>Answer:</strong> The user can access the offline program and view the AWL file for the servo controller AZ 20 using notepad.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What type of documentation is the user seeking for the programming of the servo controller AZ 20?</h4>
<p class='text-muted'><strong>Answer:</strong> The user is seeking detailed documentation from the programming manual, specifically looking for the command that will move the axis to the setpoint position.</p>
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

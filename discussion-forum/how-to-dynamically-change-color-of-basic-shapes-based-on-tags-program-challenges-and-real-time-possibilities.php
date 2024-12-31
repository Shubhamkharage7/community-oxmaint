
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I am looking to dynamically change the color of a basic shape, such as a circle, based on the values of different tags (e.g. HSD, HI, LO, LSD). Despite creating a sophisticated program for this purpose, I am facing challenges with its functionality. The program code and a text">
    <meta name="keywords" content="dynamically change color, basic shapes, tags, program challenges, real-time possibilities, program code, text document, screen image, allen bradley viewer, hmi, plc, hsd, hi, lo, lsd, run real-time program">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-dynamically-change-color-of-basic-shapes-based-on-tags-program-challenges-and-real-time-possibilities">
    <title>How to Dynamically Change Color of Basic Shapes Based on Tags: Program Challenges and Real-time Possibilities | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Dynamically Change Color of Basic Shapes Based on Tags: Program Challenges and Real-time Possibilities | Oxmaint Community">
    <meta property="og:description" content="I am looking to dynamically change the color of a basic shape, such as a circle, based on the values of different tags (e.g. HSD, HI, LO, LSD). Despite creating a sophisticated program for this purpose, I am facing challenges with its functionality. The program code and a text">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-dynamically-change-color-of-basic-shapes-based-on-tags-program-challenges-and-real-time-possibilities">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Dynamically Change Color of Basic Shapes Based on Tags: Program Challenges and Real-time Possibilities | Oxmaint Community">
    <meta name="twitter:description" content="I am looking to dynamically change the color of a basic shape, such as a circle, based on the values of different tags (e.g. HSD, HI, LO, LSD). Despite creating a sophisticated program for this purpose, I am facing challenges with its functionality. The program code and a text">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-dynamically-change-color-of-basic-shapes-based-on-tags-program-challenges-and-real-time-possibilities"
      },
      "headline": "How to Dynamically Change Color of Basic Shapes Based on Tags: Program Challenges and Real-time Possibilities",
      "description": "I am looking to dynamically change the color of a basic shape, such as a circle, based on the values of different tags (e.g. HSD, HI, LO, LSD). Despite creating a sophisticated program for this purpose, I am facing challenges with its functionality. The program code and a text",
      "author": {
        "@type": "Person",
        "name": "Jay's"
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
                <h1 class="text-white">How to Dynamically Change Color of Basic Shapes Based on Tags: Program Challenges and Real-time Possibilities</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Jay's</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">266</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">469</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I am looking to dynamically change the color of a basic shape, such as a circle, based on the values of different tags (e.g. HSD, HI, LO, LSD). Despite creating a sophisticated program for this purpose, I am facing challenges with its functionality. The program code and a text document are provided below, along with a screen image for reference. I am wondering if there is something crucial that I might be overlooking. Additionally, I am curious if it is possible to run a real-time version of the program, similar to using the Allen Bradley viewer, while remotely connected to the HMI and PLC. 

Program Code:
if(HSD) return 1;
if(HI) return 2;
if(LO) return 3;
if(LSD) return 4;
else {
return 5;
}</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking to explore remote viewing, I'm happy to assist with that aspect. As for adjusting the colors, I may need to experiment a bit as it's not a method I've used before. To enable remote viewing, navigate to the Web Server settings and activate it, then head to the features tab to enable both Remote Viewing and remote Control functionalities. From there, open a web browser and enter the IP address assigned to your HMI. Your browser may display a security warning, but you'll need to proceed despite this hurdle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When setting the visibility of an element, make sure to use the Visible property instead of adjusting the Figure/Fill Format/Tag Back settings. Also, if you want to change the color of a Tag value displayed on the screen, ensure that 'Get From Tag' includes Colors selected. I have created a basic program that I can share, but note that the emulator is not functional in version 3.1, so I developed it using version 3.0. The emulator does work in version 3.2.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>BryanG</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Your advice was right on point and everything seems to be working properly. By inputting a simulation value between 1-5, I am able to update the display and have the color reflect the state. I also included the scaled data on the circle to show both the value and the corresponding state. Check out the pictures. Thanks for the information, it's exactly what I needed to achieve.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jay's</span></li>
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
<p class='text-muted'><strong>Answer:</strong> 1. How can I dynamically change the color of a basic shape based on tags like HSD, HI, LO, and LSD?
- You can achieve this by using conditional statements in your program code to map each tag to a specific color value for the shape.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What challenges can one face when trying to dynamically change shape colors based on tags?</h4>
<p class='text-muted'><strong>Answer:</strong> - Challenges may arise in ensuring the correct functionality of the program code, mapping tags to color values accurately, and handling unexpected scenarios.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Is there something crucial that might be overlooked when facing challenges in dynamically changing shape colors based on tags?</h4>
<p class='text-muted'><strong>Answer:</strong> - It is important to carefully review the logic in your program code, ensure proper tag-value associations, and consider any potential errors in the implementation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Is it possible to run a real-time version of the program for dynamically changing shape colors while remotely connected to HMI and PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to create a real-time version of the program that allows for dynamic color changes based on tags and can be accessed remotely through tools like the Allen Bradley viewer.</p>
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

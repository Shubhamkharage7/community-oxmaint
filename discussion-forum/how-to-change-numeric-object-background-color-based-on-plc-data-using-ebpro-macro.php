
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am a beginner in using the EBpro program and I am looking for a solution to change the background color of a numeric object based on data from a plc. Specifically, I need the background to turn yellow when the data hits a High or Low limit,">
    <meta name="keywords" content="ebpro program, numeric object background color, plc data, ebpro macro, high limit, low limit, hhigh limit, llow limit, mt8150xe panel, object condition menu, bitlamp, blinking stop, reset object state">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-change-numeric-object-background-color-based-on-plc-data-using-ebpro-macro">
    <title>How to Change Numeric Object Background Color Based on PLC Data Using EBpro Macro | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Change Numeric Object Background Color Based on PLC Data Using EBpro Macro | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am a beginner in using the EBpro program and I am looking for a solution to change the background color of a numeric object based on data from a plc. Specifically, I need the background to turn yellow when the data hits a High or Low limit,">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-change-numeric-object-background-color-based-on-plc-data-using-ebpro-macro">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Change Numeric Object Background Color Based on PLC Data Using EBpro Macro | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am a beginner in using the EBpro program and I am looking for a solution to change the background color of a numeric object based on data from a plc. Specifically, I need the background to turn yellow when the data hits a High or Low limit,">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-change-numeric-object-background-color-based-on-plc-data-using-ebpro-macro"
      },
      "headline": "How to Change Numeric Object Background Color Based on PLC Data Using EBpro Macro",
      "description": "Greetings, I am a beginner in using the EBpro program and I am looking for a solution to change the background color of a numeric object based on data from a plc. Specifically, I need the background to turn yellow when the data hits a High or Low limit,",
      "author": {
        "@type": "Person",
        "name": "Nafir"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-11-15",
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
                <h1 class="text-white">How to Change Numeric Object Background Color Based on PLC Data Using EBpro Macro</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Nafir</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">482</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">384</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am a beginner in using the EBpro program and I am looking for a solution to change the background color of a numeric object based on data from a plc. Specifically, I need the background to turn yellow when the data hits a High or Low limit, and red when it hits a HHigh or LLow limit. The device I am working with is the MT8150XE panel, and it seems that the Object Condition menu is not available. I am attempting to create a macro to achieve this. Currently, I am able to activate a BitLamp with two states, but I am struggling to make it stop blinking. I am wondering if there is a way to reset the state of an object or shape via a macro. Alternatively, I have also considered placing shapes or objects behind the numeric object and addressing them accordingly as a workaround. However, I am exploring other options to accomplish this task.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Experience the innovative 'Word Lamp' and customize it to fit your desired number of states.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>blkfalc4</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello, I need help setting up a feature and I'm feeling a bit confused. I have an idea to use two rectangles and assign register status/values to both. When I call the address with a macro like LB 0, "SetData(On, "Local HMI", LB, 0, 1)", how can I make one rectangle disappear without hiding the other one? Also, can you explain how SETBITOFF works? I've tried reading the manuals but I'm still unsure. I believe SETBITOFF could be the solution as both rectangles use registers. If I can turn off the bit, they should disappear until the bit is turned on again. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nafir</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey everyone, I have come up with a solution using two boolean variables - On and Off. Initially, I retrieve data from a numeric object and convert it to BCD format called "LW_BCD" using the GetData function. Based on the input data, I control the visibility of ellipse objects by assigning them the Register status/value. By setting On to TRUE and Off to FALSE, I am able to turn on and off the ellipse objects respectively using the SetData function. It is crucial to ensure the correct device data format is set in the numeric object's properties, such as 32-bit Float in my case. Below is the test macro I have created, and I would greatly appreciate any suggestions or feedback.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nafir</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I change the background color of a numeric object based on PLC data in EBpro using a macro?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To change the background color of a numeric object based on PLC data using a macro in EBpro, you can create a macro that checks the data and sets the color accordingly. You may need to use conditional statements in the macro to determine when to change the background color.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  Is it possible to reset the state of an object or shape via a macro in EBpro?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, it is possible to reset the state of an object or shape via a macro in EBpro. You can create a macro that specifically handles the resetting of the state of an object or shape based on certain conditions or triggers.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Can I use shapes or objects placed behind a numeric object to change its background color based on PLC data in EBpro?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, you can consider placing shapes or objects behind the numeric object and addressing them accordingly to change the background color based on PLC data in EBpro. This can serve as a workaround solution if you encounter limitations with directly changing the background color of the numeric object itself.</p>
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

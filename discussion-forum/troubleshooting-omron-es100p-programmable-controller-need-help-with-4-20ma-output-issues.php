
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, good morning! I hope this message is not too off-topic, but I am dealing with a programmable controller issue. Specifically, I am experiencing problems with the 4-20ma output on my Omron ES100P temperature controller, which is used in a batch burn off oven. The controller has various profiles">
    <meta name="keywords" content="omron es100p, programmable controller, troubleshooting, 4-20ma output, batch burn off oven, external output relay board, es/tools configuration software, dos, parameters, spare controller, faulty unit, temperature controller">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-omron-es100p-programmable-controller-need-help-with-4-20ma-output-issues">
    <title>Troubleshooting Omron ES100P Programmable Controller: Need Help with 4-20ma Output Issues | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Omron ES100P Programmable Controller: Need Help with 4-20ma Output Issues | Oxmaint Community">
    <meta property="og:description" content="Hello, good morning! I hope this message is not too off-topic, but I am dealing with a programmable controller issue. Specifically, I am experiencing problems with the 4-20ma output on my Omron ES100P temperature controller, which is used in a batch burn off oven. The controller has various profiles">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-omron-es100p-programmable-controller-need-help-with-4-20ma-output-issues">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Omron ES100P Programmable Controller: Need Help with 4-20ma Output Issues | Oxmaint Community">
    <meta name="twitter:description" content="Hello, good morning! I hope this message is not too off-topic, but I am dealing with a programmable controller issue. Specifically, I am experiencing problems with the 4-20ma output on my Omron ES100P temperature controller, which is used in a batch burn off oven. The controller has various profiles">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-omron-es100p-programmable-controller-need-help-with-4-20ma-output-issues"
      },
      "headline": "Troubleshooting Omron ES100P Programmable Controller: Need Help with 4-20ma Output Issues",
      "description": "Hello, good morning! I hope this message is not too off-topic, but I am dealing with a programmable controller issue. Specifically, I am experiencing problems with the 4-20ma output on my Omron ES100P temperature controller, which is used in a batch burn off oven. The controller has various profiles",
      "author": {
        "@type": "Person",
        "name": "dalem"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-27",
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
                <h1 class="text-white">Troubleshooting Omron ES100P Programmable Controller: Need Help with 4-20ma Output Issues</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalem</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2647</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">469</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, good morning! I hope this message is not too off-topic, but I am dealing with a programmable controller issue. Specifically, I am experiencing problems with the 4-20ma output on my Omron ES100P temperature controller, which is used in a batch burn off oven. The controller has various profiles programmed in and an external output relay board for additional outputs. 

I am seeking advice or experiences from individuals who are familiar with this controller or the ES/TOOLS configuration software (DOS). I have been searching for the software without any luck so far. My goal is to access, record, or save the parameters being used. I have managed to find a used controller, but without retrieving information from the faulty unit, I am unable to utilize the spare controller effectively.

Any assistance or guidance would be greatly appreciated. I apologize if this topic is not entirely suitable for this forum. Thank you for your understanding.

Dale</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently discovered a backup dating back to 2005 containing the ES Tools Windows version with a file size of approximately 3 megabytes. If interested, please message me your email address so I can send it to you. It's uncertain how much support you'll receive, as these controllers were known for being challenging to program. Feel free to reach out for assistance. #ES Tools #Windows #controller programming #support</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gtsuport</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your message. I am currently on my way to meet you. I will need to create a cable, which should not be a difficult task. I have noticed that there are factory cables available on eBay as well. It is common for individuals, like myself, to provide our own support, especially for older products that have limited manufacturer support. Thank you once again for your assistance. - Dale</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalem</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The manual for the software can be accessed at https://www.edata.omron.com.au/eData/TCs/H030AA1.pdf. Currently in progress with the cable setup. Keep checking for updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>gtsuport</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you have the ES Tool available for purchase?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DETROJATUSHAR</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>gtsuport mentioned that this dates back a long time! I came across a 2005 backup containing the ES Tools version for Windows. The file size is around 3 MB. Send me your email address via private message so I can share it with you. I'm unsure about the level of support you may receive. These controllers were not the easiest to program. gtsu support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bene</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Good afternoon! Could you also send me that software? I'm experiencing the same issue with the es100p controller.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bene</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>gtsuport mentioned stumbling upon an old backup from 2005 containing the ES Tools Windows version software. The file is approximately 3 megabytes in size. If interested, please DM your email address for the software to be sent to you. Please note that support may be limited as programming these controllers was not straightforward. Good afternoon! I am also facing a similar issue with the es100p controller and would greatly appreciate if you could share the software with me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bene</span></li>
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
<h4 class='text-dark'>FAQ: 1. FAQ: What is the specific issue Dale is facing with the 4-20ma output on the Omron ES100P programmable controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Dale is experiencing problems with the 4-20ma output on his Omron ES100P temperature controller, which is used in a batch burn off oven.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. FAQ: What additional components does Dale mention using with the controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Dale mentions using an external output relay board for additional outputs with the programmable controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. FAQ: What software is Dale looking for to troubleshoot the Omron ES100P controller?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Dale is looking for the ES/TOOLS configuration software (DOS) to access, record, or save the parameters being used on the controller.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. FAQ: How is Dale planning to utilize the spare controller he has found?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Dale is unable to utilize the spare controller effectively without retrieving information from the faulty unit first.</p>
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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently collecting data from an SEL-710 relay using an Ethernet connection. The data is being transmitted from the SEL-710 to a Stratix 5400 switch, and then to a Prosoft card model MVI56E MNET. While we initially received the data without any issues, we have encountered a">
    <meta name="keywords" content="prosoft card troubleshooting, stagnant data issue, sel-710 relay, ethernet connection, stratix 5400 switch, mvi56e mnet, data transmission problem, configuration builder setup, sel and prosoft device mapping, hardware investigation">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-stagnant-data-issue-with-prosoft-card-how-to-resolve-prosoft">
    <title>Troubleshooting Stagnant Data Issue with Prosoft Card: How to Resolve更新されないProsoftデータを解決する方法 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Stagnant Data Issue with Prosoft Card: How to Resolve更新されないProsoftデータを解決する方法 | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently collecting data from an SEL-710 relay using an Ethernet connection. The data is being transmitted from the SEL-710 to a Stratix 5400 switch, and then to a Prosoft card model MVI56E MNET. While we initially received the data without any issues, we have encountered a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-stagnant-data-issue-with-prosoft-card-how-to-resolve-prosoft">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Stagnant Data Issue with Prosoft Card: How to Resolve更新されないProsoftデータを解決する方法 | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently collecting data from an SEL-710 relay using an Ethernet connection. The data is being transmitted from the SEL-710 to a Stratix 5400 switch, and then to a Prosoft card model MVI56E MNET. While we initially received the data without any issues, we have encountered a">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-stagnant-data-issue-with-prosoft-card-how-to-resolve-prosoft"
      },
      "headline": "Troubleshooting Stagnant Data Issue with Prosoft Card: How to Resolve更新されないProsoftデータを解決する方法",
      "description": "Hello, I am currently collecting data from an SEL-710 relay using an Ethernet connection. The data is being transmitted from the SEL-710 to a Stratix 5400 switch, and then to a Prosoft card model MVI56E MNET. While we initially received the data without any issues, we have encountered a",
      "author": {
        "@type": "Person",
        "name": "sjatx72"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-22",
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
                <h1 class="text-white">Troubleshooting Stagnant Data Issue with Prosoft Card: How to Resolve更新されないProsoftデータを解決する方法</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>sjatx72</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>3 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">141</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">253</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently collecting data from an SEL-710 relay using an Ethernet connection. The data is being transmitted from the SEL-710 to a Stratix 5400 switch, and then to a Prosoft card model MVI56E MNET. While we initially received the data without any issues, we have encountered a problem where the data is not updating and remains stagnant. Despite ensuring that the configuration builder is properly set up and that the mapping between the SEL and Prosoft devices is accurate, the issue persists. We have yet to investigate the hardware, but I did observe that the APP light on the Prosoft card flashes a dim red color every few seconds. To troubleshoot, I am considering replacing the card as a quick test before examining the switch if the problem persists. Your insights would be greatly appreciated. Thank you, Scott.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a possibility that the settings on the SEL relay have been altered? The default setting does not have Modbus enabled. I have not utilized a Prosoft card to access them, but I have experience working with an installation that utilized an OSI-PI interface to monitor switch gear and SEL relays through a historian. I have encountered failures with Ethernet switches in the past.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Having worked with numerous SEL relays using MVI56E-MNETC and MNETCR cards, I have never encountered a module failure. I strongly suggest utilizing the diagnostic viewer in Prosoft Configuration Builder to investigate any potential issues with your client connection(s).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lmscar12</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the responses. Initially, we were focusing on the holding registers within the SEL system, but it turns out we should have been examining the input registers instead.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sjatx72</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is the data not updating on the Prosoft card despite proper configuration settings and accurate device mapping?</h4>
<p class='text-muted'><strong>Answer:</strong> Stagnant data issues can occur due to various reasons such as communication errors, hardware malfunctions, or incorrect settings. Troubleshooting steps may include checking the hardware components, verifying the configuration settings, and ensuring proper communication between devices.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What does a dim red flashing APP light on the Prosoft card indicate?</h4>
<p class='text-muted'><strong>Answer:</strong> A dim red flashing APP light on the Prosoft card could signal a potential issue with the card or its connection. It's recommended to consult the user manual or contact the manufacturer for specific troubleshooting steps related to the APP light indicator.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What steps can be taken to resolve stagnant data issues with a Prosoft card like the MVI56E MNET model?</h4>
<p class='text-muted'><strong>Answer:</strong> To address stagnant data problems, you can start by checking the hardware components, verifying the configuration settings for both the Prosoft card and connected devices, ensuring proper communication protocols are in place, and considering troubleshooting steps like replacing the card if necessary.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  Is it advisable to replace the Prosoft card as a quick test if the data stagnation issue persists?</h4>
<p class='text-muted'><strong>Answer:</strong> If other troubleshooting steps have been exhausted and the data issue still persists, replacing the Prosoft card can be a valid quick test to determine if the problem lies with the card itself. Ensure to</p>
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

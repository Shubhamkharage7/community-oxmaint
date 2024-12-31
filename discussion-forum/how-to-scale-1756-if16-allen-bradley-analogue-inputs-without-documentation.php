
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am using a ControlLogix system equipped with 1756-IF16 analogue inputs. I am unable to scale the inputs directly at the card as there is a need to adjust the scaling from the HMI interface. The configuration of the IF16 is set as follows: Communication Format: Integer Data">
    <meta name="keywords" content="1756-if16, allen-bradley, analogue inputs, scaling, controllogix, hmi interface, configuration, communication format, integer data, single-ended mode, input range, raw values, 4ma, 20">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-scale-1756-if16-allen-bradley-analogue-inputs-without-documentation">
    <title>How to Scale 1756-IF16 Allen-Bradley Analogue Inputs Without Documentation | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Scale 1756-IF16 Allen-Bradley Analogue Inputs Without Documentation | Oxmaint Community">
    <meta property="og:description" content="Hello, I am using a ControlLogix system equipped with 1756-IF16 analogue inputs. I am unable to scale the inputs directly at the card as there is a need to adjust the scaling from the HMI interface. The configuration of the IF16 is set as follows: Communication Format: Integer Data">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-scale-1756-if16-allen-bradley-analogue-inputs-without-documentation">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Scale 1756-IF16 Allen-Bradley Analogue Inputs Without Documentation | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am using a ControlLogix system equipped with 1756-IF16 analogue inputs. I am unable to scale the inputs directly at the card as there is a need to adjust the scaling from the HMI interface. The configuration of the IF16 is set as follows: Communication Format: Integer Data">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-scale-1756-if16-allen-bradley-analogue-inputs-without-documentation"
      },
      "headline": "How to Scale 1756-IF16 Allen-Bradley Analogue Inputs Without Documentation",
      "description": "Hello, I am using a ControlLogix system equipped with 1756-IF16 analogue inputs. I am unable to scale the inputs directly at the card as there is a need to adjust the scaling from the HMI interface. The configuration of the IF16 is set as follows: Communication Format: Integer Data",
      "author": {
        "@type": "Person",
        "name": "Rich0147"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-09",
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
                <h1 class="text-white">How to Scale 1756-IF16 Allen-Bradley Analogue Inputs Without Documentation</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Rich0147</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>14 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">679</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">236</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am using a ControlLogix system equipped with 1756-IF16 analogue inputs. I am unable to scale the inputs directly at the card as there is a need to adjust the scaling from the HMI interface. The configuration of the IF16 is set as follows: Communication Format: Integer Data Single-Ended Mode, Input Range: 0-20mA. Can you please provide the Raw Values output by the card at 4mA and 20mA? Unfortunately, this information does not seem to be documented anywhere.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>To enhance scalability, consider using the module scaling feature to assign a numeric value ranging from 0 to 2000. Allow the module to take care of this initial scaling process before implementing your own customizable scaling code accessible via the HMI. Does this approach seem sensible to you?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The default scaling for the card is set at %, with the channel data raw numbers being in floating point format. You have the flexibility to adjust the card scaling to reflect 0.0 = 0mA and 20.0 = 20mA, displaying these values on the screen. Additionally, you can utilize the SCP AOI and easily edit its tag members from the HMI for convenient runtime scaling.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the feedback. I discovered that when 4mA is equal to -20030, and when 20mA is equal to 30921.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rich0147</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rich0147 expressed his gratitude for the feedback received. Upon investigation, it was discovered that the values 4mA=-20030 and 20mA=30921 were not default settings. These values can be adjusted to be more user-friendly, or displayed as raw counts on the HMI. It is recommended to modify the values to simplify the user experience, eliminating the need to work with negative raw minimums. It is suggested to check the firmware version on the controller, as the version observed (31) included real numbers for the IF16 data values.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>OkiePC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The integer mode does not support scaling. The raw scaling for 1756-if16 is as follows: 0mA = -32768 and 21mA = 32767. For more information, refer to page 31 of the user manual.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>chelton</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you wondering why you should opt for Integer mode over Floating Point Data? By using FP mode, you can easily implement scaling in engineering units directly on the card, eliminating the need to handle RA. This makes FP a superior choice, even if you prefer to handle scaling within the code rather than utilizing internal module scaling.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Contr_Conn</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a query, Rich0147 shared their insights. They discovered that 4mA translates to -20030, while 20mA equals to 30921. However, this method has its flaws. It is advisable to reintroduce the module using floating point numbers and adjust the inputs to more significant raw values such as 4ma = 4000 and 20ma = 20000. By doing so, you will obtain raw values that correspond to the 4-20ma signal, making troubleshooting easier. Additionally, you can still utilize the HMI to convert the raw values into engineering units.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee advises against the current method being used, suggesting that instead, the module should be re-added using float and the inputs scaled to more meaningful raw values, such as 4ma being equivalent to 4000 and 20ma to 20000. By doing so, you will have raw values that mirror the 4-20ma signal, making troubleshooting easier. Additionally, the HMI can still be utilized to convert these raw values to engineering units. Do you think this approach might potentially diminish signal resolution?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rich0147</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rich0147 pointed out potential signal resolution issues with this method. The resolution is determined by the 16-bit A to D converter. A float can offer more precision compared to an integer, with 2^16 equating to 65,000 counts. Therefore, using a float with a range of 4000.0 to 20000.0 provides a higher resolution of 160,000 possible counts. The A to D converter is the determining factor for resolution, not the scaling. It is crucial to configure the module as float for optimal results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the feedback. I have made the switch to Floating Point as recommended. Can anyone provide insights into why certain channels are showing a low value without indicating under-range when open-loop (disconnected)?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rich0147</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After receiving helpful responses, Rich0147 implemented the recommended switch to Floating Point. However, there is still a mystery surrounding why certain channels are showing a minimal value instead of indicating under-range when open-loop (disconnected). Any suggestions on whether to use 4-20 or 0-20? Feel free to click to expand the discussion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee asked the question: "4-20 or 0-20?" Find out by clicking to expand the answer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rich0147</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Do you know if your sensors are set up as 4-20ma or 0-20ma? Is your card programmed for single-ended or differential input? If your sensors operate on a 4-20ma range, a reading of 2000 could signal a problem. For sensors using a 0-20ma range, utilize the wire off function on the device. This feature functions uniquely depending on the module's configuration. For more information, refer to the analog user manual section pertaining to this topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you once more for your feedback. All instruments operate on a 4-20mA signal, with the card being configured single-ended. I am able to implement the solution you provided, although I find it unusual that the in-built Underrange flag is not functioning on any of the even numbered channels, such as CH0, CH2, CH4, CH6, CH8, CH10, CH12, and CH14.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rich0147</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I scale analogue inputs from a 1756-IF16 card without direct documentation?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To scale analogue inputs without direct documentation, you can adjust the scaling from the HMI interface instead of at the card itself.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What is the Communication Format and Input Range configuration of the 1756-IF16 card mentioned in the discussion?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The Communication Format is set as Integer Data Single-Ended Mode, and the Input Range is 0-20mA.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: What are the Raw Values output by the 1756-IF16 card at 4mA and 20mA input?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Unfortunately, the raw values output by the card at 4mA and 20mA are not documented.</p>
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

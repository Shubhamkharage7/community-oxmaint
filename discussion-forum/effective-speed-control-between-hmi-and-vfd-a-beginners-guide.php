
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Looking for help with integrating Eztouch HMI EZ3-T6C-EE, Allen Bradley 5/03 PLC, 1746-NIO4V Analog in/out, and Altivar 31 VFD? As a newcomer to this field, I have the necessary software like Rslogix 500, Rslogix5000, Studio5000, and RSlinx. However, I am facing a challenge in controlling the VFD speeds using">
    <meta name="keywords" content="speed control integration, hmi vfd communication, eztouch hmi allen bradley plc integration, altivar 31 vfd speed regulation, rslogix 500 speed control, studio">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/effective-speed-control-between-hmi-and-vfd-a-beginners-guide">
    <title>Effective Speed Control Between HMI and VFD: A Beginners Guide | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Effective Speed Control Between HMI and VFD: A Beginners Guide | Oxmaint Community">
    <meta property="og:description" content="Looking for help with integrating Eztouch HMI EZ3-T6C-EE, Allen Bradley 5/03 PLC, 1746-NIO4V Analog in/out, and Altivar 31 VFD? As a newcomer to this field, I have the necessary software like Rslogix 500, Rslogix5000, Studio5000, and RSlinx. However, I am facing a challenge in controlling the VFD speeds using">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/effective-speed-control-between-hmi-and-vfd-a-beginners-guide">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Effective Speed Control Between HMI and VFD: A Beginners Guide | Oxmaint Community">
    <meta name="twitter:description" content="Looking for help with integrating Eztouch HMI EZ3-T6C-EE, Allen Bradley 5/03 PLC, 1746-NIO4V Analog in/out, and Altivar 31 VFD? As a newcomer to this field, I have the necessary software like Rslogix 500, Rslogix5000, Studio5000, and RSlinx. However, I am facing a challenge in controlling the VFD speeds using">
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
        "@id": "https://community.oxmaint.com/discussion-forum/effective-speed-control-between-hmi-and-vfd-a-beginners-guide"
      },
      "headline": "Effective Speed Control Between HMI and VFD: A Beginners Guide",
      "description": "Looking for help with integrating Eztouch HMI EZ3-T6C-EE, Allen Bradley 5/03 PLC, 1746-NIO4V Analog in/out, and Altivar 31 VFD? As a newcomer to this field, I have the necessary software like Rslogix 500, Rslogix5000, Studio5000, and RSlinx. However, I am facing a challenge in controlling the VFD speeds using",
      "author": {
        "@type": "Person",
        "name": "Benwentz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-17",
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
                <h1 class="text-white">Effective Speed Control Between HMI and VFD: A Beginners Guide</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Benwentz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>2 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">172</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">431</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Looking for help with integrating Eztouch HMI EZ3-T6C-EE, Allen Bradley 5/03 PLC, 1746-NIO4V Analog in/out, and Altivar 31 VFD? As a newcomer to this field, I have the necessary software like Rslogix 500, Rslogix5000, Studio5000, and RSlinx. However, I am facing a challenge in controlling the VFD speeds using the HMI. The original program used to control the speeds, but now they are set directly on the VFDs. My task is to use the HMI to regulate the speeds effectively.

I am seeking guidance on how to set up the HMI for speed control. My idea is to have a numeric input on the HMI screen to adjust the speed within the range of 0-60 Hz. However, I am unsure about where to write this value to the PLC - B file or N file. Additionally, I have been exploring the SCP instruction on the PLC, but I am not fully confident in my understanding. I created a test program using the SCP instruction, but encountered issues when inputting values beyond a certain range.

If anyone can provide assistance or guidance on how to establish the communication between the HMI and the PLC for speed control, I would greatly appreciate it. Thank you for your help in advance!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I encountered a challenge while implementing an idea involving automatic and manual speed control on a system similar to AB, but with minor variations. The concept revolved around setting a speed reference using a tag named DRIVE_1_Speed for a scaling block. Two additional tags, DRIVE_1_Auto_Speed and DRIVE_1_Man_Speed, were used to store the automatic and manual speed values, respectively. On the HMI interface, there was a button for toggling between auto and manual modes.

The programming logic involved moving the values from either DRIVE_1_Auto_Speed or DRIVE_1_Man_Speed to DRIVE_1_Speed based on the status of the auto button. Essentially, the system would transfer the speed value from a predefined recipe when the auto mode was active, or input the manual speed set on the HMI when the auto mode was inactive. If you are experiencing issues with the value, ensure that the HMI tag is configured correctly as an integer type to prevent potential errors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The HMI setpoint is used to update multiple files in the PLC, such as N7:0. The SCP instruction is responsible for adjusting this setpoint to a range of 0-32767 to control the analog card's output voltage from 0-10v to the VFD. With six parameters, the SCP instruction includes the following: Input (HMI setpoint - N7:0), Input Min (N7:1 - 0), Input Max (N7:2 - 60), Output Min (N7:3 - 0), Output Max (N7:4 - 32767), and Output (analog output card address for VFD control - O:4.0 for slot 4, channel 0).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tarik1978</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I integrate Eztouch HMI, Allen Bradley PLC, Analog in/out module, and Altivar VFD for speed control?</h4>
<p class='text-muted'><strong>Answer:</strong> - To integrate these components for speed control, you will need to establish communication between the HMI, PLC, and VFD. Ensure you have the necessary software like Rslogix 500, Rslogix 5000, Studio 5000, and RSlinx. You can use numeric input on the HMI screen to adjust the speed within the desired range.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Where should I write the speed value from the HMI to the PLC - B file or N file?</h4>
<p class='text-muted'><strong>Answer:</strong> - The speed value from the HMI can be written to either the B file or N file in the PLC, depending on your programming preferences and the structure of your PLC program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can I effectively set up the HMI for speed control?</h4>
<p class='text-muted'><strong>Answer:</strong> - To set up the HMI for speed control, you can create a numeric input on the HMI screen to adjust the speed within the range of 0-60 Hz. Ensure that the HMI is properly configured to communicate with the PLC and VFD.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What is the SCP instruction on the PLC, and how can it be used for speed control?</h4>
<p class='text-muted'><strong>Answer:</strong> - The SCP (Set Control Parameter) instruction on the PLC can be used for setting control parameters such as speed values. It is important to understand how to properly use this instruction to ensure effective speed control between the HMI</p>
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

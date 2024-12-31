
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am experiencing difficulties in pairing a 50HP submersible pump with a PF755 VFD (480V 3-Phase, 65(ND)/52(HD)). The issue arises during the static AutoTune phase when trying to use new drives with an existing pump. A Code 77, IR Volts Range fault is being detected. The distance between">
    <meta name="keywords" content="allen bradley pf755 vfd troubleshooting, pf755 vfd code 77 ir volts range, 50hp submersible pump vfd pairing, troubleshooting pf755 vfd faults">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-pf755-vfd-code-77-ir-volts-range-with-50hp-submersible-pump">
    <title>Troubleshooting Allen Bradley PF755 VFD Code 77 IR Volts Range with 50HP Submersible Pump | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Allen Bradley PF755 VFD Code 77 IR Volts Range with 50HP Submersible Pump | Oxmaint Community">
    <meta property="og:description" content="Hello, I am experiencing difficulties in pairing a 50HP submersible pump with a PF755 VFD (480V 3-Phase, 65(ND)/52(HD)). The issue arises during the static AutoTune phase when trying to use new drives with an existing pump. A Code 77, IR Volts Range fault is being detected. The distance between">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-pf755-vfd-code-77-ir-volts-range-with-50hp-submersible-pump">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Allen Bradley PF755 VFD Code 77 IR Volts Range with 50HP Submersible Pump | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am experiencing difficulties in pairing a 50HP submersible pump with a PF755 VFD (480V 3-Phase, 65(ND)/52(HD)). The issue arises during the static AutoTune phase when trying to use new drives with an existing pump. A Code 77, IR Volts Range fault is being detected. The distance between">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-allen-bradley-pf755-vfd-code-77-ir-volts-range-with-50hp-submersible-pump"
      },
      "headline": "Troubleshooting Allen Bradley PF755 VFD Code 77 IR Volts Range with 50HP Submersible Pump",
      "description": "Hello, I am experiencing difficulties in pairing a 50HP submersible pump with a PF755 VFD (480V 3-Phase, 65(ND)/52(HD)). The issue arises during the static AutoTune phase when trying to use new drives with an existing pump. A Code 77, IR Volts Range fault is being detected. The distance between",
      "author": {
        "@type": "Person",
        "name": "pawPLC"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-28",
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
                <h1 class="text-white">Troubleshooting Allen Bradley PF755 VFD Code 77 IR Volts Range with 50HP Submersible Pump</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>pawPLC</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1303</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">41</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am experiencing difficulties in pairing a 50HP submersible pump with a PF755 VFD (480V 3-Phase, 65(ND)/52(HD)). The issue arises during the static AutoTune phase when trying to use new drives with an existing pump. A 'Code 77, IR Volts Range' fault is being detected. The distance between the pump and the drive is approximately 50 meters or possibly longer. The submersible pump is being lowered into a hot-water drilled hole (through Ice) to a depth of 50-100 meters. It is used to recover spent water from drilling operations and returns about 90% of the output to a surface rodwell for the drilling process. The PF755 VFD is operated at the surface and is not submerged. The feedback for the PF755 is open-loop using Induction FV motor control (P35). We are currently attempting to tune the newly installed VFD with the pump motor using the static method. The pump and motor are not submerged at this time. We are seeking suggestions and troubleshooting tips to successfully match the VFD with the pump. The F77 error is occurring with multiple PF755 and both the primary and spare pump. Thank you for any assistance. -- pawPLC. -- The motor's nameplate information is provided, with details such as Voltage: 460 VAC, Amps: 67.70, Hertz: 60 Hz, RPM: 3450, Power: 50 HP, Poles: 2.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>After analyzing the motor voltage and rated current at the time of the fault, it appears that the motor resistance may be lower than expected, around 0.064 Ohms. While this value could be appropriate for a 50HP motor, it still seems somewhat low. 
Have you considered the use of encoderless induction flux vector control for this particular application? Are you anticipating the need for torque control in the future? If not essential for a specialized pump application, I would suggest utilizing volts/hertz control instead. Simply input the motor nameplate information and you should be good to go.
However, if the autotune process failed as it did, it could indicate underlying issues. It would be wise to gather more detailed motor data and verify the accuracy of the motor resistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>kamenges</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hi Keith, thank you for your prompt response. While our pumping application may not be specialized, we have found that utilizing Field Voltage Control (FVC) provides us with more precise control and stability compared to other methods. 

Currently, we are facing a unique situation where both our primary and spare pumps are exhibiting the same response to an autotune feature from separate PF755 drives. Despite this, we are still unsatisfied with the results as the autotune process fails to meet our expectations.

In our next troubleshooting steps, we are considering trying the Induction SV option and if that proves unsuccessful, we may explore the VHZ mode as a final resort. Unfortunately, as we are located in a remote base camp, we do not have access to another cable to test at this time.

Thank you for your assistance,
pawPLC</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pawPLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Greetings and a warm welcome to the online community! It is important to adhere to forum guidelines by refraining from posting copyrighted materials. A helpful practice is to provide a URL link to the relevant knowledge base article in your posts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MikeyN</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the forum! In order to comply with forum policies, it is important to avoid posting copyrighted material as attachments. A useful alternative is to provide a URL link to the KB article in your post. However, please note that the editing window for posts is limited, so it may be too late to make changes once you have posted.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>plvlce</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you to Mikey and others for bringing this to my attention. I kindly request that the board administrators remove the articles as soon as possible. My apologies for any protocol breach. --pawPLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>pawPLC</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The post containing copyrighted material has been taken down, but we still want to highlight the valuable comments left by the original poster (OP). Thank you for updating us on your findings. pawPLC provided an update stating that during further testing, a phase was found to have dropped on the load side of the PF755. Subsequent investigations uncovered a damaged slip ring setup connected to the cable spool shown in the image. Repairs are currently underway, and a re-test will be conducted soon. For those interested in related information, refer to answer IDs QA14252 and QA15094 (accessible through TechConnect) for details on Fault77 in PowerFlex 750 (and similar models) drives. Click to learn more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>5618</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking for a submersible centrifugal pump? Just run it with V/Hz and you won't regret it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
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
<h4 class='text-dark'>FAQ: What does the 'Code 77, IR Volts Range' fault indicate when using a PF755 VFD with a 50HP submersible pump?</h4>
<p class='text-muted'><strong>Answer:</strong> The fault indicates an issue related to the IR voltage range and can occur during the static AutoTune phase when pairing new drives with an existing pump.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What is the operating setup of the PF755 VFD and the submersible pump in this scenario?</h4>
<p class='text-muted'><strong>Answer:</strong> The PF755 VFD is operated at the surface and is not submerged, while the submersible pump is lowered into a hot-water drilled hole at a depth of 50-100 meters.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What feedback method is being used for the PF755 VFD and the motor control in this case?</h4>
<p class='text-muted'><strong>Answer:</strong> The feedback for the PF755 VFD is open-loop using Induction FV motor control (P35).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How can the 'Code 77, IR Volts Range' fault be addressed when attempting to tune the VFD with the pump motor?</h4>
<p class='text-muted'><strong>Answer:</strong> Troubleshooting tips may include checking the distance between the pump and the drive, ensuring proper motor specifications are met, and verifying the setup parameters for successful matching of the VFD with the pump.</p>
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

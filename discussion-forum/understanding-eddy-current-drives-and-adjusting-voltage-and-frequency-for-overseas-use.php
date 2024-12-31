
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey everyone, I currently have a press machine equipped with an eddy current drive that is currently running on a 460 vac 60 Hz 3 phase motor at 15 HP. This machine is soon to be shipped overseas where the power supply is 380 vac 50 Hz. While the">
    <meta name="keywords" content="eddy current drives, adjusting voltage, adjusting frequency, overseas use, press machine, 460 vac, 60 hz, 3 phase motor, 15 hp, power supply, 380 vac, 50 hz, control board, 115">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-eddy-current-drives-and-adjusting-voltage-and-frequency-for-overseas-use">
    <title>Understanding Eddy Current Drives and Adjusting Voltage and Frequency for Overseas Use | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding Eddy Current Drives and Adjusting Voltage and Frequency for Overseas Use | Oxmaint Community">
    <meta property="og:description" content="Hey everyone, I currently have a press machine equipped with an eddy current drive that is currently running on a 460 vac 60 Hz 3 phase motor at 15 HP. This machine is soon to be shipped overseas where the power supply is 380 vac 50 Hz. While the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-eddy-current-drives-and-adjusting-voltage-and-frequency-for-overseas-use">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding Eddy Current Drives and Adjusting Voltage and Frequency for Overseas Use | Oxmaint Community">
    <meta name="twitter:description" content="Hey everyone, I currently have a press machine equipped with an eddy current drive that is currently running on a 460 vac 60 Hz 3 phase motor at 15 HP. This machine is soon to be shipped overseas where the power supply is 380 vac 50 Hz. While the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-eddy-current-drives-and-adjusting-voltage-and-frequency-for-overseas-use"
      },
      "headline": "Understanding Eddy Current Drives and Adjusting Voltage and Frequency for Overseas Use",
      "description": "Hey everyone, I currently have a press machine equipped with an eddy current drive that is currently running on a 460 vac 60 Hz 3 phase motor at 15 HP. This machine is soon to be shipped overseas where the power supply is 380 vac 50 Hz. While the",
      "author": {
        "@type": "Person",
        "name": "tomneth"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-05",
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
                <h1 class="text-white">Understanding Eddy Current Drives and Adjusting Voltage and Frequency for Overseas Use</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>tomneth</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">9089</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">309</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey everyone, I currently have a press machine equipped with an eddy current drive that is currently running on a 460 vac 60 Hz 3 phase motor at 15 HP. This machine is soon to be shipped overseas where the power supply is 380 vac 50 Hz. While the control board is compatible with 115 vac and 47-62 Hz, the motor presents a potential issue. Given that we operate at a low speed, adjusting the potentiometer should suffice to match the current speed. If you have knowledge of eddy current drives, I'd appreciate your input on how decreasing the voltage and frequency by 20% might affect it.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Eddy current drives, considered an older technology, have largely been replaced by Variable Frequency Drives (VFDs) in modern industrial applications. It is worth noting that eddy current drives may have limitations, such as not being able to achieve output speeds greater than the input speed. When operating a motor on 50Hz current, the maximum achievable speed is typically around 83% of the original maximum speed. It is crucial to ensure that the motor is capable of handling the required torque and horsepower for the specific load at 380 VAC 50 Hz.

For any concerns regarding the eddy current drive and its compatibility with different voltage and frequency settings, it is recommended to reach out to the manufacturer for assistance. As technology has evolved, it is important to stay informed about the advancements and limitations of different drive systems to maximize efficiency and performance in industrial settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ah, reminiscing about the past! As Tom mentioned, the traditional eddy current clutch or drive may be considered outdated, but it still holds some value. The motor requires a 7.6 V/Hz ratio, which is achieved with both 460/60 and 380/50 voltages. However, using the motor at lower voltage levels will result in increased current to generate the necessary horsepower, leading to potential motor overheating issues if operated close to its nameplate rating. The clutch circuit itself should function without any issues, as the magnetic field will continue to fluctuate to engage the clutch. It is advisable for the customer in Japan to replace the motor upon receiving it. It's been a long time since encountering a drive like this, bringing back a mix of nostalgic memories.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>randylud</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are unfamiliar with eddy current drives, they work by combining a constant speed AC induction motor with an eddy current clutch. The eddy current clutch is responsible for transmitting a controlled torque from the induction motor to the load using a magnetic field generated by a stationary field coil. To regulate the speed of the eddy current drive, a thyristor-based electronic controller converts AC power into DC power to excite the field coil. It is important to consult with the motor/drive manufacturer to ensure proper operation of the eddy current drive system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rsdoran</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you all for your input! Based on my research, my primary concern is whether the motor can handle the higher amperage and the resulting rise in temperature. I have reached out to a specialist in eddy current drives for advice. Ultimately, the decision will depend on the level of risk and reliability the company is willing to invest in.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>tomneth</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that you may not be as affected by this issue as you initially thought, tomneth. The motor operating at 380V 50Hz will produce the same torque as it does at 460V 60Hz thanks to the constant 7.6V/Hz ratio. Additionally, the eddy current clutch exciter is designed for 115VAC 50Hz, so that aspect is covered.

The main difference lies in the fact that the motor is running 17% slower due to the decrease in frequency. Despite the reduction in speed, the same amount of torque is available. This means that there is 17% less horsepower available, and the motor cooling fan may be slightly less effective.

By assessing your load requirements based on torque rather than horsepower, you will likely discover that the lower speed is manageable. As for motor cooling, unless you are operating the motor at its maximum capacity, the decrease in fan output should not pose a significant issue.

Typically, eddy current systems are constructed as a single assembly with the motor and clutch, making it challenging to replace just the motor. It seems that your situation will likely be fine with the current setup.

Regarding eddy current clutches, they transfer load torque directly back to the motor while adjusting speed. They do not alter torque, nor can they exceed the motor shaft speed. Their function is to decrease the motor speed based on the exciter coil's magnetic intensity.

It is important to recognize that these devices consume a considerable amount of energy, particularly the larger ones that are water-cooled. For instance, if a 15hp motor is running at rated torque with the clutch reducing speed to half the motor's velocity, half of the motor's horsepower is wasted as heat. In a scenario where electricity costs about 8 cents per kWh for industrial applications, this can result in significant annual energy wastage.

In light of these considerations, transitioning from E.C. clutches to AC drives is a substantial part of my professional activities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>DickDV</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>As a controls engineer seeking advice, I am considering replacing an eddy current clutch drive with a VFD. Although my boss believes we can still use the existing 45 kW eddy current motor, I have concerns. Any thoughts on this matter? It is essential to ensure compatibility between the motor and VFD for optimal performance. Your insights are appreciated. Regards, Rob Bernardino.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If your center bearing seizes, causing the output shaft to spin at the motor's full RPM, there are a few options to consider. The best choice is to replace the motor entirely. Alternatively, you can provide the eddy current clutch with maximum excitation voltage. As a last resort, you can weld or secure the center bearing to prevent it from turning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jrwb4gbm</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As a controls engineer seeking advice, I am considering replacing an eddy current clutch drive with a VFD. While my boss believes we can continue using the existing Eddy current motor, I am unsure. The motor in question is a 45 kW one, and we already have a 45 kW VFD. Typically, motors used with eddy current clutches are standard. To determine suitability for use with a VFD, check the motor nameplate for Class F insulation or better and a 1.15 service factor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to rsdoran, an Eddy Current drive is a system that combines a constant speed AC induction motor with an eddy current clutch. The purpose of the eddy current clutch is to transfer a controlled torque from the induction motor (prime mover) to the load (driven machine) using a controlled magnetic field generated by a stationary field coil. An electronic controller based on thyristors converts a small amount of AC power into DC power to stimulate the field coil, thereby controlling the speed output of the eddy current drive. It is recommended to consult with the motor/drive manufacturer for confirmation. Are you ready to explore Wound Rotor Motor options and utilize a Flow Matcher for your application?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jdbrandt</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I stumbled upon this forum thread while searching for information on eddy current drives, a technology I was previously unfamiliar with. Initially, I assumed that it could potentially compete with VFDs based on the thread title.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Pablox</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When I first came across the term "eddy current drives", I was intrigued as I had never heard of them before. I initially thought it could be a new technology competing with VFD's. However, upon further research, I discovered that it is a modern version of the traditional eddy current clutch, offering advantages in lower horsepower pumping systems, especially in vertical pump applications. This technology, similar to the old eddy current clutch, can be particularly beneficial in scenarios where harmonics pose a significant concern, providing an edge over VFD's. To learn more about this innovative solution, visit the website of MagnaDrive at http://www.magnadrive.com/.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for more information on Wound Rotor Motor questions and using a Flow Matcher, click here to learn more! In response to a comment by Ron Doran, who unfortunately passed away in 2007, it's best to hire a medium to communicate with him.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jraef</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>jraef mentioned that to comment on Ron Doran's post, hiring a medium may be necessary as he passed away in 2007. However, robro recently reopened the post, even though starting a new thread would have been more appropriate. Ron's presence is still felt and missed on this forum. Click to expand for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate your response and will create a new discussion thread.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Robro</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robro inquired about replacing an eddy current clutch drive with a VFD for a 45 kW motor. While considering the replacement of the Eddy current motor, his boss believed they could still utilize the existing motor. However, it is recommended to opt for a new motor to accompany the VFD. Additionally, if there are concerns about stalling the motor, a hydraulic coupling may be necessary. Sometimes, it can be challenging to convey such technical decisions to colleagues in the office. It may be beneficial to create a new discussion thread to further explore this topic. Thank you for your input and have a great day!Best regards,Rob Bernardino</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chauvin Emmons</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I adjust the voltage and frequency for overseas use with an eddy current drive?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To adjust the voltage and frequency for overseas use with an eddy current drive, you may need to consider using a transformer to step down the voltage from 460 VAC to 380 VAC, and a frequency converter to adjust the frequency from 60 Hz to 50 Hz.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What potential issues can arise when running an eddy current drive with lower voltage and frequency?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Running an eddy current drive with lower voltage and frequency may affect the overall performance and efficiency of the drive. It could lead to changes in speed control and torque characteristics, potentially impacting the operation of the machinery.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How does adjusting the potentiometer help in matching the speed of the motor when operating at a lower voltage and frequency?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Adjusting the potentiometer on the eddy current drive can help in fine-tuning the control signals sent to the motor to compensate for the lower voltage and frequency. This adjustment can help maintain the desired speed of the motor despite the changes in power supply conditions.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  What are the implications of decreasing the voltage and frequency by 20% on an eddy current drive?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Decreasing the voltage and frequency by 20% can impact the performance of the eddy current drive. It may lead to changes in motor speed, torque output, and</p>
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

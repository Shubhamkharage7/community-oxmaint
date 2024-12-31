
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, in my search on the site, I came across a thread discussing safety PLCs and editing safety tasks that closely relates to my question. Unfortunately, it doesnt fully address the concerns raised by our IT and cybersecurity auditor. I have elaborated on the questions based on the">
    <meta name="keywords" content="cyber breach impact on safety plc programs, safety plc modifications cybersecurity, unauthorized access safety plc editing, safety signature plc power cycle, safety controller logic changes, rockwell software cybersecurity breach">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/understanding-the-impact-of-cyber-breach-on-safety-plc-program-modifications">
    <title>Understanding the Impact of Cyber Breach on Safety PLC Program Modifications | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Understanding the Impact of Cyber Breach on Safety PLC Program Modifications | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, in my search on the site, I came across a thread discussing safety PLCs and editing safety tasks that closely relates to my question. Unfortunately, it doesnt fully address the concerns raised by our IT and cybersecurity auditor. I have elaborated on the questions based on the">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/understanding-the-impact-of-cyber-breach-on-safety-plc-program-modifications">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Understanding the Impact of Cyber Breach on Safety PLC Program Modifications | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, in my search on the site, I came across a thread discussing safety PLCs and editing safety tasks that closely relates to my question. Unfortunately, it doesnt fully address the concerns raised by our IT and cybersecurity auditor. I have elaborated on the questions based on the">
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
        "@id": "https://community.oxmaint.com/discussion-forum/understanding-the-impact-of-cyber-breach-on-safety-plc-program-modifications"
      },
      "headline": "Understanding the Impact of Cyber Breach on Safety PLC Program Modifications",
      "description": "Hello everyone, in my search on the site, I came across a thread discussing safety PLCs and editing safety tasks that closely relates to my question. Unfortunately, it doesnt fully address the concerns raised by our IT and cybersecurity auditor. I have elaborated on the questions based on the",
      "author": {
        "@type": "Person",
        "name": "thingstodo"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-06-21",
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
                <h1 class="text-white">Understanding the Impact of Cyber Breach on Safety PLC Program Modifications</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-06-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>thingstodo</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">4154</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">428</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, in my search on the site, I came across a thread discussing safety PLCs and editing safety tasks that closely relates to my question. Unfortunately, it doesn't fully address the concerns raised by our IT and cybersecurity auditor. I have elaborated on the questions based on the information provided in the aforementioned thread:

If an unauthorized individual manages to breach our firewall, gain access to one of our Programming VMs running the necessary Rockwell software for editing our Safety PLC (L81ES), obtains validation from the Rockwell license server, logs into the safety PLC, and maliciously alters the safety part of the controller code:
- Will the PLC need to enter program mode for the logic changes to take effect?
- If modifications are made to the safety program(s) without generating a new safety signature, what will happen when the PLC is power cycled? Will it continue running the 'old' code, switch to the 'new' code, or remain idle due to the absence of a safety signature?

Although I have reviewed various manuals, this level of detail seems to exceed their coverage. It may also be too specialized for YouTube tutorials, as they primarily focus on initial safety program setup rather than editing procedures. Unfortunately, I am unable to conduct test trials myself as we only have one safety controller on-site, and our spare is currently being used for remote development by a contractor.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Configuring the safety controller depends on various options available to you. These include using FactoryTalk Security, setting up a Safety Signature, enabling 'Protect Signature in Run Mode,' locking the Safety Application with a password, utilizing a Key Switch 'RUN' mode, and implementing Change Detection in your HMI application. It is important to protect your safety system with multiple layers of security, such as multiple firewalls with different passwords from different vendors.

If you are considering making safety changes or implementations, attending a Rockwell training course is recommended. Different regions have varying legislation regarding safety implementations, so it is crucial to be competent in this area. Having the necessary certifications and training can help defend your competence in case of mistakes or issues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bevanweiss</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're wondering, no, there's no need to switch to program mode for making changes. Online edits are permitted in the safety system without requiring a safety signature, just like in a regular Logix system. It's important to note that a safety controller without a safety signature is essentially a costly ControlLogix. Any modifications made will take effect immediately in code execution when in Test or Assembled edits mode. The executed code will remain the same before and after a power cycle, unless there's memory corruption or if booting from an SD/CF card is configured. The safety features include verification and validation of code changes, restricting code changes through safety signatures and locks, and tracking the current code state back to test and design documents. These additional precautions ensure safety and compliance in the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bevanweiss</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to bevanweiss, certain changes can be made in the safety system without needing to enter program mode, similar to the normal logix system. However, without a safety signature, a safety controller is essentially just an expensive controllogix. The responsibility for programming the Safety PLC lies with the Service Provider handling the robot's programming as part of their deliverables. Seeking independent sources for answers is important in this scenario. Changes made will take immediate effect in code execution during Test or Assembled edits, with the executed code remaining the same before and after a power cycle, unless memory corruption is detected or an SD/CF card is used for booting. The concept of a Safety signature may be unclear, but it adds an extra layer of security contributing to overall safety. This includes verification and validation of code changes, restriction of changes through safety signatures and locks, and traceability of the current code state back to test and functional design documents. Thank you for the overview!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thingstodo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In an insightful post, bevanweiss mentioned the importance of configuring the safety controller properly. There are numerous options available to enhance safety measures. Some key steps include implementing FactoryTalk Security, ensuring Safety Signature is configured, enabling 'Protect Signature in Run Mode,' locking the Safety Application with a password, and considering Key Switch 'RUN' mode. Change Detection in the HMI application and using multiple firewalls for added security are also recommended practices. Attending training courses is essential for ensuring competence in safety implementations. Additionally, it's important to work with a qualified Service Provider for safety changes to avoid potential mistakes. By following these guidelines, you can strengthen the safety protocols in your industrial setting. Thank you for sharing this valuable information!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thingstodo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The implementation of safety measures, known as a safety signature, should be completed during the safety commissioning phase before proceeding with the non-safety functional commissioning of the machine. It is important to note that port 44818 may inadvertently be exposed to the internet, as shown on platforms like Shodan. To prevent unauthorized access, it is recommended to establish strong security protocols to deter potential intruders. Avoid allowing third-party service providers to install their own 4G/5G modem for remote diagnostics, as this may compromise the security of the system. Stick to using a corporate VPN setup and a jump box with appropriate software installed for remote access instead.

In my experience with safety procedures, I prioritize maintaining the Safety Signature integrity and ensuring it remains unchanged in Run mode, along with utilizing a Safety Lock password. By upholding the Safety Signature protocol, I am confident in my liability protection. Any alterations to the safety code by the end user will result in a mismatch with the documented commissioning data. Since the safety signature is impacted by timestamps, any attempt to revert to the original settings will be flagged by modified PLC times, indicating an attempt to cover tracks.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bevanweiss</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Bevanweiss pointed out that the safety signature should be completed during the safety commissioning phase, which should precede the commissioning of the machine's non-safety functions. This project involves more research and development than our usual projects. The Service Provider is still fine-tuning the reliability and accuracy of the vision system, including lighting and vision tools. What worked in their facility has not translated well in the field, making the process of requirements, development, and commissioning more iterative than expected.

The main concern is the accidental exposure of port 44818 to the internet, as shown in this link: https://www.shodan.io/search?query=port:44818+product:"Rockwell+Automation/Allen-Bradley". It is advised not to allow the service provider to install their own 4G/5G modem for remote diagnostics, as this can lead to security vulnerabilities. Instead, it is recommended to stick with the corporate VPN setup and a jump box with necessary software.

In terms of remote diagnostics, it was found that utilizing IT and cybersecurity protocols can be slow and cumbersome, more suitable for minor issues. For more significant problems, it is quicker to physically go to the site rather than navigate through the necessary procedures.

In the realm of safety work, emphasis is placed on the Safety Signature, ensuring it does not change in Run mode, and implementing a Safety Lock password. The Safety Signature plays a crucial role in liability protection. If the end user alters the safety code, the safety signature will not match the documented commissioning state. Since timestamps affect the safety signature, trying to cover tracks by reinstating the original code will be evident through PLC modification timestamps.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thingstodo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>thingstodo said: This project requires a significant amount of research and development compared to our typical projects. The Service Provider is currently addressing issues with the reliability and accuracy of the vision system, including factors such as lighting and vision tools. What worked well in their test environment has not translated smoothly to real-world applications. As a result, the process of defining requirements, development, and commissioning is more of an ongoing cycle than initially anticipated. It is crucial that this system is not integrated into the safety system, as safety systems are not meant for trial and error. Doing so could compromise other safety functions, whether due to a lack of safety certification, an unlocked processor, or numerous changes to safety code.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bevanweiss</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Bevanweiss mentioned that integrating the safety system in this situation is not ideal as safety systems are not meant for trial and error. It is crucial to guard the area accessible by the robot from unauthorized access during operation. The robot system necessitates a safety system to oversee safety gates, handle safety gate resets, and prevent personnel from entering the robot's reachable area. Any access triggers an emergency stop for the robot.

The 'trial and error' aspect pertains to the vision systems accurately identifying and providing coordinates for the robot's interactions. These vision systems also validate the successful completion of each operation. Factors such as lighting, humidity, temperature changes, and the correct identification of targets in the video background are part of the trial and error process to ensure reliable performance.

The safety system is actively being tested, modified, and commissioned during non-production day shifts with the Service Provider ensuring continuous monitoring. Only authorized and trained personnel are permitted inside the safety gates when the system is operational, holding the teach pendant containing an emergency stop button for testing purposes.

While the existing corporate and site firewalls, as well as security measures for the Control Network, are in place, additional Security PLC measures may be necessary, some of which might already be implemented by the Service Provider. It is essential to avoid compromising other safety functions due to lack of safety signatures, unlocked processors, or numerous safety code modifications.

The commissioned safety component of the system is relatively small, with approximately 30 ladder logic rungs. Any changes would only be made if the requirements evolve. Suggestions have been forwarded to the Service Provider for discussion next week, along with a service ticket raised with Rockwell for further guidance. Collaboratively, decisions will be made on the implementation process. Appreciation is expressed for the detailed input and shared experiences.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thingstodo</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Protecting Safety PLC programs with strong cybersecurity measures is crucial for critical infrastructure. By incorporating encrypted communication, frequent audits, and strict access controls, organizations can defend against cyber attacks. Consistent monitoring, rapid threat detection, and regular updates are essential to preserving the security and reliability of these programs, ultimately boosting safety and resilience in industrial settings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>lexiluna86</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my experience with safety Instrumented Systems, they communicate with other systems via Modbus RS485, but they only transmit data and do not receive any feedback. This setup ensures a high level of cybersecurity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-06-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
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
<h4 class='text-dark'>FAQ: 1. If an unauthorized individual alters the safety part of the controller code in a Safety PLC (L81ES), will the PLC need to enter program mode for the logic changes to take effect?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: Yes, typically the PLC would need to enter program mode for the logic changes to take effect, as modifications to the safety program usually require the PLC to be in a specific mode for the changes to be applied.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What happens if modifications are made to the safety program(s) without generating a new safety signature, and the PLC is power cycled?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: If modifications are made to the safety program without generating a new safety signature, the PLC may continue running the 'old' code, switch to the 'new' code, or remain idle due to the absence of a safety signature. The exact behavior would depend on the PLC's configuration and how it handles safety program integrity checks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can one ensure the security of safety PLC programs against unauthorized access and modifications?</h4>
<p class='text-muted'><strong>Answer:</strong> - Answer: To enhance security, it is important to implement robust access controls, network segmentation, regular security audits, intrusion detection systems, and encryption measures to protect safety PLC programs from unauthorized access and modifications. Working closely with IT and cybersecurity teams is crucial to identify and address vulnerabilities proactively.</p>
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

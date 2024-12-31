
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone, I am a newcomer to PLC programming and currently involved in a team project to convert PLC5 to Studio5000. Despite using the built-in conversion tool, I have encountered issues with some elements not transferring correctly. My mentor mentioned a potential problem with the PIDs not updating as">
    <meta name="keywords" content="plc5 to studio5000 conversion, pid updates, plc programming, conversion tool issues, pids not updating, plc5 conversions, pid challenges, studio5000 conversion problems, plc conversion advice, pid troubleshooting, plc5 to studio5000">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/tips-to-successfully-convert-plc5-to-studio5000-with-pid-updates">
    <title>Tips to Successfully Convert PLC5 to Studio5000 with PID Updates | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Tips to Successfully Convert PLC5 to Studio5000 with PID Updates | Oxmaint Community">
    <meta property="og:description" content="Hello everyone, I am a newcomer to PLC programming and currently involved in a team project to convert PLC5 to Studio5000. Despite using the built-in conversion tool, I have encountered issues with some elements not transferring correctly. My mentor mentioned a potential problem with the PIDs not updating as">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/tips-to-successfully-convert-plc5-to-studio5000-with-pid-updates">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tips to Successfully Convert PLC5 to Studio5000 with PID Updates | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone, I am a newcomer to PLC programming and currently involved in a team project to convert PLC5 to Studio5000. Despite using the built-in conversion tool, I have encountered issues with some elements not transferring correctly. My mentor mentioned a potential problem with the PIDs not updating as">
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
        "@id": "https://community.oxmaint.com/discussion-forum/tips-to-successfully-convert-plc5-to-studio5000-with-pid-updates"
      },
      "headline": "Tips to Successfully Convert PLC5 to Studio5000 with PID Updates",
      "description": "Hello everyone, I am a newcomer to PLC programming and currently involved in a team project to convert PLC5 to Studio5000. Despite using the built-in conversion tool, I have encountered issues with some elements not transferring correctly. My mentor mentioned a potential problem with the PIDs not updating as",
      "author": {
        "@type": "Person",
        "name": "ticknert"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-20",
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
                <h1 class="text-white">Tips to Successfully Convert PLC5 to Studio5000 with PID Updates</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>ticknert</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2688</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">51</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone, I am a newcomer to PLC programming and currently involved in a team project to convert PLC5 to Studio5000. Despite using the built-in conversion tool, I have encountered issues with some elements not transferring correctly. My mentor mentioned a potential problem with the PIDs not updating as desired. Have any of you faced similar challenges during PLC5 conversions? I would appreciate any advice on what to look out for, especially with PIDs, during this process. Thank you!</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Welcome to the PLCTalk forum community! PID equations rely on an accurate measurement of time for optimal performance. In the PLC-5 PID system, users needed to input the Loop Update time and create logic to run the PID at specific intervals. This was achieved using Timer instructions or interrupt routines (STIs), and sometimes even by chance. Many users would simply place the PID equation on an unconditioned rung to run it every scan of the PLC-5 program, tuning it with gain values accordingly. The ControlLogix ladder-logic PID operates in a similar manner, requiring users to input a loop update time and execute the instruction periodically using a Timer or Periodic Task. If the logic is not tailored to the loop update time, the faster ControlLogix will execute the instruction more frequently, rendering the tuning gains ineffective. The ControlLogix Enhanced PID (PIDE) is more sophisticated, deriving the loop update rate from the Task it is executed in. These instructions are typically found in Function Block routines and executed in Periodic Tasks. If you are interested in learning more, there was a compelling discussion on this topic a few months ago, and others are sure to provide additional insights. Those are the fundamentals of PID equations in PLC systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Roach</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering upgrading your system, are you planning to retain the PLC-5 platform's I/O (1771 style) or switch to newer ControlLogix hardware? If you opt to keep the older hardware, such as the 1771-IFE analog input modules and 1771-OFE analog output modules, it is essential to ensure they are functioning properly before diving into PID instructions. Providing detailed information about your project will allow us to provide more tailored advice. Welcome to the forum and feel free to ask any questions you may have.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ron Beaufort</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This information is very insightful! Understanding the importance of timing in this situation, I can see how trial and error might play a crucial role in fine-tuning your values. I will research further to learn how this was implemented in the original program. Thank you!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ticknert</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ron, we appreciate your response. Our project involves a complete upgrade from the 1771 chassis to the 1756 model, with all new components. Our aim is to streamline the process by consolidating inputs and making necessary changes, such as increasing inputs from 16 to 32. The use of the project migrator tool has been beneficial in this fast-paced project, but deciphering the information can be challenging. The tool transfers data file names and comments from PLC5 to ControlLogix tags. When it comes to PIDs, would it be beneficial to modify the PID subroutine to run periodically?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ticknert</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While revisiting an older discussion, it is important to consider the system I am currently working on that still needs to interact with another PLC 5 rack post-conversion. I discovered that it is more convenient to adjust all parameters in the ControlLogix to the range of 0-4095 as utilized in the previous code. This alignment ensures seamless transmission to the other rack and simplifies the integration of inputs and outputs for the PID instructions. By linking them to registers designated for transmission to other PLC5 racks, the process becomes more streamlined.

Additionally, I found it beneficial to create aliased IO tags that mirror the structure of the old program tags. This approach enables on-site personnel familiar with the old code to easily recognize the new code post-conversion. Although it involves some extra effort, it enhances the customer experience after my departure. These aliased tags also correspond with any outdated schematics that may still reference the old addressing system. Just sharing my insights on the matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>beanpole_ecc</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently working on transitioning from PLC5 to ControlLogix and I have a question regarding the PID tuning constants. Can the tuning constants be directly transferred from PLC5 to Logix, or do we need to consider scaling factors due to the -4096 to 4096 scaling in Logix? We are using the basic ladder-based PID instruction in the new code, not the FBD PIDE. I will ensure that scan times and execution rates are the same for comparison.

If anyone has experience with this conversion, please share your insights. Additionally, if adjustments were needed or if a complete re-tuning was necessary, I would appreciate hearing about your experiences. We have a tight shutdown schedule with built-in tuning time, but we have complex jacketed tank temperature loops that can be challenging to tune. Any assistance in obtaining good starting values for the constants based on the old PLC5 settings would be greatly beneficial.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>radfahrer</span></li>
            </ul>
        </div>
        
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. Q: What are common challenges encountered when converting PLC5 to Studio5000?
    Common challenges include issues with elements not transferring correctly, such as PIDs not updating as desired.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can I ensure successful conversion of PLC5 to Studio5000 with PID updates?</h4>
<p class='text-muted'><strong>Answer:</strong> To ensure successful conversion with PID updates, it is important to carefully review the conversion process and pay special attention to the PID configurations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What advice can help in overcoming PID update issues during PLC5 conversion to Studio5000?</h4>
<p class='text-muted'><strong>Answer:</strong> To overcome PID update issues during conversion, consider consulting with experienced mentors or colleagues, and thoroughly test the PID functionality post-conversion.</p>
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

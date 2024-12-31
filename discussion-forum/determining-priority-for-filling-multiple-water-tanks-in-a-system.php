
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am currently developing logic for a system with 3 water tanks (Tank A, Tank B, and Tank C). Tanks A and B are filled with water while Tank C remains empty. Each tank is equipped with a level transmitter that signals when water levels are low and">
    <meta name="keywords" content="water tank system logic, filling water tanks priority, multiple water tanks management, water tank level transmitter, tank a, tank b, tank c system, water tank replenishment strategy, 7">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/determining-priority-for-filling-multiple-water-tanks-in-a-system">
    <title>Determining Priority for Filling Multiple Water Tanks in a System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Determining Priority for Filling Multiple Water Tanks in a System | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am currently developing logic for a system with 3 water tanks (Tank A, Tank B, and Tank C). Tanks A and B are filled with water while Tank C remains empty. Each tank is equipped with a level transmitter that signals when water levels are low and">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/determining-priority-for-filling-multiple-water-tanks-in-a-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Determining Priority for Filling Multiple Water Tanks in a System | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am currently developing logic for a system with 3 water tanks (Tank A, Tank B, and Tank C). Tanks A and B are filled with water while Tank C remains empty. Each tank is equipped with a level transmitter that signals when water levels are low and">
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
        "@id": "https://community.oxmaint.com/discussion-forum/determining-priority-for-filling-multiple-water-tanks-in-a-system"
      },
      "headline": "Determining Priority for Filling Multiple Water Tanks in a System",
      "description": "Greetings, I am currently developing logic for a system with 3 water tanks (Tank A, Tank B, and Tank C). Tanks A and B are filled with water while Tank C remains empty. Each tank is equipped with a level transmitter that signals when water levels are low and",
      "author": {
        "@type": "Person",
        "name": "mavrick"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-18",
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
                <h1 class="text-white">Determining Priority for Filling Multiple Water Tanks in a System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mavrick</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">266</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">55</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am currently developing logic for a system with 3 water tanks (Tank A, Tank B, and Tank C). Tanks A and B are filled with water while Tank C remains empty. Each tank is equipped with a level transmitter that signals when water levels are low and in need of replenishment. When Tank A becomes empty, Tank B will start filling Tank C, and vice versa. I am seeking guidance on which instructions to implement in determining the priority to fill Tank C when both Tank A and Tank B are full, or when Tank A is full and Tank B is empty. Thank you for any assistance provided.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When you say "empty," are you referring to being at or below a certain low level? And when you mention "full," do you mean being at or above a specific high level? In the scenario where Tank C will be filled from tanks A and B separately when the level transmitter indicates low levels and calls for water, is the event triggered by the low level transmitter or something else?

If both tanks A and B are not empty, regardless of whether they are full or not, and Tank C calls for water, would it be more logical to fill from the tank with a higher or lower level? And if both tanks A and B are full, and Tank C requires water, is there a preference for using either tank based on factors like distance from C, pump efficiency, etc.? Is the history of which tank was last used important, such as alternating tanks being preferred or discouraged?

The objective is to shift focus from the physical process to the model of the process in the PLC, which includes analog inputs for levels, discrete inputs for water demand, and outputs for filling Tank C from A or B. The physical process is crucial as it guides the modeled process, but simplification is necessary as the PLC only models a subset of the entire process. This helps in streamlining the PLC program by eliminating unnecessary details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Forget about following a set of instructions - all you need is logic. As Drbitboy mentioned, consider what your specific process requires. If it's as simple as determining which tank, A or B, starts full, then just make straightforward comparisons. If tank C is running low and A is greater than or equal to B, start by filling from tank A until it's empty, then switch to tank B. On the other hand, if tank C is low and B is greater than A, begin by filling from tank B until it's empty, then switch to tank A. To ensure tanks are always alternated, you can incorporate lead/lag logic. The possibilities are endless, but it's essential to provide a more detailed explanation of your process for better clarity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee explained that the process of determining which tank to fill first is based on logic rather than explicit instructions. As Drbitboy pointed out, the key is to analyze what the process requires. For example, if tank C is low and tank A has more fuel than tank B, start by filling from tank A until it's empty, then switch to tank B. Conversely, if tank B has more fuel than tank A, start with tank B instead. To ensure tanks are alternated, consider implementing lead/lag logic. There are numerous options available to optimize this process, so providing more detailed information about your specific requirements will help in designing a more efficient system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mavrick</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When deciding which tank to start with, prioritize the fuller one as mentioned in the previous post. Make simple comparisons between Tank A and Tank B. Start Tank A if Tank A's level is greater than or equal to Tank B's level and Tank C needs to be refilled, and Tank B is not running. If Tank A is running but its level is below a certain threshold and Tank C needs to be refilled, then start Tank B (which will stop Tank A). Start Tank B if Tank B's level is greater than Tank A's level and Tank C needs to be refilled, and Tank A is not running. If Tank B is running but its level is below a certain threshold and Tank C needs to be refilled, then start Tank A (which will stop Tank B). Consider scenarios where Tank A or Tank B is already low when Tank C needs to be refilled, or if there is not enough liquid in Tank A and Tank B combined to fill Tank C. Create a sequence to simplify the process, as there are multiple conditions to take into account. Determine whether Tank A or Tank B alone is sufficient to fill Tank C, or if they both need to be used. Decide whether to wait for Tank A or Tank B to stop filling before filling Tank C (i.e., Tank A is refilled until it's above a certain level, then Tank C is filled, potentially causing Tank A to drop below the threshold, leading to short cycling of the pump).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to mavrick's query about setting up a lead/lag logic for tanks, it is recommended to search for relevant discussions using the terms "lead" and "lag" on this forum. There are multiple threads and code examples available for study. When establishing the logic, the priority should be on creating a system that is easily comprehensible for troubleshooting purposes, especially during unexpected failures. The goal is to ensure that troubleshooting can be done efficiently, even at odd hours. It is essential to have indicators or an HMI for monitoring, but unforeseen scenarios may arise where quick thinking and familiarity with the PLC's logic are crucial. In rare cases where the HMI may not provide all necessary information, having a platform for sharing and discussing such challenges, like a "Stump the Chumps" forum, can be beneficial for finding solutions to complex problems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Maverick acknowledged the confusion and confirmed that the described approach is similar to what he's doing. He plans to follow a sequential order and utilize a lead-lag system depending on which tank is full during startup. Seeking suggestions on setting up lead/lag logic, he has some ideas but is open to better approaches. For more information, explore this thread that discusses choosing a feed system based on specific criteria, running the selected system at feeding time, and isolating the logic of each principle. The simplicity of the problem lies in focusing on the last principle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
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
<h4 class='text-dark'>FAQ: 1.  How can I determine the priority for filling Tank C when both Tank A and Tank B are full?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One approach could be to prioritize filling Tank C from the tank that was filled first or consider factors such as proximity or capacity of the tanks.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  What instructions should I implement when Tank A is full and Tank B is empty in order to determine the priority for filling Tank C?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In this scenario, you may consider filling Tank C from Tank B since Tank A is already full, or establish a rotation system to ensure equitable distribution of water.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  How can I optimize the logic for filling multiple water tanks in the system to ensure efficient replenishment?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: You can optimize the system by incorporating sensors that monitor water levels in real-time, setting thresholds for refilling each tank, and creating a clear hierarchy for filling priorities based on specific criteria.</p>
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

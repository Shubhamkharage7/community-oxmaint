
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello everyone. Is this the most efficient method for debouncing inputs in Ladder logic (with 2 inputs being debounced)? The use of a TOF timer controls the process. I anticipate having numerous timers if I continue with this approach due to the abundance of inputs requiring debouncing. Creating an">
    <meta name="keywords" content="debouncing inputs in ladder logic, tof timer controls in debouncing, efficient debouncing method, ladder logic debouncing technique, debouncing multiple inputs, optimizing debouncing process">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/efficient-debouncing-method-in-ladder-logic-using-tof-timer-controls">
    <title>Efficient Debouncing Method in Ladder Logic Using TOF Timer Controls | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Efficient Debouncing Method in Ladder Logic Using TOF Timer Controls | Oxmaint Community">
    <meta property="og:description" content="Hello everyone. Is this the most efficient method for debouncing inputs in Ladder logic (with 2 inputs being debounced)? The use of a TOF timer controls the process. I anticipate having numerous timers if I continue with this approach due to the abundance of inputs requiring debouncing. Creating an">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/efficient-debouncing-method-in-ladder-logic-using-tof-timer-controls">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Efficient Debouncing Method in Ladder Logic Using TOF Timer Controls | Oxmaint Community">
    <meta name="twitter:description" content="Hello everyone. Is this the most efficient method for debouncing inputs in Ladder logic (with 2 inputs being debounced)? The use of a TOF timer controls the process. I anticipate having numerous timers if I continue with this approach due to the abundance of inputs requiring debouncing. Creating an">
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
        "@id": "https://community.oxmaint.com/discussion-forum/efficient-debouncing-method-in-ladder-logic-using-tof-timer-controls"
      },
      "headline": "Efficient Debouncing Method in Ladder Logic Using TOF Timer Controls",
      "description": "Hello everyone. Is this the most efficient method for debouncing inputs in Ladder logic (with 2 inputs being debounced)? The use of a TOF timer controls the process. I anticipate having numerous timers if I continue with this approach due to the abundance of inputs requiring debouncing. Creating an",
      "author": {
        "@type": "Person",
        "name": "dalporto"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-21",
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
                <h1 class="text-white">Efficient Debouncing Method in Ladder Logic Using TOF Timer Controls</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>15 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">985</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">361</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello everyone. Is this the most efficient method for debouncing inputs in Ladder logic (with 2 inputs being debounced)? The use of a TOF timer controls the process. I anticipate having numerous timers if I continue with this approach due to the abundance of inputs requiring debouncing. Creating an AOI could potentially add complexity (requiring a tag for each AOI and an intermediary tag for writing into the AOI input). Any recommendations for optimizing, streamlining, or enhancing this process?</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon initial assessment, your proposed solution may seem excessively intricate. To better understand your goals, could you provide more detail on the desired outcome? Typically, I utilize a single timer for debounce; are we aligned on this concept? When the pressure is within the acceptable range, does this mean the contact is closed? Thus, my logic would dictate: if the system is operational and the pressure remains low for a specified duration, trigger an alarm using a singular timer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore expressed that your solution seems overly complex at first glance and requested further clarification on your objectives. He mentioned that he typically uses a single timer for debounce and questioned if you have the same understanding of "debounce."

In the scenario where a wired input triggers an alarm after a 2-second confirmation period, it is essential to ensure the input remains stable. Without a reliable method, the alarm may continuously trigger, causing frustration for the operator. To address this issue, a Time-Off Delay (TOF) function is utilized to confirm that the alarm has been cleared before it can reoccur.

The goal is to prevent the alarm from repeatedly cycling on and off, ensuring that it is genuinely cleared before resetting. Although the term "debouncing" is commonly used, there may be a language barrier as the discussion involves French-speaking individuals.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In English, debounce is a widely-used term. A well-known pattern for debounce can be found  here, but it’s important to determine if it fits your specific requirements. While debounce on the release may not always be top of mind, it is a key component of this established pattern and aligns with the context you’ve outlined.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This approach utilizes just 1 timer, resulting in a debounced signal of GRT.ACC 4999. It is important to assess if this method is suitable for your specific circumstances. While this may not be clearer, I personally believe that stacking timers can be unnecessarily confusing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>That's exactly what I'm referring to. In my industry, there isn't a strong inclination towards embracing technology, with a reliance on basic devices like mechanical pressure, level, temperature, and flow switches. These devices often exhibit erratic behavior when operating near the setpoint, so I implement debouncing techniques similar to using hysteresis on analog inputs. Sometimes, I even apply debouncing on analog devices. Otherwise, operators monitoring alarm systems for 40 hours a week become frustrated when switches cycle on and off unnecessarily. I have developed a custom quick-use block in Function Block Diagram (FBD) programming, as ladder programming can be laborious and time-consuming. I am searching for a more efficient solution than what I have described here.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>In a similar vein, the usage of just one timer can result in nearly the same outcome; the debounced signal would be GRT .ACC 4999. It is important to assess if this approach aligns with your specific needs. Personally, I find that cascading timers can be overly complex. Attached is a visual reference for further clarification. I also share your sentiment about the clutter caused by parallel timers - your method appears to be more streamlined. I will experiment with it to determine if it offers a faster solution. Thank you.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dalporto mentioned that they are not a fan of having multiple parallel timers as it takes up a lot of space. They prefer a leaner approach and will test to see if it improves speed. One way to simplify this is by creating an array of integers to loop through inputs and use the array as timers. An example of this is a 16-bit loop.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking to implement a Function Block or AOI in your Codesys program? Check out this function block I frequently use in Codesys for debouncing inputs.

Within the function block, there are input variables for the boolean input signal, the on delay time, and the off delay time. The output variable is a boolean representing the output signal.

The function block also includes timers for the on delay and off delay processes.

To execute the on and off delay processes, the function block triggers the timers accordingly. The output signal will only change after the on delay is completed and will remain unchanged until the off delay is finished.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Levi G</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a previous post, I mentioned that setting up an AOI could be quite challenging. My frustration stems from the need to create superfluous tags for timers. I attempted to simplify the process by using EnableIn on the rung as the input, but that approach proved to be incorrect.

Based on my current understanding, using an AOI necessitates the creation of an intermediary tag for the debounce block or a meaningful reference. Additionally, each block requires its own instance of the AOI, which can get cumbersome quickly, even though using an array could potentially streamline the process. Another step involves adding a rung to transfer the intermediary tag to the AOI.

At the moment, I still find the TON / TOF scheme with a timer array to be my preferred method.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While it is not necessary to rely on a timer, you can still implement debounce without one, as it is a sensitive and intuitive feature.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Currently, I am waiting for approval from the timer. I will update you on its status. Stay tuned for more updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have developed an Automatic Output Inverter (AOI) for debounce functionality. The output will stay high for a set period of time (In_OnDebounceTime) after turning on, and it will only go low once the timer for turning off (In_OffDebounceTime) has elapsed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>creativepaper</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Creativepaper discussed the creation of an AOI for debounce in PLC programming. They pointed out that the In_Sensor XIC and XIO instructions on Rung 3 may be redundant as the corresponding .DN values can only be 1 if the feeding instructions evaluate to True. Additionally, the .TT XIO instructions on Rung 3 may also be unnecessary since the behavior of the I_SensorOnDelayTON and I_SensorOffDelayTON bits are interdependent. Clarity is essential in PLC programming, and unnecessary logic can reduce it. Concerns were raised about using OTL and OTU for the output, as this could lead to incorrect states when the PLC exits and re-enters RUN mode. A suggestion was made to follow a Start/Stop Circuit pattern for better control: using XIC I_SensorOffDelay.DN as the Start condition, XIO I_SensorOffDelay.DN as the Stop condition, and Out_SensorState as the Seal-in/Run bit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a previous post, dalporto expressed concern about the challenges of building an AOI (Add-On Instruction) due to the need for multiple tags and intermediary steps. The idea of creating unnecessary tags for timers was particularly frustrating. The hope of using EnableIn on the rung as the input turned out to be impractical.

Based on current knowledge, using an AOI would require:

- Creating an intermediary tag or reference to send data to the debounce block
- Creating multiple instances of the AOI for different blocks
- Adding a rung to send the intermediary tag to the AOI

Despite these challenges, dalporto still prefers using a TON/TOF scheme with a timer array. To simplify the process, the suggestion is to create a Debounce Function Block/AOI and a structured array to manage tags more efficiently. This approach consolidates all necessary tags in one accessible location.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Levi G</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It appears that you are facing challenges with process issues while programming the control system, which is not ideal. Have you considered why your alarm is excessively loud? Could it be due to inadequate physical design or the use of the wrong instrument?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the efficiency of using TOF timer controls for debouncing inputs in Ladder logic?</h4>
<p class='text-muted'><strong>Answer:</strong> - Using TOF timer controls for debouncing inputs in Ladder logic can be efficient, but it may lead to numerous timers if there are many inputs requiring debouncing.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Are there alternative methods to optimize the debouncing process without using numerous timers?</h4>
<p class='text-muted'><strong>Answer:</strong> - One alternative method to optimize the debouncing process without using numerous timers is to consider creating an AOI (Add-On Instruction), although it may add complexity by requiring additional tags.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How can the debouncing process be streamlined or enhanced in Ladder logic?</h4>
<p class='text-muted'><strong>Answer:</strong> - To streamline or enhance the debouncing process in Ladder logic, you can explore different approaches such as optimizing timer controls, using AOIs efficiently, or seeking alternative solutions that balance efficiency and complexity.</p>
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

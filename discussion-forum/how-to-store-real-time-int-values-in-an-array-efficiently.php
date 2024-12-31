
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings, I am facing a challenge with storing the values of an int variable that updates every second in an array. I need to retain the 100 most recent values in the array while the PLC is in operation. Utilizing a FOR loop hasnt been successful as it executes">
    <meta name="keywords" content="real-time int values storage, efficient array data storage, plc operation data handling, real-time data retention, array data management solutions, handling dynamic int values, efficient real-time">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-store-real-time-int-values-in-an-array-efficiently">
    <title>How to Store Real-Time Int Values in an Array efficiently | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Store Real-Time Int Values in an Array efficiently | Oxmaint Community">
    <meta property="og:description" content="Greetings, I am facing a challenge with storing the values of an int variable that updates every second in an array. I need to retain the 100 most recent values in the array while the PLC is in operation. Utilizing a FOR loop hasnt been successful as it executes">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-store-real-time-int-values-in-an-array-efficiently">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Store Real-Time Int Values in an Array efficiently | Oxmaint Community">
    <meta name="twitter:description" content="Greetings, I am facing a challenge with storing the values of an int variable that updates every second in an array. I need to retain the 100 most recent values in the array while the PLC is in operation. Utilizing a FOR loop hasnt been successful as it executes">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-store-real-time-int-values-in-an-array-efficiently"
      },
      "headline": "How to Store Real-Time Int Values in an Array efficiently",
      "description": "Greetings, I am facing a challenge with storing the values of an int variable that updates every second in an array. I need to retain the 100 most recent values in the array while the PLC is in operation. Utilizing a FOR loop hasnt been successful as it executes",
      "author": {
        "@type": "Person",
        "name": "Akgaurihar"
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
                <h1 class="text-white">How to Store Real-Time Int Values in an Array efficiently</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Akgaurihar</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>7 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1280</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">363</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings, I am facing a challenge with storing the values of an int variable that updates every second in an array. I need to retain the 100 most recent values in the array while the PLC is in operation. Utilizing a FOR loop hasn't been successful as it executes on each PLC cycle without waiting for a full second to populate the array. I am seeking a viable solution to address this issue. Thank you for your assistance.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Akgaurihar asked how to efficiently store updated int values every second in an array within a PLC environment. The goal is to continuously fill the array with values until the PLC stops running. Using a FOR loop proved ineffective as it executed per PLC cycle and did not wait for a second to fill the array. 

Understanding the importance of time in PLC programming is crucial, as the PLC scan cycle acts as the clock. The key is to find the right loop that allows storing values only once per second. Different PLC models and coding environments may require various approaches to achieve this. One solution is to implement a timed interrupt task that runs every second, ensuring accuracy in timing. 

Alternatively, detecting a specific event associated with the updated value and triggering the storage process can also work. Utilizing timers within the continuous task is another method, but timing accuracy may be affected by the scan cycle duration. Researching "structured text repeating timer" on forums can provide additional insights into implementing these solutions. 

Overall, the focus is on finding a method that aligns with the PLC system and programming expertise while ensuring precise storage of values in the array.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Akgaurihar inquired about storing 100 values in an array while the PLC is operational. The array will continuously store values as long as the PLC is running. It may prove challenging to save values in a PLC that is not in RUN mode, unless external software is utilized to input values in program mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of PLC programming, understanding the significance of time is crucial. The PLC scan cycle acts as the clock, with potentially up to a thousand scan cycles happening within a single second. It is essential to ensure that your code only stores values during specific scan cycles to optimize efficiency. 

To achieve this, you must identify an event that changes precisely once per second. The method you choose will depend on various factors, such as the required timing accuracy and the specific PLC model being used (Siemens, Allen-Bradley, Codesys, etc.).

One possible solution is to implement a timed interrupt task that runs every second, allowing you to store updated values in an array. This approach offers high timing accuracy and requires configuring the PLC accordingly. Another option is to detect a rising or falling edge in the stored integer value update event to trigger the storage process.

If you are using TwinCAT 3 and Structured Text for programming, employing a TON timer with a 1-second preset and a constantly TRUE input can help with your calculations. By capturing the rising edge of the timer output, you can perform your calculations every second and store the results in an array with shifting positions.

For further assistance with implementing a repeating timer in Structured Text, consider searching for solutions using terms like "structured text repeating timer." Remember to adapt the instructions based on the specifics of your PLC model and programming environment to ensure optimal functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Akgaurihar</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ken Moore mentioned that storing values in a PLC without it being in RUN mode can be challenging. However, it is possible to have external software write the values in program mode. This could be useful for prefilling an array on startup. In Siemens PLC programming, you can use a Startup OB (such as OB100) to execute code when the PLC boots up but before it is fully in RUN mode. By having default values in the array, you can avoid filling it up every time the PLC starts up.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>mk42</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, the suggestion is to wait 100 seconds during start-up as each value takes 1 second to process. However, a more efficient approach could involve incorporating a loop within OB100 with a time delay. Alternatively, to streamline the process, one could execute the array population routine prior to all other functions on any platform. In my experience, I have typically populated the array with the current values at the beginning to quickly get operations up and running smoothly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ken Moore</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Akgaurihar expressed gratitude for the response and shared that they are utilizing TwinCAT 3 and ST programming. They are implementing a TON with a preset time of 1 second where the input is always TRUE, resulting in the output toggling continuously. Calculations are performed every second upon the rising edge of the output, and the values generated need to be stored in an array. The requirement is for the array positions to shift, with the 101st value being placed in the 1st position. To achieve this, utilize the same rising edge to shift the array. In ST, one method to accomplish this is using a For loop. The code snippet provided demonstrates how to execute this operation efficiently. Additionally, the query regarding "Running" pertains to the specific program or task that is intended to be operational, as opposed to the PLC itself being in a running state.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>durallymax</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Akgaurihar's comment, I would like to thank you for your input. I am currently using TwinCAT 3 and Structured Text (ST) for programming. Specifically, I am employing the TON instruction with a time delay of 1 second and a constantly TRUE input. This results in the output consistently toggling. 

To further elaborate, I am performing calculations every second upon the rising edge of the output. My objective is to store these calculated values in an array, where the positions within the array need to shift. For example, the value at the 101st position should be moved to the 1st position. 

To achieve this, a common approach is to invert the timer output and use it as the input for the next cycle. By resetting the timer each time it expires, the updated value can be accurately stored in the array. It is important to note that this process may require an additional scan cycle to complete.

Alternatively, another method to achieve the same outcome involves implementing a timer logic within the code. Upon the timer reaching its expiration at 1 second, the updated value can be stored in the array before resetting the timer.

Overall, by utilizing these strategies, you can effectively manage the storage and shifting of values within an array in your TwinCAT 3 program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: FAQs:</h4>
<p class='text-muted'><strong>Answer:</strong> 1. How can I efficiently store real-time int values in an array?
- One efficient way to store real-time int values in an array is by utilizing a circular buffer. This data structure allows you to overwrite the oldest values with the newest ones, ensuring you maintain the most recent 100 values in the array.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How can I ensure that the array is updated every second without interference from the PLC cycle?</h4>
<p class='text-muted'><strong>Answer:</strong> - To overcome the issue of the FOR loop executing on each PLC cycle, you can consider implementing a time-based function or timer interrupt to trigger the array population at regular intervals, such as every second. This way, you can update the array independently of the PLC cycle.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What are some other alternatives to using a FOR loop for storing real-time values in an array?</h4>
<p class='text-muted'><strong>Answer:</strong> - Instead of relying on a FOR loop, you can explore using asynchronous programming techniques or event-driven programming to handle the real-time updates of the int values in the array. By decoupling the array population process from the PLC cycle, you can achieve more efficient and accurate data storage.</p>
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

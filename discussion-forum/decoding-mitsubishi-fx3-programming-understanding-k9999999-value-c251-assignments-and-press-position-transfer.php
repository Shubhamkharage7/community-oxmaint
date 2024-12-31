
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have been decoding a program for a press, delving deep into it using the manual to understand the instructions. One question that has arisen is the purpose of the K9999999 value in the rung assigned to C251 with an A/B encoder. Does it signify a maximum count value">
    <meta name="keywords" content="mitsubishi fx3 programming, k9999999 value, c251 assignments, press position transfer, a/b encoder, maximum count value, press programming, rung instructions, run mode activation, ote instruction, reset functions, press position read">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/decoding-mitsubishi-fx3-programming-understanding-k9999999-value-c251-assignments-and-press-position-transfer">
    <title>Decoding Mitsubishi FX3 Programming: Understanding K9999999 Value, C251 Assignments, and Press Position Transfer | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Decoding Mitsubishi FX3 Programming: Understanding K9999999 Value, C251 Assignments, and Press Position Transfer | Oxmaint Community">
    <meta property="og:description" content="I have been decoding a program for a press, delving deep into it using the manual to understand the instructions. One question that has arisen is the purpose of the K9999999 value in the rung assigned to C251 with an A/B encoder. Does it signify a maximum count value">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/decoding-mitsubishi-fx3-programming-understanding-k9999999-value-c251-assignments-and-press-position-transfer">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Decoding Mitsubishi FX3 Programming: Understanding K9999999 Value, C251 Assignments, and Press Position Transfer | Oxmaint Community">
    <meta name="twitter:description" content="I have been decoding a program for a press, delving deep into it using the manual to understand the instructions. One question that has arisen is the purpose of the K9999999 value in the rung assigned to C251 with an A/B encoder. Does it signify a maximum count value">
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
        "@id": "https://community.oxmaint.com/discussion-forum/decoding-mitsubishi-fx3-programming-understanding-k9999999-value-c251-assignments-and-press-position-transfer"
      },
      "headline": "Decoding Mitsubishi FX3 Programming: Understanding K9999999 Value, C251 Assignments, and Press Position Transfer",
      "description": "I have been decoding a program for a press, delving deep into it using the manual to understand the instructions. One question that has arisen is the purpose of the K9999999 value in the rung assigned to C251 with an A/B encoder. Does it signify a maximum count value",
      "author": {
        "@type": "Person",
        "name": "arpus4KM"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-10",
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
                <h1 class="text-white">Decoding Mitsubishi FX3 Programming: Understanding K9999999 Value, C251 Assignments, and Press Position Transfer</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">618</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">430</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have been decoding a program for a press, delving deep into it using the manual to understand the instructions. One question that has arisen is the purpose of the K9999999 value in the rung assigned to C251 with an A/B encoder. Does it signify a maximum count value or set C251 to 9999999 after the scan? Another aspect that is perplexing is the rung resetting C251 to zero on the first scan after activating Run mode (M8000), only for it to be changed back. Additionally, a rung further down involves transferring the press position readout (D200) to C251 every scan. The manual's explanations have been somewhat vague, especially regarding the OTE instruction and reset functions working together.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>The initial step in utilizing these counters (C235>) is to establish the maximum value. This value dictates when the output contact will be activated once the counter reaches it. Typically used for high-speed A/B count functions, these counters are hardware-tied to X0-X7 inputs. While it is possible to manually set a counter to a specific value, it is recommended to refer to the user manual for precise instructions. Resetting the counter will return it to its original value. The purpose of this process may rely on additional logic, but it appears to be related to encoder functionality. Explore the Mitsubishi Electric PLC FX manual for further details: [link to the manual]. If you already have the manual, focus on understanding the reset function and setting the maximum count, rather than questioning the current counter value adjustment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To maximize efficiency, the counter value has been set to K9999999 as a precautionary measure, assuming it will not exceed this value. This setting is commonly used for measuring distances from linear incremental encoders or similar devices. The C251 counter is a versatile 2-phase, 2-count input system that accurately tracks both up and down counts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is unusual for counters to only track rising edge (false-to-true) transitions within their input rung. After the reset on M8002 during the first scan, the subsequent M8000 (RUN - always set to 1 in PLC Run mode) will cause C251 to count up to 1*. From there, it should not count again since M8000 always maintains a value of 1 and cannot transition from 0 to 1 again. This is assuming the reset function clears the "last scan's input rung state," making M8000 appear as a rising edge in the next scan cycle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In PLC programming, the initial rung of counters like C235 sets the maximum value for the counter output contact to activate. Typically used for high-speed counting functions with encoders connected to X0-X7, it is possible to adjust the counter value based on the manual instructions provided. The reset function is used to clear the current counter value, which may be related to other logical operations, especially when dealing with encoders.

The manual linked provides detailed information on setting up counters for specific functions. It seems that the counter value is set high, such as K9999999, to measure distance using an incremental encoder. C251, functioning as a 2-phase, 2-count input counter, is used to accumulate and reset values for rotational operations.

When discussing the counting process, it is important to note that counters typically count rising edge transitions of their input rung. The use of DHSCR to reset the count at 360 counts ensures that the incremental count acts as an absolute value for angle measurement, especially in press operations.

Overall, setting up HSC functions in Mitsubishi PLC involves activating internal structures for high-speed counting with encoders. This setup differs from other systems, like Allen Bradley, where options are toggled in a menu. The reset function in the Mitsubishi PLC clears stored values, providing a fresh start for counting operations within the processor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The internal workings of the C251 are structured in a specific manner. Opting for a different option will result in a new hardware assignment and utilization for counting purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to the M8000 counter, it's important to understand that these are hardware counters linked to the physical inputs X0-7. To utilize the high-speed counting function, the counters must be enabled by setting them to true. Essentially, M8000 must be constantly on from the initial scan to activate it. The actual inputs, such as X0 and X1 (two-phase), connected to the counter are what increase or decrease the count. Each scan updates the counter value to the 32-bit word D200 and D201. On the first scan, the counter's maximum value is typically set to 99999, assuming the encoder doesn't exceed this count. The PLC is then put into run mode from a stop or power down state, transferring the counter value to D200 and D201 on each subsequent scan.

In the event of an up/down counter reaching its max set value, it will pause counting until the count is reduced below the limit. However, this delay could potentially result in damage to the equipment being controlled. Failure to enable the high-speed counters on every scan may cause the inputs tied to them to function as regular inputs instead. It's common for the inputs connected to encoders to remain unused in the program and cannot be cross-referenced, even though they are active.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's important to note that while the ladder rung may resemble a typical counter, hardware/software counters function differently. The compiler recognizes that these counters are meant for high-speed operations. When active under continuous enablement, the input count pin is linked to the relevant input. Without enablement, the high-speed mode behaves like a standard input, with parameters such as a 10ms transition from true to false based on processor I/O updates. Enabling HSC or interrupt bypasses the input filter, allowing for instant access in either mode.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky explained that while the ladder rung may appear similar to a regular counter, hardware/software counters function differently. The compiler recognizes these counters as being for high-speed purposes. When enabled under continuous enablement, the input count pin is linked directly to the relevant input, operating at high speeds. Without enablement, the high-speed mode acts as a normal input with a 10ms true to false transition based on I/O updates. Enabling for High-Speed Counter (HSC) or interrupt bypasses the input filter for instant access. Thank you for clarifying, I understand now. I am still figuring out the specifics of the first rung (where is K99999999?), but it is set up and X0/X1 trigger the count.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While it may seem unusual at first, the approach to programming in south east Asia differs from other PLC systems. In Japan, they typically use the Timer number as a contact instead of the done bit or Counter.Q. For instance, calling a counter like [C 200, K300] sets the limit before the count contact becomes true. Conversely, calling a counter like [C200, D200] loads the current count into a D register. You can also load a Counter in a comparison, such as [CMP > C200, 150]. In the newer IEC format, they have introduced IEC timers with additional bits like IN, PT, Q, ET, and Preset variables, similar to other PLCs like AB.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the context of hardware counters, Parky pointed out that M8000 in the Mitsubishi M8002 PLC is crucial for enabling high-speed counters to work effectively. These counters are directly linked to physical inputs X0-7, and to ensure accurate counting, M8000 must be activated from the first scan. The inputs X0 and X1 play a key role in incrementing or decrementing the count, with the counter value being transferred to D200 and D201 each scan. This up/down counter is set to a maximum value of 99999 on the first scan, and M8002 is activated to run the system.

It is important to enable the high-speed counters on every scan to prevent the inputs from reverting to normal inputs. Any values above 360 in the encoder counts may cause issues, as the system is designed to only count up to 360 during regular operations. The resetting of the counter value on startup is done as a precautionary measure, but in some cases, retaining the numbers may be necessary to avoid losing the machine's position.

In a specific case involving a Chinese machine used in an American small business, the lack of proper support and language barriers have led to confusion about certain functions, such as the "Position" button acting as an origin/home offset. By not resetting the encoder counts on startup, the machine can maintain its position and avoid timing issues in subsequent operations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>arpus4KM</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Having a homing position in place is crucial for ensuring the machine resets correctly in case of power failures. Instead of automatically resuming from where it left off, the operator should be prompted to reset the machine in the correct sequence before starting the system. This process involves checking for normal start conditions and if needed, performing a homing or return sequence to ensure drives and cylinders are in the correct position. Servo drives often rely on a homing sensor to return to a home position before moving to the correct position, typically 0 counts. This precision is especially important for critical tasks like picking up items. Some systems may also periodically recalibrate in creep mode to maintain accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the significance of the K9999999 value in the rung assigned to C251 with an A/B encoder?</h4>
<p class='text-muted'><strong>Answer:</strong> - The K9999999 value in the rung assigned to C251 typically signifies either a maximum count value or setting C251 to 9999999 after the scan.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Why does the rung reset C251 to zero on the first scan after activating Run mode (M8000) and then change back?</h4>
<p class='text-muted'><strong>Answer:</strong> - The rung resetting C251 to zero on the first scan after activating Run mode may be part of the programming logic to ensure proper initialization before the actual operation.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How does the rung involving transferring the press position readout (D200) to C251 every scan work?</h4>
<p class='text-muted'><strong>Answer:</strong> - The rung transferring the press position readout (D200) to C251 every scan is likely designed to continuously update C251 with the latest press position information for real-time monitoring or control purposes.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can you explain how the OTE instruction and reset functions work together in the context of the Mitsubishi FX3 programming manual?</h4>
<p class='text-muted'><strong>Answer:</strong> - The manual's explanations regarding the OTE instruction and reset functions working together may be vague, but typically, the OTE instruction is used to enable or disable an output based on a condition, while reset functions are used to initialize or clear specific variables or memory locations within the program.</p>
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

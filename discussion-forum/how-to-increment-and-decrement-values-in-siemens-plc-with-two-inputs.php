
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey everyone, I am currently delving into learning how to program a Siemens PLC and I am looking to achieve a specific function in Step 7 ladder logic. This involves working with two Boolean inputs, INP_1 and INP_2, and an output, OUT_1, which holds an integer value. The initial">
    <meta name="keywords" content="siemens plc, step 7 ladder logic, boolean inputs, inp_1, inp_2, out_1, integer value, increment values, decrement values, programming, ladder diagram, input signals, output signals, logic function">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-increment-and-decrement-values-in-siemens-plc-with-two-inputs">
    <title>How to Increment and Decrement Values in Siemens PLC with Two Inputs | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Increment and Decrement Values in Siemens PLC with Two Inputs | Oxmaint Community">
    <meta property="og:description" content="Hey everyone, I am currently delving into learning how to program a Siemens PLC and I am looking to achieve a specific function in Step 7 ladder logic. This involves working with two Boolean inputs, INP_1 and INP_2, and an output, OUT_1, which holds an integer value. The initial">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-increment-and-decrement-values-in-siemens-plc-with-two-inputs">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Increment and Decrement Values in Siemens PLC with Two Inputs | Oxmaint Community">
    <meta name="twitter:description" content="Hey everyone, I am currently delving into learning how to program a Siemens PLC and I am looking to achieve a specific function in Step 7 ladder logic. This involves working with two Boolean inputs, INP_1 and INP_2, and an output, OUT_1, which holds an integer value. The initial">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-increment-and-decrement-values-in-siemens-plc-with-two-inputs"
      },
      "headline": "How to Increment and Decrement Values in Siemens PLC with Two Inputs",
      "description": "Hey everyone, I am currently delving into learning how to program a Siemens PLC and I am looking to achieve a specific function in Step 7 ladder logic. This involves working with two Boolean inputs, INP_1 and INP_2, and an output, OUT_1, which holds an integer value. The initial",
      "author": {
        "@type": "Person",
        "name": "rockerzz"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-07",
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
                <h1 class="text-white">How to Increment and Decrement Values in Siemens PLC with Two Inputs</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>rockerzz</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>16 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">833</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">47</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hey everyone, I am currently delving into learning how to program a Siemens PLC and I am looking to achieve a specific function in Step 7 ladder logic. This involves working with two Boolean inputs, INP_1 and INP_2, and an output, OUT_1, which holds an integer value. The initial value of OUT_1 is set at 0. 

The objective is for OUT_1 to increase by 1 whenever INP_1 is pressed, and decrease by 1 whenever INP_2 is pressed. For example, if INP_1 is pressed 5 times and INP_2 is pressed 3 times, the desired output would be 2. 

I appreciate any guidance or assistance on how to achieve this. Thank you for your help.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is this task related to a school course or assignment?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I prefer to learn independently.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rockerzz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you using software such as TIA Portal for your programming needs? If so, which version are you using, or are you sticking with STEP 7 Classic? There are several methods available to help you achieve your goals. To start off, you will require a "Counter" or "Counters" to track pulses, counts, or the number of times a button is pressed. You can utilize an "UP Counter," a "DOWN Counter," or a combination of both, known as an "UP/DOWN Counter." Alternatively, you can utilize mathematical instructions to manage the count of button presses. Depending on the values obtained from these counters, activate your output accordingly. Additionally, consider using "One Shots," "Rising Edge," or "Falling Edge" functions. You might also need "Clamps" or other logic/math to prevent the count from exceeding a certain threshold, such as "0" or a custom value. If you have experience with PLCs like Allen Bradley, develop your logic using AB and then search for similar instructions in Siemens to create a similar ladder program.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have experience using the Simatic manager and have a basic understanding of Studio 5000. The overall structure of Studio 5000 appears different to me, possibly because I am new to it. Comparatively, I find Allen Bradley much more intuitive and user-friendly. Thank you for your help.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rockerzz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Understanding the fundamentals of STEP 7 is crucial for mastering its logic. By exploring the help files, especially focusing on OBs, you can easily navigate through the process. Similar to DBs and FBs in Logix, STEP 7 also offers a variety of functions. I can provide initial guidance to help you kickstart your journey and build upon it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Imagine a scenario where photo eye sensors serve as the INPUTS for a conveyor system. Whenever these sensors detect a moving part, the OUTPUT is updated accordingly. In this setup, there are two photo eye sensors, labeled P_1 and P_2. For example, the first part is detected at P_1 (Output = 1), followed by the second part also being detected at P_1 (Output = 2). When the first part moves to P_2, the output decreases to 1 (Output = 2-1 = 1). The goal is to ensure that the value stays within the limits of the data type (e.g., int) without resetting. Using a simple counter may lead to reaching a limit and resetting to 0, which is undesirable. The objective is to turn on an LED once all parts detected at P_1 have been accounted for. How can this be achieved effectively?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rockerzz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the process, the first component is detected at point P_1, with the output set to 1. This involves triggering an up/down counter connected to the UP input, reading the current counter value, and transferring it to the Output in the INT register. This process is repeated for all up counts. Subsequently, the first part is identified at P_2, resulting in an output of 1. A one-shot operation is used on an up/down counter linked to the DOWN input to read the current counter value and assign it to the INT register. Alternatively, a register like MW or a DB declared as INT can be set up instead of counters. When components are detected during UP counts, 1 is added to the designated MW or DB register declared as INT; during DOWN counts, 1 is subtracted. The same register will retain the current value, which can then be transferred to another output register. When all components from P_1 are detected, an LED is activated. To prevent the counter/register from exceeding a fixed value or going below zero, logic with "Clamps" needs to be implemented.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When powering up, remember to reset the selected register and consider using de-bounce timers, such as 50 milliseconds, to prevent sensor flickering and false counts. There may be other important details to keep in mind as well. Hopefully, this information proves helpful.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>bkottaras</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you familiar with the mechanics of the scan cycle? Exploring how the scan cycle operates can provide valuable insights.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to efficiently track counts in a manufacturing setting, consider using one-shot triggers connected to both up and down counters. By reading the current counter values and transferring them to designated registers, such as a Memory Word (MW) or a Database (DB) declared as INT, you can monitor the quantity of parts detected. 

For each up count detected, increment the selected MW or DB register by 1. Conversely, for each down count detected, decrement the register by 1. To ensure the counter does not exceed a specified value or drop below 0, implement logic to manage these conditions effectively.

Utilizing a MW or DB register as your output source, transfer the current count values to another register. By moving the counts to the designated output, you can accurately track production numbers. Thank you for the guidance on incorporating necessary "Clamps" to control counter limits.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rockerzz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy inquired about one's comprehension of the scan cycle process. Enhance your knowledge by clicking to learn more. I possess a basic understanding of the scan cycle.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rockerzz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using CTUD, it can fulfill most of your requirements. Connect INP_1 to CUINP_2 and CDOUT_1 to CV to achieve this. The INT instruction allows you to count up to 32,767. Reset the count to zero with the R instruction, or reset to a specified value using the LD instruction. The QU output will be 1 when CV is greater than PV, while QD will be 1 when CV equals 0. To ensure accurate counting, utilize a --|P|-- (Positive Signal Edge) for your inputs as suggested by others. This will prevent the count from incrementing with every scan cycle where the input is 1. With a scan time of less than 10ms, the process is much faster than manually pressing and releasing a button.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Puddle</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rockerzz inquired about limiting the value within the data type and avoiding resets. The goal is to turn on an LED when all parts detected in P_1 are detected. To achieve this, prevent the P_1 pressed condition from reaching the counter by implementing a comparison instruction. Ensure the count value does not go below 0 by adding logic for Ctr.CV > 0. This change in logic ensures that a button press cannot affect the counter once it reaches its limit. Utilize Boolean logic operations, including AND, OR, and NOT, to create complex ladder logic instructions. Understanding DeMorgan's Laws is also helpful in this context.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dr. Bitboy asked if you comprehend the mechanisms of the scan cycle. Rockerzz responded, indicating a basic understanding. However, a general understanding is inadequate when it comes to PLC programming. Time is crucial in this field, and the scan cycle acts as the heartbeat of the system. Knowing when an event occurs is often more critical than knowing what the event is. Dive deeper into this concept by checking out a helpful video series on the topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Make sure to pay close attention to the posts made by@bkottarasabove. Today's lesson in summary (TL;DR): When searching for information on the term "counter simatic manager" on platforms like Google or YouTube, you will come across guides explaining how to achieve your desired outcome. The crucial aspect highlighted by various users is the presence of a one-shot feature within counters. Beginners often overlook the inner workings of a one-shot, focusing solely on its external behavior in response to inputs and not comprehending the concept of time involved.

In terms of background information, our focus is on the "Start/Stop Circuit" model to showcase the implementation of boolean logic operations (AND/OR/NOT) in ladder logic. However, we often fail to delve deeper into the subject matter. A key point missed is that the rung includes instructions that operate on the same bit location in memory but at different time intervals, resulting in varying outcomes.

Furthermore, the one-shot logic heavily relies on timing aspects. While PLCs come equipped with built-in one-shot instructions, understanding the underlying logic can be achieved through contacts and coils. Similar to the scenario described above, the handling of memory bits involves writing values during the current scan cycle and testing for values written in the previous scan cycle.

To further elaborate, consider including additional memory bits for separate functions such as adding or subtracting based on trigger inputs. By incorporating various strategies, such as utilizing atomic operations or integer tags, you can effectively manage the timing aspect of these operations and ensure accurate outcomes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate everyone who responded to my query. I was able to successfully resolve the issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>rockerzz</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I increment and decrement values in Siemens PLC using two inputs?</h4>
<p class='text-muted'><strong>Answer:</strong> - To achieve this in Step 7 ladder logic, you can use the following approach: Increase the value of OUT_1 by 1 when INP_1 is pressed and decrease it by 1 when INP_2 is pressed.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How do I initialize the output value in Siemens PLC ladder logic?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can set the initial value of OUT_1 to 0 in the ladder logic program.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. What happens if both INP_1 and INP_2 are pressed simultaneously?</h4>
<p class='text-muted'><strong>Answer:</strong> - In this case, the logic should be designed to prioritize either incrementing or decrementing the value of OUT_1. Typically, the design would prioritize one action over the other.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Can I adjust the increment and decrement values in the Siemens PLC program?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, you can modify the increment and decrement values by changing the logic in the ladder program to adjust the amount by which OUT_1 is increased or decreased.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Is there a specific function block or instruction to handle incrementing and decrementing values in Siemens PLCs?</h4>
<p class='text-muted'><strong>Answer:</strong> - While there are various ways to implement this functionality, you can utilize basic ladder logic instructions such as XIC (eXamine if Closed) and XIO (eXamine if Open) to increment and decrement the value of OUT_1 based on the inputs received</p>
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

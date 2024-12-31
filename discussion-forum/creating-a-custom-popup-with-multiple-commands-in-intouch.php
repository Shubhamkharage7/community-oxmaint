
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Are you unsure where to start when it comes to creating a popup with multiple commands? In the past, I used Citect for this purpose, so I know it can be done. Typically, these commands include actions like open/close, trip/close, start/stop. In the popup, there are usually 5 buttons:">
    <meta name="keywords" content="intouch custom popup, multiple commands, citect integration, command buttons, open/close actions, trip/close actions, start/stop actions, popup buttons, select command, clear button, exit button, execute button, status display, command selection">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/creating-a-custom-popup-with-multiple-commands-in-intouch">
    <title>Creating a Custom Popup with Multiple Commands in InTouch | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Creating a Custom Popup with Multiple Commands in InTouch | Oxmaint Community">
    <meta property="og:description" content="Are you unsure where to start when it comes to creating a popup with multiple commands? In the past, I used Citect for this purpose, so I know it can be done. Typically, these commands include actions like open/close, trip/close, start/stop. In the popup, there are usually 5 buttons:">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/creating-a-custom-popup-with-multiple-commands-in-intouch">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Creating a Custom Popup with Multiple Commands in InTouch | Oxmaint Community">
    <meta name="twitter:description" content="Are you unsure where to start when it comes to creating a popup with multiple commands? In the past, I used Citect for this purpose, so I know it can be done. Typically, these commands include actions like open/close, trip/close, start/stop. In the popup, there are usually 5 buttons:">
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
        "@id": "https://community.oxmaint.com/discussion-forum/creating-a-custom-popup-with-multiple-commands-in-intouch"
      },
      "headline": "Creating a Custom Popup with Multiple Commands in InTouch",
      "description": "Are you unsure where to start when it comes to creating a popup with multiple commands? In the past, I used Citect for this purpose, so I know it can be done. Typically, these commands include actions like open/close, trip/close, start/stop. In the popup, there are usually 5 buttons:",
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
                <h1 class="text-white">Creating a Custom Popup with Multiple Commands in InTouch</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>11 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">1316</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">399</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Are you unsure where to start when it comes to creating a popup with multiple commands? In the past, I used Citect for this purpose, so I know it can be done. Typically, these commands include actions like open/close, trip/close, start/stop. In the popup, there are usually 5 buttons: 2 "SELECT" command buttons, a "CLEAR" button to reset the selected command, an "EXIT" button, and an "EXECUTE" button for confirmation. Additionally, a text box displays the selected command or status.

I want to streamline this process by creating a single popup that can be reused. For example, when selecting 52T1 breaker commands from the main page, the popup titled "52T1 Breaker" would display commands like "TRIP" and "CLOSE". After selecting a command like TRIP, a message would confirm the selection and set a memory integer to 1, indicating the chosen command. Pressing "EXECUTE" would send the command to the PLC, display a confirmation message for 1 second, and then reset values.

I have a general idea of what needs to be done, but I need guidance on the best way to implement the code, especially since I'm not familiar with InTouch script syntax. How can I specify which button opens the popup, and how should I structure the script within the popup? Any examples or suggestions would be greatly appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Several years ago, I implemented a feature for a valve control system where a number could be passed when activating a popup, such as through a parameter or text input when a function key or touch area was pressed. Each valve and motor had a designated touch area that would bring up a control dialog with the corresponding valve number details passed as a parameter. Unfortunately, I no longer have access to Intouch documentation to provide a guide on how to replicate this feature. Similar functionalities can be found on various Scada systems available in the market today.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have successfully initiated a task: Displaying a "POPUP" message, setting POPUP_CMD_SEL to 1. The real challenge lies ahead when dealing with script syntax.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the scenario where I have two breakers, 52T1 and 52T2, on my main 1-Line page that open the same popup page named CMD_POPUP, it's important to determine which button triggered the popup. To achieve this, consider utilizing "Indirect" tags in your InTouch scripting. By creating the CMD_POPUP with tags like "Breaker_Execute" as an indirect tag, you can set the Breaker_Execute tag to 52T1_Execute in the action script that opens the popup. This allows the popup to inherit properties and actions from the specific button that triggered it, such as a link to a PLC register or a descriptive text like "52T1 TRIP COMMAND SELECTED".

Repeat the process for the other breaker, 52T2, by using its trigger script to open the same popup with its unique properties. For further guidance on using Indirect tags in InTouch, refer to the help pages for a more detailed explanation. Good luck with your scripting!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aardwizz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indirect tags serve as "pointers" to other tags, allowing you to display data from multiple sets of tags in a single InTouch window. Rather than creating separate windows for each piece of data, you can utilize indirect tags to showcase values from different source tags associated with individual pumps within a single window.

By utilizing a QuickScript or operator action, you can assign indirect tags to source tags. For instance, the script statements below demonstrate how to link two PumpRPM tags to an indirect analog tag named IndPumpRPM based on the value of the PumpNo tag:

IF PumpNo == 1 THEN
IndPumpRPM.Name = "PumpRPM1";
ELSE
IndPumpRPM.Name = "PumpRPM2";
ENDIF;

When an indirect tag is equated to a source tag, it behaves as if it were the source tag itself. The values of the original source tag and the indirect duplicate tag are synchronized, ensuring that any changes in one are reflected in the other.

Indirect tags come in discrete, analog, and message types, similar to various memory and I/O tags. For further details on indirect tags, refer to the guide on Defining Indirect Tags. Ready to experiment with indirect tags and enhance your application's efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After working on my popup script, I have implemented a section in the Window that houses all my command tags. One specific part of the script checks for certain conditions (such as POPUP_CMD_NUMBER being equal to 1, POPUP_CMD_BUTTON_INT being equal to 2, and POPUP_CMD_SEND being equal to 1) and if these conditions are met, it executes the ESTOP command and displays a message. I would like to add a 1-second pause before hiding the "P10_CMD" element so that the operator can see the command execution message. Do you know of a simple way to achieve this? I am not an expert in scriptwriting.</p>
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
            <p>Creating popups in Wonderware is a straightforward process. Simply structure your tags with a common suffix such as "pumprunx" or "pumpfltx." Then, write a script for your button that stores the value of X in a memory tag. When the popup window is shown, use the on show script to set all the relevant indirect tags. If your tags do not follow a pattern, you can directly assign the indirect tag names in the button script. This will ensure smooth functionality when opening the popup window.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To automatically hide a popup after a certain number of seconds, set an integer memory tag to 0 when the popup is shown. In the script that runs while the popup is open, increase the memory tag by 1 every 250 milliseconds. If the memory tag exceeds 4, hide the popup. 

A pro tip: avoid hiding the "window name" directly, as this can cause broken links if the window name is changed later on. Instead, use HideSelf when closing the current window or create a string tag to store window names and assign them in the application start script. This helps ensure smooth navigation and avoids errors when making changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am pleasantly surprised by the success of using HideSelf here, thank you. I am currently testing the 4 X 250ms feature. However, I am finding it difficult to determine the condition for counting since the PLC resets the actual command (G1_ESTOP_CMD). Any other actions in this sequence are only triggered once, resulting in a count of only "1" and keeping the popup window open. Despite these challenges, I am hopeful for the potential of this feature. Thank you for your help and support.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Understood, I appreciate it!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dalporto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee suggested setting an integer memory tag to 0 on the popup show action and incrementing it by 1 every 250ms in the while popup open script. If the memory tag is greater than 4, the popup will automatically hide itself. A helpful tip is to avoid hiding the window name to prevent issues with broken links in the future. Instead, use HideSelf when closing the current window or create a string tag to store window names and assign them in the application start script. Consider using "On True" to display the popup and "While True" for timing to determine when to close it.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>NetNathan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>NetNathan suggested using the "On True" command to display a popup, followed by the "While True" timing to schedule the shutdown. However, it is unclear whether the "While True" command waits for the first timeout before executing the script. To play it safe, it is recommended to test it first before implementing. A different approach could be trying an iteration as it is a proven method for this purpose.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-08-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I create a custom popup with multiple commands in InTouch?</h4>
<p class='text-muted'><strong>Answer:</strong> - To create a custom popup with multiple commands in InTouch, you can start by defining the commands and buttons you want to include in the popup. Consider using buttons like "SELECT," "CLEAR," "EXIT," and "EXECUTE" along with a text box to display the selected command or status. You can then write the necessary script within the popup to handle button actions and interactions with the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Can you provide an example of how to implement a reusable popup for selecting breaker commands in InTouch?</h4>
<p class='text-muted'><strong>Answer:</strong> - To implement a reusable popup for selecting breaker commands in InTouch, you can create a popup titled "52T1 Breaker" with buttons for commands like "TRIP" and "CLOSE." Upon selecting a command, you can confirm the selection, set memory integers, send commands to the PLC upon pressing "EXECUTE," display confirmation messages, and reset values as needed. Structuring the script within the popup is essential for handling these functionalities efficiently.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How do I specify which button opens the custom popup in InTouch?</h4>
<p class='text-muted'><strong>Answer:</strong> - In InTouch, you can specify which button opens the custom popup by assigning the appropriate script or action to the button's "OnPush" event. By defining the behavior for opening the popup upon button press, you can ensure that users can access the popup when needed within your application.</p>
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

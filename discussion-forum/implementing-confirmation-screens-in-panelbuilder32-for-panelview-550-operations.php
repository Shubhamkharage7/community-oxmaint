
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="In our Small Scale Lab, we have encountered issues with Operators mistakenly starting/stopping the wrong Vacuum Pumps. To prevent this, we have brainstormed solutions such as implementing Screen Control Logic to reset back to the Main Menu after a certain period. However, due to multiple Panels running the same">
    <meta name="keywords" content="confirmation screens for panelbuilder32, panelview 550 operations, vacuum pumps control logic, screen control solutions, display layers in panelbuilder, configuration management challenges, dynamic text display for">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/implementing-confirmation-screens-in-panelbuilder32-for-panelview-550-operations">
    <title>Implementing Confirmation Screens in PanelBuilder32 for PanelView 550 Operations | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Implementing Confirmation Screens in PanelBuilder32 for PanelView 550 Operations | Oxmaint Community">
    <meta property="og:description" content="In our Small Scale Lab, we have encountered issues with Operators mistakenly starting/stopping the wrong Vacuum Pumps. To prevent this, we have brainstormed solutions such as implementing Screen Control Logic to reset back to the Main Menu after a certain period. However, due to multiple Panels running the same">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/implementing-confirmation-screens-in-panelbuilder32-for-panelview-550-operations">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Implementing Confirmation Screens in PanelBuilder32 for PanelView 550 Operations | Oxmaint Community">
    <meta name="twitter:description" content="In our Small Scale Lab, we have encountered issues with Operators mistakenly starting/stopping the wrong Vacuum Pumps. To prevent this, we have brainstormed solutions such as implementing Screen Control Logic to reset back to the Main Menu after a certain period. However, due to multiple Panels running the same">
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
        "@id": "https://community.oxmaint.com/discussion-forum/implementing-confirmation-screens-in-panelbuilder32-for-panelview-550-operations"
      },
      "headline": "Implementing Confirmation Screens in PanelBuilder32 for PanelView 550 Operations",
      "description": "In our Small Scale Lab, we have encountered issues with Operators mistakenly starting/stopping the wrong Vacuum Pumps. To prevent this, we have brainstormed solutions such as implementing Screen Control Logic to reset back to the Main Menu after a certain period. However, due to multiple Panels running the same",
      "author": {
        "@type": "Person",
        "name": "Colt Hero"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-08",
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
                <h1 class="text-white">Implementing Confirmation Screens in PanelBuilder32 for PanelView 550 Operations</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Colt Hero</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">282</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">185</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>In our Small Scale Lab, we have encountered issues with Operators mistakenly starting/stopping the wrong Vacuum Pumps. To prevent this, we have brainstormed solutions such as implementing Screen Control Logic to reset back to the Main Menu after a certain period. However, due to multiple Panels running the same PanelBuilder App, creating a separate app for just one Panel could lead to Configuration Management challenges.

As an alternative, we are considering adding an extra Display layer with a confirmation message before initiating actions on the Vacuum Pumps. This will require strategically placing YES & NO buttons to avoid accidental inputs. Despite having multiple actions such as START, STOP, and Nitrogen Valve OPEN/CLOSE, we aim to streamline the process by having a single Confirmation Screen for each Dryer.

To achieve this, we need to find a way to transfer information from the Upper Level Display to the new Confirmation Display for dynamic text display and Bit setting/clearing for the SLC 5/05 PLC. One approach could involve using the PLC Tag List as a temporary data storage area, including defining TEXT Tags like "D4510" or "D4511" to dynamically display relevant information on the Confirmation Screen. Although attempting to define these tags as "LOCAL" String Tags in PanelBuilder32 resulted in errors due to missing Controller information, we may need to explore other methods to make this functionality work seamlessly.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>There are no local tags available in PV that I am aware of. In order to use placeholders, you will need to create a string or ASCII data file in the PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>jimtech67</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jimtech67 mentioned that there are no local tags in PV systems, so setting up a string or ASCII data file in the PLC will be necessary. It's important to create a simple screen with a prompt like "YOU ARE ABOUT TO MAKE CHANGES TO DRYER D4510 ... CONTINUE (Y/N)?" for confirmation. This screen can have a larger font for emphasis and even make the equipment tag blink. Pressing YES will go back to the previous screen, while NO will return to the main menu. This approach is efficient, as it can be applied to all panels without altering the PLC application. Additionally, confirmation screens can be added for every function if requested by Operations to prevent errors on other panels. While Operations suggested keeping motor outputs permanently on for easy wall switch use, this solution was deemed non-standard and unsustainable in the long run.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Colt Hero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, the "epiphany" I had does not work as intended. To resolve this issue, I will need to initiate the START (Motor) or OPEN (valve) function on the second press of the button, after navigating back from the Confirmation Screen. If not, the system will be stuck in an endless loop between the "Main" and "Confirmation" screens. Additionally, the bits will also need to be cleared for the process to function correctly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Colt Hero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Attempting to outwit a skilled operator? Good luck with that task!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mickey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Oops, it seems I made a mistake! While driving home from work, I realized that my original plan won't work. I will need to make some adjustments so that the top-level Screen can communicate with an intermediate Tag instead of directly with the Motor Tag. Additionally, I need to ensure that the "Confirmation Screen" is displayed during this process. The YES button on the Confirmation Screen will then write to the Motor Tag and return to the top-level Screen. Can this be achieved with one of these Panels? I am looking for a solution that eliminates the need for Screen Control Logic and avoids breaking the app into separate entities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Colt Hero</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is PB32 unable to pass parameters to a window? It has been a while since I last worked on this. However, a simple solution can be achieved with some PLC modifications. When the window popup confirms, assign a unique value to an integer tag in the PLC. Then, incorporate an EQU integer tag X in conjunction with the same initial PB tag in your logic to initiate the pumps. Once the pumps are started, clear the integer tag for future use. 

For example, when the popup is clicked to start pump 1, assign the integer pump_no to 1 and launch the confirmation popup. In the popup, the start pb is a single tag for all pumps. The logic in the PLC is as follows: Xic start_pb equ pump_no 1 OTE pump 1 start CLR pump_no. The logic remains consistent for every pump, with the equ value and OTE tag varying accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>robertmee</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Robertmee had the initial idea of using bits instead of integers, which would work for the project. However, he is still unsure about the functionality of the "Confirmation" pop-up screen. When the Operator clicks "YES" to start the motor, it is necessary to go back to the previous screen. This may require a "Previous Screen" button that can also set the motor bit simultaneously. If this is not possible, a separate "Back" button may be needed, although it could make the system less efficient.

There is also the scenario where the Operator presses the "NO" button on the "Confirmation" screen and walks away without confirming. To address this, a timeout is needed to clear the pending flag or integer to prevent someone else from accidentally starting the motor or opening a valve.

It would be beneficial to incorporate Screen Control, but incorporating multiple apps may not be necessary at this point since all panels are the same and the changes do not justify creating a separate app.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Colt Hero</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Within the button's action script, be sure to establish your starting point and then conceal the window. In the PLC program, remember to reset the push button after it has been utilized. It is important to break the habit of utilizing momentary push buttons in Human Machine Interfaces (HMIs). Ensure that the push button is always activated in the HMI and deactivated in the PLC. Another useful tip is to assign an integer value in the PLC and set it to not equal to zero. Use a timer for 30 seconds to ensure the integer value remains active for a specific duration before being cleared.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-09-2024</span></li>
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
<h4 class='text-dark'>FAQ: 1.  Why is implementing confirmation screens important in PanelBuilder32 for PanelView 550 operations?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Implementing confirmation screens can help prevent operators from mistakenly starting/stopping the wrong equipment, such as Vacuum Pumps, by requiring a deliberate action before initiating any process.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can multiple Panels running the same PanelBuilder App handle the implementation of confirmation screens effectively?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: One approach could involve adding an extra display layer with confirmation messages and strategically placed YES & NO buttons to avoid accidental inputs, ensuring a consistent user experience across all Panels.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  What is the suggested method for transferring information from the Upper Level Display to the new Confirmation Display in PanelBuilder32 for dynamic text display and Bit setting/clearing for the SLC 5/05 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Using the PLC Tag List as a temporary data storage area and defining TEXT Tags like "D4510" or "D4511" can enable dynamic information display on the Confirmation Screen. However, defining these tags as "LOCAL" String Tags in PanelBuilder32 may result in errors, prompting the need to explore alternative methods for seamless functionality.</p>
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

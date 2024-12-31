
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have a weighing system that needs to be modernized. The system consists of 14 hoppers, each equipped with a load cell that sends a signal to an amplifier with an output signal ranging from 0 to 10 volts. Can a Programmable Logic Controller (PLC) with analog input modules">
    <meta name="keywords" content="weighing system, modernize, plc, hopper control, load cell, amplifier, analog input modules, preset value, solenoid valve, material release, packing machine, time response limitations, scan time, accuracy, efficiency, compare weight">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/modernizing-weighing-system-with-plc-for-hopper-control">
    <title>Modernizing Weighing System with PLC for Hopper Control | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Modernizing Weighing System with PLC for Hopper Control | Oxmaint Community">
    <meta property="og:description" content="I have a weighing system that needs to be modernized. The system consists of 14 hoppers, each equipped with a load cell that sends a signal to an amplifier with an output signal ranging from 0 to 10 volts. Can a Programmable Logic Controller (PLC) with analog input modules">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/modernizing-weighing-system-with-plc-for-hopper-control">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Modernizing Weighing System with PLC for Hopper Control | Oxmaint Community">
    <meta name="twitter:description" content="I have a weighing system that needs to be modernized. The system consists of 14 hoppers, each equipped with a load cell that sends a signal to an amplifier with an output signal ranging from 0 to 10 volts. Can a Programmable Logic Controller (PLC) with analog input modules">
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
        "@id": "https://community.oxmaint.com/discussion-forum/modernizing-weighing-system-with-plc-for-hopper-control"
      },
      "headline": "Modernizing Weighing System with PLC for Hopper Control",
      "description": "I have a weighing system that needs to be modernized. The system consists of 14 hoppers, each equipped with a load cell that sends a signal to an amplifier with an output signal ranging from 0 to 10 volts. Can a Programmable Logic Controller (PLC) with analog input modules",
      "author": {
        "@type": "Person",
        "name": "hesham"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-01",
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
                <h1 class="text-white">Modernizing Weighing System with PLC for Hopper Control</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>hesham</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>10 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">6882</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">432</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have a weighing system that needs to be modernized. The system consists of 14 hoppers, each equipped with a load cell that sends a signal to an amplifier with an output signal ranging from 0 to 10 volts. Can a Programmable Logic Controller (PLC) with analog input modules be used to compare the weight in each hopper with a preset value and trigger a solenoid valve to release the material into a packing machine? Are there any time response limitations for the PLC (scan time)? Will this system be accurate and efficient? I look forward to your response.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Most PLC brands are equipped with analog input cards that can accept a 0-10 VDC signal. Through the use of mathematical functions or built-in scaling functions (depending on the brand), this input data can be converted into engineering units. PLCs typically feature ">" and "<" functions for comparing actual weight to a predetermined limit and activating hoppers accordingly. Utilizing a PLC is a reliable solution for this problem unless ultra-fast response time (less than a few milliseconds) is required. It is advisable to reach out to local distributors for assistance in selecting PLC hardware and programming software, allowing them to offer guidance in getting started with the setup.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tom Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your interest. Each of the 14 hoppers is simultaneously fed from a linear vibrator, which in turn is powered by a main radial vibrator. This setup allows for a continuous weighing process for all 14 hoppers at once. The system compares the combined weight of the hoppers to a pre-set value and only opens one hopper accordingly.

There is a concern that the PLC may struggle to update the readings from all 14 channels simultaneously, potentially causing a delay in the opening and closing signals for the hoppers. This delay, attributed to scan time, could result in the weight being slightly higher than the desired setting, leading to inaccuracies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>03-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hesham</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am not completely certain about the specific issue you are facing, but a Programmable Logic Controller (PLC) can address issues such as scan time, material-in-flight, and valve closing time through the use of a pre-act feature. Rather than stopping the process once the setpoint is reached, the process stops when the setpoint minus the pre-act value is achieved. By carefully adjusting the pre-act setting, the desired amount of material can be transferred effectively. Additionally, a system can be set up to automatically adjust the pre-act value based on the process performance, reducing undershoots and overshoots. If precision is crucial, using a PLC is essential. How do you plan to achieve the same level of accuracy without incorporating a PLC?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Allen Nelson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to accuracy in systems, it's important to not just focus on PLC scan time, but also consider the resolution and update time of analog input modules. Generally, higher resolution in analog modules means less frequent updates for each channel. It's crucial to review the data sheets of the modules you are considering, as some channels may not be updated as frequently as once per I/O scan.

A key factor to consider is how often fresh load cell data can be expected to be received by the PLC. This, combined with the fill rate of hoppers, will determine if weight variation falls within an acceptable tolerance range. For example, if hoppers are filling at 100 grams per second and the PLC is receiving load cell updates every 50 milliseconds, increments of 5 grams will be used.

Additionally, it's essential to choose the right size of load cell for the application to ensure accurate measurements. Avoid using a 1000 Kg load cell to measure a 10 Kg load to prevent inaccuracies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Many leading PLC brands provide specialized weighing modules, which can directly connect with load cells and offer high-speed outputs. These modules handle weighing calculations and outputs autonomously, without being affected by processor scan time. For more details on Schneider Electric's weighing module options, visit their website at http://www.schneiderautomation.com/Default.htm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Jim Dungar</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I am considering implementing a system using embedded systems with digital and analog I/O cards. There are numerous manufacturers offering such systems in the market today. Do you believe it would be more beneficial, taking into account factors like "material flight time" and considering "STEVE's" mention of selecting the correct load cell and ensuring timely response for valves and vibrators? What are your recommendations for this setup?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hesham</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During my research, I came across the term "vibrators", which initially brought to mind handling solids, possibly powders. Working with such materials can be challenging, especially when it comes to accurately dispensing them (speaking from personal experience of being permanently covered in toner). Now, I'm contemplating the key differences between an embedded system with digital and analog I/O versus a PLC. This is a common question we receive, but are often hesitant to answer.

Here are some key points to consider: 
- An embedded system may offer faster response times, as it is solely focused on the time-critical process at hand.
- Initial costs for an embedded system may be lower, but additional expenses for debugging, maintenance, and potential production downtime can level the playing field.
- An embedded system lacks online monitoring and programming capabilities, which are crucial for debugging.
- Programming an embedded system yourself may limit flexibility in making changes to the code. Do you have the necessary skills or will you need to outsource? Consider the overall cost implications.

Regardless of the system you choose, factors such as analog resolution and system response time should be a priority. How do you plan to control the flow? Will a butterfly valve be sufficient, and are you confident in its speed and consistency of closure?

Consider other logistical elements: How will you input setpoints? Will the dispensing amount be fixed or adjustable? How will you initiate or halt the dispensing process? Will pushbuttons suffice, or is a central HMI needed?

It's evident that more design planning is necessary before determining whether a PLC is the right choice for your project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Allen Nelson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As mentioned earlier, the machine already has a malfunction control system in place, possibly an older embedded system. My plan is to upgrade this system with a new one that will improve efficiency. I will be working with frozen vegetables such as beans, okra, and potatoes. The set point for the system will be adjusted using a Human-Machine Interface (HMI) to ensure optimal performance for different products. To stop the flow in the system, the vibrator corresponding to the hopper can be deactivated once the setpoint is reached. The hopper will then be opened using a solenoid valve and piston for product discharge. This will be a new experience for me, as I have not worked with embedded systems before. Thank you for your guidance on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>hesham</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I utilize 4 linear dosers equipped with weighing modules, each connected to a separate weight controller to fill 4 dosing heads that all funnel into one. These controllers provide digital signals when the correct weight is reached (each dosing head for a bag of beans). The system determines which dosing head is first to reach the desired weight before releasing into the hopper, rather than following a sequential order. Is a delta plc required for this function?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zlatko_p</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The most effective method is to create a queue system using a series of registers, similar to a shift register. With only 4 weighers, there is no need for a physical shift register, as it can be achieved through simple logic. For instance, you can use an array of registers like reg1 to reg5. When a feeder reaches its weight limit, assign its number to reg1 and then move it down. This process is more complex than a standard shift register. An easy way to implement this is by using ladder logic, similar to the example shown in a Mitsubishi system using Function Block Diagrams (FBD). However, indirect addressing is recommended for a more streamlined code, although it may be challenging to debug if you are not familiar with it. Since there are only 4 feeders, the program is not extensive. During testing, an HMI simulation was used to mimic the filling of feeders by setting various bits such as feeder ready, hopper ready, and hopper dropped. These bits should be controlled or set when specific conditions are met, such as when a feeder reaches the correct weight or when a pack is in place for filling.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
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
<h4 class='text-dark'>FAQ: 1. Can a Programmable Logic Controller (PLC) with analog input modules be used to modernize a weighing system with 14 hoppers and load cells?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, a PLC with analog input modules can be used to compare the weight in each hopper with a preset value and trigger a solenoid valve for material release.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Are there any time response limitations for the PLC (scan time) in this application?</h4>
<p class='text-muted'><strong>Answer:</strong> - The time response or scan time of the PLC will depend on the specific model and programming complexity, but it should be fast enough for real-time control in weighing applications.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Will the modernized system be accurate and efficient for controlling material flow into a packing machine?</h4>
<p class='text-muted'><strong>Answer:</strong> - When properly configured and calibrated, the PLC-based system should provide accurate and efficient control of material flow based on the weight measurements from the hoppers.</p>
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

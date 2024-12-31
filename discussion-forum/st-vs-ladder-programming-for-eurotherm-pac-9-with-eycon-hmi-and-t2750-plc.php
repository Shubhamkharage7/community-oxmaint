
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello, I am currently experiencing occasional issues with a program I have running. Despite being experienced in ladder programming, I have incorporated ST and SFC in the construction of the program due to the specific software being used (Eurotherm PAC 9 with Eycon HMI and T2750 PLC). The program">
    <meta name="keywords" content="eurotherm pac 9, eycon hmi, t2750 plc, ladder programming, st programming, sfc programming, auto sequence, manual">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/st-vs-ladder-programming-for-eurotherm-pac-9-with-eycon-hmi-and-t2750-plc">
    <title>ST vs Ladder Programming for Eurotherm PAC 9 with Eycon HMI and T2750 PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="ST vs Ladder Programming for Eurotherm PAC 9 with Eycon HMI and T2750 PLC | Oxmaint Community">
    <meta property="og:description" content="Hello, I am currently experiencing occasional issues with a program I have running. Despite being experienced in ladder programming, I have incorporated ST and SFC in the construction of the program due to the specific software being used (Eurotherm PAC 9 with Eycon HMI and T2750 PLC). The program">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/st-vs-ladder-programming-for-eurotherm-pac-9-with-eycon-hmi-and-t2750-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ST vs Ladder Programming for Eurotherm PAC 9 with Eycon HMI and T2750 PLC | Oxmaint Community">
    <meta name="twitter:description" content="Hello, I am currently experiencing occasional issues with a program I have running. Despite being experienced in ladder programming, I have incorporated ST and SFC in the construction of the program due to the specific software being used (Eurotherm PAC 9 with Eycon HMI and T2750 PLC). The program">
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
        "@id": "https://community.oxmaint.com/discussion-forum/st-vs-ladder-programming-for-eurotherm-pac-9-with-eycon-hmi-and-t2750-plc"
      },
      "headline": "ST vs Ladder Programming for Eurotherm PAC 9 with Eycon HMI and T2750 PLC",
      "description": "Hello, I am currently experiencing occasional issues with a program I have running. Despite being experienced in ladder programming, I have incorporated ST and SFC in the construction of the program due to the specific software being used (Eurotherm PAC 9 with Eycon HMI and T2750 PLC). The program",
      "author": {
        "@type": "Person",
        "name": "norman oliver"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-07",
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
                <h1 class="text-white">ST vs Ladder Programming for Eurotherm PAC 9 with Eycon HMI and T2750 PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>norman oliver</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>12 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">577</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">480</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Hello, I am currently experiencing occasional issues with a program I have running. Despite being experienced in ladder programming, I have incorporated ST and SFC in the construction of the program due to the specific software being used (Eurotherm PAC 9 with Eycon HMI & T2750 PLC). The program includes a 20-step SFC auto sequence as well as a manual page where individual devices (such as door open/close, ram up/down, pump on/off) can be controlled via buttons for setup or maintenance purposes. To run the sequence successfully, it is important for these devices on the manual page to be turned off, for example, setting Door_open to 0. 

I am concerned about whether these manual instructions could potentially disrupt the running sequence if Door_open is set to 1. If I had used ladder programming, I would have included a normally open contact in an auto/manual rung to prevent manual operation. However, I am unsure of how to achieve this using ST. I would greatly appreciate any guidance, as I am still relatively new to using alternative programming methods compared to ladder logic.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Could manual instructions disrupt the execution sequence of a program? Hi Norman, Whether it's SFC or LAD, a poorly written program is still a poorly written program. Therefore, the answer is likely YES. SFC is something I plan to learn after retirement, but it could be your time now. Additionally, there should be a way to incorporate a negative response in SFC programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you considered mapping io to separate memory first before attempting to invert IO on a ladder or ST beforehand? Is there a simple command like NOT(myVariable) available for this purpose?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>08-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The use of "elseif" is essential in determining the outcome of conditions in a sequence. If both condition 1 and condition 2 are met, then "This" will be set to true. However, if condition 1 is met but not condition 2, then "This" will be set to false. In all other cases, "This" will also be set to false.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The straightforward solution is to initiate the motor if the start signal is received and the interlock is active, or if the motor is running but the manual mode is not engaged. While this logic may seem simple, ST programming is not well-suited for boolean operations like this. Ladder logic is more visually intuitive for understanding the automation process. I find IF-THEN statements to be verbose and prone to causing confusion. They often require more code and can lead to conditional jumps in compiled PLC programs.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In programming, utilizing "if else" statements efficiently is crucial for determining outcomes based on certain conditions without needing to see the entire sequence. By using the appropriate conditions and logic, you can minimize the number of lines in your code while still achieving the desired results. For example, you can set a default value of "false" for a variable, then use a succinct statement to change it to "true" if both condition 1 and condition 2 are met. This streamlined approach optimizes code readability and functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>I appreciate everyone for sharing their input. I will make sure to test out your different recommendations. In the meantime, could you please explain the distinction between :=1 and :=TRUE, as well as :=0 and :=False? Furthermore, it would be helpful to understand when it is best to use one over the other. Thank you for your assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>norman oliver</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone, I have utilized the following code to control the bottom door: ST:"[OpenTD.OP]:= 0;" to close it and :=1;" to open it. These commands are implemented through two buttons on a "manual" interface and are functioning properly. However, I am concerned about potential interference between ST:"[OpenTD.OP]:= 0;" and ST:"[OpenTD.OP]:= 1;" in a sequence. Could this potentially confuse the programmable logic controller (PLC)?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>norman oliver</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Norman Oliver expressed gratitude for the responses and will experiment with the various suggestions. Could you clarify the distinction between using :=1 or :=TRUE, and :=0 or :=False, and when it is best to use one over the other? Logical False/True is a bit command, used solely for bits, while 0/1 is numerical and should be used for words, ints, and so on. Both may work for bits, but they are different datatypes and may result in a compile error.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Lare</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Norman Oliver inquired about using a specific code to open and close a door in a programmable logic controller (PLC). He mentioned using ST:"[OpenTD.OP]:= 0;" to close the door and :=1;" to open it, both of which work well on a manual screen with buttons. However, he raised a concern about potential interference between the two statements. 

While some may question the validity of the syntax [tag_name]:=0;, it is important to note that assigning different values to the same tag in separate statements will not confuse the PLC. The PLC will simply execute each statement in the order they are evaluated, maintaining the assigned values accordingly.

Ultimately, successful PLC programming hinges on timing. Understanding when each statement is evaluated is crucial, as it determines the outcome of the program's execution. It's essential to consider the sequence and timing of statements to ensure the desired results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>09-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Lare pointed out that the command "Logical False / True" is specifically intended for working with bits, while 0/1 is meant for numerical operations with words, integers, and similar data types. While both options may work for bits, they are distinct data types and could potentially result in a compile error. This information was helpful and new to me. Thank you, Lare!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>norman oliver</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude once again to everyone for helping to clarify things.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>10-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>norman oliver</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Norman Oliver shared his experience with using ST commands to control the opening and closing of a door in a PLC program. He mentioned that using ST:"[OpenTD.OP]:= 0;" closes the door, while ST:"[OpenTD.OP]:= 1;" opens it. These commands are activated by buttons on a manual screen and function well. However, the concern arises about potential interference between the two commands. Will ST:"[OpenTD.OP]:= 0;" conflict with ST:"[OpenTD.OP]:= 1;" in a sequence, causing confusion in the PLC operation? The outcome depends on the order in which these commands are executed within the scan cycle. To prevent clashes, it is advisable to ensure that routines writing to the same tag or output are not invoked simultaneously, as the final result may be determined by the last command processed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>11-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>dwoodlock</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: How can I prevent manual operation from disrupting the running sequence in a program created using ST and SFC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: In ST programming, you can achieve the equivalent of a normally open contact by using conditional statements to check the status of the manual inputs before allowing them to influence the running sequence. By incorporating logic that prevents manual operation when certain conditions are met, you can ensure the running sequence remains uninterrupted.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: What are the key differences between ladder programming and using ST and SFC in the context of Eurotherm PAC 9 with Eycon HMI & T2750 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Ladder programming is a graphical programming language commonly used in PLCs, whereas ST (Structured Text) and SFC (Sequential Function Chart) offer alternative textual and graphical programming methods, respectively. While ladder logic is more visually intuitive for many users, ST and SFC provide greater flexibility and control in certain scenarios, such as complex sequences or computations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: How can I incorporate a 20-step SFC auto sequence alongside manual control functions in a program for Eurotherm PAC 9 with Eycon HMI & T2750 PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: When combining an SFC auto sequence with manual control functions, it's essential to establish clear control logic that ensures manual inputs do not interfere with the automated sequence. By structuring your program to enforce specific conditions or restrictions when manual operations are active, you can maintain the integrity</p>
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

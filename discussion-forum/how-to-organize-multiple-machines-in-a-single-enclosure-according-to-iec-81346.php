
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="While this is primarily a PLC forum, there is a diverse community of global members who may offer valuable insights. I have a query regarding aspects in IEC and the structure according to 81346. I am dealing with multiple machines housed in a single enclosure and need guidance on">
    <meta name="keywords" content="iec 81346, organize multiple machines, single enclosure, plc forum, global community, optimal functionality, enclosure panel, machine organization, component configuration, display configuration, panel labeling, vfd1 components, component mounting, independent function">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/how-to-organize-multiple-machines-in-a-single-enclosure-according-to-iec-81346">
    <title>How to Organize Multiple Machines in a Single Enclosure According to IEC 81346 | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="How to Organize Multiple Machines in a Single Enclosure According to IEC 81346 | Oxmaint Community">
    <meta property="og:description" content="While this is primarily a PLC forum, there is a diverse community of global members who may offer valuable insights. I have a query regarding aspects in IEC and the structure according to 81346. I am dealing with multiple machines housed in a single enclosure and need guidance on">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/how-to-organize-multiple-machines-in-a-single-enclosure-according-to-iec-81346">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="How to Organize Multiple Machines in a Single Enclosure According to IEC 81346 | Oxmaint Community">
    <meta name="twitter:description" content="While this is primarily a PLC forum, there is a diverse community of global members who may offer valuable insights. I have a query regarding aspects in IEC and the structure according to 81346. I am dealing with multiple machines housed in a single enclosure and need guidance on">
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
        "@id": "https://community.oxmaint.com/discussion-forum/how-to-organize-multiple-machines-in-a-single-enclosure-according-to-iec-81346"
      },
      "headline": "How to Organize Multiple Machines in a Single Enclosure According to IEC 81346",
      "description": "While this is primarily a PLC forum, there is a diverse community of global members who may offer valuable insights. I have a query regarding aspects in IEC and the structure according to 81346. I am dealing with multiple machines housed in a single enclosure and need guidance on",
      "author": {
        "@type": "Person",
        "name": "testsubject"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-15",
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
                <h1 class="text-white">How to Organize Multiple Machines in a Single Enclosure According to IEC 81346</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>20 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">2444</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">211</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>While this is primarily a PLC forum, there is a diverse community of global members who may offer valuable insights. I have a query regarding aspects in IEC and the structure according to 81346. I am dealing with multiple machines housed in a single enclosure and need guidance on organizing the aspects for optimal functionality. Each machine and its enclosure are intended to function independently, with all components mounted on the enclosure's panel (=S0: Enclosure =S1: Machine 1, =S2: Machine 2, =S3: Machine 3, =S0+PN1: Panel in S0). The components in each machine, such as =S1-VFD1, =S2-VFD1, =S3-VFD1, are identical. How can I configure each component from =S1, =S2, =S3 to be displayed on =S0+PN1 while retaining the =S#-VFD1 labeling on the panel? I appreciate any assistance provided.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>An enclosure is more of a designated area rather than just a single function. Functions can encompass a variety of purposes and tasks. Each machine can be considered a function on its own, but breaking it down into subfunctions can provide more detail and organization. For example, if we designate machines as =S0, =S1, etc., subfunctions could be =.D1 for AC power, =.D2 for DC power, =.F1 for safety, =.G1 for drive axis 1, =.G2 for drive axis 2, and so on. The enclosures can be designated as +CC1, +CC2, and so forth. 

Some practical examples include: =S0.D1+CC1-FC1, indicating the first machine's AC power with a circuit breaker in control cabinet 1; =S1.F1+CC2-XA1, representing the second machine's safety terminal strip in cabinet 2; and =S2.G2+CC1-T1, showing the third machine's drive axis 2 VFD in cabinet 1. It is advisable to choose function names that can be easily alphabetized to help with navigation and organization. Additionally, labeling the outside of each cabinet section with a large label such as +CC1 can help streamline the identification process. This allows components inside to be labeled with shorter text, such as =S0.D1-FC1.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing the higher-level function, we can easily pinpoint a specific assembly or station on the machine. For example, a servodrive assigned to station 1 and located on the main panel would be labeled with the prefix =ST1+PNL. This method allows for efficient grouping of components based on their mounting location, simplifying the generation of parts lists for specific panels. Alternatively, components can be organized by assembly or station to streamline the creation of Bills of Materials (BOM) for procurement and cost management purposes. While there may be alternative approaches to this process, our system offers a high level of flexibility.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>LadderLogic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, JesperMP and LadderLogic, for your input. It seems like I may have been overanalyzing the situation. I initially believed that the Locations were organized by the Function they served. For instance, =S1+CC1 and =S2+CC1. I assumed that the +CC1 in these instances indicated different locations since they were associated with =S1 and =S2, respectively, rather than being the same location. Can you confirm if my understanding is incorrect?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>18-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>IEC 81346 assigns symbols to different aspects of a system: the "=" represents function, the "+" signifies location, and the "-" denotes component. While it may seem that locations are grouped by function, this actually varies depending on the specific project. It is possible to have the same function in multiple locations, such as =S1+CC1-FC1 and =S1+CC2-FC2. Conversely, you can also have multiple functions in the same location, like =S1+CC1-FC1 and =S2+CC1-FC2. When dealing with multiple machines controlled by one control cabinet, it is advisable to assign the top level function to the machines (=Sn) and use subfunction levels to differentiate additional functions (=Sn.xx). Locations can also be further subdivided, for example, +CC1 can have sections like +CC1.1, +CC1.2, +CC1.3, and so on. Each section should have a corresponding label, such as "+CC1.1" or "+CC1.2". It is up to you to determine how many sublevels to incorporate, but it is recommended to limit it to 2 levels for simplicity and clarity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Jesper, 

I wanted to clarify if the same product can be utilized for various functions, for example, =S01.D1-F1 and =S02.D1-F1 using different fuses. This pertains to creating templates for machines that are part of a production line.

It seems that Functions and Locations are not interdependent and can work separately. Can you confirm this? Thank you for your expertise!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>19-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey, testsubject! I noticed the bold photo on your profile. What's the story behind it?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomaticInvest_4</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user inquired if the same product can serve multiple functions, to which the response was affirmative. Following IEC81346 guidelines, it is suggested to sequentially number components starting from 1 and incrementing by 2, 3, 4, and so on. While allowing for gaps in numbering if necessary. Additionally, the user questioned whether functions and locations can operate independently, which was confirmed. It was noted that while distinguishing by location is permitted, prioritizing unique components within the same function can simplify processes. In certain cases, such as with cables and terminals, the location may differentiate components. For efficient organization, it is recommended to group components with the same number within each function. For example, within a motor starter, components are designated with specific identifiers based on their function and location. When multiple components of the same type are present, further identifiers can be added to differentiate them. Proper arrangement of functions ensures that schematics can be easily understood and accessed, enhancing the workflow for electricians. Ultimately, adopting a functional-based naming convention can streamline the maintenance and troubleshooting process, leading to quicker acceptance by the technicians.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>AutomaticInvest_4 asked about the intense photo on testsubject's profile. They couldn't recall which game it was from, but they were immersed in CRPGs at the time and believe the mage in the image suited their role in the group.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Alright, let's talk about online gaming opportunities.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>AutomaticInvest_4</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Jesper, for your confirmation. I am considering implementing a new process to streamline the creation of lines. As JesperMP suggested, it is important to organize functions carefully so that when printing schematics with functions in alphabetical order, it all appears in a familiar manner.

Your electricians may resist the change from the traditional page and path naming convention for components (e.g. "19K5" for page 19 path 5). However, by demonstrating how easy it is to navigate based on functions, they may be more receptive. Some may never fully embrace the change.

In my original structure, I incorporated a pseudo functional system: using 4 characters in the sheet number to indicate the purpose (A), station (BC), and sequential sheet number (D). For example, 2011VFD1 represents the first VFD of station 1. This system aligns closely with function coding, making the transition smoother.

The more challenging aspect may be adjusting to the changes in wire numbers, which will now align with component tags, and terminal designations, which will shift from signal potentials.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, testsubject emphasized the importance of keeping tags short and simple, avoiding complex coding systems. It is recommended to use 2-3 characters for the function, location, and component part tags, omitting any implied information to streamline the naming process. It is suggested to refer to IEC 81346 part 2 for letter code standards and define your own codes for functions and locations to ease sorting in schematics. While following component standards, consider using 1 or 2-letter codes as 3-letter codes can be challenging to manage. For example, instead of using a 3-letter code, opt for a single letter (e.g., -B for proximity sensors) or two letters (e.g., -BG for proximity sensors) as preferred by colleagues.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for the recommendations. I strive to keep them concise. In my previous role, I worked for a company that employed IEC standards for their stand-alone machines. I consistently included locations, as well as sheet numbers, in my drawings. I must mention, I have a preference for two-letter product designations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Jesper, our discussions have mainly focused on schematic drawings, but where do assembly drawings fit into the picture? Should we consider creating a separate Assembly sub-Function for them? I usually include all assembly drawings at the end of the schematics after introducing all the parts earlier in the drawings. Using Station function for organization might mix them up throughout the package. How do you manage this aspect of the drawings?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our team utilizes EPLAN software, which streamlines documentation to a higher level indicated by the symbol '&', unique to EPLAN's standards and not part of IEC81346. Within this system, schematics are typically organized under the chapter '&ELM', while assembly drawings are located under '&LAY' for layout purposes. Additional explanatory illustrations may be placed under '&MAO' for Machine Overview clarity. These chapters serve as the initial sorting level, with further organization based on function within each chapter.

In the case of assembly drawings, their primary focus is on top-level functions such as '=S01', rather than detailed sub-functions like S01.D1. Location information can be associated with assembly drawings, but it is not mandatory. In instances where multiple locations are in close proximity, they can be depicted on the same assembly drawing and highlighted within a reference box. This flexibility allows for efficient and comprehensive documentation within the EPLAN platform.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am currently making the switch to SEE Electrical and have observed some similarities. Thank you once again for your assistance. I will be purchasing the 81346-1 and 2 today to keep them handy for future reference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Avoid getting caught up in overthinking. Prioritize convenience for yourself and your colleagues in the workplace. Streamlining processes and communication can improve work efficiency and collaboration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>LadderLogic</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Prepare yourself for the complexity of the standards, especially section -1, which can be quite perplexing due to its inclusion of multiple views for the same objects. My colleagues and I have dedicated considerable time to developing a practical and straightforward concept that works well for us.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Solving problems with number 1 can be quite challenging. I still remember tackling this issue over a decade ago and experiencing many headaches in the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>testsubject</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies if this isn't the right platform for my query, but I see that you guys are quite knowledgeable. Is there a way to restrict cross-referencing scope in Eplan? I have multiple similar panels for a specific project, and I initially tried using the Higher level structure. However, due to a K1 relay in each panel, it is being cross-referenced 22 times (number of panels). I want to keep everything organized while limiting the cross-referencing to a single location. Once again, I apologize if this is not the appropriate place to ask. Thank you. KIA K.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>krikoman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This is not the right location for your post. Please begin a new thread.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>20-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>JesperMP</span></li>
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
<h4 class='text-dark'>FAQ: 1.  What is IEC 81346 and how does it relate to organizing multiple machines in a single enclosure?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: IEC 81346 is a standard that provides guidelines for structuring systems into hierarchies and identifying components. It helps in organizing multiple machines within a single enclosure by defining a clear structure for labeling and categorizing different elements.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2.  How can components from multiple machines be organized and displayed on a single enclosure panel while retaining individual labels?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: To display components from different machines on a single panel, you can use a structured approach as per IEC 81346. Each machine and its components can be assigned a specific identifier, allowing for clear labeling on the panel while maintaining the distinction between components from different machines.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3.  Is it possible to configure components in each machine to function independently within a single enclosure?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Yes, by following the guidelines of IEC 81346 and structuring the components accordingly, you can configure each machine to operate independently within the shared enclosure. This enables optimal functionality while ensuring clear organization and labeling on the panel.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4.  How can I ensure optimal functionality and organization of multiple machines in a single enclosure according to IEC standards?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: By adhering to the principles outlined in IEC 81346 and structuring the machines, components, and panels based on the defined hierarchy and identifiers, you can achieve optimal functionality and organization within the single enclosure.</p>
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

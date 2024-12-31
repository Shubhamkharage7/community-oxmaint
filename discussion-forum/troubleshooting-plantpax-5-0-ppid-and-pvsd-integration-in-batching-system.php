
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings. I am currently facing challenges and seeking guidance in navigating a complex situation. Apologies in advance for the lengthy explanation. The issue at hand involves a recently implemented batching system equipped with advanced features typically found in a Rockwell based DCS. Plant PaX 5.0, FTVE SE, and FT">
    <meta name="keywords" content="plantpax 0 troubleshooting, batching system integration, rockwell dcs features, ftve se integration, ft batch operation, supply chain disruptions, ro water supply">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-plantpax-5-0-ppid-and-pvsd-integration-in-batching-system">
    <title>Troubleshooting PlantPax 5.0 PPID and PVSD Integration in Batching System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting PlantPax 5.0 PPID and PVSD Integration in Batching System | Oxmaint Community">
    <meta property="og:description" content="Greetings. I am currently facing challenges and seeking guidance in navigating a complex situation. Apologies in advance for the lengthy explanation. The issue at hand involves a recently implemented batching system equipped with advanced features typically found in a Rockwell based DCS. Plant PaX 5.0, FTVE SE, and FT">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-plantpax-5-0-ppid-and-pvsd-integration-in-batching-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting PlantPax 5.0 PPID and PVSD Integration in Batching System | Oxmaint Community">
    <meta name="twitter:description" content="Greetings. I am currently facing challenges and seeking guidance in navigating a complex situation. Apologies in advance for the lengthy explanation. The issue at hand involves a recently implemented batching system equipped with advanced features typically found in a Rockwell based DCS. Plant PaX 5.0, FTVE SE, and FT">
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
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-plantpax-5-0-ppid-and-pvsd-integration-in-batching-system"
      },
      "headline": "Troubleshooting PlantPax 5.0 PPID and PVSD Integration in Batching System",
      "description": "Greetings. I am currently facing challenges and seeking guidance in navigating a complex situation. Apologies in advance for the lengthy explanation. The issue at hand involves a recently implemented batching system equipped with advanced features typically found in a Rockwell based DCS. Plant PaX 5.0, FTVE SE, and FT",
      "author": {
        "@type": "Person",
        "name": "77nomad"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-08-04",
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
                <h1 class="text-white">Troubleshooting PlantPax 5.0 PPID and PVSD Integration in Batching System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>04-08-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>77nomad</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">334</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">74</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings. I am currently facing challenges and seeking guidance in navigating a complex situation. Apologies in advance for the lengthy explanation. The issue at hand involves a recently implemented batching system equipped with advanced features typically found in a Rockwell based DCS. Plant PaX 5.0, FTVE SE, and FT Batch are all operational. The project was initiated due to increased demand amid the Covid pandemic, but encountered delays due to supply chain disruptions, leading to strained relations between the integrator and my employer. This resulted in several unresolved issues, such as integrating the RO Water supply loop into PlantPax. As the sole Controls specialist at my workplace, I lack the support of colleagues or prior experience to turn to for assistance.

While I have successfully deciphered the faceplate/AOI relationship and can replicate existing functionalities and incorporate new elements seamlessly, I am currently facing a roadblock in managing two RO flow loops. Controlling the pumps using the PVSD object is straightforward, as is using the PPID object for proportioning valves. However, I am facing difficulties in utilizing the PPID to regulate the pumps based on the flow meter readings. Although I have connected the flow meter AI to the PPID as per standard practice, I am struggling with programming the PPID output to the PVSD. Despite knowing that the PVSD can be scaled, I am uncertain whether an AO is necessary in this scenario. Any guidance or examples would be greatly appreciated. Thank you for your patience in reading through my challenges.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it truly this straightforward? How does manual control work on the VFD faceplate? Is it controlled through the PID faceplate?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>77nomad</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I am unfamiliar with the functionality of the built-in 5.0 objects, I can provide insight into how the 4.x objects function. In manual mode, control is primarily managed through the faceplate. Nonetheless, the PLC can also regulate entry into manual mode by utilizing the PCmd_Oper bit.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface mentioned that they are not familiar with the built-in 5.0 objects but can explain how the 4.x objects work. The manual mode can be controlled from the faceplate, but entry into manual mode can also be managed by the PLC through the PCmd_Oper bit. 

My main concern is how to connect the "speedref" from the PID AOI to the Drive AOI. I am converting it to a percentage, where 60hz equals 100%. Do I direct the CVOut from the PPID to the PVSD and then to FreqCommand? Or should I go through an Analog Out object first? If manual speed control is needed, would it have to be done from the PID faceplate? It seems that either faceplate can set a speed command.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>77nomad</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems you are interested in the different oper/prog frequency commands. The PID output is already in percentage and needs to be directed to the PSet_SpeedRef. Operators should control the manual mode of the PID instead of the VFD to enable bumpless transfer when switching back to auto mode. The VFD faceplate can also control via OSet_SpeedRef, but utilizing the PID manual mode is the preferred option.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>05-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Cheeseface</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>77nomad raised a question about the simplicity of controlling a VFD through the faceplate in manual mode. Is the PID faceplate involved in this process? The output should be connected to CM_SC_912_01_Out_SpeedRefDataTypically. In programming, using the "Out" prefix for signals is common for linking blocks or outputs. "Val" represents the values that are visually appealing, making it easier for users to read, comprehend, and display on the screen.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>06-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Cheeseface mentioned that the separate oper/prog frequency commands may be confusing. The output from the PID should already be in percent and should be directed to the PSet_SpeedRef as mentioned. It is recommended that operators control the manual mode of the PID instead of the VFD to ensure bumpless transfer on return to auto. While the faceplate for the VFD can also control via OSet_SpeedRef, using the PID manual mode is preferable. It was necessary to add PSet_SpeedRef to the AOI, which resolved the issue. Thank you for your assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>07-08-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>77nomad</span></li>
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
<h4 class='text-dark'>FAQ: 1. Question: What are the main challenges faced in integrating RO Water supply loop into PlantPax 5.0 in a batching system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: The main challenges include difficulties in utilizing the PPID to regulate the pumps based on flow meter readings and struggling with programming the PPID output to the PVSD.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. Question: How can one control pumps using the PVSD object and proportioning valves using the PPID object in a batching system?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Controlling the pumps using the PVSD object and proportioning valves using the PPID object is straightforward in a batching system.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Question: What support is available for a Controls specialist facing integration issues in a complex system without prior experience or colleague assistance?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: Seeking guidance from forums, online resources, or contacting Rockwell support may be helpful in such situations.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. Question: Is an AO necessary when using the PPID to regulate pumps based on flow meter readings and connecting the PPID output to the PVSD?</h4>
<p class='text-muted'><strong>Answer:</strong> Answer: It's uncertain whether an AO is necessary in this scenario, and further clarification or examples may be needed for programming the PPID output to the PVSD.</p>
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

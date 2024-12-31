
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="When dealing with fluctuating waves like ship heave inputted into a PLC system, determining the Significant wave height (+ and -) can be achieved by applying a specific formula. For demonstration purposes, lets consider a hypothetical formula for the wave (ship heave) as f(h)= A. Sin(h) * (Cos(h)* Cos(h)).">
    <meta name="keywords" content="calculating significant wave height, plc system, ship heave input, significant wave height formula, wave height calculation, motion reference unit (mru), ship heave data, fluctuating waves, plc system formula, wave height determination, wave height">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/calculating-significant-wave-height-in-a-plc-system">
    <title>Calculating Significant Wave Height in a PLC System | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Calculating Significant Wave Height in a PLC System | Oxmaint Community">
    <meta property="og:description" content="When dealing with fluctuating waves like ship heave inputted into a PLC system, determining the Significant wave height (+ and -) can be achieved by applying a specific formula. For demonstration purposes, lets consider a hypothetical formula for the wave (ship heave) as f(h)= A. Sin(h) * (Cos(h)* Cos(h)).">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/calculating-significant-wave-height-in-a-plc-system">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Calculating Significant Wave Height in a PLC System | Oxmaint Community">
    <meta name="twitter:description" content="When dealing with fluctuating waves like ship heave inputted into a PLC system, determining the Significant wave height (+ and -) can be achieved by applying a specific formula. For demonstration purposes, lets consider a hypothetical formula for the wave (ship heave) as f(h)= A. Sin(h) * (Cos(h)* Cos(h)).">
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
        "@id": "https://community.oxmaint.com/discussion-forum/calculating-significant-wave-height-in-a-plc-system"
      },
      "headline": "Calculating Significant Wave Height in a PLC System",
      "description": "When dealing with fluctuating waves like ship heave inputted into a PLC system, determining the Significant wave height (+ and -) can be achieved by applying a specific formula. For demonstration purposes, lets consider a hypothetical formula for the wave (ship heave) as f(h)= A. Sin(h) * (Cos(h)* Cos(h)).",
      "author": {
        "@type": "Person",
        "name": "mad4x4"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-10-21",
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
                <h1 class="text-white">Calculating Significant Wave Height in a PLC System</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-10-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>mad4x4</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>6 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">278</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">73</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>When dealing with fluctuating waves like ship heave inputted into a PLC system, determining the Significant wave height (+ & -) can be achieved by applying a specific formula. For demonstration purposes, let's consider a hypothetical formula for the wave (ship heave) as f(h)= A. Sin(h) * (Cos(h)* Cos(h)). In practical scenarios, the heave data would typically be collected from a Motion Reference Unit (MRU) installed on the ship.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>When considering how to measure the height of waves, let's assume we are working with a Logix PLC that will provide us with a digital pulse called NewWave whenever a new wave is detected, as well as an analog value WaveHeight indicating the latest wave's height. Here are the steps to follow:
1. Create an array of REAL numbers named WaveHeights, perhaps tracking the last 20 wave heights.
2. Establish an FFL/FFU pair with the Control tag labeled RecordWaveHeight. Whenever NewWave is true:
    1. Utilize the AVE instruction to determine the average height of all previously recorded waves in the array. Align the AVE length with the POS of your FFL control tag to only average valid, non-zero values.
    2. Compare the NewWave value to the calculated average and identify any variations exceeding a specified percentage. Take necessary actions based on this comparison.
    3. Set NewWave to false.
    4. If the new wave is not considered unusual, proceed with the next steps. In case of an outlier, decide whether to include it in the array for the next average calculation. If not, take no action, but be prepared to address sudden and sustained differences in wave heights.
    5. Verify if the array is full (i.e., FFL .DN bit is on). If it is, use FFU to remove the oldest wave height from the array into a junk register.
    6. Use FFL to add the newest wave height to the array.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ASF</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Nearly following the ASF method, but being memory-efficient. Slow LPF computes the value using the formula: y = n*y + (1-n) * value. Adjustments are made based on the half-wave cycles and outliers to prevent data errors. Significant wave height is computed as the difference between the maximum and minimum values. 

I have a few queries about MRU measurements on ships, which focus on parameters rather than actual waves. Living far from the sea, my questions may seem basic. Does the oscillation period of sea/ocean waves depend on their amplitude? It is likely that there is a correlation. 

In calm seas, MRU readings may exhibit multiple waves, whereas in rough seas, a single wave pattern may be observed. These variations can have a notable impact on the data processing algorithm. 

@mad4x4, What specific calculations are you looking to perform?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK asked a question about the relationship between the period of oscillation and the amplitude of sea/ocean waves as measured by MRU. This is important because MRU measures the movement of a specific point on a ship, not the ship itself or the actual waves. The installation of the MRU at the vertical point of interest, such as in a crane for heave compensation or under a GPS antenna for motion compensation, is crucial for accurate measurements. In rough seas, the output will show a sine wave pattern with varying frequency and amplitude due to compounded ship movements. The calculation algorithm likely involves recording positive and negative peaks and applying logic to calculate indexes. It's worth noting that some MRUs, like those from Kongsberg, may indicate positive movement when the ship moves downwards, which can lead to confusion.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Analyzing the data trends in different situations such as calm weather, normal swell, and storm swell can provide valuable insights. It is beneficial for the OP to provide an eyeball estimate of the calculated parameter they are seeking in each scenario, along with an explanation of their reasoning. This approach can help in gaining a better understanding of the data and making informed decisions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Cardosocea mentioned having prior experience working on ships. I understood the general idea of your statement, but I have a different question: Is it possible for the Roll Motion Unit (RMU) to produce significantly different curves on the same ship? To clarify, when the sea is very rough, the RMU produces a Single-wave curve, but in slightly rough seas, it generates a Multi-wave trembling curve. Understanding these nuances is crucial for determining the precise calculation algorithm needed for advice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK inquired whether it is possible for the RMU on a ship to produce varying curves. Indeed, the length of the wave compared to the length of the ship can impact the RMU readings. By examining a diagram, it becomes evident that an RMU placed at the bow versus one placed at the center of the ship would exhibit differing amplitudes for the same wave. This disparity explains why it is recommended to position oneself at the center of the ship when feeling seasick, as it reduces body and ear movements. Ultimately, the placement of the RMU is crucial in minimizing errors for specific applications.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>cardosocea</span></li>
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
<h4 class='text-dark'>FAQ: 1. How is Significant Wave Height calculated in a PLC system when dealing with fluctuating waves like ship heave?</h4>
<p class='text-muted'><strong>Answer:</strong> - The Significant Wave Height (+ & -) can be determined by applying a specific formula, such as f(h) = A  Sin(h)  (Cos(h)  Cos(h)).</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What is the role of a Motion Reference Unit (MRU) in collecting heave data for calculating Significant Wave Height?</h4>
<p class='text-muted'><strong>Answer:</strong> - In practical scenarios, heave data for calculating Significant Wave Height is typically collected from a Motion Reference Unit (MRU) installed on the ship.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. Are there any other factors or parameters involved in calculating Significant Wave Height in a PLC system?</h4>
<p class='text-muted'><strong>Answer:</strong> - While the formula provided (f(h) = A  Sin(h)  (Cos(h)  Cos(h))) is a hypothetical example, other factors or parameters may also be considered depending on the specific requirements of the system and the nature of the waves being analyzed.</p>
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

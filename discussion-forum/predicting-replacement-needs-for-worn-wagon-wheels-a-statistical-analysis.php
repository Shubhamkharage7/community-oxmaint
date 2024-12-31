
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I recently came across a documented case on a reliability software companys website about forecasting the replacement of components. However, I have reservations about their solution and would like to gather insights from other professionals in this community. Imagine you need to predict the number of new wheels required">
    <meta name="keywords" content="predicting replacement needs, worn wagon wheels, statistical analysis, reliability software, forecasting components, new wheels, cargo-wagon, quarterly basis, failure data, weibull distribution, shape parameter, scale parameter, erosion, replacement forecast, 1st">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/predicting-replacement-needs-for-worn-wagon-wheels-a-statistical-analysis">
    <title>Predicting Replacement Needs for Worn Wagon Wheels: A Statistical Analysis | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Predicting Replacement Needs for Worn Wagon Wheels: A Statistical Analysis | Oxmaint Community">
    <meta property="og:description" content="I recently came across a documented case on a reliability software companys website about forecasting the replacement of components. However, I have reservations about their solution and would like to gather insights from other professionals in this community. Imagine you need to predict the number of new wheels required">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/predicting-replacement-needs-for-worn-wagon-wheels-a-statistical-analysis">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Predicting Replacement Needs for Worn Wagon Wheels: A Statistical Analysis | Oxmaint Community">
    <meta name="twitter:description" content="I recently came across a documented case on a reliability software companys website about forecasting the replacement of components. However, I have reservations about their solution and would like to gather insights from other professionals in this community. Imagine you need to predict the number of new wheels required">
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
        "@id": "https://community.oxmaint.com/discussion-forum/predicting-replacement-needs-for-worn-wagon-wheels-a-statistical-analysis"
      },
      "headline": "Predicting Replacement Needs for Worn Wagon Wheels: A Statistical Analysis",
      "description": "I recently came across a documented case on a reliability software companys website about forecasting the replacement of components. However, I have reservations about their solution and would like to gather insights from other professionals in this community. Imagine you need to predict the number of new wheels required",
      "author": {
        "@type": "Person",
        "name": "Archive User"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-21",
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
                <h1 class="text-white">Predicting Replacement Needs for Worn Wagon Wheels: A Statistical Analysis</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>21-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Archive User</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>8 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3046</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">373</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I recently came across a documented case on a reliability software company's website about forecasting the replacement of components. However, I have reservations about their solution and would like to gather insights from other professionals in this community. Imagine you need to predict the number of new wheels required to replace worn ones on a cargo-wagon over the next year, on a quarterly basis. The wagon has 24 wheels that have each been in use on rails for 250 days without mileage records. There is extensive failure data available for similar wheels affected by erosion, which, when analyzed statistically, follows a Weibull distribution with a shape parameter of 1.56 and a scale parameter of 1,520 days. How would you forecast the replacement needs for the 1st, 2nd, and 3rd quarters of this 24-wheeled cargo-wagon? Your insights are much appreciated. Thank you, Rui.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>What is the purpose of conducting forecasting analysis in maintenance operations? Is it to effectively manage spare parts and resources? In this context, the scale factor provides an average value that can be useful for making predictions, especially when dealing with a large number of assets that have different operational starting times. However, a low shape factor may not accurately define time-to-failure. Additionally, utilizing days instead of miles as a measurement unit can potentially introduce errors in the analysis. Is there any value in conducting this exercise if the underlying data quality is prone to significant inaccuracies?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gavin Russell</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Vee, the main objective of this forecast is to allocate the necessary funds for purchasing wheels when they are required. It is important to note that the Weibull distribution does not have a closed-form solution, so a numerical method or Monte Carlo simulation must be utilized. In this case, I opted for the Monte Carlo simulation method. Regards, Rui</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>22-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Xavier Morris</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I scored 1 point in the first quarter, 2 points in the second quarter, and another 1 point in the third quarter. Is there anyone who has a different opinion? - Rui</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ursula King</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rui, if I were in your position, I would recommend conducting a historical comparison analysis. It's crucial that any forecasting method you utilize has proven success with past data. You have access to historical records, so there is no need for speculation. Remember, all statistical predictions are just that - predictions. Have you considered leveraging Edward's Maximum Likelihood Estimate or a Poisson variation in your calculations?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Brenda Green</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Vee, for your insightful comments. It is indeed possible to use historical data as a basis for forecasting, provided that the system remains unchanged over time (e.g., consistent mileage per wagon). However, this general approach may not be specific enough to address individual situations, such as a particular wagon or automotive. In my article, I take a more specific approach, utilizing the Weibull distribution and the Median Ranking Least Square method to estimate detailed needs for specific wagons, locomotives, or bogies.

I did not use the Maximum Likelihood method to determine the Weibull distribution parameters, but rather the Median Ranking Least Square method. Could you clarify what you meant by the variation of "Poissan" – did you possibly mean "Poisson"? This distribution is applicable only to random failures. My calculations, based on a Monte Carlo simulation model, indicated a need to replace 1 + 2 + 1 units over the next year.

Although there are alternative numerical methods available, I prefer not to rely on empirical attempts for achieving results. The article I referenced, which focuses on 200 wheels in Brazil, provides a detailed history of wheel failures and estimates a monthly replacement of 16 units going forward. However, based on my calculations, I believe the number should be higher at 28 units, distributed differently over the next 12 months.

Traditional forecasting methods like Holt or Holt & Winters would not account for the current state of the wheels, particularly if a large number of new wheels were recently introduced. I have shared my perspective with the editor and the community of systems reliability enthusiasts, as I believe this case presents an interesting challenge with the potential for informative solutions. Please refer to the attached article for more details. 

Best regards, Rui.

Attachment(s): Case_Prevendo_Substituicoes.pdf (36 KB) - 1 version</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Charlie Evans</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you leveraging historical data to assess the reliability of your statistical model's performance?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Isaiah Gomez</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Eugene, it is essential to always verify any previously forecasted values in order to adjust the forecasting method or parameters if there is a significant difference outside the accepted statistical confidence interval. As I mentioned in my previous post about wagon-wheels, historical data should not be extrapolated without a stable state being established for accurate results. This scenario is outlined in the article where 133 new wheels will be added to the existing 67 wheels with varying life spans. Only reliability models can account for the natural degradation of each individual wheel at any given time. Best regards, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zoe Peterson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The article's editor recently acknowledged a potential error in the results and pledged to provide a corrected version. This presents an opportunity for me to verify my solution to the popular 24 wagon-wheel problem (1 wheel in the first quarter, 2 wheels in the second quarter, and 1 wheel in the third). Are there any alternative solutions that anyone would like to share?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Denise Reed</span></li>
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
<h4 class='text-dark'>FAQ: 1. How can I predict the replacement needs for worn wagon wheels using statistical analysis?</h4>
<p class='text-muted'><strong>Answer:</strong> - To predict the replacement needs for worn wagon wheels, you can analyze failure data and apply statistical methods like the Weibull distribution. By understanding the shape and scale parameters of the distribution, you can forecast the number of new wheels required over specific time periods.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What statistical distribution can be used to model the failure data of worn wagon wheels?</h4>
<p class='text-muted'><strong>Answer:</strong> - The failure data of worn wagon wheels affected by erosion can be modeled using a Weibull distribution. In the provided case, the Weibull distribution has a shape parameter of 1.56 and a scale parameter of 1,520 days, which can help in forecasting replacement needs.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How do the shape and scale parameters of the Weibull distribution impact the replacement forecast for wagon wheels?</h4>
<p class='text-muted'><strong>Answer:</strong> - The shape parameter of the Weibull distribution affects the failure pattern, while the scale parameter influences the time until failure. Understanding these parameters allows for accurate forecasting of replacement needs for the worn wagon wheels over different time periods, such as quarterly predictions for a 24-wheeled cargo-wagon.</p>
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

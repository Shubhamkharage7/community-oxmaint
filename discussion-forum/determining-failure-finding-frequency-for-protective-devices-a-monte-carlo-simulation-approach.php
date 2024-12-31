
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Greetings everyone, I am currently in the process of developing software designed to aid in determining the frequency of failure-finding tasks for protective devices using Monte-Carlo simulation. While I have created a model that appears to be working effectively thus far, it is crucial to validate it with real-world">
    <meta name="keywords" content="failure-finding frequency, protective devices, monte-carlo simulation, software development, validation, real-world data, moubray, availability calculation, costs per unit of time, pump failure, weibull distribution, inspections, cost analysis, failure consequences">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/determining-failure-finding-frequency-for-protective-devices-a-monte-carlo-simulation-approach">
    <title>Determining Failure-Finding Frequency for Protective Devices: A Monte-Carlo Simulation Approach | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Determining Failure-Finding Frequency for Protective Devices: A Monte-Carlo Simulation Approach | Oxmaint Community">
    <meta property="og:description" content="Greetings everyone, I am currently in the process of developing software designed to aid in determining the frequency of failure-finding tasks for protective devices using Monte-Carlo simulation. While I have created a model that appears to be working effectively thus far, it is crucial to validate it with real-world">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/determining-failure-finding-frequency-for-protective-devices-a-monte-carlo-simulation-approach">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Determining Failure-Finding Frequency for Protective Devices: A Monte-Carlo Simulation Approach | Oxmaint Community">
    <meta name="twitter:description" content="Greetings everyone, I am currently in the process of developing software designed to aid in determining the frequency of failure-finding tasks for protective devices using Monte-Carlo simulation. While I have created a model that appears to be working effectively thus far, it is crucial to validate it with real-world">
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
        "@id": "https://community.oxmaint.com/discussion-forum/determining-failure-finding-frequency-for-protective-devices-a-monte-carlo-simulation-approach"
      },
      "headline": "Determining Failure-Finding Frequency for Protective Devices: A Monte-Carlo Simulation Approach",
      "description": "Greetings everyone, I am currently in the process of developing software designed to aid in determining the frequency of failure-finding tasks for protective devices using Monte-Carlo simulation. While I have created a model that appears to be working effectively thus far, it is crucial to validate it with real-world",
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
      "datePublished": "2024-11-23",
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
                <h1 class="text-white">Determining Failure-Finding Frequency for Protective Devices: A Monte-Carlo Simulation Approach</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>23-11-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>Archive User</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>33 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3885</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">22</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Greetings everyone, I am currently in the process of developing software designed to aid in determining the frequency of failure-finding tasks for protective devices using Monte-Carlo simulation. While I have created a model that appears to be working effectively thus far, it is crucial to validate it with real-world data. I would greatly appreciate input from fellow professionals in this field. I have extensively studied Moubray's writings on this subject and have incorporated much of his terminology into my work. However, I still have questions regarding how to calculate the availability of protective devices and the associated costs per unit of time.

Let's consider the following scenario: a pump with a protected function experiences unanticipated failures every 1,000 hours, while the protective device (which is not fail-safe) fails following a Weibull distribution with parameters of Shape = 4 and Scale = 2,000 hours. The time required to repair or replace the protective device is negligible for simplicity's sake in this example. Inspections are conducted every 200 hours, with each inspection costing €100. The estimated cost of failure consequences is €10,000.

During simulation iterations, various results are obtained. For instance, the protected function may fail before the protective device, or vice versa. It is essential to analyze these outcomes to understand the interaction between the two components. Calculating the availability of the protective device and evaluating the costs associated with inspections and potential failures are key aspects to consider.

By running the simulator for 5,000 iterations, valuable insights have been gained. Without inspections, the probability of multiple failures is 0.1822, with an average availability of the protective device at 93.86%, leading to a mean total cost per iteration of €1,810. On the other hand, with inspections performed every 200 hours, the probability of multiple failures decreases to 0.0162, resulting in an average availability of 98.84% and a mean total cost per iteration of €537. These findings highlight the importance of inspections in reducing costs and enhancing device availability.

In conclusion, it is evident that inspections yield significant benefits in this scenario. Continuously evaluating the frequency of inspections to optimize costs and device performance is essential. I welcome any feedback or recommendations for improving this methodology. Additionally, if you are aware of relevant resources or literature on this topic, please feel free to share. Thank you for your insights. Rui</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Rui, I found your post quite engaging. I have a few queries regarding the parameters you have utilized. How did you determine the shape factor of 4 for the protective device? Typically, failure parameters are deduced through periodic testing, where a constant hazard rate assumption with a shape factor of 1 is commonly employed. Additionally, for protective devices, it is generally deemed unacceptable to have a test interval exceeding 2-5% of the scale factor as it impacts system availability adversely. Therefore, I am intrigued by the use of a 200-hour test in your simulation. Lastly, when assessing protective devices, it is imperative to consider tolerable risk criteria rather than economic factors. Regards, V. Narayan.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>24-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Wesley Jenkins</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Vee, thank you for your prompt response. As someone with limited experience in inspections, I truly value your insightful comments. Let me address your specific questions: 

1. The parameters used in the example were hypothetical. I believed that a protective device failure could be attributed to a tested failure mode under laboratory conditions by the manufacturer. However, I now understand that this scenario may not reflect real-world experiences. I will modify the shape factor to one. 

2. The 10% scale parameter for the time between inspections was arbitrarily chosen. I appreciate your suggestion of 2-5% based on practical experience. I will review these figures to ensure the validity of the method and update you on the results. Do you find the achieved figure of 98.84% in my example acceptable?

3. The method illustrated in my example helps determine the risk of multiple failures occurring, as seen with a probability of 0.0162. This information can be compared against a tolerable threshold and used to evaluate the costs of inspections and potential consequences of a failure in an operationally-focused context. I fail to see any reason for disagreement on this matter. 

Best regards, Rui</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>25-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Marcus Woods</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After conducting several simulations with a shape factor of 1, varying times between inspections (TBI), and analyzing the results, it is evident that costs are influenced by TBI. When TBI is set at 50 hours, the cost is approximately 1,360 € with a probability of 0.007 and availability of 96.75%. Increasing TBI to 100 hours reduces cost to 810 € with a probability of 0.0176 and availability of 94.48%. The trend continues as TBI increases, with costs fluctuating and availability decreasing. The optimal TBI range appears to be between 150-300 hours based on the data. This finding is crucial as it impacts cost, availability, and the probability of multiple failures. Overall, the results indicate a correlation between TBI, cost, availability, and failure probability. Thank you for your analysis, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Sam Harris</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The required TBI for a protective device like a PSV is approximately 150 to 300 hours. Typically, PSV insitu prepop testing is planned during every scheduled shutdown, which occurs every 2 to 3 years in a petrochemical plant. Moreover, the internal passing test for a wellhead valve takes about 3 months, equivalent to 2160 hours. It is essential to ensure 100% availability for at least one year of continuous operations for offshore platforms and three years for petrochemical plants, aligning with the planned shutdown/turnaround schedule. For more information, you can refer to this useful Barringer link: http://www.barringer1.com/ar.htm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Paula Rogers</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Josh, I want to clarify that the numbers mentioned are purely for an exercise in a hypothetical scenario and not reflective of real-world experiences. I am seeking insights on calculating availability in the case of hidden failures, also known as dormant or failures on demand, through simulation. This process is more complex than in cases of evident failures. Your real-world experience in the field, particularly with Pressure Safety Valves (PSV), would be greatly valued. Thank you for sharing the Barringer's link. Best regards, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Isaiah Gomez</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>While reviewing your calculation for optimizing test intervals based on economic criteria, I find it important to emphasize that safety should always be the top priority when it comes to protective devices. The goal is to reduce risks to a tolerable level, especially when there is a potential threat to human life or the environment. It can be challenging to accurately determine factors like scale and shape for a single protective device due to limited data points. Therefore, we often make approximations by using data from similar devices to calculate average values such as Mean Time To Failure (MTTF).

It is worth noting that our approximations may not always meet criteria like being 'independent' and 'identical' when forming device families, which can introduce errors. Additionally, calculating MTTF assumes an exponential distribution, making accurate shape factor calculations difficult. In my experience with MTTF computations using PRV bench-test results in Oil & Gas services, failure-to-lift events occur with an MTTF range of 60-250 years. 

In practical terms, when considering the test interval for a PRV with an MTTF of 200 years, the availability rates of 99.5% and 99% correspond to test intervals of 2 years and 4 years respectively. These intervals impact the occurrence of failure events and ultimately, the level of risk tolerance. It is crucial to balance economic pressures for longer test intervals with ensuring the availability of PRVs to mitigate additional risks effectively.

The importance of regular testing for PRVs cannot be understated, as these devices play a critical role in preventing catastrophic events like explosions. While cost considerations are significant, the primary focus should always be on maintaining the safety and reliability of protective devices in service.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Heather Coleman</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After receiving feedback from colleagues, I have decided to implement a new strategy for system maintenance and analysis. Here are the key points of the approach: 
- Consider a long period (P) of the system operating, such as a few years. 
- Assume the protected function fails according to an exponential distribution. 
- Assume the protective device fails according to a Weibull distribution. 
- Set a specific inspection time interval (T). 
- Whenever the protective device fails, it will be repaired, taking (r) hours, and the next inspection will start from 0. The device will be restored to a new state after repair. 
- Estimate the time to the next failure of the protective device during each inspection based on conditional probability. 
- Keep track of the number of inspections (I), failures of the protected function (N), failures of the protective device (n), and multiple failures where the protected function fails while the device is in a failed state. 
- Assign a cost of $Ci to each inspection and a cost of $Cf to each multiple failure. 
- Calculate the reliability of the system (protected function and protective device) as (1 – m/N), indicating how many times the protective device failed to fulfill its role. 
- Determine the unit cost of system operation as (I*Ci + m*Cf)/P $ per hour. 
- Assess the availability of the protective device as (1 – n/I), representing the times the device failed during inspections. 
By running simulations and analyzing the data, we can obtain expected values for these variables within confidence intervals. By testing different inspection time intervals and finding the optimal one that minimizes combined inspection and failure costs, we can mitigate risk effectively. Your input and suggestions are appreciated. Thank you. Rui</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Rachel White</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Vee, I believe that if multiple failures do not pose a risk to safety or the environment, it is reasonable to consider adjusting inspection intervals based on economic factors. Can you provide a counterargument to this logic? It is worth noting that simulating failures in computer systems requires the use of a process generator to generate random failure times, even though the exact timing of a protective device failure may never be known in reality. Regards, Rui</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Chad Cook</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After reconsidering, I believe the time frame for inspections should be based on elapsed time, such as every two weeks, rather than accumulated time. This is because inspections are typically done in groups of equipment. Therefore, the number of inspection tasks completed in a given period (P) can be calculated by dividing P by T. Can you confirm if this approach is correct? - Rui

Keywords: time frame, inspections, elapsed time, accumulated time, equipment, inspection tasks, period, calculation</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ursula King</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Rui stated that if multiple failures do not pose a threat to safety or the environment, there is no reason why inspection intervals cannot be based on economic reasons. He challenges anyone to provide a valid reason otherwise. While it is true that some protective systems may have hidden functions, the majority of important protective systems impact safety, the environment, or the lifespan of assets.

Examples of these systems include axial displacement trips, over-speed trips, pressure relief valves, press-guards, brake lights, emergency shutdown systems, emergency depressurization systems, conveyor emergency stop buttons, circuit breakers, reverse-current relays, and ship mooring release systems. Although some systems, like overload systems, may only have economic consequences, they are not the main concern. The presence of a trip system indicates high economic stakes. Therefore, there is little flexibility in adjusting test frequencies.

It is important to note that not all test frequency determinations can be analyzed purely from an economic standpoint. There is a risk that readers without a deep understanding of the subject matter may be misled into believing that all frequency determinations are open to economic analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ulysses Ross</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of reliability engineering, it is common for protected systems to experience degradation through various mechanisms such as corrosion, wear, fouling, and crack propagation. Monitoring the condition of these systems is crucial to determine the frequency of inspections based on the P-F curve and uncertainties in demand and degradation. While some degradation mechanisms follow a Weibull distribution, obtaining shape and scale parameters in practice can be challenging.

Furthermore, many protective systems have hidden functions and operate in either a working or failed state. It is often impractical to determine the shape and scale factors in these cases, leading to assumptions such as a shape factor of 1. Reliability data sources provide failure rates for both evident and hidden failures, highlighting the importance of being cautious when analyzing failure rates. Embracing a shape factor of 1 may be necessary to navigate the complexities of reliability engineering.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Frances Fisher</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Vee, for your valuable input and suggestions. After considering your feedback, I have decided to implement the failures of the protected function using a Weibull function. Users of the software will have the option to choose a shape-factor of 1, where the scale factor is equal to MTTF, or any other value. This flexibility extends to the economic aspect as well, as there may be differing opinions on the approach. Therefore, I believe it is prudent to keep both options open: a tolerable risk limit or the most cost-effective solution. I will provide an update once I have results to share. Thank you again, Vee and Josh. Best regards, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Diane Kelly</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Attached are the results of my recent study that I would like to share with you for feedback to enhance the work. The study involves periodic inspections of similar devices on various equipment, focusing on elapsed time rather than running time of each device to ensure reliability and minimize costs. The data collected through simulation demonstrates the failure patterns of the protected function and protective device, as well as the impact of inspections and repairs on system performance and cost. Key outputs include the number of inspections conducted, failures detected, and the overall reliability and availability of the system.

In the simulation test, specific parameters such as failure distributions, repair times, and inspection costs were considered to determine the optimal inspection interval for the protective device. The analysis revealed that inspecting the device every 200 hours provides the most cost-effective solution. Additionally, a formula was suggested to calculate the optimal inspection interval based on the mean time to failure of the devices involved.

I invite your input on the best approach to determine system availability, as outlined in points 13 and 14 of the study. Your feedback is greatly appreciated in further refining this research. Thank you for your ongoing support. Rui</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Ian Butler</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a previous discussion, it was revealed that Daryl was the one who provided insight on the relationship between availability, failure rate, and inspection frequency. Daryl emphasized the importance of considering the MTBF of both the protective device and the protected function in calculations. According to SAE JA1012, the formula for inspection frequency includes factors such as the failure rate of the device, the failure rate of the function, and the desired level of risk. It is crucial to determine the failure rates within your plant or a similar operating context to make accurate calculations. Thank you to Daryl for sharing this valuable information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mason Rogers</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Rui, tudo bem! The formula mentioned above is sourced from the RCM standard guide, which has facilitated the widespread adoption of RCM practices. This formula is applicable in specific scenarios, such as when dealing with a device exhibiting random failure characteristics and equipped with a single protective device. It is essential to note that there are various configurations of protective devices and associated failure curves, making this formula not universally applicable. The primary goal of this formula is to achieve tolerable risk, indicated by the MTBF (Multiple Failure). In cases involving failure modes with economic implications, the formula needs to consider the optimal frequency based on cost rather than solely on risk. This is because addressing economic consequences involves balancing the cost of performing the task and the cost of potential failures. When discussing unavailability caused by random protective devices, the frequency of inspections plays a crucial role. For example, annual inspections may result in a 25% unavailability over a four-year period. However, for the formula to be effective, a known failure rate must be considered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Aaron Bennett</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hi Daryl, the answer from my program is rooted in economic factors, but the end goal may vary - such as establishing a minimum availability threshold. The formula I previously mentioned is no longer relevant. I am still seeking an answer to the question I posed: "Which method do you believe is more suitable for determining availability (as outlined in points 13 or 14 in my post from the 5th)?" Thank you, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Liam Foster</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In John Moubray's book, the formula "2 x MTBF(Device) x MTBF(Function)/MTBF of multiple failures" is discussed on page 180, along with other formulae for various scenarios. These formulae are estimates and are applicable within a specific range of T/MTBF values. When T/MTBF goes beyond this range (approximately 14%), the availability estimation errors become significant. In safety-related situations, T/MTBF typically ranges from 1-3%. On page 39 of my book, I present a formula that is valid over a broader T/MTBF range (around 20%) based on Nowlan & Heap's method. These formulae consider the MTBFs of protective and protected functions, following exponential distributions. Therefore, using a non-1 shape factor Weibull distribution is not recommended. Allowing users to input their own shape factors can result in unsuitable decisions. For scenarios involving human, environmental, or asset safety, economic analysis should not be the determining factor. The only acceptable criterion in such cases is 'tolerable risk', as there is no uniform way to assign a monetary value to human life. Consequently, economic considerations should not be applied in these situations. I recommend continuing this discussion outside the forum.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tara Anderson</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hi Rui, I want to emphasize that making economic decisions based on safety and environmental risks may not be the best approach. The key factor here should be minimizing risks, especially when it comes to operational and non-operational hidden failures. While economic algorithms can be useful in certain situations, they should not be used when it comes to safety and environmental concerns. Prioritizing risk reduction is essential in these cases to ensure the well-being of both people and the environment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Zack Morgan</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I express my gratitude to Vee and Daryl for their valuable contributions and insights, drawing from their extensive experience and knowledge. When it comes to safety, it is important to acknowledge the difference between conducting research to discover something new, as I endeavored to do, and how users will utilize the findings. While my involvement in this area is limited, I have witnessed operational consequences in some companies due to user actions. However, once a method is established and comprehensive, it is left to the user to analyze and contextualize the results appropriately. For instance, in the scenario I presented, the availability (A) of a protective device can be assessed by the probability of it failing during inspections, which may lead to system failure. Is this approach more fitting, in your opinion? It yielded a 97% probability with a 50-hour inspection interval. While this probability may seem like the desired outcome, the question arises: when should one stop refining the analysis? The possibilities appear endless, so what criteria should be adopted? Unfortunately, my copy of Moubray's book is outdated, preventing me from referencing his insights on the matter. Nonetheless, I am determined to understand the underlying logic behind the formula soon. Simulation techniques offer the advantage of solving complex problems involving multiple variables more efficiently than traditional analytical methods, especially when these variables are interdependent. Regards, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Simon Ward</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I highly recommend searching for a copy of "Mathematical Principles in RCM" by Resnikov, as it provides valuable insight into the origins of this field. While it may be considered outdated, it is still worth sourcing a copy for its foundational knowledge.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Yasmin Hill</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear Daryl, thank you for the suggestion. I conducted a thorough search on the internet, including Amazon, but unfortunately, I could not find any information on Resnikov. It is disappointing as the title seemed intriguing. Do you have any other leads or suggestions? Regards, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Nathan Scott</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello RUi, I apologize for not remembering the specific name of the location where I obtained the document. Unfortunately, I do not have access to my materials as I am currently out of the country. I am confident that someone else on this platform may have more information. The document was sourced from a place similar to the National Library, where the Nowlan and Heap report is also stored. I apologize for the lack of clarity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Oscar Hayes</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Rui, you can find the archived piece of work on Reliability-Centered Maintenance (RCM) on the National Technical Information Service (NTIS) website. The website requires a day-rate membership to access the content. Despite the cost, it is a valuable resource and a key reference in the field of RCM. Best of luck in your search!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Elliot Barnes</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am grateful for your assistance, Daryl. I will make an effort to obtain the document. Thank you, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Erik Rivera</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Regarding your quote mentioned earlier, the older edition of Moubray's book also contains the same formula. To find it, refer to the index under FFT. Unfortunately, I only have an older edition of the book, so I am not able to check what Moubray says about it. This formula is based on the concept of Fractional Dead Time, which can be found on pages 59 and 60 of The Reliability of Mechanical Systems by I MechE, with ISBN 0 85298 881 8, or in writings by Trevor Kletz (the specific reference is not available at the moment). This formula has been in existence for a considerable period (even before N&H, Resnikoff, Moubray, or JA 1011). It is an approximation with certain limitations on its applicability, as mentioned before. It should be noted that this formula relies on the use of Mean Values or Failure Rates, with a shape factor of '1' applying.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Helen Diaz</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you, Vee, for sharing your insights. I have a strong background in reliability and maintainability mathematics and am always eager to explore different perspectives from fellow authors. In relation to the application of the Weibull distribution to protective devices, I wanted to mention that the American Petroleum Institute is currently developing a Technical Module that utilizes a risk-based approach for assessing the criticality of pressure relief devices. This includes conventional and balanced bellows, pilot operated, and rupture disks, to establish inspection and testing frequencies. The module recommends specific parameters for the Weibull probability distribution in cases of failures on demand and leakage. For failures on demand, beta values typically range from 1.6 to 2.0, and for leakage, they range from 1.6 to 1.7. Meanwhile, alpha values are suggested to be between 3.5 to 50.5 years for failures on demand and 11 to 17.5 years for leakage. It is important to note that adjustment factors may need to be considered based on individual circumstances. Thus, my decision to use a Weibull distribution in my model instead of an Exponential distribution appears justified. I am pleased to learn that others also share this perspective. Regards, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tina Murray</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Additionally, the document mentioned above also addresses various costs that are crucial in the industry. These include expenses related to injuries, unit shutdowns, environmental issues such as fines and costs linked to PRD leaks or equipment containment failures, production losses, and unit replacements. This once again highlights the significance of inspecting facilities from an economic perspective. Best regards, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Diana Spencer</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dear Rui, I want to express my admiration for your deep understanding of Reliability Engineering and Weibull analysis, as well as your commitment to challenging conventional thinking to uncover innovative solutions. I take on the role of devil's advocate in offering feedback on your recent posts, with the intention of providing constructive peer review. I have a few inquiries regarding the fascinating information you shared. The specifics you mentioned, such as the beta and alpha values for failures on demand and leakage, are intriguing. I am curious about the sources of these values. Were they derived from field trials or actual industrial data? Understanding how 'run lengths' for hidden functions are determined would greatly aid in conducting a Weibull analysis.

Additionally, in your second post, you referenced the 'cost of injury'. How are costs calculated for incidents like fatalities or permanent disabilities? Is this calculation methodology specific to the US, or is it universally applicable across different countries? Are there similar guidelines for assessing environmental damage? If you have any useful URLs to share on these topics, it would be greatly appreciated.

Please know that my questions are meant to enhance our mutual learning and discussion. I have great respect for your expertise and am grateful for the knowledge I gain from your posts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Naomi Simmons</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Rui, I had my assistant reach out to this website earlier this week to follow up on the document "Mathematical Aspects of Reliability-centered Maintenance." It seems like the document is priced at $79.50 USD, with an additional $12.50 for handling fees. I personally find it to be a valuable historical resource. Best of luck!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Bob Smith</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Vee, I appreciate your interest in sharing your insights and expertise in inspections. I was intrigued by the example you mentioned regarding PRD reliability, whether they are considered to be in parallel or in series. Your contribution to Eugene's thread on "System Reliability calculating software?" was insightful. Regarding your queries, the document I mentioned earlier is currently a draft and is being discussed among members. It states that failure rates and leakage data are based on industry and committee member data, with the Center for Chemical Process Safety collecting data for pressure relief devices. Additionally, default Weibull parameters for pass/fail and leak curves are determined from bench test data. These values are suggested parameters for different fluid services and can be adjusted based on individual device performance in bench tests. A Bayesian approach is also being considered to adjust characteristic life for inspection confidence. As for the "cost of injury", while the document mentions it as a potential cost, it does not provide guidance on how to calculate it. It is worth noting that my friend, a risk analysis expert in the insurance industry, often deals with estimating the cost of injuries. According to him, everything comes with a price in the world of risk analysis, regardless of our personal feelings. Warm regards, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Mia Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude to Daryl for providing valuable information. Your kindness is much appreciated. Regards, Rui.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Gregory Hughes</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Rui, I hope you are doing well. I completely agree with the Bayesian approach that you mentioned. Bristol University has conducted significant research in this field, so it would be beneficial to explore their work for relevant information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Tiffany Gray</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In your recent post addressing the source data, you mentioned that Weibull parameters for pass/fail and leak curves were derived from bench test data analysis. These default parameters serve as suggestions and are critical for determining the time-to-failure data needed for Weibull analysis. The failure-to-lift of a Relief valve is considered a hidden function failure, making it challenging to pinpoint the exact time of failure. While bench-test data can indicate whether the relief valve is functioning or not, it does not provide the time of failure. The 'maximum-likelihood' method of Edwards can be used to estimate the expected value of time-to-failures, but this value may not align with the actual value. It is unclear how the API or CMA calculated their Weibull parameters. Additionally, the basis of these 'suggested' default values remains uncertain.

You mentioned considering a Bayesian approach to adjust the characteristic life of the relief valve to reflect inspection confidence. However, it is crucial to ensure that the original characteristic life is based on solid data and knowledge. The methodologies utilized by organizations like API and CMA must be transparent in how they gather time-to-failure data for hidden failures. It is essential to review if they have published their findings and provide a source reference for further validation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-11-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Kevin Griffin</span></li>
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
<h4 class='text-dark'>FAQ: 1. What is the purpose of using Monte-Carlo simulation to determine the failure-finding frequency for protective devices?</h4>
<p class='text-muted'><strong>Answer:</strong> - The purpose of using Monte-Carlo simulation is to analyze the interaction between protective devices and protected functions, understand outcomes, and evaluate costs associated with inspections and potential failures.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. How is the availability of protective devices calculated in the scenario described?</h4>
<p class='text-muted'><strong>Answer:</strong> - The availability of protective devices is calculated by running simulations with and without inspections, monitoring failures of the protected function and protective device, and analyzing the outcomes to determine the average availability.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How do inspections impact the costs and availability of protective devices in the simulation?</h4>
<p class='text-muted'><strong>Answer:</strong> - The simulation results show that inspections reduce the probability of multiple failures, increase the average availability of the protective device, and lower the mean total cost per iteration, emphasizing the importance of inspections in optimizing costs and device performance.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. What are the key findings from running the simulator for 5,000 iterations?</h4>
<p class='text-muted'><strong>Answer:</strong> - The key findings include the probability of multiple failures, the average availability of the protective device, and the mean total cost per iteration with and without inspections, demonstrating the benefits of inspections in reducing costs and improving device availability.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. How can professionals further enhance the methodology for determining failure-finding frequency for protective devices?</h4>
<p class='text-muted'><strong>Answer:</strong> - Professionals can enhance the methodology by continuously evaluating the frequency of inspections, optimizing costs, and device performance based on simulation results and feedback. Additionally, seeking recommendations and utilizing relevant literature can help improve the methodology.</p>
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

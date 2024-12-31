
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Is there a method for performing a third-degree polyfit on a PLC? I have input data with a minimum of 5 X and Y values. For instance, the measured values are as follows: Input Value X Y 350 1025 460 987 530 853 680 765 800 556 I am">
    <meta name="keywords" content="polynomial fitting, mitsubishi fx5u plc, third-degree polyfit, input data, x and y values, measured values, calculate y value, python, plc connectivity, computer connection, data range, plc programming, data processing, polynomial regression">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/performing-polynomial-fitting-on-mitsubishi-fx5u-plc">
    <title>Performing Polynomial Fitting on Mitsubishi FX5u PLC | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Performing Polynomial Fitting on Mitsubishi FX5u PLC | Oxmaint Community">
    <meta property="og:description" content="Is there a method for performing a third-degree polyfit on a PLC? I have input data with a minimum of 5 X and Y values. For instance, the measured values are as follows: Input Value X Y 350 1025 460 987 530 853 680 765 800 556 I am">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/performing-polynomial-fitting-on-mitsubishi-fx5u-plc">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Performing Polynomial Fitting on Mitsubishi FX5u PLC | Oxmaint Community">
    <meta name="twitter:description" content="Is there a method for performing a third-degree polyfit on a PLC? I have input data with a minimum of 5 X and Y values. For instance, the measured values are as follows: Input Value X Y 350 1025 460 987 530 853 680 765 800 556 I am">
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
        "@id": "https://community.oxmaint.com/discussion-forum/performing-polynomial-fitting-on-mitsubishi-fx5u-plc"
      },
      "headline": "Performing Polynomial Fitting on Mitsubishi FX5u PLC",
      "description": "Is there a method for performing a third-degree polyfit on a PLC? I have input data with a minimum of 5 X and Y values. For instance, the measured values are as follows: Input Value X Y 350 1025 460 987 530 853 680 765 800 556 I am",
      "author": {
        "@type": "Person",
        "name": "luca72"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-09-27",
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
                <h1 class="text-white">Performing Polynomial Fitting on Mitsubishi FX5u PLC</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>27-09-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>58 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">3245</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">322</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>Is there a method for performing a third-degree polyfit on a PLC? I have input data with a minimum of 5 X and Y values. For instance, the measured values are as follows: Input Value X     Y
350     1025
460     987
530     853
680     765
800     556

I am seeking a way to calculate the corresponding Y value by inputting an X value within the range of the measured data. I have achieved this using Python, but the challenge lies in connecting the PLC to a computer, which the customer prefers not to do. Any insights would be appreciated. Thank you.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Data on the variables X and Y, along with their rate of change, are presented in the table above. The question is how frequently these values are updated. Are you looking to dynamically adjust the sampled X and Y values to a polynomial with real-time coefficients in the Programmable Logic Controller (PLC) and subsequently evaluate the polynomial (Y = P(X)) within the PLC program? Alternatively, do you prefer to calculate the fitting coefficients externally, embed them into the PLC program, and solely conduct polynomial evaluations within the PLC?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>28-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One alternative to consider is whether the PLC being used offers motion control capabilities. Can the desired action be programmed as a "cam profile" or similar function in the PLC? Additionally, exploring the use of splines can result in more straightforward interpolation algorithms between points on the profile compared to fitting a single set of third-order polynomial coefficients across the entire dataset.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>29-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello DrBitboy, I need to perform all tasks internally within the PLC as I do not have access to an external PC. Unfortunately, this PLC does not have motion control capabilities. Apologies for the inconvenience. - Luca.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>30-09-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The FX5 PLC is known for its powerful capabilities. Currently, I am unable to load an FX5 Project due to a broken GXW3. I can only load GXW2, which does not support the FX5. However, the FX5 has ample memory and offers a wide range of over 200 instructions, allowing for nearly limitless possibilities. As part of the I/Q/F series, I have successfully completed tasks such as horizontal tank level calculations and implementing a comprehensive recipe system stored in retentive memory.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>01-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is the FX5 capable of performing matrix calculations and handling structured text? If not, you may find yourself entering lengthy equations in ladder logic, which can be tedious. Another challenge is the uneven spacing of x locations. Is it possible to convert the python code into ladder logic, or are you utilizing a python library? When dealing with a third-order equation, does it need to pass through each point precisely, or just provide the best fit? Only 4 points and 4 equations are needed to determine the 4 coefficients for a third-order equation. Since the system of equations is overdetermined, a best fit solution is necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
       
        <div class="bg-white p-3 rounded mb-3">
            <p>Parky mentioned that the FX5 PLC is a powerful device with a rich set of instructions, including around 200. Although they are unable to load an FX5 Project due to a broken GXW3, which does not support the FX5, they recall that the FX5 has ample memory capacity. The FX5 is part of the I/Q/F series and Parky was able to perform tasks such as a horizontal tank level calculation and store a large recipe system in retentive memory. While doing calculations within the PLC may not be the most ideal, there is still hope, as mentioned by Parky and Peter Nachtwey. It is important to have good math skills when working with algorithms like third-order polynomials. It is recommended to provide specific algorithms and parameters for the desired fit. Additionally, sharing Python code used for fitting data and plots can be helpful for troubleshooting and analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The FX5 offers a limited range of mathematical functions in its IDE. Although my GXWorks3 is currently not working, I plan to retrieve my installation disk to fix it. The FX3U has comprehensive instructions, but there are still some missing, such as cos-1. I anticipate that the FX5, being an upgrade from the FX3, may include more mathematical functions. It is possible to program in ST, but certain functions may require specific FB's that are not readily available in other languages. For example, a pulse function is written as PLS[M1, M2], where M2 is pulsed when M1 is true for one scan. The ST language was added later in the IDE to remain compatible with ladder programming, so results are placed within brackets (e.g. Cos[D0,X] instead of X = cos[D0]). This requires some additional calculations and temporary storage usage, as was necessary in my horizontal tank level calculation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One possible solution is to utilize a mathematical technique known as Lagrange interpolation or polynomial. This method, explained in detail on Wikipedia, can be effective when cubic spline capabilities are not available. Lagrange interpolation is particularly useful when the distances between data points vary, as the resulting polynomial will pass through all given points. 

In practical terms, when dealing with x values between 460 and 530, it would be advisable to use the data points at 350, 460, 530, and 680. Similarly, when x falls between 350 and 460, the same set of 4 points should be used. It is optimal to have two points to the left (negative) and two points to the right (positive) of the current x value.

In order to implement this interpolation technique, the programmable logic controller (PLC) would need to conduct interval checks and then apply the appropriate formula. The result is a continuous flow of positions, velocities, and accelerations at the specified points (knots), ensuring smooth transitions between these key parameters. In the past, Lagrange interpolation was commonly used for motion control before the introduction of cubic splines.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of PLC programming, tackling a challenging task like fitting data may not always be straightforward. However, if you find yourself in a situation where working within the PLC is your only option, don't lose hope. A helpful post by @parky sheds light on how to approach this issue. 

Having strong math skills is essential for this task. As @Peter Nachtwey suggested, utilizing a third-order polynomial with five samples for a least-squares fit is a common approach, but there are various other methods to consider. It's important to determine the specific algorithm and parameters that best suit the desired fit. 

If you've been using Python for data fitting, it would be beneficial to share your code for further analysis. Tools like numpy's plyfit and polyval can assist in this process. Additionally, including a plot of your data can provide valuable insights, allowing for a more comprehensive understanding of the fitting results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum post, user luca72 asked about utilizing numpy's polyfit and polyval functions. The code provided calculates a polynomial fit for a given set of radius values and corresponding y values. The user's specific question was about applying a third-degree polynomial fit to the data. The code snippet shown demonstrates how to achieve this by using numpy's polyfit and polyval functions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Unfortunately, there doesn't seem to be a similar feature available in FX5. As mentioned earlier, you may need to rely on your mathematical abilities instead of using a pre-made library. I attempted to create something akin to this, albeit much simpler (1st degree), but had to relocate the calculations from the programmable logic controller (PLC) due to issues with decimal operations causing it to malfunction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>sczot</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>FX5 offers robust support for 32-bit floating point numbers, presenting a variety of useful functions to enhance your experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my previous post, I posed unanswered questions in #6 and proposed solutions involving the use of least squares. It is crucial to clarify whether the resulting equations must pass through the given points, as this detail significantly impacts the outcome. One common issue I encounter when working with libraries or packages is that while they are great for providing answers, understanding how to utilize them is essential for effectively implementing solutions on different platforms.

Similar situations arise in various forums where individuals rely on tools like Matlab to address their problems without grasping how to transfer the solutions to other systems. Obtaining answers without comprehension hinders the usefulness of these solutions. For instance, I am familiar with the algorithm used in np.polyfit() and its implementation through matrix math. Despite this, I have developed symbolic solutions that offer an alternative approach.

Specifically, examining the symbolic solution %04 reveals an ideal way to fit 11 points to a 3rd order polynomial under the assumption that all points are equidistant based on interval T. However, if the points are unevenly spaced, more complex intervals like T12 must be accounted for, leading to a more intricate symbolic solution.

In cases where matrix multiplication is unavailable, a symbolic approach like the one in %04 can be adopted to compute the necessary formulas for the PLC and determine the 4 coefficients for a least squares fit 3rd order polynomial. Additionally, %O30 provides equations for calculating coefficients using 5 equally spaced points, yet the complexity increases when intervals like T01, T12, T23, and T34 are involved. By computing these coefficients and executing the 3rd order polynomial in the PLC, the solution remains valid as long as the points remain constant.

It would be beneficial if individuals seeking assistance, like the OPs, provided necessary information upfront to avoid unnecessary delays and maximize efficiency. With the essential details from the beginning, I could have swiftly computed the OP's solution within an hour of their initial query, preventing wasted time.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey emphasized the importance of utilizing libraries to obtain answers efficiently. While his speech was passionate, it resonated with me, despite my appreciation for the Runge-Kuta method. Engineers typically prioritize requirements and constraints from the process side, diverging from the perspective mentioned in point #1. So, what provoked such a passionate speech? It's evident that human laziness is a challenge that cannot easily be addressed, but why did the topic ignite such strong emotions? I remain realistic about the limitations of changing the world.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK remarked on the impassioned speech, expressing familiarity with similar situations during their extensive participation in forums for over 20 years. They criticized Matlab users for seeking answers without truly grasping the concepts. A query was raised regarding recognition of the least-squares algorithm.

Further, MaxK acknowledged agreement with a talk on the Runge-Kutta method, highlighting its simplicity in handling boundary issues and practicality in real-world data applications. Emphasis was placed on the necessity of clear requirements and the frustration of users not providing essential information upfront.

MaxK highlighted the recurring pattern of users seeking help without realizing that solutions already exist. The sentiment of not being able to change human laziness was shared, but the frustration lies in users thinking their issues are unique when they likely have been solved before.

Overall, MaxK urged users to take charge of their problems and provided algorithmic solutions to address their needs. The sentiment of not being able to change human nature was acknowledged, along with commentary on ineffective problem-solving behaviors.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey mentioned that drbitboy was not effectively extracting teeth. Don't forget to include the @ symbol before drbitboy next time!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a message, drbitboy pointed out the absence of the "@" symbol before their username, emphasizing its importance. The question arises: is using the "@" symbol really crucial in this context?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When addressing someone on social media, always remember to tag them by using the "@" symbol in front of their username. Even if my initial comment wasn't directed at you, now that you've responded, it's important for you to follow this practice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey has been active in various forums for a significant period of time. However, he believes that human communication is often ineffective. He jokingly mentions that most of what he writes is sarcastic, but acknowledges that not everyone can perceive sarcasm. Consequently, he humorously suggests that those who struggle to understand sarcasm should simply avoid reading or responding to his posts.

In a different exchange, Nachtwey questions the use of the Runge-Kutta approximation method, specifically pointing out instances where it was utilized through libraries rather than being coded independently. He expresses surprise at the overlooking of initial conditions in the method and suggests that those who solely rely on libraries are seeking an easy solution. Nachtwey humorously concludes that, given the challenges of solving equations with dead time compared to algebraic equations, relying on libraries may not always be the best approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK mentioned that all the demonstrations of the Runge-Kutta approximation on this platform were created using a specific program (library). Surprisingly, if you developed the RK approximation yourself, it's even more astonishing that you neglect the assumption of the method's initial conditions. Personally, I recall my first experience with Runge-Kutta back in 1972-1973 during my sophomore year of college, where I wrote a program in Fortran using a card punch machine. Despite the challenges of those times, I now rely on built-in libraries in C for faster execution, such as odeint in Python. Nonetheless, I have my own Python RK script that predates my use of odeint. In fact, I once wrote a Runge-Kutta program from scratch in 2012, as detailed on page 5/11. It was during a memorable interaction with a senior engineering college student who was struggling with a project involving water level control in a tank. My goal was to show him the simplicity of implementing Runge-Kutta methods.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey inquired about the FX5's capability for matrix math and structured text. If not, one would have to enter lengthy equations in ladder logic, which can be tedious. The uneven spacing of x locations complicates the process. Instead of translating Python code into ladder logic, consideration must be given to using a Python library. The calculation of 4 coefficients for a 3rd order equation requires only 4 points and 4 equations. Although the system of equations may be over-determined, a best fit solution is necessary. Please note that the FX5 does not support matrix math, and the use of Numpy prevents translation of Python code into ladder logic. It is possible to have between 5 to 10 points for calculation purposes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Luca72 pointed out that FX5 lacks matrix math functionality; however, it does support interpolation. They are having trouble converting Python code to Ladder logic due to their use of Numpy library. They are seeking assistance in achieving accuracy and compatibility between FX5-calculated polynomial coefficients and their Python example. Additionally, unanswered questions about the third-order equation going through each point or fitting the best have been brought up. Furthermore, the level of accuracy required and how to measure it are also crucial factors to consider.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By the way, that Python module likely addresses this issue. Developing a universal solution for this in ladder or ST is a complex task; Lagrange interpolation seems like a more favorable option, even though it would still be challenging to implement in ladder.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey mentioned that he had unanswered questions in #6 and offered solutions for cases where least squares are necessary. It is crucial to know if the resulting equations must pass through the points, as this can greatly impact the outcome. Nachtwey also pointed out his reservations about relying on libraries or packages, as they may provide answers but lack understanding.

He discussed his familiarity with the np.polyfit() algorithm and emphasized the importance of understanding the code. Nachtwey provided a symbolic solution for fitting 11 points to a 3rd order polynomial, taking into account evenly spaced points. However, the solution becomes more complex when dealing with unevenly spaced points.

Nachtwey also mentioned the need for a symbolic solution if matrix multiplication is not an option, and explained how to compute coefficients for a 3rd order polynomial using different point intervals. Despite the challenges, Nachtwey expressed frustration with the lack of essential information provided by original posters in forums.

In response to a query about replicating the polyfit algorithm without external libraries, Nachtwey suggested constructing the Vandermonde matrix and solving it through QR factorization. He highlighted his ability to build the Vandermonde matrix but expressed difficulty in progressing further, relying on polyfit for satisfactory results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>There are various techniques for solving matrix equations. One common method is using numpy.polyfit, which is a convenient tool that utilizes numpy.linalg.lstsq underneath. Numpy.linalg employs techniques like SVD and QR-factorization for matrix operations. 

Consider whether the calculation of polynomial coefficients needs to be performed immediately when new data is available or if it can be delayed for a short period of time. Since your matrix is small, slower methods such as Gaussian elimination (which is O[N³]) could be considered if speed is not a critical factor in your implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Learn how to construct a matrix using a method other than the Vandermonde matrix, followed by utilizing the Gaussian Elimination technique to solve a 3x3 matrix. Incorporating both processes into a ladder format may require substantial dedication, but the procedures themselves are clear-cut. Alternatively, Lagrange Interpolation could be considered a more straightforward approach.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey @drbitboy, it seems like we're still unsure if the equation needs to pass through all the points or simply be a least squares fit. Despite 27 posts, we haven't been able to reach a conclusion. I've presented both possibilities, so maybe it's best to let the original poster determine the best approach. Let's allow them to solve this dilemma themselves, as our time has been spent enough on this matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies if my response is unclear, but I want to emphasize that the results produced by polyfit are exactly what I need to obtain the valuable data required for our procedures. We conduct tests on our bending machine, measuring the radius of the profile for 5 to 10 values of y. To ensure the radius falls within our desired range, we utilize a third-degree polyfit to determine the position for setting the y-axis. My query, although it may seem simple, is whether it is possible to achieve the same outcome using a Mitsubishi FX5U without the need for a PC. Thank you for your time. Regards, Luca</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>luca72 inquired whether it is possible to implement a similar process on a Mitsubishi FX5U PLC without using a computer. The answer is affirmative: By writing code for Gaussian Elimination (specifically Gauss-Jordan method), one can replicate the functionality of Python's numpy.polyfit routine on the PLC. This involves calculating third-order polynomial coefficients for a least-squares fit to a set of 5 to 10 [position, radius] pairs. Implementing this in Structured Text would be more straightforward, but it is achievable with Ladder Logic as well. While there are quicker methods to factor the array, they are more intricate and challenging to code and troubleshoot. The Gaussian Elimination process involves minimal operations such as scaling a row, adding one (scaled) row to another, and possibly swapping rows. The main challenges may arise from an ill-conditioned array and numerical instability. Though a bit of time may have been lost awaiting this response, the effort required to develop and refine this solution will certainly outweigh it. Please note that the 4x4 array mentioned earlier was mistakenly labeled as 3x3 initially, overlooking the zeroth-order term.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a question about replicating the functionality of Python's numpy.polyfit routine on a PLC, drbitboy suggested implementing Gaussian Elimination (specifically Gauss-Jordan method) to calculate third-order polynomial coefficients for a least-squares fit to [position, radius] pairs. This can be achieved using Structured Text or Ladder Logic, with Structured Text being the preferred option due to its simplicity. While there are faster algorithms for factorizing the array, they are more complex to implement and debug. Gaussian Elimination involves simple operations like scaling rows, adding scaled rows, and potentially swapping rows. The main challenges are dealing with ill-conditioned arrays and numerical instability. Despite the time spent waiting for a solution, the coding process may be time-consuming, but essential for achieving accurate results. Please note that the correct array size for this problem is 4x4, not 3x3 as previously mentioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Luca72, thank you for your reply. I understand that replicating the process in ST may not be easy for you, but you do not necessarily have to go through all the steps that polyfit does. Polyfit utilizes numpy.linalg.lstsq, which in turn uses singular value decomposition for efficiency, especially with large matrices. Considering that your matrix is relatively small (4x3 or 4x5 when augmented) and you are looking for updated polynomial coefficients after manual measurements, you have the flexibility to wait for the solution and do not require real-time calculations.

Upon researching "pascal gauss jordan," I came across a .7z (zip) file containing code that closely resembles what you need for ST. This code can help you in the process, although you will still need to construct the array.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you considering using Gauss-Jordan elimination for solving equations? While it may seem error-prone, it can be an interesting method to support. But what if the number of points changes to 10? The original poster mentioned there could be anywhere from 5 to 10 points. This is something to consider. The main issue, however, is the OP's fixation on a least squares fit over a cubic curve that passes through all the points. Python offers a convenient CubicSpline function, yet the OP continues to rely on a least squares method.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Third-order Gauss-Jordan method typically involves several dozen ST statements. Despite being almost error-free (except for ill-conditioned matrices, which can be checked for), it may require another set of matrices. The only potential issue may arise if the FX lacks double-precision floating-point capabilities, although this is a rare occurrence. Once the code is debugged and operational, it requires no further maintenance - it either functions correctly or fails due to an ill-conditioned matrix.

They are seeking a cubic fit that does not necessarily need to pass through all data points. Python's polyfit offers a satisfactory solution, although replicating it can be time-consuming but not overly complicated. The number of data points is not a crucial factor, as long as the upper limit is known in advance. The approach to finding a solution remains the same.

In my opinion, using a Spline or Lagrange method may be more effective, but it does not necessarily make the process less intricate. Any simplicity gained from the algorithm is offset by the complexity of selecting which data points to use in the evaluation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey's concerns regarding Gauss-Jordan have been noted, but the results have proven to be satisfactory for this specific application. The comparison between a hard-coded PLC-based ST solution and the Python numpy.polyfit results can be seen in the image below. The Python code utilizes double-precision REALs, while the PLC code uses single-precision REALs, resulting in slight differences in coefficients and calculated evaluations due to floating-point precision. However, both versions produce almost identical results, with differences attributed to precision variations.

It is important to note that the matrix solver (Gauss-Jordan, SVD, etc.) used is not significant, as the least-squares solution remains unique, yielding the same polynomial regardless of the solver. In cases where double-precision REALs are not available, scaling techniques can be employed to minimize roundoff errors.

The Python code provided is straightforward and showcases a test_cubicfit function for cubic polynomial fitting. The code demonstrates the calculation of coefficients and corresponding Y values based on given XY pairs. The simplicity and effectiveness of the Python code highlight the consistency and accuracy of the results obtained.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you are looking for a method to calculate least squares, the Savitsky-Golay algorithm that I previously shared is a reliable option. While there are other techniques that can yield similar results, I personally utilized the S-G algorithm for autotuning with the RMC100 system 25 years ago. In my example, the data points do not necessarily have to be evenly spaced, although they are in this particular case. I recommend using wxMaxima to input the array symbolically, as it will automatically generate the required equation based on the number of points. This process will need to be repeated for each set of points the user has. Our RMCTools software also leverages the S-G algorithm for smoothing graphical data.

One important feature of the Savitzky-Golay method is that it provides coefficients for a cubic equation, namely y=a+bx+cx^2+dx^3. These coefficients can also be used to calculate the first, second, and third derivatives at any given point, making them valuable for feed forwards.

In contrast to methods involving complex indexing, I personally prefer Lagrange interpolation for its simplicity and efficiency. For instance, in a scenario where interpolation is needed between points 3 and 4 out of a total of 10 points, I would copy points 2, 3, 4, and 5 to a static area that is specifically designated for computing the interpolated value. This approach minimizes the need for extensive indexing and boosts computational speed.

If I were in a managerial role, I would consider the cost-effectiveness of applying these programming techniques across multiple machines. For small-scale operations, investing in a motion controller with cubic splines might be a more practical solution. Additionally, it is crucial to evaluate whether a least squares fit is truly superior to an accurate fit. My preference for Lagrange interpolation, combined with the static memory technique, simplifies the process and reduces the reliance on extensive indexing, ultimately enhancing efficiency.

Furthermore, it is essential to acknowledge the limitations of PLCs in handling advanced mathematical functions like those offered by libraries such as numpy or scipy. This constraint poses challenges similar to those encountered when developing firmware for motion controllers without external libraries.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While the solutions provided by Peter and Brian may not directly assist the original poster (OP), they could be valuable for others in the future. For those using TwinCAT, there is a free matrix math library available for download. This resource was created by someone dedicated to simplifying the process. I have recently downloaded and installed it, although I have not yet tested the function blocks (FBs). Nonetheless, I anticipate that this library may be beneficial for my upcoming project, and could have been useful for the OP as well. You can find the Matrix Math Library for Beckhoff TwinCAT 3 PLC Environment on GitHub under the project name "BurksEngineering/TcMatrix".</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>busarider29</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey asked how to edit in a PLC, since PLCs are unable to utilize numpy or scipy libraries. This limitation is reminiscent of when he had to write firmware for a motion controller without using any libraries. Like him, I also hard-coded it. The Gauss-Jordan method is known to be O(N³), with N equaling 4 for cubic equations, resulting in approximately 64 operations (4³). This task may be complex but is far from being as challenging as the labor of Hercules.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>busarider29 commented that the solutions provided by Peter and Brian did not offer much assistance to the original poster (OP). Adding to the mix, busarider29 also offered a solution, which unfortunately the OP could not utilize. busarider29 humorously expressed that they are eagerly waiting for the OP to compensate them with Lira. Joining the club, busarider29 mentioned that jackets are currently being designed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy mentioned that the original poster (OP) has provided a solution, but it may not be usable. Many recent posts show that the OP is uncertain about their needs, such as a recent thread discussing a sawmill application with a 50 ft cylinder, which is not practical. I believe in being straightforward and not wasting time, and I would consider firing the engineering manager if the OP has one. Watch this 2006 video showing a second-generation motion controller in action, with cubic splines being updated on-the-fly. Perhaps the OP should reach out to Tinine for assistance with chip controls. Many engineers struggle with implementing algorithms in firmware code, despite using tools like Matlab for assistance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey observed a common dilemma on engineering forums - individuals turn to Matlab for solutions but struggle with implementing algorithms in firmware code. This issue highlights the need for speed in development and deployment. Despite possessing strong mathematical abilities, a diverse programming background, multiple STEM degrees (including AI and data science), and years of experience in the field of "controls", one may still face challenges in securing a desired position. Lack of familiarity with MATLAB can also be a hindrance, as many companies rely on it for coding algorithms and programming microcontrollers. This gap in expertise can impact one's prospects, as experienced firsthand during a recent job interview.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>busarider29</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, busarider29 emphasized the importance of speed in the development and deployment of projects. Despite having a strong foundation in math, programming, and multiple university STEM degrees (including AI/data science), they recently missed out on a job opportunity due to a lack of experience with MATLAB. The company they interviewed with preferred using MATLAB to code algorithms and flash to microcontrollers. However, it's worth noting that this capability is also available in Python and Mathematica. 

In the realm of programming, one can develop their application in MATLAB and then convert it to C. Similarly, Python can be used to generate ST code for motion controllers, with minor modifications required. For those who cannot afford MATLAB, Scilab is a comparable alternative with a few variations. By mastering Scilab, transitioning to MATLAB will be seamless. The key takeaway is that there is always room for growth and learning in the field of programming.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>luca72 expressed gratitude for the response and mentioned finding it challenging to replicate a task in ST without the same outcome as polyfit. To achieve the desired result, consider searching for "Gauss Jordan reduced row echelon form" on YouTube for guidance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey mentioned that the ability to convert apps from Matlab to C is a recent feature. This functionality is also available in Python and Mathematica. However, the extent to which Matlab's libraries can be included in the C code is uncertain. A similar process can be carried out in Python, where code can be written to generate ST code for motion controllers. Scilab is a viable alternative for those who cannot afford Matlab, as it shares many similarities with the software. In addition, Simulink models can be built in Matlab and then converted to ST code. Despite not being proficient in Matlab yet, Nachtwey is on the path to improving his skills with the help of a newly acquired license and a book. Embracing a continuous learning mindset, he is also exploring Python for machine learning applications, while keeping an eye on Rust as a potential future technology in this field.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>busarider29</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, drbitboy suggested searching for "Gauss Jordan reduced row echelon form" on YouTube for a solution. While those techniques are familiar from college, faster algorithms are now preferred, though not for implementation in ladder logic. The need remains for a PLC-exclusive solution, especially considering the complexity of matrix manipulation for different numbers of points. Pipe bending seems straightforward, as discussed by Tinine who specializes in pipe bending machines in the UK. The question remains about the necessity of a least squares fit over a cubic spline that passes through all points. The potential for real-time point updates is also considered. Mention of radius hints at a rotational application, raising questions about cyclic or periodic movement. Clarification is needed for a more tailored solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey mentioned the need for a solution exclusively running on a PLC. "Living is easy with eyes closed..."; you can view an earlier post with a solution running on an S2-1200 by clicking here. When discussing matrix manipulation for 10 points or a general solution for 5 to 10 points, the number of sample points doesn't impact the size of the problem. To fulfill the OP's request for a cubic fit, similar to numpy.polyfit with deg=3, a 4x4 matrix (4x5 augmented) is always necessary.

The reason behind requiring a least squares fit over a cubic spline that passes through all points (knots) is still unknown. Regardless, if a cubic fit is preferred due to potential measurement errors in the samples, it serves as a better model. While suggesting Lagrange interpolation or a spline as simpler alternatives, the ultimate decision lies with the individual seeking the solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Does the FX5 support Structured Text (ST)? Some PLCs are capable of performing array math thanks to ST. By using your solution, a cubic fit will be generated due to having 4 equations with 4 unknowns. It appears that the original poster (OP) is leaning towards a least squares fit instead of a cubic fit. I believe that your approach may be more challenging compared to symbolically solving the problem and manually coding the equations with the static area. The periodic or cyclic nature of the motion is still uncertain.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The FX5 PLC offers powerful programming capabilities, including ST, ladder logic, and FBD. While it is faster than the older FX3U model, the FX5 does not support 64-bit double precision math operations. Despite this limitation, users can still achieve their desired functionality efficiently thanks to the FX5's rich set of instructions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>With an LD X0 speed of 34 ns and a MOV D0 D1 speed of 34 ns, it is safe to conclude that this system operates at an impressive speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>goghie</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To end the discussion, the provided PDF showcases a PLC-based cubic fitting routine utilizing Siemens S7-1200. Adapting the SCL to ST in the FX5 should be a seamless process. The routine arranges the values from the [X,Y] input pairs into an augmented matrix through two cascaded FOR-loops based on the formulae provided in the link. Subsequently, a basic Gauss-Jordan Elimination is performed without any additional optimizations for numerical stability.

On page 1, ladder rung ("Network") 1 (sole rung) triggers the main program to reset the boolean value m.trigger to 0 and call the "cubic_fit" function if m.trigger equals 1. The cubic fit polynomial is calculated with the following parameters:
- xsamples: input sample of the independent variable "X" ARRAY[0..9] of REAL
- ysamples: input samples of the dependent variable "Y" ARRAY[0..9] of REAL
- iN: input - the number of sample pairs in each input m.xsamples and m.ysample arrays to fit DINT (acceptable range is [4:10])
- coeffs: input/output - array to store the polynomial coefficients of the cubic fit ARRAY[0..3] of REAL
  (m.coeffs[0] represents the zeroth-order term and m.coeffs[3] represents the third-order term)
- cubic_fit: FC return value BOOL (TRUE if successful, FALSE if not - e.g. due to ill-conditioned matrix or invalid input value for N)

Additionally, the evaluation function FC "eval_xsamples" calculates the polynomial at the m.xsamples array value with the following parameters:
- xsamples: input sample of the independent variable "X" ARRAY[0..9] of REAL
- coeffs: input - cubic fit's polynomial coefficients ARRAY[0..3] of REAL
- iN: input - the number of sample pairs in each input m.xsamples and m.ysample arrays to fit DINT (acceptable range is [4:10])
- yevals: input/output - array to receive the results of the cubic fit evaluated at the initial m.N elements of m.xsamples ARRAY[0..9] of REAL
- eval_xsamples: FC return value BOOL (TRUE if successful, FALSE if not)

Moreover, the FC "eval_xsample" iterates over the initial m.N elements of m.xsamples and calls the evaluation function FC "eval_cubic" to assess the polynomial value at a specific X value with the parameters:
- coeffs: input - the four polynomial coefficients of the cubic fit, Ci for i=0 to 3 ARRAY[0..3] of REAL
- xsample: input - the X value for evaluating the cubic polynomial
- eval_success: FC return value REAL (value = Σi=0 to 3(Ci * xi))

In response to @Peter Nachtwey, the quick method was employed instead of raising x to different powers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Thank you for your patience. If you need it, feel free to request the gxwork3 file via email. Unfortunately, the forum has a maximum attachment size of 400 KB, so I am unable to upload the file. - Luca</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Consider converting the project into a PDF file for easy attachment to a post. This method can streamline the process and enhance the presentation of your content.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In an effort to bring closure to this thread, drbitboy mentioned using FOR-loops based on the formulas provided in a previous post. These formulas utilize the Vondermonde matrix, as mentioned by the original poster. The Savitsky-Golay method, which involves smoothing data within a small data window, is essentially the same but with a different application technique. While manually applying this method may involve matrix multiplications and inversions, a more straightforward approach involves assigning variables to each entry for a symbolic solution. This eliminates the need for complex matrix calculations. Though typically all data is used for fitting, selecting only four points can still result in a true cubic fit, making Lagrange interpolation appear more streamlined. Instead of overly complicating the process, consider exploring simpler solutions like those described earlier. For symbolic problem-solving, utilizing sympy to export formulas can make for easier use in programs like ST by making simple edits.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this case, the inequality m > n = 3 (both starting at zero) means the Vandermonde matrix is not the solution needed here. Utilizing the Savitzky-Golay method requires data points with evenly spaced independent variable values, which are not available in this situation. For n=3, a simple row-by-row elimination technique is sufficient. While Lagrange interpolation may be a simpler alternative, the least-squares solution is what was requested by the original poster (OP). I am the sole provider of a practical solution that can be implemented on a Programmable Logic Controller (PLC), as opposed to just offering critiques and alternative strategies. Understanding the suggestions of @Peter Nachtwey could have potentially prevented the necessity of this post in the first place.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>We are excited to share this with you all. Thank you for your continued support and enthusiasm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey exclaimed, "Wait, it's still alive? 'Tis but a flesh wound." Click to read more.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>joseph_e2</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy pointed out that in this case, m is greater than n, equal to 3 (both zero-based), so the Vandermonde matrix is not the solution needed. Savitzky-Golay requires samples with equally spaced independent variable values, which the original poster (OP) does not have, making it ineffective. Utilizing simple row-by-row elimination is sufficient for n=3. While Lagrange interpolation may be simpler, the OP specifically requested a least-squares solution. Among the critiques and suggestions, drbitboy is the only one who provided a practical solution applicable to a PLC. This post might not have been necessary if the OP had understood @Peter Nachtwey's suggestions. The array remains the same Vandermonde matrix and follows the same formula.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>luca72 shared: "Here is the solution. Thank you to everyone who contributed. Can you confirm if it was successful?" Don't forget to click expand to view the full message.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy asked if it was successful. The answer is a resounding "Yes" with a success rate of 100%.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>02-10-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>luca72</span></li>
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
<h4 class='text-dark'>FAQ: 1. Is it possible to perform polynomial fitting on a Mitsubishi FX5u PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - Yes, it is possible to perform polynomial fitting on a Mitsubishi FX5u PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 2. What degree of polynomial fitting can be achieved on the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - The PLC can perform up to a third-degree polynomial fitting.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 3. How many minimum X and Y values are required for polynomial fitting on the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - A minimum of 5 X and Y values are required for polynomial fitting on the PLC.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 4. How can I calculate the corresponding Y value by inputting an X value within the range of the measured data on the PLC?</h4>
<p class='text-muted'><strong>Answer:</strong> - You can calculate the corresponding Y value by implementing the polynomial fitting algorithm on the PLC with the provided input data.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: 5. Is it necessary to connect the PLC to a computer for performing polynomial fitting?</h4>
<p class='text-muted'><strong>Answer:</strong> - No, it is not necessary to connect the PLC to a computer for performing polynomial fitting.</p>
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

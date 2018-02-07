<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SD Life Cycle</title>
        <link type="text/css" rel="stylesheet" href="css/homework1.css">
    </head>
    
    <body>
        <div>
            <!--Header section-->
            <div>
                <h1 style="text-align:center; color:#f21010">Software Development Life Cycle</h1>
            </div>
        </div>
        <div  class= "menuDiv">
            
            <ul  class="menu">
                <li><a class="none menu" href="#" style="padding-right:30px; padding-left:20px; color:blue;"><b>General</b></a></li>
                <li><a class="menu" href="iterativeMethod.html" style="padding-right:30px; color:#f21010;"><b>Iterative Method</b></a></li>
                <li><a class="menu" href="waterfallMethod.html" style="padding-right:30px; color:#f21010;"><b>Waterfall Method</b></a></li>
                <li><a class="menu" href="spiralMethod.html" style="padding-right:30px; color:#f21010;"><b>Spiral Method</b></a></li>
            </ul>
            
        </div>
        
        <div style=" border:#006 solid 1px; margin-left: -4px; margin-right: 12px;background-color:#dddbdb">
            <h2 style="margin-left:1em"><u>Overview</u></h2>
            <p>
                SDLC or Software Development Life Cycle is a process used by software industry to design, 
                develop and test high quality softwares. The SDLC is a model to produce high quality software 
                that meets or exceeds customer expectations, reaches completion within times and cost estimates.
                SDLC is a process that an orginization follows for a software project. It inlcudes a step by step plan 
                describing how to develop, maintain, replace and alter or enhance specific software. 
                The life cycle defines a methodology for improving the quality of software and the overall development 
                process.
            </p>
            <?php
            $uselessVariable = 42;
            ?>
            <p>
                <img src="images/sdlc_stages.jpg" alt="sdlc model" class="posImg" style="float:right;">
                
                <h3 style="margin-left:1em"><u>There are six phases in every Software development life cycle model:</u></h3>
                
                <ol>
                    <li>Planning and Requirement Analysis</li>
                    <li>Defining requirements</li>
                    <li>Designing the Product Architecture</li>
                    <li>Building or Developing the product</li>
                    <li>Testing the product</li>
                    <li>Deployment in the Market and Maintenance</li>
                </ol>
                
            <!--</p>-->
            <h2 style="margin-left:1em"><u>SDLC Models</u></h2>
            <p>
                There are various software development life cycle models defined and designed which are 
                followed during software development process. These models are also referred as 
                "Software Development Process Models". Each process model follows a Series of steps 
                unique to its type, in order to ensure success in process of software development.

            </p>
            <p>Following are the most important and popular SDLC models followed in the industry:</p>
             <ul>
                <li>Waterfall Model</li>
                <li>Iterative Model</li>
                <li>Spiral Model</li>
                <li>V-Model</li>
                <li>Big Bang Model</li>
            </ul>
            
            <h2 style="margin-left:1em; text-align:center"><u>Stage 1: Planning and Requirement Analysis</u></h2>
            <p>
                Requirement analysis is the most important and fundamental stage in SDLC. It is performed by the senior members 
                of the team with inputs from the customer, the sales department, market surveys and domain experts in the 
                industry. This information is then used to plan the basic project approach and to conduct product feasibility 
                study in the economical, operational, and technical areas.
            </p>
            <p>
                Planning for the quality assurance requirements and identification of the risks associated with the project is 
                also done in the planning stage. The outcome of the technical feasibility study is to define the various 
                technical approaches that can be followed to implement the project successfully with minimum risks.
            </p>
            
            <p>
                
                <h2 style="margin-left:1em; text-align:center"><u>Stage 2: Defining Requirements</u></h2>
                
                <p>
                    Once the requirement analysis is done the next step is to clearly define and document the 
                    product requirements and get them approved from the customer or the market analysts. 
                    This is done through .SRS. . Software Requirement Specification document which consists of 
                    all the product requirements to be designed and developed during the project life cycle.
                </p>
                
            <!--</p>-->
            <h2 style="margin-left:1em; text-align:center"><u>Stage 3: Designing the product architecture</u></h2>
            <p>
                SRS is the reference for product architects to come out with the best architecture for the product to 
                be developed. Based on the requirements specified in SRS, usually more than one design approach for
                the product architecture is proposed and documented in a DDS - Design Document Specification.
            </p> 
            <p>
                This DDS is reviewed by all the important stakeholders and based on various parameters as risk assessment, 
                product robustness, design modularity , budget and time constraints , the best design approach is selected for 
                the product.
            </p>
            <p>
                A design approach clearly defines all the architectural modules of the product along with its communication 
                and data flow representation with the external and third party modules (if any). The internal design of all the
                modules of the proposed architecture should be clearly defined with the minutest of the details in DDS.
                
            </p>
            
            <h2 style="margin-left:1em; text-align:center"><u>Stage 4: Building or Developing the Product</u></h2>
            <p>
                In this stage of SDLC the actual development starts and the product is built. The programming code is 
                generated as per DDS during this stage. If the design is performed in a detailed and organized manner, 
                code generation can be accomplished without much hassle.
             </p> 
             <p>
                Developers have to follow the coding guidelines defined by their organization and programming tools 
                like compilers, interpreters, debuggers etc are used to generate the code. Different high level programming 
                languages such as C, C++, Pascal, Java, and PHP are used for coding. The programming language is chosen with 
                respect to the type of software being developed.
                
            </p>
            
            
            <h2 style="margin-left:1em; text-align:center"><u>Stage 5: Testing the Product</u></h2>
            <p>
                This stage is usually a subset of all the stages as in the modern SDLC models, the testing activities 
                are mostly involved in all the stages of SDLC. However this stage refers to the testing only stage of the
                product where products defects are reported, tracked, fixed and retested, until the product reaches the 
                quality standards defined in the SRS.
                
            </p>
            
            <h2 style="margin-left:1em; text-align:center"><u>Stage 6: Deployment in the Market and Maintenance</u></h2>
            <p>
                Once the product is tested and ready to be deployed it is released formally in the appropriate market. 
                Sometime product deployment happens in stages as per the organizations. business strategy. The product may 
                first be released in a limited segment and tested in the real business environment (UAT- User acceptance testing).
             </p>   
             <p>
                Then based on the feedback, the product may be released as it is or with suggested enhancements in the 
                targeting market segment. After the product is released in the market, its maintenance is done for the 
                existing customer base.
                
            </p>
            
            <div>
                <footer>
                    <a href="https://www.tutorialspoint.com/sdlc/sdlc_quick_guide.htm" target="_blank" style=" margin-left:15px; padding-bottom:15px">click here for more information</a>
                </footer>
            </div>
            
        </div>
        
    </body>
</html>
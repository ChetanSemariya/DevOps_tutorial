<?php

/*

************ WHAT IS CI/CD PIPELINE AND WHAT IS JENKINS ********************

CI = Continuous Integration
CD = Continuous Delivery OR continuous Deployment

Note:- CI/CD is not a tool it is a methodology of Software Development Life cycle (SDLC).

## What is Pipeline ?
Ans). Step by step work ko karna or we can say that it is a process of "FIRST COME FIRST SERVE"


// ***************** PROBLEM BEFORE CONTINUOUS INTEGRATION ***************** //

CONTINUOUS INTEGRATION = Continuous Build + Continuous Testing

=> Let suppose humare developers kisi project pr work kr rhe hai and unhone work krne ke baad sara code repository pr upload krdiya Github pr 10000 lines kaa now ab hum code ko integrate krke dekhenge ki code sahi hai yaa nahi to uske liye hume testing krna padegi and jab testing mai bug milenge to use solve krne mai time bahut consume hoga because we cannot able to easily find out at which line of code produce error so this is the main problem.



              Push Code
Developer-1 ------------|
                        |
              Push Code |
Developer-2 ------------|------> GitHub Repo -----------> Continuous Integration ----------- > Testing
                        |                                      Server                              | 
              Push Code |                                                                          |     
Developer-3 ------------|                                                                          | 
    |                                                                                              | 
    |                                    Give Bug to Developer                                     |
    |_ _ _ _ _ _ _ _ _ _ _< _ _ _ _ _ _ _ _ _ _ _ _ _< _ _ _ _ _ _ _< _ _ _ _ _ _ _ _ _ _ _ _ _ __ | 


// ******************* AFTER CONTINUOUS INTEGRATION ***************** //




              Push Code
Developer-1 ------------|
                        |                                          |
              Push Code |                                          |
Developer-2 ------------|------> GitHub Repo -----------> Continuous Integration ----------- > Testing
                        |                                      Server                              | 
              Push Code |                                                                          |     
Developer-3 ------------|                                                                          | 
    |                                                                                              | 
    |                                    Give Bug to Developer                                     |
    |_ _ _ _ _ _ _ _ _ _ _< _ _ _ _ _ _ _ _ _ _ _ _ _< _ _ _ _ _ _ _< _ _ _ _ _ _ _ _ _ _ _ _ _ __ | 


Note:- Developer chote-chote parts mai code ko repository pr uplaod karega and jese hi humara code CI-server(continuous integration) pr jayega vahi pr 3 operations perform honge [Build, Test, Deploy] and testing perform krke hum easily se bug ko solve krskte hai because number of lines of code bahut kam hai and aisa krte krte hum 10000 lines ka bhi code likh denge to yhh surety rahegi ki 10000 line ke code mai error nahi hai and jo bhi new lines ko code likhe hai usme error hai to time bahut save hoga



CI/CD PIPELINE ARCHITECTURE :-


Developer -------> Version -----> Build -----> Unit Test -----> Deploy ----> Auto Test -----> Production Env ------> Measure & Validate
    |               Control          |              |              |              |                Deploy                    |
    |                  |             |              |              |              |                   |                      |   
    ^                  v             v              v              v              v                   v                      V   
    |            Bugs  |       Bugs  |      Bugs    |              |              |     Bugs          |             Bugs     |   
    |                  |             |              |  PRODUCTION FEEDBACK Bugs   |                   |                      |   
    |-----<-------------<---------------------<-----------------------<----------------<------------------<------------------|


#### Tool used for Different Level of DevOps :-


Plan ----------------                                                             Deploy
  |                  |                                                               |           
  |             GitHub works                                                         |           
  |                  |                                                               |   
Code ----------------                             ----------------------             |   
  |                                               |                     |         Operate
  |                                               |   Integration Tool  |            |   
Build -------------- Maven Tool or Gradie         |      Jenkins        |            |   
  |                                               |                     |            |   
  |                                               -----------------------            |   
  |                                                                               Monitor
Test --------------- Selenium Tool



Deploy + Operate ===> Chef Tool or pupet
Monitor ====> Nagios

Note:- Jenkins Development and Operational part ko integrate krne ke kaam mai aata hai and yhh sabhi work automate krdeta hai like as jese hi developer ne code ko github pr push kiya jenkins use vha se uthayga or uski build bana dega and Maven ke pass bhej dega test krne ke liye and testing krne ke baad jenkins frr use chef ke pass bhej dega deployment krne ke liye.

"JENKINS => HEART OF SDLC (SOFTWARE DEVELOPMEMT LIFE CYCLE)"

Jenkins Responsibility => Kaam poora hone ke baad use aage leke jaana 

## Similar tool like jenkins :- Bamboo, Travis CI, BuildBot (All are paid version) but jenkins is open source

************ CHARACTERISTICS OF JENKINS ***************

Why jenkins Popular ?
=> Strong community support
=> A lots of plugins are available

1). Jenkins is an open-source project written in "Java" that runs on windows, macOs and other unix like operating system. It is free community supported and might be your first choice tool for CI. (work on port number 8080)
2). Jenkins automate the entire software development life cycle.
3). Jenkins was originally developed by "Sun Microsystem in 2004" under the project name Hudson.
4). The project was later named jenkins when oracle bought Microsystems.(oracle ne hudson mai se jenkins ko alag nikal diya or free krdiya and hudson ko paid rakha jo ki ek enterprise version hai jenkins ka)
5). It can run on any major platform without any compatibility issues.
6). Jenkins is not only a tool but also a framework
7). **** Whenever developer write code, we integrate all that code of all developers at that point of time and we build test and deliver/Deploy to the client , this process is called CI/CD.
8). Jenkins helps us to achieve this
9). Because of CI, now bugs will be reported fast and get rectified fast, so the entire Software development happens fast


// ************ WORKFLOW OF JENKINS **************** //

1). We can attach git, Maven, Selenium and Artifactory plugins to jenkins (jiski help se jenkins in sabhi ke sath kaam krskta hai)
2). Once developers puts code on github, jenkins pull that code and send to Maven for Build
3). Once Build is done, jenkins pull that code and send to selenium for testing
4). Once testing is done, then jenkins will pull that code and send to artifactory (archiving purpose) and per requirement as so on
5). We can also deploy with jenkins

Note:- Jenkins is work on Master-slave architecture i.e jo bhi work aayga uss kaam ko master chote-chote parts mai distribute krdega

// ************ ADVANTAGES OF JENKINS **************** //

1). It has lots of plugins available
2). You can write your own plugin
3). You can use community plugin
4). Jenkins is not just a tool. It is a framework i.e you can do whatever you want, all you need is plug-in.
5). We can attach "SLAVES" or we can say "NODES" to jenkins master. It instruct others slaves to do job. If slaves are not available jenkins itself does the job
6). Jenkins also behave as a Cron server replacement i.e can do schedule task
7). It can create labels.



                                   _ _ _ _ _ _ _
                                  |             |<----------------> Maven
                                  |             |      
Developers --------> GitHub ------|   Jenkins   |
                                  |             |<----------------> Selenium Test
                                  |_ _ _ _ _ _ _| 
                                    |       |
                                    |       |
                                    |       |
                                    |       V
                                    |    Quality Assurance
                                    |
                                    |
                                    ------------> Delivery



                                    BUILD
                                      |
                                      |
        ------------------------------|------------------------------
        |            |            |              |                  |
        |-------->---| ----->---- | -------->--- | ---------->----- |    
        |            |            |              |                  |
        v            V            V              V                  V
      Compile       Code          Unit         Integration      Packaging
                   Review       Testing        Testing          (WAR,JAR)
*/
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

Note:- Jenkins Development and Operational part ko integrate krne ke kaam mai aata hai and yhh sabhi work automate krdeta hai like as jese hi developer ne code ko github pr push kiya jenkins use vha se uthayga or uski build bana dega and Maven ke pass bhej dega test krne ke liye



*/
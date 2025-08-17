<?php

/*

// Plan ---> Code ----------> Build -------------->   Test
//   |                                                  |
//   |             DEVOPS LOOP                          |
//   V                                                  V
// Release <-  Monitor <-  Operate  <-  Deploy   <- Release

// Development Team : Developer => Build => Test => QA
// operational Team : Deploy => Maintainance => Monitoring
// Common Part : Relase

Note:- SDLC mai sabse main problem yahi thi ki development team and operational team mai blaming chalti rahti thi ek dusre pr because dono ek dusre pr dependent the and agar operational team ke pass kuch bhi problem aati thi to vo development team ko bolte the and frr development team work krke again testing ke liye dete the to isme bahut time consuming hota tha because sare procedure manual tha and aapas mai kuch bhi online interconnectivity nahi thi that means koi automatiion is mission
=> Lack of co-ordination between Development Team and Operational Team
=> Everything is Manual so it consumes lack of time
=> working on waterfall model that means building banane ke baad hum usme changes nahi krskte that means changes krna possible nahi hota tha

**************** Solution of this Limitation is DevOps **********************

=> DevOps - Aise logo ki team jo dono work krske development ka kaam bhi and Operation ka kaam bhi except developers.

/* ------------------------- Defination of DevOps ----------------------- /

DevOps => Implementing Automation at each and every stage

DevOps Stages :- 

Version Control
      |
      V
Continuous Integration
      |
      V
Continuous Delivery
      |
      V
Continuous Deployment
      |
      V
Continuous Monitoring


1). Version Control :- Maintain different version of the code

Tool Used :- Git

2). Continuous Integration (CI) :- Compile, Validate, Code Review, Unit Testing, Integration testing krte hai

Tool Used :- Jenkins

3). Continuous Delivery (CD) :- Deploying the build app to test servers i.e testing environment mai app ko test krna hai

Tool Used :- Maven

4). Continuous Deployment :- Deploying the test app on the production server for release

Tool Used :- Chef, Ansible, Docker, Kubernetes

5). Continuous Monitoring :- For monitoring purpose we used this kind of tools

Tool Used :- CloudWatch

***** ---------------------- Some Important Definations ----------------------- ****************

=> The term devops is a combination of two words Development and Operations
=> DevOps is a Methodology that allows a single team to manage the entire application development life cycle, that is development , testing, deployment and operations.
=> DevOps is a software development approach throuogh which superior Quality software can we developed quickly and with more Reliability.

OBJECTIVES OF DEVOPS :- Objective is to shorten the system's development life cycle. (i.e phle koi kaam 6 month mai hota tha to ab use 1 month mai krke dena)


WaterFall Methodology or Step by step technology
=> Isme humne ek baar jo kaam krdiya use dobara se change krna challenging tha i.e for example building ban gye hai and banne ke baad ground floor mai changes krna(Limitation:- Employees does not co-operate to each other)
     |
     V
    Agile Methodology (Work at development level. IT is the successor of waterfall technology i.e isme single-single step mai kaam ko krna and client ko update bhi dena jisse agar kuch bhi change krna hoto easily se krske but the problem is that yhh only Developemnt level pr hi work krta hai and the limitation is silos i.e vahi development vs Operational team) Limitation:- Employees does not co-operate to each other
     |
     V
    DevOps (It is the successor of Agile Methodology bcz isme ek hi banda developemnt & operational dono KA KAAM krta hai)


// -----------------------------   WHAT IS AGILE --------------------- //

AGILE METHODOGOLOGY :- Build Short, Build Often (chote-chote parts mai banao baar baar banao)

=> Agile mai hum chote-chote parts mai work krte hai use ko hum sprint kahte hai

                  Sprint-1     Sprint-2           Sprint-3            Sprint-4
Project Start =>  Login        Product Module     Dashboard Page      Cart,Payment        => Project End
                  Logout       Catalogue          My Account          Delivery Status

Note:- Isme bhi same Process hume baar-baar krna padti hai haa bss work priority wise hota hai
Develop
 |
 V
Build
 |
 V
 Test
 |
 V
Deploy 

** Sprint :- Chote-chote steps mai kaam krne ki process ko hi sprint kahte hai.

      1-sprint ki duration 1 week - 3 Week

Scrum :- Overall process ko scrum kahte hai from development to client feedback

Development                   Operations part

    Plan                         Deploy
     |                             |
     V      \               /      V
    Code     \             /     Operate
     |         INTEGRATION         |
     V        /           \        V
    Build    /             \      Monitor
     |
     V
    Test 

Plan  + Code = Continuous Development
Build + Test = Continuous Testing
Deploy + Operate = Continuous Deployment
Operate + Monitor = Continuous Monitoring
*/
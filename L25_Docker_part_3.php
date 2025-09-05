<?php

/*

************** ADVANTAGE DISADVANTAGE & ARCHITECTURE OF DOCKER *****************

Note:- Jab bhi Image run hoti hai to use container kahte hai and jab bhi container stop hojata hai to use image kahte hai
2). Hum changes sirf container mai krskte hai image mai nahi

    _ _ _ _ _ _ RUN _ _ _ _ _ _ _  
   |                             |
   |                             |
   ^                             |
   |                             v
Image---------->----------> Container
   |                             |
   |                             |
   |_ _ _ _ _ _ _ _ _ _ _ _ _ _ _v

Advantages :-

1). No pre-allocation of RAM
2). CI Efficiency => Docker enables you to build a container image and use that same image across every step of the deployment process
3). Less cost
4). It is light in weight
5). It can run on physical Hardware/virtual Hardware or on cloud
6). You can reuse the image i.e (Humare os pr jo bhi docker humne install kiya hai yhh ek baar hi docker hub se softwares download krta hai and uski image apne pass rakh leta hai and next time jab bhi need hoti hai to vo docker hub se nahi leta hai apne pass se chije install krdeta hai i.e it takes times only for the first time)
7). It takes very less times to create a container


Disadvantage :-

1). Container jis environment mai bana hota hai usee kisi dusre system pr run krne ke liye bhi same environment hona compulsory hai other vo run nahi hoga i.e vo bana hai windows OS pr or humne jise share kiya hai uske pass hai linux to vo run nahi hoga
2). Docker is not a good solution for application that requires rich GUI.
3). Difficult to manage large amount of containers
4). Docker does not provide cross-platform compatibility means if an application is designed to run in a docker container on windows, then it can't run on linux or vice-versa
5). Docker is suitable when the development OS and testing OS are same i.e agar developement ke pass ubuntu hai and testing ke pass centOs hai tab bhi run nahi hoga
(IF THE OS IS DIFFERENT, WE SHOULD USE VIRTUAL MACHINE)






*/
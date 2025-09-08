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
5).****** Docker is suitable when the development OS and testing OS are same i.e agar developement ke pass ubuntu hai and testing ke pass centOs hai tab bhi run nahi hoga
(IF THE OS IS DIFFERENT, WE SHOULD USE VIRTUAL MACHINE)

ARCHITECTURE :-




Developer
    |                      Docker Engine                      _ _ _ _ _ _ _ IMAGE _ _ _ _CONTAINER 
    |                   _ _ _ _ _ _ _ _ _                    |                            
    |                  |        OR        |              PULL|
    |                  |      Doemon      |                  |
    V                  |                  |                  |
Create Docker - - - - - - -> IMAGE - - - - - - -> Docker HUB 
   File                |        |         |        (Registry |
(Dependencies &        |_ _ _ _ | _ _ _ _ |                  |
require softwares)              |                        PULL|
                                |                            | - - - -> - - - IMAGE - -> - - CONTAINER
                                V                             
                              Container (LAYER FILE SYSTEM)

EXPLANATION :- Sabse phle Developer ek docker ki file banayga jisme sari dependencies and softwares hai jo hume required hai now ab docker engine se hum sabhi dependencies ko pull krlenge and uski ek image create karenge, Image create krne ke baad sari dependencies container mai aajaygi.
=> Now ab jiske pass container ka enterprise version hai vo chache to dependencies ko Docker hub pr bhi upload krskta hai jisse koi or dusra user use pull krke apni Image or container bana ske

NOTE:- Containers ko Layer File system bhi kaha jaata hai because yhh layers mai kaam krta hai
one by one file ko download krta hai layer wise

DOCKER ECOSYSTEM :- Container banane ke liye bahut si chij ki need hoti hai jise jum docker ecosystem kahte hai (Set of softwares or packages)


       _ _ _ _ _ _ _ _ __ Docker Client (Jaha pr user work krta hai apni command run krta hai)
      |
      |
      |
      |_ _ _ _ _ _ _ _ _ _ Docker Daemon or Server or Docker Engine (image banayga or container ko run karege)
      |
DOCKER ECOSYSTEM
      |
      |_ _ _ _ _ _ _ _ _ _ Docker Hub or Registry (kind of Storage jaha pr sari images rakhi hui hai)
      |
      |
      |_ _ _ _ _ _ _ _ _ _  Docker Images (kind of templates)
      |
      |
      |_ _ _ _ _ _ _ _ _ _ Docker Compose (Multiple docker ko ek sath run kara skte hai)


COMPONENTS OF DOCKER :-

1). DOCKER DAEMON or Engine :- 

=> Runs on the host OS
=> It is responsible for running containers to manages docker services
=> Docker daemon can communicate with other daemons

Note:- Docker engine pr hum kuch bhi direct nahi krskte use docker client ki help se hi krte hai

2). DOCKER CLIENT :- 

=> Docker users can interact with docker daemon through a client (CLI)
=> Docker client uses "COMMANDS" and REst api to communicate with the docker daemon
=> When a client runs any server command on the docker client terminal, the client terminal sends these docker commands to the docker daemon
=> It is possible for docker client to communicate with more than one daemon

3). DOCKER HOST :-

=> Docker host (Physical Hardware) is used to provide an environment to execute and run applications. It contains the docker daemon, Images, containers, networks and storages

4). DOCKER HUB OR REGISTRY :- 

=> Docker registry manges and stores the docker images

There are two types of registries in the docker :-

a). Public Registry :- Public registry is also called as Docker Hub jo sabke liye free hai yaha se koi bhi software easily se download krskte hai

b). Private Registr :- It is used to share images within the enterprise

5). Docker Images :-

=> Docker Images are the read only binary templates used to create docker containers.
                           OR WE CAN SAY
Single file with all dependencies and configuration required to run a program OR Container


************ WAYS TO CREATE AN IMAGES ****************

1). Take image from docker hub
2). Create image from docker file
3). Create image from existing docker containers

6). DOCKER CONTAINERS :-

=> Container holds the entire package that is needed to run the application
=> IN other words we can say that, the image is a template and the container is a COPY of that template
=> Container is like a virtual Machine
=> Images becomes container when they run on docker engine
=> Image and changes nahi krskte hai only containers mai hi krskte hai

*/
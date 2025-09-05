<?php

/*

************** What is Docker Architecture and container ***************

MOTO :- "BUILD DEPLOY & RUN"

=> Docker is an Open-source centralized platform designed to create, deploy and run applications
=> Docker uses container on the host OS to run application. It allows applications to use the same linux kernel as a system on the host computer, rather than creating a whole virtual OS
=> We can install Docker on any OS but Docker engine runs natively on linux distribution (i.e chahe hum docker ko windows mai install kare but chalta vo linux pr hi hai)
=> Docker written in 'GO' Language
=> Docker is a tool that performs OS level Virtualisation, also known as Containerization.
=> Before docker, many users faces the problem that a particular code is running in the developer system but not in the user's system
=> Docker was first release in March 2013. It is developed by soloman Hykes and Sebastian Paul
=> Docker is a set of platform as a service (Paas) that uses OS Level virtualization whereas vmware uses hardware level virtualization

Note:- 
1). Docker containers are lightweight because isme OS ki bahut small files hi hoti hai only that's why we considered it as negligible and say docker container does not contains OS

Q). What is OS Level Virtualization ?
Ans). Hum hardware ke upar Rhel linux install krte hai and uske upar docker engine now ab hume kuch bhi install krna hota hai to yhh docker engine "Docker Hub" se uski ek image nikal kr de deta hai humare pass like it retrieved 5% from the docker hub and remaining 95% it is retrieved from the RHEL OS because both linux version is based on UNIX that's why it is OS Level virtualization.


Ubuntu                         Kali Linux
|                                 |  
|                                 |
Image                            Image
|                                 | 
|___  ____Docker Engine __________|
                |
                |
             RHEL OS
                |
                |
            Hardware






*/
<?php

/*

******** DOCKER FILE COMPONENTS & DIFF COMMANDS *************

// ---------------- HOW TO CREATE IMAGE IN DOCKER --------------- //

=> Login with AWS account and start your EC2 instance access it from putty
=> Now, we have to create container from our own Image

Therefore, Create one container first
=> Docker run -it --name containerName ImageName /bin/bash
=> cd tmp/

Now, create one file inside this tmp directory

=> touch myfile

Now, if you want to see the difference between the base image and changes on it then

=> docker diff containerName

diff container = container banne ke baad jo bhi changes hue hai vo diff command batata hai

o/p :- 

C /root
A /root/.bash_history
C /tmp
A /tmp/myfile

where D => deletion
C = change
A = append or addition

Now, create image of this container (JO BHI HUMNE CONTAINER BANAYA HAI USKI IMAGE BANAYENGE)

=> docker commit containerName ImageName

=> docker images (to check the images is exist or not)

Now, create container from this image

=> docker run -it --name rajcontainer updateImage /bin/bash

Info :- Same image ka use krke new container banayenge but the difference is that isme hum file phle se create ki hui milegi jo image mai thi

******************* Dockerfile **********************

=> Dockerfile is basically a text file it contains some set of instruction
=> Automation of Docker image creation
=> When we create a docker file then the name is same as it is "Dockerfile". The letter D should be capital

***************** Docker components ****************

Note :- All commands must be in capital letters.

FROM => For base image, this command must be on top of the dockerfile
RUN => To execute commands, it will create a layer in image
MAINTAINER => Author/Owner/Description (Jisne bhi docker file banaye hai uska naam)
COPY => Copy files from local system (docker VM), we need to provide source, destination (We can't download file from internet and any remote repo)
ADD => Similar to COPY but, it provides a feature to download files from internet, also we extract file at docker image side
EXPOSE => To expose ports, such as port 8080 for tomcat, port 80 for nginx etc
WORKDIR => To set working directory for a container
CMD => Execute command but during container creation
ENTRYPOINT => Similar to CMD, but has higher priority over CMD, first commands will be executed by ENTRYPOINT only
ENV => Environment Variables
ARG => 

**************** WORKING STEPS TO CREATE A DOCKER FILE ***********************

Note:- Jab bhi hum dockerfile create krte hai to uske andar jo bhi information likhi hui hai uske behalf pr hum apni image create krte hai now ab hum humari docker file information mai kuch bhi changes krte hai to usse image pr kuch bhi changes nahi aayenge bcz image ek baar ban chuki hai, and docker file ka content change krke hum usse multiple images bhi bana skte hai.

STEPS :- 
1). create a file named Dockerfile
2). Add instruction in Dockerfile
3). Build dockerfile to create image
4). Run image to create container

STEP-1 :-
 
vi Dockerfile
FROM ubuntu

STEP-2 :-

RUN echo "Technical guftgu" > /tmp/testfile

STEP-3 :- To Create image out of Dockerfile

docker build -t myimg .

where, -t = tag
       (.) = dot refer current directory

docker ps -a
docker images

STEP-4 :- Now create container from the above image

docker run -it --name mycontainer myimg /bin/bash

=> cat /tmp/testfile


*********** OTHER WAY TO CREATE AN IMAGE FROM DOCKER FILE ***********

vi Dockerfile
FROM ubuntu
WORKDIR /tmp
RUN echo "Subscribe Technical Guftgu " > /tmp/testfile
ENV myname chetansemariya (jab bhi hume docker mai name se search krna hota hai to hum $ dollar sign lagake krskte hai)
COPY testfile1 /tmp
ADD test tar.gz /tmp => yhh apne aap se hi zip file ko extract krleta hai


*/
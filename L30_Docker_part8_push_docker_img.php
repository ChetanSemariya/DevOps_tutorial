<?php

/**** How to push docker image in docker Hub *****

Purpose :- Let suppose humne humare container mai 100 softwares install kre hai and agar yahi same work koi or dusra user bhi krna chahta hai to hum use docker image banake de dete hai jisse sabhi data uske pass bhi aajaye or uski mehnat bhi naa lage jyada initial se work krne mai it saves time and energy

*********** WORKING STEPS **************

1). Go to AWS account --> select Amazon linux
2). Now go to putty --> Login as --> ec2-user
3). sudo su
4). yum update -y
5). yum install docker -y
6). service docker start
7). docker run -it ubuntu /bin/bash
8). Now create some files inside the container and create image of this container
9). docker commit container1 imageName (here container1 is jiss container se image bana rahe hai)
10. Now create account in dockerhub.com
11). Now go to ec2 instance
12). docker login
13). enter your login and password
14). Now give tag to your image

docker tag imageName dockerid/AnyNewImageName

15). docker push dockerid/newimage

Now you can see this image in docker hub account
Now, create one instance in tokyo region and pull image from hub

16). docker pull dockerid/newimage
17). docker run -it --name containerName dockerid/newimage /bin/bash

********** SOME IMPORTANT COMMANDS ***************

1). Stop all running Containers :- docker stop $(docker ps -a -q)

here q = quit
$ = refers to loop mai chije run hogi

2). Delete all stopped containers :-

docker rm $(docker ps -a -q)

3). Delete all images :-

docker rmi -f $(docker images -q)

here -f = forcefully


















*/
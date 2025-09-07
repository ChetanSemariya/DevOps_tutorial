<?php

/*

**************** BASIC COMMANDS IN DOCKER *****************

=> docker images
=> docker search ubuntu (ubuntu se related jitni image hogi aajaygi)
=> docker pull softwareName
=> docker run -it --name containername sofwareName /bin/bash
=> service docker status 
=> docker info
=> service docker start
=> docker start containerName
=> docker attach containerName
=> docker ps -a
=> docker ps
=> docker stop containerName
=> docker rm containerName
=> cat /etc/os-release (To check which ubuntu is running on our os)


1). To see all images present in your local machine

command :- docker images

2). To find out images in Docker Hub

command:- docker search ubuntu (ubuntu se related jitni image hogi aajaygi)

3). To Download image from Dockerhub to local Machine

command:- docker pull softwareName

4). To Give name to container (Container banana bhi hai and use name bhi dena hai)

docker run -it --name containername sofwareName /bin/bash
 
here run = create + start (phle create karega then use start bhi krdega)
-it = i refers to interactive mode and 't' refers to terminal
containername = jo bhi name hume containear ka rakhna hai
softwareName  = Jo software hume docker hub se leke aana hai or we can say image
 /bin/bash    = Bash commands ko run karane ke liye iska use hota hai

5). To check docker service is start or not

command :- service docker status 
           docker info
           service docker start

6). How to start container

Note:- Jab bhi hum container se bahar aate hai to docker apne aap stop hojata hai

command :- docker start containerName

7). How to go inside container

command :- docker attach containerName

8). How to see all containers in docker

command :- docker ps -a (all containers ka process status)

here ps = process status
      a = all

9). How to see only running containers

command :- docker ps

10). How to stop Container

command :- docker stop containerName

Note:- Container ke bahar aake stop krte hai andar rahkr nahi

11). How to delete container

command :- docker rm containerName

*/
<?php

/*

Note:- Kisi bhi container ka koi specific IP nahi hota hai container ke pass ports hote hai jise hum expose krskte hai

0 to 65535 => Logical ports working on transport layer and each port ka work specific hota hai and har work ka bhi ek specific port hota hai.
Http port number = 80 (yhh port dedicated http ke liye hi hota hai jisse internet access htoa hai)

CASE SCENE :- Let say humare container mai koi website hai jo live hai now hum abhi tak humare website ko humare local host machine se hi access krskte the but in case agar koi user bahar hai or vo dekhna chahte hai website ko to vo possible nahi hai qk container ke pass ip nahi hota hai to hum container ko kahi se bhi access nahi krskte.
=> Container ko access krne ka humare pass only ek hi way hota hai with the help of mapping i.e jaha bhi meri local machine hai or we can say jispe mera container hai uske port ko container ke port ke sath mapp krdiya jaaye and uss port ko expose krdiya jaaye to hum humare website ko kahi se bhi access krskte hai with the help of mapping.

******** WORKING STEPS ************

=> Login into AWS account create one linux instance
=> Now go to putty --> login as --> ec2-user
=> sudo su
=> yum update
=> yum install docker -y
=> service docker start
=> docker run -td --name containerName -p 80:80 ubuntu

{where p = port or publish (-p is a powerful command lagane se hum container ko kahi se bhi access krskte hai internet se bhi {globally} but agar hum -p ki jagah pr expose ka use krte hai to hum container ko dusre container se to access krskte hai but bahar se access nahi krskte i.e internet)

 80:80
  |   \
  |    \
  |    container port
  V
host port

}

=> docker ps
=> docker port techserver

o/p -> 80/tcp --> 0.0.0.0/80

=> docker exec -it techserver /bin/bash (container ke andar jaane ke liye like docker attach)
=> apt-get update
=> apt-get install apache2 -y
=> cd /var/www/html
=> echo "Hello world">index.html
=> service apache2 start
=> docker run -td --name myjenkins -p 8080:8080 jenkins

Q1). Difference between docker attach and docker exec ?
Ans => Docker exec creates a new process in the container environment while "docker attach" just connect the standard Input/Output of the main process inside the container to corresponding standard input/output error of current terminal.

OR we can say like "Docker exec is specifically for running new things in a already started container, be it a shell or some other process.

docker exec pid create krti hai => process id &
ppid => parent process id

Q2). What is the difference between expose and publish in a docker ?
Ans => Basically you have three options :-

1). Neither specify expose not -p
2). only specify expose
3). specify expose and -p (agar dono ka use krte hai tab)

["If you {expose} and {-p} a port, the service in the container is accessible from anywhere, even outside docker"]

** If you specify neither expose nor -p, the service in the container will only be accessible from inside the container itself
** If you expose a port, the service in the container is not accessible from outside docker, but from inside other docker containers so this is good for inter-container communication

NOTE:- If you do -p but do not expose docker does an implicit expose.This is because, if a port is open to the public, it is automatically also open to the other docker containers
Hence '-p' includes expose
















*/
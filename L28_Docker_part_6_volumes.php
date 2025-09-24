<?php

/*

Volume :- Ek kind of normal directory hoti hai jise hum as a volume declare krdete hai and iska kaam ek contianer se dusre contianer mai easily se data ko share krna hota hai

Note :- Volume ek common directory jo sabhi containers ke bich mai share hoti hai and agar isme koi kuch bhi changes krte hai to vo changes sabhi conatainers mai dikhai denge
2). container delete krte hai to vol delete nahi hota hai use manually delete krna padta hai
3). We can share volume from contianer to container or host to container

    Docker File
        |
        |
        V
      Image
        |
        |
        V
    Container (contains vol) -------------> New Container (contains same vol)


******* SOME KEY POINTS ABOUT VOLUME ***********

=> Volume is simply a directory inside our container
=> Firstly, we have to declare this directory as a volume and then share volume
=>***** Even if we stop container, still we can access volume
=> Volume will be created in one container
=>****You can declare a directory as a volume only while creating container
=> you can't create volume from existing container
=> you can share one volume across any number of containers
=> Volume will not be included when you update an image

ex- Let say humne kisi container ko share kiya uski image ke form mai and uss image se container banaya now first time volume ka sara data aajayga new container mai but after that agar hum old container mai kuch bhi changes krte hai to voo new container mai reflect nahi honge

** you can mapped volume in two ways (Share kis tarah se krskte hai):-

1). container <---> container
2). Host <---> container

************ Benifits of Volume *****************

1). Decoupling container from storage i.e container ke delete hone se volume delete nahi hoga means data loss nahi hoga
2). Share volume among different containers
3). Attach volume to containers (jisse koi bhi easily se access krske or work krske data ko)
4). On deleting containers volume does not delete


************** CREATING VOLUME FROM DOCKER FILE ****************

STEP-1 :-
1). Create a Dockerfile and write

 { FROM ubuntu          } 
 { VOLUME ["/myvolume"] }

STEP-2 :- Then create image from the dockerfile

docker build -t myimage .

STEP-3 :- Now create a container from the image and run

docker run -it --name container1 myimage /bin/bash

STEP-4 :- Now do ls , you can see myvolume1

STEP-5 :- Now share volume with another container

container1 <---> container2

STEP-6 :- Ek new container banado jisme ubuntu install krdo and sath hi sath old container se volume bhi attach krdoo old container se

docker run -it --name newcontainer
--privileged=true --volume from oldcontainer
ubuntu /bin/bash

STEP-7 :- Now after creating newcontainer, myvolume1 is visible whatever you do in old volume, can see from other volume

touch /myvolume1/samplefile
docker start newcontainer
docker attach newcontainer1
ls/myvolume1 (shown here)

NOTE:- Jab bhi hum volume declare krenge to container ko banate time hi karenge
=> And jab bhi hum kisi volume ko share krna chahte hai to vo bhi banate time hi karenge

*************** TRY TO CREATE VOLUME BY USING COMMAND ***********************

1). docker run -it --name container3 -v /volume2 ubuntu /bin/bash
2). Do ls -> cd /volume2
3). Now create one file container3 file and exit
4). Now create one more container and share volume2

docker run -it --name container4
--privileged=true --volumes-from container3
ubuntu /bin/bash

Now, you are inside container,
do ls, you can see volume2

Now, create one file inside this volume and then check in container3, you can see that file

{
  SUMMARIZE :- Container3 and uske volume ko container4 ke sath share kiya , now ab hum container-4 mai kuch bhi new file banayenge to vo container-3 mai bhi show hogi, and even hum container 3 mai kuch file banayenge to vo file container 4 mai show hogi this is the main purpose of volume
}

************ HOW TO SHARE VOLUME BETWEEN (HOST-CONTAINER) **************

Summary :- We can share our data from home directory to container or from container to our home dir i.e jo bhi humare pass root dir mai hoga vo container mai create hojayga through mapping and jo bhi hum container mai create krte hai vo root directory mai aajayga

Step-1 :- verify files in /home/ec2-user

Step-2 :-

docker run -it --name containerName -v
/home/ec2-user:/containerDir --privileged=true
ubuntu /bin/bash


NOTE:- (-v) volume banane ke liye
=> /home/ec2-user host directory path
=> container directory
=> (:) dono ko jodne ka kaam krta hai host & container ko and mapping krwata hai

STEP-3 :- 

cd /rajput (do ls, you can see all files of host machine)
touch rajputfile (in container)
exit

Now, check in EC2-machine, you can see this file


************* SOME OTHER COMMANDS *****************

=> docker volume ls
=> docker volume create <volumename>
=> docker volume rm <volumeName>
=> docker volume prune (IT REMOVE ALL UNUSED DOCKER VOL)
=> docker volume inspect <volumename> {vol details check krne ke liye}
=> docker container inspect <volumename> {container details check krne ke liye}





*/
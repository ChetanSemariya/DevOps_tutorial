<?php

/*

Software Configuration Management OR Source Code Management :-
 => It is a tool jo humare code ke version ko sambhal kr rakhta hai
 => GitHub ka phle naam Logical Awesome tha
 
What is Version ?
A). Let say my version v1 contains xyz and my upgraded version v1.1 contains xyz, abc so this is my version management, isi version ko manage krne ka kaam source code management ka tha
 
********* Source Code Management has two types **********
 
1). Centralized Version control system (Phle CVCS aate the git ke aane se phle)
2). Distributed Version control system
 
**** Centralized Version control system => Isme ek remote server hota tha jispe sabhi log apna apna kaam krte the and apne-apne work ko uspr commit krte that means save krte the and vaha se vo ek dusre ke code ko dekh bhi skte the access bhi krskte the
 
Note:- Here Repository means storage 0r Folder
 
                          REPOSITORY (Remote Server)
                        /      |        \
                       /       |         \
                      /        |          \
                     /         |           \
                Person-1      Person-2      Person-3
            (Commit frm Us)  (Commit Ind)    (Commit)
 
Limitations OR Drawbacks or CVCS :-

=> It is not locally available meaning you always need to be connected to a network to perform any action.
=> Since everything is centralized, if central server gets failed, you will lose entire data eg:- SVN Tool
=> We are completely dependent on Repository or remote server i.e if remote server fails then all code gone
=> Internet is required
=> It is slow bcz remote server pr work krne mai phle vha se code ko download krna pdata tha and then update so that it takes time


**** Note :- Central Version Control system ke drawbacks ko kam krne ke liye market mai aaya distributed version control system jiska sabse main and popular example hai git

// ------------------- Distributed Version control system ---------------------- //

Ex:- Most popular Git, Mercurial

************ HOW GIT CREATED ****************
Linux apne versioning ke liye "BitKeepers" name ke software ka use krta tha and in return mai bitkeeper valo ko paise deta tha but over the period of time bitkeeper jyada charge krne laga and uski service bhi utni achi nahi thi then Linus Torvalds ne decide kiya ki vo khud ka hi ek VCS Tool Banayenge so he created Git

Q). Who developed Git ?
a). It was developed by Linus Torvalds who developed linux

Q). What is Git and GitHub ?
A). Git is a software or we can say that it is a tool which we can download it from the internet and use it as per our requirement . Git is working on our local system 
=> and Github is a service which provide repository or we can say that it provide storage where we can store our code

************ HOW GIT WORKS ****************

                        REPOSITORY (Remote Server) ---------------->(While gitHub is working on this level)  
                        /         |         \
                PUSH   /   PUSH   |  PUSH    \   PUSH 
                PULL  /    PULL   |  PULL     \  PULL
                     /            |            \
                Local Repo     Local Repo    Local Repo   ----------------
                    |             |              |                       |
                    |             |              |                       |
                    |   UPDATE    |  UPDATE      |     UPDATE            | (Git is working on this level)
                    |   COMMIT    |  COMMIT      |     COMMIT            | 
                    |             |              |                       |
            Working Space     Working Space     Working Space  ----------
            (pc-1)              (pc-2)           (pc-3)

Benifits :-

=> NO internet required, work on local system, fast and reliable
=> Har user ke pass apna ek local pr backup hota hai .git name se jise local repo kahte hai and user jab chahe use repository pr upload krskta hai i.e server pr
=> Agar remote server down bhi hota hai yaa crash bhi hota hai tab bhi humare pass backup rahta hai humare local system pr i.e code ki multiple copies hai humare pass isi ko hum Distributes VCS kahte hai
=> Bhale hi humara VCS distributed ho lekin agar koi bhi user kuch bhi changes krta hai code mai to dusre sabhi user ko pata chal jaata hai because uski ek commit id generate hoti hai

Note:- In distributed version control system every contributor has a local copy or clone of the main repository i.e everyone maintains a local repository of their own which contains all the files & metadata present in Main repository.


*********** What is the difference between CVCS And DVCS *******************

CVCS :- 
=> In cvcs a client need to get local copy of source code from server, do the changes and commit those changes to central source on server.
=> cvcs system are easy to learn and setup
=> Working on Branches is difficult in cvcs (Developer often faces merge conflict)
=> CVCS system do not provide offline access.
=> Cvcs is slower as every command need to communicate with server.
=> If cvcs server is down, developers cannot be able to work.


DVCS :-
=> In dvcs each client can have a local repo as well and have a complete history on it. Client need to push the changes to branch which will then be pushed to server repository
=> Dvcs systems are difficult for beginners, Multiple commands needs to be remembered
=> Working on branches is easier in dvcs. Developer faces less conflict
=> DVCS system are working fine on offline mode as a client copies the entire repository on their local machine
=> DVCS if faster as mostly user deals with local copy without hitting server everytime
=> IF DVCS server is down, developer can work using their local copies.
*/


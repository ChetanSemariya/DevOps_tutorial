<?php

/*

Architecture Pattern of both Windows and Linux :-


****** Windows Architecture :-

Note:- OS hardware ke sath interact krta hai and shell user ke sath

Outward Structure -
    Hardware (core layer) -> OS -> Shell -> User

Inward Structure -
    User (request to) -> Shell -> OS -> Hardware (core layer)

****** Linux Architecture :-

Note:- IN case of Linux, Kernel hardware ke sath interact krta hai and shell user ke sath

Outward Structure -
    Hardware (core layer) -> Kernal -> Shell (respond to) -> User

Inward Structure -
    User (request to) -> Shell -> Kernal -> Hardware (core layer)


***** ------- Basic naming Conventions in Linux ----------********

IN Windows          IN Linux
Folder         =>  Directories
Administrator  =>  Root User
File           =>  File
SoftWare       =>  Package

**************** FILE SYSTEM HEIRARACHY ***************

// ------- For windows ---------- //

By default windows mai humare main file C-drive hoti hai jisme hi sari softwares and configurations rakhe hue hote hai
(c:\) Represent c-drive with backward slash. It is an important directory

Note:- Jab bhi hum windows install krte hai to by default kuch folder and files usme aate hai

             Windows
               |
               V
               c:\
--------------------------------------------------
|                 |            |                 |
V                 V            V                 V
Program files     users       Program(x86)      PerfLogs


// -------------- For Linux ------------ //
Linux mai by-default humare sabhi configuration and files forward-slash (/) directory mai rakhi hui hoti hai isliye ise top-level root directory kahte hai

'/' => Top Level root directory


             Linux
               |
               V
               / (Top level root directory)
--------------------------------------------------
|        |      |        |        |        |
V        V      V        V        V        V
/root  /home  /boot    /etc      /usr     /bin


********** Main Folders and their Use ***********
 
/  => Top Level directory and inside this all other directory are found which are mentioned below
/root => It is home directory for root user
/home => home directory for other users
/boot => It contains bootable files for Linux (files goes to active state from inactive state iske andar POST (Power On Self Test) method kaam krti hai and agar kuch bhi misconfigure hota hai to user ko notify bhi krti hai)
/etc => It contains all configuration files (All hardware informations)
/usr => By default software are installed in this directory
/bin => It contains commands used by all users including root user here /bin means binary
/sbin => here sbin means system binary. IT contains commands used by only root user
/opt  => Optional application software packages (kuch packages jo usr mai defined nahi hote hai vo yaha pr hote hai)
/dev  => Essential device files this include terminal devices, USB or any device attached to the system

*/
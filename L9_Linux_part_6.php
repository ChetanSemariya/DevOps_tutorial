<?php
/*

*************** LINUX COMMANDS ****************

## CREATE USER COMMAND :-

useradd chetan => admin se agar user add krna hoto iss command ka use krskte hai

cat /etc/passwd (vo user create hua hai yaa nahi vo check krne ke liye iss command ka use krte hai)

Note:- Jab bhi hum user create krte hai to uska group automatically create hojata hai but jab bhi hum group create krte hai to uska user create nahi hota hai

## CREATE GROUP COMMAND :-

groupadd technicalinfo (here technicalinfo is our group name)

cat /etc/group (vo group create hua hai yaa nahi vo check krne ke liye iss command ka use krte hai )

## EXISTING GROUP MAI USER ADD KRNA HOTO :-

gpasswd -a => Agar ek single user ko group mai add krna chahte hai

Syntax:- gpasswd -a aman technicalinfo (here aman is the user name jise hum technicalinfo group mai move krna chahte hai)

gpasswd -M => Agar multiple user ko ek sath group mai add krna chahte hai

Syntax:- gpasswd -M aman chetan rahul technicalinfo (here aman, chetan is the user name jise hum technicalinfo group mai move krna chahte hai)

## ****** LINK COMMANDS ********* ##

==> HARDLINK :-

ln => hardlink (used for backups banane ke liye. Hardlink mai jo likhenge vo actual file mai nazar aayga or actual file mai jo likhenge vo hardlink mai nazar aayga i.e automatic update)

Syntax:- ln file1 hardLinkfile1
ex:- hardlink ek file ke tarah hi hota hai jabki softlink ek proper link hota hai

Benifit :- jab bhi hum hardlink create krte hai to hume baar baar file ka backup lene ki jarurat nahi padti hai vo apne aap se backup leta rahta hai otherwiswe agar hum file ko download krke uska backup lete hai to hume usme baar-baar changes krna padte hai
=> Agar main file delete bhi hojati hai to hardlink mai backup data rahega

SYNTAX:- 

ln file2 backupfile (file2 ka backup lenge backupfile ke andar)

==> SOFTLINK :-

SYNTAX:- 

ln -s => softlink (used for shortcut jesa window mai hota hai)
ln -s file1 softfile1 (here file1 is jiska mujhe shortcut create krna hai and softfile1 is jo hum link create krrahe hai uska naam)

*********** FILE COMPRESSION COMMANDS ****************

1).** tar => Tar (Tape Archive) is an archiver used to combine multiple files into one. (work same as zip file in windows)

SYNTAX :- tar -cvf dirx.tar dirx 

here, 
dirx => Jis directory ko mujhe tar banana hai uska naam
dirx.tar => tar file banane ke baad uska naam kya hoga vo as a 3rd paramater mai define krte hai

here {c=create, v=verbose, f=forcefully} (verbose output show krne ke liye use hota hai)
dirx.tar => kis name se tar file banana chahte hai
dirx => kisko tar file banana chahte hai here dirx contains dira/dirb/dirc

2).** gzip => It is an compression tool used to reduce the size of a file

SYNTAX :- gzip dirx.tar (jise compress krna chahte hai uska naam)

o/p => dirx.tar.gz

NOW, If we going to the receiver end then we perform some operation like unzip and for that we run these commands :-

3). gunzip dirx.tar.gz (To unzip the file)

o/p => dirx.tar

Now, if we want to remove tar also in this file then we run this commands

4). tar -xvf dirx.tar (here x if for extract)

o/p => dirx

5).** wget => kisi bhi chij ko donwload krne ke liye iska use kiya jaata hai

ex:- wget <url>
*/
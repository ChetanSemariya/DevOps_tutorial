<?php

/*

********* LINUX COMMANDS AND ITS USE CASES **********

1). HOW TO CREATE A FILE :- There are several way to create a file

NOTE:- All commands are "CASE-SENSITIVE"

a). Cat command :- File create krskte hai

Syntax : cat > file (enter)
         ctrl + d (bahar aane ke liye)
Limitation :- File create krskte hai but save nahi krskte

b). touch => used to create an empty file

ex :- touch file1 file2 file3

// ----- Editor commands bcz yhh file bana bhi skti hai or isme edit bhi krskte hai --------- //

c). vi/vim
d). nano

Note:- Login as ec2-user in Putty

[ec2-user@ip]$ sudo su (here sudo meand superuser do and su means switch user) now after running these command we are in root folder where we can change any of the changes

[root@ip]# here # represent root folder

## Cat Command :-

=> File create krne ke kaam mai aati hai
=> Ek se jyada file ke content ko jodh kr ek file banani hai "Main purpose CONCATINATE KRNA".

The cat command is one of the most universal tools yet all it does is copy standard Input to Standard Output

            |-----------> create file (Creating single file)
            |
            |-----------> Concatenate file (To add more than one file into a single file)
            |
            |
cat---------------------> Copy file (To copy the content of x into y)
            |
            |
            |-----------> tac (To see the content in Bottom to top)


## Important command in cat :-

Note:- Cat commands are not editable commands it is add commands.

=> cat >file1 + enter (used to create a file)
=> ls + enter (to check the list of the directory and file)
=> cat filename + enter (to check the content of that particular file)
=> cat >>file1 (New content ko add krna hai same file mai hi to two times greater than ka sign dena padta hai)
=> cat file1 file2 >all (file1 or file2 ka data ko all file mai daaldo or create bhi krdo)
=> cat file1 >file2 (file1 ke data ko file2 mai daaldo and file2 ke data ko replace krdo)
=> ls -l (to show all the file details in list form)
              
TOUCH COMMAND :-

=> Touch ka main kaam hai timestamp ko update krna i.e yhh ek empty file to create krta hi hai but sath ke sath usme ek timestamp bhi add krdeta hai
=> create multiple empty file
=> change all timestamps of a file
=> Update only access time of file, modify time of file

Q). What is timestamps ?
=> Jab bhi koi file create hogi to uske sath 3 timeformat create hote hai Access time, Change time, Modify time

Access Time -> Last time file kab kholi gye thi

Syntax:- touch -a
Modify Time -> Last time file mai modification kab kari thi
Change Time -> when file metaData was changed (information mai changes hue hai i.e properties mai changes)

How to see all these time with a command ?
=> stat file1

Important command :-

touch file1 + enter (to create an empty file)
touch file1 file2 file3 + enter (ek sath 3 file create krdega)
touch file2 (to change the timestamps of that particular file)
stat file2 (to see the timestamps details)
touch -a file3 (sirf access time mai change krna hoto)
touch -m file3 (modify time mai changes krna hoto)

IMP LIST COMMANDS :-
ls -a (to show the hidden files)
ls -l (to show all the file details in list form)
history


## Vi Editor :-

=> A programmer text editor, it is more powerful than nano but a little bit complex (nano is a user friendly)
=> vi har linux mai chalti hai but nano har linux mai nahi chalti
=> It can be used to edit all kinds of plain text, it is specially useful for editing programs mainly used for unix programms

Steps to work with :-

1). write vi file5
2). press i to write something insert is shown at the bottom
3). press esc bahar aane ke liye
4). press shift + colon then write wq to exit
5). cat file5 to check the updated changes

NOTE:- 'vi' is a standard whereas 'nano' has to be available depending on the linux you use.

:i => likh kr jab enter krte hai tabhi isme kuch likh skte hai
:esc => editor se bahar aane ke liye then press wq
:w  => to save the file
:wq or :x => to save and quit
:q => quit
:q! => force quit, no save

NANO COMMAND :-

=> nano filea + enter (to create a file)
ctrl + x -> yes -> enter (file se bahar aane ke liye)

=> same file mai kuch changes krna hai to 
ctrl + o (for save the changes)
ctrl + x (bahar aane ke liye)



*/
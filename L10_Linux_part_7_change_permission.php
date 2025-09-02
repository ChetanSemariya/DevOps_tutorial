<?php

/*

*********** Access Modes or Permission ***************

d|rwx|r_x|r__ 1 root root 6 July 25 04:10 dirx

Access Modes      File                        Directory
 
r   | 4        To Display the content        To List the content
w   | 2        To Modify                     To create or remove
x   | 1        To execute the file           To enter into directory

where r = read, w = write, x = execute

COMMANDS :-

chmod :- Used to change the access mode of a file
chown :- Change the owner of file or directory
chgrp :- Change the group of file or dir

***** Note:- When i run ls -l command it gives me this kind of response

-rwx r_x r_ _ 1 root root 0 July 01 04:00 file1

here first (-) represent the file or directory
rwx => define the role of the owner or root user
r_x => Isme group ke andar jitne bhi user hai vo  file ko read krskte hai yaa phir executable file hai to use execute krskte hai
r__ => represent others and they have only read permission
1 => symbolic link (i.e kahi or se bhi connected hai kyaa)
root => phle vale root ka mtlb yhh hai ki file ya directory ka owner kon hai
root => yhh user kis group ka member hai uska naam show hoga and group nahi hai to bydefault root hi show hoga
0 => represent file size in bytes

Q). How to change the permission of a file ?

METHOD-1 :- Using chmod

1).
d rwx     rwx    rwx
   |       |      |
   V       V      V
  421     421    421
=  7       7      7

sudo chmod 777 filename

2). -r_x _wx r__  

(-)   => represent file
(r_x) => owner
(r__) => represent others

Permisson = 534

chmod 534 filename/dirname

Here, here 5=owner,3=group,4=others

METHOD-2 :- We can give direct permission instead of chmod

Operators used :- [=,+,-]

u = user/owner
g = group
o = others

If u = rwx i.e user ko read, write and execute ki permission direct dedo
u+w = rw_ (read or write)

q). r_ _ rwx _wx

A). chmod u=r, g=rwx, o=wx file1

2). rwx r_x r__

chmod u-wx, g+w, o=wx file1

//-------------------------- USING CHOWN COMMAND --------------------------- //

chown chetan file (owner change ke liye iska use hota hai)
chgrp devOps file1 + enter

*/
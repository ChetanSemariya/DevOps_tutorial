<?php

/*

// -------- HOW TO CREATE A DIRECTORY (Folder) ------------- //

Command:- 

=> mkdir dir1 (for creating a single folder)
=> mkdir dir2 dir3 dir4 (ek sath multiple directory create krskte hai)
=> mkdir -p dir1/dir2/dir3 (dir1 name ke folder mai dir2 folder and uske andar dir3 folder that mean folder ke andar folder here '/' is for separtion here p is for parent)
=> cd (change directory purpose ek dir se dusre directory mai jaane ke liye)
=> cd.. (cd double dot parent directory mai vapas jaane ke liye)
=> cd dir1/dir2/dir3 (direct kisi directory mai jana hoto)
=> pwd (print working directory i.e cureent directory bata dega)
=> less file55 (file ke end mai chala jayga)
=> head file55 (file ki starting ki 10 line show karega)
=> tail file55 (file ki end mai 10 line show karega)
=> more file55 (ek sath pages batata jaata hai)
=> history

********** HOW TO CREATE A HIDDEN FILE OR DIRECTORY IN LINUX *************

=> Jab bhi koi file create krte hai to bss uske aage ek (.) dot laga dena hai jisse vo file ek hidden file mai convert hojaygi

touch .file1 (create file1 but it is hidden)
mkdir .dir1 (create dir1 but it is hidden)
ls -a (to show all the hidden files and folders)
ls -al (long list of all the files and directories with showing hidden files also)

********** HOW TO COPY A FILE IN LINUX *************

cp file1 file2 (here file1 is the source file and file2 is the destination file i.e file1 ke content ko file2 mai paste krna hai)

********** HOW TO CUT AND PASTE A FILE IN LINUX *************

mv file1 dir1 (here mv stands for move file1 is the source file jise move krna hai and dir1 is the destination)

********** HOW TO RENAME A FILE OR FOLDER IN LINUX *************

mv file1 myFile (here file1 is old name and myFile is new name)


********** HOW TO REMOVE A FILE OR DIRECTORY IN LINUX *************

rmdir => This command is used to remove the specified directory but condition yhh hai ki vo directory khali honi chahiye(empty)

Ex :- rmdir dir1

rmdir -p => Remove both the parents and child directory here -p if for parents

Ex:- rmdir dir1/dir2

rmdir -pv => Removes all the parent and subdirectories along with the verbrose (i.e directory ke sath sath uska content bhi delete hojayga)

*********** FOR FILES *************

NOTE:- Generally files ke liye -r ka use kiya jaata hai

rm -rf => Remove even non-empty file and directory here -f is for forcefully
rm -rp => Remove non-empty directories including parent and subdirectory
rm -r  => Remove empty directories






*/
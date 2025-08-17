<?php

/*

********* HOW TO COMMIT, PUSH & PULL FROM GITHUB *********** 

=> Login into mumbai ec2 instance
=> Create one directory and go inside it
=> git init (jab bhi hum yhh command run krte hai to folder ke andar ka sabhi data humari local repository mai save hojaata hai .git name ke folder mai)
=> touch myfile (put some data)
=> git status (working directory ka status)
=> git add . (here the dot add all the files from working space to staging area)
=> git commit -m "1st commit from mumbai"
=> git status
=> git log (yhh batata hai ki commit kisne kiya hai i.e it gives all the details)
=> git show <comment-id> (Agar mai dekhna chahta hun ki kisi person ne kya code kiya hai)
=> git remote add Origin <central git url>
=> git push -u Origin Master

Authentication Perform :- enter username and password

Note:- Now we check our working directory it is blank bcz all code push to the remote server , now ab koi bhi iss code ko dekh skta hai read krskta hai and pull krskta hai

*/
<?php

/*

******************* LINUX COMMANDS *****************

hostname + enter => jiss machine ka use kr rahe hai uski saari specification dega
ifConfig => return the ip address of the machine and its details also
hostname -i => show only specific ip
cat /etc/os-release => at present system ka version konsa chal raha hai vo batayga

yum [YELLOWDOG UPDATER MODIFIED] => yum ek package hai or we can say that ek software hai jo bydefault system mai installed hota hai iski help se hum kisi bhi software ko install krskte hai use update krskte hai and delete bhi krskte hai.

yum install httpd -y (hyper text transfer protocol daemon) => Yhh command bydefault apache ko install krdeta hai (apache server)
yum remove httpd => remove krne ke liye
yum update httpd => update krne ke liye iska use hota hai

service httpd start (apache ko start krne ke liye)
service httpd status (apache servear ka status check krne ke liye)

# chkconfig httpd on => apache ko automatic start ke liye iss command ka use kiya jaata hai otherwise jab bhi hum kaam band krte hai to server bhi apne aap band hojaata hai and agar mai use baar baar run nahi krna chahta to use automatic on pr set krskte hai
# chkconfig httpd off
# which => software ko check krne ke liye vo hai yaa nahi system mai
# which chef => Agar chef system mai installed hai to use check karega and uska path return karega
# whoami => chck krne ke liye ki konsa user hai root user yaa normal user
# echo 

# yum list installed => Jitne bhi packages installed kare hai unn sabhi ki list aajaygi


hostname => host ki sari details show krdeta hai
hostname -i => it return only ip address of the host
ifconfig   => ip configuration se related sari chije return krdeta hai
cat /etc/os-release => operating system ka version check krne ke liye and uski specific details ke liye iska use hota hai
yum install httpd
yum remove httpd
yum update httpd
service httpd start
service httpd status
chkconfig httpd on
chkconfig httpd off
which
whoami => yhh batata hai ki at present mai konsa user login hai
echo => kisi bhi message ko show krne ke liye iska use hota hai ex:- echo "hello"

Note:- We can also create a file with echo command

CREATE FILE :- 

echo "welcome" > filez (welcome message ko filez command mai daaldo agar bani hue hai to or nahi hai to create krdo)
cat filez

APPEND FILE :-

echo "how are you" >> filez (filez mai hi message ko append krne ke liye iska use hota hai just like cat command)

DELETE FILE :-

echo > filez (content ko remove krne ke liye iska use hota hai)

****************** grep command ***********************

Note:- Kisi particular chiz ko find krne ke liye iska use hota hai just like ctrl+F

grep root /etc/passwd (etc passwd file ke andar jaha jaha bhi root likha hai use find krdo)

************** sort command *************

sort => file ko alphabetically order mai arrange krdega

less => ek hi page pr sari information dikh jaygi document ki
more => page by page document ki information show hogi
head => document ki top 10 line show hogi
head => document ki last 10 line show hogi

************ tree commands ****************

tree => sare linux ke folder ko tree wise structure mai show krdega so that we can show clearly konsi directory ke andar kya hai


*/
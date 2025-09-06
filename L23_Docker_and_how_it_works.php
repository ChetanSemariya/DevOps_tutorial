<?php

/*

************** WHAT IS DOCKER ****************

CONTAINER :- Container is like a virtual machine
DOCKER :- Docker is a tool which create the virtual machine or we can say Docker is a advance version of virtualization (Docker is an deployment tool)

Problem :- Jab bhi development team kuch app banati hai or use testing team ke sath share krti hai to bahut possibility hai ki vo app development team ke pass run ho but testing team ke pass run nahi ho because versioning issue aaskte hai let say development team app ko 2.2 pr check kr rahi hai and testing team 1.8 pr to kahi na kahi problem create hogi. Iss problem se bachne ke liye hum humare testing team ko development team ka sara environment provide kara skte hai with the help of sharing our operating system but the sharing of operating system is not possible and not easy anyway, so we can create virtualization or workstation. Now ab hum workstation create krke kisi bhi operating system pr use as an image kisi ko bhi share krskte hai and testing team same virtual machine ko apne yaha install krke sari chije check bhi krskti hai

## vmware workstation (HYPERVISOR) => Jab bhi hum humare system pr multiple operating system chalana chahte hai to uske liye hume workstation install krna compulsory hai otherwise aisa possible nahi hai

with the help of workstation we can use multiple OS at the same system => LINUX, UBUNTU, WINDOWS SERVER

How is it possible :- Because it creates a virtual machine or we can say it create virtualization

Note:- vmware workstation hum humare operating system pr hi install krte hai

*************** WHY WE USE DOCKER ***************

PROBLEM :- Let say humare local system pr 16 GB ram hai and 4 TB Hard-disk now ab hum ispe hypervisor connect krke only 3 virtual machine bana skte hai 
vm-1 => space 2 GB ram vmware system ki ram ka hi use krta hai
vm-2 => space 8 GB ram
vm-3 => space 6 GB ram but I need 8gb


vm-1      vm-2       vm-3 (virtual machines created by hypervisor har vm ke pass apne OS hona compulsory hai)
^           ^         ^
|           |         |
|2gb        |8gb      | 8gb
|           |         |
------- Hypervisor ---- (Operating system ke upar hypervisor ka use kiya gaya hai)
            |
            |
            |
        Hardware

now, ab yhh humare majboori hai ki hum chah kr bhi 8gb ki vmware nahi bana skte or naa hi ek 4th vmware bana skte hai so, isi problem ke solution ke liye Docker ka use kiya jaata hai


DOCKER ARCHITECTURE :-

containers    containers    container
    ^             ^           ^
    |             |           |
    |             |           |
    Docker Engine (Like hypervisor)
                ^
                |
                |
        Operating system
                ^
                |
                |
        Physical Hardware (128 GB)


Benifits :- Docker virtual machine banane ke liye containers ka use krta hai vmware ka nahi
=> Kisi bhi particular container ki ram fix nahi hoti hai yhh apne need ke according operating system se space le leta hai runtime pr isme other vmware ki tarah space allocation fix nahi hota hai
=> **** kisi bhi particular container ke pass apna khud ka os nahi hota hai just like vmware but softwares hote hai jo humare liye jaruri hote hai
=> Container docker Hub se sari dependencies uthata hai
=> With the help of Container hum bahut sare resources baacha skte hai waste hone se
=> Har container ki apni ek image hoti hai jise hum testing team ke sath share krskte hai and vo bhi same configuration ke sath chijo ko run krskte hai

NOTE:- Docker hume server banake deta hai just like in AWS we create ec2-instance, ubuntu, Reddis and uske baad configuration krne le liye hum chef ka use krskte hai
*/
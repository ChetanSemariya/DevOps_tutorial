<?php

/*

Note :- Firmware hardware ke upar install kiya jata hai.
Software operating system ke upar install kiya jata hai.

HYPERVISOR :- It is a piece of software or firmware that creates and run virtual machine.A hypervisor is sometimes also called a virtual machine manager (VMM)

Types of Hypervisor :-

1). Type-1 Hypervisor or Bare Metal or Native Hypervisor

uses by  :- Enterprise level company

2). Type-2 Hypervisor or Hosted Hypervisor

purpose :- Learning, testing

************************ TYPE-1 HYPERVISOR (Actual Hypervisor) Or FIRMWARE ***************************

VM ARCHITECTURE :-

Windows       ubuntu         Mac
|              |               |
|              |               |
OS             OS             OS   ------------> Guest Operating System installed over virtual machine
|              |               |
|              |               |
VM            VM              VM   ------------> GUEST
|              |               |
|              |               |
|______________|_______________| 
            Hypervisor
                | 
                |
                |
            HardWare (64GB,8CPU,2TB) (HOST)

=> Type-1 Hypervisor also called Bare Metal Hypervisor. It runs directly on the system hardware. A guest OS runs on another level above the Hypervisor
=> Vmware ESXi is a Type-1 Hypervisor that runs on the host server Hardware without an underlying OS
=> Type-1 Hypervisor act as their own Operating system
=> Esxi provides a Virtualization layer that abstracts the CPU, Storage, memory and networking resources of the physical host into multiple virtual machine

********************* TYPE-2 HYPERVISOR (HOSTED TYPE OR SOFTWARE TYPE HYPERVISOR) ******************

q). Why it is called software type hypervisor ?
a). Operating system ke upar install kiya jata hai that's why.

=> Hypervisor that runs within a conventional OS environment and the host OS provides
=> Example of Type-2 hypervisor are vmware workstation, oracle virtualBox and microsoft virtual PC.
=> It does not direct access to the host hardware and resources

Disadvantage :- 

1). Less secure because it does not have direct access to the resources
2). If Operating system correct then all virtual machines are also corrupt.

******************* Difference between Type-1 and Type-2 Hypervisor ***********************

Tyep-1 Hypervisor :-

aka => Bare metal and Native hypervisor
virtualization => Hardware level Virtualization
Operation => Guest OS and application run on the hypervisor
Scalability => Better scability
System Independence => Has direct access to hardware along with virtual machine it host
Performance => Higher performanace as there is not middle layer
Security =>  More secure

EG:- vmware ESXi, hyper-v, xensever

Tyep-2 Hypervisor :-

aka => Hosted
virtualization => OS level Virtualization
Operation => Run as an application run on the host OS
Scalability => Not so much because of its Resilience on the underlying OS
System Independence => Are not allowed to directly access the host hardware and its resources
Performance => Comparetively has reduce performance rate as it runs with extra overhead
Security =>  Less secure, as many problem in the base OS affect the entire system

eg :- vmware workstation
*/
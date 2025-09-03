<?php

/*

1). Find the third highest salary from the Employee table ? 

select * from employeeinfo orderBy Salary DESC LIMIT 2,1 (first parameter yhh batata hai ki kis row ke baad se data fetch krna hai and second yhh batata hai ki kitna data fetch krna hai)

LIMIT 1,1 => select one row after first row i.e 2nd highest
LIMIT 3,1 => select one row after third row i.e 4th highest
LIMIT 4,1 => select one row after fourth row i.e 5th highest

2). Write a query to find the Nth highest salary from the table without using TOP/Limit keyword

SELECT salary
FROM employeeinfo e1
WHERE N-1 = 
(SELECT COUNT(DISTINCT salary)
FROM employeeinfo e2
WHERE e2.salary > e1.salary
);

E1 table 
-------------------
empid       Salary
1           300000
2           75000
3           60000
4           500000
5           100000
6           80000
2           75000

E2 table 
-------------------
empid       Salary
1           300000
2           75000
3           60000
4           500000
5           100000
6           80000
2           75000

Q3). Write a SQL query to find duplicate rows in a table

SELECT *, COUNT(empid)
FROM employeeinfo
GROUP BY empid
HAVING COUNT(empid) >1;

Q4). Write a query to calculate the even and odd records from a table

For Even :-

SELECT * FROM employeeInfo
WHERE MOD(empID, 2) =0;

For ODD :-

SELECT * FROM employeeInfo
WHERE MOD(empID, 2) =1;

Q5). Write a query to display the first and last record from the employeeInfo table ?

For First record

SELECT * FROM employeeInfo
WHERE empid = (SELECT MIN(empid)
FROM employeeInfo);

For Last record

SELECT * FROM employeeInfo
WHERE empid = (SELECT Max(empid)
FROM employeeInfo);

Q6). How do you copy all rows of a table using SQL query ?

## Schema and data copy krne ke liye and new table bhi create krdega :-

QUERY => CREATE TABLE EmpDetail AS SELECT * FROM EmployeeInfo

## Only specific column hi retrieved krke copy karega

CREATE TABLE EmpSalary As SELECT EmpId, Salary form EmployeeInfo

## Only table create karega data copy nahi karega

CREATE TABLE EmpDetail AS
SELECT * FROM EmployeeInfo
WHERE 3=4 (which means it retuns false and it does not copy the data)

Q7). Write a query to retireve the list of employees working in the same department.

SELECT DISTINCT E.EmpId, E.EmpFname, E.Department
FROM EmployeeInfo E, EmployeeInfo E1
WHERE E.Department = E1.Department
AND E.EmpID != E1.EmpID;

Q8). Write a query to retrieve the last 3 records from the EmployeeInfo table

SELECT * FROM (SELECT * FROM employeeInfo
ORDER BY empId DESC LIMIT 3)
temp ORDER BY empID ASC;

Q9). Write a query to fetch details of employees whose EmpLname ends with an alphabet 'A' and contains five alphabets.

SELECT * FROM employeeInfo WHERE EmpLname LIKE '____a';
*/
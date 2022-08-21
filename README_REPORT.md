                                                                          [Report Title]
                                                    College Management System of Cumilla Victor ia Govt. College 

                                                                            Submitted by
                                                                       [Name: RAHYAN SHAMSI]
                                                                            [ID: 1111004]
                                                                       [Name: AL MAHMUD SARKER]
                                                                            [ID: 1111009]
                                                                       [Name: MD. YEAKUB ALI]
                                                                            [ID: 1111021]
                                                                         [Name: KOUSHIK ROY]
                                                                            [ID: 1111022]

                                                                       Under the Supervision of 
                                                                            MD. MAMUN AHMED
                                                                          Assistant Professor 
                                                             Department of Computer Science and Engineering 
                                                   Bangladesh Army International University of Science and Technology 


                                                          Bachelor of Science in Computer Science and Engineering 
                                                  Bangladesh Army International University of Science and Technology 
                                                                       Level-3, Term-1. 5th Semester 



                                                                               Dedication 
                            We dedicate this dissertation to our beloved parents, who taught us to achieve the goal with sincerity, honesty & hardworking. 
                                                          They also provide us the resources to complete this task. 
                                     We also dedicate this dissertation to our beloved teachers who show us the way to complete the project.


                                                                             Acknowledgements

                                                            In the name of GOD, the most kind and most merciful.
First of all, we are glad to GOD, who confer us with health, abilities and guidance to complete our project in a successful manner and without HIS help we were unable to perform this task. 
We are highly thankful to Md. Mamun Ahmed sir for helping us to do this project and gave us complete guidance. We are also thankful to our friends and senior brothers who provided us assistance to complete this project. 



Executive Summary 
We are developing a website for college with some outstanding highlights. Website name is Collage Management System. 
In this website we provide two dashboard and these are Admin & Student. In the backend we store teacher, employee and guard information. 
But in the frontend, we only show students information. In this website we gave fully access to admin. Admin can add, delete, update and view data a from the database.
Student can only view their person al information. Here, admin can change the record modify and play everything with the data but 
student can only view their record not change anything in the record. 


Chapter 1:  Introduction 
Management system is very important and essential part of education institute. College Management System is the Educational Management System. The project defines all management of College System. College management system means it controls all the management tasks and functions. At the time to run an educational institute management is very important. Education is the basic and the main responsibility of any institute. It performs all functions which is require to and Educational Institute. It helps the admin to keep the record, manage and control and the entire data of the college. It helps the admin to access the data easily. Admin can view and change all the records. The main purpose of this project is to illustrate the requirements of the project College Management System and is intended to help any organization to maintain personal data.
It is comprehensive project developed from the ground up to full fill the needs of colleges as they guide their students. This reduce data error and ensures that the information is always up-to-date throughout the college. 
This project is useful for easy user interface. The system utilizes the powerful database management, data retrieval and data manipulation. This project provides more ease for managing the data than manually maintaining in the documents.
The project is useful for saving valuable time and reduces the huge paper work. To successfully develop this system, a number of tools was studied and used. These includes SQL, MySQL, HTML, PHP, CSS and BOOTSTRAP. The tools and technologies used are discussed into detail in this document.

1.1.	Theoretical Background
Today in colleges student details are entered manually. The student details in separate records are tedious task. Referring to all those records and updating is needed. There is a chance for more manual errors. 
Problem in existing system: 
•	It was limited to a single system.
•	It was less user friendly                                                                                       
•	It requires more number of employees need to work.
•	It was time consuming 
•	The present system was very less secure 
•	It is unable ton generate different kinds of report. 

1.2.	Proposed Solution 
As we know the problem of old system to keep the record there were many problems that’s we create College Management System Website. It keeps all records of the college in the database. The development of the new system contains the following activities, which try to automate the entire process keeping in view of the database integration approach. 
•	User friendliness is provided in the applications with various control.
•	The system makes the overall project management much easier and flexible.
•	It can be accessed over internet 
•	This is no risk of data management of any level while the project development is under process. 

1.3.	Objectives
•	We can add, modify, search and delete data about teachers, students and other staff of the college.
•	It contains teacher and other staff personal information. 
•	It saves the data of teaches and other staff’s salary.
•	It contains the personal information.
•	It manages the fee of students.
•	It manages exam management system.
•	It contains more information about the college.
•	Student can view rules and regulations for college in details. 
                                                                                                                        


1.4.	Project Plan 
College Management System provide us the facility electronic media content. Employee and students now they can check their detail information on their electronic device like phone, pc, tablet & laptops. It saves the time of admin, student, teacher and other staff. It is also cost effective if we compare this system to our current systems of the college. 


1.4.1.	 Gantt Chart 
Project Schedule 	April 2022	May 2022	Jun 2022	July 2022	August 2022	Summary
Task Name						Hours
Requirements	3	3	2	1							9
Planning			9	10	8						27
Research				12	13						25
Design						10	8	8	10		36
Code & Unit Test 								10	12		24
Implementation									13	11	24
Follow Up									8	6	14
Demonstrate									6	8	14
Report Writing								10	10	10	30
Hours 	3	3	11	23	21	10	8	18	59	35	203

2.1.	Planning 
Management System is a life line of an organization. A good management system can run an organization smoothly. All the organizations whether it is small or large needs a management system. If the management system of an organization is developed scientifically and logically from the top to bottom management body can take write decision at right time. The right decision at right time makes the organization to reach to its goal successfully. All the things were in our mind. So, we decided to develop a sample management system. A college management system has a wide area which includes teachers, students, employees, guardians and also account system. So, we decided to make our project with a college management system. The Cumilla Victoria Govt. College is a large and renowned institution in this middle-east of Bangladesh. So, we take Cumilla Victoria College as a sample to develop our college management system.

	2.2.	Entity and Attributes Name: 
•	Admin (Admin_ID, User_Name, User_Password, Email, Phone_No)
•	College (College_ID, College_Name, Location, Employee_ID, Student_ID, Teacher_ID, Guard_ID, Admin_ID)
•	Student (Student_ID, Student_Name, Class, Section, Group, Course_Name, DOB, Lab_Name)
•	Teacher (Teacher_ID, Teacher_Name, Title, Salary, Group, Course_Name)
•	Employee (Employee_ID, Teacher_ID, Guard_ID, Employee_Name, Category, Salary)
•	Guard (Guard_ID, Guard_Name, Title, Salary)
•	Group (Group_Name, Student_ID, Teacher_ID, Exam_Number)
•	Course (Course_Name, Student_ID, Teacher_ID)
•	Section (Section_Name, Student_ID, Classroom_No)
•	Exam (Exam_Number, Exam_Category, Student_ID, Group_Name)
•	Payment (Transaction_ID, Student_ID, Amount)
•	Result (Result_Category, Student_ID, GPA)                                               
•	Transport (Transport_Number, Student_ID, Teacher_ID, Employee_ID, Payment)
•	Hostel (Hostel_Number, Hostel_Name, Location, Student_ID, Payment)
•	Quarter (Quarter_Number, Quarter_Name, Location, Teacher_ID)
•	Lab (lab_Name, Teacher_ID, Student_ID, Classroom_No)
•	Classroom (Classroom_No, Student_ID, Teacher_ID, Section_Name)
•	School (EIIN_No, School_Name, Location, Admin_ID)
•	Development_Work (Tender_No, Dev_Name, Dev_Budget, Teacher_ID)

2.3.	ER Diagram & Schema Design 
2.3.1	ER Diagram Design 
ERD stands for entity relationship diagram. People also call these types of diagrams ER diagrams and Entity Relationship Models. An ERD visualizes the relationships between entities like people, things, or concepts in a database. An ERD will also often visualize the attributes of these entities. 
To design an ER Diagram, we need Entity and Attributes. Entity means Row name of a table and attributes means column name of a table. Different entities and attributes notation is given below;

To design ER diagram properly we also need cardinality constraint. Cardinality constraint defines the maximum number of relationship instances in which an entity can participate. There are four types of cardinality constraint. An example of cardinality constraint is given below; 
 
To design our ER diagram, we use all the cardinality constraint. We also use both normal & weak entity, multivalued and key attribute, both partial and total participation. 

	2.3.2	 Schema Design 
Database schemas are the blueprints that help developers visualize how databases should be built. They provide a reference point that indicates what fields of information the project contains. 
Data administrators also use schemas to ensure that the database is fully designed before implementation. This saves valuable time and money, because once a database is implemented, making changes can be difficult. The schema ensures that all the stakeholders have fully considered every aspect of the project, which reduces the need for change.	
In our project we connect two tables using Primary Key and Foreign Key. A primary key is used to ensure data in the specific column is unique. It is a column cannot have NULL values. A foreign key is a column or group of columns in a relational database table that provides a link between data in two tables. Using these two important keys we connected tables and design our schema. 

	2.4	Data Collection
According to our entities and attributes which is discussed on we need some raw data to insert in our database. Because without data our project will not be fulfilled. So, to collect some raw data we communicate Cumilla Victoria Govt. College (CVCG) administration as per instructions of our supervisor teacher Md. Mamun Ahmed. We request college administration to give some data for our project. Collage administration accepted our request. They properly help us to collect all the necessary data.  
Chapter 3
Software & Hardware Requirement Specifications


3.1	Product Function 
Functions of Website: 
Account: User can make his/her account on the website.
Login: After creating account user can log into the account.
Update: Admin can update any information.
View Detail: Anyone with this link can view details.
View Result: Student can view his or her result.
Personal Information: Anyone in the college can view any details. 

3.2	Required Software 
To complete our project, we required some software. Xampp, VS Code & Chrome web browser.
Xampp: The most obvious characteristic of XAMPP is the ease at which a WAMP webserver stack can be deployed and instantiated. 
Officially, XAMPP's designers intended it for use only as a development tool, to allow website designers and programmers to test their work on their own computers without any access to the Internet. To make this as easy as possible, many important security features are disabled by default. XAMPP has the ability to serve web pages on the World Wide Web. A special tool is provided to password-protect the most important parts of the package.
XAMPP also provides support for creating and manipulating databases in SQL and MySQL.
Vs Code: Visual Studio Code is a streamlined code editor with support for development operations like debugging, task running, and version control. It aims to provide just the tools a developer needs for a quick code-build-debug cycle and leaves more complex workflows to fuller featured IDEs, such as Visual Studio IDE.                                             Page-15
Chrome:  Chrome is designed to be the fastest web browser. With one click, it loads web pages, multiple tabs, and applications with lightning speed. Chrome is fitted with V8, a faster and more powerful JavaScript engine. Chrome also loads web pages faster by using the Web Kit open-source rendering engine.

3.3	User Interface 
Screen Name	Description 
Login Page 	At this stage user will enter his/her user’s name and password. If the user’s name or password found incorrect then the error will occur.
Insert page	After login user will find home page/student dashboard. Where student find many link to access different webpages like attendance, results, rules and regulation
View page	Student can view his/her required program details, prospectus, result, lab information.
Administrator user	Admin can login this page by using his email id and password. Admin can delete update create read and modified user and change password.
Submit Data	Data can be view select and delete at any time.

3.4	Hardware Interface:
Prerequisite equipment requirement for using website will be as follows:
•	Processor
•	Ram (156 MB or Above)
•	Hard disk (25 GB or Above)
•	Basic system with fundamental need of a personal computer or any device run in the website 

3.5	Connection Interface:
The connection will be established between the database and the frontend part of the website by PHP language using a connection file along with the html CSS, JavaScript, Bootstrap. 

Chapter 4
Application Connectivity 

4.1	FRONTEND Design Language 
HTML5
HTML is at the core of every web page, regardless the complexity of a site or number of technologies involved. It's an essential skill for any web professional. It's the starting point for anyone learning how to create content for the web. And, luckily for us, it's surprisingly easy to learn.
CSS
CSS stands for Cascading Style Sheets. This programming language dictates how the HTML elements of a website should actually appear on the frontend of the page.
Bootstrap4 Framework 
Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains HTML, CSS and JavaScript-based design templates for typography, forms, buttons, navigation, and other interface components.
We use HTML for giving structure of website & CSS for design that structure. Where user can easily navigate any point of the website. For designing our website, we use Bootstrap framework. 

4.2	 BACKEND Design Language 
PHP
PHP (Hypertext Pre-processor) is known as a general-purpose scripting language that can be used to develop dynamic and interactive websites. It was among the first server-side languages that could be embedded into HTML, making it easier to add functionality to web pages without needing to call external files for data.
We use PHP language in our project to connect FRONTEND and database connection. 
                                                                                                                                  

4.3	MariaDB
MariaDB is a community-developed, commercially supported fork of the MySQL relational database management system, intended to remain free and open-source software under the GNU General Public License.
4.3.1	 SQL
SQL is a standard language for storing, manipulating and retrieving data in databases. SQL is a domain-specific language used in programming and designed for managing data held in a relational database management system, or for stream processing in a relational data stream management system.	
4.3.2	 SQL
SQL is a standard language for storing, manipulating and retrieving data in databases. SQL is a domain-specific language used in programming and designed for managing data held in a relational database management system, or for stream processing in a relational data stream management system.	
4.2.4	 My SQL
MySQL is an Oracle-backed open source relational database management system (RDBMS) based on Structured Query Language. MySQL runs on virtually all platforms  Windows. Although it can be used in a wide range of applications, MySQL is most often associated with web applications and online publishing.
 Apache as the web server, MySQL as the relational database management system and PHP as the object-oriented scripting language. The core of MySQL is MySQL server, which handles all of the database instructions or commands. MySQL server is available as a separate program for use in a client-server networked environment and as a library that can be embedded into separate applications.

4.3	Screenshot of Backend and frontend pages:
Html and CSS Code Demo:
  

                                                                                                                                   

Connection Code Demo by using PHP:
 
SQL Queries Code Demo:
 

                                                                                                                                      

CONCLUSION
 The project entitled as College Management System is the system that deals with the issues related to a particular institution.
	This project is successfully implemented with all the features mentioned in system requirements specification.
	The application provides appropriate information to users according to the chosen service.
	The project is designed keeping in view the day-to-day problems faced by a college.
	Deployment of our application will certainly help the college to reduce unnecessary wastage of time in personally going to each department for some information.

Awareness and right information about any college is essential for both the development of student as well as faculty. So, this serves the right purpose in achieving the desired requirements of both the communities.




REFERENCES
Books:
1.	Internet & World Wide Web: How to Program Deitel, PJ Deitel.
2.	Web Development with Java Server Pages BY Duane K.Fields and Mark A.Kolb.
3.	The Complete Reference Java2 HerbertSchildt.
4.	Core Servlets and Java Server Pages By Marty Hall.
5.	Apache Jakarta-Tomcat by James Goodwill.
6.	Practical PostgreSQL by John Worsley, Joshua Drake

Web Site: 
1.	https://app.diagrams.net/

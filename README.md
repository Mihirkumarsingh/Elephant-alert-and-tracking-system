# Elephant-alert-and-tracking-system
Human-elephant conflict (HEC) and its consequences are a burning issue in corridors of northern Chhattisgarh. To find an effective solution which deals with human-elephant conflict is one of the most challenging tasks for elephant management. Elephants harm the local surroundings by destroying crops, killing people and livestock, demolishing houses and grain supplies. Thus creating havoc and incurring a significant amount of financial damage to the system. So we are motivated to design a system that can act as an early alert system.

The main idea is to protect the lives of people lost as well as the damage sustained to the crops and also preserve the elephant habitat .The system allows to create an alert as well track live elephant movement along with storage of the same for future analysis and prediction. Further in the upcoming phase, image classification and sound detection of elephants will be used for creating elephant infiltration alerts.

# **Solution**
We made a web and mobile based application to alert the people in nearby region and track the movement of various herds of elephant on map, thus preventing the loss of human, environment as well as the elephants themselves. Also, the tracking results are stored which are open to further analysis in order to predict future Human-Elephant Conflicts and take steps in order to resolve the same.

![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/working_of_software.JPG)

To alert the people in the given range we need the find the range of latitude and longitude because we had the database which contains the latitude and longitude of every individual living in the city.
# **To find destination point given a start point and distance and bearing from it (algorithm)**
Taking an initially known point as the starting point, the direction (bearing) and the distance, a destination point is found out.

Finding the destination point along great-circle given the distance and bearing from a start point.
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/bearing_angle.JPG)
# **Formula**
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/formula.JPG)

Where y is latitude, x is longitude, θ is the bearing (clockwise from north), angular distance is d/r; d being the distance travelled, r the earth’s radius.

Thus four points are found at the given distance from the central point.

Now, next formula is the people (no of points ) within the four point distance which is found out using BETWEEN SQL query.

# **Working**
Just Download the files and make changes in connect.php and newalertsubmit.php 

***Admin login Portal***
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/Capture1.JPG)


***Message validation and searching employee in nearby region***
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/Capture2.JPG)


***Employee in nearby region***
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/Capture3.JPG)


***Alert Module***
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/Capture4.JPG)


***Generating Staff Credentials***
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/Capture5.JPG)


***Tracking Information***
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/Capture6.JPG)


***User Login Portal***
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/Capture7.JPG)


***Elephant Tracking System***
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/Capture8.JPG)


***Tracking Ending Module***
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/Capture9.JPG)


***Path followed by elephant***
![Screenshot](https://github.com/Mihirkumarsingh/Elephant-alert-and-tracking-system/blob/master/Capture10.JPG)


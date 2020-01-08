<?php 	
require'header.php';
session_start();
?>
<nav>
		<fieldset>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="eventCalender.php">Event Calender</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			<li><a href="contact.php">Contact us</a></li>
			<li><a>Login</a>
				<ul>
					<li><a href="admin/adminlogin.php">Admin</a></li>
					<li><a href="student/studentLogin.php">Student</a></li>
					<li><a href="lecturer/lecturerLogin.php">Lecturer</a></li>
					<li><a href="courseleader/courseleader_Login.php">Course Leader</a></li>
					<!-- <li><a href="user_signup.php">Sign Up</a></li> -->
				</ul>
			</li>
			
		</ul>
		</fieldset>
	</nav>
<main class="home">			
		<div class="main">
<pre>
	<table>

<caption>First Year - Example Assignment Schedule</caption>			
<tr>
	<th>Week</th>	
		<th>MODULE</th>
		<th>ASSIGNMENT/EVENT</th>
		<th>Week Com.</th>
</tr>


<tr><td>0</td>	<td></td>	<td>Welcome Week (1st Year and direct entry 2nd & 3rd Year).</td>	<td>21/09/2015</td></tr>
<tr><td>1</td>	<td></td> <td></td>		<td>28/09/2015</td></tr>
<tr><td>2</td> <td></td> <td></td>			<td>05/10/2015</td></tr>
<tr><td>3</td>	<td></td> <td></td>		<td>12/10/2015</td></tr>
<tr><td>4</td>	<td></td> <td></td>		<td>19/10/2015</td></tr>
<tr><td>5</td>	<td></td> <td></td>		<td>26/10/2015</td></tr>
<tr><td>6</td>	<td></td> <td></td>		<td>02/11/2015</td></tr>
<tr><td>7</td>	<td></td> <td></td>		<td>09/11/2015</td></tr>
<tr><td>8</td>	<td>C1002	<td>Systems Architecture</td>	<td>16/11/2015</td></tr>
<tr><td>9</td>	<td></td> <td></td>		<td>23/11/2015</td></tr>
<tr><td>10</td>	<td></td> <td></td>		<td>30/11/2015</td></tr>
<tr><td>11</td>	<td>C1006</td>	<td>Distributed Systems</td>	<td>07/12/2015</td></tr>
<tr>		<td>Autumn Break</td>	<td>14/12/2015</td></tr>
<tr>		<td>Autumn Break</td>	<td>21/12/2015</td></tr>
<tr>		<td>Autumn Break</td>	<td>28/12/2015</td></tr>
<tr><td>12</td>	<td></td> <td></td>		<td>04/01/2016</td></tr>
<tr><td>13</td>	<td></td> <td></td>		<td>11/01/2016</td></tr>
<tr><td>14</td>	<td>C1003</td>	<td>Problems Solving</td>	<td>18/01/2016</td></tr>
<tr><td>15</td>	<td></td> <td></td>		<td>25/01/2016</td></tr>
<tr><td>16</td>	<td></td> <td></td>		<td>01/02/2016</td></tr>
<tr><td>17</td>	<td>C1004</td>	<td>Software Modelling 1</td>	<td>08/02/2016</td></tr>
<tr><td>18</td>	<td>C1005</td>	<td>Software Implementation 1</td>	<td>15/02/2016</td></tr>
<tr><td>19</td>	<td>C1001</td>	<td>Computing Mathematics</td>	<td>22/02/2016</td></tr>
<tr><td>20</td>	<td></td> <td></td>		<td>29/02/2016</td></tr>
<tr><td>21</td>	<td></td> <td></td>		<td>07/03/2016</td></tr>
		<tr><td>Spring Break</td>	<td>14/03/2016</td></tr>
		<tr><td>Spring Break</td>	<td>21/03/2016</td></tr>
		<tr><td>Spring Break</td>	<td>28/03/2016</td></tr>
<tr><td>22</td>		<td></td> <td></td>	<td>04/04/2016</td></tr>
<tr><td>23</td>	<td>C1005</td>	<td>Software Implementation 1</td>	<td>11/04/2016</td></tr>
<tr><td>24</td>	<td>C1006</td>	<td>Distributed Systems</td>	<td>18/04/2016</td></tr>
<tr><td>25</td>		<td>End of all modules</td>	<td>25/04/2016</td></tr>
<tr><td>26</td>		<td>Revision Leave</td>	<td>02/05/2016</td></tr>
<tr><td>27</td>		<td>Revision Leave</td>	<td>09/05/2016</td></tr>
<tr><td>28</td>		<td>Exams</td>	<td>16/05/2016</td></tr>
<tr><td>29</td>		<td>Exams</td>	<td>23/05/2016</td></tr>
<tr><td>30</td>		<td>Exams</td>	<td>30/05/2016</td></tr>
<tr><td>31</td>		<td>Field Examination Boards start</td>	<td>06/06/2016</td></tr>
<tr><td>32</td>		<td>Field Examination Boards End</td>	<td>13/06/2016</td></tr>
<tr><td>33</td>		<td>End of term	20/06/2016</td></tr>

</table>
	</pre>		



<?php
require'footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>login teacher</title>

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/fontawesome-all.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>  		
	
</head>

<body>

<section>
	<?php include("user_dashboard.php"); ?>
 </section>


<section>


 <!-- form  --> 



<form action="course_registration.php" method = "post">


<br><br><br><br><br>
<center><h1 class="text-success">Course Registration </h1></center>

<br><br>

<table class="table table-bordered">
 <center>
  <label for="course_code">Enter student's ID : </label>
		<input type="text" name="id" required> </input>
		

<br><br>
<label for="semester">Semester  : </label>	  
<select class="custom-select-sm mb-3" name = "semester"required>
  <option selected>please select your semester ....</option>
   <option>First</option>
   <option>Second</option>
</select>


<label for="year">Year  : </label>	  
<select class="custom-select-sm mb-3" name = "year"required>
  <option selected> select year  ....</option>
   <option>2018</option>
   <option>2019</option>
   <option>2020</option>
   <option>2021</option>
</select>
</center>


<p>(NOTE: press ctrl then select to register in multiple course At a time)</p>

<br><br><br>
  <thead>
    <tr>
      <th scope="col">Course code</th>
      <th scope="col">Course title </th>
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">
      	<select class="custom-select my-1 mr-sm-2" name="course_code[]" multiple="multiple" >
		   <option selected>Select  Course code  </option>
		   <option value="ICT-3101">ICT 3101</option>
		   <option value="ICT-3101">ICT 3101</option>
		   <option value="ICT-3102">ICT 3102</option>
		   <option value="ICT-3103">ICT 3103</option>
		   <option value="ICT-3104">ICT 3104</option>
		   <option value="ICT-4101">ICT 4101</option>
		   <option value="ICT-4102">ICT 4102</option>
		   <option value="ICT-4103">ICT 4103</option>
		   <option value="ICT-4104">ICT 4104</option>
		   <option value="ICT-4105">ICT 4105</option>
		   <option value="ICT-4105">ICT 4105</option>
		   <option value="ICT-4107">ICT 4107</option>
		   <option value="ICT-4108">ICT 4108</option>
		   <option value="ICT-4109">ICT 4109</option>
		   <option value="ICT-4119">ICT 4119</option>		   
		   
		   </select>

      </th>
      <td colspan="2">
      	<select class="custom-select my-1 mr-sm-2" name = "course_title[]"multiple="multiple" >
		  <option selected>Select  Course Title  </option>
		   <option value="Computer and Programming Concepts">Computer and Programming Concepts</option>
		   <option value="Structured Programming Language">Structured Programming Language</option>
		   <option value="Discrete Mathematics">Discrete Mathematics</option>
		   <option value="Object Oriented Programming Language">Object Oriented Programming Language</option>
		   <option value="Data Structures">Data Structures</option>
		   <option value="Theory of Computing & Automata Theory ">Theory of Computing & Automata Theory </option>
		   <option value="Data Structures">Data Structures</option>
		   <option value="Digital Logic Design">Digital Logic Design</option>
		   <option value="Algorithms">Algorithms</option>
		   <option value="System Analysis and Design">System Analysis and Design</option>
		   <option value="Microprocessor and Interfacing ">Microprocessor and Interfacing </option>
		   <option value="Operating Systems  ">Operating Systems </option>
		    <option value="Software Engineering ">Software Engineering</option>
		   <option value="Artificial Intelligence and Expert System">Artificial Intelligence and Expert System  </option>
		  
		</select>
      </td>
    <td>  
				

		 <input type='submit' value="Confirm" name = "add"></input>
		 <input type='submit' value="Delete" name = "delete"></input>
		 
	</td>
    </tr>

 
  </tbody>
</table>
</form>





</section>



</body>

</html>
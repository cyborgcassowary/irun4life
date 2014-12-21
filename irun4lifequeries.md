iRun4Life Database Queries

Select p.firstname FROM


Parents Table:

`id` 
`firstname`
`lastname` 
`email` 
`password`
`active`
`remember_token`
`created_at`
`updated_at`


Parent Student Table:
`id` 
`parent_id`
`student_id`
`created_at`
`updated_at`

Student Table:
`id`
`username`
`firstname`
`lastname`
`password`
`grade` 
`school`
`age`
`active`
`remember_token`
`created_at`
`updated_at`

# gooddeeds
  `id` 
  `deed_name`
  `score` 
  `created_at`
  `updated_at`


# gooddeed_student
`id` 
`gooddeed_id`
`student_id` 
`created_at` 
`updated_at` 

# mileage
  `id` 
  `activity_name`
  `total_miles` 
  `created_at` 
  `updated_at` 
# mileage_student
  `id` 
  `mileage_id`
  `student_id`
  `created_at`
  `updated_at`


#


# COMPLETED Query for Student and his or her Miles

SELECT student.id, student.username, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = 3


Really good query for schools:

SELECT student.id, student.firstname, student.lastname, schools.id , schools.name FROM schools INNER JOIN student ON student.school = schools.id WHERE student.id = 4


# COMPLETED Query Student and his or her Good Deeds

SELECT student.id, student.username, gooddeeds.deed_name FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = 3


# Completed Query for Parent to Student Table Join:

SELECT DISTINCT parent_student.id AS ps_id, student.id AS student_id, student.firstname, student.lastname, parents.id AS parent_id, parents.firstname, parents.lastname FROM parent_student INNER JOIN student ON student.id = parent_student.student_id INNER JOIN parents ON parent_student.parent_id = parents.id WHERE parents.id = 2


## FROM student table

SELECT DISTINCT parent_student.id AS ps_id, student.id AS student_id, student.firstname, student.lastname, parents.id AS parent_id, parents.firstname, parents.lastname FROM student INNER JOIN parent_student ON parent_student.student_id = student.id INNER JOIN parents ON parent_student.parent_id = parents.id


## From Parents Table





# Query for Parent to Student Table Join with additional INNER JOINs with Schools and Grade:

SELECT DISTINCT parent_student.id AS ps_id, student.id AS student_id, student.firstname, student.lastname, schools.name AS school_name, grade.grade, parents.id AS parent_id, parents.firstname, parents.lastname FROM student INNER JOIN parent_student ON parent_student.student_id = student.id INNER JOIN parents ON parent_student.parent_id = parents.id INNER JOIN schools ON schools.id = student.school INNER JOIN grade ON grade.id = student.grade








# Database compares




$posts=DB::table('following')
    ->join('page_posts', 'following.p_id', '=', 'page_posts.p_id')
    ->select('page_posts.*')
    ->where('u_id','=',Auth::User()->id)
    ->orderBy('updated_at','desc')
    ->get();
        return View::make('index')->with('blogposts',$posts);


$posts=following::join('page_posts', 'following.p_id', '=', 'page_posts.p_id')
->select('page_posts.*')
->where('u_id','=',Auth::User()->id)
->orderBy('updated_at','desc')
->get();
    return View::make('index')->with('blogposts',$posts);


$stu = student::join('schools', 'student.school', '=', 'schools.id’)->select('student.id’, ‘student.username’, ‘student.firstname’, ‘student.lastname’, ‘student.grade’, ‘schools.name')->where('student.id', $id)->get();  	return View::make('student.show', compact('stu', 'miles', 'gooddeeds'));  		$miles = DB::select('SELECT DISTINCT student.id, student.username, mileage.id AS mid, mileage.activity_name, mileage.total_miles FROM student INNER JOIN mileage_student ON mileage_student.student_id = student.id INNER JOIN mileage ON mileage.id = mileage_student.mileage_id WHERE student.id = '.$id); 		$gooddeeds = DB::select('SELECT student.id, student.username, gooddeeds.deed_name, gooddeeds.score FROM student INNER JOIN gooddeed_student ON gooddeed_student.student_id = student.id INNER JOIN gooddeeds ON gooddeeds.id = gooddeed_student.gooddeed_id WHERE student.id = '.$id);  		



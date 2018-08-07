<li class="{{ Request::is('general') ? 'active' : '' }}"> {{ link_to_route('students.index','General Information') }}</li>
<li class="{{ Request::is('housing') ? 'active' : '' }}"> {{ link_to_route('housing.index','Housing') }}</li>
<li class="{{ Request::is('courses') ? 'active' : '' }}"> {{ link_to_route('courses.index','Courses') }}</li>
<li class="{{ Request::is('grades') ? 'active' : '' }}"> {{ link_to_route('grades.index','Grades') }}</li>
<li class="{{ Request::is('evaluations') ? 'active' : '' }}"> {{ link_to_route('evaluations.index','Evaluations') }}</li>

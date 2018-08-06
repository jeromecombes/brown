<li class="{{ Request::is('general') ? 'active' : '' }}"> {{ link_to_route('students','General Information') }}</li>
<li class="{{ Request::is('housing') ? 'active' : '' }}"> {{ link_to_route('housing','Housing') }}</li>
<li class="{{ Request::is('courses') ? 'active' : '' }}"> {{ link_to_route('courses','Courses') }}</li>
<li class="{{ Request::is('grades') ? 'active' : '' }}"> {{ link_to_route('grades','Grades') }}</li>
<li class="{{ Request::is('evaluations') ? 'active' : '' }}"> {{ link_to_route('evaluations','Evaluations') }}</li>

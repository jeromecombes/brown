<li class="{{ Request::is('semester') ? 'active' : '' }}"> {{ link_to_route('semester','Semester') }}</li>
@if (session('semester'))
  <li class="{{ Request::is('students') ? 'active' : '' }}"> {{ link_to_route('students','Students') }}</li>
  <li class="{{ Request::is('housing') ? 'active' : '' }}"> {{ link_to_route('housing','Housing') }}</li>
  <li class="{{ Request::is('courses') ? 'active' : '' }}"> {{ link_to_route('courses','Courses') }}</li>
  <li class="{{ Request::is('grades') ? 'active' : '' }}"> {{ link_to_route('grades','Grades') }}</li>
  <li class="{{ Request::is('evaluations') ? 'active' : '' }}"> {{ link_to_route('evaluations','Evaluations') }}</li>
@endif
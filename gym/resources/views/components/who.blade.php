@if (Auth::guard('member')->check())       
    <p  class="text-success">you are logged <Strong>IN</Strong> as a <strong>MEMBER</strong></p>
    
@else

    <p class="text-danger">you are logged <Strong>OUT</Strong> as <strong>User</strong></p>
  
@endif
 
@if (Auth::guard('admin')->check())
            
    <p  class="text-success">you are logged <strong>IN</strong> as a <strong>Admin</strong></p>
    
@else

    <p class="text-danger">you are logged <Strong>OUT</Strong> as <strong>Admin</strong></p>
  
@endif
 
@if (Auth::guard('gym')->check())
            
    <p  class="text-success">you are logged <Strong>IN</Strong> as a <strong>GYM ADMIN</strong></p>
    
@else

    <p class="text-danger">you are logged <Strong>OUT</Strong> as <strong>GYM ADMIN</strong></p>
  
@endif
 

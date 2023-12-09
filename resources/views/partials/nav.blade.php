<div class="nav">
    <input type="checkbox" id="nav-check">
    <div class="nav-header">
      <div class="nav-title">
        NORDIC ROSE
      </div>
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
    
    <div class="nav-links">
      <a href="{{ route('blog') }}" class={{ request()->routeIs('blog') ? "active" : ''}} >BLOG</a>
      <a href="#">ABOUT</a>
      <a href="#">LINKS</a>
      <a href="#">PROJECTS</a>
      @if (auth()->user())
      <a class="dropdown-item" href="{{ route('logout') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
       {{ __('Logout') }}
   </a>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
       @csrf
   </form>
      @endif
      
    </div>
  </div>
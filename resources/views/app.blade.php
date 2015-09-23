<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Roux Academy: Registration</title>
<link href="{{ asset('_css/main.css') }}" rel="stylesheet" media="screen, projection">
<meta name="viewport" content="initial-scale=1.0" />
</script>
</head>
<body id="blogPage">
<header class="blogHeader pageHeader">
  <h1>Roux Academy of Art and Design<a href="{{ url('/home') }}" title="home"></a></h1>
  <nav id="pageNav" class="cf">
    <ul>
      <li><a href="{{ url('/home') }}" title="programs">Programs</a></li>
      <li><a href="{{ url('/home') }}" title="admissions">Admissions</a></li>
      <li><a href="{{ url('/home') }}" title="student portal">Student Portal</a></li>
      <li><a href="{{ url('/home') }}" title="campus portal">Campus</a></li>
      <li><a href="{{ url('/home') }}" title="alumni">Alumni</a></li>
      @if (Auth::check())
      <li><a href="{{asset('auth/logout')}}"  title="Roux Academy Official logout">Logout</a></li>
      @endif     
      
      <li><a href="_source/about/about.htm"  title="about Roux Academy">About</a></li>
    </ul>
  </nav>
</header>
    
@yield('content')
<footer id="pageFooter" class="cf">
  <nav class="footerNav">
    <section class="col">
      <h3>About Roux Academy</h3>
      <div class="col1">
        <ul>
          <li><a href="{{ url('/home') }}" title="Our mission">Mission Statement</a></li>
          <li><a href="{{ url('/home') }}" title="school history">School History</a></li>
          <li><a href="{{ url('/home') }}" title="accreditation and affliates">Accreditation &amp; Affiliates</a></li>
          <li><a href="{{ url('/home') }}" title="board members">Board Members</a></li>
        </ul>
      </div>
      <div class="col2">
        <ul>
          <li><a href="{{ url('/home') }}" title="faculty and staff">Faculty &amp; Staff</a></li>
          <li><a href="{{ url('/home') }}" title="visiting professors">Visiting Professors</a></li>
          <li><a href="{{ url('/home') }}" title="Maribielle Roux Museum">Marbielle Roux Museum</a></li>
          <li><a href="{{ url('/home') }}" title="directions">Map &amp; Directions</a></li>
        </ul>
      </div>
    </section>
    <section class="col">
      <h3>Admissions &amp; Programs</h3>
      <div class="col1">
        <ul>
          <li><a href="{{ url('/home') }}" title="Degree programs">Degree Programs</a></li>
          <li><a href="{{ url('/home') }}" title="course catalog">Course Catalog</a></li>
          <li><a href="{{ url('/home') }}" title="fine art programs">Fine Art Programs</a></li>
          <li><a href="{{ url('/home') }}" title="design concentration">Design Concentration</a></li>
        </ul>
      </div>
      <div class="col2">
        <ul>
          <li><a href="{{ url('/home') }}" title="fashion program">Fashion Program</a></li>
          <li><a href="{{ url('/home') }}" title="product design">Product Design</a></li>
          <li><a href="{{ url('/home') }}" title="Continuing Education">Continuing Education</a></li>
          <li><a href="{{ url('/home') }}" title="tuition and financial aid">Tuition &amp; Financial Aid</a></li>
        </ul>
      </div>
    </section>
    <section class="col">
      <h3>Student Resources</h3>
      <div class="col1">
        <ul>
          <li><a href="{{ url('/home') }}" title="Campus information">Campus Information</a></li>
          <li><a href="{{ url('/home') }}" title="student housing">Student Housing</a></li>
          <li><a href="{{ url('/home') }}" title="transcript request">Transcript Request</a></li>
          <li><a href="{{ url('/home') }}" title="application process">Application Process</a></li>
        </ul>
      </div>
      <div class="col2">
        <ul>
          <li><a href="{{ url('/home') }}" title="portfolio review">Portfolio Review</a></li>
          <li><a href="{{ url('/home') }}" title="career counselling">Career Counselling</a></li>
          <li><a href="{{ url('/home') }}" title="internship programs">Internship Programs</a></li>
          <li><a href="{{ url('/home') }}" title="student portal login">Student Portal Login</a></li>
        </ul>
      </div>
    </section>
  </nav>
  <p>&copy;Copyright  Roux Academy of Art &amp; Design.  All rights reserved. <a href="{{ url('/home') }}" title="privacy statement">Privacy Statement</a> |<a href="{{ url('/home') }}" title="legal terms"> Legal Terms and Conditions</a> |<a href="_source/disclosures.htm" title="student outcomes and disclosures"> Student Outcomes/Disclosures</a></p>
</footer>	
</body>
</html>

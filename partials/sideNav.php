<div id="sidr" class="sidr left">
    <div class="sidrIn">
      <ul>
        <li id="home" class="active"><a onclick='loadNew( this.parentNode.id  , "home" )'>CL Home</a></li>
        <li id="locate"><a onclick='loadNew( this.parentNode.id  , "locations" )'>Change Locations</a></li>
        <li><br></li>
        <li id="cat"><a onclick='loadNew( this.parentNode.id  , "categories" )' >My Categories</a></li>
        <li id="posts"><a onclick='loadNew( this.parentNode.id  , "posts" )'>My Posts</a></li>
        <li id="login"><a onclick='loadNew( this.parentNode.id  , "login" )'>Login/SignUp</a></li>
        <li><br></li>
        <li id="housing"><a onclick='loadNew( this.parentNode.id  , "FakeData/housingResults" )'>Housing</a></li>
        <li id="jobs"><a onclick='loadNew( this.parentNode.id  , "jobs" )'>Jobs</a></li>
        <li id="pers"><a onclick='loadNew( this.parentNode.id  , "personals" )'>Personals</a></li>
        <li id="sale"><a onclick='loadNew( this.parentNode.id  , "sale" )'>For Sale</a></li>
        <li><br></li>
        <li id="forums"><a onclick='loadNew( this.parentNode.id  , "forumsList" )'>Forums</a></li>
        <li id="events"><a onclick='loadNew( this.parentNode.id  , "events" )'>Events</a></li>
        <li style= "height: 300px; overflow: hidden;"><br></li>
       
      </ul>
    </div>
</div>

<script>

$(document).ready( function( ){
if( window.localStorage.getItem( 'username' ) !== null ){
    $('#login').html('<a onclick=\'loadNew( this.parentNode.id  , "login" ) \'>Login/SignUp</a>')
}
else{
     $('#login').html('<br>');
}
});

</script>
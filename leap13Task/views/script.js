    
document.addEventListener("DOMContentLoaded",()=>{ loadTracks();});

 // ajax tracks loading

function loadTracks()
{
    const request = new XMLHttpRequest();
    request.onload = () => {
        addTracksToDOM(JSON.parse(request.responseText));
    }
    request.open('get','../api/tracks/fetchTracks.php');
    request.send();
}

// add loaded tracks to DOM

function addTracksToDOM(json){
    json = Object.values(json);
    json.forEach(track => {
        document.getElementById('TracksContainer').innerHTML  +=
            `<div class="trackDiv card col-6 mb-1 py-4"> 
            <h4> ${track['title']} </h4>
            <button onclick="checkAuth('${track['title']}')" type="button" class="btn btn-primary">Download</button>
            </div>`
    });
}

function closeForm(){
    document.getElementsByClassName('loginError')[0].style.display = 'none'
    document.getElementById('loginForm').classList.toggle('showForm');

}

function downloadTrack(){
    var link = document.createElement('a');
    link.target = '_blank';
    link.href = `../api/tracks/downloadTrack.php?trackTitle=${track}`;
    document.body.appendChild(link); // Required for Firefox
    link.click();
    link.remove();
}

function checkAuth(trackTitle){
    window.track = trackTitle;
    const request = new XMLHttpRequest();
    request.open('post','../api/user/isAuth.php');
    request.setRequestHeader('content-Type','application/x-www-form-urlencoded');
    request.send();
    request.onload = () => {
        if(JSON.parse(request.responseText)){
            downloadTrack();
        }else{
            document.getElementById('loginForm').classList.toggle('showForm');
        }
    }
}

function login(){
   var  data = {
       'username' : document.getElementById('username').value,
       'password' : document.getElementById('password').value,
   }
   const request = new XMLHttpRequest();
   request.open('post','../api/user/login.php');
   request.setRequestHeader('content-Type','application/x-www-form-urlencoded');
   request.send(`username=${data['username']}&password=${data['password']}`);
   request.onload = () => {
        if(JSON.parse(request.responseText)){
            closeForm();
            downloadTrack();
        }else{
            document.getElementsByClassName('loginError')[0].style.display = 'flex'
        }
   }
}

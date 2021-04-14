  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCOLuXau4mjrAoHPuouikZljO57C7oAOQE",
    authDomain: "registration-f02c9.firebaseapp.com",
    projectId: "registration-f02c9",
    storageBucket: "registration-f02c9.appspot.com",
    messagingSenderId: "871692680552",
    appId: "1:871692680552:web:113e720f23c92ff3402add"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

    const auth = firebase.auth();

    function signUp(){

        var email = document.getElementById("email");
        var password = document.getElementById("password");

        const promise = auth.createUserWithEmailAndPassword(email.value, password.value);
        promise.catch(e => alert(e.message));

        alert("Successfully Registered!");
    }

    function signIn(){

        var email = document.getElementById("email");
        var password = document.getElementById("password");

        const promise = auth.signInWithEmailAndPassword(email.value, password.value);
        promise.catch(e => alert(e.message));
        

    }

    function signOut() {
        auth.signOut();
        alert("Successfully Logged Out!");
    }

    auth.onAuthStateChanged(function(user) {
        if(user) {
            var email = user.email;
            alert("Loggin in user: " + email);
            window.location.href = "/index.html"
            
        } else {
            alert("No Active User");
        }

    });


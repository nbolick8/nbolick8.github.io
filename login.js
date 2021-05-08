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
        auth.signInWithEmailAndPassword(email.value, password.value);

        setTimeout(() => { window.location.href = "index.html"; }, 500);
    }

    function signIn(){

        var email = document.getElementById("email");
        var password = document.getElementById("password");

        const promise = auth.signInWithEmailAndPassword(email.value, password.value);
        promise.catch(e => alert(e.message));
        setTimeout(() => { window.location.href = "index.html"; }, 500);
    }

    function signOut() {
        auth.signOut();
        alert("Successfully Logged Out!");
    }

    auth.onAuthStateChanged(function(user) {
        if(user) {
            
        } else {
            if(document.URL.includes("login.html")) {

            } 
            else if (document.URL.includes("register.html")) {

            }
            else {
                window.location.href = "login.html";
            }
        }

    });

firebase.auth().createUserWithEmailAndPassword(email, password)
  .then(function(user) {
    // get user data from the auth trigger
    const userUid = user.uid; // The UID of the user.
    const email = user.email; // The email of the user.

    // set account  doc  
    const account = {
      useruid: userUid,
      calendarEvents: []
    }
    firebase.firestore().collection('accounts').doc(userUid).set(account); 
  })
  .catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;
    // ...
  });

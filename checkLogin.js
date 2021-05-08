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

auth.onAuthStateChanged(function(user) {
    if(!user) {
        window.location.href = "login.html"
    }
});
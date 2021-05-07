// Initialize Firebase
// TODO: Replace with your project's customized code snippet
const config = {
  // Replace with API Key and Project ID
   apiKey: "AIzaSyCOLuXau4mjrAoHPuouikZljO57C7oAOQE",  
   projectId: "registration-f02c9"  
};
/* end replace */
firebase.initializeApp(config);

// Initialize Cloud Firestore through Firebase
const db = firebase.firestore();
const settings = {
  timestampsInSnapshots: true
};
db.settings(settings);


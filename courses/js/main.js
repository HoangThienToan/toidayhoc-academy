// import { getStorage } from "firebase/storage";
// const app = initializeApp(firebaseConfig);
// // Initialize Cloud Storage and get a reference to the service
// const storage = getStorage(app);
// import { getStorage, ref } from "firebase/storage";
// // Create a reference to 'mountains.jpg'
// const mountainsRef = ref(storage, 'mountains.jpg');

// // Create a reference to 'images/mountains.jpg'
// const mountainImagesRef = ref(storage, 'images/mountains.jpg');

// // While the file names are the same, the references point to different files
// mountainsRef.name === mountainImagesRef.name;           // true
// mountainsRef.fullPath === mountainImagesRef.fullPath;   // false 

// function e() {
//     var storageRef = firebase.storage().ref('toan/' + thumb.name);
//     var task = storageRef.put(file);
//     task.on('state_changed', function progress(snapshot) {
//         var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
//         uploader.value = percentage;

//     }, function error(err) {


//     }, function complete() {

//     });
// };  
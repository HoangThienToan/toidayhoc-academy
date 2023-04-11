
$(document).ready(function () {
    /**
 * @return {!Object} The FirebaseUI config.
 */


    function getUiConfig() {
        return {
            callbacks: {
                // Called when the user has been successfully signed in.
                'signInSuccess': function (user, credential, redirectUrl) {
                    handleSignedInUser(user);
                    // Do not redirect.
                    var Name = user.displayName;
                    var Email = user.email;
                    var Phone = user.phoneNumber;
                    var uid = user.uid;
                    let Form = new FormData();
                    Form.append("Name", Name);
                    Form.append("Email", Email);
                    Form.append("Phone", Phone);
                    Form.append("uid", uid);
                    $.ajax({
                        type: "POST",
                        url: 'loginGG.php',
                        dataType: "text",
                        async: false,
                        enctype: 'multipart/form-data',
                        processData: false,
                        contentType: false,
                        data: Form,
                        success: function (data) {
                            if (data == 'Acc PhoneNumber') {
                                // window.location.replace("newAccPhone.php");
                            } else {
                                window.location.replace("index.php");
                            }
                        }
                    });
                    return false;
                }
            },
            // Opens IDP Providers sign-in flow in a popup.
            signInFlow: 'popup',
            signInOptions: [
                // The Provider you need for your app. We need the Phone Auth

                firebase.auth.FacebookAuthProvider.PROVIDER_ID,
                firebase.auth.GoogleAuthProvider.PROVIDER_ID,
                {
                    provider: firebase.auth.PhoneAuthProvider.PROVIDER_ID,
                    recaptchaParameters: {
                        //size: getRecaptchaMode()
                        type: 'image',
                        size: 'invisible',
                        badge: 'bottomleft'
                    }
                }
            ],
            // Terms of service url.
            'tosUrl': 'https://www.google.com'
        };
    }

    // Initialize the FirebaseUI Widget using Firebase.
    var ui = new firebaseui.auth.AuthUI(firebase.auth());

    /**
     * Displays the UI for a signed in user.
     * @param {!firebase.User} user
     */
    var handleSignedInUser = function (user) {
        // document.getElementById('user-signed-in').style.display = 'block';
        // document.getElementById('user-signed-out').style.display = 'none';
        // document.getElementById('name').textContent = user.displayName;
        // document.getElementById('email').textContent = user.email;
        // document.getElementById('phone').textContent = user.phoneNumber;
        // if (user.photoURL) {
        //     document.getElementById('photo').src = user.photoURL;
        //     document.getElementById('photo').style.display = 'block';
        // } else {
        //     document.getElementById('photo').style.display = 'none';
        // }

    }

    /**
     * Displays the UI for a signed out user.
     */
    var handleSignedOutUser = function () {
        document.getElementById('user-signed-in').style.display = 'none';
        document.getElementById('user-signed-out').style.display = 'block';
        ui.start('#firebaseui-container', getUiConfig());



    };


    // Listen to change in auth state so it displays the correct UI for when
    // the user is signed in or not.
    firebase.auth().onAuthStateChanged(function (user) {
        document.getElementById('loading').style.display = 'none';
        document.getElementById('loaded').style.display = 'block';
        user ? handleSignedInUser(user) : handleSignedOutUser();
    });

    /**
     * Deletes the user's account.
     */
    var deleteAccount = function () {
        localStorage.clear();
        var cookies = document.cookie.split(";");

        for (var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            var eqPos = cookie.indexOf("=");
            var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
        console.log(' da vao')
        // firebase.auth().unauth();


        firebase.auth().currentUser.delete().catch(function (error) {
            if (error.code == 'auth/requires-recent-login') {
                // The user's credential is too old. She needs to sign in again.
                firebase.auth().signOut().then(function () {
                    debugger;


                    window.location.href = "signin.php";
                }).catch(function (error) {
                    console.log(error)
                });
            }
        });
    };

    /**
     * Initializes the app.
     */
    var initApp = function () {
        document.getElementById('sign-out').addEventListener('click', function () {
            firebase.auth().signOut();
        });
        document.getElementById('delete-account').addEventListener(
            'click', function () {
                deleteAccount();
            });
    };
    firebase.auth().signOut();
    window.addEventListener('load', initApp);

})

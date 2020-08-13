import app from 'firebase/app';
import 'firebase/database';
const config = {
    apiKey: "AIzaSyCntxgi0GucmuWjunldhAOybc-ahbCm6t8",
    authDomain: "inventory-97505.firebaseapp.com",
    databaseURL: "https://inventory-97505.firebaseio.com",
    projectId: "inventory-97505",
    storageBucket: "inventory-97505.appspot.com",
    messagingSenderId: "380678154977",
    appId: "1:380678154977:web:895313ed4c129923ff25a0"
};
class Firebase {
    constructor() {
        app.initializeApp(config);
        this.db = app.database();
    }
}

export default Firebase;
const consts = require('./consts'),    // LOCAL MODULE
      mongoose = require('mongoose');  // GLOBAL MODULE

mongoose.connect(consts.MONGODB_KEY,
                {dbName: 'testDB', autoReconnect: true, useNewUrlParser: true}
                );

const conn = mongoose.connection;

// To Prevent Warning Message
mongoose.set('userCreateIndex', true);

// When successfully connected
conn.on('connected', () => {
    console.log('Mongoose default connection open to ' + consts.MONGODB_KEY);
});

// If the connection throws an error
conn.on('error', (err) => {
    console.log('Mongoose default connection error: ' + err);
});

// When the connection is disconnected
conn.on('disconnected', () => {
    console.log('Mongoose default connection disconnected');
});

// If the Node process ends, close the Mongoose connection
process.on('SIGINT', () => {
    conn.close(() => {
        console.log('Mongoose default connection disconnected through app termination');
        process.exit(0);
    });
});
